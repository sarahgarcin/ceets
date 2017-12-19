<div class="page-header start-xs">
	<div class="image-wrapper">
		<?php $image = $page->cover()->toFile();?>
		<img src="<?php echo $image->url()?>" alt="<?php echo $page->title()?>">
	</div>
	<div class="title-header col-xs-8 col-xs-offset-3">
		<h1><?php echo $page->title()->html()?></h1>
		<?php echo $page->description()->kt()?>
	</div>
	
</div>