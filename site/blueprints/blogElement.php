<?php if(!defined('KIRBY')) exit ?>

title: Article du journal
pages: false
files: true

fields:
  title:
    label: Titre
    type:  text
  type: 
    label: Type d'actualité
    type: radio
    options: 
      edito: Édito
      event: Évènement
      annonce: Compte-rendu de stage
  text:
    label: Texte
    type:  markdown

