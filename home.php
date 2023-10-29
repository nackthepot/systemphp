<?php
    include("php/connectdb.php")
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
table {
  border: 1px solid black;
}
th {
  color: white;
  padding: 20px;
  background-color: blue;
  border: 1px solid black;
}
td {
  width: 50%;
  border: 1px solid black;
  height: 40px;
}
tr {
    
}

.btn{
    background-color: red;
    padding: 2px 5px;
    border-radius: 5px;
    text-decoration: none;
    color : white;
}

.btn1{
    background-color: green;
    margin-left: 10px;
}

.btn2{
    background-color: red;
}
</style>
<link rel="stylesheet" href="style.css">
</head>
<body>
<?php include("php/menu.php") ?><br>
    <h1>หน้าหลัก</h1>
    <div class="wrapper">
<table class="table">
    <thead>
        <tr>
            <th>รหัสสินค้า</th>
            <th>ชื่อสินค้า</th>
            <th>ที่จัดเก็บ</th>
            <th>ACTION</th>
        </tr>
    </thead>
    <?php
        $sql = "SELECT * FROM product_nb";
        $result = mysqli_query($conn,$sql);

        while($row = $result->fetch_assoc()){
            echo "
            <tr>
       
            <td>$row[sku]</td>
            <td>$row[name_nb]</td>
            <td>$row[stock_id]</td>
            <td>
                <a class='btn btn1' href='edit_product.php?id=$row[id]&sku=$row[sku]&name=$row[name_nb]'>edit</a>
                <a class='btn btn2' href='delete.php?id=$row[id]'>delete</a>
            </td>
        </tr>
        ";
        }
    ?>
</body>
</html>