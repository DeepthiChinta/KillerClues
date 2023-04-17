<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="favicon1.ico" type="image/icon type">
    <title>Killer Clues | Page13</title>


    <style>

        .DialogueBox
        {
            margin-top:10%;
            margin-left:40%;
            margin-bottom: 0%;
        }

        .police
        {
            display:flex;
            position:relative;
            margin-left:30%;
        
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

    <script>



        function next()
        {
            window.location.href="Page14.php";
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
        <img src="DialogueBox9.png">
    </div>
    
    <div class="police">

         <img src="LookPolice.png" width="200px"> 

    </div>

    <button id="b1" class="Next" onclick="next()">Next</button>
    


</body>
</html>