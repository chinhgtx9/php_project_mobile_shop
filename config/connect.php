<?php 
	if(!defined('SECURITY')){
		die('bạn không có quyền truy cập file này');
	}
?>
<?php 
$conn = mysqli_connect('localhost','root','','phpk175');
if($conn){
    mysqli_query($conn," SET NAMES 'utf8'");
}else{
    print_r('ket noi that bai');
}

?>