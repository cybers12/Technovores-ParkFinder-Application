const { json, urlencoded } = require('express');
var express = require('express');
var router = express.Router();

var path = require('path');
var mysql = require('mysql');
var router = express.Router();

var dotenv = require('dotenv');
dotenv.config({ path:' ../.././.env'});

var Authcontroller = require('../../Controllers/AppMobileControllers/Auth');
var usersProfileInfos = require('../../Controllers/AppMobileControllers/profile')

const verifyToken = require('../tokenVerification/tokenVerify');

/* Post SignIn/SignUp Page. */
router.post('/api/oauth2', Authcontroller.oauth);

router.post('/api/register', Authcontroller.register);

router.post('/api/logout',Authcontroller.logout)

router.get('/api/profile', usersProfileInfos.profileUser);


module.exports = router;
