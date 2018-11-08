**System Requirement**
* System is build over Laravel 5.x so minimal system requirement are as below
    * Apache Server (optional)
    * PHP (7.x or higher)
    * MySQL (5.x or higher)
    * composer (getcomposer.org)

**Instructions to SETUP**
* Step 1: Unzip code and copy extracted data to you www of root directory of your apache
* Step 2: Create an empty database named ***paymentproccessor*** and 
* Step 3: Add Database details in .env file
* Step 4: Execute ***composer update***
* Step 5: Execute ***php artisan migrate***

**Instructions to RUN**
* In case you are not having Apache2 than you can use ***php artisan serve*** and hit http://localhost:8080/
* In case you are using Apache2 than just hit the url in browser http://localhost/paymentproccessor/public/
* You will see cart information
* After than you will be moved to billing information form there and after filling it
* And than you will see payment details form in next step
* You will be re-directed to Order Complete Page
* (optional) if you want you can add vhost too. 


**Note:-
* I've uploaded screenshot's of this running code under screenshot folder. 