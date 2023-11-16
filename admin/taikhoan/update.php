<?php 
    if(is_array($tk)){
        extract($tk);
    }
?>
<div class="row">
            <div class="row frmtitle">
                <h1>CẬP NHẬP TÀI KHOẢN</h1>
            </div>
            <div class="row frmcontent">
                <form action="index.php?act=updatetk" method="post">
                    <div class="row marginboton10">
                        Mã Loại <br>
                        <input type="text" name="maloai" disabled>
                    </div>
                    <div class="row marginboton10">
                        Tên tài khoản <br>
                        <input type="text" name="user" value="<?=$user?>">
                    </div>
                    <div class="row marginboton10">
                        Mậ khẩu <br>
                        <input type="text" name="pass" value="<?=$pass?>">
                    </div>
                    <div class="row marginboton10">
                        Email <br>
                        <input type="text" name="email" value="<?=$email?>">
                    </div>
                    <div class="row marginboton10">
                        Địa chỉ <br>
                        <input type="text" name="address" value="<?=$address?>">
                    </div>
                    <div class="row marginboton10">
                        Điện thoại <br>
                        <input type="text" name="tel" value="<?=$tel?>">
                    </div>
                    <div class="row marginboton10">
                        Role <br>
                        <input type="text" name="role" value="<?=$role?>">
                    </div>
                    <div class="row marginboton10">
                        <input type="hidden" name="id" value="<?php if(isset($id)&&($id>0)) echo $id; ?>">
                        <input type="submit" name="capnhat" value="Cập nhật">
                        <input type="reset" value="Nhập lại">
                        <a href="index.php?act=listtk"><input type="button" value="Danh sách"></a>
                    </div>
                    <?php 
                        if(isset($thongbao)&&($thongbao!=""))
                        echo  $thongbao;
                    ?>
                </form>
            </div>
        </div>
    </div>