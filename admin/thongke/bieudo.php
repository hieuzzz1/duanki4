<!DOCTYPE html>
<html>
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

<body>


</body>
</html>
    <div class="row">
                <div class="row frmtitle marginboton">
                    <h1>BIỀU ĐỒ</h1>
                </div>
            
            
                <div class="row frmcontent">
                    <div class="row marginboton10 table1">
                            
                    <div
                        id="myChart" style="width:100%; max-width:600px; height:500px;">
                    </div>

                        <script>
                        google.charts.load('current', {'packages':['corechart']});
                        google.charts.setOnLoadCallback(drawChart);

                        function drawChart() {
                        const data = google.visualization.arrayToDataTable([
                        ['Danh mục', 'Số lượng sản phẩm'],
                        <?php 
                            $tongdm=count($listtk);
                            $i=1;
                            foreach ($listtk as $thongke) {
                                extract($thongke);
                                if($i==$tongdm) $dauphay=""; else $dauphay=",";
                                echo "['".$thongke['tendm']."', ".$thongke['countsp']."]".$dauphay;
                                $i+=1;
                            }
                        ?>
                        
                        
                        ]);

                        const options = {
                        title:'World Wide Wine Production'
                        };

                        const chart = new google.visualization.PieChart(document.getElementById('myChart'));
                        chart.draw(data, options);
                        }
                        </script>
                            
                           
                            
                        </table>
                </div>
                <div class="row marginboton10">
                    <a href="index.php?act=bieudo"><input type="button" value="Xem biểu đồ"></a>
                </div>
            </div>
        </div>