<?php
$conn = mysqli_connect("localhost", "root", "", "foodorder");
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// 1. IF FORM IS SUBMITTED (POST) -> UPDATE PAYMENT METHOD
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['customer_id'], $_POST['payment_method'])) {
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
    }
}

// 2. WHEN PAGE LOADS (GET or POST) -> FETCH TOTAL AMOUNT
$customer_id = isset($_REQUEST['customer_id']) ? mysqli_real_escape_string($conn, $_REQUEST['customer_id']) : '';
$grand_total = 0;

if (!empty($customer_id)) {
    $total_sql = "SELECT SUM(total_price) AS total FROM orders WHERE customer_id = '$customer_id' AND payment_method IS NULL";
    $result = mysqli_query($conn, $total_sql);
    if ($row = mysqli_fetch_assoc($result)) {
        $grand_total = $row['total'] ? $row['total'] : 0;
    }
}

// 3. CLOSE CONNECTION AT THE VERY END
mysqli_close($conn);
?>
