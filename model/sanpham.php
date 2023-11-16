<?php
    function load_all_sp_home() {
        $sql="SELECT * FROM sanpham where 1 order by id desc limit 0,8";
        $listsp=pdo_query($sql);
        return $listsp;
    }
    function loatAll_sanpham_top5(){
        $sql="select * from sanpham where 1 order by luotxem desc limit 0,5";
        $listsanpham = pdo_query($sql);
        return $listsanpham;
    }
?>