<?php
    include_once 'm_pdo.php';
    function category_All() {
        return pdo_query("SELECT * FROM chude");
    }