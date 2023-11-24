<?php
//Gửi nhận dữ liệu thông qua model
//Gửi nhận dữ liệu thông qua view
if(isset($_GET['act'])) {
    switch ($_GET['act']) {
        case 'home':
            //Lấy dữ liệu
            include_once 'model/m_book.php';
            
            //lấy ra những sách đang sale
            $dsSales = book_getSales(5);
            //lẩy ra sach trong nước
            $dsDomesticBooks = book_getBooks(16,10);
            //lấy ra sách ngoài nước
            $dsForeignBooks = book_getBooks(17,10);
            //lấy ra bxh sách
            $dsRankTopBooks = book_getTopRankBooks(5);

            //Hiện thị dữ liệu
            $view_name = 'page_home';
            break;
        case 'domesticbooks':
            //Lấy dữ liệu
            include_once 'model/m_category.php';
            $ctChuDe = category_getById($_GET['id']);
            include_once 'model/m_book.php';
            $dsSach = book_getByCategory($_GET['id']);
            //Hiện thị dữ liệu
            $view_name = 'page_domesticbooks';
            break;
        case 'foreignbooks':
            //Lấy dữ liệu
            include_once 'model/m_category.php';
            $ctChuDe = category_getById($_GET['id']);
            include_once 'model/m_book.php';
            $dsSach = book_getByCategory($_GET['id']);
            //Hiện thị dữ liệu
            $view_name = 'page_foreignbooks';
            break;
        default:
            break;
    }
    include_once 'view/v_user_layout.php';
}