<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <style type="text/css">
        table th{
            border-left: 1px solid black;
            border-bottom: 1px solid black;
            width: 150px;
        }
        table td{
            border-left: 1px solid black;
            text-align: center;
            border-bottom: 1px solid black;
        }
    </style>
</head>
<body>
<div>1 . Cho bạn 1 mảng
    $student = array(); <br>
    $student['01'] = array('name' => 'Nguyễn văn anh', 'age' => 21, 'point' => 7); <br>
    $student['02'] = array('name' => 'Nguyễn thi hoa', 'age' => 23, 'point' => 8); <br>
    $student['03'] = array('name' => 'Nguyễn văn tuấn', 'age' => 24, 'point' => 9); <br>
    $student['04'] = array('name' => 'Lê văn thuận', 'age' => 25, 'point' => 7); <br>
    $student['05'] = array('name' => 'Trịnh quang anh', 'age' => 26, 'point' => 1); <br>
    $student['06'] = array('name' => 'Lê thuỳ linh', 'age' => 28, 'point' => 3); <br>
    $student['07'] = array('name' => 'Lê thuỳ trang', 'age' => 25, 'point' => 5); <br>
    $student['08'] = array('name' => 'Vũ đình hùng', 'age' => 20, 'point' => 8); <br>
    $student['09'] = array('name' => 'Lê văn an', 'age' => 19, 'point' => 9); <br>

    Hãy dùng dữ liệu sau và vòng lặp foreach để in ra 1 table thông tin của các sinh viên này
    và xếp loại của họ dự tên số điểm mà họ có
</div>
<br>
<br>
<br>
<?php
$student = array();
$student[] = array('name' => 'Nguyễn văn anh', 'age' => 21, 'point' => 7);
$student[] = array('name' => 'Nguyễn thi hoa', 'age' => 23, 'point' => 8);
$student[] = array('name' => 'Nguyễn văn tuấn', 'age' => 24, 'point' => 9);
$student[] = array('name' => 'Lê văn thuận', 'age' => 25, 'point' => 7);
$student[] = array('name' => 'Trịnh quang anh', 'age' => 26, 'point' => 1);
$student[] = array('name' => 'Lê thuỳ linh', 'age' => 28, 'point' => 3);
$student[] = array('name' => 'Lê thuỳ trang', 'age' => 25, 'point' => 5);
$student[] = array('name' => 'Vũ đình hùng', 'age' => 20, 'point' => 8);
$student[] = array('name' => 'Lê văn an', 'age' => 19, 'point' => 9);

$XL = array();
foreach ($student as $key => $value){
    array_push($student[$key], "XepLoai");
    if($value['point']>=8){
        $XL[$key] = 'Giỏi';
    }elseif (6 <= $value['point'] && $value['point'] < 8){
        $XL[$key] = 'Khá';
    }else{
        $XL[$key] = 'Trung Bình';
    }
}
?>

<table style="border: 1px solid black">
    <thead>
    <th>Họ Và Tên</th>
    <th>Tuổi</th>
    <th>Điểm Số</th>
    <th>Xếp Loại</th>
    </thead>
    <?php
    foreach ($student as $key => $value){
        echo '<tbody>';
        echo '<td>';
        echo $value['name'];
        echo '</td>';
        echo '<td>';
        echo $value['age'];
        echo '</td>';
        echo '<td>';
        echo $value['point'];
        echo '</td>';
        echo '<td>';
        echo $XL[$key];
        echo '</td>';
        echo '</tbody>';
    }
    ?>
</table>

</body>
</html>