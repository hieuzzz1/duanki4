<?php
    include "./header.php";
    include "../model/danhmuc.php";
    include "../model/pdo.php";
    

    if(isset($_GET['act'])){
        $act = $_GET['act'];
        switch ($act) {
            case 'adddm':
                // Kiểm tra xem người dùng có click vào nút add k ?
                if(isset($_POST['themmoi'])&& ($_POST['themmoi'])){
                    $tendm = $_POST['tendm'];
                    insert_danhmuc($tendm);
                    $thongbao ="Thêm thành công";
                }
                include "danhmuc/add.php";
                break;

            case 'listdm':
                $listdanhmuc=loadall();
                include "danhmuc/list.php";
                break;
            
            case 'xoadm':
                if(isset($_GET['id'])&& ($_GET['id']>0)){
                    delete_danhmuc($_GET['id']);
                }
                $listdanhmuc=loadall();
                include "danhmuc/list.php";
                break;

            case 'suadm':
                if(isset($_GET['id'])&& ($_GET['id']>0)){
                    $dm= loadone($_GET['id']);
                }
                include "danhmuc/update.php";
                break;

            case 'updatedm':
                if(isset($_POST['capnhat'])&& ($_POST['capnhat'])){
                    $tenloai = $_POST['tenloai'];
                    $id = $_POST['id'];
                    updatedm($tenloai,$id);
                    $thongbao ="Cập nhật thành công";
                }
                $listdanhmuc=loadall();
                include "danhmuc/list.php";
                break;
            case '':
                
                break;
            
            default:
                include "home.php";
                break;
        }
    }

    

?>
<?php 
include "./footer.php";
?>