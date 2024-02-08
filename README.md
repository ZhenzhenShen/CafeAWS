Based on my visit to a local café's website, I noticed it lacked images for its menus. Seeing this from a customer's perspective, I decided to implement some modifications to meet my needs and understanding, simply as a way to hone my skills in PHP, CSS, and JavaScript.
This is a deployed “Villa Cafe” website on AWS. On this website, customers could view menus for “kids”, “mains” or “drinks” with photos, descriptions and prices; “Our story” is an introduction to the cafe and business hours. “Contact” contains google map, and our contact details. “Reviews” is an interactive part where customers could leave their reviews and all the information would be sent to a specific email for the staff to check. I believe this is an important part for the business to get reviews to improve their business. I basically want to practice the use of AWS services to deploy a php website.
  I used php, css, js for frontend, mySQL for database, AWS services including IAM, EC2, RDS, SES for cloud deployment. I used php over html because menus information is stored in sql, I need dynamic menu information; besides, reviews submission requires server-side languages to process primary authentication of data.  
Here is the website for cafe: 
 http://54.206.105.212/index.php
What I have learned: 
Because PHP is server-side language, I need to set up a web server environment that supports PHP on the EC2 instace. After creating EC2 instance, I need to connect to that instance by SSH. Here are the main SSH command: 
1.aws configure: to connect to AWS
2.ssh -i /path/to/your-key.pem ec2-user@your-instance-public-dns: to connect to instance
3.sudo apt-get update && sudo apt-get upgrade: to update web-server
4.sudo apt-get install apache2: to install apache server. Notice: CML and Ubuntu got different command line, for example, ubuntu used apache2 instead of apache. 
5.sudo apt-get install php libapache2-mod-php php-mysql: install PHP. 
6.sudo apt-get install mysql-server: Install mysql.
7.Upload PHP, css, js, images folder files to the server. 
I used SCP to upload files to “ /var/www/html/”. “ /var/www/html/” is a directory path in Linux Apache. It is a main folder for web files to be stored and served from.
I learned that it’s good practice to have a “index.php” as a entry point for applications, so I changed “menu.php” to “index.php” as an entry point. 
I encountered errors when trying to upload files in the existing CLI connected to EC2 instance . Instead, I should open up a new CLI to upload files, and this new CLI is only used to upload files. When I need to delete or make directory, it is still manipulated in the connected CLI. 
Test PHP setup.
After deploying php application, the website is not showing up. It is impossible to figure out what is the problem without “info.php” of “<?php phpinfo(); ?>”. When I run this php, it provides the error information. I found that I need to install Composer in Ubuntu to simplify dependency management for PHP.
SES and EC2 IAM role
After all preparations for sending reviews to email, I can’t receive the expected email. It came out that my EC2 instance did not have the authority to send emails. So I created “SESfullAccess” IAM role and connected to the instance, then the email is successfully sent. 
AWS security groups
   I allowed all SSH and http access to my instance. 
Test
1.Functional Testing: 
(1)All web pages are loading correctly. 
(2)The slide show function on the menu page is working. 
(3)All the buttons and navigation menus work correctly and lead to the correct page.  
(4)Test review form submission, enter valid and invalid data to test proper validation. I did try to use phpunit test, but there is something wrong all the time. The class in the test.php can’t be found. 
(5)Test SES email function is receiving the review data. 
Video link:  https://youtu.be/qYDVQA3Nc_c
Github link:  https://github.com/ZhenzhenShen/CafeAWS
