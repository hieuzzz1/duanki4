    

<div class="be-content">
    <div class="main-content container-fluid">
        <div class="row">
            <div class="col danhmucsp-content">
                <div class="danhmucsp">
                    <p>DANH MỤC SẢN PHẨM</p>
                </div>
                <div class="bangdanhmuc">
                    <form action="index.php?act=update_dmuc" method="post">
                                    <?php
                        if(is_array($dm)){
                            extract($dm);
                        }
                    ?>
                    <p>Tên danh mục</p>
                    
                    <input type="text" name="tenhanghoa" value="<?php if(isset($tendm)&&($tendm!="")) echo $tendm;?>">
                    <input type="hidden" name="id" value="<?php if(isset($id)&&($id>0)) echo $id;?>">
                    <input type="submit" name="capnhat" value="CẬP NHẬT">

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


<style>
    .table {
        text-align: center !important;
    }

    .table a:hover {
        color: #DC3545 !important;
        cursor: pointer;
    }

    .table a {
        color: #000 !important;
    }

    .table thead {
        background-color: #f3f3f3 !important;
        border: 0.2px solid #e6e6e6 !important;
    }

    .table tbody {
        border: 0.2px solid #e6e6e6 !important;
    }

    .table thead th {
        border: none !important;
    }

    .table tbody th {
        border: 0.1px solid #e6e6e6 !important;
        padding: 25px;
    }

    .table tbody tr td {
        border: 0.1px solid #e6e6e6 !important;
    }

    .table tbody td {
        border: none !important;
    }

    .danhmucsp p {
        margin-top: 10px;
        margin-left: -10px;
        padding: 10px;
        font-size: 17px;
    }

    .be-content {
        padding: 10px;
    }

    .be-content .row {
        background-color: #ffffff;
    }
</style>