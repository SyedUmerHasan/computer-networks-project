var io = require('socket.io')(8888);
var ss = require('socket.io-stream');
var path = require('path');
const fs = require('fs');
const os = require('os');
const http  = require('http');
const cv = require('opencv4nodejs');

var users = [];

io.on("connection", function (socket) {

    socket.on('startConnection', function (id) {
        console.log("socket connected from client with user-id : "  + id + " and socket-id : " + socket.id);
        users.push({ socketId: socket.id, userId: id });
        console.log(users);
    });
    // socket.on('endConnection', function (id) {
    //     // users.push({ socketId: socket.id, userId: id });
    //     console.log("socket disconnected from client");
    // });
    socket.on("disconnect", function (socket) {
        console.log("leaved");
        users.forEach(value => {
            // if(value.userId == socket.id)
            // {
            //     console.log(value);
            // }
            console.log("I found the match  : " + socket.id );
        });
    });

    // console.log("Connected : " + socket.id);

    // console.log(io.sockets.clients());
    
    var videosharingServer = false;
    var videosharingcount = 0;
    socket.on('startvideosharing', function (message) {
        console.log("Video Sharing start");
        videosharingServer = true;
        setInterval(() => {
            if (videosharingServer == false) {
                vCap.release();
            }
            else if (videosharingServer == true) {
                start();
            }
        }, 100);
    });
    
    socket.on('private-message-sender', function (msg) {
        socket.emit('private-message-client', msg);
        console.log("private message enabled :  " + msg.id);
    });

    socket.on('stopvideosharing', function (message) {
        console.log("Video Sharing stop");
        videosharingServer = false;
    });
    const FPS = 100;
    const vCap = new cv.VideoCapture(0);
    vCap.set(cv.CAP_PROP_FRAME_WIDTH, 400);
    vCap.set(cv.CAP_PROP_FRAME_HEIGHT, 800);
    var count = 0;

    socket.on('sendChatToServer', function (msg) {
        // io.sockets.emit('serverChattoClient', message);  // to all users including sender
        socket.broadcast.emit('serverChattoClient', msg);
        socket.emit('serverChattoSender', msg);
        console.log("msg : " + JSON.stringify(msg));
    });
    socket.on('ontype', function (msg) {
        // console.log("I am tyoing" + msg.message);
        // io.sockets.emit('typing', message); // to all users including sender
        socket.broadcast.emit('typing', msg);
        // socket.broadcast.emit
    });


    socket.on('typing-stop', function (user) {
        io.sockets.emit('hide-typing', user);
        // console.log("typing ended");
    });

    async function start()
    {
        frame = vCap.read();
        image = cv.imencode('.jpg', frame).toString('base64');
        socket.broadcast.emit('recieverimage', image);
        socket.emit('senderimage', image);
    }

    ss(socket).on('file', (stream, data) => {
        var varaible_time = Date.now();
        var filename = "wepublic/music-stream/" + varaible_time + '.' + data.fileextension;
        // var client_filename = "music-stream/" + varaible_time + '.' + data.fileextension;
        stream.pipe(fs.createWriteStream(filename));
        var d = new Date();
        // Delay to send teh images and files correctly Start
        setTimeout(function () {
            socket.broadcast.emit('recieve-file', {
                client_filename: "/music-stream/" + varaible_time + '.' + data.fileextension,
                fileextension: data.fileextension,
                size: data.size,
                time: d.toLocaleTimeString()
            });

            socket.emit('recieve-file-sender', {
                client_filename: "/music-stream/" + varaible_time + '.' + data.fileextension,
                fileextension: data.fileextension,
                size: data.size,
                time: d.toLocaleTimeString()
            });
        }, 7000);
        // Delay to send teh images and files correctly End
        console.log("File is called with file size : " + data.size);
    });

});
