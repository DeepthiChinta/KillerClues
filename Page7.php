<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="favicon1.ico" type="image/icon type">
    <title>Killer Clues | Page7</title>

    <style>

        .forms
        {
            margin-top:5%;
        }

        .answer1
        {
            font-size: 100%;
        }
   
        .row
        {
            display : flex;
            justify-content:space-around;
            margin-left: 25%;
            align-items: center;
            
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

    <form class="forms" action="Page7Db.php" method="POST">

       <center>  <h3>CLUE</h3> </center>

        <center> <h2 style="color:crimson">My next <b>TARGET</b> is ....</h2>  </center>  <br>

    <div class="row">

        <div class="column">
            <img src="Injection.webp" width="30%">

            <img src="Saline.webp" width="30%">

        </div>

        
    </div>

    <center> <input type="text" id='t1' name='t1' class="answer1" style="height:50px; width:250px;"> </center>

    <input type="submit" class="button" name="b1" value="Submit"> 

    </form>
    
</body>
</html>

