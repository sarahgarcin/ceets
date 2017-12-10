<div class="menu row center-xs">
	<ul class="col-xs-7">
	<?php foreach($pages->visible()->slice(0,6) as $el):?>
		<li <?php e($el->isOpen(), ' class="active"') ?>>
			<a href="<?php echo $el->url() ?>" title="<?php echo $el->title()?>">
				<?php echo $el->title()->html()?>
			</a>
			<ul class="submenu row">
				<div class="colonne col-lg-4">
					<?php foreach($el->colonne1()->split(',') as $sub): ?> 
						<?php $subEl =  $el->find($sub);?>
						<li <?php e($subEl->isOpen(), ' class="active"') ?>>
							<a href="<?php echo $subEl->url() ?>" title="<?php echo $subEl->title()?>">
								<span class="sub-title"><?php echo $subEl->title()->html()?></span>
								<span class="sub-period"> > <?php echo $subEl->period()->html()?></span>
							</a>
						</li>
					<?php endforeach ?>
				</div>
				<div class="colonne col-lg-4">
					<?php foreach($el->colonne2()->split(',') as $sub): ?> 
						<?php $subEl =  $el->find($sub);?>
						<li <?php e($subEl->isOpen(), ' class="active"') ?>>
							<a href="<?php echo $subEl->url() ?>" title="<?php echo $subEl->title()?>">
								<span class="sub-title"><?php echo $subEl->title()->html()?></span>
								<span class="sub-period"> > <?php echo $subEl->period()->html()?></span>
							</a>
						</li>
					<?php endforeach ?>
					
				</div>
				<div class="colonne col-lg-4">
					<?php foreach($el->colonne3()->split(',') as $sub): ?> 
						<?php $subEl =  $el->find($sub);?>
						<li <?php e($subEl->isOpen(), ' class="active"') ?>>
							<a href="<?php echo $subEl->url() ?>" title="<?php echo $subEl->title()?>">
								<span class="sub-title"><?php echo $subEl->title()->html()?></span>
								<span class="sub-period"> > <?php echo $subEl->period()->html()?></span>
							</a>
						</li>
					<?php endforeach ?>
					
				</div>
			</ul>
		</li>
	<?php endforeach ?>
	</ul>
</div>