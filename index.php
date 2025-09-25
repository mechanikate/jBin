<html>
	<head>
		<title>jBin</title>
	</head>
	<body>
		<link rel="stylesheet" href="style.css"></link>
		<link rel="icon" type="image/x-icon" href="<?php include 'settings.php'; echo($basePath); ?>/favicon.ico">
   		<form action="submitted.php" method="POST" id="submitform" autocomplete="off">
      		<textarea name="text" rows="5" cols="40" id="txt"></textarea>
   		    <input type="text" style="display: none;" name="enableraw" id="rawsetting" value="" />
   		</form>
		<script src="main.js"></script>
		<footer class="bottomrow">
		<p class="monospace" id="bottom">jBin <a href="<?php include 'settings.php'; echo($urlStoragePath); ?>/LICENSE.html">(C)</a> |&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;0 B used | <a href="javascript:document.getElementById(`submitform`).submit();">save</a> | <a href="javascript:document.getElementById(`rawsetting`).value = `true`;document.getElementById(`submitform`).submit();">save raw</a></p>
		</footer>
	</body>
</html>

