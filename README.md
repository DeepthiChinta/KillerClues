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
