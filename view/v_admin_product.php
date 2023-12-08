<div class="container-box-infor">
                     <div class="box-title-infor">
                        <p>Sách</p>
                        <a href="?mod=admin&act=product-add"><button type="submit" class="btn btn-success">Thêm Sách</button></a>
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
                           <?php foreach($dsBook as $book):?>
                              <tr>
                                 <td><?=$book['MaSP']?></td>
                                 <td>
                                    <img src="upload/img/<?=$book['HinhSP']?>" alt="" style=" width: 120px;" >
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
                                    <a href="?mod=admin&act=product-edit&id=<?=$book['MaSP']?>" class="btn-setting stt-change"><a href="?mod=admin&act=product-edit&id=<?=$book['MaSP']?>">Sửa</a></a>
                                 </td>
                                 <td>
                                    <a href="?mod=admin&act=product-delete&id=<?=$book['MaSP']?>" class="btn-setting stt-dlt">Xoá</a>
                                 </td>
                              </tr>
                           <?php endforeach;?>
                        </tbody>
                     </table>
                  </div>