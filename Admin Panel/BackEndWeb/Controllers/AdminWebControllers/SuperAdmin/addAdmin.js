var mysql = require('mysql');
var dotenv = require('dotenv');
dotenv.config({ path: ' ../../.././.env' });
var path = require('path');

// public foldeer
var app = require('../../.././app.js')
var express = require('express');


// JWT for tokens
const jwt = require('jsonwebtoken');
var jwtDedcode = require('jwt-decode');
// to hash the password
const byrpt = require('bcryptjs');

const { PrismaClient } = require('@prisma/client');
const prisma = new PrismaClient()

exports.addAdmin = async (req, res) => {
    const {FirstName,LastName,NumberPhone,role,address,City,Country} =req.body;
    const token = req.header('jwToken');

    try {
        const SuperAdminAccessInfos = await prisma.admins.findUnique({
            where: {
                Email:jwtDedcode(token).Email,
            }
        })
        if (SuperAdminAccessInfos.role == "superAdmin"){ 
            try {
                const users = await prisma.admins.findMany({ where: { Email: FirstName + "." + LastName + "@parkFinder.com" } });
    
                if (users.length > 0) { // check if the email already exist
                    return res.send('admin already exist!');
                }
                // insert new account to database if all valid
                let passwordHashed = await byrpt.hash(FirstName + "@admin", 10);
                await prisma.admins.create({ data: { FirstName, LastName, Email: FirstName + "." + LastName + "@parkFinder.com", NumberPhone:parseInt(NumberPhone), password: passwordHashed,role,address,City,Country } });

            } catch (error) {
                console.log(error)
            }
            return res.json({"res":"Admin added successfully"}).status(200)
        }
        else{
            return res.json({"res":"You don't have permission to this action"}).status(403)
        }
    } catch (error) {
        console.log(error)
    }
}