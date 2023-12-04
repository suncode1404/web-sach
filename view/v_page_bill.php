<div class="container pt-5">
            <h1 class="border-bottom border-black border-1 fs-3 pb-3">THÔNG TIN NGƯỜI ĐẶT HÀNG</h1>
            <div class="form_infor">
               <div class="box_row_content">
                  <div class="mb-3 row">
                     <label for="inputPassword" class="col-sm-2 col-form-label">Họ Và Tên</label>
                     <div class="col-sm-10">
                        <input type="text" class="form-control w-25" placeholder="<?=$_SESSION['user']['HoTen']?>" />
                     </div>
                  </div>
                  <div class="mb-3 row">
                     <label for="inputPassword" class="col-sm-2 col-form-label">Số Điện Thoại</label>
                     <div class="col-sm-10">
                        <input type="text" class="form-control w-25" placeholder="<?=$_SESSION['user']['SoDienThoai']?>" />
                     </div>
                  </div>
                  <div class="mb-3 row">
                     <label for="inputPassword" class="col-sm-2 col-form-label">Địa chỉ nhận hàng</label>
                     <div class="col-sm-10">
                        <input type="text" class="form-control w-25" placeholder="<?=$_SESSION['user']['DiaChi']?>"/>
                     </div>
                  </div>
               </div>
               <!-- <div class="box_drive pb-5">
                  <h1 class="fs-3 border-bottom border-black pb-3">Phương tiện vận chuyển</h1>
                  <p class="fs-5 fw-medium">Quý khách vui lòng điền tên và địa chỉ giao nhận trước.</p>
               </div> -->
               <div class="box_brand_money pb-5">
                  <h1 class="fs-3 border-bottom border-black pb-3">PHƯƠNG THỨC THANH TOÁN</h1>
                  <div class="box_brand_main d-flex flex-column gap-2">
                     <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" />
                        <img src="./brand_money/1.jpg" width="30px" height="15px" alt="" />
                        <label class="form-check-label" for="flexCheckDefault">Ví Momo</label>
                     </div>
                     <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" />
                        <img src="./brand_money/3.jpg" width="30px" height="15px" alt="" />
                        <label class="form-check-label" for="flexCheckDefault">Ví ZaloPay</label>
                     </div>
                     <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" />
                        <img src="./brand_money/4.jpg" width="30px" height="15px" alt="" />
                        <label class="form-check-label" for="flexCheckDefault">VNPAY</label>
                     </div>
                     <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" />
                        <img src="./brand_money/2.jpg" width="30px" height="15px" alt="" />
                        <label class="form-check-label" for="flexCheckDefault">ATM / Internet Banking</label>
                     </div>

                     <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" />
                        <img src="./brand_money/5.jpg" width="30px" height="15px" alt="" />
                        <label class="form-check-label" for="flexCheckDefault">
                           Thanh toán bằng tiền mặt khi nhận hàng
                        </label>
                     </div>
                  </div>
               </div>
               <div class="box_sale mb-5">
                  <h1 class="fs-5 border-bottom border-black pb-3">Mã Khuyến Mãi / Mã Quà Tặng</h1>

                  <div class="input-group w-50">
                     <p class="me-4 fw-bold">Mã KM/Quà Tặng</p>
                     <input
                        type="text"
                        class="form-control w-25"
                        aria-label="Recipient's username"
                        aria-describedby="button-addon2"
                     />
                     <button class="btn btn-success" type="button" id="button-addon2">Áp Dụng</button>
                  </div>
               </div>
               <div class="box_check_product d-flex flex-column">
                  <h1 class="fs-5 border-bottom border-black pb-3">Kiểm tra lại đơn hàng</h1>
                  <table class="table">
                     <thead class="text-center">
                        <tr>
                           <th scope="col"></th>
                           <th scope="col">Sách</th>
                           <th scope="col">Số Lượng</th>
                           <th scope="col">Giá</th>
                        </tr>
                     </thead>
                     <tbody>
                           <tr class="text-center box-sp">
                              <td> <input class="form-check-input checkout" data-price="<?=$sach['GiaKhuyenMai']*$sach['SoLuongLS']?>" type="checkbox" value="" /></td>
                              <td class="w-50">
                                 <div class="d-flex">
                                    <img src="./img/product-1/1.jpg" class="img-fluid" width="25%" alt="" />
                                    <div>
                                       <p class="fs-4 text-start">Thiên Tài Bên Trái, Kẻ Điên Bên Phải (Tái Bản 2021)</p>
                                       <p class="fs-5 text-start">Cao Minh</p>
                                    </div>
                                 </div>
                              </td>
                              <td class="text-center fs-5 " >1</td>
                              <td class="text-center fs-5 " >143.000đ</td>
                           </tr>
                     </tbody>
                  </table>
                  
                  <div class="box_button_check_sale align-self-end">
                     <div class="d-flex flex-column align-items-center me-5 w-100">
                        <p class="fw-medium">
                           Tổng thanh toán (2 sản phẩm):
                           <span class="text-body-tertiary fs-4 tongtien">0</span>
                           <input type="hidden">
                        </p>
                        <p class="fw-medium">
                           Tiết kiệm:
                           <span class=" text-danger">0đ</span>
                        </p>
                     </div>
                     <div class="btn-group gap-5" role="group" aria-label="Basic example">               
                        <a href="?mod=page&act=cart" class="btn btn-outline-success rounded-1">
                           Quay về giỏ hàng
                        </a>
                        <button type="button" class="btn btn-success rounded-1">Xác nhận thanh toán</button>
                     </div>
                  </div>
               </div>
            </div>
         </div>