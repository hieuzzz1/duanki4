
<div class="container">
    <div class="row">
            <?php 
                include "./boxright.php";
            ?>
        <div class="col-md-9 homead ">
                <ul class="list-group  ">
                        <div class="list-group-item active dm" style="background-color:#ff9f96 ; border: red;">CẬP NHẬT MỚI</div>
                </ul>
                    <div class="dmad">
                            <div class=" frmtitle">
                                <h6>THÊM MỚI LOẠI HÀNG HÓA</h6>
                            </div>
                            <div class=" frmcontent">
                                <form action="index.php?act=adddm" method="post">
                                    <div class="ip">
                                        Mã Loại <br>
                                        <input type="text" name="maloai" disabled>
                                    </div>
                                    <div class="ip">
                                        Tên Loại <br>
                                        <input type="text" name="tendm">
                                    </div>
                                    <div class=" button">
                                        <input type="submit" name="themmoi" value="Thêm mới">
                                        <input type="reset" value="Nhập lại">
                                        <a href="index.php?act=listdm"><input type="button" value="Danh sách"></a>
                                    </div>
                                    <?php 
                                        if(isset($thongbao)&&($thongbao!=""))
                                        echo  $thongbao;
                                    ?>
                                </form>
                            </div>
                         </div>
                </div>
    </div>
</div>

<Style>
    .homead{
    margin-top: 20px;
    margin-bottom: 20px;
    font-weight: 500;
    
}
a{
    color: black;
}
</Style>