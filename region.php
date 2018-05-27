<html>
    <head>
        <title>Pre-order</title>
    </head>
    <body>
        <p>Welcome to CSE216 pizza ordering website. Please choose your region and type of ordering.</p>
        <p>
            Regions:
            <br>
            <form action="order.php" method="post">
                <input type="radio" name="region" value="pozcu"> Pozcu
                <input type="radio" name="region" value="mezitli"> Mezitli
                <input type="radio" name="region" value="torosUni"> Toros University
                <input type="radio" name="region" value="others"> Others <br><br>
                Type of Ordering: <br><br>
                <input type="checkbox" name="orderType" value="pizza"> Pizza
                <input type="checkbox" name="orderType" value="beverage"> Beverage
                <input type="checkbox" name="orderType" value="dessert"> Dessert <br><br>
                <button name="next" id="next" type="submit">Next</button>
            </form>
        </p>
    </body>
</html>
