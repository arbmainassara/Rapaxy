	<div class="block">
		
	<?php
	    include_once "phpmarkdown/Michelf/Markdown.php";
	     include_once "ForceUTF8/Encoding.php";
	    use \Michelf\Markdown;
	    use \ForceUTF8\Encoding;
		$file = urldecode('..'.$_SERVER["REQUEST_URI"]."footer.md");
		if(file_exists($file)){
			$file_content = Encoding::toUTF8(file_get_contents($file, FILE_USE_INCLUDE_PATH));
			echo Markdown::defaultTransform($file_content);
		}
			
		?>
	</div><!--/.postlisting-->

</div><!--/.wrapper-->

<div class="footer">
	© 2012 Tous Droits Réservés - Décanord - 458 501 368 00039
</div><!--/.footer-->
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
<script src="/lecteuraudio/audiojs/audio.js"></script>
<script>
$('tr:nth-child(2)').addClass('parent');
//$("a[href*='.mp3']").addClass('musique');
$("a[href*='.mp3']").each(function( index ) {
  console.log( index + ": " + $(this).text() );
  parent = $(this).parent();
  console.log( "Parent: " + parent.text() );
  $(this).remove();
  parent.append("<audio src=\""+$(this).attr('href')+"\" preload=\"none\" />");
});
</script>
<script>
  audiojs.events.ready(function() {
    var as = audiojs.createAll();
  });
</script>
