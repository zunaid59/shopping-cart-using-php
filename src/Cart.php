<?php
/**
 * Created by PhpStorm.
 * User: Shabber
 * Date: 2/11/2018
 * Time: 10:21 PM
 */

namespace App;

use App\Database as DB;
use PDO;

class Cart extends DB
{
        private $id;


        public function setData($allPostData = null){

            $this->id = $allPostData['id'];


        }



    public function addToCart($productID,$Quantity){

        if($Quantity !=null){

            $ProductID = $productID;
            $sessionID = session_id();


            $sql= "SELECT * FROM tbl_product WHERE productID=".$ProductID;
            var_dump($sql);
            $STH = $this->DBH->query($sql);
            $result=$STH->fetch();
            $productName = $result['productName'];
            $price = $result['price'];
            $image = $result['image'];

            $query ="INSERT INTO tbl_cart(sessionID,productID,productName,price,quantity,image)VALUES ('$sessionID','$productID','$productName','$price','$Quantity','$image')";
            $STH = $this->DBH->prepare($query);

            if($STH){
                echo "success";
            }
            else{
                echo "not inserted";
            }
            }
        else{
            echo 'Quantity is Null';
        }

    }


}