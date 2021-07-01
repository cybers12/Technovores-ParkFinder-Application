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

exports.profileAdmin = async (req, res) => {

    const adminProfile = await prisma.admins.findMany({
        where: {
            Email: jwtDedcode(req.header('jwToken')).Email,
        }
    })
    return res.json(adminProfile).status(200);
}

exports.addInfosAdmin = async (req, res) => {
    const { City, Country, address } = req.body;

    try {
        await prisma.admins.update({
            where: {
                Email: jwtDedcode(req.header('jwToken')).Email,
            },
            data: {
                City,
                Country,
                address,
            }
        })
        return res.json({ "res": "Profile updated successfully" })
    }
    catch (error) {
        console.log(error)
        return res.json({ "res": "Something went wrong" })
    }
}