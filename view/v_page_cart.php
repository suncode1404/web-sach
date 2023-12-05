<div class="container pt-5">
            <h1 class="fs-4 mb-5">GIỎ HÀNG (2 sản phẩm)</h1>
            <div class="box_main_containe">
               <div class="select-product d-flex justify-content-between">
                  <div class="box_check">
                     <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" />
                        <label class="form-check-label fw-medium" for="flexCheckDefault">
                           Chọn tất cả (2 sản phẩm)
                        </label>
                     </div>
                  </div>
               </div>

               <div class="box_product_content d-flex flex-column gap-3">
                  <table class="table">
                     <thead class="text-center">
                        <tr>
                           <th scope="col"></th>
                           <th scope="col">Sách</th>
                           <th scope="col">Số Lượng</th>
                           <th scope="col">Giá</th>
                           <th scope="col">Thành Tiền</th>
                        </tr>
                     </thead>
                     <tbody>
                        <?php foreach($ctGioSach as $sach):?>
                           <tr class="text-center box-sp">
                              <td> <input class="form-check-input checkout" data-price="<?=$sach['GiaKhuyenMai']*$sach['SoLuongLS']?>" type="checkbox" value="" /></td>
                              <td class="w-50">
                                 <div class="d-flex">
                                    <img src="<?=$sach['HinhSP']?>" class="img-fluid" width="25%" alt="" />
                                    <div>
                                       <p class="fs-4 text-start ten"><a href="?mod=book&act=detail&id=<?=$sach['MaSP']?>"><?=$sach['TenSP']?></a></p>
                                       <p class="fs-5 text-start tacgia"><?=$sach['TacGia']?></p>
                                    </div>
                                 </div>
                              </td>
                              <td>
                                    <input class="count"
                                       style="
                                          outline: none;
                                          border: solid 2px #1ba085;
                                          border-radius: 5px;
                                          padding: 2px;
                                       "
                                       type="number"
                                       name="count"
                                       value="<?=$sach['SoLuongLS']?>"
                                       min ="1"
                                    />
                              </td>
                              <td class="text-center fs-5 " ><?=number_format($sach['GiaKhuyenMai'], 0, '.', '.').'đ';?></td>
                              <td class="text-center fs-5 price" style="display: none;"><?=$sach['GiaKhuyenMai']?></td>
                              <td class="text-center fw-bolder text-danger thanhtien"><?=number_format($sach['GiaKhuyenMai']*$sach['SoLuongLS'], 0, '.', '.').'₫';?></td>
                              <td>
                                 <a href="?mod=book&act=removeFromCart&id=<?=$sach['MaSP']?>">
                                 <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    width="25"
                                    height="25"
                                    fill="currentColor"
                                    class="bi bi-trash"
                                    viewBox="0 0 16 16"
                                 >
                                    <path
                                       d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0z"
                                    />
                                    <path
                                       d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4zM2.5 3h11V2h-11z"
                                    />
                                 </svg>
                                 </a>
                              </td>
                           </tr>
                           <?php endforeach;?>
                     </tbody>
                  </table>
               </div>

               <div>
                  <div class="d-flex flex-column">
                     <div class="d-flex justify-content-end gap-5 border-bottom">
                        <p class="text-success">
                           <svg
                              xmlns="http://www.w3.org/2000/svg"
                              width="16"
                              height="16"
                              fill="currentColor"
                              class="bi bi-ticket-perforated"
                              viewBox="0 0 16 16"
                           >
                              <path
                                 d="M4 4.85v.9h1v-.9zm7 0v.9h1v-.9zm-7 1.8v.9h1v-.9H4m7 0v.9h1v-.9h-1m-7 1.8v.9h1v-.9zm7 0v.9h1v-.9zm-7 1.8v.9h1v-.9zm7 0v.9h1v-.9z"
                              />
                              <path
                                 d="M1.5 3A1.5 1.5 0 0 0 0 4.5V6a.5.5 0 0 0 .5.5 1.5 1.5 0 1 1 0 3 .5.5 0 0 0-.5.5v1.5A1.5 1.5 0 0 0 1.5 13h13a1.5 1.5 0 0 0 1.5-1.5V10a.5.5 0 0 0-.5-.5 1.5 1.5 0 0 1 0-3A.5.5 0 0 0 16 6V4.5A1.5 1.5 0 0 0 14.5 3zM1 4.5a.5.5 0 0 1 .5-.5h13a.5.5 0 0 1 .5.5v1.05a2.5 2.5 0 0 0 0 4.9v1.05a.5.5 0 0 1-.5.5h-13a.5.5 0 0 1-.5-.5v-1.05a2.5 2.5 0 0 0 0-4.9z"
                              />
                           </svg>
                           Add Voucher
                        </p>
                        <p>Chọn hoặc nhập mã</p>
                     </div>
                     <div class="d-flex justify-content-between mt-5">
                        <div class="mt-5 d-flex gap-5 w-50">
                           <p class="fw-medium">Chọn tất cả (2)</p>
                           <p class="fw-medium">Xóa</p>
                        </div>
                        <form action="" method="post" class="d-flex align-items-center w-50 muahang">
                           <div class="d-flex flex-column align-items-center me-5 w-100">
                              <p class="fw-medium">
                                 Tổng thanh toán ( <span id="quantity">0</span> sản phẩm):
                                 <span class="text-body-tertiary fs-4 tongtien">0</span>
                                 <input type="hidden">
                              </p>
                              <p class="fw-medium">
                                 Tiết kiệm:
                                 <span class=" text-danger">0đ</span>
                              </p>
                           </div>
                           <button type="submit" class="btn btn-success w-50 ">Mua Hàng</button>
                        </form>
                     </div>
                     <?php if(isset($_SESSION['thongbao'])):?>
                           <div class="text-center alert alert-warning" role="alert">
                              <?=$_SESSION['thongbao']?>
                           </div>
                     <?php endif;unset($_SESSION['thongbao'])?>
                  </div>
               </div>
            </div>
         </div>

<script>
   function count() {
      const count = document.querySelectorAll('.count');
      const tongtien = document.querySelector('.tongtien')   
      count.forEach(e => {
         e.addEventListener("click", ()=> {
            if(e == event.target) {
               const count = e.value;
               const box = e.parentElement.parentElement;
               const price =Number( box.querySelector('.price').textContent);
               const thanhtien = box.querySelector('.thanhtien');
               thanhtien.innerHTML = (count*price).toLocaleString('vi-VN',{style: 'currency', currency: 'VND' });
               const input = box.querySelector('.checkout')
               input.setAttribute('data-price',count*price)
               input.removeAttribute('disabled');
            }
         })
      })
   }
   function checkout() {
      const checkout = document.querySelectorAll('.checkout');
      const tongtien = document.querySelector('.tongtien')   
      let total = 0
      let soluong = 1;
      checkout.forEach(e => 
         e.addEventListener("click" , ()=> {
            const box =e.parentElement.parentElement
            const img =box.querySelector('img').src;
            const count = box.querySelector('.count').value
            const nameBook = box.querySelector('.ten').textContent
            const auth = box.querySelector('.tacgia').textContent
            const quantity = document.querySelector('#quantity')
            const muahang = document.querySelector('.muahang')
            const arr= []
            if(e.checked) {

               quantity.innerHTML = Number(quantity.textContent) + soluong
               count.disabled = true
               total += Number(e.dataset.price);
               tongtien.textContent = total.toLocaleString('vi-VN',{style: 'currency', currency: 'VND'});
               console.log(muahang)
               muahang.addEventListener('submit', e => {
                  e.preventDefault()
                  window.location.href = '?mod=page&act=bill';
               })
               
            }
            if(!e.checked) {
               quantity.innerHTML = Number(quantity.textContent) - soluong
               count.disabled = false
               total -= Number(e.dataset.price);
               tongtien.textContent = total.toLocaleString('vi-VN', { style: 'currency', currency: 'VND' });
            }
         })
      )
      }
      count()
      checkout()

   // }
</script>