<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Happy+Monkey&family=Kanit:ital,wght@1,100&family=Noto+Sans+Thai:wght@200;500;900&family=Playfair+Display:wght@400;500&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;1,100;1,200;1,300;1,400;1,500;1,600;1,700&family=Rammetto+One&display=swap" rel="stylesheet">
  <style>
    /* Navbar container */
    body{
      font-family: Noto Sans Thai;
    }

    .navbar {
      overflow: hidden;
      background-color: #333;
      font-family: Noto Sans Thai;
    }

    /* Links inside the navbar */
    .navbar a {
      float: left;
      font-size: 16px;
      color: white;
      text-align: center;
      padding: 14px 16px;
      text-decoration: none;
    }

    /* The dropdown container */
    .dropdown {
      float: left;
      overflow: hidden;
    }

    /* Dropdown button */
    .dropdown .dropbtn {
      font-size: 16px;
      border: none;
      outline: none;
      color: white;
      padding: 14px 16px;
      background-color: inherit;
      font-family: inherit;
      /* Important for vertical align on mobile phones */
      margin: 0;
      /* Important for vertical align on mobile phones */
    }

    /* Add a red background color to navbar links on hover */
    .navbar a:hover,
    .dropdown:hover .dropbtn {
      background-color: red;
    }

    /* Dropdown content (hidden by default) */
    .dropdown-content {
      display: none;
      position: absolute;
      background-color: #f9f9f9;
      min-width: 160px;
      box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
      z-index: 1;
    }

    /* Links inside the dropdown */
    .dropdown-content a {
      float: none;
      color: black;
      padding: 12px 16px;
      text-decoration: none;
      display: block;
      text-align: left;
    }

    /* Add a grey background color to dropdown links on hover */
    .dropdown-content a:hover {
      background-color: #ddd;
    }

    /* Show the dropdown menu on hover */
    .dropdown:hover .dropdown-content {
      display: block;
    }

    .button {
      background-color: #04AA6D;
      /* Green */
      border: none;
      color: white;
      width : 120px;
      text-align: center;
      text-decoration: none;
      display: inline-block;
      font-size: 13px;
      margin: 4px 2px;
      cursor: pointer;
      padding: 5px 2px;
    }

    .button2 {
      background-color: #008CBA;
    }

    /* Blue */
    .button3 {
      background-color: #f44336;
    }

    /* Red */
    .button4 {
      background-color: #e7e7e7;
      color: black;
    }

    /* Gray */
    .button5 {
      background-color: #555555;
    }

    /* Black */

    select {
      width: 20%;
      padding: 7px 20px;
      border: none;
      border-radius: 4px;
      background-color: #f1f1f1;
      margin: 7px 0px;
    }


      .customers {
      font-family: Noto Sans Thai;
      border-collapse: collapse;
      width: 100%;
    }

      .customers td, .customers th {
        border: 1px solid #ddd;
        padding: 8px;
      }

      .customers tr:nth-child(even){background-color: #f2f2f2;}

      .customers tr:hover {background-color: #ddd;}

      .customers th {
        padding-top: 12px;
        padding-bottom: 12px;
        text-align: left;
        background-color: #04AA6D;
        color: white;
      }
      th, td {
        padding: 8px;
        text-align: left;
      }


      td{
        font-size: 12px;
      }

      input[type=text], select {
      width: 100%;
      padding: 12px 20px;
      margin: 8px 0;
      display: inline-block;
      border: 1px solid #ccc;
      border-radius: 4px;
      box-sizing: border-box;
    }

      input[type=submit] {
        width: 100%;
        background-color: #4CAF50;
        color: white;
        padding: 14px 20px;
        margin: 8px 10px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
      }

      input[type=date] {
        width: 30%;
        background-color: #4CAF50;
        color: white;
        padding: 14px 20px;
        margin: 8px 0;
        border: none;
        border-radius: 4px;
        cursor: pointer;
      }

      input[type=submit]:hover {
        background-color: #45a049;
      }

      .add_main{
        border-radius: 5px;
        background-color: #f2f2f2;
        padding: 20px;
        display: flex;
        
      }

      .left-col{
        width: 50%;
      }
      .right-col{
        width: 50%;
        padding-left: 20px;
      }

        </style>

</head>

<body>
  </div>
  <div class="navbar">
    <a href="/index.php">home</a>
    <div class="dropdown">
      <button class="dropbtn">เพิ่มสินค้า
        <i class="fa fa-caret-down"></i>
      </button>
      <div class="dropdown-content">
        <a href="/add/add_notebook.php">เพิ่ม Notebook</a>
        <a href="/add/add_monitor.php">เพิ่ม Monitor</a>
        <a href="/add/add.php">เพิ่ม อุปกรณ์ทั่วไป</a>
      </div>
    </div>
    <div class="dropdown">
      <button class="dropbtn">เพิ่มข้อมูล
        <i class="fa fa-caret-down"></i>
      </button>
      <div class="dropdown-content">
        <a href="/add/add_customer.php">เพิ่มข้อมูลลูกค้า</a>
        <a href="/add/add_dealer.php">เพิ่มข้อมูลที่มา</a>
        <a href="/add/add_category.php">เพิ่มหมวดหมู่</a>
        <a href="/add/add_warranty_com.php">เพิ่มผู้รับประกัน</a>
      </div>
    </div>
    <div class="dropdown">
      <button class="dropbtn">ใบเบิก-คืนสินค้า
        <i class="fa fa-caret-down"></i>
      </button>
      <div class="dropdown-content">
        <a href="/doc/bill.php">เปิดบิล</a>
        <a href="/doc/pickup.php">ใบเบิกของ</a>
        <a href="/doc/reture.php">ใบคืนของ</a>
        <a href="/doc/po.php">ใบ po</a>
      </div>
    </div>
    <div class="dropdown">
      <button class="dropbtn">ดูข้อมูล
        <i class="fa fa-caret-down"></i>
      </button>
      <div class="dropdown-content">
        <a href="/result/products.php">ข้อมูลสินค้าทั่วไป</a>
        <a href="/result/products_monitor.php">ข้อมูลสินค้า Monitor</a>
        <a href="/result/products_notebook.php">ข้อมูลสินค้า Notebook</a>
        <a href="/result/customer.php">ข้อมูลลูกค้า</a>
        <a href="/result/stockplace.php">ข้อมูลที่จัดเก็บ</a>
      </div>
    </div>
    <div class="dropdown">
      <button class="dropbtn">แก้ไขข้อมูล
        <i class="fa fa-caret-down"></i>
      </button>
      <div class="dropdown-content">
        <a href="/edit_.php">แก้ชื่อสินค้า</a>
        <a href="/edit_notebook.php">แก้สเปค Notebook</a>
        <a href="/edit_monitor.php">แก้สเปค Monitor</a>
        <a href="/edit_product_price.php">แก้ราคาสินค้า</a>
        <a href="/edit_customer.php">แก้ข้อมูลลูกค้า</a>
        <a href="/edit_dealer.php">แก้ข้อมูลที่มา
          <a href="/edit_warranty_com.php">แก้ข้อมูลผู้รับประกัน</a>
          <a href="/del/delete.php">ลบสินค้า</a>
        </a>
      </div>
    </div>
  </div>

</body>

</html>