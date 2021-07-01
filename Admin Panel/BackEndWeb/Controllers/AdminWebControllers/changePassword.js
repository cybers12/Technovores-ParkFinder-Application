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

exports.changePassword = async (req, res) => {

    const {Email,password,NewPassword} = req.body;
    try {

        const passwordOfThisEmail = await prisma.admins.findUnique({
            where: {
                Email,
            }
        })

        byrpt.compare(password, passwordOfThisEmail.password).then(async (result) => {
            if (result === true) {
                await prisma.admins.update({
                    where: {
                        Email,
                    },
                    data:{
                        password: await byrpt.hash(NewPassword, 10),
                    }
                })

                // create Token for the user
                return res.json({"res":'password Changed successfully'}).status(200);
                //return res.send(`Welcome ${UserInfo.FirstName}`)
            } else {
                return res.json({"res":'The password is incorrect'}).status(200);
            }
        })


    }
    catch (error) {
        console.log(error)
    }
}