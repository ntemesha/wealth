<?php
// set the servername,username and password
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "wealth";

// Create connection
$conn = mysqli_connect($servername, $username, $password,$dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$fname = $_GET['fname'];
echo $fname;
echo "hi";
// $sql = "INSERT INTO `enquiry`(`id`, `firstname`, `lastname`, `email`, `address`, `city`, `state`, `postcode`, `phone`, `service`, `enquirybox`)
// VALUES ('[value-1]','[value-2]','[value-3]','[value-4]','[value-5]','[value-6]','[value-7]','[value-8]','[value-9]','[value-10]','[value-11]')";


// if (mysqli_query($conn, $sql)) {
//     echo "New record created successfully";
// } else {
//     echo "Error: " . $sql . "<br>" . mysqli_error($conn);
// }

mysqli_close($conn);


?>