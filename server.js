const express = require('express');
const app = express();
const path = require('path');
var https = require('https');
const PUERTO = 3000;

app.listen(PUERTO);
app.use(express.static(path.join(__dirname, "public")));

app.get('/', function(req, res) {
    res.sendFile(path.resolve(__dirname, 'index.html'));

});
console.log(__dirname);