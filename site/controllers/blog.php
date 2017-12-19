<?php
return function($site, $pages, $page) {

  // fetch the projects
  $articles = $site->index()->find('journal')->children()->visible()->flip();

  // fetch all tags used in projects. pluck($field, 'separator', unique)
  $tags = $articles->pluck('type', ',', true);

  // add the tag filter if there is a tag in the url
	if($tag = param('tag')) {
	  $articles = $articles->filterBy('type', $tag, ',');
	}

	// Return the list of articles and tags to template
  	return compact('articles', 'tags');
};
?>