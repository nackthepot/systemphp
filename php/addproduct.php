<?php
                        if($_SERVER["REQUEST_METHOD"] == "POST"){
                                $sku = $_POST["sku"];
                                $name_nb = $_POST["name"];
                                $stock_id = $_POST["stock_id"];
                                
                                $sql = "SELECT * FROM product_nb WHERE sku = '$sku'";
                                $result = mysqli_query($conn,$sql);

                                        if(mysqli_num_rows($result) > 0){
                                            echo "รหัสสินค้าซ้ำ";
                                            exit();
                                        }
                                        $sql = "INSERT product_nb (sku,name_nb,stock_id)
                                                VALUES ('$sku','$name_nb','$stock_id')";
                                
                                        mysqli_query($conn,$sql);
                                        echo "เก็บเข้าระบบเรียบน้อย";    
                                        
                                    }
                            mysqli_close($conn);
                        ?>