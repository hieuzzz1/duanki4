<?php
session_start();
    include "../admin/header.php";
    include "../admin/footer.php";
    include "../model/pdo.php";
    include "../model/danhmuc.php";
    $listdanhmuc=loadall();
    if ( ( isset( $_GET[ 'act' ] ) ) && ( $_GET[ 'act' ] != '' ) ){
        $act = $_GET[ 'act' ];
        switch ($act) {
            case "list_tk":
                include "../admin/taikhoan/list_tk.php";
                break;

            case "list_danhmuc":
                $listdanhmuc=loadall();
                include "../admin/danhmuc/list_danhmuc.php";
                break;

            case "themdanhmuc":
                if(isset($_POST['themmoidm'])&&($_POST['themmoidm'])){
                    $tenhanghoa=$_POST['tenhanghoa'];
                    insert_danhmuc($tenhanghoa);
                    echo '<meta http-equiv="refresh" content="0;url=index.php?act=list_danhmuc">';

                }
                
                include "../admin/danhmuc/list_danhmuc.php";
                break;

            case 'xoadanhmuc':
                if(isset($_GET['id'])&&($_GET['id']>0)){
                    delete_danhmuc($_GET['id']);
                }
                $listdanhmuc=loadall();
                include "../admin/danhmuc/list_danhmuc.php";
                break;

            case 'update_dmuc':
                if(isset($_POST['capnhat'])&&($_POST['capnhat'])){
                    $tendm=$_POST['tenhanghoa'];
                    $id=$_POST['id'];
                    update_danhmuc($id,$tendm);
                    echo '<meta http-equiv="refresh" content="0;url=index.php?act=list_danhmuc">';
                }
                $listdanhmuc=loadall();
                include "../admin/danhmuc/list_danhmuc.php";
                break;
            case 'suadm':
                if(isset($_GET['id'])&&($_GET['id']>0)){
                    $dm=loadone($_GET['id']);
                }
                include "../admin/danhmuc/update_dmuc.php";
                break;







            default:
            include "../admin/home.php";
                break;
        }
    }else {
        include "../admin/home.php";
    }

    
?>
