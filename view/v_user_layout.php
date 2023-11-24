<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8" />
      <meta name="viewport" content="width=device-width, initial-scale=1.0" />

      <link rel="stylesheet" href="template/css/bootstrap.css" />
      <link rel="stylesheet" href="template/css-custom/style.css" />
      <link rel="stylesheet" href="template/css-custom/chitiet.css" />
      <link rel="stylesheet" href="template/css-custom/ngoainuoc.css" />
      <title>Document</title>
   </head>
   <body>
   <header id="header">
         <button
            class="navbar-toggler"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent"
            aria-expanded="false"
            aria-label="Toggle navigation"
         >
            <span class="navbar-toggler-icon"></span>
         </button>
         <nav class="navbar navbar-expand-lg">
            <div class="container container_nav_logo">
               <a class="navbar-brand w-10" href="?mode=page&act=home">
                  <img class="img-fluid rounded w-25" src="template/img/logosach.png" alt="" />
               </a>
               <button
                  class="navbar-toggler"
                  type="button"
                  data-bs-toggle="collapse"
                  data-bs-target="#navbarSupportedContent"
                  aria-controls="navbarSupportedContent"
                  aria-expanded="false"
                  aria-label="Toggle navigation"
               >
                  <span class="navbar-toggler-icon"></span>
               </button>
               <div
                  class="collapse navbar-collapse w-100 justify-content-between"
                  id="navbarSupportedContent"
               >
                  <form action="?mod=book&act=search" method="post">
                     <div class="input-group justify-content-center" style="width: 25rem">
                        <input
                           type="search"
                           class="form-control rounded w-50"
                           name="keyword"
                           placeholder="Nhập tên sach, tác giả, tuyển tập,..."
                           aria-label="Search"
                           aria-describedby="search-addon"
                        />
                        <button
                           type="submit"
                           class="btn btn-outline-light bg-success fs-6 d-flex align-items-center"
                        >
                           <svg
                              xmlns="http://www.w3.org/2000/svg"
                              width="17"
                              height="17"
                              fill="currentColor"
                              class="bi bi-search me-2"
                              viewBox="0 0 16 16"
                           >
                              <path
                                 d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"
                              />
                           </svg>
                           Tìm kiếm
                        </button>
                     </div>
                  </form>
                  <ul class="navbar-nav mb-2 mb-lg-0 w-auto gap-3">
                     <li class="nav-item bg-danger rounded p-1 fs-6">
                        <a
                           class="nav-link text-light fw-medium d-flex flex-column align-items-center link_service"
                           aria-current="page"
                           href="#"
                        >
                           <svg
                              xmlns="http://www.w3.org/2000/svg"
                              width="22"
                              height="22"
                              fill="white"
                              class="bi bi-cart mb-1"
                              viewBox="0 0 16 16"
                           >
                              <path
                                 d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"
                              />
                           </svg>
                           Giỏ Hàng
                        </a>
                     </li>
                     <li class="nav-item bg-warning rounded p-1">
                        <a
                           class="nav-link text-light fw-medium d-flex flex-column align-items-center link_service"
                           href="#"
                        >
                           <svg
                              xmlns="http://www.w3.org/2000/svg"
                              width="22"
                              height="22"
                              fill="white"
                              class="bi bi-bell mb-1"
                              viewBox="0 0 16 16"
                           >
                              <path
                                 d="M8 16a2 2 0 0 0 2-2H6a2 2 0 0 0 2 2zM8 1.918l-.797.161A4.002 4.002 0 0 0 4 6c0 .628-.134 2.197-.459 3.742-.16.767-.376 1.566-.663 2.258h10.244c-.287-.692-.502-1.49-.663-2.258C12.134 8.197 12 6.628 12 6a4.002 4.002 0 0 0-3.203-3.92L8 1.917zM14.22 12c.223.447.481.801.78 1H1c.299-.199.557-.553.78-1C2.68 10.2 3 6.88 3 6c0-2.42 1.72-4.44 4.005-4.901a1 1 0 1 1 1.99 0A5.002 5.002 0 0 1 13 6c0 .88.32 4.2 1.22 6z"
                              />
                           </svg>
                           Thông Báo
                        </a>
                     </li>
                     <li class="nav-item bg-success rounded p-1">
                        <a
                           class="nav-link fw-medium text-light d-flex flex-column align-items-center link_service"
                           href="#"
                        >
                           <svg
                              xmlns="http://www.w3.org/2000/svg"
                              width="22"
                              height="22"
                              fill="white"
                              class="bi bi-person mb-1"
                              viewBox="0 0 16 16"
                           >
                              <path
                                 d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6Zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0Zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4Zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10Z"
                              />
                           </svg>
                           Đăng Nhập
                        </a>
                     </li>
                  </ul>
               </div>
            </div>
         </nav>
         <nav class="navbar navbar-expand-lg">
            <div class="container">
               <div
                  class="collapse navbar-collapse d-flex justify-content-center me-4"
                  id="navbarSupportedContent"
               >
                  <ul class="navbar-nav mb-lg-0 d-flex align-items-center gap-4">
                     <li class="nav-item dropdown">
                        <a
                           class="nav-link dropdown-toggle d-flex align-items-center fs-5"
                           href="#"
                           role="button"
                           data-bs-toggle="dropdown"
                           aria-expanded="false"
                        >
                           <svg
                              xmlns="http://www.w3.org/2000/svg"
                              width="25"
                              height="25"
                              fill="currentColor"
                              class="bi bi-list"
                              viewBox="0 0 16 16"
                           >
                              <path
                                 fill-rule="evenodd"
                                 d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z"
                              />
                           </svg>
                           Danh mục
                        </a>
                        <ul class="dropdown-menu">
                           <?php foreach($dsChuDe as $chude):?>
                              <li>
                                 <a class="dropdown-item" href="?mod=category&act=detail&id=<?=$chude['MaCD']?>"><?=$chude['TenCD']?></a>
                              </li>
                           <?php endforeach;?>
                        </ul>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link fs-5 link-offset-5" href="#">Sách Mới</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link fs-5 link-offset-5" href="#">Bảng Xếp Hạng</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link fs-5 link-offset-5" href="?mod=page&act=domesticbooks&id=16">Sách trong nước</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link fs-5 link-offset-5" href="?mod=page&act=foreignbooks&id=17">Sách ngoài nước</a>
                     </li>
                  </ul>
               </div>
            </div>
         </nav>
      </header>
      <main id="main">
         <div class="container">
            <?php if($view_name == 'page_home'):?>
               <div id="carouselExampleIndicators" class="carousel slide">
                  <div class="carousel-indicators">
                     <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                     <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                     <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                     <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>
                  </div>
                  <div class="carousel-inner">
                     <div class="carousel-item active">
                        <img src="template/img/banner/1.jpg" class="d-block w-100" alt="..." />
                     </div>
                     <div class="carousel-item">
                        <img src="template/img/banner/2.jpg" class="d-block w-100" alt="..." />
                     </div>
                     <div class="carousel-item">
                        <img src="template/img/banner/3.jpg" class="d-block w-100" alt="..." />
                     </div>
                     <div class="carousel-item">
                        <img src="template/img/banner/4.jpg" class="d-block w-100" alt="..." />
                     </div>
                  </div>
                  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                     <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                     <span class="visually-hidden">Previous</span>
                  </button>
                  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                     <span class="carousel-control-next-icon" aria-hidden="true"></span>
                     <span class="visually-hidden">Next</span>
                  </button>
               </div>
               <img src="template/img/banner/sub.jpg" class="img-fluid mt-3" alt="..." />
            <?php endif;?>

            <div class="d-flex flex-column">
               <!-- Ruột template -->
               <?php include_once 'view/v_'.$view_name.'.php';?>
            </div>
         </div>
      </main>

      <footer id="footer" class="mt-5">
         <div class="container">
            <div class="infor_footer">
               <div class="container">
                  <div class="row gap-4 border-bottom border-black py-5">
                     <div class="col-3 d-flex flex-column align-items-center gap-5 ps-5">
                        <img class="img-fluid rounded w-35" src="./img/logosach.png" alt="" />
                        <ul class="list-group align-self-start gap-3">
                           <li class="list-group-item fw-medium fs-5 d-flex align-items-center gap-3">
                              <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-telephone-fill" viewBox="0 0 16 16">
                                 <path
                                    fill-rule="evenodd"
                                    d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z"
                                 />
                              </svg>
                              1900190019
                           </li>
                           <li class="list-group-item fw-medium fs-5 d-flex align-items-center gap-3">
                              <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-envelope" viewBox="0 0 16 16">
                                 <path
                                    d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4Zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2Zm13 2.383-4.708 2.825L15 11.105V5.383Zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741ZM1 11.105l4.708-2.897L1 5.383v5.722Z"
                                 />
                              </svg>
                              duan@gmail.com
                           </li>
                           <li class="list-group-item fw-medium fs-5 d-flex align-items-center gap-3">
                              <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
                                 <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z" />
                              </svg>
                              18 Tô kí, Q12, TPHCM
                           </li>
                        </ul>
                        <div class="d-flex align-self-start gap-4">
                           <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
                              <path
                                 d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"
                              />
                           </svg>
                           <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
                              <path
                                 d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z"
                              />
                           </svg>
                           <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-twitter" viewBox="0 0 16 16">
                              <path
                                 d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z"
                              />
                           </svg>
                           <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-google" viewBox="0 0 16 16">
                              <path
                                 d="M15.545 6.558a9.42 9.42 0 0 1 .139 1.626c0 2.434-.87 4.492-2.384 5.885h.002C11.978 15.292 10.158 16 8 16A8 8 0 1 1 8 0a7.689 7.689 0 0 1 5.352 2.082l-2.284 2.284A4.347 4.347 0 0 0 8 3.166c-2.087 0-3.86 1.408-4.492 3.304a4.792 4.792 0 0 0 0 3.063h.003c.635 1.893 2.405 3.301 4.492 3.301 1.078 0 2.004-.276 2.722-.764h-.003a3.702 3.702 0 0 0 1.599-2.431H8v-3.08h7.545z"
                              />
                           </svg>
                        </div>
                     </div>
                     <div class="col-3">
                        <ul class="list-group gap-4">
                           <h3>Điều khoàn sử dụng</h3>

                           <li class="list-group-item fs-5">Điều khoàn sử dụng</li>
                           <li class="list-group-item fs-5">Chính sách bảo mật cá nhận</li>
                           <li class="list-group-item fs-5">Giới thiệu</li>
                           <li class="list-group-item fs-5">Hệ thống nhà sách</li>
                        </ul>
                     </div>
                     <div class="col-3">
                        <ul class="list-group gap-4">
                           <h3>Tài khoản của tôi</h3>

                           <li class="list-group-item fs-5">Tạo tài khoản mới</li>
                           <li class="list-group-item fs-5">Quên mật khẩu</li>
                           <li class="list-group-item fs-5">Chi tiết tài khoản</li>
                           <li class="list-group-item fs-5">Lịch sử mua hàng</li>
                        </ul>
                     </div>
                     <div class="col">
                        <ul class="list-group gap-4">
                           <h3>Hỗ trợ</h3>

                           <li class="list-group-item fs-5">Chính sách đổi trả</li>
                           <li class="list-group-item fs-5">Chính sách bảo hành</li>
                           <li class="list-group-item fs-5">Chính sách vận chuyển</li>
                        </ul>
                     </div>
                  </div>
                  <div class="d-flex justify-content-end ">
                     <ul class="list-group flex-row gap-5">
                        <li class="list-group-item fs-5 fw-medium">Privacy </li>
                        <li class="list-group-item fs-5 fw-medium">Sitemap</li>
                        <li class="list-group-item fs-5 fw-medium">Terms</li>
                        <li class="list-group-item fs-5 fw-medium">Purchase</li>
                     </ul>
                  </div>
               </div>
            </div>
            
         </div>
      </footer>
      <script
         src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
         integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
         crossorigin="anonymous"
      ></script>
      <script src="app.js"></script>
   </body>
</html>
