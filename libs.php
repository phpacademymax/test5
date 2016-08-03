<?PHP
function sessionGet($k){
	if (isset($_SESSION[$k])){
		return $_SESSION[$k];
	} else {
		return false;
	}
}
function sessionSet($k, $v){
	$_SESSION[$k] = $v;
}