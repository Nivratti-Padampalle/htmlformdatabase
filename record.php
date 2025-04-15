<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form actin="" method="POST">
    <label for="name">First Name:</label><br><br>
    <input type="text" name="fname" required placehlder="enter your first name"><br>
    <label for="name">Last Name:</label><br><br>
    <input type="text" name="lname" required placehlder="enter your last name"><br>
    <label>Email:</label><br>
    <input type="email" name="email" required placeholder="Enter your email"><br><br>

    <label>Gender:</label><br>
    <select name="gender" required>
        <option value="">Select Gender</option>
        <option value="Male">Male</option>
        <option value="Female">Female</option>
    </select><br><br>

    <label>City:</label><br>
    <input type="text" name="city" required placeholder="Enter your city"><br><br>


    <button value="submit" name="sb">Submit</button>
</form>
<?php
    $conn = mysqli_connect('localhost', 'root', '', 'record');

    if (isset($_POST['sb'])) {
        $Firstname = $_POST['fname'];
        $Lastname = $_POST['lname'];
        $Email = $_POST['email'];
        $Gender = $_POST['gender'];
        $City = $_POST['city'];



        $query = "INSERT INTO registr_new (FIRSTNAME, LASTNAME,email,gender,city) VALUES ('$Firstname', '$Lastname','$Email','$Gender','$City')";
        $take = mysqli_query($conn, $query);

//        if ($run) {
  //          echo "Data inserted successfully.";
    //    } else {
      //      echo "Error: " . mysqli_error($conn);
        //}
    }
    ?>
</body>
</html>