<?php if(isset($_GET["lol"])){echo"<div style='text-align:center'><h1>Nanoiweb</h1>lololol</div>";}else{ include "config/general.php"; include "config/images.php"; $webtitle=$WEBSITE_NAME; $pub=False; include "includes/header.php";
$a = $number_on_data -1;
$ao = 0;
$next = $a + 1;
echo "  <div class='feed'>\n";
while($ao < $number_on_data){
  echo "    <a href='$prefix_pub$next'><span class='mini'><img src='".$data[$a][2]."' title='".$data[$a][1]."'></span></a>";
  $a--; $ao++; $next--;
}

echo "  </div>\n";
include "includes/footer.php"; } ?>
