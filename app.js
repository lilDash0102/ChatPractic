var btn = document.getElementById('btn');
var menssage = document.getElementById('sendMessage');
const input = document.getElementById('chat');
const updateData = document.getElementById('btnUpdate');
const url = document.getElementById('url');
const nick = document.getElementById('userName');
const notif = document.getElementById('xyz');
const onLine = document.getElementById('cant');

console.log(btn);
console.log(menssage);
const ws = new WebSocket('wss://51.89.164.147:3357');
ws.onopen = () => {
    console.log('connectado');
}

ws.onerror = e => {
    console.log(e);
}

ws.onclose = function(e) {
    console.log(e.code);
}


btn.addEventListener('click', e => {
    e.preventDefault();
    sendMessage();
});

menssage.addEventListener('keyup', e => {
    if (e.key == "Enter") {
        sendMessage();
    }
})

function sendMessage() {
    const Message = menssage.value;
    const data = {
        mensaje: Message,
        url: url.value,
        nick: nick.value,
    }
    ws.send(JSON.stringify(data));
    showdata(JSON.stringify(data));
    menssage.value = "";
}

ws.onmessage = ({ data }) => {
    showdata(data);
    notif.play();
}

function showdata(data) {
    data = JSON.parse(data);
    input.innerHTML += " <div>" +
        "<div>" +
        "<img src='" + data.url + "' class='img-fluid d-inline' width='50px' height='50px' style='border-radius: 100%;'>" +
        "<div class='d-inline'><strong>" + data.nick + "</strong></div>" +
        "<p class = 'text-break d-inline text' > " + data.mensaje + " </p> <hr>" + "</div> </div>";
    input.scrollTop = input.scrollHeight;
    if (typeof data.cant !== "undefined") {
        onLine.innerHTML = data.cant;
    }
    console.log(data);
}
