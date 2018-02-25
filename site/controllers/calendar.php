<?php
return function($site, $pages, $page) {

  // fetch the projects
  $projets = $site->index()->filterBy('template', 'stage');

	// Return the list of projetsTags and tags to template
  	return compact('projets');
};
?>