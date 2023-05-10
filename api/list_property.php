<?php
require("../includes/database_connect.php");

$full_name = $_POST['full_owner_name'];
$bed = $_POST['bed_number'];
// $email = $_POST['email'];
$description = $_POST['description'];
$room_type= $_POST['room_type'];
$amenities = $_POST['amenities'];
$city = $_POST['city'];
$address=$_POST['address'];


$sql = "SELECT * FROM listproperty WHERE full_name='$full_name'";
$result = mysqli_query($conn, $sql);
if (!$result) {
    $response = array("success" => false, "message" => "Something went wrong!");
    echo json_encode($response);
    return;
}

$row_count = mysqli_num_rows($result);
if ($row_count != 0) {
    $response = array("success" => false, "message" => "This name is already registered with us!");
    echo json_encode($response);
    return;
}

$sql = "INSERT INTO listproperty (full_name,bed,description,room_type,amenities,city,address) VALUES ('$full_name', '$bed', '$description', '$room_type', '$amenities','$city', '$address')";
$result = mysqli_query($conn, $sql);
if (!$result) {
    $response = array("success" => false, "message" => "Something went wrong!");
    echo json_encode($response);
    return;
}

$response = array("success" => true, "message" => "Your account has been created successfully!");
echo json_encode($response);
mysqli_close($conn);
