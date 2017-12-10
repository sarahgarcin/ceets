<?php $allStages = $site->index()->filterBy('intendedTemplate', 'stage');?>

<div class="slider">
	<?php foreach($allStages as $stage): ?>
		<?php if($stage->actus() == 'oui' && $stage->actus()->isNotEmpty()):?>
			<div class="slide">
				<?php if($stage->cover()->isNotEmpty()): ?>
					<div class="image-wrapper">
						<?php $image = $stage->cover()->toFile();?>
						<img src="<?php echo $image->url()?>" alt="<?php echo $image->name()?>">
					</div>
					<div class="description">
						<?php echo $stage->descripton()->kt();?>
					</div>
					<div class="link">
						<a href="<?php echo $stage->url()?>" title="<?php echo $stage->title()?>">
							> Voir nos stages <?php echo $stage->title()?>
						</a>
					</div>
				<?php endif; ?>
			</div>
		<?php endif ?>
	<?php endforeach; ?>
</div>
		