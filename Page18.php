<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="favicon1.ico" type="image/icon type">
    <title>Killer Clues | Page18</title>

    <style>

        h4
        {
            color:brown;
            margin-top:5% ;

        }

        .story
        {
            margin-top: 10%;
            margin-left:15%;
            display:flex;
            position:relative;
            justify-items: center;
        }

        .book
        {
            display: flex;
            position: relative;
            left:35%;
    
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
            window.location.href="Page19.php";
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

    <center> <h4> Hey Oldie...U found me   <br><br> </h4> </center> 

    <div class="story">


        <div class="book">

            <img src="Book.jpg" width="135%">

        </div>

    </div>

    <button id="b1" class="Next" onclick="next()">Next</button>
    
</body>
</html>