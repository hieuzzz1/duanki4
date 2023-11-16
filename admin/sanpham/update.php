<?php 
    if(is_array($sanpham)){
        extract($sanpham);
    }
    $hinhpart = "../upload/".$img;
        if(is_file($hinhpart)){
            $hinh="<img src = '".$hinhpart."' height='80'>";
        }   
        else{
            $hinh='Không có hình';
        } 
?>
<div class="row">
            <div class="row frmtitle">
                <h1>CẬP NHẬP LOẠI HÀNG HÓA</h1>
            </div>
            <div class="row frmcontent">
            <form action="index.php?act=updatesp" method="post" enctype="multipart/form-data">
                    <div class="row marginboton10">
                    <select name="iddm">
                            <?php 
                                foreach ($listdanhmuc as $key=>$value ) {
                                    
                                    if($iddm==$value['id']) $s="selected"; else $s="";
                                    echo '<option value="'.$value['id'].'" '.$s.'>'.$value['name'].'</option>';
                                    
                                }
                            ?>
                            <!-- foreach ($listdanhmuc as $danhmuc ) {
                                    extract($danhmuc);
                                    if($iddm==$id) $s="selected"; else $s="";
                                    echo '<option value="'.$id.'" '.$s.'>'.$name.'</option>';
                                    
                                }
                             -->
                        </select>
                    </div>
                    <div class="row marginboton10">
                        Tên sản phẩm <br>
                        <input type="text" name="tensp" value="<?=$name?>">
                    </div>
                    <div class="row marginboton10">
                        Giá <br>
                        <input type="text" name="giasp" value="<?=$price?>">
                    </div>
                    <div class="row marginboton10">
                        Hình<br>
                        <input type="file" name="hinh" id="">
                        <?=$hinh?>
                    </div>
                    <div class="row marginboton10">
                        Mô tả <br>
                        <textarea name="mota" cols="30" rows="10"><?=$mota?></textarea >
                    </div>
                    <div class="row marginboton10">
                        <input type="hidden" name="id" value="<?=$id?>">
                        <input type="submit" name="capnhat" value="Cập nhật">
                        <input type="reset" value="Nhập lại">
                        <a href="index.php?act=listsp"><input type="button" value="Danh sách"></a>
                    </div>
                    <?php 
                        if(isset($thongbao)&&($thongbao!=""))
                        echo  $thongbao;
                    ?>
                </form>
            </div>
        </div>
    </div>