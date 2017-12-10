<?php if(!defined('KIRBY')) exit ?>

title: Calendrier
pages: false
files: true
fields:
  title:
    label: Titre
    type:  text
  cover: 
    label: Image de couverture
    type: selector
    mode: single
    sort: filename
    autoselect: first
    types:
      - image
  description:
    label: Description
    type:  markdown