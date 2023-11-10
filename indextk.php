<?php
    include "./view/header.php";
    include "./view/dieuhuong.php";

    if ( ( isset( $_GET[ 'act' ] ) ) && ( $_GET[ 'act' ] != '' ) ){
        $act = $_GET[ 'act' ];
        switch ($act) {
            case 'dangnhap':
                include "./view/taikhoan/dangnhap.php";
                break;
            case 'dangky':
                include "./view/taikhoan/dangky.php";
                break;
            case 'capnhat':
                include "./view/taikhoan/update_tk.php";
                break;
            case 'spchitiet':
                include "./view/sanphamct.php";
                break;
            
            default:
            
                break;
        }
    }

    include "./view/footer.php";
    
?>