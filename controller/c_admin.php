<?php
//Gửi nhận dữ liệu thông qua model
//Gửi nhận dữ liệu thông qua view
if(isset($_GET['act'])) {
    switch ($_GET['act']) {
        case 'dashboard':
            //Lấy dữ liệu
            include_once 'model/m_book.php';
            $tongSP = book_countBook();
            $checkSP = book_checkCountBook();
            include_once 'model/m_user.php';
            $tongUser = user_countUser();
            include_once 'model/m_history.php';
            $dsLS = history_getAllByAccount();
            //Hiện thị dữ liệu
            $view_name = 'admin_dashboard';
            break;
        case 'user':
             //Lấy dữ liệu
            include_once 'model/m_user.php';
            $dsUser = user_getUser();
            //Hiện thị dữ liệu
            $view_name = 'admin_user';
            break;
        case 'product':
             //Lấy dữ liệu
            include_once 'model/m_book.php';
            $dsBook = book_getBook();
            //Hiện thị dữ liệu
            $view_name = 'admin_product';
            break;
        case 'product-edit':
             //Lấy dữ liệu
            include_once 'model/m_book.php';
            $dsBook = book_getBook();
            //Hiện thị dữ liệu
            $view_name = 'admin_product_edit';
            break;
        default:
            break;
    }
    include_once 'view/v_admin_layout.php';
}

