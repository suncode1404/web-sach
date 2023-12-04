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