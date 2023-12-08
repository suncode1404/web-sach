<?php
    function user_login($user,$pass) {
        return pdo_query_one("SELECT * FROM taikhoan WHERE TenTaiKhoan=? AND MatKhau=?",$user,$pass);
    }
    function user_resign($fullname,$username,$phone,$password,$address) {
        return pdo_execute("INSERT INTO taikhoan(`HoTen`,`TenTaiKhoan`,`SoDienThoai`,`MatKhau`,`DiaChi`) VALUES(?,?,?,?,?)",$fullname,$username,$phone,$password,$address);
    }
    function user_getUser() {
        return pdo_query("SELECT * FROM taikhoan");
    }
    function user_countUser() {
        return pdo_query_value("SELECT COUNT(*) FROM taikhoan WHERE Quyen=0");
    }
    function user_checkusername($TenTaiKhoan){
        return pdo_query_one("SELECT * FROM taikhoan WHERE TenTaiKhoan=?", $TenTaiKhoan);
    }
    function user_add($TenTaiKhoan,$MatKhau, $HoTen, $DiaChi, $SoDienThoai, $Quyen){
        pdo_execute("INSERT INTO  taikhoan(`TenTaiKhoan`,`MatKhau`,`HoTen`,`DiaChi`,`SoDienThoai`,`Quyen`)  VALUES(?,?,?,?,?,?)",
        $TenTaiKhoan,$MatKhau, $HoTen, $DiaChi, $SoDienThoai, $Quyen);
    }

    function user_edit($MaTK,$TenTaiKhoan,$MatKhau, $HoTen, $DiaChi, $SoDienThoai, $Quyen){
        pdo_execute("UPDATE taikhoan SET TenTaiKhoan =? , MatKhau =? ,
        HoTen =? , DiaChi = ? , SoDienThoai=? , Quyen =? WHERE MaTK =? ",$MaTK, $TenTaiKhoan, $MatKhau,
        $HoTen, $DiaChi , $SoDienThoai, $Quyen, );
    }   
    function user_getByID($MaTK){
        return pdo_query_one("SELECT * FROM taikhoan WHERE MaTK = ?", $MaTK);

    }
    function user_delete($MaTK){
        pdo_execute("DELETE FROM taikhoan WHERE MaTK =? ", $MaTK);

    }