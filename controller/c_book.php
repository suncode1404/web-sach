<?php
//Gửi nhận dữ liệu thông qua model
//Gửi nhận dữ liệu thông qua view
if(isset($_GET['act'])) {
    switch ($_GET['act']) {
        case 'detail':
            //Lấy dữ liệu
            include_once 'model/m_book.php';
            $ctSach = book_getIdBooks($_GET['id']);
            $dsRandomSach = book_getRandomByCategory($ctSach['MaCD']);
            include_once 'model/m_comment.php';
            $dsCamNghi = comment_getByBook($_GET['id']);
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
            $pattern ='/^[^@()&#$%^=\+_]+$/iu';
            $keyword =trim($_GET['keyword']);
            $result =preg_match($pattern,$keyword);
            if($result == false) {
                $ketqua =[];
                $_SESSION['thongbao'] ='Không tìm thấy kết nào';
                // $sotrang = 0;
            }else {
                $ketqua = book_search($keyword,$page);
                $sotrang = ceil(intval(book_searchTotal($keyword,$page))/10);
                if ($ketqua == []) {
                    $_SESSION['thongbao'] ='Không tìm thấy kết nào';
                }

            }
            //Hiện thị dữ liệu
            $view_name = 'book_search';
            break;
        case 'addToCart':
            include_once 'model/m_book.php';
            $ctSach = book_getIdBooks($_GET['id']);
            if(!isset($_SESSION['user'])) {
                $_SESSION['thongbao'] = 'Bạn cần đăng nhập để mua hàng';
                header('Location: ?mod=book&act=detail&id='.$ctSach['MaSP']);
            } 
            break;
        case 'comment':
            include_once 'model/m_comment.php';
            comment_add($_SESSION['user']['MaTK'],$_POST['MaSP'],$_POST['NoiDung']);
            header('Location: ?mod=book&act=detail&id='.$_POST['MaSP']);
            break;
        default:
            break;
    }
    include_once 'view/v_user_layout.php';
}