<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="favicon1.ico" type="image/icon type">
    <title>Killer Clues | Page5</title>

        <style>

        .DialogueBox
        {
            margin-top:5%;
            margin-left:5%;
            margin-bottom: 0%;
        }

    

        .police
        {
            margin-left: 30%;
        }

        .paper
        {
            margin-left:45%;
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

    

    </style> 
    
    <script>

        function next()
        {
            window.location.href="Page6.php";
        }
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

</head>
<body>

    <div class="DialogueBox">
        <center> <img src="DialogueBox4.png" width="20%" height="5%"> </center>
    </div>

    <div class="police">
        <img src="LawyerDead.webp" width="50%" height="25%"> 
        <div class="paper">
            <img src='Paper.jpg' width="10%" height="15%">
        </div>
   </div>

   <button id="b1" class="Next" onclick="next()">Next</button>
   


</body>
</html>