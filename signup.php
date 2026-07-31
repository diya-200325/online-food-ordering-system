<?php
$conn = mysqli_connect("localhost", "root", "", "foodorder");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$customer_id = $_POST["customer_id"];
$first_name = $_POST["first_name"];
$last_name = $_POST["last_name"];
$phone = $_POST["phone"];
$address = $_POST["address"];
$sql = "INSERT INTO users (customer_id, first_name, last_name, phone, address) VALUES (?, ?, ?, ?, ?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param("sssss", $customer_id, $first_name, $last_name, $phone, $address);
if ($stmt->execute()) {
    $stmt->close();
    header("Location: dishes.html?customer_id=" . urlencode($customer_id));
    exit();
} else {
    echo "Error: " . $sql . "<br>" . $stmt->error;
}
$conn->close();
?>
