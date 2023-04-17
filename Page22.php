<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="favicon1.ico" type="image/icon type">
    <title>Killer Clues | Page22</title>
    <style> 

        body
        {
            background-image: url('Bg.jpg');
            background-size: cover;  
        }

        .text
        {
            color:red;
            display:flex;
            position: relative;
            align-items:center;
            justify-content: center;
        
        }

        .end
        {
            display:flex;
            position: relative;
            margin-top:5%;
            align-items:center;
            justify-content: center;
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
            
            left:580px;
            background-color: #d3bd95;
            color: #e16275;
            border-radius: 25px;
            border: none;
            transition: 0.5s;
            box-shadow: 10px 10px 10px antiquewhite;
            
        }

        .but:hover
        {
            font-weight: 1000;
            font-size: 30px;
            font-family: 'Rubik Wet Paint', cursive;
            box-shadow: 25px 25px 110px whitesmoke;
        }
        

    </style>

    
</head>

<body>
    <script>
window.onload = function() {
        if (performance.navigation.type === 1) {
            refreshFlag = true;
            var confirmRefresh = confirm('Do you want to start from the beginning?');
            if (confirmRefresh) {
            window.location.href = 'Homepg.php';
            }
        }
        }
</script>
        <div class="end">
            <img src="Face.jpg" width="25%" height="25%">
        </div>

        <div class="text">
            <h2>The END.... </h2>
        </div>

        <form action="Score.php" method="post"> <input type="submit" class="but" value="END THE GAME"> </form>
    
</body>
</html>