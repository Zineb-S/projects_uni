const express = require('express')
const mysql = require('mysql')
//const http = require('http')
//const fetch = require('node-fetch')
const jwt = require('jsonwebtoken')
const cors = require('cors')
const app = express()
app.use(express.json())
app.use(cors());
let refreshTokens = []

const db = mysql.createConnection({
    host: "localhost",
    user: "root",
    database: "ecitizen"
})

// GET ALL USERS 
app.get('/api/users', (req, res) => {
    //res.status(200).json(ambulances)
    db.query("SELECT * FROM users",
        function (err, result) {
            if (err) throw err;
            console.log(result)
            res.status(200).json(result)
        }
    )
})
// GET USER BY ID
app.get('/api/users/:id', (req, res) => {
    //res.status(200).json(ambulances)
    db.query("SELECT * FROM users where user_id='" + req.params.id + "' ",
        function (err, result) {
            if (err) throw err;
            console.log(result)
            res.status(200).json(result)
        }
    )
})
// CREATE NEW USER
app.post('/api/users', function (req, res) {
    db.query("INSERT INTO `users`(`user_id`, `user_email`, `user_password`, `user_first_name`, `user_last_name`, `user_role`) VALUES (NULL,'" + req.body.email + "','" + req.body.password + "','" + req.body.fname + "','" + req.body.lname + "',,'" + req.body.role + "')",
        function (err, result) {
            if (err) { throw err; }
            console.log(result)
            res.status(200).json(result)
        }
    )
})


// REFRESH TOKEN 


app.post("/api/refresh", (req, res) => {
    // take the refresh token from the user 
    console.log("array 2 = " + refreshTokens)
    const refreshToken = req.body.token
    console.log("ref token sent ", refreshToken)
    //send error if there is no token 

    if (!refreshToken) { return res.status(401).json("You are not authenticated !") }
    if (!refreshTokens.includes(refreshToken)) { return res.status(401).json("Refresh Token is not valid !") }
    jwt.verify(refreshToken, "myRefreshSecretKey", (err, user) => {
        err && console.log(err);
        refreshTokens = refreshTokens.filter(token => token !== refreshToken);
        const newAccessToken = generateAccessToken(user)
        const newRefreshToken = generateRefreshToken(user)

        refreshTokens.push(newRefreshToken)

        res.status(200).json({
            accessToken: newAccessToken, refreshToken: newRefreshToken
        })
    })
    // if all is OK , create new access token ,refresh token and send to user 


})

const generateAccessToken = (user) => {
    console.log("generateAccessToken" + user.user_id)
    return jwt.sign({ id: user.user_id, role: user.user_role }, "mySecretKey", { expiresIn: "15m" })

}
const generateRefreshToken = (user) => {
    console.log("generateRefreshToken" + user.user_id)
    return jwt.sign({ id: user.user_id, role: user.user_role }, "myRefreshSecretKey")

}
// GET LOGIN CREDENTIALS 

app.post("/api/login", (req, res) => {

    db.query("SELECT * FROM users where user_email='" + req.body.email + "'and user_password ='" + req.body.password + "'",
        function (err, result) {
            if (err) {
                res.status(400).json("Incorrect Email or Password !")
                throw err
            }
            else {
                console.log(result)
                const accessToken = generateAccessToken(result[0])
                const refreshToken = generateRefreshToken(result[0])

                refreshTokens.push(refreshToken)
                console.log("array 1 = " + refreshTokens)
                res.status(200).json
                    ({
                        email: result[0].user_email,
                        password: result[0].user_password,
                        role: result[0].user_role,
                        accessToken, refreshToken
                    })
            }
        }
    )
}
)
// VERIFY JWT TOKEN 

const verify = (req, res, next) => {
    const authHeader = req.headers.authorization;

    if (authHeader) {

        const token = authHeader.split(" ")[1];
        jwt.verify(token, "mySecretKey", (err, user) => {
            if (err) {
                return res.status(403).json("Token is not valid !")
            }
            req.user = user;
            next();
        })
    }
    else {
        res.status(401).json("You are not authenticated ! ")
    }

}

app.delete("/api/users/:id", verify, (req, res) => {

    console.log(req.user.id)
    console.log(req.params.id)
    console.log(req.user.role)
    if (req.user.id == req.params.id || req.user.role === "admin") {
        res.status(200).json("User has been deleted")
    }
    else {
        res.status(403).json("You are not allowed to delete users")
    }

})

app.post("/api/logout", verify, (req, res) => {
    const refreshToken = req.body.refNewToken
    refreshTokens = refreshTokens.filter(refNewToken => refNewToken !== refreshToken)
    res.status(200).json("You logged out successfully")
})
app.listen(8080, () => { console.log("Server UP") })
