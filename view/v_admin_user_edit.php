<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="template/css-custom/addmin-add.css" />  
    <link rel="stylesheet" href="template/css/bootstrap.css" />
    
    <link rel="stylesheet" href="template/css-custom/addmin-add.css" />

</head>


    
    <div class="container d-flex justify-content-center align-items-center">
        <div class="w-50 box_add_value">
            <h1 class="text-center my-2">Sửa thông tin người dùng</h1>
            <form action="" method="post" enctype="multipart/form-data">
                <div class="mb-3">
                    <label class="form-label">Tên Tài Khoản</label>
                    <input type="text" class="form-control" name="TenTaiKhoan" value="<?= empty($_POST['TenTaiKhoan'])?$tk['TenTaiKhoan']:$TenTaiKhoan?>"/>
                </div>
                <?php if(isset($_SESSION['TenTaiKhoan'])):?>
                    <div class="text-start alert alert-warning" role="alert">
                        <?=$_SESSION['TenTaiKhoan']?>
                    </div>
                <?php endif;unset($_SESSION['TenTaiKhoan'])?>
                <div class="mb-3">
                    <label class="form-label">Mật Khẩu</label>
                    <input type="text" class="form-control" name="MatKhau" value="<?= empty($_POST['MatKhau'])?$tk['MatKhau']:$MatKhau?>"/>
                </div>
                <?php if(isset($_SESSION['MatKhau'])):?>
                    <div class="text-start alert alert-warning" role="alert">
                        <?=$_SESSION['MatKhau']?>
                    </div>
                <?php endif;unset($_SESSION['MatKhau'])?>
                <div class="mb-3">
                    <label class="form-label">Họ Tên</label>
                    <input type="text" class="form-control" name="HoTen" value="<?= empty($_POST['HoTen'])?$tk['HoTen']:$HoTen?>"/>
                </div>
                <?php if(isset($_SESSION['HoTen'])):?>
                    <div class="text-start alert alert-warning" role="alert">
                        <?=$_SESSION['HoTen']?>
                    </div>
                <?php endif;unset($_SESSION['HoTen'])?>
                <div class="mb-3">
                    <label class="form-label">Địa Chỉ</label>
                    <input type="text" class="form-control" name="DiaChi" value="<?= empty($_POST['DiaChi'])?$tk['DiaChi']:$DiaChi?>"/>
                </div>
                <?php if(isset($_SESSION['DiaChi'])):?>
                    <div class="text-start alert alert-warning" role="alert">
                        <?=$_SESSION['DiaChi']?>
                    </div>
                <?php endif;unset($_SESSION['DiaChi'])?>
                <div class="mb-3">
                    <label class="form-label">SDT</label>
                    <input type="text" class="form-control" name="SoDienThoai" value="<?= empty($_POST['SoDienThoai'])?'0'.$tk['SoDienThoai']:$SoDienThoai?>"/>
                </div>
                <?php if(isset($_SESSION['SoDienThoai'])):?>
                    <div class="text-start alert alert-warning" role="alert">
                        <?=$_SESSION['SoDienThoai']?>
                    </div>
                <?php endif;unset($_SESSION['SoDienThoai'])?>
                <div class="mb-3">
                    <label class="form-label">Quyền</label>
                    <select class="form-control" name="Quyen">
                        <option value="1">Admin</option>
                        <option value="0">User</option>
                    </select>
                </div>

                <!-- Số Lượng Chủ Đề Số cảm nghĩ Lượt đọc -->
                <a href="?mod=admin&act=user" style="text-decoration: none; color:#000; padding: 10px 20px">Quay Lại</a>
                <button type="submit" name="submit" value="submit" class="btn btn-success">Sửa</button>
            </form>
        </div>
    </div>


</html>