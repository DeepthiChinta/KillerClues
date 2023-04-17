<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="favicon1.ico" type="image/icon type">
    <title>Killer Clues | Page9</title>

    <style>

        .answer1
        {
            font-size: 100%;
        }
   
        .Riddle1
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
            margin-left:50%;
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

    <form action="Page9Db.php" method="POST">

    <div class="Riddle1" >

        <h3 style="color:crimson">The <b>CLUE</b> is ....</h3>   <br>

        <h5> My next target</b> is ...  <b style="color:crimson">MNASBUSESIN </b></h5>  

        <input type="text" id='t1' name='t1' class="answer1" style="height:50px; width:250px;">
 

    </div>

    <input type="submit" class="button" name="b1" value="Submit"> 

    </form>
    
</body>
</html>

