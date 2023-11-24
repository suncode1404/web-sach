<?php
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
        return pdo_query("SELECT * FROM sanpham ORDER BY SoLuotThich DESC, SoLuotMua DESC LIMIT $limit");
    }
    function book_getIdBooks($id) {
        return pdo_query_one("SELECT * FROM sanpham sp INNER JOIN chude cd ON sp.MaCD=cd.MaCD WHERE sp.MaSP=?",$id);
    }
    function book_search($keyword,$page=1) {
        $start = ($page-1)*8;
        // Trang 1 lấy 8 cuốn
        // trang 1 bắt đầu từ 0
        // trang 2 bắt đầu từ 8
        // trang 3 bắt đàu từ 16
        // trang n bắt đầu từ (n-1)*8
        return pdo_query("SELECT * FROM sanpham WHERE TenSP LIKE '%$keyword%' LIMIT $start,8");
    }