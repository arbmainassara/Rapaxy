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
	    use \Michelf\Markdown;
		$file = urldecode('..'.$_SERVER["REQUEST_URI"]."header.md");
		if(file_exists($file)){
			$my_html = Markdown::defaultTransform(file_get_contents($file, FILE_USE_INCLUDE_PATH));
			echo iconv('ASCII', 'UTF-8//TRANSLIT', $my_html);
		}
			
		?>
	</div>
</div>
<!-- we open the `wrapper` element here, but close it in the `footer.html` file -->