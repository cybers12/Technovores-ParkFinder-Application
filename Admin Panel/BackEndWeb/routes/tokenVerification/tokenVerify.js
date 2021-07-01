const jwt = require('jsonwebtoken');

var dotenv = require('dotenv');
dotenv.config({ path:' ../.././.env'});


module.exports =  function (req,res,next){
    
    const token = req.header('jwToken');
    
    if (!token) return res.status(401).send('need to login')

    try {
        const verify = jwt.verify(token,process.env.TOKEN_SECRET)
        req.UserInfo = verify
        next()
    } catch (error) {
        return res.status(400).send('Invalid Token')
    }
}