<table class="table-infor-item">
                        <thead>
                           <tr>
                              <th class="name-infor-th">STT</th>
                              <th class="name-infor-th">Hình ảnh</th>
                              <th class="name-infor-th">Tổng tiền</th>
                              <th class="name-infor-th" colspan="2">Hành Động</th>
                           </tr>
                        </thead>
                        <tbody>
                                <?php foreach($dsLS as $user):?>
                                 <?php  if($user['TrangThai'] === 'chuan-bi' && $user['Quyen'] === 0):?>
                                    <tr>
                                       <td class="name-td-table"><?=$user['MaLS']?></td>
                                       <td class="name-td-table"><?=$user['TenTaiKhoan']?></td>
                                       <td class="name-td-table"><?=number_format($user['TongTien'],0,'.','.').'đ'?></td>
                                       <td class="type-ship name-td-table"><?=$user['TrangThai']?></td>
                                    </tr>
                                 <?php endif;?>
                                <?php endforeach;?>
                        </tbody>
                     </table>