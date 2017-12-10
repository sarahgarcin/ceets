<div class="menusecondaire row">
	<div class="site-title left col-xs-6">
		<a href="<?php echo $site->url()?>" title="<?php echo $site->title()?>"><?php echo $site->title()?></a>
	</div>
	<div class="menusecondaire-el right col-xs-6">
		<ul>
			<li>
      		<a href="https://www.shop-stages-survie-ceets.org/" title="Boutique"">
						Boutique
					</a>
				</li>
			<?php foreach($pages->visible()->slice(6,9) as $el):?>
				<li <?php e($el->isOpen(), ' class="active"') ?>>
      		<a href="<?php echo $el->url() ?>" title="<?php echo $el->title()?>"">
						<?php echo $el->title()->html()?>
					</a>
				</li>
			<?php endforeach; ?>
		</ul>
	</div>
</div>