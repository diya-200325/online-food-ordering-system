<?php
$conn = mysqli_connect("localhost", "root", "", "foodorder");
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['customer_id'], $_POST['food_id'], $_POST['quantity'])) {
    $customer_id = mysqli_real_escape_string($conn, $_POST['customer_id']);
    
    $result = $conn->query("SELECT customer_id FROM users WHERE customer_id = '$customer_id'");
    if ($result->num_rows == 0) {
        die("Invalid customer_id: " . $customer_id);
    }
    foreach ($_POST['food_id'] as $index => $food_id) {
        $quantity = intval($_POST['quantity'][$index]);
        if ($quantity > 0) {
            $food_id = mysqli_real_escape_string($conn, $food_id);
            $result = $conn->query("SELECT price FROM food_details WHERE food_id = '$food_id'");
            if ($result && $result->num_rows > 0) {
                $row = $result->fetch_assoc();
                $total_price = $quantity * $row['price'];
                $sql = "INSERT INTO orders (customer_id, food_id, quantity, total_price, order_date) 
                        VALUES ('$customer_id', '$food_id', '$quantity', '$total_price', NOW())";
                $conn->query($sql);
            }
        }
    }
    header("Location: payment.html?customer_id=" . urlencode($customer_id));
    exit();
}
mysqli_close($conn);
?>
