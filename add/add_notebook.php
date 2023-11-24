<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/style.css">
</head>

<body>
    <?php include("../php/connectdb.php") ?>
    <?php include("../php/menu.php") ?>
    <h1> เพิ่ม Notebook </h1>
    <form action="" method="POST">
        <label>รหัส SKU : </label>
        <input type="text" name="sku" placeholder="SKU"><br>
        <label>ชื่อแบรนด์สินค้า : </label>
        <input type="text" name="brand" placeholder="brand"><br>
        <label>ชื่อรุ่นสินค้า </label>
        <input type="text" name="model" placeholder="ชื่อรุ่น"><br>
        <label>รหัส Serial Number </label>
        <input type="text" name="serial" placeholder="Serial Number"><br>
        <label>วันที่รับเข้า </label>
        <input type="date" name="date"><br>
        <label>ผู้รับประกัน </label>
        <select name="warranty_com_id"><br>
            <?php
            $sql = "SELECT * FROM warranty_com";
            $result = mysqli_query($conn, $sql);
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<option value='{$row['warranty_com_id']}'>{$row['warranty_com_name']}</option>";
            }
            ?>
        </select>
        <br>
        <label>วันหมดประกัน</label>
        <input type="date" name="warranty"><br>
        <label>แหล่งที่มา </label>
        <select name="dealer_id"><br>
            <?php
            $sql = "SELECT * FROM dealer";
            $result = mysqli_query($conn, $sql);
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<option value='{$row['dealer_id']}'>{$row['dealer_name']}</option>";
            }
            ?>
        </select>
        <br>
        <label>ราคารับเข้า</label>
        <input type="text" name="price_buy" placeholder="ราคารับเข้า"><br>
        <label>ราคาขาย </label>
        <input type="text" name="price_sell" placeholder="ราคาขาย"><br>
        <label>ราคาพิเศษ </label>
        <input type="text" name="price_net" placeholder="ราคาพิเศษ"><br>
        <label>ข้อมูลเพิ่มเติม</label>
        <input type="text" name="comment" placeholder="ข้อมูลเพิ่มเติม"><br>
        <label>ผู้รับเข้า</label>
        <select name="employee_id"><br>
            <?php
            $sql = "SELECT * FROM employee";
            $result = mysqli_query($conn, $sql);
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<option value='{$row['employee_id']}'>{$row['employee_name']}</option>";
            }
            ?>
        </select>
        <br>
        <input type="submit" class="button button2" value="OK!" onclick="return confirm('คุณต้องการบันทึกข้อมูลนี้ใช่หรือไม่');">

    </form>

</body>

</html>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $sku = $_POST["sku"];
    $brand = $_POST["brand"];
    $model = $_POST["model"];
    $serial = $_POST["serial"];
    $date = $_POST["date"];
    $warranty_com_id = $_POST["warranty_com_id"];
    $warranty = $_POST["warranty"];
    $dealer_id = $_POST["dealer_id"];
    $price_buy = $_POST["price_buy"];
    $price_sell = $_POST["price_sell"];
    $price_net = $_POST["price_net"];
    $comment = $_POST["comment"];
    $employee_id = $_POST["employee_id"];

    if (empty($sku)) {
        echo "โปรดกรอก SKU";
    } elseif (empty($brand)) {
        echo "โปรดกรอก brand";
    } elseif (empty($model)) {
        echo "โปรดกรอก model";
    } elseif (empty($serial)) {
        echo "โปรดกรอกรหัส SN";
    } elseif (empty($date)) {
        echo "โปรดใส่วันที่";
    } else {

        $sql = "SELECT * FROM products WHERE sku = '$sku'";
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) > 0) {
            echo "รหัสสินค้าซ้ำ";
            exit();
        } else {
            $sql = "INSERT products (sku,brand,model,product_serial,product_date,warranty_com_id,warranty,dealer_id,price_buy,price_sell,price_net,comment,employee_id)
                                                                    VALUES ('$sku','$brand','$model','$serial','$date','$warranty_com_id','$warranty','$dealer_id','$price_buy','$price_sell','$price_net','$comment','$employee_id')";
        }

        mysqli_query($conn, $sql);
        echo "เก็บเข้าระบบเรียบน้อย";
    }
}
mysqli_close($conn);

?>