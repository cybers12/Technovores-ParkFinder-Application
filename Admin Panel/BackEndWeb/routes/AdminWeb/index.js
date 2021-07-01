const { json, urlencoded } = require('express');
var express = require('express');
var router = express.Router();

var path = require('path');
var mysql = require('mysql');
var router = express.Router();

var dotenv = require('dotenv');
dotenv.config({ path:' ../.././.env'});

var adminAuthController = require('../../Controllers/AdminWebControllers/Auth');
var adminAnalaticsController = require('../../Controllers/AdminWebControllers/Analytics');
var adminUsersController = require('../../Controllers/AdminWebControllers/users');
var adminReservationsController = require('../../Controllers/AdminWebControllers/booking/reservations');
var adminSchemaparkingsController = require('../../Controllers/AdminWebControllers/booking/schemaParkings');
var adminDeleteUsersController = require('../../Controllers/AdminWebControllers/actionsUsers');
var adminProfileInfos = require('../../Controllers/AdminWebControllers/profile');
var adminChangePassword = require('../../Controllers/AdminWebControllers/changePassword');

var SuperAdminAddParking = require('../../Controllers/AdminWebControllers/SuperAdmin/addParking');

var SuperAdminAddAdmin= require('../../Controllers/AdminWebControllers/SuperAdmin/addAdmin');

var SuperAdminAdmins= require('../../Controllers/AdminWebControllers/SuperAdmin/admins');



const verifyToken = require('../tokenVerification/tokenVerify');

router.post('/api/tokenVerification',verifyToken,adminAuthController.tokenVerification)

/* GET home page. */
router.post('/api/oauth2', adminAuthController.oauth);

router.post('/api/register', adminAuthController.register);

router.get('/api/analytics',verifyToken, adminAnalaticsController.analysis);

router.get('/api/users',verifyToken, adminUsersController.users);

router.get('/api/reservations',verifyToken, adminReservationsController.reservations);

router.get('/api/parkingsSchema/',verifyToken, adminSchemaparkingsController.schemaParking);


router.delete('/api/actions/delete/:id',verifyToken, adminDeleteUsersController.deleteUsers);

router.post('/api/actions/block/:id',verifyToken, adminDeleteUsersController.blockUsers);

router.post('/api/actions/autorize/:id',verifyToken, adminDeleteUsersController.authorizeUsers);

router.get('/api/profile',verifyToken, adminProfileInfos.profileAdmin);

router.post('/api/ModifyAccount',verifyToken, adminProfileInfos.addInfosAdmin);

router.post('/api/changePassword',verifyToken, adminChangePassword.changePassword);

/* super Admin Routes */
router.post('/api/addParking',verifyToken, SuperAdminAddParking.addParking);

router.post('/api/addAdmin',verifyToken, SuperAdminAddAdmin.addAdmin);

router.get('/api/admins',verifyToken, SuperAdminAdmins.admins);

router.delete('/api/admins/actions/delete/:id',verifyToken, SuperAdminAdmins.deleteAdmin);

router.post('/api/admins/actions/block/:id',verifyToken, SuperAdminAdmins.blockAdmin);

router.post('/api/admins/actions/authorize/:id',verifyToken, SuperAdminAdmins.authorizeAdmin);



var iotController = require('../../Controllers/iot');

router.get('/api/iot',iotController.updatePlacesStatus)



/* Super Admin */ 






module.exports = router;
