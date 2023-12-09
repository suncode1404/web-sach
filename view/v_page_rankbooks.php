<div class="container d-flex gap-3">
            <div class="box_list w-75">
               <!--  -->
               <div class="box_title_content border-bottom border-2 border-secondary">
                  <h1 class="fs-2">Bảng Xếp Hạng</h1>
                  <p>Sách</p>
               </div>
               <?php $i=1; foreach($dsRankTopBooks as $sach):?>
                  <div class="box_content_main d-flex flex-column gap-3">
                     <div class="core_main_content pb-4 border-bottom border-1 border-secondary">
                        <div class="core_img d-flex">
                           <div class="title_img_content d-flex align-items-center gap-3 w-30">
                              <h1 class="num_img"><?=$i++?></h1>
                              <span class="line_img"></span>
                              <img src="upload/img/<?=$sach['HinhSP']?>" alt="" class="w-25 d-block" />
                              <p class="name_img_content d-flex flex-column">
                                 <span class="name_book fw-bold">
                                    <?=$sach['TenSP']?>
                                 </span>
                                 <span class="name_by"><?=$sach['TacGia']?></span>
                              </p>
                           </div>
                        </div>
                     </div>
                  </div>
               <?php endforeach;?>
               <!--  -->
            </div>
             
               <div class="box_infor_list w-25 d-flex flex-column align-items-center gap-3">
                  <h1 class="fs-2">Tuyển tập chọn lọc</h1>
                  <?php foreach($dsSales as $sach):?>  
                     <div class="box_more_content border-bottom border-1 border-secondary">
                        <img src="upload/img/<?=$sach['HinhSP']?>" alt="" class="img-fluid">
                        <h2 class="fs-5 text-center"><?=$sach['TenSP']?></h2>
                     </div>  
                  <?php endforeach;?>
               </div>



         </div>