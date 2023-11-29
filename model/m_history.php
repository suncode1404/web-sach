<?php
    //Thao tác dữ liệu CSDL
    include_once 'model/m_pdo.php';
    function history_hasCart($MaTK) {
        return pdo_query_one("SELECT * FROM lichsu WHERE MaTK =? AND TrangThai=?",$MaTK,'gio-hang');
    }
    function history_add($MaTK,$Soluong) {
        pdo_execute("INSERT INTO lichsu(`MaTK`,`SoLuongLS`,`TrangThai`) VALUES (?,?,?)",$MaTK,$Soluong,'gio-hang');
    }
    function history_addToCart($MaLS,$MaSP) {
        pdo_execute("INSERT INTO chitietlichsu(`MaLS`,`MaSP`) VALUES (?,?)",$MaLS,$MaSP);
    }
    function history_getCart($MaTK) {
        return pdo_query("SELECT * FROM lichsu ls INNER JOIN chitietlichsu ct ON ls.MaLS =ct.MaLS INNER JOIN sanpham sp ON ct.MaSP = sp.MaSP WHERE ls.MaTK=? AND ls.TrangThai=?",$MaTK,'gio-hang');
    }