<?php $mois = ['Janvier', 'Février', 'Mars', 'Avril', 'Mai', 'Juin', 'Juillet', 'Août', 'Septembre', 'Octobre', 'Novembre', 'Décembre'];?>

<div class="journal start-xs">
	<div class="content"> 
		<h2 class="col-xs-offset-3"><?php echo $site->index()->find('journal')->title()->html()?></h2>
		<div class="tags col-xs-offset-3">
			<h3>Tags</h3>
				<ul class="no-padding">
					<li <?php //e(param('tag') == $tag, ' class="active"')?>>
				    <a href=<?php echo $page->url()?>>
				    	<span>Tout</span>
				    </a>
			    </li>
				  <?php foreach($tags as $tag): ?>
				  <li <?php e(param('tag') == $tag, ' class="active"') ?>>
				    <a href="<?php echo url($page->url().'/'.url::paramsToString(['tag' => $tag])) ?>" >
				      <?php if($tag == "edito"): ?>
				      	<span><?php echo "Édito";?></span>
				      <?php elseif($tag == "event"):?>
				      	<span><?php echo "Événements";?> </span>
				      <?php else:?>
				      	<span><?php echo "Compte-rendu";?></span>
				      <?php endif;?>
				    </a>
				  </li>
				  <?php endforeach ?>
			  </ul>
		</div>

		<div class="projet-content">
			<ul class="no-padding">
				<?php $articles = $articles->paginate(10) ?>
				<?php foreach($articles as $actu): ?>
					<li class="row">
						<div class="infos col-xs-2">
							<?php 
								$day =  $actu->modified('d');
				  			$month = $mois[$actu->modified('n') - 1];
				  			$year = $actu->modified('Y');;
							?>
							<div class="date-publi">
								<span><?php echo $day ?></span>
					    	<span><?php echo $month ?></span>
					    	<span><?php echo $year ?></span>
					    </div>
						</div>
						<div class="main-text col-xs-7 col-xs-offset-1">
							<h2><?php echo $actu->title()->html() ?></h2>
							<?php if(str::length($actu->text()) > 400): ?>
								<div class="resume">
									<?php echo str::excerpt($actu->text()->kirbytext(), 400, TRUE);?>
								</div>
								<div class="moretext">
									<?php echo $actu->text()->kirbytext() ?>
								</div>
								<a href="" class="morelink">▼</a>
							<?php else: ?>
								<?php echo $actu->text()->kirbytext() ?>
							<?php endif ?>
						</div>
					</li>
				<?php endforeach; ?>
			</ul>
		</div>
		<?php if($articles->pagination()->hasPages()): ?>
			<nav class="nav-blog small-12 medium-6 xlarge-5 medium-push-3">

			  <?php if($articles->pagination()->hasNextPage()): ?>
			  <a class="next" href="<?php echo $articles->pagination()->nextPageURL() ?>">&lsaquo; Articles précédents</a>
			  <?php endif ?>

			  <?php if($articles->pagination()->hasPrevPage()): ?>
			  <a class="prev" href="<?php echo $articles->pagination()->prevPageURL() ?>">Articles suivants &rsaquo;</a>
			  <?php endif ?>

			</nav>
		<?php endif ?>
		</div>
	</div>
</div>