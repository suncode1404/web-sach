<?php
    // Gửi nhận dữ liệu thông qua model
    // Gửi nhận dữ liệu thông qua view
    if(isset($_GET['act'])) {
        switch ($_GET['act']) {
            case 'detail':
                //Lấy dữ liệu
                include_once 'model/m_category.php';
                $ctChuDe = category_All($_GET['id']);
                include_once 'model/m_book.php';
                $dsSach = book_getByCategory($_GET['id']);
                //Hiện thị dữ liệu
                $view_name = 'category_detail';
                break;
            default:
                break;
        }
        include_once 'view/v_user_layout.php';
    }