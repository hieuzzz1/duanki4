<div class="row">
            <div class="row frmtitle">
                <h1>DANH SÁCH BÌNH LUẬN</h1>
            </div>
            <div class="row frmcontent">
                <div class="row marginboton10 table1">
                        <table>
                            <tr>
                                <th></th>
                                <th>id</th>
                                <th>Nội dung </th>
                                <th>User</th>
                                <th>iduser</th>
                                <th>idpro</th>
                                <th>Ngày bình luận</th>
                                <th></th>
                            </tr>
                            <?php
                                foreach ($listbl as $binhluan){
                                    
                                    extract($binhluan);
                                    $xoabl="index.php?act=xoabl&id=".$id;

                                    echo 
                                    '<tr>
                                        <td><input type="checkbox" name="" id=""></td>
                                        <td>'.$id.'</td>
                                        <td>'.$noidung.'</td>
                                        <td>'.$iduser.'</td>
                                        <td>'.$idpro.'</td>
                                        <td>'.$ngaybinhluan.'</td>
                                        <td> <a href="'.$xoabl.'"><input type="button" value="Xóa"></a></td>
                                    </tr>';
                                
                                }
                            ?>
                            
                        </table>
                </div>
                <div class="row marginboton10">
                    <input type="button" value="Chọn tất cả">
                    <input type="button" value="Bỏ chọn tất cả">
                    <input type="button" value="Xóa các mục đã chọn">
                </div>
            </div>
        </div>