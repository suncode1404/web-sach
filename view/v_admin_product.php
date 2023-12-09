<div class="container-box-infor">
                     <div class="box-title-infor">
                        <p>Sách</p>
                        <form action="?mod=admin&act=product-add" method="post">
                           <button class="btn-add">Thêm Sản Phẩm</button> 
                        </form>
                     </div>

                     <table class="table-infor-item">
                        <thead>
                           <tr>
                              <th class="name-infor-th">STT</th>
                              <th class="name-infor-th">Hình ảnh</th>
                              <th class="name-infor-th">Tựa sách</th>
                              <th class="name-infor-th">Tác giả</th>
                              <th class="name-infor-th">Giá</th>
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
                                 <td><?=number_format($book['GiaKhuyenMai'],0,'.','.').'đ'?></td>
                                 <td><?=$book['SoLuong']?></td>
                                 <td><?=$book['TenCD']?></td>
                                 <td><?=$book['SoLuotMua']?></td>
                                 <td><?=$book['SoLuotThich']?></td>
                                 <td>6500</td>
                                 <td>
                                    <a href="?mod=admin&act=product-edit&id=<?=$book['MaSP']?>" class="btn-setting stt-change">Sửa</a>
                                 </td>
                                 <td>
                                    <a href="?mod=admin&act=product-delete&id=<?=$book['MaSP']?>" class="btn-setting stt-dlt">Xoá</a>
                                 </td>
                              </tr>
                           <?php endforeach;?>
                        </tbody>
                     </table>
                  </div>