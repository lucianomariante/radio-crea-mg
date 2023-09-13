<?php 
// DEFINIÇÕES GERAIS DA RÁDIO
mysqli_select_db($conectar,$database_conectar);
$query_definicoes = "SELECT * FROM radio_definicoes";
$definicoes = mysqli_query($conectar,$query_definicoes);
$row_definicoes = mysqli_fetch_assoc($definicoes);

?><table align="center" class="lista table" style="margin-bottom:20px">
  <tbody>
    <tr class="principais">
      <td width="100" height="50"><a href="../definicoes/altform.php">Defini&ccedil;&otilde;es Gerais</a></td>
      <td width="100"><a href="../podcasts/index.php">Podcasts</a></td>
      <td width="100"><a href="../comentarios/index.php">Coment&aacute;rios</a></td>
      <td width="100"><a href="../noticias/index.php">Not&iacute;cias</a></td>
      <td width="100"><a href="../noticias_temp/index.php">Tempor&aacute;rias</a></td>
      <td width="100"><a href="../playlist/index.php">Pastas Playlist</a></td>
      <td width="100"><a href="../botoes/index.php">Bot&otilde;es</a></td>
    </tr>
  </tbody>
</table>