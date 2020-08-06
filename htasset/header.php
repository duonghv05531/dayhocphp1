<?php
$sql = "select * from categories";
$stmt = $conn->prepare($sql);
$stmt->execute();
$cate = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<header>
    <div class="T1" style="height: 28px;background-color:#f5f5f5;"><a style="color: black;text-align: center;margin-left: 370px; font-size: 10px;"><span>Hotline Mua Hàng: 038
                2414 22 | Hotline CSKH: 1900 66 88 88 | Email CSKH: CSKH@aothundep.vn</span></a></div>
    <div class="logo">
        <img src="img/LOGO2.png">
    </div>
    <nav class="navbar navbar-expand-lg navbar-light main-menu">
        <a style="color:white;font-size: 20px;" href="#">Trang Chủ</a>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <?php foreach ($cate as $c) : ?>

                    <nav class="navbar navbar-expand-lg navbar-light main-menu">
                        <a style="color:white;font-size: 20px" href="ao_thun.html"><?= $c['cate_name'] ?></a>
                    </nav>

                <?php endforeach ?>
            </ul>
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Tìm Kiếm - Ví dụ: áo thun, giày dép" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Tìm Kiếm</button>
            </form>
        </div>
    </nav>
</header>
<section class="banner">
    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="img/anh1.webp" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="img/anh2.webp" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="img/anh3.webp" class="d-block w-100" alt="...">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</section>