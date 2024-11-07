Caleb Carbonneau

Instolations:
- You may need to install XAMPP to run Apache to host the program since the schools was not able to access any of the python output which resulted in the project to not work.

Project Summary:
- My project is an application which offers users the ability to vote on a would you rather question each day, once a day. To vote users will have to register which will grant them access to the features. Users can vote once, view voting results, search for other users, and logout. This project is an extension of M1OEP & M2OEP.

Program Languages
- My program starts off in HTML where it displays a screen which asks the user if they are a new or returning user. Once the user has made a selection, a php program takes this information and passes it to a python script which then compiles a c++ program which validates and stores the information. This same proccess happens when the user logs in, votes, view voting results, and searches for other users profiles. 
- I chose html/php since it allowed me to visulize the prompts and information for the user while taking user input which I could then use to pass on to my python programs.
- I used Python to recive the information from PHP and to compile and pass this information onto a C++ program. This happens each time the user submits a login, view question, view voting results, and user search.
- I used C++ to take in information from python and validate and store it in txt files which could be easily accessed later on, such as user profile information and questions that would be used for question of the day. I also used C++ for validating user input such as login, regestration, and user search. These results would then be passed back to python which would then pass it back to PHP and would be displayed using HTML. 
- I also used CSS to style my HTML pages so they were easier to view and had more style to them. 

Future Work
- If I had more time I would have liked to have added more questions and added a feature that would randomly pick a question from the txt file and then get rid of it from the file so it cant be pciked again. I would have also liked to save the results to that question to a new txt file for future viewing. I also would have liked to implement the feature where the user can submit their own question. And lastly if I had more time I would go back and add a feature that auto resets the users voting status so each new day it would reset and let them vote (currently have to do it manually). In addition to that I would have liked to added the voting lock again which prevents users from voting past 10pm.

citations: 
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

Grade Reflection:
- (Main Program Complexity and Usability) - I think I earned full points for this section since I used 3-4 languages in my project and made it easy for the user to navigate by styling each HTML page to be easy to view and interact with. In addition to this I also implemented user input validation such as user log in credentials and user search. 
- (Use of Multiple Languages) - I belive I earned full points for this section since I succesffuly implemented 3-4 languages through out my project which were all used frequently. I enjoyed learning how to implement multiple langauges into one project and I feel like my project really helped me get a full understadning of how the proccess works. 
- (Use of Languages) - I think I either got full points or may be at 10pts since I was picking the languages for my project based on similar projects we had in class such as the AP Testing-Website. The reason I would say I may lose points is because im not sure if implementing C++ was as effeicent as of other methods however I still think it works well with my project and worked as intended. 
- (Command line Arguments / File Input & Output) - For this section I feel like I earned full points since I frequently passed comand line arguments to each langauge such as when the user inputs the username for search, the PHP passes it to Python and Python passes it to C++ all through the command line. In addition to that, like my previous OEP, I stored user information and the questions into a txt file which was frequently read from and written to. 
- (Style and Documentation) - I think I may lose some points but not many since my style was pretty consistant and I had a decent amount of comments through out my code but there were areas which I could have added more comments to but since I kept reusing bits of my code in other areas of the project, I tended to slowly stoped keeping up with the comments across all files. 
- (Video) - I dont think I lost any points on this section. My video was shorter then my previous demo videos and I was able to show all the features and demonstrate input validation. 
- (Lifespan of Project) - I dont think I lost any points in this section since my repository had a lifespan of at least 7 days and each day I would make significant contributes throuhought the projects lifespan.  