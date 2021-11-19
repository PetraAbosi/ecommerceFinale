<?php
session_start();
require('../controllers/cart_controller.php');
// displayAllOrderDetail();

$customer_email = $_SESSION['customer_email'];
$customer_id = $_SESSION['customer_id'];
$order_status = 'Pending';
$invoice_no = rand(1,100);
$order = add_orders($customer_id, $invoice_no, $order_status);

echo 'Customer Email: ' .$customer_email;

echo 'Customer Id: ' .$customer_id;


echo 'Invoice Number: '. $invoice_no;


echo 'Order Status: '. $order_status;










?>

<a class="btn btn-primary display-flex" href="../view/initialize.php">Pay</a>

