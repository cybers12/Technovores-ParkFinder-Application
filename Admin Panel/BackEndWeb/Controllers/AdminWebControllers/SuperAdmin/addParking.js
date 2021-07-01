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

exports.addParking = async (req, res) => {
    const {id,Name,city,NbPlace,description,coordX,coordY} =req.body;
    const token = req.header('jwToken');
    var idParking = id;
    try {
        const SuperAdminAccessInfos = await prisma.admins.findUnique({
            where: {
                Email:jwtDedcode(token).Email,
            }
        })
        if (SuperAdminAccessInfos.role == "superAdmin"){ 
            await prisma.parkings.create({
                data: { id,Name,city,NbPlace:parseInt(NbPlace),description,coordX:parseFloat(coordX),coordY:parseFloat(coordY),
                }
            })    
            for (let place = 1; place <= parseInt(NbPlace); place++) {       
                await prisma.place.create({
                    data: {
                        id:place.toString()+"/"+id,
                        state:"free",
                        id_parking:idParking
                    }
                })               
            }
            return res.json({"res":"Parking successfully added"}).status(200)
        }
        else{
            return res.json({"res":"You don't have permission to this action"}).status(403)
        }

        


    } catch (error) {
        console.log(error)
    }



}