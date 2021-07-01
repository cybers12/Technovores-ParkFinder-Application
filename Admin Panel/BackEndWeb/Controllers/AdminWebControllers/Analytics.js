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



exports.analysis = async (req, res) =>{
    const reservationsTotal = await prisma.reservation.count()
    const placeDetails = await prisma.place.groupBy({
        by: ['state'],
        _count:{
            id:true,
        }
    })

    const TotalUsers = await prisma.users.count()
    const pointsOfUsers = await prisma.users.aggregate({
        _sum:{
            NbPoints:true,
        }
    })
    const LatestReservations = await prisma.reservation.findMany({
        include:{
            car:true,
            place_placeToreservation_id_place:true,
        },
        orderBy:{
            dateTime_start_reservation:"desc",
        },
        take:5,
    })

    const countUsersConnected = await prisma.users.count({
        where: {
            isConnected:true,
        }
    })
    return res.json({"TotalReservations" : reservationsTotal,"state":placeDetails,"TotalUsers":TotalUsers,"TotalPointsOfUsers":pointsOfUsers,"latestReservations":LatestReservations,"countUsersConnected":countUsersConnected})
}