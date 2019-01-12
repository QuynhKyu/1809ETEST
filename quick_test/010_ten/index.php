<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<h1>1 . Viết ra 1 chương trình khi nhập vào họ tên của 1 người
    hãy in ra đâu là họ :
    đâu là tên :
    đâu là tên đệm .
    Ví dụ : nguyễn thị thuý diễm
    thì tên là diễm
    họ là nguyễn
    tên đệm là thị thuý
</h1>
<?php

$ho_ten = isset($_REQUEST["name"]) ? (int) $_REQUEST["name"] : '';
if(isset($_REQUEST["name"])){
    // lấy dữ liệu người dùng lên server
    $ho_ten = $_REQUEST["name"];
    echo "<br /> Họ và tên: ". $ho_ten;
    // tách họ tên thành 1 mảng họ tên
    $mang_ho_ten = explode(" ", $ho_ten);
    // xác định phân ftuwr, họ, tên trong mảng
    $so_phan_tu = count($mang_ho_ten);
    $ho = $mang_ho_ten[0];
    echo "<br /> Họ tên: ".$ho;
    $ten = $mang_ho_ten[$so_phan_tu - 1];
    echo "<br /> Tên: ".$ten;
    // dùng vòng lặp for để lấy họ đệm
    $ho_dem = "";
    for($i = 1; $i < ($so_phan_tu - 1); $i ++){
        $ho_dem = $ho_dem.$mang_ho_ten[$i]." ";
        echo "<br />Tên đệm: " . $ho_dem;
    }


}
?>

<form name="convertdungluong" action="" method="post">
    <P>
        <label>Nhập tên của bạn: </label>
        <input type="text" name="name" value="<?php echo $ho_ten; ?>">
    </P>

</form>

</body>
</html>