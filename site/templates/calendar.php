<?php snippet('head') ?>
<?php snippet('header') ?>

<?php $mois = ['Janvier', 'Février', 'Mars', 'Avril', 'Mai', 'Juin', 'Juillet', 'Août', 'Septembre', 'Octobre', 'Novembre', 'Décembre'];?>

<?php	
	$i = 0;
	$currentTime = date('Ymd');

	foreach($projets as $projet):
		$project = $site->page($projet);

		$url = $project->url();

		if($project->events()->isNotEmpty()):
			foreach($project->events()->toStructure() as $dates):
				$i++;
				$from = $dates->datestart();
				$to = $dates->dateend();
				$newDateFrom = date("d-m-Y", strtotime($from));
				$newDateTo = date("d-m-Y", strtotime($to));
				$fromDay =  date("d", strtotime($from));
				$fromMonth = $mois[date("n", strtotime($from))-1];
				$fromYear = date("Y", strtotime($from));
				$toDay = date("d", strtotime($to));
				$toMonth = $mois[date("n", strtotime($to))-1];
				$toYear = date("Y", strtotime($to));

				$array[$i]['datestart'] = date("Ymd", strtotime($from));
    		$array[$i]['dateend'] = date("Ymd", strtotime($to));

    		$array[$i]['fromDay'] = $fromDay;
		    $array[$i]['fromMonth'] = $fromMonth;
		    $array[$i]['fromYear'] = $fromYear;
		    $array[$i]['toDay'] = $toDay;
		    $array[$i]['toMonth'] = $toMonth;
		    $array[$i]['toYear'] = $toYear;
				
				$array[$i]['niveau'] = $project->title();
				$array[$i]['lieu'] = $dates->eventtitle();
				$array[$i]['prix'] = $project->cost();
				$array[$i]['url'] = $url;
		    
		    $projectTime = date("Ymd", strtotime($from));
    		$projectTimeEnd = date("Ymd", strtotime($to));
				if($currentTime > $projectTime && $currentTime > $projectTimeEnd){
					unset($array[$i]);
				}

			endforeach;
		endif;
	endforeach;

	usort($array, function($a, $b) {
	  return $a['datestart'] - $b['datestart'];
	});
?>

<main class="wrap row center-xs calendar">
	<div class="col-xs-8">
		<?php snippet('pageheader') ?>
	</div>
	<div class="page-content start-xs col-xs-12">
		<div class="filters col-xs-offset-2 col-xs-8">
			<h3>Trier par</h3>
			<div class="row">	
				<div class="filter col-xs-4">
					<span>Date</span>
				</div>
				<div class="filter col-xs-2">
					<span>Niveau</span>
				</div>
				<div class="filter col-xs-3">
					<span>Lieu</span>
				</div>
				<div class="filter col-xs-1">
					<span>Prix</span>
				</div>
			</div>
		</div>
		<ul class="liste-dates col-xs-8 col-xs-offset-2">
			<?php foreach($array as $date):?>
				<li>
					<div class="date-wrapper row" data-target = <?php echo $date['url'] ?>>
						<div class="date-calendar col-xs-4">
							<?php if($date["datestart"] == $date["dateend"]):?>		
								<span class="date day"><?php echo $date['fromDay'] ?></span>				
								<span class="date month"><?php echo $date['fromMonth'] ?></span>
								<span class="date year"><?php echo $date['fromYear'] ?></span>
							<?php else:?>
								<?php if($date['fromMonth'] == $date['toMonth']):?>
									<span><?php echo $date['fromDay'] ?></span>
									<span> - <?php echo $date['toDay'] ?></span>
									<span class="date"><?php echo $date['fromMonth'] ?></span>
									<span class="date"><?php echo $date['fromYear']  ?></span>
								<?php else: ?>
									<span><?php echo $date['fromDay'] ?></span>
									<span class="date"><?php echo $date['fromMonth'] ?></span>
									<span> - <?php echo $date['toDay'] ?></span>
									<span class="date"><?php echo $date['toMonth'] ?></span>
									<span class="date"><?php echo $date['fromYear'] ?></span>
								<?php endif?>
							<?php endif; ?>
							
						</div>
						<div class="niveau-calendar col-xs-2">
							<span><?php echo $date['niveau'] ?></span>
						</div>
						<div class="lieu-calendar col-xs-3">
							<span><?php echo $date['lieu'] ?></span>
						</div>
						<div class="prix-calendar col-xs-1">
							<span><?php echo $date['prix'] ?></span>
						</div>
						<div class="reservation-calendar col-xs-2">
							<span>Réserver ce stage</span>
						</div>
					</div>
					<div class="loadPage">
				</li>
			<?php endforeach ?>
		</ul>
	</div>

	
</main>


<?php snippet('footer') ?>