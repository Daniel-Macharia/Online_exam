<style type="text/css">
</style>
<table border="0" width="100%" cellspacing="0" cellpadding="0" background="../image/topbkg.jpg">
  <tr>
    <td width="10%">
     <img border="0" src="../image/topright.jpg" width="203" height="68" align="right"></td>
  </tr>
</table>
<table border="0" width="100%" cellspacing="0" cellpadding="0" bgcolor="#000000" background="../image/blackbar.jpg">
  <tr>
    <td width="100%"><img border="0" src="../image/blackbar.jpg" width="89" height="15"></td>
  </tr>
</table>
  <table width="100%">
  <tr>
    <td aling=right>
	<?php
	if(isset($_SESSION['login']))
	{
	 echo "<div align=\"right\"><strong><a href=\"login.php\">Admin Home</a>|<a href=\"signout.php\">Signout</a></strong></div>";
	 }
	 else
	 {
	 	echo "&nbsp;";
	 }
	?>
	</td>
  </tr>
</table>
