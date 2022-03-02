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

        body, html {
            height: 100%;
        }

        * {
            box-sizing: border-box;
        }

        .bg-image {
            /* The image used */
            background-image: url("pics/bg.jpg");

            /* Add the blur effect */
            filter: blur(8px);
            -webkit-filter: blur(8px);

            /* Full height */
            height: 100%;

            /* Center and scale the image nicely */
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
        }

        /* Position text in the middle of the page/image */
        .bg-text {
            background-color: rgb(0,0,0); /* Fallback color */
            background-color: rgba(0,0,0, 0.4); /* Black w/opacity/see-through */
            color: white;
            font-weight: initial;
            border: 3px solid #f1f1f1;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            z-index: 2;
            width: 80%;
            padding: 20px;
            text-align: center;
        }

        h1{
            font-family: "Brush Script MT";
            font-size: 100px;
            text-align: center;
            color: #0d6efd;
            background-color: #2d0b00;
        }

        h2{
            color: fuchsia;
            /*background-color: #666666;*/
        }
    </style>
    <title>About</title>
</head>
<body>
<div class="bg-image"></div>

<div class="bg-text">
<div>
    <h1>Safari</h1>
</div>
    <div class="container">

        <p> The Safari Booking Management System is used for securing tickets to various
            membership amusement and nature parks in Kenya's Capital City, Nairobi.
           Nairobi National Park being the initiator member. We look forward to incorporating others including:
            Snake Park, The National Museum and Nairobi Arboretum.
            The system enables individuals of all age sets or guardians to book their entrance tickets.
            Both residents and non-residents can easily book their passes online.
            The ticket comes with a whole package including personalized or group drives and tour guides.
            Safari gives affordable rates as well as giving well deserved discounts.
            To avoid inconvenience, we use both the Ksh and Dollars in our payment systems.
            The system also allows one to cancel any reservation made with minimal inconveniences. </p>

    </div>

<!--        <h2> Watch the Video Below to find Out How You can Easily Book</h2>-->
        <marquee width="60%" direction="left" height="100px">
            <h2> Watch the Video Below to find Out How You can Easily Book</h2>

        </marquee>
        <iframe width="560" height="315" src="https://www.youtube.com/embed/rm5MbL1OSlo" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>


</div>

</body>
</html>
