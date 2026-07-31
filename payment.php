<?php
$conn = mysqli_connect("localhost", "root", "", "foodorder");
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$customer_id = mysqli_real_escape_string($conn, $_POST['customer_id']);
$payment_method = mysqli_real_escape_string($conn, $_POST['payment_method']);
if (!empty($customer_id) && !empty($payment_method)) {
    $sql = "UPDATE orders SET payment_method = '$payment_method' WHERE customer_id = '$customer_id' AND payment_method IS NULL";
    if (mysqli_query($conn, $sql)) {
        if (mysqli_affected_rows($conn) > 0) {
            header("Location: orderconfirment.html?customer_id=$customer_id");
            exit();
        } else {
            echo "No pending orders found for customer_id: $customer_id or payment_method is already set.";
        }
    } else {
        echo "Error updating record: " . mysqli_error($conn);
    }
} else {
    echo "Invalid input. Customer ID or payment method is missing.";
}
mysqli_close($conn);
?>
