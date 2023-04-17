<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Killer Clues | Page12</title>
    <link rel="icon" href="favicon1.ico" type="image/icon type">


        <style>

        .DialogueBox
        {
            margin-top:10%;
            margin-left:45%;
            margin-bottom: 0%;
        }

        .story
        {
            display:flex;
            position:relative;
            margin-left:38%;
        }

        .police
        {
            display : flex;
            position: relative;

        }

        .politician
        {
            display:flex;
            position:relative;
            margin-left: 15%;
            margin-top:5%;
            
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
            window.location.href="Page13.php";
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
        <img src="DialogueBox8.png">    
    </div>

    <div class="story">

        <div class="police">
            <img src="DeadDoctor_Police.png" width="150px" > 
        </div>

        <div class='politician' > 
            <img src='Politician.png' width="300px" height="200px" > 
        </div>

    </div>

    <button id="b1" class="Next" onclick="next()">Next</button>
    

</body>
</html>