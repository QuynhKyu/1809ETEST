<h1>1 . Viết ra 1 chương trình mà khi click vào button bên dưới sẽ tạo ra 100 thư mục
    có tên từ 001 đến 100 bên trong thư mục demo của file này</h1>

<h1>2 . Sau đó tạo 1 file có tên là index.php trong mỗi thư mục đó
    trong mỗi file này có 1 câu lệnh php in ra tên đường dẫn hiện tại của file đó</h1>
<?php
/**
 * Created by PhpStorm.
 * User: MyPC
 * Date: 11/01/2019
 * Time: 8:16 CH
 */

$actual_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http"). ": //$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]\";
?>";
?>
<h1><a href="<?php echo $actual_link.'?run=1'?>">Click tạo thư mục tự động</a></h1>
<?php
    if(isset($_GET['run']) && ($_GET['run'] == 1)){
        echo '<br > chạy ngay';
        $path = __FILE__;
        // dirname là cha của đường dẫn thư mục truyền vào
        $dir = dirname($path);
        $target = $dir.'/demo';
        // is_dir là hàm kiểm tra xem có phải là thư mục hay không
        if (is_dir($target)){
            for($i = 1; $i < 101; $i ++){
                if($i < 10){
                    $name = '00'.$i;
                }elseif ($i < 100){
                    $name = '0'.$i;
                }else{
                    $name = $i;
                }
                $target_subbir = $target. "/" .$name;
                //Hàm file_exists() sẽ kiểm tra xem file hoặc thư mục có tồn tại hay không
                if (!file_exists($target_subbir)){
                    // mkdir sẽ tạo mới thư mục theo đúng đường dẫn truyền vào.
                    mkdir($target_subbir, 0777, true);
                    $target_subbir_file = $target_subbir.'/index.php';
                    // fopen sẽ mở một file dựa vào đường dẫn truyền vào, $mode là các quyền có thể thực hiện đối với file đó.
                    $fp = fopen($target_subbir_file, 'w');
                    //fwrite  sẽ ghi nội dung nào đó vào vị trí hiện tại của con trỏ tệp tin của file. Nếu file đã có nội dung, nó sẽ ghi đè lên những nội dung trùng vị trí.
                    fwrite($fp, '<?php echo __FILE__; ?>');
                    // Hàm fclose() sẽ đóng một tập tin đang mở.
                    fclose($fp);
                }
            }
        }
    }
?>