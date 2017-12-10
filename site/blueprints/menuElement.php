<?php if(!defined('KIRBY')) exit ?>

title: Élément de menu
pages: default
files: false
fields:
  title:
    label: Titre
    type:  text
  submenu:
    label: Organisation des sous-menu
    type:  headline
  colonne1:
    label: Colonne 1
    type: multiselect
    required: true
    search: true
    options: children
  colonne2:
    label: Colonne 2
    type: multiselect
    required: true
    search: true
    options: children
  colonne3:
    label: Colonne 3
    type: multiselect
    required: true
    search: true
    options: children

