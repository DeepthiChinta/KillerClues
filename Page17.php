<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="favicon1.ico" type="image/icon type">
    <title>Killer Clues | Page17</title>

    <style>

        
        .clue
        {
            margin-top: 10%;
            margin-left: 30%;
            text-align: left;
            justify-content: center;
            font-size: 170%;
        }

        .ans
        {
            font-size: 100%;    
        }

        .riddle
        {
            display: inline-block;
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


<form action="Page17Db.php" method="POST">

    <div class="clue">
        Hello Oldie!!!   Tired of all murders???  Wanna know who I am???    <br><br>
        


        Then Solve me             <br>

        <div class="riddle">

        I am a place with quiet halls,               <br> 
        Where books stand tall like city walls.        <br>
        From poetry to science, my shelves abound,      <br>
        What am I called?   <br> <br>

        </div>

        <input type="text" id="t1" name="t1" class="ans" style="height:50px; width:250px;position:relative;top:50px;left:-300px"> 

        
    </div>

    <input type="submit" class="button" name="b1" value="Submit">  

</form>

    
    
</body>
</html>