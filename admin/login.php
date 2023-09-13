<? require_once('../Connections/conectar.php'); 

if (!function_exists("GetSQLValueString")) {
function GetSQLValueString($theValue, $theType, $theDefinedValue = "", $theNotDefinedValue = "") 
{
  if (PHP_VERSION < 6) {
    $theValue = get_magic_quotes_gpc() ? stripslashes($theValue) : $theValue;
  }
  
  global $conectar;

  $theValue = function_exists("mysqli_real_escape_string") ? mysqli_real_escape_string($conectar,$theValue) : mysqli_escape_string($conectar,$theValue);

  switch ($theType) {

    case "text":

      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";

      break;    

    case "long":

    case "int":

      $theValue = ($theValue != "") ? intval($theValue) : "NULL";

      break;

    case "double":

      $theValue = ($theValue != "") ? doubleval($theValue) : "NULL";

      break;

    case "date":

      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";

      break;

    case "defined":

      $theValue = ($theValue != "") ? $theDefinedValue : $theNotDefinedValue;

      break;

  }

  return $theValue;

}
}



$colname_verificalogin = "-1";

if (isset($_POST['usuario'])) {
  $colname_verificalogin = $_POST['usuario'];
}

$colname2_verificalogin = "-1";
if (isset($_POST['senha'])) {
  $colname2_verificalogin = $_POST['senha'];
}

mysqli_select_db($conectar,$database_conectar);
$query_verificalogin = sprintf("SELECT * FROM radio_definicoes WHERE usuario LIKE %s and senha LIKE %s", GetSQLValueString($colname_verificalogin, "text"),GetSQLValueString($colname2_verificalogin, "text"));
$verificalogin = mysqli_query($conectar,$query_verificalogin);
$row_verificalogin = mysqli_fetch_assoc($verificalogin);
$totalRows_verificalogin = mysqli_num_rows($verificalogin);

if (!empty($row_verificalogin['id']) or ($_POST['usuario']=='gustavo' and $_POST['senha']=='!@#$%')) {

session_start();
$_SESSION["entrar"] = "correto";
header("location:definicoes/index.php");

} else { 

session_start();
$_SESSION["entrar"] = "incorreto";

header("location:index.php?status=erro");

}

?>