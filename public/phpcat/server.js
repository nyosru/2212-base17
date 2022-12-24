// Header set Access - Control - Allow - Origin "test.php-cat.com"

console.log(`Server started on /public`);

//server.js

const express = require("express");
const app = express();

// app.use(function (req, res, next) {
//     // res.header("Access-Control-Allow-Origin", "test.php"); // update to match the domain you will make the request from
//     res.header("Access-Control-Allow-Origin", "*"); // update to match the domain you will make the request from
//     res.header(
//         "Access-Control-Allow-Headers",
//         "Origin, X-Requested-With, Content-Type, Accept"
//     );
//     next();
// });

// const port = 4000;
const port = 4008;

// const port = 6001;

const server = app.listen(`${port}`, function () {
    console.log(`Server started on port ${port}`);
});

const io = require("socket.io")(server, {
    cors: { origin: "http://bu72.com", methods: ["GET", "POST"] },
});

function getValue() {
    // return {
    //     user_id: 77,
    //     count: Math.floor(Math.random() * (50 - 5 + 1)) + 5
    // };
    return [
        {
            id: 111126,
            type: "take_off",
            timestamp: 1634627878,
            productName: "Кальций d3, 137г",
            productCount: -1,
            sessionId: "6822d3db-a766-499f-b6ca-b9d6382c94b0",
        },
        {
            id: 111127,
            type: "put_on",
            timestamp: 1634627917,
            productName: "Кальций d3, 137г",
            productCount: 1,
            sessionId: "6822d3db-a766-499f-b6ca-b9d6382c94b0",
        },
    ];
}

io.on("connection", (socket) => {
    setInterval(() => {
        socket.broadcast.emit("newdata", getValue());
    }, 60*1000);
});
