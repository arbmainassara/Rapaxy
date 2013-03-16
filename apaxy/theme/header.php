<!--[if lt IE 9]>
    <script src="/theme/html5.js"></script>
<![endif]-->
<div class="wrapper">
<div class="header">
	<div class="left logo">
		<img alt="logo-decanord" src="/theme/images/logo.fw.png">
	</div>
	<div class="left sigle">
		<p>Diffusion et Edition Catéchistique du Nord</p>
	</div>
	<div class="both">
		<?php
	    include_once "phpmarkdown/Michelf/Markdown.php";
	    include_once "ForceUTF8/Encoding.php";
	    use \Michelf\Markdown;
	    use \ForceUTF8\Encoding;
		$file = urldecode('..'.$_SERVER["REQUEST_URI"]."header.md");
		if(file_exists($file)){
			$file_content = Encoding::toUTF8(file_get_contents($file, FILE_USE_INCLUDE_PATH));
			echo Markdown::defaultTransform($file_content);
		}
			
		?>
	</div>
</div>
<!-- we open the `wrapper` element here, but close it in the `footer.html` file -->