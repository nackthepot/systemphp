<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <style>
    /* Navbar container */
    .navbar {
      overflow: hidden;
      background-color: #333;
      font-family: Arial;
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
      padding: 15px 32px;
      text-align: center;
      text-decoration: none;
      display: inline-block;
      font-size: 16px;
      margin: 4px 2px;
      cursor: pointer;
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
  width: 300px;
  border: 1px solid black;
  height: 40px;
}
tr {
    
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
        <a href="/result/products.php">ข้อมูลสินค้า</a>
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