<?php
require_once '../dbconnection.php';
$path = "Thêm sản phẩm";
if (isset($_POST['btn'])) {
    extract($_REQUEST);
    if ($_FILES['pro_image']['size'] > 0) {
        $pro_imgae = $_FILES['pro_image']['name'];
    } else {
        $pro_imgae = "";
    }
    $sql = "insert into products(cate_id,pro_name,pro_image,pro_qualify,pro_intro,pro_desc)";
}

?>
<!DOCTYPE html>
<html lang="en">

<?php include_once './admin_asset/head.php' ?>

<body>
    <div class="container">
        <?php include_once './admin_asset/header.php' ?>
        <section class="news">
            <div class="news-heading">
                <br>
                <h2>Thêm sản phẩm</h2>
            </div>
            <form action="" method="post" enctype="multipart/form-data">
                <div class="news-body">
                    <p>Tên sản phẩm</p>
                    <input type="text" name="pro_name">
                    <p>Danh mục</p>
                    <select name="cate_id">
                        <option value=""></option>
                    </select>
                    <p>Giá</p>
                    <input type="text" name="pro_price">
                    <p>Số lượng</p>
                    <input type="text" name="pro_qualify">
                    <p>Ảnh</p>
                    <input type="file" name="pro_image">
                    <p>Mô tả ngắn</p>
                    <input type="text" name="pro_intro">
                    <p>Mô tả chi tiết</p>
                    <input type="text" name="pro_desc">
                    <button type="submit" name="btn">Thêm</button>
                </div>
            </form>
        </section>
    </div>
</body>

</html>