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
            if(isset($_POST['submit'])) {
                $TenTaiKhoan = $_POST['TenTaiKhoan'];
                $MatKhau = $_POST['MatKhau'];
                $HoTen = $_POST['HoTen'];
                $DiaChi = $_POST['DiaChi'];
                $SoDienThoai = $_POST['SoDienThoai'];
                $Quyen = $_POST['Quyen'];
                $kq = user_checkusername($TenTaiKhoan);
                if($kq) {
                    $_SESSION['Loi'] = 'Không thể tạo tài khoản với tên tài khoản này <strong>'.$TenTaiKhoan.'<strong>.';
                } else {
                    user_add($TenTaiKhoan, $MatKhau, $HoTen, $DiaChi, $SoDienThoai, $Quyen);
                }
                header('Location: ?mod=admin&act=user');
            }
            //Hiện thị dữ liệu
            $view_name = 'admin_user_add';
            break;
        case 'user-edit':
            //Lấy dữ liệu
            include_once 'model/m_user.php';
            $MaTK = $_GET['id'];
            if(isset($_POST['submit'])) {
                $TenTaiKhoan = $_POST['TenTaiKhoan'];
                $MatKhau = $_POST['MatKhau'];
                $HoTen = $_POST['HoTen'];
                $DiaChi = $_POST['DiaChi'];
                $SoDienThoai = $_POST['SoDienThoai'];
                $Quyen = $_POST['Quyen'];
                $kq = user_checkusername($TenTaiKhoan);
                if($kq) {
                    $_SESSION['Loi'] = 'Không thể tạo tài khoản với tên tài khoản này <strong>'.$TenTaiKhoan.'<strong>.';
                } else {
                    user_edit($MaTK, $TenTaiKhoan, $MatKhau, $HoTen, $DiaChi, $SoDienThoai, $Quyen);
                }
                header('Location: ?mod=admin&act=user');
            }
            $tk = user_getByID($MaTK);
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

            if($_SERVER['REQUEST_METHOD'] === 'POST') {
                // Handle file upload for the image
                $targetDirectory = "upload/img/";
                $targetFile = $targetDirectory.basename($_FILES["HinhSP"]["name"]);

                // Check if the file was successfully uploaded
                if(move_uploaded_file($_FILES["HinhSP"]["tmp_name"], $targetFile)) {
                    // Extract form data
                    $MaCD = $_POST['MaCD'];
                    $TenSP = $_POST['TenSP'];
                    $TacGia = $_POST['TacGia'];
                    $SoLuong = $_POST['SoLuong'];
                    $GiaSP = $_POST['GiaSP'];
                    $NhaXuatBan = $_POST['NhaXuatBan'];

                    // Check if the product with the same name already exists
                    $nameCheck = user_checknameproduct($TenSP);
                    if($nameCheck) {
                        $_SESSION['Loi'] = 'Không thể thêm sản phẩm với tên này <strong>'.$TenSP.'<strong>.';
                    } else {
                        // Add the product to the database
                        $addResult = add_product($MaCD, $TenSP, $_FILES['HinhSP']['name'], $TacGia, $SoLuong, $GiaSP, $NhaXuatBan);

                        // Check if the product addition was successful
                        if($addResult) {
                            header('Location:?mod=admin&act=product');
                            exit();
                        } else {
                            $thongbao = 'Error Occurred during product addition';
                        }
                    }
                } else {
                    $thongbao = 'Error Occurred during file upload';
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

