<!DOCTYPE html>
<html>
<head>
	<title>Autovin</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<body>
<?php 

$conn =new mysqli('localhost', 'root', '' , 'autovin');
		if ($conn->connect_error) {
			echo "<b>Error:</b> Connection failed - $conn->connect_error";
		}

	$get_details=mysqli_query($conn, "SELECT * FROM `details`");

	while ($row_details=mysqli_fetch_array($get_details)) {?>

		<h3>Name: <?php echo $row_details['name']; ?> </h3>

		<h3>Email: <?php echo $row_details['email']; ?>  </h3>
		
	<?php } ?>
 


<script>
	// Fetch Api
fetch(`https://randomuser.me/api`)
     .then(res => res.json())
   .then(data => {
   		let data2=data.results[0];

   		let name= data2.name.first;
   		let email= data2.email;
   
    $.ajax({
        url: 'data?action=add_details',
        type: 'POST',
        dataType: 'json',
        data: { name: name, email: email },
        cache: false,
        success: function(data) {
 
            if (data == true) {
            	alert('success');          
            }
        },
        error: function(error_msg) {
            console.log(error_msg);
        }

    })

    })

</script>
</body>
</html>