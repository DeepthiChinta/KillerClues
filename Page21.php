<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="favicon1.ico" type="image/icon type">
    <title>Killer Clues | Page21</title>


<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Courgette&display=swap" rel="stylesheet">

    <style> 

        body
        {
            background-image: url('Bg.jpg');
            background-size: cover;
            overflow: hidden;
           
        }

        .story
        {
            display:flex;
            position: relative;
            max-width: 500px;
            margin: auto;
            color:bisque;
            justify-content: center;
            font-family: 'Courgette';
        }

        .police
        {
            display:flex;
            position: relative;
            top:-570px; 
        }

        .killer
        {
            display:flex;
            position: relative;
            left:1100px;
            top:-1100px;
        }

        .Next
        {
            display: flex;
            position: relative;
            top:-1000px;
            left:700px;
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
            window.location.href="Page22.php";
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

        <div class="back">

        <p class="story">
            As I lay in the hospital bed, struggling to hold onto my last breath, memories of that fateful night flooded my mind. It was supposed to be a simple family trip, but everything changed when a careless driver collided with our car. 
            I watched helplessly as my loved ones were pulled out of the car, covered in blood and struggling to stay alive. As I listened to the commotion around me, I heard whispers of how the other driver was at fault, his reckless driving causing the accident.

            <br><br>

            But then I heard something else, something that sent a shiver down my spine. The sound of voices, murmuring in anger and calling for revenge. "Kill them all," they whispered, their voices growing louder and more urgent.
            In that moment, something inside me snapped. I couldn't let my family's pain go unanswered. With a burst of energy, I pulled myself out of the hospital bed and fled into the night.

            <br><br>
            
            For days, I hunted them down,came to know that,they're MP,DGP,Founder of Siere,who had taken everything from me.Lawyer who helped them to close the case in court.Doctor who helped them by stating that my dad has excessive alcohol content when he was driving.Manipulated the whole situation as it was our fault.Tried to kill me so that the truth will be closed forever and forever.
            
            <br><br>

            I didn't care about the consequences, I only wanted revenge. And in the end, I got it. I killed them all, one by one, until the voices in my head grew quiet and my thirst for revenge was sated.
            But as I sit here, surrounded by the silence of my own guilt, I can't help but wonder if it was worth it. The pain of losing my family will never go away, and the blood on my hands will never wash clean. All I have left is the memory of that terrible night, and the knowledge that I will never be the same.


            </p>

        </div>

        <div class="police">
            <img src="FinalImg.png">
        </div>

        <div class="killer">
            <img src="Killer_Mask.png" width="25%" height="25%">
        </div>

        <button id="b1" class="Next" onclick="next()">Next</button>



    
</body>
</html>