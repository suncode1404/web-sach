<?php
    //Thao tác dữ liệu CSDL
    include_once 'model/m_pdo.php';
    function history_hasCart($MaTK) {
        return pdo_query_one("SELECT * FROM lichsu WHERE MaTK =? AND TrangThai=?",$MaTK,'gio-hang');
    }
    function history_add($MaTK) {
        pdo_execute("INSERT INTO lichsu(`MaTK`,`TrangThai`) VALUES (?,?)",$MaTK,'gio-hang');
    }
    function history_addToCart($MaLS,$MaSP,$count) {
        pdo_execute("INSERT INTO chitietlichsu(`MaLS`,`MaSP`,`SoLuongLS`) VALUES (?,?,?)",$MaLS,$MaSP,$count);
    }
    function history_getCart($MaTK) {
        return pdo_query("SELECT * FROM lichsu ls INNER JOIN chitietlichsu ct ON ls.MaLS =ct.MaLS INNER JOIN sanpham sp ON ct.MaSP = sp.MaSP WHERE ls.MaTK=? AND ls.TrangThai=?",$MaTK,'gio-hang');
    }
    function history_removeFromCart($MaLS,$MaSP) {
        pdo_execute("DELETE FROM chitietlichsu WHERE MaLS =? AND MaSP= ?",$MaLS,$MaSP);
    }
    function history_getAllByAccount () {
        return pdo_query("SELECT * FROM lichsu ls INNER JOIN taikhoan tk ON ls.MaTK = tk.MaTk");
    }
    function history_updateCart($NgayTao,$TongTien,$TrangThai,$MaLS) {
        pdo_execute("UPDATE lichsu SET NgayTao=?, TongTien=?, TrangThai=? WHERE MaLS=?",$NgayTao,$TongTien,$TrangThai,$MaLS);
    }