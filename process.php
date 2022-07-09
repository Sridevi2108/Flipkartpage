<?php
if (isset($_POST['submit'])) {
    if (isset($_POST['firstname']) && isset($_POST['lastname']) &&
        isset($_POST['country']) && isset($_POST['streetaddress']) &&
        isset($_POST['city']) && isset($_POST['state']) &&
        isset($_POST['zip']) && isset($_POST['phone']) &&
        isset($_POST['email'])){
        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
		$country=$_POST['country'];
        $streetaddress = $_POST['streetaddress'];
        $city= $_POST['city'];
		$state=$_POST['state'];
		$zip=$_POST['zip'];
		$phone=$_POST['phone'];
		$email=$_POST['email'];
		
        $host = "localhost";
        $dbUsername = "root";
        $dbPassword = "";
        $dbName = "login";
        $conn = new mysqli($host, $dbUsername, $dbPassword, $dbName);
        if ($conn->connect_error) {
            die('Could not connect to the database.');
        }
        else {
            $Select = "SELECT email FROM orders WHERE email = ? LIMIT 1";
            $Insert = "INSERT INTO orders(firstname,lastname,country,streetaddress,city,state,zip,phone,email) values(?, ?, ?, ?, ? , ? , ? , ? , ?)";
            $stmt = $conn->prepare($Select);
            $stmt->bind_param("s", $email);
            $stmt->execute();
            $stmt->bind_result($resultEmail);
            $stmt->store_result();
            $stmt->fetch();
            $rnum = $stmt->num_rows;
            if ($rnum == 0) {
                $stmt->close();
                $stmt = $conn->prepare($Insert);
                $stmt->bind_param("ssssssiis",$firstname,$lastname,$country,$streetaddress,$city,$state,$zip,$phone, $email);
                if ($stmt->execute()) {
                    echo "New record inserted sucessfully.";
                }
                else {
                    echo $stmt->error;
                }
            }
            else {
                echo "Someone already registers using this email.";
            }
            $stmt->close();
            $conn->close();
        }
    }
    else {
        echo "All field are required.";
        die();
    }
}
else {
    echo "Submit button is not set";
}
?>
}
