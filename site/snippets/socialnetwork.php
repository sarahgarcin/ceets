<?php if($site->socialnetworks()->isNotEmpty()): ?>
	<div class="social-network row end-xs">
		<ul class='row'>
		<?php foreach($site->socialnetworks()->toStructure() as $socialnetwork): ?>
			<li class="col-xs">
				<a href="<?php echo $socialnetwork->link() ?>" itemprop="url">
					<i class="fa <?php echo $socialnetwork->icon()->html() ?>" aria-hidden="true"></i>
		    </a>
			</li>
		<?php endforeach ?>
		</ul>
	</div>
<?php endif ?>