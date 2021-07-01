
var mysql = require('mysql');
var dotenv = require('dotenv');
dotenv.config({ path: ' ../.././.env' });
var path = require('path');


// public foldeer
var app = require('../.././app.js')
var express = require('express');

// JWT for tokens
const jwt = require('jsonwebtoken');

// to hash the password
const byrpt = require('bcryptjs');

const { PrismaClient } = require('@prisma/client');
const prisma = new PrismaClient()

exports.oauth = async (req, res) => {
    const { email, password, username } = req.body;

    try {
        const passwordOfThisEmail = await prisma.users.findMany({
            where: {
                OR: [
                    {
                        Email: email,
                    },
                    {
                        username: username
                    },
                ]
            }
        })
        if (passwordOfThisEmail[0] != null) {
            byrpt.compare(password, passwordOfThisEmail[0].password).then(async (result) => {
                if (result === true) {
                    const UserInfo = await prisma.users.findMany({
                        where: {
                            OR: [
                                {
                                    Email: email,
                                },
                                {
                                    username: username
                                },
                            ]
                        }
                    })
                    
                    // create Token for the user
                    if (username) {
                        if (!UserInfo[0].isConnected) {
                            jwt.sign({ username: UserInfo[0].username }, process.env.TOKEN_SECRET, (err, token) => {
                                return res.json({ 'access_token': token })
                            })
                            await prisma.users.update({
                                where: {
                                    username
                                },
                                data: {
                                    isConnected: true,
                                }
                            })
                        }
                        else {
                            return res.send('You are already connected from another device')
                        }
                    }
                    else {
                        if (!UserInfo[0].isConnected) {
                            
                            jwt.sign({ email: UserInfo[0].Email }, process.env.TOKEN_SECRET, (err, token) => {
                                return res.json({ 'access_token': token })
                            })
                            await prisma.users.update({
                                where: {
                                    Email:email
                                },
                                data: {
                                    isConnected: true,
                                }
                            })
                        }
                        else {
                            return res.send('You are already connected from another device')
                        }
                    }


                    //return res.send(`Welcome ${UserInfo.FirstName}`)
                } else {
                    return res.send('password is invalid')
                }
            })
        }
        else {
            return res.send("email or username doesn't exist")
        }
    } catch (error) {
        console.log(error)
    }
}

exports.register = async (req, res) => {
    const { email, username, password, confimPassword } = req.body;
    try {
        const users = await prisma.users.findMany({ where: { Email: email } });
        const userByUsername = await prisma.users.findMany({ where: { username } });

        if (users.length > 0) { // check if the email already exist
            return res.send('email already exist!');
        }

        if (userByUsername.length > 0) { // check if the email already exist
            return res.send('username already exist!');
        }

        else if (password !== confimPassword) { // check if the password match
            return res.send('password does not match!')
        }
        

        // insert new account to database if all valid
        let passwordHashed = await byrpt.hash(password, 10);
        await prisma.users.create({ data: { username, Email: email, password: passwordHashed } });

        // create Token for the user
        return res.status(200).send('Your Account was created successfully')

    } catch (error) {
        console.log(error)
    }
}

exports.logout = async (req, res) => {
     const  jwToken  = req.header('jwToken');
     var tokenDecode  = jwt.decode(jwToken)

    await prisma.users.update({
        where: {
            username : Object.values(tokenDecode)[0]
        },
        data: {
            isConnected: false,
        }
    })
    return res.send("redirect").status(200);
}