<?php
require_once '../dbconnection.php';
$path = "Quan tri san pham";
$sql = "select * from products";
$stmt = $conn->prepare($sql);
$stmt->execute();
$pro = $stmt->fetchAll(PDO::FETCH_ASSOC);

?>
<!DOCTYPE html>
<html lang="en">
<?php include_once './admin_asset/head.php' ?>

<body>
    <div class="container">
        <?php include_once './admin_asset/header.php' ?>
        <section class="news">
            <div class="news-body">
                <table border="1">
                    <thead>
                        <th>Pro_id</th>
                        <th>Danh mục</th>
                        <th>Tên sản phẩm</th>
                        <th>Ảnh</th>
                        <th>Giá</th>
                        <th>Số lượng</th>
                        <th>Mô tả ngắn</th>
                        <th>Mô tả chi tiết</th>
                        <th>Hành động <br>
                            <a href="pro_add.php"><button class="btn btn_danger" type="submit">Thêm</button></a>
                        </th>
                    </thead>
                    <tbody>
                        <?php foreach ($pro as $p) : ?>
                            <tr>
                                <td><?= $p['pro_id'] ?></td>
                                <td><?= $p['cate_id'] ?></td>
                                <td><?= $p['pro_name'] ?></td>
                                <td><img src="../img/<?= $p['pro_image'] ?>" alt="" width="200px"></td>
                                <td><?= $p['pro_price'] ?></td>
                                <td><?= $p['pro_qualify'] ?></td>
                                <td><?= $p['pro_intro'] ?></td>
                                <td><?= $p['pro_desc'] ?></td>
                                <td>
                                    <a href="pro_delete.php"><button class="btn btn_danger" type="submit">Xóa</button></a> <br>
                                    <a href="pro_edit.php?id=<?= $p['pro_id'] ?>"><button class="btn btn_danger" type="submit">Sửa</button></a>

                                </td>
                            </tr>
                        <?php endforeach ?>
                    </tbody>
                </table>
            </div>
        </section>
    </div>
</body>

</html>