<?php
require_once './dbconnection.php';
$path = "thong tin san pham";
$id = $_GET['id'];
$sql = "select * from products where pro_id = $id";
$stmt = $conn->prepare($sql);
$stmt->execute();
$pro_info = $stmt->fetch(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html lang="en">
<?php include_once './htasset/head.php'; ?>

<body>
    <div class="container">
        <?php include_once './htasset/header.php'; ?>
        <section class="news">
            <div class="news-heading">
                <br>
                <h2>Thong tin san pham</h2>
            </div>
            <div class="news-body">
                <div class="col-md-6 info">
                    <img src="img/<?= $pro_info['pro_image'] ?>" alt="" width="400px">
                </div>
                <div class="col-md-6 info">
                    <p><?= $pro_info['pro_name'] ?></p>
                    <p> Price:<?= $pro_info['pro_price'] ?></p>
                    <p><?= $pro_info['pro_intro'] ?></p>
                    <p><?= $pro_info['pro_desc'] ?></p>

                </div>
            </div>
            <?php include_once './htasset/footer.php';
            ?>
        </section>



    </div>

</body>

</html>