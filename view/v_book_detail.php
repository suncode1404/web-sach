<div class="container">
            <nav style="--bs-breadcrumb-divider: '>'" aria-label="breadcrumb">
               <ol class="breadcrumb fs-4">
                  <li class="breadcrumb-item fs-4">
                     <a href="?mode=page&act=home" class="link-dark">Home</a>
                  </li>
                  <li class="breadcrumb-item active fs-4 fw-medium" aria-current="page">
                     <a href="?mod=category&act=detail&id=<?=$ctSach['MaCD']?>" class="link-dark"><?=$ctSach['TenCD']?></a>
                  </li>
                  <li class="breadcrumb-item active fs-4 text-decoration-underline fw-medium" aria-current="page"><?=strlen($ctSach['TenSP'])<=100?$ctSach['TenSP']:substr($ctSach['TenSP'],0,100).'...'?></li>
               </ol>
            </nav>
            <form action="" class="box_item d-flex" method="post">
               <div class="box_img d-flex w-32 flex-column">
                  <div class="img_main d-flex align-items-center w-100">
                     <ul class="list-group">
                        <li class="list-group-item d-inline-block w-auto">
                           <img src="template/img-chitiet/img_1.jpg" alt="" class="img-fluid" />
                        </li>
                        <li class="list-group-item d-inline-block w-auto">
                           <img src="template/img-chitiet/img_1.jpg" alt="" class="img-fluid" />
                        </li>
                        <li class="list-group-item d-inline-block w-auto">
                           <img src="template/img-chitiet/img_1.jpg" alt="" class="img-fluid" />
                        </li>
                        <li class="list-group-item d-inline-block w-auto">
                           <img src="template/img-chitiet/img_4.png" alt="" class="img-fluid" />
                        </li>
                     </ul>
                     <img src="<?=$ctSach['HinhSP']?>" alt="" class="img-fluid d-inline-block w-75" />
                  </div>
                  <?php if(isset($_SESSION['thongbao'])):?>
                     <div class="alert alert-danger" role="alert">
                           <?=$_SESSION['thongbao']?>
                     </div>
                  <?php endif;unset($_SESSION['thongbao']);?>
                  <?php if(isset($_SESSION['giohang'])):?>
                     <div class="alert alert-success" role="alert">
                           <?=$_SESSION['giohang']?>
                     </div>
                  <?php endif;unset($_SESSION['giohang']);?>
                  <div class="buyaad d-flex justify-content-between mt-4">
                     <button type="submit" name="addcart" class="btn btn-outline-secondary fw-bold fs-6 py-2 border-2">
                        Thêm vào giỏ hàng
                     </button>
                     <button type="button" class="btn btn-secondary py-2 fw-bold fs-5 mx-2">Mua ngay</button>
                  </div>
               </div>
               <div class="d-flex flex-column w-68">
                  <h1 class="fs-2"><?=$ctSach['TenSP']?></h1>
                  <div class="d-flex justify-content-between w-75">
                     <div class="d-flex flex-column gap-4">
                        <p class="fs-5">Nhà cung cấp: <span class="text-primary">AZ Việt Nam</span></p>
                        <p class="fs-5">
                           Nhà xuất bản:
                           <span class="text-dark fw-medium"><?=$ctSach['NhaXuatBan']?></span>
                        </p>
                     </div>
                     <div class="d-flex flex-column gap-4">
                        <p class="fs-5">Tác giả: <span class="text-dark fw-medium"><?=$ctSach['TacGia']?></span></p>
                        <p class="fs-5">Số lượng sản phẩm: <span class="text-dark fw-medium"><?=$ctSach['SoLuong']?></span></p>
                     </div>
                  </div>
                  <div class="box_rating d-flex align-items-center mt-4 gap-3">
                     <div class="box_start d-flex gap-2">
                        <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="#f6a602" class="bi bi-star-fill" viewBox="0 0 16 16">
                           <path
                              d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"
                           />
                        </svg>
                        <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="#f6a602" class="bi bi-star-fill" viewBox="0 0 16 16">
                           <path
                              d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"
                           />
                        </svg>
                        <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="#f6a602" class="bi bi-star-fill" viewBox="0 0 16 16">
                           <path
                              d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"
                           />
                        </svg>
                        <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="#f6a602" class="bi bi-star-fill" viewBox="0 0 16 16">
                           <path
                              d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"
                           />
                        </svg>
                        <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="#999" class="bi bi-star-fill" viewBox="0 0 16 16">
                           <path
                              d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"
                           />
                        </svg>
                     </div>
                     <p style="color: #f6a602" class="fs-5">(3 đánh giá)</p>
                  </div>
                  <div class="box_sale_price d-flex align-items-center gap-5 mt-4">
                     <h1 class="text-secondary"><?=number_format($ctSach['GiaSP'],0,'.','.').'đ'?></h1>
                     <p class="fs-5 text-dark"><s><?=number_format($ctSach['GiaSP'],0,'.','.').'đ'?></s></p>
                     <p class="btn btn-secondary fs-4 fw-medium">-20%</p>
                  </div>
                  <div class="box_infor_sub d-flex align-items-center gap-5 mt-4">
                     <p class="fw-medium">Thời gian giao hàng</p>
                     <p class="fw-medium">Giao hàng đến</p>
                     <a href="#" class="text-primary fw-medium">Thay đổi</a>
                  </div>
                  <div class="box_infor_sub d-flex align-items-center gap-5 mt-4">
                     <p class="fw-medium">Chính sách đổi trả</p>
                     <p class="fw-medium">Đổi trả sản phẩm trong 30 ngày</p>
                     <a href="#" class="text-primary fw-medium">Xem thêm </a>
                  </div>

                  <div class="box_p_m d-flex align-self-start gap-5 mt-4">
                     <h1 class="text-dark fs-3 fw-bold">Số lượng:</h1>
                     <input type="number" class="h-70 w-25 p-2 border-2" style="outline: none;" min='0' name="count" value="1">
                  </div>
               </div>
            </form>
            <div class="box_km_sale mt-4">
               <h1 class="fs-3">ƯU ĐÃI LIÊN QUAN</h1>
               <div class="box_content border-bottom d-flex gap-5 border-secondary pb-3">
                  <p class="fs-5 fw-bold text-body-tertiary">Tất cả</p>
                  <p class="fs-5 fw-bold text-body-tertiary">Mã giảm giá</p>
                  <p class="fs-5 fw-bold text-body-tertiary">Free Ship</p>
               </div>

               <div class="box_content_logo d-flex gap-2 mt-4 justify-content-between">
                  <div class="box_main_logo_content d-flex shadow p-2 gap-3">
                     <div class="img_box_logo text-bg-secondary position-relative d-flex align-items-center justify-content-center px-2 py-3 rounded-start">
                        <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-gear-wide" viewBox="0 0 16 16">
                           <path
                              d="M8.932.727c-.243-.97-1.62-.97-1.864 0l-.071.286a.96.96 0 0 1-1.622.434l-.205-.211c-.695-.719-1.888-.03-1.613.931l.08.284a.96.96 0 0 1-1.186 1.187l-.284-.081c-.96-.275-1.65.918-.931 1.613l.211.205a.96.96 0 0 1-.434 1.622l-.286.071c-.97.243-.97 1.62 0 1.864l.286.071a.96.96 0 0 1 .434 1.622l-.211.205c-.719.695-.03 1.888.931 1.613l.284-.08a.96.96 0 0 1 1.187 1.187l-.081.283c-.275.96.918 1.65 1.613.931l.205-.211a.96.96 0 0 1 1.622.434l.071.286c.243.97 1.62.97 1.864 0l.071-.286a.96.96 0 0 1 1.622-.434l.205.211c.695.719 1.888.03 1.613-.931l-.08-.284a.96.96 0 0 1 1.187-1.187l.283.081c.96.275 1.65-.918.931-1.613l-.211-.205a.96.96 0 0 1 .434-1.622l.286-.071c.97-.243.97-1.62 0-1.864l-.286-.071a.96.96 0 0 1-.434-1.622l.211-.205c.719-.695.03-1.888-.931-1.613l-.284.08a.96.96 0 0 1-1.187-1.186l.081-.284c.275-.96-.918-1.65-1.613-.931l-.205.211a.96.96 0 0 1-1.622-.434L8.932.727zM8 12.997a4.998 4.998 0 1 1 0-9.995 4.998 4.998 0 0 1 0 9.996z"
                           />
                        </svg>
                        <p class="position-absolute">%</p>
                     </div>
                     <div class="content_box_logo_infor">
                        <h3 class="fs-5 fw-medium">Mã giảm 20k - Đơn trên 100k</h3>
                        <p class="fs-6-remake text-body-tertiary fw-bold">Không Áp Dụng Cho Phiếu Quà Tặng và Sách Giáo Khoa</p>
                     </div>
                  </div>
                  <div class="box_main_logo_content d-flex shadow p-2 gap-3">
                     <div class="img_box_logo text-bg-secondary position-relative d-flex align-items-center justify-content-center px-2 py-3 rounded-start">
                        <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-gear-wide" viewBox="0 0 16 16">
                           <path
                              d="M8.932.727c-.243-.97-1.62-.97-1.864 0l-.071.286a.96.96 0 0 1-1.622.434l-.205-.211c-.695-.719-1.888-.03-1.613.931l.08.284a.96.96 0 0 1-1.186 1.187l-.284-.081c-.96-.275-1.65.918-.931 1.613l.211.205a.96.96 0 0 1-.434 1.622l-.286.071c-.97.243-.97 1.62 0 1.864l.286.071a.96.96 0 0 1 .434 1.622l-.211.205c-.719.695-.03 1.888.931 1.613l.284-.08a.96.96 0 0 1 1.187 1.187l-.081.283c-.275.96.918 1.65 1.613.931l.205-.211a.96.96 0 0 1 1.622.434l.071.286c.243.97 1.62.97 1.864 0l.071-.286a.96.96 0 0 1 1.622-.434l.205.211c.695.719 1.888.03 1.613-.931l-.08-.284a.96.96 0 0 1 1.187-1.187l.283.081c.96.275 1.65-.918.931-1.613l-.211-.205a.96.96 0 0 1 .434-1.622l.286-.071c.97-.243.97-1.62 0-1.864l-.286-.071a.96.96 0 0 1-.434-1.622l.211-.205c.719-.695.03-1.888-.931-1.613l-.284.08a.96.96 0 0 1-1.187-1.186l.081-.284c.275-.96-.918-1.65-1.613-.931l-.205.211a.96.96 0 0 1-1.622-.434L8.932.727zM8 12.997a4.998 4.998 0 1 1 0-9.995 4.998 4.998 0 0 1 0 9.996z"
                           />
                        </svg>
                        <p class="position-absolute">%</p>
                     </div>
                     <div class="content_box_logo_infor">
                        <h3 class="fs-5 fw-medium">Mã giảm 25k - Đơn trên 150k</h3>
                        <p class="fs-6-remake text-body-tertiary fw-bold">Không Áp Dụng Cho Phiếu Quà Tặng và Sách Giáo Khoa</p>
                     </div>
                  </div>
                  <div class="box_main_logo_content d-flex shadow p-2 gap-3">
                     <div class="img_box_logo bg-primary position-relative d-flex align-items-center justify-content-center px-2 py-3 rounded-start">
                        <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="white" class="bi bi-truck" viewBox="0 0 16 16">
                           <path
                              d="M0 3.5A1.5 1.5 0 0 1 1.5 2h9A1.5 1.5 0 0 1 12 3.5V5h1.02a1.5 1.5 0 0 1 1.17.563l1.481 1.85a1.5 1.5 0 0 1 .329.938V10.5a1.5 1.5 0 0 1-1.5 1.5H14a2 2 0 1 1-4 0H5a2 2 0 1 1-3.998-.085A1.5 1.5 0 0 1 0 10.5v-7zm1.294 7.456A1.999 1.999 0 0 1 4.732 11h5.536a2.01 2.01 0 0 1 .732-.732V3.5a.5.5 0 0 0-.5-.5h-9a.5.5 0 0 0-.5.5v7a.5.5 0 0 0 .294.456zM12 10a2 2 0 0 1 1.732 1h.768a.5.5 0 0 0 .5-.5V8.35a.5.5 0 0 0-.11-.312l-1.48-1.85A.5.5 0 0 0 13.02 6H12v4zm-9 1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm9 0a1 1 0 1 0 0 2 1 1 0 0 0 0-2z"
                           />
                        </svg>
                     </div>
                     <div class="content_box_logo_infor">
                        <h3 class="fs-5 fw-medium">Mã free ship 10k - Đơn từ 100k</h3>
                        <p class="fs-6-remake text-body-tertiary fw-bold">Áp dụng với tất cả sản phẩm</p>
                     </div>
                  </div>
               </div>
            </div>

            <div class="box_propose mt-5">
               <h1 class="fs-2 mb-5 fw-bold">Đề xuất</h1>
               <div class="row gap-4">
                  <?php foreach($dsRandomSach as $sach):?>
                     <div class="col w-100 p-0 m-0 shadow p-2">
                        <div class="card w-100">
                           <img src="<?=$sach['HinhSP']?>" class="card-img-top" alt="..." />
                           <div class="card-body">
                              <h5 class="fs-6"><?=strlen($sach['TenSP'])<=100?$sach['TenSP']:substr($sach['TenSP'],0,100).'...'?></h5>
                              <p class="text-secondary fw-bold fs-4"><?=number_format($sach['GiaSP'], 0, '.', '.').'₫';?></p>
                              <p class="text-body-tertiary fw-medium">
                                 <del><?=$sach['GiaKhuyenMai']?></del>
                              </p>
                              <div class="box_rating d-flex align-items-center mt-4 gap-2">
                                 <div class="box_start d-flex gap-1">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" fill="#f6a602" class="bi bi-star-fill" viewBox="0 0 16 16">
                                       <path
                                          d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"
                                       />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" fill="#f6a602" class="bi bi-star-fill" viewBox="0 0 16 16">
                                       <path
                                          d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"
                                       />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" fill="#f6a602" class="bi bi-star-fill" viewBox="0 0 16 16">
                                       <path
                                          d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"
                                       />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" fill="#f6a602" class="bi bi-star-fill" viewBox="0 0 16 16">
                                       <path
                                          d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"
                                       />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" fill="#999" class="bi bi-star-fill" viewBox="0 0 16 16">
                                       <path
                                          d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"
                                       />
                                    </svg>
                                    
                                 </div>
                                 <p style="color: #f6a602" class="fs-6">(3)</p>
                              </div>
                              <a
                                          class="btn btn-success align-self-end" href="?mod=book&act=detail&id=<?=$sach['MaSP']?>"
                                        >
                                            Xem Chi tiet
                                        </a>
                           </div>
                        </div>
                     </div>
                  <?php endforeach;?>
                  <!-- <div class="col w-100 p-0 m-0 shadow p-2">
                     <div class="card w-100">
                        <img src="template/ps/2.png" class="card-img-top" alt="..." />
                        <div class="card-body">
                           <h5 class="fs-6">Combo Sách Thuật Thao Túng + Thiên Tài Bên Trái, Kẻ Điên Bên Phải</h5>
                           <p class="text-secondary fw-bold fs-4">254.400 đ</p>
                           <p class="text-body-tertiary fw-medium">
                              <del>318.000 đ</del>
                           </p>
                           <div class="box_rating d-flex align-items-center mt-4 gap-2">
                              <div class="box_start d-flex gap-1">
                                 <svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" fill="#999" class="bi bi-star-fill" viewBox="0 0 16 16">
                                    <path
                                       d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"
                                    />
                                 </svg>
                                 <svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" fill="#999" class="bi bi-star-fill" viewBox="0 0 16 16">
                                    <path
                                       d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"
                                    />
                                 </svg>
                                 <svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" fill="#999" class="bi bi-star-fill" viewBox="0 0 16 16">
                                    <path
                                       d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"
                                    />
                                 </svg>
                                 <svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" fill="#999" class="bi bi-star-fill" viewBox="0 0 16 16">
                                    <path
                                       d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"
                                    />
                                 </svg>
                                 <svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" fill="#999" class="bi bi-star-fill" viewBox="0 0 16 16">
                                    <path
                                       d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"
                                    />
                                 </svg>
                              </div>
                              <p style="color: #f6a602" class="fs-6">(0)</p>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col w-100 p-0 m-0 shadow p-2">
                     <div class="card w-100">
                        <img src="template/ps/3.png" class="card-img-top" alt="..." />
                        <div class="card-body">
                           <h5 class="fs-6">Combo Sách Tâm Lý Học Phạm Tội - Phác Họa Chân Dung Kẻ Phạm Tội...</h5>
                           <p class="text-secondary fw-bold fs-4">230.200 đ</p>
                           <p class="text-body-tertiary fw-medium">
                              <del>324.000 đ</del>
                           </p>
                           <div class="box_rating d-flex align-items-center mt-4 gap-2">
                              <div class="box_start d-flex gap-1">
                                 <svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" fill="#999" class="bi bi-star-fill" viewBox="0 0 16 16">
                                    <path
                                       d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"
                                    />
                                 </svg>
                                 <svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" fill="#999" class="bi bi-star-fill" viewBox="0 0 16 16">
                                    <path
                                       d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"
                                    />
                                 </svg>
                                 <svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" fill="#999" class="bi bi-star-fill" viewBox="0 0 16 16">
                                    <path
                                       d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"
                                    />
                                 </svg>
                                 <svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" fill="#999" class="bi bi-star-fill" viewBox="0 0 16 16">
                                    <path
                                       d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"
                                    />
                                 </svg>
                                 <svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" fill="#999" class="bi bi-star-fill" viewBox="0 0 16 16">
                                    <path
                                       d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"
                                    />
                                 </svg>
                              </div>
                              <p style="color: #f6a602" class="fs-6">(0)</p>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col w-100 p-0 m-0 shadow p-2">
                     <div class="card w-100">
                        <img src="template/ps/4.png" class="card-img-top" alt="..." />
                        <div class="card-body">
                           <h5 class="fs-6">Combo Sách Không Phải Sói Nhưng Cũng Đừng Là Cừu + Thiên Tài Bên Trái,...</h5>
                           <p class="text-secondary fw-bold fs-4">241.916 đ</p>
                           <p class="text-body-tertiary fw-medium">
                              <del>307.000 đ</del>
                           </p>
                           <div class="box_rating d-flex align-items-center mt-4 gap-2">
                              <div class="box_start d-flex gap-1">
                                 <svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" fill="#999" class="bi bi-star-fill" viewBox="0 0 16 16">
                                    <path
                                       d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"
                                    />
                                 </svg>
                                 <svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" fill="#999" class="bi bi-star-fill" viewBox="0 0 16 16">
                                    <path
                                       d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"
                                    />
                                 </svg>
                                 <svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" fill="#999" class="bi bi-star-fill" viewBox="0 0 16 16">
                                    <path
                                       d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"
                                    />
                                 </svg>
                                 <svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" fill="#999" class="bi bi-star-fill" viewBox="0 0 16 16">
                                    <path
                                       d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"
                                    />
                                 </svg>
                                 <svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" fill="#999" class="bi bi-star-fill" viewBox="0 0 16 16">
                                    <path
                                       d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"
                                    />
                                 </svg>
                              </div>
                              <p style="color: #f6a602" class="fs-6">(0)</p>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col w-100 p-0 m-0 shadow p-2">
                     <div class="card w-100">
                        <img src="template/ps/5.png" class="card-img-top" alt="..." />
                        <div class="card-body">
                           <h5 class="fs-6">Combo Sách Thiên Tài Bên Trái, Kẻ Điên Bên Phải (Tái Bản 2021)...</h5>
                           <p class="text-secondary fw-bold fs-4">389.700 đ</p>
                           <p class="text-body-tertiary fw-medium">
                              <del>469.000 đ</del>
                           </p>
                           <div class="box_rating d-flex align-items-center mt-4 gap-2">
                              <div class="box_start d-flex gap-1">
                                 <svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" fill="#999" class="bi bi-star-fill" viewBox="0 0 16 16">
                                    <path
                                       d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"
                                    />
                                 </svg>
                                 <svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" fill="#999" class="bi bi-star-fill" viewBox="0 0 16 16">
                                    <path
                                       d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"
                                    />
                                 </svg>
                                 <svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" fill="#999" class="bi bi-star-fill" viewBox="0 0 16 16">
                                    <path
                                       d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"
                                    />
                                 </svg>
                                 <svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" fill="#999" class="bi bi-star-fill" viewBox="0 0 16 16">
                                    <path
                                       d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"
                                    />
                                 </svg>
                                 <svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" fill="#999" class="bi bi-star-fill" viewBox="0 0 16 16">
                                    <path
                                       d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"
                                    />
                                 </svg>
                              </div>
                              <p style="color: #f6a602" class="fs-6">(0)</p>
                           </div>
                        </div>
                     </div>
                  </div> -->
               </div>
            </div>

            <div class="main_infor_container mt-5">
               <h1 class="fs-5">Thông tin sản phẩm</h1>

               <div class="box_infor_main d-flex gap-10-add">
                  <div class="d-flex flex-column gap-4">
                     <p class="text-body-tertiary fw-medium">Mã hàng</p>
                     <p class="text-body-tertiary fw-medium">Tên Nhà Cung Cấp</p>
                     <p class="text-body-tertiary fw-medium">Tác giả</p>
                     <p class="text-body-tertiary fw-medium">Người Dịch</p>
                     <p class="text-body-tertiary fw-medium">NXB</p>
                     <p class="text-body-tertiary fw-medium">Năm XB</p>
                     <p class="text-body-tertiary fw-medium">Ngôn Ngữ</p>
                     <p class="text-body-tertiary fw-medium">Trọng lượng (gr)</p>
                     <p class="text-body-tertiary fw-medium">Kích Thước Bao Bì</p>
                     <p class="text-body-tertiary fw-medium">Số trang</p>
                     <p class="text-body-tertiary fw-medium mb-5">Hình thức</p>
                     <p class="text-body-tertiary fw-medium">Sản phẩm hiển thị trong</p>
                     <p class="text-body-tertiary fw-medium mt-3">Sản phẩm bán chạy nhất</p>
                  </div>
                  <div class="d-flex flex-column gap-4">
                     <p class="fw-medium">8936186546815</p>
                     <p class="fw-medium text-primary">AZ Việt Nam</p>
                     <p class="fw-medium"><?=$ctSach['TacGia']?></p>
                     <p class="fw-medium">Thu Hương</p>
                     <p class="fw-medium"><?=$ctSach['NhaXuatBan']?></p>
                     <p class="fw-medium">2021</p>
                     <p class="fw-medium">Tiếng Việt</p>
                     <p class="fw-medium">450</p>
                     <p class="fw-medium">24 x 16 x 2.1 cm</p>

                     <p class="fw-medium">424</p>
                     <p class="fw-medium">Bìa Mềm</p>
                     <p class="fw-medium d-flex flex-column mt-3 text-primary">
                        <span> AZ Việt Nam</span>
                        <span> Đồ Chơi Cho Bé - Giá Cực Tốt</span>
                        <span>Tủ Sách Tâm Lý Kỹ Năng</span>
                     </p>
                     <p class="fw-medium text-primary">Top 100 sản phẩm Tâm lý bán chạy của tháng</p>
                  </div>
               </div>
               <div class="box_text_main d-flex flex-column gap-4 mt-5">
                  <p class="fs-5">
                     Giá sản phẩm trên BookStore.com đã bao gồm thuế theo luật hiện hành. Bên cạnh đó, tuỳ vào loại sản phẩm, hình thức và địa chỉ giao hàng mà có thể phát sinh thêm chi phí khác như Phụ
                     phí đóng gói, phí vận chuyển, phụ phí hàng cồng kềnh,...
                  </p>
                  <p class="fs-6 text-body-tertiary">Chính sách khuyến mãi trên BookStore.com không áp dụng cho Hệ thống Nhà sách Fahasa trên toàn quốc</p>
                  <p class="fw-bold"><?=$ctSach['TenSP']?></p>
                  <p class="fw-medium">
                  <?=$ctSach['MoTa']?>
                  </p>
               </div>
               <div class="rating_product border-bottom pb-4">
                  <h1>Đánh giá sản phẩm</h1>
                  <div class="container_main_rate d-flex justify-content-between w-100">
                     <div class="box_numrate d-flex flex-column gap-2 align-items-center">
                        <div class="d-flex align-items-center gap-1">
                           <h1 class="fw-bold fs-1">4</h1>
                           <span>/5</span>
                        </div>
                        <div class="box_rating d-flex align-items-center mt-2 gap-2">
                           <div class="box_start d-flex gap-1">
                              <svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" fill="#f6a602" class="bi bi-star-fill" viewBox="0 0 16 16">
                                 <path
                                    d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"
                                 />
                              </svg>
                              <svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" fill="#f6a602" class="bi bi-star-fill" viewBox="0 0 16 16">
                                 <path
                                    d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"
                                 />
                              </svg>
                              <svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" fill="#f6a602" class="bi bi-star-fill" viewBox="0 0 16 16">
                                 <path
                                    d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"
                                 />
                              </svg>
                              <svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" fill="#f6a602" class="bi bi-star-fill" viewBox="0 0 16 16">
                                 <path
                                    d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"
                                 />
                              </svg>
                              <svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" fill="#999" class="bi bi-star-fill" viewBox="0 0 16 16">
                                 <path
                                    d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"
                                 />
                              </svg>
                           </div>
                           <p style="color: #f6a602" class="fs-6">(3)</p>
                        </div>
                        <p>(3 đánh giá)</p>
                     </div>
                     <div class="box_range_rate w-25">
                        <div class="box-progess d-flex align-items-center gap-2">
                           <span class="fw-bold">5 sao</span>
                           <div class="progress w-75" role="progressbar" aria-label="Basic example" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">
                              <div class="progress-bar bg-warning" style="width: 100%"></div>
                           </div>
                           <span class="text-body-tertiary">(2)</span>
                        </div>
                        <div class="box-progess d-flex align-items-center gap-2">
                           <span class="fw-bold">4 sao</span>
                           <div class="progress w-75" role="progressbar" aria-label="Basic example" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">
                              <div class="progress-bar bg-warning" style="width: 100%"></div>
                           </div>
                           <span class="text-body-tertiary">(1)</span>
                        </div>
                        <div class="box-progess d-flex align-items-center gap-2">
                           <span class="fw-bold">3 sao</span>
                           <div class="progress w-75" role="progressbar" aria-label="Basic example" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">
                              <div class="progress-bar bg-warning" style="width: 100%"></div>
                           </div>
                           <span class="text-body-tertiary">(0)</span>
                        </div>
                        <div class="box-progess d-flex align-items-center gap-2">
                           <span class="fw-bold">2 sao</span>
                           <div class="progress w-75" role="progressbar" aria-label="Basic example" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">
                              <div class="progress-bar bg-warning" style="width: 100%"></div>
                           </div>
                           <span class="text-body-tertiary">(0)</span>
                        </div>
                        <div class="box-progess d-flex align-items-center gap-2">
                           <span class="fw-bold">1 sao</span>
                           <div class="progress w-75" role="progressbar" aria-label="Basic example" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">
                              <div class="progress-bar bg-warning" style="width: 100%"></div>
                           </div>
                           <span class="text-body-tertiary">(0)</span>
                        </div>
                     </div>
                     <?php if(!isset($_SESSION['user'])):?>
                        <div class="box_log d-flex flex-column align-items-center">
                           <p>Chỉ có thành viên mới có thể viết nhận xét.</p>
                           <p>Vui lòng 
                              <span class="text-primary">
                                 <a href="?mod=user&act=login">đăng nhập</a>
                              </span> hoặc 
                              <span class="text-primary">
                                 <a href="?mod=user&act=resign">đăng ký</a></span> .</p>
                        </div>
                     <?php endif;?>
                  </div>
                  <?php if(isset($_SESSION['user'])):?>
                     <p class="d-flex gap-4 mt-3">
                        <h2>Cảm nghĩ của bạn đọc</h2>
                        <form action="?mod=book&act=comment" method="post">
                           <input type="text" name="NoiDung" class="form-control form-control" placeholder="Bạn nghĩ gì về cuốn sách này?">
                           <input type="hidden" name="MaSP" value="<?=$ctSach['MaSP']?>">
                           <button class="btn btn-primary mt-2" type="submit">Gửi</button>
                        </form>
                     </p>
                  <?php endif;?>
                  <p class="d-flex gap-4 mt-3">
                     <span class="fw-bold fs-5 text-body-tertiary">Mới nhất</span>
                     <span class="fw-bold fs-5 text-body-tertiary">Yêu thích nhất </span>
                  </p>
                  
               </div>
            </div>
            <div class="box_comment d-flex flex-column mt-4 gap-5">
               <?php foreach($dsCamNghi as $comment):?>
                  <div class="box_main_comment d-flex align-items-start gap-4">
                     <p class="d-flex flex-column gap-3 w-100">
                        <span class="fw-bold"><?=$comment['HoTen']?></span>
                        <span class="text-body-tertiary fw-medium"><?=$comment['NgayGui']?></span>
                     </p>
                     <div class="d-flex flex-column gap-2">
                        <div class="box_rating d-flex align-items-center gap-2">
                           <div class="box_start d-flex gap-1">
                              <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="#f6a602" class="bi bi-star-fill" viewBox="0 0 16 16">
                                 <path
                                    d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"
                                 />
                              </svg>
                              <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="#f6a602" class="bi bi-star-fill" viewBox="0 0 16 16">
                                 <path
                                    d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"
                                 />
                              </svg>
                              <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="#f6a602" class="bi bi-star-fill" viewBox="0 0 16 16">
                                 <path
                                    d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"
                                 />
                              </svg>
                              <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="#f6a602" class="bi bi-star-fill" viewBox="0 0 16 16">
                                 <path
                                    d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"
                                 />
                              </svg>
                              <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="#999" class="bi bi-star-fill" viewBox="0 0 16 16">
                                 <path
                                    d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"
                                 />
                              </svg>
                           </div>
                        </div>
                        <p>
                        <?=$comment['NoiDung']?>
                        </p>
                        <div class="d-flex gap-5">
                           <p class="d-flex align-items-center gap-2">
                              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-hand-thumbs-up" viewBox="0 0 16 16">
                                 <path
                                    d="M8.864.046C7.908-.193 7.02.53 6.956 1.466c-.072 1.051-.23 2.016-.428 2.59-.125.36-.479 1.013-1.04 1.639-.557.623-1.282 1.178-2.131 1.41C2.685 7.288 2 7.87 2 8.72v4.001c0 .845.682 1.464 1.448 1.545 1.07.114 1.564.415 2.068.723l.048.03c.272.165.578.348.97.484.397.136.861.217 1.466.217h3.5c.937 0 1.599-.477 1.934-1.064a1.86 1.86 0 0 0 .254-.912c0-.152-.023-.312-.077-.464.201-.263.38-.578.488-.901.11-.33.172-.762.004-1.149.069-.13.12-.269.159-.403.077-.27.113-.568.113-.857 0-.288-.036-.585-.113-.856a2.144 2.144 0 0 0-.138-.362 1.9 1.9 0 0 0 .234-1.734c-.206-.592-.682-1.1-1.2-1.272-.847-.282-1.803-.276-2.516-.211a9.84 9.84 0 0 0-.443.05 9.365 9.365 0 0 0-.062-4.509A1.38 1.38 0 0 0 9.125.111L8.864.046zM11.5 14.721H8c-.51 0-.863-.069-1.14-.164-.281-.097-.506-.228-.776-.393l-.04-.024c-.555-.339-1.198-.731-2.49-.868-.333-.036-.554-.29-.554-.55V8.72c0-.254.226-.543.62-.65 1.095-.3 1.977-.996 2.614-1.708.635-.71 1.064-1.475 1.238-1.978.243-.7.407-1.768.482-2.85.025-.362.36-.594.667-.518l.262.066c.16.04.258.143.288.255a8.34 8.34 0 0 1-.145 4.725.5.5 0 0 0 .595.644l.003-.001.014-.003.058-.014a8.908 8.908 0 0 1 1.036-.157c.663-.06 1.457-.054 2.11.164.175.058.45.3.57.65.107.308.087.67-.266 1.022l-.353.353.353.354c.043.043.105.141.154.315.048.167.075.37.075.581 0 .212-.027.414-.075.582-.05.174-.111.272-.154.315l-.353.353.353.354c.047.047.109.177.005.488a2.224 2.224 0 0 1-.505.805l-.353.353.353.354c.006.005.041.05.041.17a.866.866 0 0 1-.121.416c-.165.288-.503.56-1.066.56z"
                                 />
                              </svg>
                              Thích (8)
                           </p>
                           <p class="d-flex align-items-center gap-2">
                              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-exclamation-circle" viewBox="0 0 16 16">
                                 <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                                 <path d="M7.002 11a1 1 0 1 1 2 0 1 1 0 0 1-2 0zM7.1 4.995a.905.905 0 1 1 1.8 0l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 4.995z" />
                              </svg>
                              Báo cáo
                           </p>
                        </div>
                     </div>
                  </div>
               <?php endforeach;?>
            </div>

            <div class="box_service d-flex justify-content-between mt-5">
               <div class="box_service_main d-flex align-items-end gap-3">
                  <svg xmlns="http://www.w3.org/2000/svg" width="45" height="45" fill="currentColor" class="bi bi-building" viewBox="0 0 16 16">
                     <path
                        d="M4 2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1Zm3 0a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1Zm3.5-.5a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1ZM4 5.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1ZM7.5 5a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1Zm2.5.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1ZM4.5 8a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1Zm2.5.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1Zm3.5-.5a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1Z"
                     />
                     <path d="M2 1a1 1 0 0 1 1-1h10a1 1 0 0 1 1 1v14a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V1Zm11 0H3v14h3v-2.5a.5.5 0 0 1 .5-.5h3a.5.5 0 0 1 .5.5V15h3V1Z" />
                  </svg>
                  <span class="fs-4 fw-bold">CHÍNH SÁCH KHÁCH SỈ</span>
               </div>
               <div class="box_service_main d-flex align-items-end gap-3">
                  <svg xmlns="http://www.w3.org/2000/svg" width="45" height="45" fill="currentColor" class="bi bi-truck" viewBox="0 0 16 16">
                     <path
                        d="M0 3.5A1.5 1.5 0 0 1 1.5 2h9A1.5 1.5 0 0 1 12 3.5V5h1.02a1.5 1.5 0 0 1 1.17.563l1.481 1.85a1.5 1.5 0 0 1 .329.938V10.5a1.5 1.5 0 0 1-1.5 1.5H14a2 2 0 1 1-4 0H5a2 2 0 1 1-3.998-.085A1.5 1.5 0 0 1 0 10.5v-7zm1.294 7.456A1.999 1.999 0 0 1 4.732 11h5.536a2.01 2.01 0 0 1 .732-.732V3.5a.5.5 0 0 0-.5-.5h-9a.5.5 0 0 0-.5.5v7a.5.5 0 0 0 .294.456zM12 10a2 2 0 0 1 1.732 1h.768a.5.5 0 0 0 .5-.5V8.35a.5.5 0 0 0-.11-.312l-1.48-1.85A.5.5 0 0 0 13.02 6H12v4zm-9 1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm9 0a1 1 0 1 0 0 2 1 1 0 0 0 0-2z"
                     /></svg
                  ><span class="fs-4 fw-bold">THỜI GIAN GIAO HÀNG </span>
               </div>
               <div class="box_service_main d-flex align-items-end gap-3">
                  <svg xmlns="http://www.w3.org/2000/svg" width="45" height="45" fill="currentColor" class="bi bi-arrow-repeat" viewBox="0 0 16 16">
                     <path
                        d="M11.534 7h3.932a.25.25 0 0 1 .192.41l-1.966 2.36a.25.25 0 0 1-.384 0l-1.966-2.36a.25.25 0 0 1 .192-.41zm-11 2h3.932a.25.25 0 0 0 .192-.41L2.692 6.23a.25.25 0 0 0-.384 0L.342 8.59A.25.25 0 0 0 .534 9z"
                     />
                     <path
                        fill-rule="evenodd"
                        d="M8 3c-1.552 0-2.94.707-3.857 1.818a.5.5 0 1 1-.771-.636A6.002 6.002 0 0 1 13.917 7H12.9A5.002 5.002 0 0 0 8 3zM3.1 9a5.002 5.002 0 0 0 8.757 2.182.5.5 0 1 1 .771.636A6.002 6.002 0 0 1 2.083 9H3.1z"
                     />
                  </svg>
                  <span class="fs-4 fw-bold">CHÍNH SÁCH ĐỔI TRẢ</span>
               </div>
            </div>
         </div>