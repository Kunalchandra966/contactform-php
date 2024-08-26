<?php
if(isset($_POST['name']) ){
    $server = "localhost";
    $username = "root";
    $password = "";
    $dbname = "formm";

    $con = mysqli_connect($server , $username, $password , $dbname);

    if(!$con){
        die("Connection to this database failed due to". mysqli_connect_error());
    }

    // echo "sucess connection to the db"
    $name = $_POST['name'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $phone = $_POST['phone'];
    
    $sql = "INSERT INTO `formm` (`name`, `email`, `address`, `phone`, `dt`) VALUES ('$name', '$email', '$address', '$phone', current_timestamp());";

    // echo $sql;

    if($con->query($sql) == true){
        echo "sucessfully Inserted";
    }

    else{
        "ERROR : $sql <br> $con->error";
    }

    $con->close();

}
?>  

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>form</title>
</head>
<body>
    
        <form action="index.php" method="post">
            <div class="container">
                <div class="head">
                    <h1>Contact Form</h1>
                    <p>Please fill all the text in the fields</p>
            </div>

        
            <p>Your Name : </p>
            <input type="text" name="name" id="name" placeholder="Your Full Name">
            <p>Your Email : </p>
            <input type="email" name="email" id="email" placeholder="Valid Email Address">
            <p>address : </p>
            <textarea name="address" id="address"  placeholder="Address" ></textarea>
            <p>phone : </p>
            <input type="phone" name="phone" id="phone" placeholder="1122334455">
            <br>
            <br>
            <input type="submit" name="Send" value="Send">
            
        </form>
    </div>
    <script src="index.js" ></script>

</body>
</html>