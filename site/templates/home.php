<?php snippet('head') ?>
<?php snippet('header') ?>

<main class="wrap row center-xs">
	<div class="col-xs-8">
		<?php snippet('carroussel') ?>
		<div class="showcase">
			<?php foreach($site->index()->filterBy('intendedTemplate', 'stage')->slice(0,4) as $stage):?>
				<div class="showcase-el">
					<div class="title">
						Survie: <?php echo $stage->title()->html()?>
					</div>
					<div class="image-wrapper">
						<?php $image = $stage->cover()->toFile();?>
						<img src="<?php echo $image->url()?>" alt="<?php echo $image->name()?>">
					</div>
					<div class="description">
						<div class="description-text">
							<?php echo $stage->descripton()->kt()?>
						</div>
						<div class="infos">
							<?php echo $stage->period()->html()?> | <?php echo $stage->cost()->html()?>
						</div>

					</div>
				</div>
			<?php endforeach;?>
		</div>
	</div>
	
</main>


<?php snippet('footer') ?>