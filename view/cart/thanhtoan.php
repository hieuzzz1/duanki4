<div class="container">
    <div class="row mt-5 bottom-thanhtoan">
        <form action="" method="post">
            <div class="col-8 bg-white css-bg-thanhtoan">
                <h3 class="mt-3 mb-3">HT&B Beautify</h3>
                <div class="row">
                    <div class="col-6"> <!--  Thông tin khách hàng -->
                        <div class="row mt-3">
                            <div class="col-6">
                                <p>Thông tin nhận hàng</p>
                            </div>
                            <div class="col-6 ngdung-tt ">
                                <i class="fa-regular fa-user"></i>
                                <p>Tên người dùng</p>
                            </div>
                        </div>
                        <div class="thongtininput mb-2">
                            <input type="email" placeholder="Email">
                        </div>
                        <div class="thongtininput mt-3 mb-2">
                            <input type="text" placeholder="Số điện thoại">
                        </div>
                        <div class="thongtininput mt-3 mb-2">
                            <input type="text" placeholder="Địa chỉ">
                        </div>
                        <div class="select-box">
                            <div class="select-option">
                                <input type="text" placeholder="Thành phố" id="soValue" readonly name="">
                            </div>
                            <div class="content">
                                <div class="search">
                                    <input type="text" id="optionSearch" name="">
                                </div>
                                <ul class="options">
                                    <li>Hà Nội</li>
                                    <li>Thái Bình</li>
                                    <li>Hải Phòng</li>
                                    <li>Lạng Sơn</li>
                                    <li>Nam Định</li>
                                    <li>Phú Thọ</li>
                                    <li>Thái Nguyên</li>
                                    <li>Yên Bái</li>
                                    <li>Sơn La</li>
                                    <li>Điện Biên</li>
                                    <li>Lào Cai</li>
                                    <li>Hòa Bình</li>
                                    <li>Hải Dương</li>
                                    <li>Tuyên Quang</li>
                                    <li>Ninh Bình</li>
                                    <li>Thanh Hóa</li>
                                    <li>Nghệ An</li>
                                    <li>Hà Tĩnh</li>
                                </ul>
                            </div>
                        </div>
                        <div class="thongtininput mt-3 mb-2">
                            <textarea name="" id="" cols="30" rows="10" placeholder="Ghi chú"></textarea>
                        </div>

                    </div>
                    <div class="col-6">
                        <div class="row ms-2 mt-3">
                            <div class="col">
                                <div class="vanchuyen thongtininput">
                                    <p>Vận chuyển</p>
                                    <input type="text" value="Giao hàng tận nơi">
                                </div>
                                <div class="thanhtoan mt-5 thongtininput">
                                    <p>Thanh toán</p>
                                    <input type="text" value="Thanh toán khi nhận hàng (COD)">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <!-- 
                <button type="submit">Đặt hàng</button> -->
            </div>
        </form>
    </div>
</div>
<style>
    .bottom-thanhtoan {
        margin-bottom:340px;
    }
    .css-bg-thanhtoan {
        padding-top: 10px;
        padding-bottom: 200px;
        padding-left: 20px;
        padding-right: 20px;
    }
    body {
        background-color: #F3F3F6;
    }
    .ngdung-tt p {
        font-size: 16px !important;
        margin-left: 7px;
    }

    .ngdung-tt i {
        margin-top: 5px;
        margin-left: 45px;
    }

    .ngdung-tt {
        display: flex;
        justify-content: center;
        padding: 0;
    }

    .thongtininput input {
        width: 100%;
        padding: 8px;
        border-radius: 5px;
        outline: none;
        border: 1px solid #ccc;
    }

    .thongtininput textarea {
        width: 100%;
        padding: 5px 10px;
        height: 60px;
        outline: none;
        border: 1px solid #ccc;
        color: #6b6b6b;
    }

    .container p {
        font-weight: 600;
        font-size: 18px;
    }



    .select-box {
        width: 380px;
        position: relative;
    }

    .select-option {
        position: relative;
    }

    /* .select-option ::placeholder {
        font-size: 18px !important;
    } */

    .select-option input {
        width: 400px;
        border-radius: 5px;
        color: black;
        cursor: pointer;
        font-size: 15px;
        padding: 8px;
        border: 1px solid #ccc;
        outline: 0 !important;
    }

    .select-option:after {
        content: "";
        border-top: 11px solid #8f8e8e;
        border-left: 7px solid transparent;
        border-right: 7px solid transparent;
        position: absolute;
        right: -10px;
        top: 50%;
        margin-top: -8px;
    }

    .content {
        background-color: #ffffff;
        border-left: 1px solid #ccc;
        border-right: 1px solid #ccc;
        border-bottom: 1px solid #ccc;
        color: #000;
        margin-top: 15px;
        width: 400px;
        padding: 7px;
        display: none;
        z-index: 999;
        margin-top: -2px;
    }

    .content .search input {
        width: 420px;
    }

    .content input {
        border: 1px solid #b3b3b3;
        outline: 0;
        width: 500px;
    }

    .options {
        margin-top: 10px;
        max-height: 200px;
        overflow-y: auto;
        padding: 0;
    }

    .options li {
        padding: 5px;
        cursor: pointer;
    }

    .options li:hover {
        background-color: rgb(236, 236, 236);
    }

    .select-box.active .content {
        display: block;
    }

    .select-box.active .select-option:after {
        transform: rotate(-180deg);
    }
</style>

<script>
    const selectBox = document.querySelector('.select-box');
    const selectOption = document.querySelector('.select-option');
    const soValue = document.querySelector('#soValue');
    const optionSearch = document.querySelector('#optionSearch');
    const options = document.querySelector('.options');
    const optionsList = document.querySelectorAll('.options li');


    selectOption.addEventListener('click', function () {
        selectBox.classList.toggle('active');
    });
    optionsList.forEach(function (optionsListSingle) {
        optionsListSingle.addEventListener('click', function () {
            text = this.textContent;
            soValue.value = text;
            selectBox.classList.remove('active');
        })
    });

    optionSearch.addEventListener('keyup', function () {
        var filter, li, i, textValue;
        filter = optionSearch.value.toUpperCase();
        li = options.getElementsByTagName('li');
        for (i = 0; i < li.length; i++) {
            liCount = li[i];
            textValue = liCount.textContent || liCount.innerText;
            if (textValue.toUpperCase().indexOf(filter) > -1) {
                li[i].style.display = '';

            }
            else {
                li[i].style.display = 'none';
            }

        }
    })
</script>