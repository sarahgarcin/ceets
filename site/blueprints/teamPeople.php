<?php if(!defined('KIRBY')) exit ?>

title: Personne
pages: false
files: true
fields:
  title:
    label: Prénom / Nom
    type:  text
  cover: 
    label: Photo
    type: selector
    mode: single
    sort: filename
    autoselect: first
    types:
      - image
  position:
    label: Poste
    type:  text
  text:
    label: Texte
    type:  markdown

