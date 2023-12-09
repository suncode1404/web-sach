<?php
//Gửi nhận dữ liệu thông qua model
//Gửi nhận dữ liệu thông qua view
if(isset($_GET['act'])) {
    switch($_GET['act']) {
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

        case 'user-add':
            //Lấy dữ liệu
            include_once 'model/m_user.php';
            // if(isset($_POST['submit'])) {
            //     $TenTaiKhoan = $_POST['TenTaiKhoan'];
            //     $MatKhau = $_POST['MatKhau'];
            //     $HoTen = $_POST['HoTen'];
            //     $DiaChi = $_POST['DiaChi'];
            //     $SoDienThoai = $_POST['SoDienThoai'];
            //     $Quyen = $_POST['Quyen'];
            //     $kq = user_checkusername($TenTaiKhoan);
            //     if($kq) {
            //         $_SESSION['Loi'] = 'Không thể tạo tài khoản với tên tài khoản này <strong>'.$TenTaiKhoan.'<strong>.';
            //     } else {
            //         user_add($TenTaiKhoan, $MatKhau, $HoTen, $DiaChi, $SoDienThoai, $Quyen);
            //     }
            //     header('Location: ?mod=admin&act=user');
            // }
            if(isset($_POST['submit'])) {
                $TenTaiKhoan = $_POST['TenTaiKhoan'];
                $MatKhau = $_POST['MatKhau'];
                $HoTen = $_POST['HoTen'];
                $DiaChi = $_POST['DiaChi'];
                $SoDienThoai = $_POST['SoDienThoai'];
                $Quyen = $_POST['Quyen'];
                //Validate fullname
                if (empty(trim($HoTen))) {
                    $_SESSION['HoTen'] ='Họ và tên bắt buộc phải nhập';
                }else {
                    $pattern = '~^[^\s][^\d!@#$%^&*()_=\-+|.<>?`\~]{4,}[^\s!@#$%^&*()_=\-+|.<>?`\~]$~ui';
                    if(!preg_match($pattern,$HoTen)) {
                        $_SESSION['HoTen'] = 'Họ và tên không hợp lệ';
                    }
                };
                //Validate username
                if (empty(trim($TenTaiKhoan))) {
                    $_SESSION['TenTaiKhoan'] ='Tên người dùng bắt buộc phải nhập';
                }else {
                    $pattern = '/^[^0-9\s][^\s]+$/';
                    if(!preg_match($pattern,$TenTaiKhoan)) {
                        $_SESSION['TenTaiKhoan'] = 'Tên đăng nhập phải dính liền';
                    }
                };
                //Validate phone
                if (empty(trim($SoDienThoai))) {
                    $_SESSION['SoDienThoai'] ='Số điện thoại bắt buộc phải nhập';
                }else {
                    $pattern = '/^0[\d]{9}$/';
                    if(!preg_match($pattern,$SoDienThoai)) {
                        $_SESSION['SoDienThoai'] = 'Số điện thoại không đúng quy định';
                    }
                };
                //Validate password
                if (empty(trim($MatKhau))) {
                    $_SESSION['MatKhau'] ='Password bắt buộc phải nhập';
                }else {
                    $pattern = '/^(?=.*[A-Z].*[A-Z])(?=.*[0-9].*[0-9])(?=.*[a-z].*[a-z])(?=.*[!@#\$%\^\*\(\)-\+]).{8,}$/';
                    if(!preg_match($pattern,$MatKhau)) {
                        $_SESSION['MatKhau'] = 'Password yếu yêu cầu lớn hơn 8 kí tự và có 2 kí tự hoa,số và đặc biệt';
                    }
                };
                //Validate DiaChi
                if (empty(trim($DiaChi))) {
                    $_SESSION['DiaChi'] ='Địa chỉ bắt buộc phải nhập';
                }else {
                    $pattern = '/^[\d\w\s,-]{10,}$/ui';
                    if(!preg_match($pattern,$DiaChi)) {
                        $_SESSION['DiaChi'] = 'Địa chỉ không được có kí tự biệt và lớn hơn 10 kí tự';
                    }
                };
                $tk_all = user_getUser();
                foreach($tk_all as $tk) {
                    if($tk['TenTaiKhoan']==$TenTaiKhoan ) {
                       $_SESSION['TenTaiKhoan'] = 'Tên tài khoản đã tồn tại';
                    }elseif($tk['SoDienThoai']==$SoDienThoai) {
                        $_SESSION['SoDienThoai'] = 'Số điện thoại đã dược sử dụng';
                    }elseif($tk['MatKhau']==md5($MatKhau)){
                        $_SESSION['MatKhau'] = 'Password đã dược sử dụng';
                    }
                }
                // kiểm tra thành công
                if(empty($_SESSION['TenTaiKhoan'])&&empty($_SESSION['HoTen'])&&empty($_SESSION['SoDienThoai'])&&empty($_SESSION['MatKhau'])&&empty($_SESSION['DiaChi'])) {  
                    user_add($TenTaiKhoan, $MatKhau, $HoTen, $DiaChi, $SoDienThoai, $Quyen);
                    header('Location: ?mod=admin&act=user');
                }

            }
            //Hiện thị dữ liệu
            $view_name = 'admin_user_add';
            break;
        case 'user-edit':
            //Lấy dữ liệu
            include_once 'model/m_user.php';
            $MaTK = $_GET['id'];
            $tk = user_getByID($MaTK);
            if(isset($_POST['submit'])) {
                $TenTaiKhoan = $_POST['TenTaiKhoan'];
                $MatKhau = $_POST['MatKhau'];
                $HoTen = $_POST['HoTen'];
                $DiaChi = $_POST['DiaChi'];
                $SoDienThoai = $_POST['SoDienThoai'];
                $Quyen = $_POST['Quyen'];
                //Validate fullname
                if (empty(trim($HoTen))) {
                    $_SESSION['HoTen'] ='Họ và tên bắt buộc phải nhập';
                }else {
                    $pattern = '~^[^\s][^\d!@#$%^&*()_=\-+|.<>?`\~]{4,}[^\s!@#$%^&*()_=\-+|.<>?`\~]$~ui';
                    if(!preg_match($pattern,$HoTen)) {
                        $_SESSION['HoTen'] = 'Họ và tên không hợp lệ';
                    }
                };
                //Validate username
                if (empty(trim($TenTaiKhoan))) {
                    $_SESSION['TenTaiKhoan'] ='Tên người dùng bắt buộc phải nhập';
                }else {
                    $pattern = '/^[^0-9\s][^\s]+$/';
                    if(!preg_match($pattern,$TenTaiKhoan)) {
                        $_SESSION['TenTaiKhoan'] = 'Tên đăng nhập phải dính liền';
                    }
                };
                //Validate phone
                if (empty(trim($SoDienThoai))) {
                    $_SESSION['SoDienThoai'] ='Số điện thoại bắt buộc phải nhập';
                }else {
                    $pattern = '/^0[\d]{9}$/';
                    if(!preg_match($pattern,$SoDienThoai)) {
                        $_SESSION['SoDienThoai'] = 'Số điện thoại không đúng quy định';
                    }
                };
                //Validate password
                if (empty(trim($MatKhau))) {
                    $_SESSION['MatKhau'] ='Password bắt buộc phải nhập';
                }else {
                    $pattern = '/^(?=.*[A-Z].*[A-Z])(?=.*[0-9].*[0-9])(?=.*[a-z].*[a-z])(?=.*[!@#\$%\^\*\(\)-\+]).{8,}$/';
                    if(!preg_match($pattern,$MatKhau)) {
                        $_SESSION['MatKhau'] = 'Password yếu yêu cầu lớn hơn 8 kí tự và có 2 kí tự hoa,số và đặc biệt';
                    }
                };
                //Validate DiaChi
                if (empty(trim($DiaChi))) {
                    $_SESSION['DiaChi'] ='Địa chỉ bắt buộc phải nhập';
                }else {
                    $pattern = '/^[\d\w\s,-]{10,}$/ui';
                    if(!preg_match($pattern,$DiaChi)) {
                        $_SESSION['DiaChi'] = 'Địa chỉ không được có kí tự biệt và lớn hơn 10 kí tự';
                    }
                };
                $tk_all = user_getUser();
                foreach($tk_all as $tk) {
                    if($tk['TenTaiKhoan']==$TenTaiKhoan ) {
                       $_SESSION['TenTaiKhoan'] = 'Tên tài khoản đã tồn tại';
                    }elseif($tk['SoDienThoai']==$SoDienThoai) {
                        $_SESSION['SoDienThoai'] = 'Số điện thoại đã dược sử dụng';
                    }elseif($tk['MatKhau']==md5($MatKhau)){
                        $_SESSION['MatKhau'] = 'Password đã dược sử dụng';
                    }
                }
                // kiểm tra thành công
                if(empty($_SESSION['TenTaiKhoan'])&&empty($_SESSION['HoTen'])&&empty($_SESSION['SoDienThoai'])&&empty($_SESSION['MatKhau'])&&empty($_SESSION['DiaChi'])) {  
                    user_edit($MaTK, $TenTaiKhoan,md5( $MatKhau), $HoTen, $DiaChi, $SoDienThoai, $Quyen);
                    header('Location: ?mod=admin&act=user');
                }
            }else {

            }
            // print_r($_POST);
            //Hiện thị dữ liệu
            $view_name = 'admin_user_edit';
            break;
        case 'user-delete':
            include_once 'model/m_user.php';
            $MaTK = $_GET['id'];
            user_delete($MaTK);
            header('Location: ?mod=admin&act=user');
            break;
        case 'product':
            //Lấy dữ liệu
            include_once 'model/m_book.php';
            $dsBook = book_getBook();
            //Hiện thị dữ liệu
            $view_name = 'admin_product';
            break;
        case 'product-add':
            //Lấy dữ liệu
            include_once 'model/m_book.php';
            include_once 'model/m_category.php';
            $dsBook = category_All();
            if($_SERVER['REQUEST_METHOD'] === 'POST' ) {
                $targetDirectory = "upload/img/";
                $ChuDe ='TÂM LÝ';
                if(isset($_POST['submit'])) {
                    $TenSP = $_POST['TenSP'];
                    $TacGia = $_POST['TacGia'];
                    $SoLuong = $_POST['SoLuong'];
                    $GiaSP = $_POST['GiaSP'];
                    $GiaGocSP = $_POST['GiaGocSP'];
                    $NhaXuatBan = $_POST['NhaXuatBan'];
                    $ChuDe = $_POST['MaCD'];
                    $Mota = $_POST['Mota'];
                    // Validate TenSP
                    if (empty(trim($TenSP))) {
                        $_SESSION['TenSP'] ='Tên sản phẩm bắt buộc phải nhập';
                    }else {
                        $pattern = '~^[^\s][^\d!@#$%^&*()_=\-+|.<>?`\~]{4,}[^\s!@#$%^&*()_=\-+|.<>?`\~]+$~ui';
                        if(!preg_match($pattern,$TenSP)) {
                            $_SESSION['TenSP'] = 'Tên sản phẩm không hợp lệ';
                        }
                    };
                    //Validate TacGia
                    if (empty(trim($TacGia))) {
                        $_SESSION['TacGia'] ='Tên tác giả bắt buộc phải nhập';
                    }else {
                        $pattern = '~^[^\s][^\d!@#$%^&*()_=\-+|.<>?`\~]{4,}[^\d\s!@#$%^&*()_=\-+|.<>?`\~]$~ui';
                        if(!preg_match($pattern,$TacGia)) {
                            $_SESSION['TacGia'] = 'Tên tác giả không hợp lệ';
                        }
                    };
                    //Validate SoLuong
                    if (empty(trim($SoLuong))) {
                        $_SESSION['SoLuong'] ='Số lượng bắt buộc phải chọn';
                    }else {
                        $pattern = '/[\d]+/';
                        if(!preg_match($pattern,$SoLuong)) {
                            $_SESSION['SoLuong'] = 'Số lượng không đúng quy định';
                        }
                    };
                    //Validate GiaGocSP
                    if (empty(trim($GiaGocSP))) {
                        $_SESSION['GiaGocSP'] ='Giá gốc sản phẩm bắt buộc phải chọn';
                    }else {
                        $pattern = '/[\d]+/';
                        if(!preg_match($pattern,$GiaGocSP)) {
                            $_SESSION['GiaGocSP'] = 'Giá gốc sản phẩm không đúng quy định';
                        }
                    };
                    //Validate GiaSP
                    if (empty(trim($GiaSP))) {
                        $_SESSION['GiaSP'] ='Giá sản phẩm bắt buộc phải chọn';
                    }else {
                        $pattern = '/[\d]+/';
                        if(!preg_match($pattern,$GiaSP)) {
                            $_SESSION['GiaSP'] = 'Giá sản phẩm không đúng quy định';
                        }
                    };
                    //Validate NhaXuatBan
                    if (empty(trim($NhaXuatBan))) {
                        $_SESSION['NhaXuatBan'] ='Tên nhà xuất bản bắt buộc phải nhập';
                    }else {
                        $pattern = '~^[^\s][^\d!@#$%^&*()_=\-+|.<>?`\~]{4,}[^\d\s!@#$%^&*()_=\-+|.<>?`\~]$~ui';
                        if(!preg_match($pattern,$NhaXuatBan)) {
                            $_SESSION['NhaXuatBan'] = 'Tên nhà xuất bản không hợp lệ';
                        }
                    };
                    //Validate Mota
                    if (empty(trim($Mota))) {
                        $_SESSION['Mota'] ='Mô tả bản bắt buộc phải nhập';
                    }else {
                        $pattern = '~^[^\s][^\d!@#$%^&*()_=\-+|.<>?`\~]{4,}[^\d\s!@#$%^&*()_=\-+|.<>?`\~]$~ui';
                        if(!preg_match($pattern,$Mota)) {
                            $_SESSION['Mota'] = 'Nội dung nhập không hợp lệ';
                        }
                    };
                    //so sanh giagoc giasp 
                    if($GiaGocSP < $GiaSP) {
                        $_SESSION['loi'] = 'Nhập sản phẩm phải nhỏ hơn giá gốc';
                    }
                    print_r($_POST);
                }
                if( isset($_FILES['HinhSP'])) {
                    $targetFile = $targetDirectory.basename($_FILES["HinhSP"]["name"]);
                    if(move_uploaded_file($_FILES["HinhSP"]["tmp_name"], $targetFile)) {
                        // Add the product to the database
                        $addResult = add_product($ChuDe, $TenSP, $_FILES['HinhSP']['name'], $TacGia, $SoLuong, $GiaSP,$GiaGocSP, $NhaXuatBan,$Mota);
                        header('Location: ?mod=admin&act=product');

                        // Check if the product addition was successful
                        if($addResult) {
                            header('Location:?mod=admin&act=product');
                            exit();
                        } else {
                            $thongbao = 'Error Occurred during product addition';
                        }
                    } else {
                        $thongbao = 'Error Occurred during file upload';
                    }
                }
            }
            $view_name = 'admin_product_add';
            break;
        case 'product-edit':
            include_once 'model/m_book.php';
            $MaSP = $_GET['id'];

            $Data = product_getByID($MaSP);

            if(isset($_POST['submit-edit'])) {
                $img = $_FILES['HinhSP']['name'];

                if($_FILES['HinhSP']['error'] == UPLOAD_ERR_OK && is_uploaded_file($_FILES['HinhSP']['tmp_name'])) {
                    $kq = move_uploaded_file($_FILES['HinhSP']['tmp_name'], "upload/img/".$_FILES['HinhSP']['name']);
                } else {
                    $img = $Data['HinhSP'];
                }

                $kq = product_edit($MaSP, $_POST['MaCD'], $_POST['TenSP'], $img, $_POST['TacGia'], $_POST['SoLuong'], $_POST['GiaSP'], $_POST['NhaXuatBan']);
                header('Location: ?mod=admin&act=product');
                if($kq) {
                    header('Location: admin.php?mod=admin&act=product');
                } else {
                    $thongbao = 'Error occurred';
                }
            }
            $Data = product_getByID($MaSP);

            $view_name = 'admin_product_edit';
            break;

        case 'product-delete':
            include_once 'model/m_book.php';
            $MaSP = $_GET['id'];
            product_delete($MaSP);
            header('Location: ?mod=admin&act=product');
            break;

        default:
            break;
    }
    include_once 'view/v_admin_layout.php';
}

