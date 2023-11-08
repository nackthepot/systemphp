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