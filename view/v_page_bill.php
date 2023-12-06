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
                        <label class="form-check-label" for="flexCheckDefault">Ví Momo</label>
                     </div>
                     <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" />
                        <label class="form-check-label" for="flexCheckDefault">Ví ZaloPay</label>
                     </div>
                     <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" />
                        <label class="form-check-label" for="flexCheckDefault">VNPAY</label>
                     </div>
                     <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" />
                        <label class="form-check-label" for="flexCheckDefault">ATM / Internet Banking</label>
                     </div>

                     <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" />
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

                  
                  <form action="?mod=book&act=updateCart" method="post" class="box_button_check_sale align-self-end">
                     <div class="d-flex flex-column align-items-center me-5 w-100">
                        <p class="fw-medium">
                           Tổng thanh toán (2 sản phẩm):
                           <span class="text-body-tertiary fs-4 tongtien">0</span>
                           <input type="hidden" class="tongtien1" value="0" name="tongtien1">
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
                        <button type="submit" class="btn btn-success rounded-1">Xác nhận thanh toán</button>
                     </div>
                  </form>
               </div>
            </div>
         </div>
<script>
   var valuetongtien =Number(localStorage.getItem('valuetongtin'));
   let tongtien = document.querySelector('.tongtien');
   let tongtien1 = document.querySelector('.tongtien1');
   tongtien.innerHTML = (Number(tongtien.textContent) +  valuetongtien).toLocaleString('vi-VN',{style:'currency', currency: 'VND'})
   tongtien1.value = valuetongtien;
   // console.log(tongtien1)
</script>