var mysql = require('mysql');

var path = require('path');

// public foldeer
var app = require('../app.js')
var express = require('express');


// JWT for tokens
const jwt = require('jsonwebtoken');
var jwtDedcode = require('jwt-decode');
// to hash the password
const byrpt = require('bcryptjs');

const { PrismaClient } = require('@prisma/client');
const prisma = new PrismaClient()

exports.updatePlacesStatus = async (req, res) => {
    try {
        const { id, state } = req.query;
        await prisma.place.update({
            where: {
                id,
            },
            data: {
                state,
            }
        })
        
        return res.json({ "res": "updated successfully" }).status(200)
    } catch (error) {
        console.log(error)
    }

}