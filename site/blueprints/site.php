<?php if(!defined('KIRBY')) exit ?>

title: Site
pages: 
  template: 
    - default
    - menuelement
    - team
    - blog
    - calendar


fields:
  siteSettings:
    label: Paramètres du site
    type:  headline
  title:
    label: Titre
    type:  title
  logo:
    label: Logo
    type: selector
    mode: single
    sort: filename
    autoselect: first
    required: false
    types:
      - image
    help: Ajouter le logo à afficher dans le header du site
  author:
    label: Auteur(s)
    type:  text
  description:
    label: Description
    type:  textarea
  keywords:
    label: Mots-Clés
    type:  tags
  socialNetworkSettings:
    label: Paramètres de Réseaux Sociaux
    type:  headline
  ogimage:
    label: Thumbnail du Site
    type:  url
    help:  URL de l'image qui va représenter le site sur les réseaux sociaux
  socialnetworks:
    label: Réseaux Sociaux
    type:  structure
    entry: >
      <span class="fa-stack fa-lg">
        <i class="fa fa-square fa-stack-2x"></i>
        <i class="fa fa-{{icon}} fa-stack-1x fa-inverse"></i>
      </span> {{link}}</i>
    fields:
      icon:
        label: Icône
        type:  text
        width: 1/2
        icon:  share-alt
      link:
        label: Lien
        type:  text
        width: 1/2
        icon:  link
    help: Aller sur <a href="http://fontawesome.io/icons/" target="_blank">http://fontawesome.io/icons/</a> pour trouver l'icône à utilise.
