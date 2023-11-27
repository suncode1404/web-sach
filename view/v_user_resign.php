<div class="container">
          

          <div class="box_resg d-flex position-relative">
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
                      <form action="?mod=user&act=resign" method="post">
                         <div class="d-flex flex-column">
                            <div class="mb-3">
                               <input
                                  type="text"
                                  name="fullname"
                                  class="form-control border-success form-dn"
                                  id="formGroupExampleInput"
                                  placeholder="<?= empty($_POST['fullname'])?'Tên':$fullname?>"
                               />
                            </div>
                            <?php if(isset($_SESSION['fullname'])):?>
                              <div class="text-start alert alert-warning" role="alert">
                                 <?=$_SESSION['fullname']?>
                              </div>
                            <?php endif;unset($_SESSION['fullname'])?>
                            <div class="mb-3">
                               <input
                                  type="text"
                                  name="username"
                                  class="form-control border-success form-dn"
                                  id="formGroupExampleInput2"
                                  placeholder="<?= empty($_POST['username'])?'Tên đăng nhập':$username?>"
                               />
                            </div>
                            <?php if(isset($_SESSION['username'])):?>
                              <div class="text-start alert alert-warning" role="alert">
                                 <?=$_SESSION['username']?>
                              </div>
                            <?php endif;unset($_SESSION['username'])?>
                            <div class="mb-3">
                               <input
                                  type="text"
                                  name="phone"
                                  class="form-control border-success form-dn"
                                  id="formGroupExampleInput2"
                                  placeholder="<?= empty($_POST['phone'])?'Số điện thoại':$phone?>"
                               />
                            </div>
                            <?php if(isset($_SESSION['phone'])):?>
                              <div class=" text-start alert alert-warning" role="alert">
                                 <?=$_SESSION['phone']?>
                              </div>
                            <?php endif;unset($_SESSION['phone'])?>
                            <div class="mb-3">
                               <input
                                  type="password"
                                  name="password"
                                  class="form-control border-success form-dn"
                                  id="formGroupExampleInput2"
                                  placeholder="<?= empty($_POST['password'])?'Mật khẩu':$password?>"
                               />
                            </div>
                            <?php if(isset($_SESSION['password'])):?>
                              <div class="text-start alert alert-warning " role="alert">
                                 <?=$_SESSION['password']?>
                              </div>
                            <?php endif;unset($_SESSION['password'])?>
                            <div class="mb-3">
                               <input
                                  type="text"
                                  name="address"
                                  class="form-control border-success form-dn"
                                  id="formGroupExampleInput2"
                                  placeholder="<?= empty($_POST['address'])?'Nhập địa chỉ':$address?>"
                               />
                            </div>
                            <?php if(isset($_SESSION['address'])):?>
                              <div class=" text-start alert alert-warning" role="alert">
                                 <?=$_SESSION['address']?>
                              </div>
                            <?php endif;unset($_SESSION['address'])?>
                         </div>
                        <button
                                class="btn btn-success btn-regis-main" type="submit"
                            >
                            Tạo tài khoản
                        </button>
                      </form>
                   </div>
                   
                   <a href="?mod=user&act=login"
                      class="text-center btn-regis-main text-black"
                   >
                      Đăng Nhập
                   </a>
                </div>
             </div>

             <a
                href="?mod=page&act=home"
                class="position-absolute top-0 left-0 p-2 btn_regis"
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