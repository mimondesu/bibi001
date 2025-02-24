<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>ฟอร์มเพิ่มข้อมูลสินค้า</title>
<style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f4f4f4;
        color: #333;
        margin: 0;
        padding: 0;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
    }

    .container {
        background-color: #fff;
        padding: 30px;
        border-radius: 8px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        width: 80%;
        max-width: 600px;
    }

    h1 {
        text-align: center;
        color: #333;
        font-size: 24px;
        margin-bottom: 20px;
    }

    label {
        font-size: 16px;
        margin-bottom: 5px;
        display: block;
    }

    input[type="text"], textarea {
        width: 100%;
        padding: 10px;
        margin: 10px 0;
        border: 1px solid #ddd;
        border-radius: 4px;
        font-size: 16px;
    }

    textarea {
        resize: vertical;
    }

    input[type="file"] {
        font-size: 16px;
        margin: 10px 0;
    }

    button {
        background-color: #007BFF;
        color: white;
        padding: 12px 20px;
        font-size: 16px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        width: 100%;
        margin-top: 20px;
    }

    button:hover {
        background-color: #0056b3;
    }

    .form-group {
        margin-bottom: 20px;
    }

    .form-group input, .form-group textarea, .form-group button {
        width: 100%;
    }
</style>
</head>

<body>

<div class="container">
    <h1>ฟอร์มเพิ่มข้อมูลสินค้า</h1>
    <form method="post" action="" enctype="multipart/form-data">
        <div class="form-group">
            <label for="pname">ชื่อสินค้า:</label>
            <input type="text" name="pname" id="pname" required autofocus><br>
        </div>
        <div class="form-group">
            <label for="pprice">ราคา:</label>
            <input type="text" name="pprice" id="pprice" required><br>
        </div>
        <div class="form-group">
            <label for="pdetail">รายละเอียดสินค้า:</label><br>
            <textarea name="pdetail" id="pdetail" rows="4" cols="50"></textarea><br>
        </div>
        <div class="form-group">
            <label for="pimage">รูปภาพสินค้า:</label>
            <input type="file" name="pimage" id="pimage" accept="image/*" required><br>
        </div>
        <button type="submit">บันทึก</button>
    </form>
</div>

<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    include_once("../connectdb.php");

    // รับค่าจากฟอร์ม
    $pname = $_POST['pname'];
    $pprice = $_POST['pprice'];
    $pdetail = $_POST['pdetail'];

    // อัปโหลดรูปภาพ
    $target_dir = "../im/";
    $imageFileType = strtolower(pathinfo($_FILES['pimage']['name'], PATHINFO_EXTENSION));
    $sql = "INSERT INTO products (p_name, p_detail, p_price, p_ext) VALUES ('{$pname}', '{$pdetail}', '{$pprice}', '{$imageFileType}')";

    if (mysqli_query($conn, $sql)) {
        $last_id = mysqli_insert_id($conn); // ดึงรหัสสินค้าล่าสุด
        $target_file = $target_dir . $last_id . "." . $imageFileType;

        // ย้ายไฟล์รูปภาพไปที่โฟลเดอร์
        if (move_uploaded_file($_FILES['pimage']['tmp_name'], $target_file)) {
            echo "<script>alert('เพิ่มข้อมูลสินค้าและอัปโหลดรูปภาพสำเร็จ');</script>";
        } else {
            echo "<script>alert('อัปโหลดรูปภาพไม่สำเร็จ');</script>";
        }
    } else {
        echo "<script>alert('เพิ่มข้อมูลสินค้าไม่สำเร็จ');</script>";
    }

    // ปิดการเชื่อมต่อฐานข้อมูล
    mysqli_close($conn);
}
?>

</body>
</html>
