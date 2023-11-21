<?php
    function book_getByCategory($id) {
        return pdo_query("SELECT * FROM sanpham WHERE MaCD=?",$id);
    }
    function book_getSales($limit) {
        return pdo_query("SELECT * FROM sanpham WHERE GhimTrangChu=1 LIMIT $limit");
    }