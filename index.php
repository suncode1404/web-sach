<?php 
if(isset($_GET['mod'])) {
    switch($_GET['mod']) {
        case 'page':
            $ctrl_name ='page';
            break;
        case 'user':
            $ctrl_name = 'user';
            break;
        case 'book':
            $ctrl_name= 'book';
            break;
        case 'admin':
            $ctrl_name = 'admin';
            break;
        default:
            break;
    }
    include_once 'controller/c_'.$ctrl_name.'.php';
}else {
    //Chuyển về trang chủ
    header('Location: mod=page&act=home');
}