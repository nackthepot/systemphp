<?php
    include("php/connectdb.php")
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php include("php/menu.php") ?><br>
    <h1>เพิ่มสินค้า</h1>
    <form action="" method="POST">
        <input type="text" name="sku" placeholder="sku">
        <input type="text" name="name" placeholder="name">
        <input type="text" name="price_buy" placeholder="price_buy">
        <input type="submit" value="OK">
    </form>
        <?php
        if($_SERVER["REQUEST_METHOD"] == "POST"){
                $sku = $_POST["sku"];
                $name_nb = $_POST["name"];
                $price_buy = $_POST["price_buy"];
                
                $sql = "INSERT INTO product_nb (sku,name_nb)
                        VALUES ('$sku','$name_nb')";
                $sql2 = "INSERT INTO price (sku,price_buy)
                        VALUES ('$sku','$price_buy')";
                $result = mysqli_query($conn,$sql);
                $result = mysqli_query($conn,$sql2);

                        echo "เก็บเข้าระบบเรียบน้อย";    
                        
                    }
                mysqli_close($conn);        
    ?>
    
   
</body>
</html>