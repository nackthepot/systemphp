<?php
// รับค่าจากฟอร์ม
  if($_SERVER["REQUEST_METHOD"] == "POST"){

            // สร้างคำสั่ง SQL delete
            $sql = "DELETE FROM product_nb
                    WHERE id = '$id'";

            // ดำเนินการคำสั่ง SQL
            $result = mysqli_query($conn, $sql);
            // ตรวจสอบผลลัพธ์
            if ($result) {
                // อัปเดตสำเร็จ
                echo "ลบข้อมูลแล้ว!";
                header("Location: home.php");
            } else {
                // อัปเดตล้มเหลว
                echo "ลบข้อมูลไม่สำเร็จ!";
            }
        }
    

            // ปิดการเชื่อมต่อกับฐานข้อมูล
            mysqli_close($conn);

            ?>