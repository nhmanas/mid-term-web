<html>
<title>Order the Meal</title>
<style>
    body
    {
        background-image:
                url("food.jpg");
        background-attachment:fixed;
        background-size: 100% 100%;
    }
    h1{
        font-family:"Times New Roman";
        font-size: 200%;
        border:5px solid #F70000;
        border-radius:25px;
        padding: 10px;
        margin: 30px;
        background-size:cover;
    }
    #btn1{
        width:130px;
        text-align: center;
        font-size: 16px;
        padding: 10px;
        margin: 0 auto 100px;
        border:5px solid #F70000;
        border-radius:25px;
    }
    #btn2{
        width:130px;
        margin-left:600px;
        margin-right:auto;
        font-size: 16px;
        padding: 10px;
        margin: 0 auto 100px;
        border:5px solid #F70000;
        border-radius:25px;

    }
</style>
<body>
<h1><center><span style="color:#F70000">Welcome To Online Order Food</span></center></h1>
<div style="text-align: center;margin:0 auto;">
    <form method="get" action="Costumer.html">
        <input type="submit" name="costumer" value="Costumer" id="btn1" ><br>
    </form>
    <form method="get" action="Admin.html">
        <input type="submit" name="admin" value="Administration" id="btn2" onClick="admpage">
    </form>





</div>

</body>
</html>