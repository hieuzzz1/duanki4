<div class="row">
            <div class="row frmtitle marginboton">
                <h1>THỐNG KÊ</h1>
            </div>
        
        
            <div class="row frmcontent">
                <div class="row marginboton10 table1">
                        
                        <table>
                            <tr>
                                <th>MÃ DANH MỤC</th>
                                <th>LOẠI HÀNG</th>
                                <th>SỐ LƯỢNG</th>
                                <th>GIÁ CAO NHẤT</th>
                                <th>GIÁ THẤP NHÂT</th>
                                <th>GIÁ TRUNG BÌNH</th>
                            </tr>
                            <?php 
                                foreach ($listtk as $thongke) {
                                    extract($thongke);
                                    echo '<tr>
                                            <td>'.$madm.'</td>
                                            <td>'.$tendm.'</td>
                                            <td>'.$countsp.'</td>
                                            <td>'.$maxprice.'</td>
                                            <td>'.$minprice.'</td>
                                            <td>'.$avgprice.'</td>
                                        </tr>';
                                }
                            ?>
                            
                           
                            
                        </table>
                </div>
                <div class="row marginboton10">
                    <a href="index.php?act=bieudo"><input type="button" value="Xem biểu đồ"></a>
                </div>
            </div>
        </div>