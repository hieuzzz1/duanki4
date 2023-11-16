<div class="boxright">
    <div class="col-md-3 dm2">
        <ul class="list-group">
            <div class="list-group-item active dm">Danh mục sản phẩm</div>


                 <?php
                    foreach($dsdm as $dm){
                        extract($dm);
                        $linkdm = "index.php?act=sanpham&iddm=".$id;
                        // echo '<li><a href="'.$linkdm.'">'.$tendm.'</a></li>';
                        echo '<li class="list-group-item"><a href="'.$linkdm.'">'.$tendm.'</a></li>';
                    }
                   ?>
        </ul>

        <div class="col mt-3 container-spnew">
            <div class="list-group-item active dm text-white">Sản phẩm mới nhất</div>
            <div class="row">
                <div class="col container-img">
                    <?php
                        foreach ($spyt as $yt) {
                            extract($yt);
                            $linksp = 'index.php?act=sanphamct&idsp=' . $id;
                           
                            echo '<div class="selling_products" style="width:100%;">
                                    <img src="./img//sanpham/sp4.png" alt="sp">
                                    <a href="' . $linksp . '">' . $name . '</a>
                                </div>';
                        }   
                        ?>
                </div>
            </div>
        </div>
    </div>
</div>
<style>
    /* css  của sản phẩm/bài viết mới nhất */
    .img span {
        padding: 10px;
    }

    .container-img img {
        max-width: 50px;
        margin: 10px;
        border: 1px solid rgb(246, 183, 183);
    }

    .container-spnew {
        border: 1px solid rgb(243, 232, 232);
        border-top: none;
    }

    .container-spnew a {
        color: black;
        padding: 0;
        text-decoration: none;
        border-bottom: 1px solid rgb(221, 196, 196);
    }

    .container-spnew a:hover {
        color: rgb(216, 113, 113);
    }

    .container-spnew .list-group-item {
        border-left: none !important;
        border-right: none !important;
    }



    /* css của danh mục sản phẩm */
    .dm {
        background-color: #DC3545 !important;
        border: 10px solid #DC3545 !important;
        text-align: center;
        border-radius: 0% !important;
    }

    .dm2 {
        width: 300px;
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