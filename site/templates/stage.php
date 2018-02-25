<?php if(!kirby()->request()->ajax()):
	snippet('head');
	snippet('header');
endif;?>
<main class="wrap row center-xs">
	<?php if(!kirby()->request()->ajax()):?>
		<div class="col-xs-8">
			<?php snippet('pageheader') ?>
		</div>
	<?php endif?>
	<div class="page-content start-xs row">
		<div class="infos col-xs-2 <?php if(!kirby()->request()->ajax()):?>col-xs-offset-2<?php endif?>">
			<div class="inner-infos-text">
				<h3>Infos pratiques<br>—</h3>
				<div class="info-el">
					<h3>Durée:</h3>
					<?php echo $page->period()->html() ?>
				</div>
				<div class="info-el">
					<h3>Tarif:</h3>
					<?php echo $page->cost()->html() ?>
				</div>
				<div class="info-el">
					<h3>Nb. de places:</h3>
					<?php echo $page->number()->html() ?>
				</div>
				<div class="info-el">
					<h3>Prérequis:</h3>
					<?php echo $page->prerequisite()->kt() ?>
				</div>
				<div class="info-el">
					<h3>Renseignements:</h3>
					<a href="mailto:<?php echo $page->mail()?>?subject=renseignements"><?php echo $page->mail()?></a>
				</div>
				
			</div>
			<div class="document">
				<h3>Dossier d'inscription<br>—</h3>
				<?php if($page->liens()->isNotEmpty()):?>
					<ul>
					  <?php foreach($page->liens()->toStructure() as $lien): ?>
						  <li>
						  	<a href="<?php echo $lien->lien()?>" title="<?php echo $lien->lien()?>" target="_blank">
						  		<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24.945" height="24.945">
									  <defs>
									    <path id="a" d="M0 0h25v25.002H0z"/>
									  </defs>
									  <clipPath id="b">
									    <use xlink:href="#a" overflow="visible"/>
									  </clipPath>
									  <path clip-path="url(#b)" d="M9.295 11.13c.979-.979 2.684-.979 3.661 0l.916.914a1.291 1.291 0 0 0 1.83 0 1.293 1.293 0 0 0 0-1.83l-.914-.914a5.14 5.14 0 0 0-3.662-1.52 5.145 5.145 0 0 0-3.662 1.518l-5.95 5.948a5.185 5.185 0 0 0 0 7.324l.915.912a5.141 5.141 0 0 0 3.663 1.52 5.142 5.142 0 0 0 3.659-1.518l2.813-2.811a1.293 1.293 0 0 0 0-1.83 1.29 1.29 0 0 0-1.83 0l-2.813 2.809c-.977.98-2.681.98-3.661 0l-.915-.914a2.591 2.591 0 0 1 0-3.66l5.95-5.948z"/>
									  <path clip-path="url(#b)" d="M17.534 15.705l5.949-5.95A5.145 5.145 0 0 0 25 6.095a5.137 5.137 0 0 0-1.518-3.661l-.914-.916C21.588.539 20.29 0 18.907 0s-2.684.539-3.66 1.518l-2.571 2.569a1.294 1.294 0 1 0 1.831 1.83l2.57-2.569c.49-.489 1.139-.759 1.83-.759s1.342.27 1.83.759l.916.916c.488.488.758 1.139.758 1.831 0 .691-.27 1.34-.758 1.829l-5.951 5.947c-.977.98-2.682.98-3.66.002a1.298 1.298 0 0 0-1.83-.002 1.296 1.296 0 0 0-.001 1.832 5.14 5.14 0 0 0 3.661 1.518 5.15 5.15 0 0 0 3.662-1.516"/>
									</svg>
						  	</a>
						  </li>
				  	<?php endforeach ?>
					</ul>
				<?php endif ?>
				<?php if($page->docs()->isNotEmpty()):

			    $filenames = $page->docs()->split(',');
			    if(count($filenames) < 2) $filenames = array_pad($filenames, 2, '');
			    $files = call_user_func_array(array($page->files(), 'find'), $filenames);?>
			    
			    <ul class="docs">
				    <?php foreach($files as $file):?>
				    <li>
					  	<a href="<?php echo $file->url()?>" title="<?php echo $file->url()?>" target="_blank">	
								<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="22.96" height="30.614">
								  <defs>
								    <path id="a" d="M0 0h23v30.667H0z"/>
								  </defs>
								  <clipPath id="b">
								    <use xlink:href="#a" overflow="visible"/>
								  </clipPath>
								  <path clip-path="url(#b)" d="M14.055 8.944V1.278l7.666 7.666h-7.666zm8.758-1.09L15.147.187A.637.637 0 0 0 14.696 0H.639A.64.64 0 0 0 0 .64v29.388a.64.64 0 0 0 .639.641h21.723a.64.64 0 0 0 .639-.641V8.307a.643.643 0 0 0-.188-.453"/>
								</svg>
					  	</a>
						</li>
				    <?php endforeach ?>
				  </ul>
				<?php endif ?>
			</div>
			<!--  agenda  -->
			<?php if(!kirby()->request()->ajax()):?>
				<?php if($page->events()->isNotEmpty()): ?>
					<ul class="dates">
						<h3> Prochaines dates</h3>
					  <?php foreach($page->events()->toStructure() as $dates): ?>
					  <li>
					  	<?php 
					  		$from = $dates->datestart();
			  				$to = $dates->dateend();
			  				$newDateFrom = date("d-m-Y", strtotime($from));
			  				$newDateTo = date("d-m-Y", strtotime($to));
			  				$fromDay =  date("d", strtotime($from));
			  				$fromMonth = date("m", strtotime($from));
			  				$fromYear = date("Y", strtotime($from));
			  				$toDay = date("d", strtotime($to));
			  				$toMonth = date("m", strtotime($to));
			  				$toYear = date("Y", strtotime($to));
					  	?>
					  	<?php if($newDateFrom == $newDateTo):?>
					  		<h3><?php echo $fromDay ?>/<?php echo $fromMonth ?>/<?php echo $fromYear ?></h3>
					    <?php else:?>
					    		<h3>Du <?php echo $fromDay ?>/<?php echo $fromMonth ?>/<?php echo $fromYear ?><br> Au <?php echo $toDay ?>/<?php echo $toMonth ?>/<?php echo $toYear ?></h3>
					    <?php endif; ?>
					    <p>— <?php echo $dates->eventtitle->html()?></p>
					    <div class="date-link">
								<a href="<?php echo $dates->link()?>" title="S'inscire" target="_blanks">S'inscire</a>
					    </div>
					  </li>
					  <?php endforeach ?>
					</ul>
				<?php endif; ?>
			<?php endif; ?>
			<!--  fin agenda  -->
		</div>
		<div class="main-text <?php if(!kirby()->request()->ajax()):?>col-xs-5<?php else:?>col-xs-8 col-xs-offset-2<?php endif?>">
			<div class="inner-content">
				<?php echo $page->text()->kt()?>
			</div>
		</div>
		<?php if(!kirby()->request()->ajax()):?>
			<div class="page-navigation col-xs-5 col-xs-offset-4">
				<?php if($page->prev() != null):?>
					<a href="<?php echo $page->prev()->url()?>" title="<?php echo $page->prev()->title()?>"><		FORMATION PRÉCÉDENTE</a>
				<?php endif?>
				<?php if($page->next() != null):?>
					<a href="<?php echo $page->next()->url()?>" title="<?php echo $page->next()->title()?>">FORMATION SUIVANTE    ></a>
				<?php endif?>
			</div>
		<?php endif?>
	</div>

	
</main>


<?php snippet('footer') ?>