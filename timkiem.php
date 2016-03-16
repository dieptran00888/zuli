
<!DOCTYPE html>
<html>
<head lang="
}en">
    <meta charset="UTF-8">
    <title></title>
</head>
<body>
<form action="timkiem.php" method="post">
    <h1>Tran tìm kiếm sản phẩm</h1>
    <table>
        <tr>
            <td>Item</td>
            <td><input type="text" name="keyword"/></td>
        </tr>
        <tr>
            <td></td>
            <td><button type="submit" name="timkiem">Tìm kiếm</button></td>
        </tr>
    </table>

</form>
</body>
</html>
<?php
include_once"connect.php";
if(isset($_POST['timkiem'])){
    $key=strtolower($_POST['keyword']);
    if($key==null){
        echo"Bạn chưa nhập dữ liệu!";
    }
    else{
    $sql="select sp.*,dm.tendanhmuc AS tendm from tbl_products AS sp LEFT  JOIN tbl_catalogs AS dm ON dm.id=sp.danhmucsp WHERE tensanpham LIKE '$key'";
    $kq= mysql_query($sql);echo "<h2>Danh sách sản phẩm</h2>";
    $num=mysql_num_rows($kq);
    if($num>0&& $key!=null){
        while($r=mysql_fetch_array($kq)):
            echo"<table cellspacing='10px'>";
            echo"<tr>
                <td>ID</td>
                <td>Tên sản phẩm</td>
                <td>Danh mục</td>
                <td>Mô tả</td>
            </tr>";
            echo"<tr>";
                    $id=$r['id'];
                    $tensp= $r['tensanpham'];
                    $danhmuc=$r['tendm'];
                    $mota=$r['mota'];
                    echo"<td>";echo$id;echo"</td>";
                    echo"<td>";echo$tensp;echo"</td>";
                    echo"<td>";echo$danhmuc;echo"</td>";
                    echo"<td>";echo$mota;echo"</td>";
               echo"</tr>";
        endwhile;

        echo"</table>";
    }
    else{
        echo"Không tìm thấy kết quả!";
    }

    }
}
?>