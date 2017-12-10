<?php if(!defined('KIRBY')) exit ?>

title: Page
pages: false
files: true
fields:
  title:
    label: Titre
    type:  text
  actus:
    label: Afficher cette page dans le carroussel sur la page d'accueil ? 
    type: radio
    default: non
    options:
      oui: oui
      non: non
  cover: 
    label: Image de couverture
    type: selector
    mode: single
    sort: filename
    autoselect: first
    required: false
    types:
      - image
  descripton: 
    label: Description
    type: markdown
  period: 
    label: Durée du stage
    type: text
  cost: 
    label: Tarif
    type: text
  number: 
    label: Nombre de places
    type: text
  prerequisite:
    label: Prérequis
    type: markdown
  mail: 
    label: Mail pour renseignements
    type: email
  files: 
    label: Fichiers d'inscription
    type: selector
    mode: multiple
    sort: filename
  events:
    label: Prochaines dates
    type: structure
    entry: >
      {{eventtitle}}<br />
      {{datestart}} — {{dateend}}<br />
      {{link}} {{linkExt}}
    fields:
      eventtitle:
        label: Titre
        type: text
      datestart:
        label: Date de début
        type: date
      dateend:
        label: Date de fin
        type: date
      link:
        label: Lien vers le formulaire d'inscription
        type: url
  text:
    label: Texte
    type:  markdown

