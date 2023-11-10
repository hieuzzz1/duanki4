<?php
    function load_all_sp_home() {
        $sql="SELECT * FROM sanpham where 1 order by id desc limit 0,8";
        $listsp=pdo_query($sql);
        return $listsp;
    }
?>