<?php
    function book_getBook() {
        return pdo_query("SELECT * FROM sanpham sp  INNER JOIN chude cd ON sp.MaCD = cd.MaCD ORDER BY sp.MaSP ASC");
    }
    function book_countBook() {
        return pdo_query_value("SELECT COUNT(*) FROM sanpham");
    }
    function book_checkCountBook() {
        return pdo_query_value("SELECT COUNT(*) FROM sanpham WHERE SoLuong <=10");
    }
    function book_getByCategory($id) {
        return pdo_query("SELECT * FROM sanpham WHERE MaCD=?",$id);
    }
    function book_getSales($limit) {
        return pdo_query("SELECT * FROM sanpham WHERE GhimTrangChu=1 LIMIT $limit");
    }
    function book_getBooks($id,$limit) {
        return pdo_query("SELECT * FROM sanpham WHERE MaCD=$id LIMIT $limit");
    }
    function book_getTopRankBooks($limit) {
        return pdo_query("SELECT * FROM sanpham ORDER BY SoLuotThich DESC LIMIT $limit");
    }
    function book_getIdBooks($id) {
        return pdo_query_one("SELECT * FROM sanpham sp INNER JOIN chude cd ON sp.MaCD=cd.MaCD WHERE sp.MaSP=?",$id);
    }
    function book_search($keyword,$page=1) {
        $start = ($page-1)*10;
        // trang 1 bắt đầu từ 0
        // trang 2 bắt đầu từ 10
        // trang 3 bắt đàu từ 20
        // trang n bắt đầu từ (n-1)*10
        return pdo_query("SELECT * FROM sanpham sp INNER JOIN chude cd ON sp.MaCD = cd.MaCD WHERE sp.TenSP  LIKE '%$keyword%' OR sp.TacGia LIKE '%$keyword%' OR cd.TenCD LIKE '%$keyword%' LIMIT $start,10");
    }
    function book_searchTotal($keyword) {
        return pdo_query_value("SELECT COUNT(*) FROM sanpham WHERE TenSP LIKE '%$keyword%' ");
    }
    function book_getRandomByCategory($id) {
        return pdo_query("SELECT * FROM sanpham WHERE MaCD= ? ORDER BY rand() LIMIT 5",$id);
    }
    function user_checknameproduct($TenSP){
        return pdo_query_one("SELECT * FROM sanpham WHERE TenSP=?", $TenSP);
    }
    function add_product($MaCD, $TenSP, $HinhSP, $TacGia, $SoLuong, $GiaSP, $NhaXuatBan) {
        // ...
        $result = pdo_execute("INSERT INTO sanpham(MaCD, TenSP, HinhSP, TacGia, SoLuong, GiaSP, NhaXuatBan) VALUES(?, ?, ?, ?, ?, ?, ?)",
                                   $MaCD, $TenSP, $HinhSP, $TacGia, $SoLuong, $GiaSP, $NhaXuatBan);
        // ...
        return empty($result) ? false : true;
      }
      function product_edit($MaSP, $MaCD, $TenSP, $HinhSP, $TacGia, $SoLuong, $GiaSP, $NhaXuatBan) {
        // ...
        pdo_execute("UPDATE sanpham SET MaCD = ?, TenSP = ?, HinhSP = ?, TacGia = ?, SoLuong = ?, GiaSP = ?, NhaXuatBan = ? WHERE MaSP = ?",
                               $MaCD, $TenSP, $HinhSP, $TacGia, $SoLuong, $GiaSP, $NhaXuatBan, $MaSP);
        // ...
        return empty($result) ? false : true;
    }
    
    function product_getByID($MaSP){
        return pdo_query_one("SELECT * FROM sanpham WHERE MaSP = ?", $MaSP);
    }
    
      function product_delete($MaSP){
        pdo_execute("DELETE FROM sanpham WHERE MaSP =? ", $MaSP);
      }
    function book_descreateAmount($MaSach) {
        pdo_execute("UPDATE sanpham SET SoLuong = SoLuong-1 WHERE MaSP =?",$MaSach);
    }