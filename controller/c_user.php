<?php
//Gửi nhận dữ liệu thông qua model
//Gửi nhận dữ liệu thông qua view
if(isset($_GET['act'])) {
    switch ($_GET['act']) {
        case 'login':
            //Lấy dữ liệu
            include_once 'model/m_user.php';
            if(isset($_POST['user']) && isset($_POST['pass'])) {
                $result = user_login($_POST['user'],$_POST['pass']);
                if($result) {
                    //Thành công
                    $_SESSION['user'] = $result;
                    header('Location: ?mod=page&act=home');
                }else {
                    $_SESSION['thongbao'] = 'Tên tài khoản hoặc mật khẩu không trùng khớp';
                }
            }
            //Hiện thị dữ liệu
            $view_name = 'user_login';
            break;
        case 'logout':
            //Lấy dữ liệu
            unset($_SESSION['user']);
            header('Location: ?mod=page&act=home');
            //Hiện thị dữ liệu
            break;
        case 'resign':
            //Lấy dữ liệu
            include_once 'model/m_user.php';
            if(isset($_POST['fullname']) || isset ($_POST['username']) || isset ($_POST['phone']) || isset ($_POST['password']) || isset ($_POST['address']) ) {
                $fullname = filter_input(INPUT_POST,'fullname',FILTER_SANITIZE_SPECIAL_CHARS);
                $username = filter_input(INPUT_POST,'username',FILTER_SANITIZE_SPECIAL_CHARS);
                $phone = filter_input(INPUT_POST,'phone',FILTER_SANITIZE_SPECIAL_CHARS);
                $password = filter_input(INPUT_POST,'password',FILTER_SANITIZE_SPECIAL_CHARS);
                $address = filter_input(INPUT_POST,'address',FILTER_SANITIZE_SPECIAL_CHARS);
               
                //Validate fullname
                if (empty(trim($fullname))) {
                    $_SESSION['fullname'] ='Họ và tên bắt buộc phải nhập';
                }else {
                    $pattern = '~^[^\s][^\d!@#$%^&*()_=\-+|.<>?`\~]{4,}[^\s!@#$%^&*()_=\-+|.<>?`\~]$~ui';
                    if(!preg_match($pattern,$fullname)) {
                        $_SESSION['fullname'] = 'Họ và tên không hợp lệ';
                    }
                };
                //Validate username
                if (empty(trim($username))) {
                    $_SESSION['username'] ='Tên người dùng bắt buộc phải nhập';
                }else {
                    $pattern = '/^[^0-9\s][^\s]+$/';
                    if(!preg_match($pattern,$username)) {
                        $_SESSION['user'] = 'Tên đăng nhập phải dính liền';
                    }
                };
                //Validate phone
                if (empty(trim($phone))) {
                    $_SESSION['phone'] ='Số điện thoại bắt buộc phải nhập';
                }else {
                    $pattern = '/^0[\d]{9}$/';
                    if(!preg_match($pattern,$phone)) {
                        $_SESSION['phone'] = 'Số điện thoại không đúng quy định';
                    }
                };
                //Validate password
                if (empty(trim($password))) {
                    $_SESSION['password'] ='Password bắt buộc phải nhập';
                }else {
                    $pattern = '/^(?=.*[A-Z].*[A-Z])(?=.*[0-9].*[0-9])(?=.*[a-z].*[a-z])(?=.*[!@#\$%\^\*\(\)-\+]).{8,}$/';
                    if(!preg_match($pattern,$password)) {
                        $_SESSION['password'] = 'Password yếu yêu cầu lớn hơn 8 kí tự và có 2 kí tự hoa, đặc biệt';
                    }
                };
                //Validate password
                if (empty(trim($address))) {
                    $_SESSION['address'] ='Địa chỉ bắt buộc phải nhập';
                }else {
                    $pattern = '/^[\d\w\s,-]{10,}$/ui';
                    if(!preg_match($pattern,$address)) {
                        $_SESSION['address'] = 'Địa chỉ không được có kí tự đặt biệt';
                    }
                };
            }
            // user_resign('thi trung tinh','tinhpro123','0398981104','tinh123','Thuận An - Bình Dương');

            //Hiện thị dữ liệu
            $view_name='user_resign';
            break;
        default:
            break;
    }
    include_once 'view/v_user_layout.php';
}