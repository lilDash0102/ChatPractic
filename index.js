const express = require('express');
const http = require('http');
const WebSocket = require('ws');

const port = 3357;
const server = http.createServer(express);
const wss = new WebSocket.Server({ server });
var cant = 0;

wss.on('connection', function connection(ws) {
    cant++;
    const info = {
        mensaje: "Un macaco se ha unido al chat",
        url: "https://cdn.forbes.co/2021/05/Anonymous.jpg",
        nick: "Admin",
        cant: cant,
    }
    wss.clients.forEach(function each(client) {
        if (client !== ws && client.readyState === WebSocket.OPEN) {
            client.send(JSON.stringify(info));
        }
    });
    ws.on('message', function incoming(data) {
        wss.clients.forEach(function each(client) {
            if (client !== ws && client.readyState === WebSocket.OPEN) {
                client.send(data);
            }
        });
    });
    ws.on('open', function open() {
        wss.send(cant);
    });
    ws.on('close', function close() {
        cant--;
        const info = {
            mensaje: "Un macaco se ha muerto y ahora son menos en el chat",
            url: "https://cdn.forbes.co/2021/05/Anonymous.jpg",
            nick: "Admin",
            cant: cant,
        }
        wss.clients.forEach(function each(client) {
            if (client !== ws && client.readyState === WebSocket.OPEN) {
                client.send(JSON.stringify(info));
            }
        });
    });
});

server.listen(port, function() {
    console.log("Server is listening on " + port + "!");
})