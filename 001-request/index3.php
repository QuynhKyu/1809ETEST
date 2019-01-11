<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>

    <form name="convertdungluong" action="" method="post">
        <p>
            <label> Gigabyte: </label>
            <input type="text" name="capacity" value="<?php
            if (isset($_REQUEST['capacity'])){
                echo $_REQUEST['capacity'];
            }else{
                echo '';
            }
             ?>" placeholder="Nhập vào dung lượng cần chuyển từ gigabyte" />
        </p>
        <p>
            <input type="submit" name="submit" value="submit" />
        </p>
    </form>
<?php
/*
 * chuyển từ gigabyte
 * 1-thành megabyte
 * 2-thành byte
 * 3-thành bit
 */
echo 'Megabyte: '. $val = $_REQUEST['capacity'] * 1024;
echo '<br />';
echo 'Byte: '. $val = $_REQUEST['capacity'] *1024 *1024;
echo '<br />';
echo 'Bit: '. $val = $_REQUEST['capacity'] *1024 *1024 * 1024;
echo '<br />';
echo "<pre>";
print_r($_REQUEST);
echo "</pre>";
?>
</body>
</html>