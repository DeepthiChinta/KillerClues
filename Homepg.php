<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rubik+Wet+Paint&display=swap" rel="stylesheet">

    <title>Home</title>

    <style>

        

        .heading
        {
            display:flex;
            position: relative;
            top:-50px;
            left:50px;
            justify-content: center;
            align-items: center;
            font-family:"Rubik Wet Paint";
            color:red;
            font-size: 400%;

        }

        .police
        {
            display:flex;
            position: relative;
            top:-250px;
            left:-50px;
        }

        .killer
        {
            display:flex;
            position: relative;
            left:1170px;
            top:-950px;
        }

        .but
        {
            display: flex;
            justify-content: center;
            align-items: center;
            position: relative;
            height: 65px;
            width: 330px;
            font-size: 25px;
            font-weight: 800;
            font-family: 'Rubik Wet Paint', cursive;
            left: 570px;
            top: -1200px;
            background-color: #d3bd95;
            color: #e16275;
            border-radius: 25px;
            border: none;
            transition: 0.5s;
            box-shadow: 10px 10px 10px red;
        }
        .but:hover
        {
            font-weight: 1000;
            font-size: 30px;
            font-family: 'Rubik Wet Paint', cursive;
            box-shadow: 25px 25px 110px red;
        }

    
        body
        {
            background-image: url("Bg.jpg");
            background-size: cover;
            overflow:hidden;
            
        }

    </style>

    <script>

        function next()
        {
            window.location.href="Page1.php";
        }
    </script>

</head>

<body>
        <div class="heading">
            <h1>KILLER CLUES</h1>
        </div>

        <div class="police"> 
            <img src="SearchPolice-removebg-preview.png">
        </div>

        <div class="killer">
            <img src="Home_Killer.png">
        </div>

        <button class="but" onclick="next()">START THE GAME</button>


    
</body>
</html>