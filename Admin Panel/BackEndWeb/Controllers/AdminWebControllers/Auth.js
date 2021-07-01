var mysql = require('mysql');
var dotenv = require('dotenv');
dotenv.config({ path: ' ../.././.env' });
var path = require('path');

// public foldeer
var app = require('../.././app.js')
var express = require('express');
var jwtDedcode = require('jwt-decode');
// JWT for tokens
const jwt = require('jsonwebtoken');

// to hash the password
const byrpt = require('bcryptjs');

const { PrismaClient } = require('@prisma/client');
const prisma = new PrismaClient()

exports.oauth = async (req, res) => {
    const { email, password, urlOfRequest } = req.body;
    var redirectUrl = urlOfRequest;
    try {
        const passwordOfThisEmail = await prisma.admins.findUnique({
            where: {
                Email: email
            }
        })
        if (passwordOfThisEmail != null) {
            
            byrpt.compare(password, passwordOfThisEmail.password).then(async (result) => {
                if (result === true) {
                    const UserInfo = await prisma.admins.findUnique({
                        where: {
                            Email: email
                        }
                    })

                    // create Token for the user
                
                    jwt.sign({ Email: UserInfo.Email }, process.env.TOKEN_SECRET, (err, token) => {
                        
                        return res.json({ 'jwToken': token, "redirectTo": redirectUrl })
                    })

                    //return res.send(`Welcome ${UserInfo.FirstName}`)
                } else {
                    return res.send('password is invalid')
                }
            })
        }
        else {
            return res.send("email doesn't exist")
        }
    } catch (error) {
        console.log(error)
    }
}

exports.register = async (req, res) => {
    const { FirstName, LastName, NumberPhone } = req.body;
    try {
        const users = await prisma.admins.findMany({ where: { Email: FirstName + "." + LastName + "@parkFinder.com" } });


        if (users.length > 0) { // check if the email already exist
            return res.send('admin already exist!');
        }


        // insert new account to database if all valid
        let passwordHashed = await byrpt.hash(FirstName + "@admin", 10);
        await prisma.admins.create({ data: { FirstName, LastName, Email: FirstName + "." + LastName + "@parkFinder.com", NumberPhone: parseInt(NumberPhone), password: passwordHashed } });

        // create Token for the user
        return res.status(200).send('admin was created successfully')

    } catch (error) {
        console.log(error)
    }
}

exports.tokenVerification = async (req, res) => {
    return res.send('valid Token').status(200)
}