<? 
require_once('../../drive/upload_files.php');

function copia_arquivo_upload($arquivo, $arquivo_name) {
			
			$nomefinal = date("ymdHis").retiraacentos($arquivo_name);
			
			$formato = substr($arquivo_name,-3,3);
			
			$drive_id = upload_gdrive($arquivo, $nomefinal, $formato);
			
			return $drive_id;
}
if($_POST['Gravar']=='Enviar') {
//$file = $_FILES['file']['tmp_name'];
//$file_name = $_FILES['file']['name'];
//echo copia_arquivo_upload($file, $file_name);
echo "ok";
}



?><form action="insert.php" method="post" enctype="multipart/form-data" name="form1" id="form1">
<input type="file" name="file" id="file"><input type="submit" name="Gravar" id="Gravar" value="Enviar">
</form>