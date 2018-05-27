<?php
@include ('bagla.php');
if(isset($_POST['submit'])){
    $order_ids = @$_POST['order_id'];
    $number = @$_POST['number'];
    $price = @$_POST['price'];

    $total_price = 0;
    

    foreach($order_ids as $order_id){
        $sql = "SELECT * FROM urun WHERE id = ".$order_id."";
        $uruns = $mydb->query($sql);
        if ($uruns->num_rows > 0) {
            foreach($uruns as $urun){
                if($price == 1){
                    $total_price += $urun['small'];
                }  
                if($price == 2){
                    $total_price += $urun['medium'];
                }
                if($price == 3){
                    $total_price += $urun['large'];
                }
            }
        }
    }

    echo $number;
}
?>