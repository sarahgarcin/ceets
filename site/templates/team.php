<?php snippet('head') ?>
<?php snippet('header') ?>
<main class="wrap row">
	<div class="title-team col-xs-7 col-xs-offset-3">
		<h1><?php echo $page->title()->html()?></h1>
	</div>
	<div class="team-content">
		<?php foreach($page->children()->visible() as $team):?>
			<div class="row team-people">
				<div class="image-wrapper col-xs-3 col-xs-offset-1">
					<?php $image = $team->cover()->toFile();?>
					<img src="<?php echo $image->url()?>" alt="<?php echo $team->title()?>">
				</div>
				<div class="team-text col-xs-4">
					<h2><?php echo $team->title()->html()?></h2>
					<p class="position"><?php echo $team->position()->html()?></p>
					<?php echo $team->text()->html()?>
				</div>
			</div>
		<?php endforeach; ?>
	</div>
</main>


<?php snippet('footer') ?>