<?php 

 		$server = 'localhost';
        $user = 'root';
        $password = 'root';
        $db_name = 'yummy_bar_new'; /*name of the table created*/
        $port = '3306'; /*MySQL port in Xampp*/


$conn= new mysqli('localhost','root','root','yummy_bar_new')or die("Could not connect to mysql".mysqli_error($con));
