
<?php
session_start();
require_once ("vendor/autoload.php");
use App\Cart;

$session = session_id();
//var_dump($session) ;
//exit();
$cart = new Cart();
$cart->setData($_POST);



if(!isset($_GET['id']) || $_GET['id']==NULL ){
    echo "error";
}
else {
    $productID = $_GET['id'];
}




?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>
</head>
<body>
<table align="center">
    <tr>  <th>Product</th>
        <th>Quantity</th>
        <th>Price</th>
        <th>Amount</th>
    </tr>
    <tr>
        <td></td>
    </tr>

</table>

</body>
</html>