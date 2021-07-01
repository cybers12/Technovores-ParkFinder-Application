var mysql = require('mysql');
var dotenv = require('dotenv');
dotenv.config({ path: ' ../.././.env' });
var path = require('path');

// public foldeer
var app = require('../../../app.js')
var express = require('express');

// JWT for tokens
const jwt = require('jsonwebtoken');

// to hash the password
const byrpt = require('bcryptjs');

const { PrismaClient } = require('@prisma/client');
const prisma = new PrismaClient()

exports.reservations = async (req, res) => {
    const reservationsList = await prisma.reservation.findMany({
         include:{
            car:true,
            users:{
                select :{
                    stateAccount:true,
                }
            },
            place_placeToreservation_id_place: {
                include:{
                    parkings:true,
                }
            },    
         }
    });
    return res.json(reservationsList);

}