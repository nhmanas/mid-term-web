<?php 
if(isset($_POST['next'])){
    $regions = array();
    $orderTypes = array();
    $regions = @$_POST['region'];
    $orderTypes = @$_POST['orderType'];
}

?>

<html>
    <head>
        <title>Order</title>
    </head>
    <body>
    
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
            <form action="">
            <tr>
                <td><input type="checkbox" name="orderType" value="vPizza"> Vegeterian Pizza</td>
                <td><input type="checkbox" name="size" value="small"> 15 TL</td>
                <td><input type="checkbox" name="size" value="medium"> 17 TL</td>
                <td><input type="checkbox" name="size" value="large"> 20 TL</td>
                <td><input type="text" name="number" value=""></td>
                <td><input type="text" name="availability" value=""></td>
            </tr>
            <tr>
                <td><input type="checkbox" name="orderType" value="cPizza"> Chicken Pizza</td>
                <td><input type="checkbox" name="size" value="small"> 18 TL</td>
                <td><input type="checkbox" name="size" value="medium"> 20 TL</td>
                <td><input type="checkbox" name="size" value="large"> 22 TL</td>
                <td><input type="text" name="number" value=""></td>
                <td><input type="text" name="availability" value=""></td>
            </tr>
            <tr>
                <td><input type="checkbox" name="orderType" value="mPizza"> Meat Pizza</td>
                <td><input type="checkbox" name="size" value="small"> 15 TL</td>
                <td><input type="checkbox" name="size" value="medium"> 17 TL</td>
                <td><input type="checkbox" name="size" value="large"> 20 TL</td>
                <td><input type="text" name="number" value=""></td>
                <td><input type="text" name="availability" value=""></td>
            </tr>
            <tr>
                <td><input type="checkbox" name="orderType" value="pPizza"> Pepperoni Pizza</td>
                <td><input type="checkbox" name="size" value="small"> 19 TL</td>
                <td><input type="checkbox" name="size" value="medium"> 21 TL</td>
                <td><input type="checkbox" name="size" value="large"> 23 TL</td>
                <td><input type="text" name="number" value=""></td>
                <td><input type="text" name="availability" value=""></td>
            </tr>
            <tr>
                <td><input type="checkbox" name="orderType" value="mixPizza"> Mix Pizza</td>
                <td><input type="checkbox" name="size" value="small"> 20 TL</td>
                <td><input type="checkbox" name="size" value="medium"> 22 TL</td>
                <td><input type="checkbox" name="size" value="large"> 24 TL</td>
                <td><input type="text" name="number" value=""></td>
                <td><input type="text" name="availability" value=""></td>
            </tr>
            <tr>
                <td><input type="checkbox" name="orderType" value="vPizza"> COME308 Special Pizza</td>
                <td><input type="checkbox" name="size" value="small"> 22 TL</td>
                <td><input type="checkbox" name="size" value="medium"> 23 TL</td>
                <td><input type="checkbox" name="size" value="large"> 26 TL</td>
                <td><input type="text" name="number" value=""></td>
                <td><input type="text" name="availability" value=""></td>
            </tr>
            </form><br>
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
            <form action="">
            <tr>
                <td><input type="checkbox" name="orderType" value="water"> Water</td>
                <td><center>2 TL</center></td>
                <td><input type="text" name="number" value=""></td>
                <td><input type="text" name="availability" value=""></td>
            </tr>
            <tr>
                <td><input type="checkbox" name="orderType" value="cola"> Cola</td>
                <td><center>4 TL</center></td>
                <td><input type="text" name="number" value=""></td>
                <td><input type="text" name="availability" value=""></td>
            </tr>
            <tr>
                <td><input type="checkbox" name="orderType" value="beer"> Beer</td>
                <td><center>6 TL</center></td>
                <td><input type="text" name="number" value=""></td>
                <td><input type="text" name="availability" value=""></td>
            </tr>
            <tr>
                <td><input type="checkbox" name="orderType" value="ayran"> Ayran</td>
                <td><center>3 TL</center></td>
                <td><input type="text" name="number" value=""></td>
                <td><input type="text" name="availability" value=""></td>
            </tr>
            <tr>
                <td><input type="checkbox" name="orderType" value="tea"> Tea</td>
                <td><center>4 TL</center></td>
                <td><input type="text" name="number" value=""></td>
                <td><input type="text" name="availability" value=""></td>
            </tr>
            <tr>
                <td><input type="checkbox" name="orderType" value="coffeee"> Coffee</td>
                <td><center>4 TL</center></td>
                <td><input type="text" name="number" value=""></td>
                <td><input type="text" name="availability" value=""></td>
            </tr>
            </form>
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
            <form action="">
            <tr>
                <td><input type="checkbox" name="orderType" value="aPie"> Apple Pie</td>
                <td><center>2 TL</center></td>
                <td><input type="text" name="number" value=""></td>
                <td><input type="text" name="availability" value=""></td>
            </tr>
            <tr>
                <td><input type="checkbox" name="orderType" value="cCake"> Chocolate Cake</td>
                <td><center>4 TL</center></td>
                <td><input type="text" name="number" value=""></td>
                <td><input type="text" name="availability" value=""></td>
            </tr>
            <tr>
                <td><input type="checkbox" name="orderType" value="bPudding"> Bananna Pudding</td>
                <td><center>6 TL</center></td>
                <td><input type="text" name="number" value=""></td>
                <td><input type="text" name="availability" value=""></td>
            </tr>
            <tr>
                <td><input type="checkbox" name="orderType" value="iCream"> Ice Cream</td>
                <td><center>3 TL</center></td>
                <td><input type="text" name="number" value=""></td>
                <td><input type="text" name="availability" value=""></td>
            </tr>
            <tr>
                <td><input type="checkbox" name="orderType" value="qurabiya"> Qurabiya</td>
                <td><center>4 TL</center></td>
                <td><input type="text" name="number" value=""></td>
                <td><input type="text" name="availability" value=""></td>
            </tr>
            <tr>
                <td><input type="checkbox" name="orderType" value="sWafel"> Stroopwafel</td>
                <td><center>4 TL</center></td>
                <td><input type="text" name="number" value=""></td>
                <td><input type="text" name="availability" value=""></td>
            </tr>
            </form>
        </table>
    <!-- @Dessert -->
    <?php } ?>
    </body>
</html>