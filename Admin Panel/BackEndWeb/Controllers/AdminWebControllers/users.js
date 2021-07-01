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

exports.users = async (req, res) => {
    const usersList = await prisma.users.findMany({
         where:{
             NOT:{
                stateAccount:'deleted'
             }
         }
    });
    return res.json(usersList);

}