
<div class="container">
   <div class="box_login d-flex position-relative">
      <div
         class="bg-success w-50 d-flex align-items-center justify-content-center p-5"
      >
         <div
            class="d-flex flex-column justify-content-center align-items-center gap-5"
         >
            <h1 class="text-light text-uppercase">
               Analythic
            </h1>
            <p
               class="text-light w-75 text-center text-uppercase"
            >
               Nam libero tempore, cum soluta nobis est
               eligendi optio cumque nihil
            </p>
            <h2 class="text-light text-uppercase">
               Your Host
            </h2>

            <p>
               <svg
                  xmlns="http://www.w3.org/2000/svg"
                  width="80"
                  height="80"
                  fill="white"
                  class="bi bi-person-circle"
                  viewBox="0 0 16 16"
               >
                  <path
                     d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0"
                  />
                  <path
                     fill-rule="evenodd"
                     d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1"
                  />
               </svg>
            </p>
            <p class="text-light fs-3">User</p>
         </div>
      </div>

      <div
         class="w-50 bg-light d-flex justify-content-center align-items-center"
      >
         <div
            class="d-flex justify-content-center flex-column align-items-center gap-5 w-75"
         >
            <h1 class="text-uppercase w-100 text-center">
               Đăng Nhập
            </h1>
            <div class="text-center">
               <form action="?mod=user&act=login" method="post">
                  <div class="d-flex flex-column">
                     <div class="mb-3">
                        <input
                           type="text"
                           class="form-control border-success form-dn"
                           id="formGroupExampleInput"
                           placeholder="Tên đăng nhập"
                           name="user"
                           
                        />
                     </div>
                     <div class="mb-3">
                        <input
                           type="password"
                           class="form-control border-success form-dn"
                           id="formGroupExampleInput2"
                           placeholder="Mật khẩu"
                           name="pass"
                           
                        />
                     </div>
                     <p class="regis-sub align-self-end text-uppercase fw-bold fs-6"><a href="?mod=user&act=resign">Đăng Ký tài khoản</a></p>
                     <?php if(isset($_SESSION['thongbao'])):?>
                        <p class="alert alert-danger"><?=$_SESSION['thongbao'];?></p>
                        <?php endif;unset($_SESSION['thongbao']);?> 
                     </div>
                     <button class="btn btn-success  btn-login-main" type="submit">Đăng Nhập</button>
               </form>
            </div>
            
         </div>
      </div>

      <a
         href="?mod=page&act=home"
         class="position-absolute top-0 left-0 p-2 btn_login"
      >
         <svg
            xmlns="http://www.w3.org/2000/svg"
            width="26"
            height="26"
            fill="white"
            class="bi bi-arrow-left"
            viewBox="0 0 16 16"
         >
            <path
               fill-rule="evenodd"
               d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8"
            />
         </svg>
      </a>
   </div>

   
</div>