<?php
    $insert=false;
    if (
    isset($_POST['name'], $_POST['gender'], $_POST['age'], $_POST['email'], $_POST['tel'], $_POST['desc']) &&
    !empty(trim($_POST['name'])) &&
    !empty(trim($_POST['gender'])) &&
    !empty(trim($_POST['age'])) &&
    !empty(trim($_POST['email'])) &&
    !empty(trim($_POST['tel'])) &&
    !empty(trim($_POST['desc']))
) {

        // Set conenction variables
        $server = "localhost";
        $username = "root";
        $password = "";

        // Create a database connection
        $con = mysqli_connect($server, $username, $password);
        
        // Check for connection success
        if(!$con) {
            die("Connection to this database failed due to ". mysqli_connect_error());
        }
        // echo "Successfully connected to the db";

        // Collect post variables
        $name = $_POST['name'];
        $gender = $_POST['gender'];
        $age = $_POST['age'];
        $email = $_POST['email'];
        $phone = $_POST['tel'];
        $other = $_POST['desc'];
        $sql = "INSERT INTO `rishikesh_trip`.`trip` (`Name`, `Age`, `Gender`, `Email`, `Telephone`, `Other`, `Date`) VALUES ('$name', '$age', '$gender', '$email', '$phone', '$other', current_timestamp());";
        // echo $sql;
        
        // Execute the query
        if($con->query($sql)==true) {
            $insert=true;
            // echo "Successfully inserted the data";
        }
        else {
            echo "ERROR: $sql <br> $con->error";
        }

        // Close the database connection
        $con->close();

    }
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="style.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&family=Sriracha&display=swap"
      rel="stylesheet" />
    <title>Welcome to Travel Form</title>
  </head>
  <body>
    <img
      src="https://www.euttaranchal.com/icms/cms-photos/Graphic-Era-University.webp"
      alt="Graphic Era Image"
      class="bg" />
    <div class="container">
      <h1>Welcome to Graphic Era's Rishikesh Trip Form</h1>
      <p>
        Enter your details and submit the form to confirm your participation in
        the trip
      </p>
      <?php
      if($insert==true) {
          echo "<p>
              Thanks for submitting your form. We're happy to see you joining the
              Rishikesh Trip
          </p>";
      }
      ?>

      <form action="index.php" method="post">
        <input
          type="text"
          name="name"
          id="name"
          placeholder="Enter your name" />
        <input type="number" name="age" id="age" placeholder="Enter your age" />
        <input
          type="text"
          name="gender"
          id="gender"
          placeholder="Enter your gender" />
        <input
          type="email"
          name="email"
          id="email"
          placeholder="Enter your email" />
        <input
          type="tel"
          name="tel"
          id="tel"
          placeholder="Enter your telephone number" />

        <textarea
          name="desc"
          id="desc"
          cols="30"
          rows="10"
          placeholder="Enter any other information here"></textarea>
        <button class="btn" type="submit">Submit</button>
        <!-- <button class="btn" type="reset">Reset</button> -->
      </form>
    </div>
    <script src="index.js"></script>
    
  </body>
</html>
