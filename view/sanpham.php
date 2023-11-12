<div class="containersp">
    <div class="dieuhuong mb-4">
        <div class="dhmenu mb-3">
            <div class="col-md-9 mt-3">
                <a href="index.php" class="text-decoration-none text-dark">Trang chủ</a> / <span class="text-danger">Tất
                    cả sản phẩm</span>
            </div>
            <style>
                .dhmenu {
                    margin-left: 80px;
                }

                body {
                    background-color: #F3F3F6;
                }
            </style>
        </div>
        <h5 class="tt">TẤT CẢ SẢN PHẨM</h5>
        <div class="row d-flex justify-content-center">
            <div class="col-md-8 product-content">
                <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab"
                    tabindex="0">
                    <div class="row mx-5 container-anhspchitiet">
                        <?php
                            foreach ($spnew as $sp) {
                                extract($sp);
                                echo '<div class="col-md-3">
                                <div class="card" style="width: 18rem;">
                                    <div class="card-body">
                                        <div class="anhsppp">
                                            <a href="index.php?act=spchitiet"><img
                                                    src="https://png.pngtree.com/png-clipart/20200206/ourlarge/pngtree-pink-fresh-cosmetics-set-elements-png-image_2132437.jpg"
                                                    class="card-img-top" alt="...">
                                                <p class="card-title">'.$name.'</p>
                                            </a>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-7">
                                                <div class="giasp mt-4">
                                                '.$giasp.'$
                                                </div>
                                                <span class="giasale text-decoration-line-through">200.000đ</span>
                                            </div>
                                            <div class="col-md-2 mt-5 carrt yttt">
                                                <a href="#"><i class="fa-solid fa-cart-shopping"></i></a>
                                            </div>
                                            <div class="col-md-2 mt-5 carrt">
                                                <a href="#"><i class="fa-regular fa-heart"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>';
                            }
                        ?>
                    </div>
                </div>
            </div>
            <div class="col-md-3 dm2">
                <ul class="list-group ">
                    <div class="list-group-item active dm" aria-current="true">Danh mục sản phẩm</div>
                    <div class="dm3">
                        <li class="list-group-item"><a href="">Kem chống nắng</a></li>
                        <li class="list-group-item"><a href="">Sữa rửa mặt</a></li>
                        <li class="list-group-item"><a href="">Sữa tắm</a></li>
                        <li class="list-group-item"><a href="">Nước tẩy trang</a></li>
                        <li class="list-group-item"><a href="">Nước hoa</a></li>
                        <li class="list-group-item"><a href="">Sữa tắm</a></li>
                        <li class="list-group-item"><a href="">Sữa tắm</a></li>
                    </div>
                </ul>
            </div>
        </div>
        <style>
            body {
                background-color: #F3F3F6;
            }

            .dm2 {
                margin-top: 20px;
            }

            .container-anhspchitiet {
                display: grid;
                grid-template-columns: repeat(4, 1fr);

                justify-content: center;
            }

            .containersp {
                max-width: 1508px;
            }

            .dm {
                background-color: #DC3545 !important;
                border: 10px solid #DC3545 !important;
                text-align: center;
                border-radius: 0% !important;
            }

            .dm2 ul li {
                border-radius: 0% !important;
            }


            .dm2 li a {
                text-decoration: none !important;
                color: black;
            }

            .dm2 li a:hover {
                color: #ff0000;
                opacity: 0.7;

            }

            .dm2 li:hover {
                transform: scale(1.01);
                color: #d51b2e;
                border-left: 2px solid #d51b2e;
                cursor: pointer;
            }

            .tt {
                background-color: #fff;
                padding: 20px 10px;
                text-align: center;
            }
        </style>

        <style>
            .product-content img {
                max-width: 170px;
                height: 170px;
            }

            .product-content p {
                font-size: 16px;
                font-weight: bold;
            }

            .product-content a {
                text-decoration: none;
                color: black;
            }

            .product-content a:hover {
                color: rgb(255, 221, 83);
            }

            .card {
                margin-top: 20px;
                margin-bottom: 20px;
                max-width: 230px;
                background-color: #fff8f9;
            }

            .card p {
                text-align: center;
                margin-top: 10px;
            }
        </style>
        <style>
            .anhsppp {
                display: flex;
                justify-content: center;
            }

            .yttt {
                margin-right: 10px;
            }

            .card-body img {
                position: relative;
                transition: transform 0.5s;
                cursor: pointer;
            }

            .card-body:hover img {
                transform: scale(1.05);
                cursor: pointer;
            }

            .card-body:hover .carrt {
                background-color: rgb(255, 83, 83);
                transform: scale(1.05);
            }

            .card-body:hover i {
                color: #fff;
            }


            .carrt {
                float: right;
                max-width: 40px;
                height: 30px;
                transition: 0.6s;
                border-radius: 15%;
            }

            .carrt i {
                position: absolute;

                line-height: 33px;
                margin-left: -4px;
                font-size: 20px;
                color: #d6d6d6;
            }

            .giasp {
                font-weight: 500;
                color: rgb(255, 65, 65);
                margin-top: 5px;
                font-size: 19px;
            }

            .giasale {
                color: #ada6a7;
                font-size: 14px;
            }
        </style>

    </div>