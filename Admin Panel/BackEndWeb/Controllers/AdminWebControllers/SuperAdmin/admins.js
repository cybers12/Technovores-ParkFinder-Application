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

exports.admins = async (req, res) => {
    //const {Name,city,NbPlace,description,coordX,coordY} =req.body;
    const token = req.header('jwToken');

    try {
        const SuperAdminAccessInfos = await prisma.admins.findUnique({
            where: {
                Email: jwtDedcode(token).Email,
            },
            
        })
        if (SuperAdminAccessInfos.role == "superAdmin") {
            const adminsList = await prisma.admins.findMany({
                where: {
                    role:"admin",
                    NOT:{
                        status:'deleted'
                    }
                },
                
            })
            return res.json(adminsList).status(200)
        }
        else {
            return res.json({ "res": "You don't have permission to this action" }).status(403)
        }
    } catch (error) {
        console.log(error)
    }
}
exports.blockAdmin = async (req, res) => {
    //const {Name,city,NbPlace,description,coordX,coordY} =req.body;
    const token = req.header('jwToken');

    try {
        const SuperAdminAccessInfos = await prisma.admins.findUnique({
            where: {
                Email: jwtDedcode(token).Email,
            }
        })
        if (SuperAdminAccessInfos.role == "superAdmin") {
            await prisma.admins.update({
                where: {
                    id:parseInt(req.params.id),
                },
                data:{
                    status:"blocked",
                }
            })
            return res.json({ "res":" admin was blocked" }).status(200)
        }
        else {
            return res.json({ "res": "You don't have permission to this action" }).status(403)
        }




    } catch (error) {
        console.log(error)
    }



}
exports.authorizeAdmin = async (req, res) => {
    //const {Name,city,NbPlace,description,coordX,coordY} =req.body;
    const token = req.header('jwToken');

    try {
        const SuperAdminAccessInfos = await prisma.admins.findUnique({
            where: {
                Email: jwtDedcode(token).Email,
            }
            
        })
        console.log(SuperAdminAccessInfos);
        if (SuperAdminAccessInfos.role == "superAdmin") {
            await prisma.admins.update({
                where: {
                    id:parseInt(req.params.id),
                },
                data:{
                    status:"authorized",
                }
            })
            return res.json({ "res":" admin was authorized" }).status(200)
        }
        else {
            return res.json({ "res": "You don't have permission to this action" }).status(403)
        }




    } catch (error) {
        console.log(error)
    }



}
exports.deleteAdmin = async (req, res) => {
    //const {Name,city,NbPlace,description,coordX,coordY} =req.body;
    const token = req.header('jwToken');

    try {
        const SuperAdminAccessInfos = await prisma.admins.findUnique({
            where: {
                Email: jwtDedcode(token).Email,
            }
        })
        if (SuperAdminAccessInfos.role == "superAdmin") {
            await prisma.admins.update({
                where: {
                    id:parseInt(req.params.id),
                },
                data:{
                    status:"deleted",
                }
            })
            return res.json({ "res":" admin was authorized" }).status(200)
        }
        else {
            return res.json({ "res": "You don't have permission to this action" }).status(403)
        }


    } catch (error) {
        console.log(error)
    }



}