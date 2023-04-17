<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="favicon1.ico" type="image/icon type">
    <title>Killer Clues | Page16</title>

    <style>

        .DialogueBox
        {
            margin-top:5%;
            margin-left:45%;
            margin-bottom: -1%;
        }

        .police
        {
            display:flex;
            position:relative;
            margin-left:28%;
        
        }

        .Next
        {
            margin-left: 65%; 
            width: 70px;
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


    <div class="DialogueBox">
        <img src="DialogueBox12.png">
    </div>
    
    <div class="police">
         <img src="LastImg.png" width="250px"> 
    </div>

    <form action="Page16Db.php" method="POST"> <input type="submit" id="b1" class="Next" name="b1" onsubmit="next()" value="Next"> </form>

</body>
</html>