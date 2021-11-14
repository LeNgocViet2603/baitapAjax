<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajax Danh sach</title>
    <style>
    body{
        font-size: 11pt;
    }
    div{
        padding: 3px 5px;
        font: normal 13pt Arial;
    }
    table{
        background-color: #eaeaea;
    }
    td{
        font: normal 11pt Arial;
    }
    .hd{
        background-color: navy;
        color: #fff;
    }
</style>
    <script>
    function sendajax(){
        lop = document.getElementById("lop").value;
        objds = document.getElementById("ds");
        xml = new XMLHttpRequest();
        xml.onreadystatechange = function (){
            if(xml.readyState == 4){
                objds.innerHTML = xml.responseText;
            }
        }
        //neu them dấu cách phía sau ?lop thì code sẽ không chay
        url = "ds.php?lop="+lop;
        xml.open("GET",url,"false");
        xml.send();
    }
    </script>
</head>


<body>
    <?php 
        include("./connect.inc");
        function initClass($conn){
            $sql = "select distinct lop from sinhvien";
            $rs = mysqli_query($conn,$sql);
            $str = "Chọn Lớp:<select name = lop id=lop onChange='sendajax();'>";
            while($row = mysqli_fetch_array($rs)){
                $str.="<option value={$row['lop']}>{$row['lop']}</option>";

            }
            $str.="</select>";
            echo $str;
        }
        initClass($con);
    ?>
    <hr>
    <div id="ds">Danh sách</div>
</body>
</html>