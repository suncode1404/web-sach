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
            if(isset($_POST['addcart'])) {
                header('Location: ?mod=book&act=addToCart&id='.$ctSach['MaSP'].'&count='.$_POST['count']);
            }
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
                return;
            } 
            $count = $_GET['count'];
            $MaSP = $_GET['id'];
            $MaTK = $_SESSION['user']['MaTK'];
            try {
                //Kiểm tra có giỏ hàng hay chưa?
                include_once 'model/m_history.php';
                $kq = history_hasCart($MaTK);
                if($kq) {
                    //Đúng, đã có giỏ hàng, thêm vào giỏ hàng
                    history_addToCart($kq['MaLS'],$MaSP,$count);
                }else {
                    //sai, chưa có giỏ sách 
                    history_add($MaTK);
                    $kq = history_hasCart($MaTK);
                    history_addToCart($kq['MaLS'],$MaSP,$count);          
                }
                $_SESSION['giohang'] = 'Đã thêm sách vào giỏ hàng';
            } catch (\Throwable $th) {  
                $_SESSION['thongbao'] ='Sách này đã có trong giỏ';
            }
                
            header('Location: ?mod=book&act=detail&id='.$MaSP.'&count='.$count);
            break;
        case 'removeFromCart':
            include_once 'model/m_history.php';
            $MaTK = $_SESSION['user']['MaTK'];
            $MaSP = $_GET['id'];
            $GioSach = history_hasCart($MaTK);
            if($GioSach) {
                history_removeFromCart($GioSach['MaLS'],$MaSP);
            }
            header('Location: ?mod=page&act=cart');
            break;
        case 'updateCart':
            include_once 'model/m_history.php';
            $MaTK = $_SESSION['user']['MaTK'];
            $GioHang = history_hasCart($MaTK);
            if($GioHang) {
                $TongTien = $_POST['tongtien1'];
                $TrangThai = 'chuan-bi';
                $NgayTao = date('Y-m-d H:i:s');
                include_once 'model/m_book.php';
                $ctGioSach = history_getCart($MaTK);
                foreach($ctGioSach as $sach) {
                    book_descreateAmount($sach['MaSP']);
                }
                history_updateCart($NgayTao,$TongTien,$TrangThai,$GioHang['MaLS']);
                $_SESSION['thongbao'] ='Đặt hàng thành công vui lòng vào lịch sử mua hàng để biết thông tin';
                header('Location: ?mod=page&act=home');
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