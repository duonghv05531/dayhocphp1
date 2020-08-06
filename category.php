<?php
require_once './dbconnection.php';
$path = "Danh muc san pham";
$id = $_GET['id'];
$sql = "select * from products where cate_id = $id";
$stmt = $conn->prepare($sql);
$stmt->execute();
$pro = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html lang="en">
<?php include_once './htasset/head.php'; ?>

<body>
    <div class="container">
        <?php include_once './htasset/header.php'; ?>
        <br>
        <br>
        <section class="news">
            <div class="news-heading">
                <h2>SẢN PHẨM MỚI</h2>
            </div>
            <br>
            <div class="news-body">

                <div class="row row-cols-1 row-cols-md-3">
                    <?php foreach ($pro as $p) : ?>
                        <div class="col mb-4" style="text-align: center;">
                            <div class="card p-3">
                                <img src="img/<?= $p['pro_image'] ?>" class="card-img-top" alt="..." width="574" height="422">
                                <div class="card-body p-2">
                                    <class="card-title d-flex justify-content-center><?= $p['pro_name'] ?>
                                        <h6 class="card-text p-2 d-flex justify-content-center"><?= $p['pro_price'] ?></h6>
                                        <a href="info.php?id=<?= $p['pro_id'] ?>"><button type="submit" class="btn btn-danger">Chi tiet</button></a>
                                </div>
                            </div>
                        </div>
                    <?php endforeach ?>
                </div>

            </div>
            <!--End .news-body-->
        </section>


        <div class="row">
            <div class="col-xl-12 col-md-12 d-flex justify-content-center">
                <form class="form-inline my-2 my-lg-0 d-flex flex-row">
                    <input class="form-control email p-2 mr-sm-2" required type="Đăng kí để nhận thông báo mới nhất về các sản phẩm..." placeholder="Đăng kí để nhận thông báo mới nhất về các sản phẩm..." aria-label="Đăng kí để nhận thông báo mới nhất về các sản phẩm...">
                    <button class="btn btn-outline-success my-2 p-2 my-sm-0" type="submit">Đăng Kí</button>
                </form>
            </div>
        </div>
        <br>
        <br>
        <?php include_once './htasset/footer.php' ?>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <!-- footer -->
</body>

</html>