<div class="container">
    <div class="row">
        <?php
            if(isset($thongbao) && ($thongbao!="")){
                echo $thongbao;
            }
            ?>
        <h5 class="tt">Cập nhật tài khoản</h5>
        <div class="col-md-9 container1">
            <?php 
                    if(isset($_SESSION['user'])&&(is_array($_SESSION['user']))) {
                        extract($_SESSION['user']);

                    }
                ?>
            <form action="index.php?act=update_tk" method="post">

                <div class="col mt-3">
                    <label for="validationDefault01" class="form-label">Họ & Tên</label>
                    <input name="user" type="text" class="form-control" id="validationDefault01" value="<?=$user?>">
                </div>
                <div class="col">
                    <label for="validationDefault01" class="form-label">Mật khẩu</label>
                    <input name="pass" type="password" class="form-control" id="validationDefault01"
                        value="<?= $pass?>">
                </div>
                <div class="col">
                    <label for="validationDefault01" class="form-label">Email</label>
                    <input name="email" type="email" class="form-control" id="validationDefault01" value="<?=$email?>">
                </div>
                <div class="col">
                    <label for="validationDefault01" class="form-label">Địa chỉ</label>
                    <input name="diachi" type="text" class="form-control" id="validationDefault01"
                        value="<?= $diachi?>">
                </div>
                <div class="col">
                    <label for="validationDefault01" class="form-label">Số điện thoại</label>
                    <input type="text" name='tel' class="form-control" id="validationDefault01" value="<?=$tel?>">
                </div>
                <div class="col-12">
                    <input type="hidden" name="id" value="<?=$id?>">
                    <input class="btn btn-primary" type="submit" name="capnhat" value="Cập nhật">

                </div>
            </form>
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
</div>
<style>
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
</style>
<style>
    ::placeholder {
        font-weight: 100;

    }

    span {
        color: red;

    }

    .tt {
        padding: 20px 30px;
        background-color: #DC3545;
        color: #ffffff;

    }

    .container1 {
        background-color: #f8f4f4;
        margin-bottom: 0.5rem;
        border-radius: 3px;
        display: flex;
        justify-content: center;
    }

    .container1 input[type="submit"] {
        width: 500px;
        background-color: rgb(167, 32, 32);
        border: none;
        border-radius: 3px;
        height: 40px;
        margin-bottom: 20px;
    }

    .container1 input[type="submit"]:active {
        background-color: rgb(167, 32, 32) !important;
    }

    .container1 input[type="submit"]:hover {
        background-color: rgb(232, 85, 85) !important;
    }

    .container1 input[type="text"],
    input[type="email"],
    input[type="password"] {
        max-width: 700px;
        margin-bottom: 20px;
        border-radius: 3px;
    }


    .container1 label {
        font-weight: 500;
    }
</style>