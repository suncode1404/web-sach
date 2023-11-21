<?php
    function book_getByCategory($id) {
        return pdo_query("SELECT * FROM sanpham WHERE MaCD=?",$id);
    }