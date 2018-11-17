<?php
$p404="404 error";
if(isset($_GET['p']) && file_exists("pages/".$_GET['p'].".html")) {
	$p=$_GET['p'];
}
else $p="main";

include_once("tpl.html");

echo file_get_contents("pages/$p.html");

echo "
</div>
</body>
</html>";

?>
