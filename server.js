if (process.env.NODE_ENV !== 'production') { //tell which environment is on
    require('dotenv').config()
}

const stripeSecretKey = process.env.STRIPE_SECRET_KEY
const stripePublicKey = process.env.STRIPE_PUBLIC_KEY

console.log(stripeSecretKey, stripePublicKey) //print both keys out

const express = require('express') //require express library
const app = express() //create app force
const fs = require('fs') //for reading files from items.json

//set view engine
app.set('view engine', 'ejs') //front end using ejs
app.use(express.static('public'))

app.get('/product_list', function(req, res) {
    fs.readFile('items.json', function(error, data) {
        if (error) {
            res.status(500).end()
        } else {
            res.render('product_list.ejs', {
                items: JSON.parse(data)
            })
        }
    })
})

app.listen(3000)