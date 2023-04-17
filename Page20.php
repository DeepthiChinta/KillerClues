<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="favicon1.ico" type="image/icon type">
    <title>Killer Clues | Page20</title>

    <style>

        h1
        {
            display:flex;
            position: relative;
            justify-content: center;
        
        }

        .letter
        {
            display:flex;
            position: relative;
            justify-content: center;
            margin-top: 5%;
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
            window.location.href="Page21.php";
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

    <h1>A Letter!!!</h1>

    <div class="letter">

        <img src="Letter.jpg">

    </div>

    <button id="b1" class="Next" onclick="next()">Next</button>
    
</body>
</html>