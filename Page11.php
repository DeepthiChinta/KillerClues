<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="favicon1.ico" type="image/icon type">

    <title>Killer Clues | Page11</title>

    <style>

        .answer1
        {
            font-size: 100%;
        }
   
        .Riddle2
        {
            font-size: 170%;
            margin-top: 5%;
            display:flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
        }

        .button
        {
            margin-top: 5%;
            margin-left:48%;
            width: 80px;
            height:40px;
            justify-content: center;
            align-items: center;
            font-size: 20px;
            border-radius: 15px;
            box-shadow: 2px 2px black;
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

    <form action="Page11Db.php" method="POST">

    <div class="Riddle2" >

        <h3 ><b>CLUE</b></h3>   <br>
 
        <center> <h3 style="color:crimson">My next <b>TARGET</b> is ....</h3>  </center>  <br>


        I'm the one who kissess babies and shakes hands,    <br>
        My words are as sweet as the finest of brands.               <br>
        I'll promise you the moon and the stars,     <br>
        But don't be fooled,I'm just doing it for my well-being.                   <br><br>

        <input type="text" id='t1' class="answer1" name="t1" style="height:50px; width:250px;">

        <input type="submit" class="button" name="b1" value="Submit"> 

        
    </div>


    </form>
    
</body>
</html>

