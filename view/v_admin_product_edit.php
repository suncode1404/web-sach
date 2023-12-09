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
         <h1 class="text-center my-2">Sửa sản phẩm</h1>
         <form method="post" enctype="multipart/form-data">

            <div class="mb-3">
               <label class="form-label">Tên sản phẩm</label>
               <input type="text" class="form-control" name="TenSP" value="<?= $Data['TenSP'] ?>" />
            </div>
            <div class="mb-3">
               <label class="form-label">Ảnh <img src="upload/img/<?= $Data['HinhSP'] ?>" width="200px"> </label>
               <input type="file" class="form-control" name="HinhSP" />
            </div>
            <div class="mb-3">
               <label class="form-label">Tác Giả</label>
               <input type="text" class="form-control" name="TacGia" value="<?= $Data['TacGia'] ?>" />
            </div>
            <div class="mb-3">
               <label class="form-label">Số Lượng</label>
               <input type="number" class="form-control" name="SoLuong" value="<?= $Data['SoLuong'] ?>" />
            </div>
            <div class="mb-3">
               <label class="form-label">Mã Chủ Đề</label>
               <input type="text" class="form-control" name="MaCD" value="<?= $Data['MaCD'] ?>" />
            </div>
            <div class="mb-3">
               <label class="form-label">Giá Sản Phẩm</label>
               <input type="number" class="form-control" name="GiaSP" value="<?= $Data['GiaSP'] ?>" />
            </div>
            <div class="mb-3">
               <label class="form-label">Nhà xuất bản </label>
               <input type="text" class="form-control" name="NhaXuatBan" value="<?= $Data['NhaXuatBan'] ?>" />
            </div>
            <!-- Số Lượng	Chủ Đề	Số cảm nghĩ	Lượt đọc		 -->
            <a href="?mod=admin&act=product" style="text-decoration: none; color:#000; padding: 10px 20px">Quay Lại</a>
            <button type="submit" name="submit-edit" value="submit" class="btn btn-success">Sửa</button>
         </form>
      </div>
   </div>

   
</html>