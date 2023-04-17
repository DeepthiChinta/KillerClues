# KillerClues

"Killer Clues" is a detective-style game in which players take on the role of police officers trying to solve a series of murders committed by a cunning and elusive serial killer. The killer taunts the police by leaving clues about their next victim, which the players must use to track down and capture the killer before they strike again.
As the game progresses, the killer leaves more and more clues about their next target, forcing the player to race against the clock to gather information and prevent another murder. The clues can be in the form of riddles, images, messages, which the players must decipher in order to uncover the killer's identity and motive.
Overall, "Killer Clues" is a challenging and exciting game that tests players' detective skills and ability to work  under pressure. It is a great option for those who enjoy mystery-solving and strategy games, and who are looking for a thrilling and immersive experience.


# Skills Accessesed

* Critical thinking: The game requires players to analyze clues and evidence, connect the dots, and come up with hypotheses to solve the mystery.

* Problem-solving: Players must work collaboratively to find solutions to challenges and overcome obstacles in order to catch the killer.

* Attention to detail: Players must pay close attention to details in order to spot clues and piece together the killer's motives and methods.

* Time management: The game is often played against the clock, so players must manage their time efficiently to gather information, solve puzzles, and prevent the next murder.

* Decision-making: Players must make critical decisions based on the evidence and clues they have collected, and these decisions can have a significant impact on the outcome of the game.

* Strategy: Players must develop effective strategies to catch the killer, whether it's by dividing and conquering, coordinating their efforts, or using their individual strengths to their advantage. 

# Features 

* The admin has password and username with which only admin can able to view the dashboard.
* The user data insights has a table that has records for the time and score of each question that the user has attempted.
* The user's score will determine the soft skills possessed by him/her.
* When user refreshes the page it pops up an alert which navigates us to home based on the option selection.
* Anyone with an email address can create an Id and password to participate in the game.
* The puzzle contains.
  * 6 clues
  * 6 dead-ends
  * 1 solution 
# Scoring
  <pre>
  if($sum<=60)
{
  echo "<script>alert('Your score 10/10 and total time taken is $sum (secs)');</script>";
  $val=10;
}
else if($sum<=110)
{
  echo "<script>alert('Your score 9/10 and total time taken is $sum (secs)');</script>";
  $val=9;
}
else if($sum<=180)
{
  echo "<script>alert('Your score 8/10 and total time taken is $sum (secs)');</script>";
  $val=8;
}
else if($sum<=220)
{
  echo "<script>alert('Your score 7/10 and total time taken is $sum (secs)');</script>";
  $val=7;
}
else if($sum<=350)
{
  echo "<script>alert('Your score 6/10 and total time taken is $sum (secs)');</script>";
  $val=6;
}
else{
  echo "<script>alert('Your score 5/10 and total time taken is $sum (secs)');</script>";
  $val=5;
}
  </pre>

# Possible way to solve game

### Riddle1 
Ans) Lawyer

### Riddle2
Ans) Doctor

### Riddle3
Ans) Bussinessman

### Riddle4
Ans) Politician

### Riddle5
Ans) Library

#  Technology Used
The game creation process often involves a mix of different technologies, and in the case of this particular game, several programming languages were utilized. PHP is a server-side scripting language used to build the game's back-end functionality, while JavaScript was used for front-end development to make the game interactive and responsive. HTML was used for the game's user interface and web design, providing the basic structure of the game's layout. Additionally, Python was likely used for scripting and game logic, as it is a versatile language often used for game development. Overall, this combination of technologies allowed for a robust and engaging game to be created, leveraging the unique strengths of each programming language.
* Clues: There are clues in evry page which leads to next clue
* Users: It contains there username email and there password.
* Scores and Time: Every clue has a start and end timer.

# Database Used

killercluesdb

# Tables used

## users
| ID | DATATYPE | INDEX |
| --- | --- | --- |
| id | varchar(256) | primary key |
| username | varchar(256) | not null  |
| email | varchar(256) | not null |
| pass | varchar(256) | not null |
| total_score | INT | default = 0 |
| total_time | INT | default = 0 |
## score
| ID | DATATYPE | INDEX |
| --- | --- | --- |
| score_3 | BIGINT | first round |
| score_7 | BIGINT | second |
| score_9 | BIGINT | third round |
| score_11 | BIGINT | fourth round |
| score_17 | BIGINT | fifth round |

# Installation
To play Killer Clues, a game built using PHP and MySQL, you will need to have a local development environment set up on your machine. One way to do this is by using XAMPP, a cross-platform web server solution that includes Apache, MySQL, and PHP. To install XAMPP, you can download the appropriate version for your operating system from the Apache Friends website and run the installer. Once XAMPP is installed, you will need to start the Apache and MySQL services to run the game. You can then import the Ahoy database into your local MySQL server and modify the database configuration settings in the game's PHP files to connect to your local database. Finally, you can open the game in your web browser by navigating to the game's index.php file in the XAMPP htdocs directory. With these steps completed, you should be able to play Ahoy locally on your machine.

# About Me
I'm currenly studying 3rd BTECH in ANITS VSKP , always wanted to develop these kind of mystery games. My interests are data science and web development.
# Skills
* Javascript
* PHP
* HTML
* MySql
* CSS
