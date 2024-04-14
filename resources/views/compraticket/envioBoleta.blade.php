<!DOCTYPE html>
<html>
<head>
    <title>{{$titulo}}</title>

    <style>
        @import url("https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;700&display=swap");
        body,
        p,
        h1 {
        margin: 0;
        padding: 0;
        font-family: "Open Sans", sans-serif;
        }
        .header {
        padding: 5px;
        text-align: center;
        background: #1fb474;
        color: white;
        font-size: 20px;
}

        .container {
        background: #e0e2e8;
        position: relative;
        width: 100%;
        height: 100vh;
        
        }
        .container .ticket {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        border-style: dotted;
        }
        .container .basic {
        display: none;
        }

        .airline {
        display: block;
        height: 675px;
        width: 470px;
        box-shadow: 5px 5px 30px rgba(0, 0, 0, 0.3);
        border-radius: 25px;
        z-index: 3;
        }
        .airline .top {
        height: 120px;
        background: #ffcc05;
        border-top-right-radius: 25px;
        border-top-left-radius: 25px;
        }
        .airline .top h1 {
        text-transform: uppercase;
        font-size: 14px;
        letter-spacing: 2;
        text-align: center;
        position: absolute;
        top: 20px;
        left: 50%;
        transform: translateX(-50%);
        }
        .airline .top h2 {
        text-transform: uppercase;
        font-size: 13px;
        letter-spacing: 2;
        text-align: center;
        position: absolute;
        top: 60px;
        left: 35%;
        transform: translateX(-50%);
        }
        .airline .bottom {
        height: 355px;
        background: #fff;
        border-bottom-right-radius: 25px;
        border-bottom-left-radius: 25px;
        }
        .top--side {
        position: absolute;
        right: 35px;
        top: 110px;
        text-align: right;
        }
        .top--side i {
        font-size: 25px;
        margin-bottom: 18px;
        }
        .top--side p {
        font-size: 10px;
        font-weight: 700;
        }
        .top--side p + p {
        margin-bottom: 8px;
        }

        .bottom p {
        display: flex;
        flex-direction: column;
        font-size: 13px;
        font-weight: 700;
        }
        .bottom p span {
        font-weight: 400;
        font-size: 15px;
        color: #6c6c6c;
        }
        .bottom .column {
        margin: 0 auto;
        width: 80%;
        padding: 2rem 0;
        }
        .bottom .row {
        display: flex;
        justify-content: space-between;
        }
        .bottom .row--right {
        text-align: right;
        }
        .bottom .row--center {
        text-align: center;
        }
        .bottom .row-2 {
        margin: 30px 0 10px 0;
        position: relative;
        }
        .bottom .row-2::after {
        content: "";
        position: absolute;
        width: 100%;
        bottom: -30px;
        left: 0;
        height: 1px;
        }

        .bottom .bar--code {
        height: 50px;
        width: 80%;
        margin: 0 auto;
        position: relative;
        text-align: center;

        }

    </style>
</head>
<body>
    <main class="qrMain">
        <!-- TIQUETE -->
        <div class="container">

            <div class="header">
                <h1>TickEvent</h1>
                <p>Presenta este documento para la entrada al evento</p>
            </div>

            <div class="ticket airline">
                <div class="top">
                    <h1>Entrada a Evento</h1>
                    <br>

                    <h2>{{$titulo}}</h2>

                </div>
                <div class="bottom">
                    <div class="column">
                        <div class="row row-1">
                            <p><span>Nombres y apellidos</span></p>
                            <p class="row--center">{{$nombres}} {{$apellidos}}</p>
                        </div>
                        <div class="row row-2">
                            <p><span>Identificacion</span></p>
                            <p class="row--center">{{$ced}}</p>
                        </div>
                        <div class="row row-3">
                            <p><span>Correo:</span></p>
                            <p class="row--center">{{$email}}</p>
                        </div>
                    </div>
                    <br>
                    <div class="bar--code" >
                        <figure class="qrTicket__imgContainer">
                            <img src="data:image/png;base64,{{ $qrcode }}">
                        </figure>
                    </div>
                </div>
            </div>
        </div>
    </main>
</body>
</html>