<?php
//Gửi nhận dữ liệu thông qua model
//Gửi nhận dữ liệu thông qua view
if(isset($_GET['act'])) {
    switch ($_GET['act']) {
        case 'detail':
            //Lấy dữ liệu

            //Hiện thị dữ liệu
            $view_name = 'book_detail';
            break;
        default:
            break;
    }
    include_once 'view/v_user_layout.php';
}