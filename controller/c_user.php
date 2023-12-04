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
                    $_SESSION['thongbao'] = 'Tên tài khoản hoặc mật khẩu không đúng';
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
            $tk_all = user_getUser();
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
                        $_SESSION['username'] = 'Tên đăng nhập phải dính liền';
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
                        $_SESSION['password'] = 'Password yếu yêu cầu lớn hơn 8 kí tự và có 2 kí tự hoa,số và đặc biệt';
                    }
                };
                //Validate password
                if (empty(trim($address))) {
                    $_SESSION['address'] ='Địa chỉ bắt buộc phải nhập';
                }else {
                    $pattern = '/^[\d\w\s,-]{10,}$/ui';
                    if(!preg_match($pattern,$address)) {
                        $_SESSION['address'] = 'Địa chỉ không được có kí tự biệt và lớn hơn 10 kí tự';
                    }
                };
                foreach($tk_all as $tk) {
                    if($tk['TenTaiKhoan']==$username ) {
                       $_SESSION['username'] = 'Tên tài khoản đã tồn tại';
                    }elseif($tk['SoDienThoai']==$phone) {
                        $_SESSION['phone'] = 'Số điện thoại đã dược sử dụng';
                    }else {
                        
                    }
                }
                if(empty($_SESSION['fullname'])&&empty($_SESSION['username'])&&empty($_SESSION['phone'])&&empty($_SESSION['password'])&&empty($_SESSION['address'])) {
                    // echo '1';
                    // echo '<pre/>';
                    // print_r($tk_all);
                    // echo '<pre/>';  
                    $_SESSION['dangky'] = 'Đăng ký tài khoản thành công';
                    user_resign($fullname,$username,$phone,$password,$address);
                    header('Location: ?mod=user&act=login');
                }
            }

    



            //Hiện thị dữ liệu
            $view_name='user_resign';
            break;
        default:
            break;
    }
    include_once 'view/v_user_layout.php';
}

