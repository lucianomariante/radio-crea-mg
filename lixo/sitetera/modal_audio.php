<?php     
include_once('admin/includes/constantes.php'); 

if($_GET['id']!="") { 
	$id = intval($_GET['id']);
	$vObjeto = fillNoticiasHome($id);
	$enxertolink = "?id=".$id;
	$content = stripslashes(formatar_data($vObjeto['NOTDATAPUBLICACAO'])." - ".$vObjeto['NOTMANCHETE']);
	$vSAudioCompartilhado = 'https://drive.google.com/a/agenciaradioweb.com.br/uc?id='.$vObjeto['NOTIDDRIVE'];
}
?>	
<!-- Modal  -->
<div class="modal_avisos">
  <div class="banner_desktop" >
    <div class="close"></div>
	  <div align="center">
		<a href="index.php"><img src="img/logo_central.png" alt="Rádio TJMG " style="height:200px; width:200px;" /></a>
		<br>
		<br>
		<? echo formatar_data($vObjeto['NOTDATAPUBLICACAO']);?>  | <?php echo $vObjeto['NOTMANCHETE'] ?><br />
		<br>
		<br>
		<div><audio autoplay src="<?= $vSAudioCompartilhado; ?>" controls style="height:60px;"></audio></div>
		<br>
		<br>
		<a href="https://drive.google.com/a/agenciaradioweb.com.br/uc?id=<?= $vObjeto['NOTIDDRIVE'];?>&export=download"><img src="../img/baixar_novo.png" width="131" height="84" alt=""/></a><br/>
		<button type="button" onclick="fecharDiv();" id="button-fechar" class="button-fechar">FECHAR</button>
	  </div>
  </div>
  <div class="banner_mobile">
    <div class="close"></div>
      <div align="center">
		<a href="index.php"><img src="img/logo_central.png" alt="Rádio TJMG " style="height:250px; width:250px;" /></a>
		<br>
		<br>
		<? echo formatar_data($vObjeto['NOTDATAPUBLICACAO']);?>  | <?php echo $vObjeto['NOTMANCHETE'] ?><br />
		<br>
		<br>
		<div><audio autoplay src="<?= $vSAudioCompartilhado; ?>" controls style="height:60px;"></audio></div>
		<br>
		<br>
		<a href="https://drive.google.com/a/agenciaradioweb.com.br/uc?id=<?= $vObjeto['NOTIDDRIVE'];?>&export=download"><img src="../img/baixar_novo.png" width="131" height="84" alt=""/></a><br/>
		<button type="button" onclick="fecharDiv();" id="button-fechar" class="button-fechar">ENTRAR NA RÁDIO</button>
	  </div>
  </div>
</div>
<!-- Modal  -->
<style>
  .modal_avisos{
    position: fixed;
    top:0;
    left:0;
    right: 0;
    bottom: 0;
    background: #FFFFFF; 
    z-index: 99999;
	font-size: 19px; 
	line-height: 20px; 
	letter-spacing: 0px; 
	color: #434452;
  } 
  .modal_avisos .banner_desktop,
  .modal_avisos .banner_mobile{
    position: absolute;
    top: 50px;

    left: 50%;
    transform: translateX(-50%);
  }
  @media (min-width: 703px){

    .modal_avisos .banner_desktop{
      display: block;
    }
    .modal_avisos .banner_mobile{
      display: none;
    }

  }
  @media (max-width: 703px){

    .modal_avisos .banner_mobile{
      display: block;
    }
    .modal_avisos .banner_desktop{
      display: none;
    }

  }
    .modal_avisos .banner_mobile img{
      width: 240px;
    }

    .modal_avisos .close{
    position: absolute;
    top: -15px;
    right: -15px;
    width: 30px;
    height:30px;
    cursor: pointer;

    background: url("data:image/png;base64,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") no-repeat 0 0;
  }
	.button-fechar {
		font-family: 'HelveticaCondensedBold', sans-serif;
		background: #931111 none repeat scroll 0 0;
		border: 0 none;
		color: #fff;
		font-size: 17px;
		height: 46px;
		text-transform: uppercase;
		width: 100%;
	}
</style>
<link rel="stylesheet" href="style.css">
<script>
$(".modal_avisos .close").click(function () {
    $(".modal_avisos").css("display", "none");
});
	function fecharDiv(){
		$(".modal_avisos").css("display", "none");
	}	

</script>
<!-- Modal -->