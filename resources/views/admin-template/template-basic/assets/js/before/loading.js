'use strict'

const $theme = localStorage.getItem('theme')
$('html').addClass($theme)

$('.main-panel.page-loading').remove();
