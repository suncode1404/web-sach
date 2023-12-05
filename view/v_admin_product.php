<div class="container-box-infor">
                     <div class="box-title-infor">
                        <p>Sách</p>
                        <button>Thêm Sách</button>
                     </div>

                     <table class="table-infor-item">
                        <thead>
                           <tr>
                              <th class="name-infor-th">STT</th>
                              <th class="name-infor-th">Hình ảnh</th>
                              <th class="name-infor-th">Tựa sách</th>
                              <th class="name-infor-th">Tác giả</th>
                              <th class="name-infor-th">Giá Trị</th>
                              <th class="name-infor-th">Số Lượng</th>
                              <th class="name-infor-th">Chủ Đề</th>
                              <th class="name-infor-th">Số cảm nghĩ</th>
                              <th class="name-infor-th">Lượt đọc</th>
                              <th class="name-infor-th">Lượt xem</th>
                              <th class="name-infor-th" colspan="2">Hành Động</th>
                           </tr>
                        </thead>
                        <tbody>
                           <?php $i=1; foreach($dsBook as $book):?>
                              <tr>
                                 <td><?=$i++?></td>
                                 <td>
                                    <img src="<?=$book['HinhSP']?>" alt="" style=" width: 120px;" >
                                 </td>
                                 <td><?=$book['TenSP']?></td>
                                 <td><?=$book['TacGia']?></td>
                                 <td>157.330</td>
                                 <td><?=$book['SoLuong']?></td>
                                 <td><?=$book['TenCD']?></td>
                                 <td><?=$book['SoLuotMua']?></td>
                                 <td><?=$book['SoLuotThich']?></td>
                                 <td>6500</td>
                                 <td>
                                    <button class="btn-setting stt-change">Sửa</button>
                                 </td>
                                 <td>
                                    <button class="btn-setting stt-dlt">Xoá</button>
                                 </td>
                              </tr>
                           <?php endforeach;?>
                        </tbody>
                     </table>
                  </div>