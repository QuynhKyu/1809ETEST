<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
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
$student = array('01' => array('name' => 'Nguyễn văn anh', 'age' => 21, 'point' => 7),
                 '02' => array('name' => 'Nguyễn thi hoa', 'age' => 23, 'point' => 8),
                 '03' => array('name' => 'Nguyễn văn tuấn', 'age' => 24, 'point' => 9),
                 '04' => array('name' => 'Lê văn thuận', 'age' => 25, 'point' => 7),
                 '05' => array('name' => 'Trịnh quang anh', 'age' => 26, 'point' => 1),
                 '06' => array('name' => 'Lê thuỳ linh', 'age' => 28, 'point' => 3),
                 '07' => array('name' => 'Lê thuỳ trang', 'age' => 25, 'point' => 5),
                 '08' => array('name' => 'Vũ đình hùng', 'age' => 20, 'point' => 8),
                 '09' => array('name' => 'Lê văn an', 'age' => 19, 'point' => 9),
                );

if(!empty($student)){
    array_multisort($student);
    foreach ($student as $key => $value){
        $name =  $value["name"];
        $age =   $value["age"];
        $point = $value["point"];

        echo "<table>".
             "<tr>Name: </tr>".
                "<td>". $name . "</td>".
             "<tr>- Tuổi: </tr> ".
                "<td>". $age . "</td>".
             "<tr> - Điểm: </tr> ".
                "<td>". $point ."</td>".
            "<br />".
             "</table>";
    }

}
?>



</body>
</html>