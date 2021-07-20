<?php

$conn =new mysqli('localhost', 'root', '' , 'autovin');
		if ($conn->connect_error) {
			echo "<b>Error:</b> Connection failed - $conn->connect_error";
		}


if(isset($_GET['action']) && $_GET['action']=='add_details'){

            $insert="INSERT INTO `details`(`id`, `name`, `email`) VALUES (NULL,'$_POST[name]','$_POST[email]')";

            	mysqli_query($conn, $insert);

			    echo true;
     }