<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <style>
        footer{
            width:100%;
            position: absolute;
            bottom: 0;
            background: linear-gradient(to right, #00093c, #2d0b00);
            color: #fff;
            /*padding: 100px 0 30px;*/
            border-top-left-radius: 125px;
            font-size: 13px;
            line-height: 20px;

        }
        .row{
            width: 85%;
            margin: auto;
            display: flex;
            flex-wrap: wrap;
            align-items: flex-start;
            justify-content: space-between;
        }
.col{
    flex-basis: 25%;
    padding: 10px;
}

.col: nth-child(2), .col:nth-child(3){
            flex-basis: 15%;
                    }



.col h3{
    width: fit-content;
    margin-bottom: 40px;
    position: relative;
}

.email-id{
    width: fit-content;
    border-bottom: 1px solid #ccc;
    margin: 20px 0;
}
ul li{
    list-style: none;
    margin-bottom: 12px;
}
ul li a{
    text-decoration: none;
    color: #fff;
}


form{
    padding-bottom: 15px;
    display: flex;
    align-items: center;
    justify-content: space-between;
    border-bottom: 1px solid #ccc;
    margin-bottom: 50px;
}

/*form far{*/
/*    font-size: 18px;*/
/*    margin-right: 10px;*/
/*!*}*!    for the icons*/

        form input{
      width: 100%;
            background: transparent;
            color: #ccc;
            border: 0;
            outline:none;
        }
form button{
    background:transparent;
    border: 0;
    outline: none;
    cursor: pointer;
}
form button .fas{
    font-size:16px ;
    color:#ccc ;
}
.social-icons .fab{
  width: 40px;
    height: 40px;
    border-radius: 50%;
    text-align: center;
    line-height: 40px;
    font-size: 20px;
    color: #000;
    background: #fff;
    margin-right: 15%;
    cursor: pointer;
}
hr{
    width: 90%;
    border: 0;
    border-bottom: 1px solid #ccc;
    margin: 20px auto;
}
.copyright{
    text-align: center;
}
.underline{
    width: 100%;
    height: 5px;
    background: #767676;
    border-radius: 3px;
    position: absolute;
    top: 25px;
    left: 0;
    overflow: hidden;
}

.underline span{
    width: 15px;
    height: 100%;
    background: #fff;
    border-radius: 3px;
    position: absolute;
    top: 0px;
    left: 10px;
    animation: moving 2s linear infinite;

}

@keyframes moving {
    0%{
        left: -20px;
    }
    100%{
        left: 100%;
    }
}

@media (max-width: 700px){
    footer{
        bottom: unset;
    }
    .col{
        flex-basis: 100%;

    }

    .col: nth-child(2), .col:nth-child(3){
                            flex-basis: 100%;
                        }

}


    </style>
    <title>Document</title>
</head>
<body>

<footer>
    <div class="row">
        <div class="col">
            <img src="" class="logo">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet atque cumque dignissimos eum, excepturi, ipsam minus nihil odit officia, omnis placeat quisquam
                quod saepe sunt tempore? Aperiam blanditiis cum sit!</p>
        </div>
        <div class="col">
            <h3>Office <div class="underline"><span></span></div></h3>
            <p>Kanii Street</p>
            <p>Times Towers, Nairobi</p>
            <p>+2546789076</p>
            <p class="email-id">safari@yahoo.co.ke</p>
            <h4>+2549878909877</h4>
        </div>
        <div class="col">
            <h3>Links <div class="underline"><span></span></div></h3>
            <ul>
                <li><a href="">Home</a></li>
                <li><a href="">Services</a></li>
                <li><a href="">About</a></li>
                <li><a href="">FAQS"</a></li>
                <li><a href="Contact Us"></a></li>
                <li><a href="Home"></a></li>

            </ul>
        </div>
        <div class="col">
            <h3>NewsLetter <div class="underline"><span></span></div></h3>
            <form>
                <input type="email" placeholder="Enter email" required>
                <button type="submit"></button>
<!--weka icon from fontawesome-->
            </form>
            <div class="social-icons">
                <i class="fontawesome"></i>
            </div>
        </div>

    </div>
    <hr>
    <p class="copyright">......@.........- All Rights Reserved</p>
</footer>



</body>
</html>
