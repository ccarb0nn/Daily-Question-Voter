Caleb Carbonneau

# Daily Question Voter

This project is a Daily Question Voter where all users have the opertunity to vote on the same random "would you rather" question once a day. This "would you rather" question changes each day but is the same question for all users. When accessing this application, the user will be prompted with a screen to either login to an existing account or create a new account with a unique username. Once the user has created an account with a unique username and/or has logged into their account, they will then be able to access all the features that this application offers. 

Users will have the option to view their profile which will show them their username, gender, age, whether they voted that day, what option they voted for, and the ability to view all previous questions/options that they have voted for. 

Users will also have the ability to vote on the question of the day where they will access a "would you rather" question with two options to vote on. When the user makes their vote, it will save their vote and update the voting results for that question and will no longer allow the user to vote again for that day. Users will still have the ability to check the voting results for the current question but they can no longer submit a vote till the next day when there is a new question.

Users will also be able to search for other users profiles where they will be able to see that users profile information such as username, age, gender, whether they voted that day, what option they voted for, and they will be able to view the questions and votes that the user has previously voted on.

Lastly users will also be able to submit their own "would you rather" questions that they would like to see be featured for the question of the day. The user will have to provide their question along with the two seperated options that will be voted on. When the user submits their question it will be saved allong side their username so they can be credited for their submission. 

## Languages Used

This project relies on HTML, PHP, Python, and C++

- This project uses HTML to dispaly the programs output to the user so it is easier to see and interact with. HTML is used to display the welcome screen, login/regestration screen, home/option screen, view profile screen, view question of the day screen, view voting reslts screen, search for user screen, and question submittion screen.
- In addition to using HTML this project also uses PHP to collect information such as regestration form, login form, search for user form, and submit question form. PHP also works with the Python and C++ programs to get information on the question of the day, users profile information, and login verification.
- Python is used throughout this project to take information from PHP which Python then passes on to C++ when compiling the C++ programs. From there the C++ programs run and returns the output back to the Python scripts which than sends the output back to the PHP scripts.
- C++ is used to compile and return data that is provided by the Python scripts. The C++ programs in this project handle getting the question of the day, handles updating the votes for each option, handels getting the current question voting results, verifies the users login credentials, retreives the users profile information, and generating and stores a random number which is used to pick the "would you rather" question of the day.

## Instolations
I installed XAMPP to run Apache and host the project on my computers localhost network.

## Future Work
- I would like to add a feature where users have the ability to vote on the questions that users have submitted that they would like to see be added.
- I would like to add a program that grabs existing "woud you rather" questions from the web that could be added the the questions text file so there are more "would you rather" questions to choose from
- I would like to update the code so once the question of the day is selected it would be removed from the list of questions and be added to a list of used questions that way their is no way it could be picked again

# Citations: 
- https://stackoverflow.com/questions/11074908/how-do-i-read-each-line-from-a-file-in-php
- https://www.w3schools.com/PHP/php_file_open.asp
- https://stackoverflow.com/questions/1768894/how-to-write-into-a-file-in-php
- https://www.w3schools.com/PHP/php_ref_string.asp
- https://www.w3schools.com/html/html_forms.asp
- https://www.w3schools.com/php/php_echo_print.asp
- https://www.w3schools.com/php/php_sessions.asp
- https://www.w3schools.com/php/default.asp
- https://codepen.io/ayush602/pen/mdQJreW from: https://freefrontend.com/css-login-forms/
- https://css-tricks.com/almanac/properties/l/list-style/
- https://www.w3schools.com/CSS/css_display_visibility.asp from: https://www.w3schools.com/CSS/default.asp
- https://html-color.codes/
