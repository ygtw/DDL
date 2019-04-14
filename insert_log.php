<?php
mb_internal_encoding( 'UTF-8' );
header("Content-Type:text/html; charset=utf-8");


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ats";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
mysqli_query($conn,"set names 'utf8'");//寫庫 

$sql = "INSERT INTO `chat_log` (`chat`, `id`, `chatter`,`bot`) VALUES ('$_POST[chat]', NULL, '$_POST[chatter]','$_POST[bot]');";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>

