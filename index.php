<html>
	<head>
		<title>Address book</title>
		<link rel="stylesheet" href="styles.css">
	</head>
	<body>
	
		<nav>
			<li><a href="#signUp">Sign Up</a></li>
			<li><a href="#search">Search</a></li><br><br>
		</nav>
		
		<div id="signUp">
			<form action="index.php" method="post">
				<input type="text" name="name" id="name" placeholder="Enter your name"><br><br>
				<input type="password" name="password" id="password" placeholder="Enter your password"><br><br>
				<!-- <input type="text" name="add1" id="add1" placeholder="Enter your address - line 1"><br><br> -->
				<!-- <input type="text" name="add2" id="add2" placeholder="Enter your address - line 2"><br><br> -->
				<!-- <input type="text" name="city" id="city" placeholder="Enter your city"><br><br> -->
				<!-- <input type="text" name="state" id="state" placeholder="Enter your state"><br><br> -->
				<!-- <input type="email" name="email" id="email" placeholder="Enter your email i"><br><br> -->
				<input type="submit" value="Submit" name="signUp"><br><br>
				<!-- <input type="submit" value="Update" name="update"><br><br> -->
				<!-- <input type="submit" value="Delete" name="delete"><br><br> -->
			</form>
		</div>
		
		<!-- <div id="search">
			<form action="lab10.php" method="post"> 
				<input type="email" name="email" id="email" placeholder="Enter your email id"><br><br>
				<input type="submit" value="Search" name="search">
			</form>
		</div> -->
		
		<!-- <div> -->
        <!-- <table name = "userDetails" class="table">
        <tr>
            <th>First Name</th>
            <th>Ema</th>
            <th>Designation</th>
            <th>Address 1</th>
            <th>Address 2</th>
            <th>City</th>
            <th>State</th>
        </tr> -->
		
                <!-- // include 'connection.php';
                // if(isset($_POST['search'])){
                    // $email = $_POST['email'];
            // 
                    // $table="userdata";
            // 
                    // $sql = "SELECT * FROM $table WHERE Email='$email'";
                    // $result = $conn->query($sql);
                    // if(mysqli_num_rows($result) > 0){
                        // while ($row = mysqli_fetch_assoc($result)) {
                            // echo '<tr>';
                            // echo '<td>'. $row['Name'] .'</td>';
                            // echo '<td>'. $row['Email'] .'</td>';
                            // echo '<td>'. $row['Designation'] .'</td>';
                            // echo '<td>'. $row['Address1'] .'</td>';
                            // echo '<td>'. $row['Address2'] .'</td>';
                            // echo '<td>'. $row['City'] .'</td>';
                            // echo '<td>'. $row['State'] .'</td>';
                            // echo '</tr>';
                        // }
                    // }
                // }
            ?> --> 

	</body>
</html>

<?php
    include 'connection.php';
    if(isset($_POST['signUp'])){
        $name = $_POST['name'];
        $password = $_POST['password'];
        // $email = $_POST['email'];
        // $desig = $_POST['desig'];
        // $add1 = $_POST['add1'];
        // $add2 = $_POST['add2'];
        // $city = $_POST['city'];
        // $state = $_POST['state'];

        $users_table="users";
        $passkey_table="passkey";
        $purchase_table="purchase";

        $sql = "INSERT INTO $users_table VALUES (3,'$name')";

        if ($conn->query($sql) === TRUE) {
            echo '<script language="javascript">';
            echo 'alert("New record created successfully")';
            echo '</script>';
          } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
          }   
        
          $sql = "INSERT INTO $passkey_table VALUES ('$name','$password')";

        if ($conn->query($sql) === TRUE) {
            echo '<script language="javascript">';
            echo 'alert("New record created successfully")';
            echo '</script>';
          } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
          }   
          
          $sql = "INSERT INTO $purchase_table VALUES ('$name','laptop')";

          if ($conn->query($sql) === TRUE) {
              echo '<script language="javascript">';
              echo 'alert("New record created successfully")';
              echo '</script>';
            } else {
              echo "Error: " . $sql . "<br>" . $conn->error;
            }   
    }
    // if(isset($_POST['delete'])){
    //     $table="userdata";
    //     $sql = "DELETE FROM $table";
    //     if ($conn->query($sql) === TRUE) {
    //         echo '<script language="javascript">';
    //         echo 'alert("All Data Deleted")';
    //         echo '</script>';
    //       } else {
    //         echo "Error: " . $sql . "<br>" . $conn->error;
    //       }   
    // }
    // if(isset($_POST['update'])){
    //     $table="userdata";
    //     $email = $_POST['email'];
    //     $add1 = $_POST['add1'];
    //     $sql = "UPDATE $table SET ADDRESS1='$add1' WHERE Email='$email'";
    //     if ($conn->query($sql) === TRUE) {
    //         echo '<script language="javascript">';
    //         echo 'alert("Data Updated")';
    //         echo '</script>';
    //       } else {
    //         echo "Error: " . $sql . "<br>" . $conn->error;
    //       }   
    // }
?>
