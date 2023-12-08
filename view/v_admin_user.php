<div class="container-box-infor">
                     <div class="box-title-infor">
                        <p>Tài khoản</p>
                        <a href="?mod=admin&act=user-add"><button>Thêm tài khoản</button></a>
                     </div>

                     <table class="table-infor-item max-with">
                        <thead>
                           <tr>
                              <th class="name-infor-th">STT</th>
                              <th class="name-infor-th">Ảnh</th>
                              <th class="name-infor-th">Họ Tên</th>
                              <th class="name-infor-th">SDT</th>
                              <th class="name-infor-th">Quyền</th>

                              <th class="name-infor-th" colspan="2">Hành Động</th>
                           </tr>
                        </thead>
                        <tbody>
                           <?php $i =1; foreach($dsUser as $user):?>
                              <tr>
                                 <td><?=$i++?></td>
                                 <td>
                                    <svg
                                       xmlns="http://www.w3.org/2000/svg"
                                       width="32"
                                       height="32"
                                       fill="currentColor"
                                       class="bi bi-person-circle"
                                       viewBox="0 0 16 16"
                                    >
                                       <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0" />
                                       <path
                                          fill-rule="evenodd"
                                          d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1"
                                       />
                                    </svg>
                                 </td>
                                 <td><?=$user['TenTaiKhoan']?></td>
                                 <td><?=$user['SoDienThoai']?></td>
                                 <td class="type-level-user">
                                 <?php switch ($user['Quyen']) {
                                    case '1':
                                          echo '<span class="badge text-bg-success">Quyền quản lý</span>';
                                          break;
                                    default:
                                          echo '<span class="badge text-bg-primary">Khách hàng</span>';
                                          break;
                                 }?>
                                 </td>

                                 <td>
                                    <a href="?mod=admin&act=user-edit&id=<?=$user['MaTK']?>" class="btn-setting stt-change">Sửa</a>
                                 </td>
                                 <td>
                                    <a href="?mod=admin&act=user-delete&id=<?=$user['MaTK']?>" class="btn-setting stt-dlt">Xoá</a>
                                 </td>
                              </tr>
                           <?php endforeach;?>
                        </tbody>
                     </table>
                  </div>