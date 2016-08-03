<?PHP
include "libs.php";
session_start();
if ($_POST['submit']){
	sessionSet("color", $_POST['color']);
	setcookie("color", $_POST['color'], time()+3600);
}
ob_start();
echo "sone content";
setcookie("somenewcook","some value");
include "header.php";
if (isset($_GET['page'])){
	$file = $_GET['page'].".php";
	if (is_readable($file)){	
		include $file;
	}
}
include "footer.php";
$content = ob_get_clean();
echo $content;




