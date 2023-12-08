<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="template/css-custom/addmin-add.css" />  
    <link rel="stylesheet" href="template/css/bootstrap.css" />
    
    <link rel="stylesheet" href="template/css-custom/admin.css" />

</head>


    
    <div class="container d-flex justify-content-center align-items-center">
        <div class="w-50 box_add_value">
            <h1 class="text-center my-2">Sửa người dùng</h1>
            <form action="" method="post" enctype="multipart/form-data">
                <div class="mb-3">
                    <label class="form-label">Tên Tài Khoản</label>
                    <input type="text" class="form-control" name="TenTaiKhoan" value="<?=$tk['TenTaiKhoan']?>"/>
                </div>
                <div class="mb-3">
                    <label class="form-label">Mật Khẩu</label>
                    <input type="text" class="form-control" name="MatKhau" value="<?=$tk['MatKhau']?>"/>
                </div>
                <div class="mb-3">
                    <label class="form-label">Họ Tên</label>
                    <input type="text" class="form-control" name="HoTen" value="<?=$tk['HoTen']?>"/>
                </div>
                <div class="mb-3">
                    <label class="form-label">Địa Chỉ</label>
                    <input type="text" class="form-control" name="DiaChi" value="<?=$tk['DiaChi']?>"/>
                </div>
                <div class="mb-3">
                    <label class="form-label">SDT</label>
                    <input type="number" class="form-control" name="SoDienThoai" value="<?=$tk['SoDienThoai']?>"/>
                </div>
                <div class="mb-3">
                    <label class="form-label">Quyền</label>
                    <select class="form-control" name="Quyen">
                        <option value="1">Admin</option>
                        <option value="0">User</option>
                    </select>
                </div>

                <!-- Số Lượng Chủ Đề Số cảm nghĩ Lượt đọc -->
                <button type="submit" name="submit" value="submit" class="btn btn-success">Sửa</button>
            </form>
        </div>
    </div>


</html>