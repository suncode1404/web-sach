<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8" />
      <meta name="viewport" content="width=device-width, initial-scale=1.0" />
      
      <link rel="stylesheet" href="template/css/bootstrap.css" />
      <link rel="stylesheet" href="template/css-custom/addmin-add.css" />
   </head>
   <body>
      <div class="container d-flex justify-content-center align-items-center">
         <div class="w-50 box_add_value">
            <h1 class="text-center my-2">Thêm sản phẩm</h1>
            <form method="post" enctype="multipart/form-data">
               <div class="mb-3">
                  <label class="form-label">Tên sản phẩm</label>
                  <input type="text" class="form-control" name="TenSP" value="<?= empty($_POST['TenSP'])?"":$TenSP?>"/>
               </div>
               <?php if(isset($_SESSION['TenSP'])):?>
                    <div class="text-start alert alert-warning" role="alert">
                        <?=$_SESSION['TenSP']?>
                    </div>
                <?php endif;unset($_SESSION['TenSP'])?>
               <div class="mb-3">
                  <label class="form-label">Ảnh</label>
                  <input type="file" class="form-control" name="HinhSP" />
               </div>
               <div class="mb-3">
                  <label class="form-label">Tác Giả</label>
                  <input type="text" class="form-control" name="TacGia" value="<?= empty($_POST['TacGia'])?"":$TacGia?>" />
               </div>
               <?php if(isset($_SESSION['TacGia'])):?>
                    <div class="text-start alert alert-warning" role="alert">
                        <?=$_SESSION['TacGia']?>
                    </div>
                <?php endif;unset($_SESSION['TacGia'])?>
               <div class="mb-3">
                  <label class="form-label">Số Lượng</label>
                  <input type="number" class="form-control" name="SoLuong" min="0" value="<?= empty($_POST['SoLuong'])?"":$SoLuong?>"/>
               </div>
               <?php if(isset($_SESSION['SoLuong'])):?>
                    <div class="text-start alert alert-warning" role="alert">
                        <?=$_SESSION['SoLuong']?>
                    </div>
                <?php endif;unset($_SESSION['SoLuong'])?>
               <div class="mb-3">
                  <label class="form-label">Mã Chủ Đề</label>           
                     <select class="form-control" name="MaCD">
                        <?php $i=1; foreach($dsBook as $key => $book):?>
                           <option value="<?=$i?>" <?=($key+1 == $ChuDe)?'selected':''?>><?=$book['TenCD']?></option>
                        <?php $i++; endforeach;?>
                     </select>
               </div>
               <div class="mb-3">
                  <label class="form-label">Giá gốc</label>
                  <input type="text" class="form-control" name="GiaGocSP" value="<?= empty($_POST['GiaGocSP'])?"":$GiaGocSP?>" />
               </div>
               <?php if(isset($_SESSION['GiaGocSP'])):?>
                    <div class="text-start alert alert-warning" role="alert">
                        <?=$_SESSION['GiaGocSP']?>
                    </div>
                <?php endif;unset($_SESSION['GiaGocSP'])?>
               
               
                <div class="mb-3">
                  <label class="form-label">Giá Sản Phẩm</label>
                  <input type="text" class="form-control" name="GiaSP" value="<?= empty($_POST['GiaSP'])?"":$GiaSP?>" />
               </div>
               <?php if(isset($_SESSION['GiaSP'])):?>
                    <div class="text-start alert alert-warning" role="alert">
                        <?=$_SESSION['GiaSP']?>
                    </div>
                <?php endif;unset($_SESSION['GiaSP'])?>
                <?php if(isset($_SESSION['loi'])):?>
                    <div class="text-start alert alert-warning" role="alert">
                        <?=$_SESSION['loi']?>
                    </div>
                <?php endif;unset($_SESSION['loi'])?>
               <div class="mb-3">
                  <label class="form-label">Nhà xuất bản </label>
                  <input type="text" class="form-control" name="NhaXuatBan" value="<?= empty($_POST['NhaXuatBan'])?"":$NhaXuatBan?>" />
               </div>
               <?php if(isset($_SESSION['NhaXuatBan'])):?>
                    <div class="text-start alert alert-warning" role="alert">
                        <?=$_SESSION['NhaXuatBan']?>
                    </div>
                <?php endif;unset($_SESSION['NhaXuatBan'])?>
                <div class="mb-3">
                  <label class="form-label" style="display:block;">Mô tả</label>
                  <textarea name="Mota" cols="100" rows="10" placeholder="Nội Dung" value="<?= empty($_POST['Mota'])?"":$Mota?>" style="border:1px solid;"></textarea>
               </div>
               <?php if(isset($_SESSION['Mota'])):?>
                    <div class="text-start alert alert-warning" role="alert">
                        <?=$_SESSION['Mota']?>
                    </div>
                <?php endif;unset($_SESSION['Mota'])?>
               <!-- Số Lượng	Chủ Đề	Số cảm nghĩ	Lượt đọc		 -->
               <a href="?mod=admin&act=product" style="text-decoration: none; color:#000; padding: 10px 20px">Quay Lại</a>
               <button type="submit" name="submit" value="submit" class="btn btn-success">Thêm</button>
            </form>
         </div>
      </div>
   </body>
</html>
