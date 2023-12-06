<?php
   if(isset($_SESSION['thongbao'])) {
      $message = $_SESSION['thongbao'];
      echo "<script>alert('$message');</script>";
   }
   unset($_SESSION['thongbao']);
?>

<div class="d-flex flex-column">
               <!-- ======================================== -->
               <div class="box_time d-flex align-items-center gap-4">
                  <div class="box_sale">
                     <img class="img-fluid" src="template/img/sale/sale.jpg" alt="" />
                  </div>
                  <span class="line_two_value"></span>
                  <div class="box_time_main">
                     <span class="fw-semibold fs-5">Kết thúc trong</span>
                     <div class="d-flex gap-1">
                        <span class="bg-success px-2 rounded text-light">00</span>
                        <span class="">:</span>

                        <span class="bg-success px-2 rounded text-light">00</span>
                        <span class="">:</span>

                        <span class="bg-success px-2 rounded text-light">00</span>
                     </div>
                  </div>
               </div>
               <!-- ================sale ⬇⬇⬇⬇⬇⬇⬇⬇⬇⬇⬇⬇⬇⬇⬇⬇⬇================== -->

               <div class="card-group justify-content-center mt-3 gap-2">
                  <!-- =============cái này là box sản phẩm ⬇⬇⬇⬇⬇⬇⬇⬇⬇⬇⬇⬇⬇⬇⬇⬇⬇⬇⬇⬇⬇⬇⬇======== -->
                  <!-- ======================================== -->
                  <!-- ======================================== -->
                  <!-- ======================================== -->
                  <!-- ======================================== -->
                  <!-- ======================================== -->
                  <!-- ======================================== -->
                  <?php foreach($dsSales as $sach):?>
                     <div class="col card gap-1 p-2 tstall">
                        <img src="<?=$sach['HinhSP']?>" class="card-img-top" alt="..." />
                        <div class="card-body d-flex flex-column justify-content-between">
                           <h5 class="card-title"><?=strlen($sach['TenSP'])<=100?$sach['TenSP']:substr($sach['TenSP'],0,100).'...'?></h5>
                           <div class="mt-3 d-flex justify-content-between">
                              <span class="text-body-tertiary text-decoration-line-through"> <?=number_format($sach['GiaSP'], 0, '.', '.').'đ';?></span>
                              <span class="fw-medium"><?=number_format($sach['GiaKhuyenMai'], 0, '.', '.').'đ';?></span>
                           </div>
                           <a href="?mod=book&act=detail&id=<?=$sach['MaSP']?>" class="mt-3 translate_btn btn btn-secondary-remake tstall bg-success"> Tìm hiểu </a>
                        </div>
                     </div>
                  <?php endforeach; ?>
                  <!-- ======================================== -->
                  <!-- ======================================== -->
                  <!-- ======================================== -->
                  <!-- ======================================== -->
                  <!-- ======================================== -->
                  <!-- ======================================== -->
                  <!-- =============cái này là box sản phẩm ⬆⬆⬆⬆⬆⬆⬆⬆⬆⬆⬆⬆⬆⬆⬆⬆⬆⬆⬆⬆⬆======== -->
               </div>
               <!-- ======================================== -->
               <div class="box_time d-flex align-items-center gap-4">
                  <div class="widthwr">
                     <span class="fs-4 fw-semibold">BXH Tháng</span>
                  </div>
               </div>
               <!-- ================BXH Tháng ⬇⬇⬇⬇⬇⬇⬇⬇⬇⬇⬇⬇⬇⬇⬇⬇⬇================== -->

               <div class="card-group justify-content-center mt-3 gap-2">
                  <!-- =============cái này là box sản phẩm ⬇⬇⬇⬇⬇⬇⬇⬇⬇⬇⬇⬇⬇⬇⬇⬇⬇⬇⬇⬇⬇⬇⬇======== -->
                  <!-- ======================================== -->
                  <!-- ======================================== -->
                  <!-- ======================================== -->
                  <!-- ======================================== -->
                  <!-- ======================================== -->
                  <!-- ======================================== -->
                  <?php foreach($dsRankTopBooks as $sach):?>
                     <div class="col card gap-1 p-2 tstall">
                        <img src="<?=$sach['HinhSP']?>" class="card-img-top" alt="..." />
                        <div class="card-body d-flex flex-column justify-content-between">
                           <h5 class="card-title"><?=strlen($sach['TenSP'])<=100?$sach['TenSP']:substr($sach['TenSP'],0,100).'...'?></h5>
                           <div class="mt-3 d-flex justify-content-between">
                              <span class="text-body-tertiary text-decoration-line-through"> <?=number_format($sach['GiaSP'],0,".",".").'đ'?> </span>
                              <span class="fw-medium"><?=number_format($sach['GiaKhuyenMai'],0,".",".").'đ'?></span>
                           </div>
                           <a href="?mod=book&act=detail&id=<?=$sach['MaSP']?>" class="mt-3 translate_btn btn btn-secondary-remake tstall bg-success"> Tìm hiểu </a>
                        </div>
                     </div>
                  <?php endforeach;?>
                  <!-- ======================================== -->
                  <!-- ======================================== -->
                  <!-- ======================================== -->
                  <!-- ======================================== -->
                  <!-- ======================================== -->
                  <!-- ======================================== -->
                  <!-- =============cái này là box sản phẩm ⬆⬆⬆⬆⬆⬆⬆⬆⬆⬆⬆⬆⬆⬆⬆⬆⬆⬆⬆⬆⬆======== -->
               </div>
               <!-- ======================================== -->
               <div class="box_time d-flex align-items-center gap-4">
                  <div class="widthwr">
                     <span class="fs-4 fw-semibold">Sách Ngoài Nước</span>
                  </div>
               </div>
               <!-- ================Sách trong nước ⬇⬇⬇⬇⬇⬇⬇⬇⬇⬇⬇⬇⬇⬇⬇⬇⬇================== -->

               <div class="row row-cols-1 row-cols-md-5 gap-1 justify-content-between mt-5">
                  <!-- =============cái này là box sản phẩm ⬇⬇⬇⬇⬇⬇⬇⬇⬇⬇⬇⬇⬇⬇⬇⬇⬇⬇⬇⬇⬇⬇⬇======== -->
                  <!-- ======================================== -->
                  <!-- ======================================== -->
                  <!-- ======================================== -->
                  <!-- ======================================== -->
                  <!-- ======================================== -->
                  <!-- ======================================== -->
                  <?php foreach($dsDomesticBooks as $sach):?>
                     <div class="col card gap-1 p-2 tstall">
                        <img src="<?=$sach['HinhSP']?>" class="card-img-top" alt="..." />
                        <div class="card-body d-flex flex-column justify-content-between">
                           <h5 class="card-title"><?=strlen($sach['TenSP'])<=100?$sach['TenSP']:substr($sach['TenSP'],0,100).'...'?></h5>
                           <div class="mt-3 d-flex justify-content-between">
                              <span class="text-body-tertiary text-decoration-line-through"> <?=number_format($sach['GiaSP'],0,".",".").'đ'?> </span>
                              <span class="fw-medium"><?=number_format($sach['GiaKhuyenMai'],0,".",".").'đ'?></span>
                           </div>
                           <a href="?mod=book&act=detail&id=<?=$sach['MaSP']?>" class="mt-3 translate_btn btn btn-secondary-remake tstall bg-success"> Tìm hiểu </a>
                        </div>
                     </div>
                  <?php endforeach;?>
                  <!-- ======================================== -->
                  <!-- ======================================== -->
                  <!-- ======================================== -->
                  <!-- ======================================== -->
                  <!-- ======================================== -->
                  <!-- ======================================== -->
                  <!-- =============cái này là box sản phẩm ⬆⬆⬆⬆⬆⬆⬆⬆⬆⬆⬆⬆⬆⬆⬆⬆⬆⬆⬆⬆⬆======== -->
               </div>
               <!-- ======================================== -->
               <div class="box_time d-flex align-items-center gap-4">
                  <div class="widthwr">
                     <span class="fs-4 fw-semibold">Sách ngoài nước</span>
                  </div>
               </div>
               <!-- ================Sách ngoài nước ⬇⬇⬇⬇⬇⬇⬇⬇⬇⬇⬇⬇⬇⬇⬇⬇⬇================== -->

               <div class="row row-cols-1 row-cols-md-5 gap-1 justify-content-between mt-5">
                  <!-- =============cái này là box sản phẩm ⬇⬇⬇⬇⬇⬇⬇⬇⬇⬇⬇⬇⬇⬇⬇⬇⬇⬇⬇⬇⬇⬇⬇======== -->
                  <!-- ======================================== -->
                  <!-- ======================================== -->
                  <!-- ======================================== -->
                  <!-- ======================================== -->
                  <!-- ======================================== -->
                  <!-- ======================================== -->

                  <?php foreach($dsForeignBooks as $sach):?>
                     <div class="col card gap-1 p-2 tstall">
                        <img src="<?=$sach['HinhSP']?>" class="card-img-top" alt="..." />
                        <div class="card-body d-flex flex-column justify-content-between">
                           <h5 class="card-title"><?=strlen($sach['TenSP'])<=100?$sach['TenSP']:substr($sach['TenSP'],0,100).'...'?></h5>
                           <div class="mt-3 d-flex justify-content-between">
                              <span class="text-body-tertiary text-decoration-line-through"> <?=number_format($sach['GiaSP'],0,".",".").'đ'?> </span>
                              <span class="fw-medium"><?=number_format($sach['GiaKhuyenMai'],0,".",".").'đ'?></span>
                           </div>
                           <a href="?mod=book&act=detail&id=<?=$sach['MaSP']?>" class="mt-3 translate_btn btn btn-secondary-remake tstall bg-success"> Tìm hiểu </a>
                        </div>
                     </div>
                  <?php endforeach;?>
                  <!-- ======================================== -->
                  <!-- ======================================== -->
                  <!-- ======================================== -->
                  <!-- ======================================== -->
                  <!-- ======================================== -->
                  <!-- ======================================== -->
                  <!-- =============cái này là box sản phẩm ⬆⬆⬆⬆⬆⬆⬆⬆⬆⬆⬆⬆⬆⬆⬆⬆⬆⬆⬆⬆⬆======== -->
               </div>
               <!-- ======================================== -->

               <div class="box_aticle d-flex flex-column align-items-center bg-light p-4 mt-3">
                  <h1 class="fs-2">Liên Quan</h1>
                  <div class="card-group gap-5 mt-3">
                     <div class="card p-2 tstall">
                        <img src="template/img/kol/1.jpg" class="card-img-top" alt="..." />
                        <div class="card-body d-flex flex-column justify-content-between">
                           <h5 class="card-title">Lý Liên Kiệt: 'Tôi là ai?'</h5>
                           <p class="card-text">Sao Trung Quốc Lý Liên Kiệt ra mắt sách "Vượt qua sinh tử: Lý Liên Kiệt đi tìm Lý Liên Kiệt", xoáy vào câu hỏi triết học "Tôi là ai?".</p>
                           <a href="#" class="mt-3 translate_btn btn btn-secondary-remake tstall bg-success"> Xem </a>
                        </div>
                     </div>
                     <div class="card p-2 tstall">
                        <img src="template/img/kol/2.jpg" class="card-img-top" alt="..." />
                        <div class="card-body d-flex flex-column justify-content-between">
                           <h5 class="card-title">Hồi ký của Britney Spears bán hơn một triệu bản</h5>
                           <p class="card-text">"The Woman in Me", tự truyện của Britney Spears, là sách phi hư cấu bán chạy nhất trên Amazon trong tuần đầu ra mắt.</p>
                           <a href="#" class="mt-3 translate_btn btn btn-secondary-remake tstall bg-success"> Xem </a>
                        </div>
                     </div>
                     <div class="card p-2 tstall">
                        <img src="template/img/kol/3.jpg" class="card-img-top" alt="..." />
                        <div class="card-body d-flex flex-column justify-content-between">
                           <h5 class="card-title">Giới văn chương kỷ niệm số báo Văn nghệ đầu tiên</h5>
                           <p class="card-text">Nhà văn Khuất Quang Thụy kể chuyện Đại tướng Võ Nguyên Giáp đọc số báo Văn nghệ đầu tiên ở Việt Bắc.</p>
                           <a href="#" class="mt-3 translate_btn btn btn-secondary-remake tstall bg-success"> Xem </a>
                        </div>
                     </div>
                  </div>
               </div>
            </div>