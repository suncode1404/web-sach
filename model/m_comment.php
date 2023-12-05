<?php 
    include_once 'model/m_pdo.php';
    function comment_add($MaTK,$MaSP,$NoiDung) {
        pdo_execute("INSERT INTO comment(`MaTK`,`MaSP`,`NoiDung`) VALUES (?,?,?)",$MaTK,$MaSP,$NoiDung);
    }
    function comment_getByBook($MaSP) {
        return pdo_query("SELECT * FROM comment cm INNER JOIN taikhoan tk ON cm.MaTk = tk.MaTK WHERE cm.MaSP=?",$MaSP);
    }