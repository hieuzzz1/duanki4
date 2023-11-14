<?php
function dangky($user,$pass,$email,$tel) {
    $sql = "insert into taikhoan(user,pass,email,diachi,tel,role) values('$user','$pass','$email','null','$tel','null')";
    pdo_execute($sql);
}
function themtt($diachimuahang,$sdtmuahang) {
    $sql = "insert into taikhoanmuahang(diachimuahang,sdtmuahang) values('$diachimuahang','$sdtmuahang')";
    pdo_execute($sql);
}
function check($user,$pass) {
    $sql = "select * from  taikhoan where user='".$user."' and  pass='".$pass."' ";
    $sp = pdo_query_one($sql);
    return $sp;
}
function checktt($diachimuahang,$sdtmuahang) {
    $sql = "select * from  taikhoanmuahang where diachimuahang='".$diachimuahang."' and  sdtmuahang='".$sdtmuahang."' ";
    $check = pdo_query_one($sql);
    return $check;
}
function checkemail($email) {
    $sql = "select * from  taikhoan where email='".$email."' ";
    $sp = pdo_query_one($sql);
    return $sp;
}
function update_tk($id,$user,$pass,$email,$address,$tel){
    $sql ="update taikhoan set user ='".$user."', pass ='".$pass."', email ='".$email."', diachi ='".$address."', tel ='".$tel."' where id=".$id;

pdo_execute($sql);
}
?>