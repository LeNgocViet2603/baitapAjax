<?php 
    include("./connect.inc");
    if(isset($_GET['lop'])){
        $lop = $_GET['lop'];
    $sql ="Select * from sinhvien where lop = '{$lop}'";
    $result = mysqli_query($con,$sql);
    $str = "<table>
            <tr class=hd>
                <td>TT</td>
                <td>Mã Sinh viên</td>
                <td>Họ Tên</td>
                <td>Địa chỉ</td>
            </tr>";
    $tt=1;
    while($row = mysqli_fetch_array($result)){
        $str .= "<tr>
                <td>{$tt}</td>
                <td>{$row['MaSV']}</td>
                <td>{$row['HoTen']}</td>
                <td>{$row['Diachi']}</td>

        </tr>";
        $tt++;
    }
    $str ."</table>";
    echo $str;
    }
    else{
        echo "Sai";
    }
    
?>
