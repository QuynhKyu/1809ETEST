<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<h1>1 . Viết ra 1 chương trình php tính tuổi của 1 người khi biết ngày tháng năm sinh của họ</h1>
<?php
$day = isset($_REQUEST["day"]) ? (int) $_REQUEST["day"] : '';
$month = isset($_REQUEST["month"]) ? (int) $_REQUEST["month"] : '';
$year = isset($_REQUEST["year"]) ? (int) $_REQUEST["year"] : '';
if(isset($_REQUEST["day"]) && isset($_REQUEST["month"]) && isset($_REQUEST["year"])){
   $nam_hien_tai = date("Y", time());
   echo "<br /> Năm hiện tại: " . $nam_hien_tai;
   $nam_sinh = $year;
   echo "<br /> Năm sinh: " . $nam_sinh;

   $tuoi_cua_nguoi_do = $nam_hien_tai - $nam_sinh;
   echo "<br /> Tuổi của người đó là : " . $tuoi_cua_nguoi_do;

}
?>

<form name="convertdungluong" action="" method="post">
    <P>
        <label>Nhập ngày sinh :</label>
        <input type="text" name="day" value="<?php echo $day; ?>">
    </P>
    <P>
        <label>Nhập tháng sinh :</label>
        <input type="text" name="month" value="<?php echo $month; ?>">
    </P>
    <P>
        <label>Nhập năm sinh :</label>
        <input type="text" name="year" value="<?php echo $year; ?>">
    </P>
    <P>
        <input type="submit" name="submit" value="submit">
    </P>
</form>
<p>Tính tuổi của 1 người </p>
<?php
echo '<pre>';
print_r($_REQUEST);
echo '</pre>';
?>
</body>
</html>