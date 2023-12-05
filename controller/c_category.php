<?php
    // Gửi nhận dữ liệu thông qua model
    // Gửi nhận dữ liệu thông qua view
    if(isset($_GET['act'])) {
        switch ($_GET['act']) {
            case 'detail':
                //Lấy dữ liệu
                include_once 'model/m_category.php';
                $ctChuDe = category_getById($_GET['id']);
                include_once 'model/m_book.php';
                $dsSach = book_getByCategory($_GET['id']);
                $page =1;
                if(isset($_GET['page'])) {
                    $page = $_GET['page'];
                }
                $keyword = $_GET['act'];
                $sotrang =ceil(intval(book_searchTotal($keyword,$page))/10);
                //Hiện thị dữ liệu
                $view_name = 'category_detail';
                break;
            default:
                break;
        }
        include_once 'view/v_user_layout.php';
    }