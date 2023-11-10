<?php
    include "./model/pdo.php";
    include "./model/sanpham.php";
    include "./view/header.php";

    $spnew=load_all_sp_home();

    if ( ( isset( $_GET[ 'act' ] ) ) && ( $_GET[ 'act' ] != '' ) ){
        $act = $_GET[ 'act' ];
        switch ($act) {
            case 'gioithieu':
                include "./view/gioithieu.php";
                break;
            case 'tintuc':
                include "./view/tintuc.php";
                break;

            
            
            default:
            include "./view/home.php";
                break;
        }
    }else {
        include "./view/home.php";
    }

    include "./view/footer.php";
    
?>