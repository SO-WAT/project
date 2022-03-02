<!--<!doctype html>-->
<!--<html lang="en">-->
<!--<head>-->
<!--    <meta charset="UTF-8">-->
<!--    <meta name="viewport"-->
<!--          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">-->
<!--    <meta http-equiv="X-UA-Compatible" content="ie=edge">-->
<!--    <style>-->
<!---->
<!--        body, html {-->
<!--            height: 100%;-->
<!--        }-->
<!---->
<!--        * {-->
<!--            box-sizing: border-box;-->
<!--        }-->
<!---->
<!--        .bg-image {-->
<!--            /* The image used */-->
<!--            background-image: url("pics/birds.jpg");-->
<!---->
<!--            /* Add the blur effect */-->
<!--            filter: blur(8px);-->
<!--            -webkit-filter: blur(8px);-->
<!---->
<!--            /* Full height */-->
<!--            height: 100%;-->
<!---->
<!--            /* Center and scale the image nicely */-->
<!--            background-position: center;-->
<!--            background-repeat: no-repeat;-->
<!--            background-size: cover;-->
<!--        }-->
<!---->
<!--        /* Position text in the middle of the page/image */-->
<!--        .bg-text {-->
<!--            background-color: rgb(0,0,0); /* Fallback color */-->
<!--            background-color: rgba(0,0,0, 0.4); /* Black w/opacity/see-through */-->
<!--            color: white;-->
<!--            font-weight: bold;-->
<!--            border: 3px solid #f1f1f1;-->
<!--            position: absolute;-->
<!--            top: 50%;-->
<!--            left: 50%;-->
<!--            transform: translate(-50%, -50%);-->
<!--            z-index: 2;-->
<!--            width: 80%;-->
<!--            padding: 20px;-->
<!--            text-align: center;-->
<!--        }-->
<!---->
<!---->
<!---->
<!---->
<!--    </style>-->
<!--    <title>Safari Services</title>-->
<!--</head>-->
<!--<body>-->
<!---->
<!---->
<!--<div class="bg-image"></div>-->
<!---->
<!---->
<!--<div class="bg-text">-->
<!--    <div class="container">-->
<!--        -->
<!--    </div>-->
<!---->
<!--</div>-->
<!--</body>-->
<!--</html>-->


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <style>
        body{
            background-color: #cccccc;
        }
        h1{
            text-align: center;
            font-family: Forte;
            color: darkgreen;
            background-color: cadetblue;
            padding-top: 20px;
        }
        .center {
            display: block;
            margin-left: auto;
            margin-right: auto;
            width: 50%;
        }
        h3{
            color: #dc3545;
            font-family: Forte;


        }




        .row .container {
            position: relative;
            width: auto;
            height: auto;
        }

        .image {
            display: block;
            width: 100%;
            /*height: 100%;*/
        }

        .overlay {
            position: absolute;
            bottom: 100%;
            left: 0;
            right: 0;
            background-color: darkorchid;
            overflow: hidden;
            width: 100%;
            height:0;
            transition: .5s ease;
        }

        .container:hover .overlay {
            bottom: 0;
            height: 100%;
        }

        .text {
            color: lawngreen;
            font-family: "Brush Script MT";
            font-size: 30px;
            position: absolute;
            top: 50%;
            left: 50%;
            -webkit-transform: translate(-50%, -50%);
            -ms-transform: translate(-50%, -50%);
            transform: translate(-50%, -50%);
            text-align: center;
        }


    </style>



    <title>Safari</title>
</head>
<body>
<div class="container">
    <h1>Safari Services</h1>
    <br><br>
    <img src="pics/ticket.jpg" alt="Paris" class="center">
</div>


<!--<div class="container-fluid p-5 text-white text-center">-->
<!--    <h1>My First Bootstrap Page</h1>-->
<!--    <p>Resize this responsive page to see the effect!</p>-->
<!--</div>-->

<div class="container mt-5">
    <div class="row">
        <div class="col-sm-4">
            <h3> Online Ticket Booking</h3>
            <div class="container">
                <img src="pics/online.jpg" alt="Avatar" height="250px" class="image">
                <div class="overlay">
                    <div class="text">Get Your Ticket Now by the press of a button..!!!</div>
                </div>
            </div>
        </div>
        <div class="col-sm-4">
            <h3>Game Drive</h3>
            <div class="container">
                <img src="pics/gdrive.jpg" alt="drive" height="250px" class="image">
                <div class="overlay">
                    <div class="text">Tired of Getting Lost in Game Parks?? We have professional Guides for You.</div>
                </div>

        </div>
        </div>
        <div class="col-sm-4">
            <h3>Major Fun</h3>

            <div class="container">
                <img src="pics/fun.jpg" alt="Avatar" height="250px" class="image">
                <div class="overlay">
                    <div class="text">Tired of Getting Lost in Game Parks?? We have professional Guides for You.</div>
                </div>

            </div>

    </div>
</div>


</body>
</html>