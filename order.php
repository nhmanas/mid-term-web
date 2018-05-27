<?php 
@include ('bagla.php');
if(isset($_POST['next'])){
    $regions = array();
    $orderTypes = array();
    $regions = @$_POST['region'];
    $orderTypes = @$_POST['orderType'];
    $sql = "SELECT * FROM urun";
    $urunler = $mydb->query($sql);
    $pizzas = array();
    $beverages = array();
    $desserts = array();
    if ($urunler->num_rows > 0) {
        foreach($urunler as $urun){
            if($urun['type'] == 1){
                array_push($pizzas,$urun);
            }
            if($urun['type'] == 2){
                array_push($beverages,$urun);
            }
            if($urun['type'] == 3){
                array_push($desserts,$urun);
            }                        
        }
    }
}

?>

<html>
    <head>
        <title>Order</title>
    </head>
    <body>
    <form action="customer.php" method="post">
    
    <?php 
        $pizza = false;
        $beverage = false;
        $dessert = false;
        foreach($orderTypes as $orderType){
            if($orderType == "pizza"){
                $pizza = true;
            }
            if($orderType == "beverage"){
                $beverage = true;
            }      
            if($orderType == "dessert"){
                $dessert = true;
            }     
        }
    ?>

    <?php if($pizza){ ?>
    <!-- Pizza -->
    Pizza: <br>
        <table border="0">
            <tr>
                <td></td>
                <td colspan="3"><center>Price</center></td>
            </tr>
            <tr>
                <td> </td>
                <td><center>Small</center></td>
                <td><center>Medium</center></td>
                <td><center>Large</center></td>
                <td><center>Number</center></td>
                <td><center>Availability</center></td>
            </tr>
            <?php foreach($pizzas as $pizza){ ?>
            <tr>
                <td><input type="checkbox" name="order_id[]" value="<?= $pizza['id'] ?>"> <?= $pizza['name'] ?></td>
                <td><input type="radio" name="price" value="1"> <?= $pizza['small'] ?> TL</td>
                <td><input type="radio" name="price" value="2"> <?= $pizza['medium'] ?> TL</td>
                <td><input type="radio" name="price" value="3"> <?= $pizza['large'] ?> TL</td>
                <td><input type="text" name="number" value=""></td>
                <td><input type="text" name="availability" value="<?= $pizza['availability'] ?>"></td>
            </tr>
            <?php } ?>

            <br>
        </table> <br> <br>
    <!-- @pizza -->
    <?php } ?>
    <?php if($beverage){ ?>
    <!-- Beverage -->
    Beverage: <br>
        <table border="0">
            <tr>
                <td></td>
                <td colspan="1"><center>Price</center></td>
                <td><center>Number</center></td>
                <td><center>Availability</center></td>
            </tr>
            <?php foreach($beverages as $beverage){ ?>
            <tr>
                <td><input type="checkbox" name="order_id[]" value="<?= $beverage['id'] ?>"> <?= $beverage['name'] ?></td>
                <td><center><?= $beverage['small'] ?> TL</center></td>
                <td><input type="text" name="number" value=""></td>
                <td><input type="text" name="availability" value="<?= $beverage['availability'] ?>"></td>
            </tr>
            <?php } ?>
        </table> <br> <br>
    <!-- @Beverage -->
    <?php } ?>
    <?php if($dessert){ ?>
    <!-- Dessert -->
        Dessert: <br>
        <table border="0">
            <tr>
                <td></td>
                <td colspan="1"><center>Price</center></td>
                <td><center>Number</center></td>
                <td><center>Availability</center></td>
            </tr>
            <?php foreach($desserts as $dessert){ ?>
            <tr>
                <td><input type="checkbox" name="order_id[]" value="<?= $dessert['id'] ?>"> <?= $dessert['name'] ?></td>
                <td><center><?= $dessert['small'] ?> TL</center></td>
                <td><input type="text" name="number" value=""></td>
                <td><input type="text" name="availability" value="<?= $dessert['availability'] ?>"></td>
            </tr>
            <?php } ?>
        </table>
    <!-- @Dessert -->
    <?php } ?>
    <button name="submit" id="submit" type="submit" style="margin-top: 5px;">Submit</button>
    </form>
    </body>
</html>