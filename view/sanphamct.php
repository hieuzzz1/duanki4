<div class="container">
    <div class="row mb-5">
        <div class="col-md-4">
            <style>
                .slides img {
                    display: none;
                }

                .slides img.active {
                    display: block;
                }

                .slides img {
                    width: 300px;
                    margin: 0 auto;
                }

                .thumbnail {
                    max-width: 50px;
                    height: auto;
                    cursor: pointer;
                    margin-left: 10px;
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
                    background-color: #e6e6e6;
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
                    background-color: #38da5b;
                    color: #fff;
                    border-radius: 5px;
                    font-size: 15px;
                }


                .btt11 button:hover {
                    border: 1px solid #da3838;
                    background-color: #ffffff;
                    color: #ff0000;
                    border-radius: 5px;
                }

                .btt22 button:hover {
                    border: 1px solid #38da5b;
                    background-color: #ffffff;
                    color: #38da5b;
                    border-radius: 5px;
                }

                .btt11 button {
                    width: 310px;
                }

                .boxtuvan {
                    background-color: #dab738;
                    padding: 10px;
                    color: #fff;
                    border-radius: 5px;
                    width: 330px;
                    text-align: center;
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
        <div class="col-md-5">
            <h4>Tên sản phẩmm</h4>
            <div class="mb-2 mt-2">Thương hiệu: <b class="me-2">Kem chống nắng</b> Mã sản phẩm: <b>HT009</b> <br></div>
            <div><b class="fs-4 text-danger me-2">300.000đ</b> <b class="fw-lighter">Giá niêm yết:</b> <b
                    class="fw-light text-decoration-line-through">345.000đ</b>
                <div>
                    <span class="text-success">Tiết kiệm:</span>
                    <b class="text-danger fs-6">45.000đ</b>
                    <span class="text-success">so với giá thị trường sssss</span>
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
                <div class="col-7 btt11"><button>THÊM VÀO GIỎ HÀNG <br>
                        Cam kết chính hãng / đổi trả 24h
                    </button></div>
                <div class="col-5 btt22"><button>MUA NGAY <br>
                        Thanh toán nhanh chóng</button></div>


            </div>
            <div class="boxtuvan">
                <span><i class="fa-solid fa-phone-volume"></i> Gọi 0345497282 để tư vấn mua hàng</span>
            </div>
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


            </div>
            <style>
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
                    background-color: #e6e6e6;
                }
            </style>
        </div>
    </div>

</div>


</div>