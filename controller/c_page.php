<?php
//Gửi nhận dữ liệu thông qua model
//Gửi nhận dữ liệu thông qua view
if(isset($_GET['act'])) {
    switch ($_GET['act']) {
        case 'home':
            //Lấy dữ liệu
            include_once 'model/m_book.php';
            $dsSales = book_getSales(5);
            //Hiện thị dữ liệu
            $view_name = 'page_home';
            break;
        default:
            break;
    }
    include_once 'view/v_user_layout.php';
}