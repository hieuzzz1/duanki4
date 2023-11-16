<?php 
 function load_all_post_home() {
    $sql="SELECT * FROM post where 1 order by id desc limit 0,4";
    $listpost=pdo_query($sql);
    return $listpost;
}
function loadone_post($id){
    $sql = "select * from sanpham where id = ".$id;
    $baiviet = pdo_query_one($sql);
    return $baiviet;
}
?>