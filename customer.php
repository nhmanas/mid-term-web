<?php
@include ('bagla.php');
if(isset($_POST['submit'])){
    $order_ids = @$_POST['order_id'];
    $total_price = 0;
    foreach($order_ids as $order_id){
        $sql = "SELECT * FROM urun WHERE id = ".$order_id."";
        $uruns = $mydb->query($sql);
        $number_post = 'number'.$order_id;
        $number = $_POST[$number_post];
        $price_post = 'price'. $order_id;
        $price = @$_POST[$price_post];
        if ($uruns->num_rows > 0) {
            foreach($uruns as $urun){
                if($price == 1){
                    $total_price += $urun['small'] * $number;
                }  
                if($price == 2){
                    $total_price += $urun['medium'] * $number;
                }
                if($price == 3){
                    $total_price += $urun['large'] * $number;
                }
            }
        }
    }
    $user_id = @$_SESSION['user_id'];
    $sql = "INSERT INTO orders (user_id, orders, total_price) VALUES ('".$user_id."', '".json_encode($order_ids)."',  '".$total_price."')";
    if ($mydb->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $mydb->error;
    }
    $mydb->close();
}
?>