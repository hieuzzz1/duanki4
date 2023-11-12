<div class="container">
    <div class="col-md-9 mt-3 mb-4">
        <a href="index.php" class="text-decoration-none text-dark">Trang chủ</a> / <span class="text-danger">Sản phẩm
            chi tiết</span>
    </div>
    <div class="row mb-5 boxctiet1">
        <div class="col-md-5">
            <style>
                .slides img {
                    display: none;
                }

                .slides img.active {
                    display: block;
                }

                .slides img {
                    width: 350px;
                    margin: 0 auto;
                }

                .thumbnail {
                    max-width: 50px;
                    height: auto;
                    cursor: pointer;
                    margin-left: 25px;
                }

                .thumbnails {
                    display: flex;
                    justify-content: center;
                    margin: 10px;
                }

                .thumbnails img {
                    border: 1px solid rgb(209, 209, 209);
                    max-width: 80px;
                }

                .cart {
                    width: 500px;
                    height: 160px;
                    background-color: #f3f3f3;
                    padding: 10px;
                    margin-top: 18px;
                    border: none;
                    border-radius: 10px;
                }

                .boxkm {
                    margin-top: 7px;
                    display: flex;
                    justify-content: center;
                    font-size: 18px;
                    line-height: 40px;
                    margin-bottom: 5px;
                    width: 270px;
                    height: 40px;
                    border: 1px solid #ccc;
                    border-radius: 10px;
                    font-weight: 600;
                    background-color: rgb(185, 39, 39);
                    color: #fff;
                    margin-left: 10px;
                }

                .cart p {
                    margin-bottom: 0px;
                    margin-left: 10px;

                }

                * {
                    box-sizing: border-box;
                }

                .cart .textkm {
                    padding: 10px;
                    margin-bottom: 10px;
                }

                .soluong input {
                    outline: none;
                    border-radius: 5px;
                    border: 0.5px solid #ccc;
                    width: 150px;
                    text-align: center;
                    height: 30px;
                    background-color: #da3838;
                    color: #fff;
                }

                .btt11 button {
                    border: 1px solid #ffffff;
                    padding: 10px;
                    background-color: #da3838;
                    color: #fff;
                    border-radius: 5px;
                    font-size: 15px;
                }

                .btt22 button {
                    border: none;
                    padding: 10px;
                    background-color: #fff;
                    color: #ff0000;
                    border-radius: 5px;
                    font-size: 15px;
                    border: 1px solid #da3838;
                    margin-left: -13px;
                }


                .btt11 button:hover {
                    border: 1px solid #da3838;
                    background-color: #ffffff;
                    color: #ff0000;
                    border-radius: 5px;
                }

                .btt22 button:hover {
                    background-color: #da3838;
                    color: #ffffff;
                    border-radius: 5px;
                }

                .btt11 button {
                    width: 200px;
                }

                .boxtuvan {
                    background-color: #dab738;
                    padding: 10px;
                    color: #fff;
                    border-radius: 5px;
                    width: 330px;
                    text-align: center;
                    margin-left: -62px;
                }

                .boxctiet {
                    margin-left: 60px;
                }

                .boxctiet1 {
                    background-color: #FFF;
                    padding-left: 10px;
                    padding-right: 10px;
                    padding-top: 20px;
                    padding-bottom: 20px;
                }

                body {
                    background-color: #E7EEF6;
                }
            </style>
            <script>
                document.addEventListener("DOMContentLoaded", function () {
                    let currentSlide = 0;
                    const slides = document.querySelectorAll('.slides img');
                    const thumbnails = document.querySelectorAll('.thumbnail');

                    function showSlide(index) {
                        slides.forEach(slide => slide.classList.remove('active'));
                        slides[index].classList.add('active');
                        currentSlide = index;
                    }

                    thumbnails.forEach(thumbnail => {
                        thumbnail.addEventListener('click', function () {
                            const index = parseInt(this.getAttribute('data-index'));
                            showSlide(index);
                        });
                    });

                    // Hiển thị ảnh đầu tiên khi trang được tải
                    showSlide(currentSlide);
                });


            </script>
            <div class="slideshow-container">
                <div class="slides">
                    <img src="https://bizweb.dktcdn.net/thumb/medium/100/429/689/products/apple-iphone-12-mini-2-0340d148-dd79-40b3-b8ad-95ed589c7b5a.png?v=1623564588267"
                        alt="Ảnh 1">
                    <img src="https://bizweb.dktcdn.net/thumb/medium/100/429/689/products/iphone-12-pro-max-xanh-561e05b7-eed5-40c8-9065-49b5a1cea423.jpg?v=1623565125390"
                        alt="Ảnh 2">
                    <img src="https://bizweb.dktcdn.net/thumb/medium/100/429/689/products/apple-iphone-12-mini-5.png?v=1623565259483"
                        alt="Ảnh 3">
                    <img src="https://bizweb.dktcdn.net/thumb/medium/100/429/689/products/iphone-12-pro-max-ba-c.jpg?v=1623565283510"
                        alt="Ảnh 4">
                </div>
                <div class="thumbnails">
                    <img src="https://bizweb.dktcdn.net/thumb/medium/100/429/689/products/apple-iphone-12-mini-2-0340d148-dd79-40b3-b8ad-95ed589c7b5a.png?v=1623564588267"
                        alt="Ảnh nhỏ 1" class="thumbnail" data-index="0">
                    <img src="https://bizweb.dktcdn.net/thumb/medium/100/429/689/products/iphone-12-pro-max-xanh-561e05b7-eed5-40c8-9065-49b5a1cea423.jpg?v=1623565125390"
                        alt="Ảnh nhỏ 2" class="thumbnail" data-index="1">
                    <img src="https://bizweb.dktcdn.net/thumb/medium/100/429/689/products/apple-iphone-12-mini-5.png?v=1623565259483"
                        alt="Ảnh nhỏ 3" class="thumbnail" data-index="2">
                    <img src="https://bizweb.dktcdn.net/thumb/medium/100/429/689/products/iphone-12-pro-max-ba-c.jpg?v=1623565283510"
                        alt="Ảnh nhỏ 4" class="thumbnail" data-index="3">
                </div>
            </div>

        </div>
        <div class="col-md-6 boxctiet">
            <h4>Tên sản phẩmm</h4>
            <div class="mb-2 mt-2">Thương hiệu: <b class="me-2">Kem chống nắng</b> Mã sản phẩm: <b>HT009</b> <br></div>
            <div><b class="fs-4 text-danger me-2">300.000đ</b> <b class="fw-lighter">Giá niêm yết:</b> <b
                    class="fw-light text-decoration-line-through">345.000đ</b>
                <div>
                    <span class="text-success">Tiết kiệm:</span>
                    <b class="text-danger fs-6">45.000đ</b>
                    <span class="text-success">so với giá thị trường</span>
                </div>
            </div>

            <div class="cart">
                <div class="boxkm">
                    <span><i class="fa-solid fa-gift"></i> Khuyến mãi ưu đãi</span>
                </div>
                <div class="textkm">
                    <p>Tặng ngay tai nghe iDot trị giá 1 triệu</p>
                    <p>Tặng ốp lưng chống sốc</p>
                    <p>Tặng phiếu mua hàng trị giá 2.000.000đ</p>
                </div>
            </div>

            <div class="soluong mt-2 mb-2">
                <h6>Số lượng</h6><input type="number" name="" id="" value="100">
            </div>

            <div class="row btn-muahang mt-2 mb-2">
                <div class="col-4 btt11"><button>THÊM VÀO GIỎ HÀNG <br>
                    </button></div>
                <div class="col-3 btt22"><button>MUA NGAY <br></button></div>
                <div class="col-5 boxtuvan">
                    <span><i class="fa-solid fa-phone-volume"></i> Gọi 0345497282 để tư vấn mua hàng</span>
                </div>

            </div>
        </div>
    </div>

    <div class="row chitiettexxt mb-4">
        <div class="col-md-9">
            <h4>Chi tiết sản phẩm</h4>
            <hr>
            <p>Thông tin sản phẩm
                [SKINAVIS OFFICIAL] Kem chống nắng Skinavis - Skinavis sunscreen defense – Phổ rộng, không lên tone da
                Kem chống nắng Skinavis defense là kem chống nắng phổ rộng, giúp bảo vệ da khỏi tác hại từ tia UV ánh
                nắng mặt trời.
                <br><br>
                Ưu điểm:
                Kem chống nắng dạng Cream giúp bổ sung độ ẩm cho da nhưng lại khô thoáng, không gây bí da.
                Không chứa thành phần tạo màu, an toàn với da. Kem chống nắng không màu giúp bạn có cảm giác căng bóng
                thay vì có màu như phấn trang điểm. Phù hợp với những bạn muốn giữ màu da tự nhiên hoặc make up thêm để
                tạo cá tính riêng.
                <br><br>
                Chỉ định:
                Da thường, da không có nhiều mụn viêm mủ.
                Phù hợp với cả da dầu, da khô, da hỗn hợp
                <br><br>
                Hướng dẫn sử dụng:
                Thoa trước khi tiếp xúc với ánh nắng 5-10 phút. Lấy lượng kem vừa đủ , chấm nhiều điểm và vỗ đều bằng ba
                ngón tay 30-45 giây để kem chống nắng được tán đều lên mặt.
                <br><br>
                Lưu ý: Không nên thoa khi da đang quá ướt.
                Định lượng: 1,5 – 2 đốt ngón tay cho vùng mặt. Vùng cổ: 0,5-1 đốt ngón tay ( FTU)
                Nên thoa dặm lại 2-4 lần / ngày tùy vào công việc của bạn ở trong nhà mát hoặc đi lại ngoài trời,
                <br><br>
                Dung tích: 70ml
                <br><br>
                Thành phần chính:
                Avobenzone: Butyl Methoxydibenzoylmethane : Màng lọc UVA1 ( UVA bước sóng dài gây lão hóa da )
                Octocrylene: Màng lọc UVC, UVB, UVA2
                Ethylhexyl Methoxycinnamate: Màng lọc UVB
                Ethylhexyl Salicylate: Màng lọc UVB
                Bis-Ethylhexyloxyphenol Methoxyphenyl Triazine: Màng lọc UVB và UVA2
                <br><br>

            </p>
        </div>
        <div class="col-md-3 okk">
            <div class="nav nav-tabs mt-4 oko" id="nav-tab" role="tablist">
                <p class="nav-link active">Sản phẩm liên quan</p>
                <div class="row tintucc">
                    <div class="col-md-4"><a href="#"><img
                                src="https://bizweb.dktcdn.net/thumb/medium/100/429/689/products/apple-iphone-12-mini-2-0340d148-dd79-40b3-b8ad-95ed589c7b5a.png?v=1623564588267"
                                alt=""></a></div>
                    <div class="col-md-8">Tiêu đề ở đây
                        <br><b class="text-danger fs-6">45.000đ</b>
                    </div>
                    <div class="col-md-4"><a href="#"><img
                                src="https://bizweb.dktcdn.net/thumb/medium/100/429/689/products/apple-iphone-12-mini-2-0340d148-dd79-40b3-b8ad-95ed589c7b5a.png?v=1623564588267"
                                alt=""></a></div>
                    <div class="col-md-8">Tiêu đề ở đây
                        <br><b class="text-danger fs-6">45.000đ</b>
                    </div>
                    <div class="col-md-4"><a href="#"><img
                                src="https://bizweb.dktcdn.net/thumb/medium/100/429/689/products/apple-iphone-12-mini-2-0340d148-dd79-40b3-b8ad-95ed589c7b5a.png?v=1623564588267"
                                alt=""></a></div>
                    <div class="col-md-8">Tiêu đề ở đâyk
                        <br><b class="text-danger fs-6">45.000đ</b>
                    </div>
                </div>
                <style>
                    .chitiettexxt {
                        padding: 20px;
                        background-color: #fff;
                    }
                </style>

            </div>
            <div class="nav nav-tabs mt-4 oko" id="nav-tab" role="tablist">
                <p class="nav-link active">Sản phẩm liên quan</p>
                <div class="row tintucc">
                    <div class="col-md-4"><a href="#"><img
                                src="https://bizweb.dktcdn.net/thumb/medium/100/429/689/products/apple-iphone-12-mini-2-0340d148-dd79-40b3-b8ad-95ed589c7b5a.png?v=1623564588267"
                                alt=""></a></div>
                    <div class="col-md-8">Tiêu đề ở đây
                        <br><b class="text-danger fs-6">45.000đ</b>
                    </div>
                    <div class="col-md-4"><a href="#"><img
                                src="https://bizweb.dktcdn.net/thumb/medium/100/429/689/products/apple-iphone-12-mini-2-0340d148-dd79-40b3-b8ad-95ed589c7b5a.png?v=1623564588267"
                                alt=""></a></div>
                    <div class="col-md-8">Tiêu đề ở đây
                        <br><b class="text-danger fs-6">45.000đ</b>
                    </div>
                    <div class="col-md-4"><a href="#"><img
                                src="https://bizweb.dktcdn.net/thumb/medium/100/429/689/products/apple-iphone-12-mini-2-0340d148-dd79-40b3-b8ad-95ed589c7b5a.png?v=1623564588267"
                                alt=""></a></div>
                    <div class="col-md-8">Tiêu đề ở đâyk
                        <br><b class="text-danger fs-6">45.000đ</b>
                    </div>
                </div>
                <style>
                    .chitiettexxt {
                        padding: 20px;
                        background-color: #fff;
                    }
                </style>

            </div>
            <style>
                .okk {
                    margin-top: -25px !important;
                }

                .tintucc img {
                    max-width: 90px;
                    height: auto;
                }

                .tintucc a {
                    text-decoration: none;
                    color: black;
                }

                .tintucc {
                    padding: 10px;
                }

                .oko p {
                    background-color: #da3838 !important;
                    color: #fff !important;
                    border-radius: 5px !important;
                    width: 500px;
                    border: none !important;
                }

                .oko {
                    background-color: #f9f9f9;
                }
            </style>
        </div>
    </div>

    <div class="post-content mb-5">
        <nav>
            <div class="nav nav-tabs mt-4 baiviet" id="nav-tab" role="tablist">
                <p class="nav-link active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home"
                    type="button" role="tab" aria-controls="nav-home" aria-selected="true">Tin tức mới nhất</p>
            </div>
        </nav>
        <div class="tab-content" id="nav-tabContent">
            <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab"
                tabindex="0">
                <div class="row mx-5 bg">
                    <div class="col-md-3 my-4">
                        <a href="#" class="baiposs">
                            <div class="card" style="width: 18rem;">
                                <img src="http://nhom2mp.vnn.mn/files/tin/11/jpg/cach-dung-serum-cho-lan-da-khoe-cang-muot-tu-nhien.jpg"
                                    class="card-img-top" alt="...">
                                <div class="card-body bv">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">Some quick example text to build on the card title and make
                                        up
                                        the bulk of the card's content.</p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-3 my-4">
                        <a href="#" class="baiposs">
                            <div class="card" style="width: 18rem;">
                                <img src="http://nhom2mp.vnn.mn/files/tin/11/jpg/cach-dung-serum-cho-lan-da-khoe-cang-muot-tu-nhien.jpg"
                                    class="card-img-top" alt="...">
                                <div class="card-body bv">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">Some quick example text to build on the card title and make
                                        up
                                        the bulk of the card's content.</p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-3 my-4">
                        <a href="#" class="baiposs">
                            <div class="card" style="width: 18rem;">
                                <img src="http://nhom2mp.vnn.mn/files/tin/11/jpg/cach-dung-serum-cho-lan-da-khoe-cang-muot-tu-nhien.jpg"
                                    class="card-img-top" alt="...">
                                <div class="card-body bv">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">Some quick example text to build on the card title and make
                                        up
                                        the bulk of the card's content.</p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-3 my-4">
                        <a href="#" class="baiposs">
                            <div class="card" style="width: 18rem;">
                                <img src="http://nhom2mp.vnn.mn/files/tin/11/jpg/cach-dung-serum-cho-lan-da-khoe-cang-muot-tu-nhien.jpg"
                                    class="card-img-top" alt="...">
                                <div class="card-body bv">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">Some quick example text to build on the card title and make
                                        up
                                        the bulk of the card's content.</p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <style>
        .baiposs {
            text-decoration: none;
            color: #000000;
        }

        .bv {
            border-left: 1px solid #ccc;
            border-right: 1px solid #ccc;
            border-bottom: 1px solid #ccc;
        }

        .baiviet p {
            color: #ffffff !important;
            background-color: #d51b2e !important;
        }

        .nav button {
            color: #000000 !important;
        }

        #nav-tabContent {
            border: 1px solid #b7b7b7;

        }

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
            border: 1px solid #cecece;
            background-color: #fff8f9;
        }

        .card p {
            text-align: center;
            margin-top: 10px;
        }
    </style>


</div>


</div>