<?php
	include 'settings.php';
	$urlStorage = $basePath . $storageUrlPath;
	
	function getRandomString($urlLength) {
		$characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
		$randomString = '';

		for ($i = 0; $i < $urlLength; $i++) {
			$index = rand(0, strlen($characters) - 1);
			$randomString .= $characters[$index];
		}
	
		return $randomString;
	}
	$str = getRandomString($urlLength);
	$contents = "";
	if($_FILES['text']['tmp_name']) $contents = htmlspecialchars(file_get_contents($_FILES['text']['tmp_name']), ENT_SUBSTITUTE, "UTF-8");
	else if($_POST['text']) $contents = htmlspecialchars($_POST['text'], ENT_SUBSTITUTE, "UTF-8");
	else if($_GET['text']) $contents = htmlspecialchars($_GET['text'], ENT_SUBSTITUTE, "UTF-8");
	else exit();
	$txtb = '<meta charset="UTF-8"><link rel="stylesheet" href="' . $basePath . '/style.css?v=2"></link><textarea name="text" rows="5" cols="40" disabled>' . $contents . '</textarea><script>document.addEventListener("keydown", function(e){if (e.ctrlKey && e.which == 83) {e.preventDefault();document.getElementById("submitform").submit();}else{document.getElementById("bottom").innerHTML = \`jBin <a href=\'' . $basePath . '\'>(C)</a> |&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;${document.getElementById("txt").value.length} B used\`;}}, false);</script><div class="bottomrow"><p id="bottom" style="font-family: \'Courier New\', monospace;">jBin <a href="' . $urlStorage . '/LICENSE.html">(C)</a> |&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <span id="bused">0</span> B used | url: ' . $urlStorage . $str . '.html | <a href="' . $basePath . "r/" . $str . '">raw</a></p></div><script>window.onload=function(){document.getElementById("bused").innerHTML = document.getElementsByName("text")[0].innerHTML.length;}</script>';
	if(!file_exists($storagePath)) {
		mkdir($storagePath ,0744);
	}
	file_put_contents($storagePath . $str . '.html', $txtb);
	echo  $basePath . "r/" . $str;
?>
