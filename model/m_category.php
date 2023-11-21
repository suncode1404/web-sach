<?php
    include_once 'm_pdo.php';
    function category_All() {
        return pdo_query("SELECT * FROM chude");
    }
    function category_getById($id) {
        return pdo_query_one("SELECT * FROM chude WHERE MaCD =?",$id);
    }