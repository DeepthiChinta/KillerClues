<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="favicon1.ico" type="image/icon type">
    <title>Killer Clues | Page10</title>

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

        .bman
        {
            display:flex;
            position:relative;
            margin-top: 15%;
            margin-left: 10%;
        }

        .paper
        {
            margin-left:55%;
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
        <img src="DialogueBox7.png">    
    </div>

    <div class="story">

        <div class="police">
            <img src="DeadDoctor_Police.png" width="150px" > 
        </div>

        <div class='bman' > 
            <img src='DeadBusinessMan.jpg' width="150px" height="120px" > 
        </div>

    </div>


   <div class="paper">

    <img src='Paper.jpg' width="10%" height="15%">

    </div>

    <form action="Page10Db.php" method="POST"> <input type="submit" id="b1" class="Next" name="b1" onsubmit="next()" value="Next"> </form>

</body>
</html>