<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="favicon1.ico" type="image/icon type">
    <title>Killer Clues | Page8</title>

        <style>

        .DialogueBox
        {
            margin-top:10%;
            margin-left:45%;
            margin-bottom: 0%;
        }

        .police
        {
            display : flex;
            justify-content:space-around;
            margin-left: 2%;
            align-items: center;

        }

        .Next
        {
            display: flex; 
            position: relative;
            left:1000px;
            top:-80px;
            width: 70px;
            height:40px;
            justify-content: center;
            align-items: center;
            font-size: 20px;
            border-radius: 15px;
            box-shadow: 2px 2px black;
        }


        .doctor
        {
            margin-left:-70%;
            margin-top: 10%;
        }

        .paper
        {
            margin-left:55%;
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
        <img src="DialogueBox6.png">
        
    </div>

    <div class="police">

        <img src="DeadDoctor_Police.png" width="150px" > 

        <div class='doctor' > <img src='DeadDoctor.png' width="200px" > </div>

   </div>

   <div class="paper">

    <img src='Paper.jpg' width="10%" height="15%">

    </div>

    <form action="Page8Db.php" method="POST"> <input type="submit" id="b1" class="Next" name="b1" onsubmit="next()" value="Next"> </form>

</body>
</html>