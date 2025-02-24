<?php
include_once("../connectdb.php");

// เลือกเฉพาะสินค้าที่มี p_id = 1
$p_id = 1; // กำหนดค่า p_id ที่ต้องการเลือก
$sql = "SELECT * FROM `product` WHERE `p_id` = ?";
$stmt = mysqli_prepare($conn, $sql);

mysqli_stmt_bind_param($stmt, "i", $p_id); // ป้องกัน SQL Injection
mysqli_stmt_execute($stmt);
$rs = mysqli_stmt_get_result($stmt);

if ($data = mysqli_fetch_assoc($rs)) {
?>
<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>รายละเอียดสินค้า</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            margin: 0;
        }
        .product-container {
            background: white;
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0px 6px 15px rgba(0, 0, 0, 0.15);
            text-align: center;
            width: 500px;
            max-width: 90%;
        }
        .product-container img {
            max-width: 100%;
            border-radius: 15px;
            margin-bottom: 20px;
        }
        .bursh_text {
            font-size: 26px;
            color: #333;
            margin-bottom: 10px;
            font-weight: bold;
        }
        .lorem_text {
            font-size: 18px;
            color: #555;
            margin-bottom: 20px;
            text-align: justify;
        }
        .price_text {
            font-size: 24px;
            font-weight: bold;
            color: #e67e22;
            margin-bottom: 20px;
        }
        .buy-now-btn {
            background-color: #e74c3c;
            color: white;
            font-size: 20px;
            padding: 15px 20px;
            border: none;
            border-radius: 10px;
            cursor: pointer;
            transition: 0.3s;
            width: 100%;
        }
        .buy-now-btn:hover {
            background-color: #c0392b;
        }
    </style>
</head>
<body>

    <div class="product-container">
        <img src="../im/<?php echo htmlspecialchars($data['p_id']) . '.' . htmlspecialchars($data['p_ext']); ?>" alt="<?php echo htmlspecialchars($data['p_name']); ?>"> 
        <h4 class="bursh_text"><?php echo htmlspecialchars($data['p_name']); ?></h4>
        <p class="lorem_text"><?php echo nl2br(htmlspecialchars($data['p_detail'])); ?></p>
        <h3 class="price_text"><?php echo number_format($data['p_price'], 2); ?> บาท</h3>
        
        <button class="buy-now-btn">BUY NOW</button>
    </div>

</body>
</html>
<?php 
} else {
    echo "<p style='text-align: center; font-size: 20px; color: red;'>ไม่พบสินค้า</p>";
}
?>
