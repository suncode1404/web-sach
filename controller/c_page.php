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
            $page =1;
            if(isset($_GET['page'])) {
                $page = $_GET['page'];
            }
            $keyword = $_GET['act'];
            $sotrang =ceil(intval(book_searchTotal($keyword,$page))/10);
            //Hiện thị dữ liệu
            $view_name = 'page_domesticbooks';
            break;
        case 'foreignbooks':
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
            $view_name = 'page_foreignbooks';
            break;
        case 'rankbooks':
            //Lấy dữ liệu
            include_once 'model/m_book.php';
            //lấy ra bxh sách
            $dsRankTopBooks = book_getTopRankBooks(10);
            //lấy ra những sách đang sale
            $dsSales = book_getSales(3);
            //Hiện thị dữ liệu
            $view_name = 'page_rankbooks';
            break;
        case 'cart':
            //Lấy dữ liệu
            include_once 'model/m_history.php';
            $ctGioSach =[];
            if(isset($_SESSION['user'])) {
                $MaTK = $_SESSION['user']['MaTK'];
                $GioSach = history_hasCart($MaTK);
                if($GioSach) {
                    $ctGioSach =history_getCart($MaTK);
                }
            }
            // Hiện thị dữ liệu
            $view_name = 'page_cart';
            break;
        default:
            break;
    }
    include_once 'view/v_user_layout.php';
}