<?php
//Gửi nhận dữ liệu thông qua model
//Gửi nhận dữ liệu thông qua view
if(isset($_GET['act'])) {
    switch ($_GET['act']) {
        case 'detail':
            //Lấy dữ liệu
            include_once 'model/m_book.php';
            $ctSach = book_getIdBooks($_GET['id']);
            //Hiện thị dữ liệu
            $view_name = 'book_detail';
            break;
        case 'search':
            if(isset($_POST['keyword'])) {
                header("Location: ?mod=book&act=search&keyword=".$_POST['keyword']);
            }
            //Lấy dữ liệu
            include_once 'model/m_book.php';
            $page =1;
            if(isset($_GET['page'])) {
                $page = $_GET['page'];
            }
            $pattern ='~[^()#$%^=\+]+~ui';
            $ketqua = book_search($_GET['keyword'],$page);
            //Hiện thị dữ liệu
            $view_name = 'book_search';
            break;
        default:
            break;
    }
    include_once 'view/v_user_layout.php';
}