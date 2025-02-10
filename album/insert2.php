<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>ฟอร์มเพิ่มข้อมูลสินค้า</title>
</head>

<body>

<h1>ฟอร์มเพิ่มข้อมูลสินค้า</h1>
<form method="post" action="" enctype="multipart/form-data">
    ชื่อสินค้า:
    <input type="text" name="pname" required autofocus><br>
    ราคา:
    <input type="text" name="pprice" required><br>
    รายละเอียดสินค้า:<br>
    <textarea name="pdetail" rows="4" cols="50"></textarea><br>
    รูปภาพสินค้า:
    <input type="file" name="pimage" accept="image/*" required><br>
    <button type="submit">บันทึก</button>
</form>

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
