<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
<form action="" method="POST">
    <input type="text" name="name">
    <input type="text" name="cpu">
    <input type="text" name="ram">
    <input type="text" name="vga">
    <input type="text" name="price">
    <input type="submit" value="ok">
</body>
</html>
    <?php
        $name = $_POST["name"];
        $cpu = $_POST["cpu"];
        $ram = $_POST["ram"];
        $vga = $_POST["vga"];
        $price = $_POST["price"];
        $spec = ["cpu" => $cpu,
                 "ram" => $ram,
                 "vga" => $vga];
        $json = json_encode($spec);
        $sql = "INSERT INTO products (name,spec,price)
                VALUES ('$name','$json','$price')";
        $result = mysqli_query($conn,$sql);
        $stmt = $conn ->prepare($sql);
        

        echo $name . "<br>";
        echo $json . "<br>";
        echo $price ;

    ?>