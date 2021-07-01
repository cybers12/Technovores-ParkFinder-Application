var mysql = require('mysql');
var dotenv = require('dotenv');
dotenv.config({ path: ' ../.././.env' });
var path = require('path');
var jwtDedcode = require('jwt-decode');

// public foldeer
var app = require('../.././app.js')
var express = require('express');

// JWT for tokens
const jwt = require('jsonwebtoken');

// to hash the password
const byrpt = require('bcryptjs');

const { PrismaClient } = require('@prisma/client');
const prisma = new PrismaClient()

exports.profileUser = async (req, res) => {

    if (jwtDedcode(req.header('jwToken')).username) {
        
        const adminProfile = await prisma.users.findMany({
            where: {
                username: jwtDedcode(req.header('jwToken')).username,
            }
        })
        return res.json(adminProfile).status(200);
    }
    else {
        
        const adminProfile = await prisma.users.findMany({
            where: {
                Email: jwtDedcode(req.header('jwToken')).Email,
            }
        })
        return res.json(adminProfile).status(200);
    }


}