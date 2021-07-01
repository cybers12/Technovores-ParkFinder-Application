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

exports.deleteUsers = async (req, res) => {
    console.log(parseInt(req.params.id))
    await prisma.users.update({
        where: {
            id: parseInt(req.params.id)
        },
        data: {
            stateAccount: "deleted"
        }
    })

    return res.json({ "user : ": req.params.username + " Was delete successfully" });


}
exports.blockUsers = async (req, res) => {
    console.log(parseInt(req.params.id))
    await prisma.users.update({
        where: {
            id: parseInt(req.params.id)
        },
        data: {
            stateAccount: "blocked"
        }
    });
    return res.json({"user": req.params.id + " Was blocked successfully"});

}
exports.authorizeUsers = async (req, res) => {
    console.log(parseInt(req.params.id))
    await prisma.users.update({
        where: {
            id: parseInt(req.params.id)
        },
        data: {
            stateAccount: 'authorized'
        }
    });
    return res.json({"user": req.params.id + " Was authorized successfully"});

}