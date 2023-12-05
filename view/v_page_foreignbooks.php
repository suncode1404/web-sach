
<div class="container d-flex gap-3 ">
            <div class="accordion w-25 " id="accordionExample">
               <div class="accordion-item">
                  <h2 class="accordion-header fs-6 p-2 text-secondary">
                     Lọc theo
                  </h2>
               </div>
               <div class="accordion-item p-2">
                  <h2 class="accordion-header fs-5 mb-3">Danh mục chính</h2>
                  <div data-bs-parent="#accordionExample">
                     <div class="accordion-body p-0">
                        <div class="form-check">
                           <input
                              class="form-check-input"
                              type="checkbox"
                              value=""
                              id="flexCheckDefault" />
                           <label
                              class="form-check-label"
                              for="flexCheckDefault">
                              Sách tiếng Việt (133)
                           </label>
                        </div>
                        <div class="form-check">
                           <input
                              class="form-check-input"
                              type="checkbox"
                              value=""
                              id="flexCheckChecked" />
                           <label
                              class="form-check-label"
                              for="flexCheckChecked">
                              Sách giáo khoa (97)
                           </label>
                        </div>
                        <div class="form-check">
                           <input
                              class="form-check-input"
                              type="checkbox"
                              value=""
                              id="flexCheckChecked" />
                           <label
                              class="form-check-label"
                              for="flexCheckChecked">
                              Bách hóa tổng hợp (37)
                           </label>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="accordion-item p-2">
                  <h2 class="accordion-header fs-5 mb-3">Giá</h2>
                  <div data-bs-parent="#accordionExample">
                     <div class="accordion-body p-0">
                        <div class="form-check">
                           <input
                              class="form-check-input"
                              type="checkbox"
                              value=""
                              id="flexCheckDefault" />
                           <label
                              class="form-check-label"
                              for="flexCheckDefault">
                              0đ - 150,000đ (140)
                           </label>
                        </div>
                        <div class="form-check">
                           <input
                              class="form-check-input"
                              type="checkbox"
                              value=""
                              id="flexCheckChecked" />
                           <label
                              class="form-check-label"
                              for="flexCheckChecked">
                              150,000đ - 300,000đ (23)
                           </label>
                        </div>
                        <div class="form-check">
                           <input
                              class="form-check-input"
                              type="checkbox"
                              value=""
                              id="flexCheckDefault" />
                           <label
                              class="form-check-label"
                              for="flexCheckDefault">
                              300,000đ - 500,000đ (11)
                           </label>
                        </div>
                        <div class="form-check">
                           <input
                              class="form-check-input"
                              type="checkbox"
                              value=""
                              id="flexCheckChecked" />
                           <label
                              class="form-check-label"
                              for="flexCheckChecked">
                              500,000đ trở lên (6)
                           </label>
                        </div>
                     </div>
                  </div>
               </div>

               <div class="accordion-item p-2">
                  <h2 class="accordion-header fs-5 mb-3">
                     Chọn mức giá phù hợp
                  </h2>
                  <div data-bs-parent="#accordionExample">
                     <div
                        class="accordion-body p-0 d-flex flex-column gap-2">
                        <div class="row g-3">
                           <div class="col">
                              <input
                                 type="number"
                                 class="form-control"
                                 placeholder="Giá thấp nhất"
                                 aria-label="First name" />
                           </div>
                           <!-- <span style="width: 1px" class="col">-</span> -->
                           <div class="col">
                              <input
                                 type="number"
                                 class="form-control"
                                 placeholder="Giá cao nhất"
                                 aria-label="Last name" />
                           </div>
                        </div>

                        <input
                           type="range"
                           class="form-range"
                           id="customRange1"
                           value="0" />
                     </div>
                  </div>
               </div>
            </div>

            <div class="box_card w-75 ">
               <div class="accordion " id="accordionExample">
                  <div class="accordion-item">
                     <h2 class="accordion-header px-3 fs-4 fw-bold">
                     <?=$ctChuDe['TenCD']?>
                     </h2>
                     <div
                        id="collapseOne"
                        class="accordion-collapse collapse show"
                        data-bs-parent="#accordionExample">
                        <div class="accordion-body p-3">
                           <div
                              class="row g-3 align-items-center border-bottom pb-3">
                              <!-- <div class="col-auto">
                                 <label
                                    for="inputPassword6"
                                    class="col-form-label fs-5 fw-bold"
                                    >Sắp xếp theo</label
                                 >
                              </div>
                              <div class="col-auto">
                                 <select
                                    class="form-select"
                                    aria-label="Default select example">
                                    <option selected>Sắp Xếp Theo</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                 </select>
                              </div>
                              <div class="col-auto">
                                 <select
                                    class="form-select"
                                    aria-label="Default select example">
                                    <option selected>Còn Hàng</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                 </select>
                              </div>
                              <div class="col-auto">
                                 <select
                                    class="form-select"
                                    aria-label="Default select example">
                                    <option selected>50 sản phẩm</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                 </select>
                              </div> -->
                           </div>

                           <div
                              class="row row-cols-1 row-cols-md-5 gap-1 justify-content-between mt-5">
                              <!-- =============cái này là box sản phẩm ⬇⬇⬇⬇⬇⬇⬇⬇⬇⬇⬇⬇⬇⬇⬇⬇⬇⬇⬇⬇⬇⬇⬇======== -->
                              <!-- ======================================== -->
                              <!-- ======================================== -->
                              <!-- ======================================== -->
                              <!-- ======================================== -->
                              <!-- ======================================== -->
                              <!-- ======================================== -->
                              <?php foreach($dsSach as $sach):?>
                              <div class="col card gap-1 p-2 tstall">
                                    <img
                                    src="<?=$sach['HinhSP']?>"
                                    class="card-img-top"
                                    alt="..." />
                                    <div
                                    class="card-body d-flex flex-column justify-content-between">
                                    <h5 class="card-title">
                                       <?=strlen($sach['TenSP'])<=100?$sach['TenSP']:substr($sach['TenSP'],0,100).'...'?>
                                    </h5>
                                    <div
                                       class="mt-3 d-flex flex-column align-items-center gap-3">
                                       <span
                                          class="text-body-tertiary text-decoration-line-through">
                                          <?=number_format($sach['GiaSP'], 0, ',', '.').'đ';?>
                                       </span>
                                       <span class="fw-medium"
                                          ><?=number_format($sach['GiaKhuyenMai'], 0, ',', '.').'đ';?></span
                                       >
                                    </div>
                                    <a
                                    class="btn btn-success" href="?mod=book&act=detail&id=<?=$sach['MaSP']?>"
                                    >
                                       Xem Chi tiet
                                    </a>
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

                           <nav
                            aria-label="Page navigation example "
                            class="d-flex justify-content-center">
                            <ul class="pagination gap-3">
                                <li class="page-item <?=($page<=1)?'disabled':'';?>">
                                <a class="page-link text-dark" href="?mod=book&act=search&keyword=domesticbooks&page=<?=$page-1?>"
                                    ><svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        width="16"
                                        height="16"
                                        fill="currentColor"
                                        class="bi bi-chevron-left"
                                        viewBox="0 0 16 16">
                                        <path
                                            fill-rule="evenodd"
                                            d="M11.354 1.646a.5.5 0 0 1 0 .708L5.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0z" /></svg
                                ></a>
                                </li>
                                <?php for($i=1;$i<=$sotrang;$i++):?>
                                    <li class="page-item <?=($page==$i)?'active':'';?>">
                                    <a class="page-link" href="?mod=book&act=search&keyword=domesticbooks&page=<?=$i?>"><?=$i?></a>
                                    </li>
                                <?php endfor;?>   
                                <li class="page-item <?=($page>=$sotrang)?'disabled':'';?>">
                                <a class="page-link text-dark" href="?mod=book&act=search&keyword=domesticbooks&page=<?=$page+1?>"
                                    ><svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        width="16"
                                        height="16"
                                        fill="currentColor"
                                        class="bi bi-chevron-right"
                                        viewBox="0 0 16 16">
                                        <path
                                            fill-rule="evenodd"
                                            d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z" /></svg
                                ></a>
                                </li>
                            </ul>
                           </nav>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>