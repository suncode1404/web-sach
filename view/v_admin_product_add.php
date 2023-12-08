<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8" />
      <meta name="viewport" content="width=device-width, initial-scale=1.0" />
      
      <link rel="stylesheet" href="template/css/bootstrap.css" />
      <link rel="stylesheet" href="template/css-custom/addmin-add.css" />
      <link rel="stylesheet" href="template/css-custom/admin.css" />
      <title>Add</title>
   </head>
   <body>
      <div class="container d-flex justify-content-center align-items-center">
         <div class="w-50 box_add_value">
            <h1 class="text-center my-2">Thêm sản phẩm</h1>
            <form method="post" enctype="multipart/form-data">
               <div class="mb-3">
                  <label class="form-label">Tên sản phẩm</label>
                  <input type="text" class="form-control" name="TenSP" />
               </div>
               <div class="mb-3">
                  <label class="form-label">Ảnh</label>
                  <input type="file" class="form-control" name="HinhSP" />
               </div>
               <div class="mb-3">
                  <label class="form-label">Tác Giả</label>
                  <input type="text" class="form-control" name="TacGia" />
               </div>
               <div class="mb-3">
                  <label class="form-label">Số Lượng</label>
                  <input type="number" class="form-control" name="SoLuong" />
               </div>
               <div class="mb-3">
                  <label class="form-label">Mã Chủ Đề</label>
                  <input type="text" class="form-control" name="MaCD" />
               </div>
               <div class="mb-3">
                  <label class="form-label">Giá Sản Phẩm</label>
                  <input type="number" class="form-control" name="GiaSP" />
               </div>
               <div class="mb-3">
                  <label class="form-label">Nhà xuất bản </label>
                  <input type="text" class="form-control" name="NhaXuatBan" />
               </div>
               <!-- Số Lượng	Chủ Đề	Số cảm nghĩ	Lượt đọc		 -->
               <button type="submit" name="submit" value="submit" class="btn btn-success">Thêm</button>
            </form>
         </div>
      </div>
   </body>
</html>
