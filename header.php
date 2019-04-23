<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package levelup
 */

?>
<!doctype html>
<html amp <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
    <script async src="https://cdn.ampproject.org/v0.js"></script>
	<?php do_action( 'levelup_head'); ?>
	<?php wp_head(); ?>
    <?php echo '<link rel="canonical" href="' . get_permalink() . '" />'; ?>
    <style amp-boilerplate>body{-webkit-animation:-amp-start 8s steps(1,end) 0s 1 normal both;-moz-animation:-amp-start 8s steps(1,end) 0s 1 normal both;-ms-animation:-amp-start 8s steps(1,end) 0s 1 normal both;animation:-amp-start 8s steps(1,end) 0s 1 normal both}@-webkit-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-moz-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-ms-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-o-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}</style><noscript><style amp-boilerplate>body{-webkit-animation:none;-moz-animation:none;-ms-animation:none;animation:none}</style></noscript>

<style amp-custom>
html {
	font-family: sans-serif;
	-webkit-text-size-adjust: 100%;
	-ms-text-size-adjust: 100%;
}

body {
	margin: 0;
}

article,
aside,
details,
figcaption,
figure,
footer,
header,
main,
menu,
nav,
section,
summary {
	display: block;
}

audio,
canvas,
progress,
video {
	display: inline-block;
	vertical-align: baseline;
}

audio:not([controls]) {
	display: none;
	height: 0;
}

[hidden],
template {
	display: none;
}

a {
	background-color: transparent;
	text-decoration: none;
}

a:active,
a:hover {
	outline: 0;
	text-decoration: none;
}

abbr[title] {
	border-bottom: 1px dotted;
}

b,
strong {
	font-weight: bold;
}

dfn {
	font-style: italic;
}

h1 {
	font-size: 2em;
	margin: 0.67em 0;
}

mark {
	background: #ff0;
	color: #000;
}

small {
	font-size: 80%;
}

sub,
sup {
	font-size: 75%;
	line-height: 0;
	position: relative;
	vertical-align: baseline;
}

sup {
	top: -0.5em;
}

sub {
	bottom: -0.25em;
}

img {
	border: 0;
}

svg:not(:root) {
	overflow: hidden;
}

figure {
	margin: 1em 40px;
}

hr {
	box-sizing: content-box;
	height: 0;
}

pre {
	overflow: auto;
}

code,
kbd,
pre,
samp {
	font-family: monospace, monospace;
	font-size: 1em;
}

button,
input,
optgroup,
select,
textarea {
	color: inherit;
	font: inherit;
	margin: 0;
}

button {
	overflow: visible;
}

button,
select {
	text-transform: none;
}

button,
html input[type="button"],
input[type="reset"],
input[type="submit"] {
	-webkit-appearance: button;
	cursor: pointer;
}

button[disabled],
html input[disabled] {
	cursor: default;
}

button::-moz-focus-inner,
input::-moz-focus-inner {
	border: 0;
	padding: 0;
}

input {
	line-height: normal;
}

input[type="checkbox"],
input[type="radio"] {
	box-sizing: border-box;
	padding: 0;
}

input[type="number"]::-webkit-inner-spin-button,
input[type="number"]::-webkit-outer-spin-button {
	height: auto;
}

input[type="search"]::-webkit-search-cancel-button,
input[type="search"]::-webkit-search-decoration {
	-webkit-appearance: none;
}

fieldset {
	border: 1px solid #c0c0c0;
	margin: 0 2px;
	padding: 0.35em 0.625em 0.75em;
}

legend {
	border: 0;
	padding: 0;
}

textarea {
	overflow: auto;
}

optgroup {
	font-weight: bold;
}

table {
	border-collapse: collapse;
	border-spacing: 0;
}

td,
th {
	padding: 0;
}

/*--------------------------------------------------------------
# Typography
--------------------------------------------------------------*/
body,
button,
input,
select,
optgroup,
textarea {
	color: #404040;
	font-family: sans-serif;
	font-size: 16px;
	font-size: 1rem;
	line-height: 1.5;
}

h1, h2, h3, h4, h5, h6 {
	clear: both;
}

p {
	margin-bottom: 1.5em;
}

dfn, cite, em, i {
	font-style: italic;
}

blockquote {
	margin: 0;
}

address {
	margin: 0 0 1.5em;
}

pre {
	background: #eee;
	font-family: "Courier 10 Pitch", Courier, monospace;
	font-size: 15px;
	font-size: 0.9375rem;
	line-height: 1.6;
	margin-bottom: 1.6em;
	max-width: 100%;
	overflow: auto;
	padding: 1.6em;
}

code, kbd, tt, var {
	font-family: Monaco, Consolas, "Andale Mono", "DejaVu Sans Mono", monospace;
	font-size: 15px;
	font-size: 0.9375rem;
}

abbr, acronym {
	border-bottom: 1px dotted #666;
	cursor: help;
}

mark, ins {
	background: #fff9c0;
	text-decoration: none;
}

big {
	font-size: 125%;
}

/*--------------------------------------------------------------
# Elements
--------------------------------------------------------------*/
html {
	box-sizing: border-box;
}

*,
*:before,
*:after {
	/* Inherit box-sizing to make it easier to change the property for components that leverage other behavior; see https://css-tricks.com/inheriting-box-sizing-probably-slightly-better-best-practice/ */
	box-sizing: inherit;
}

body {
	background: #fff;
	/* Fallback for when there is no custom background color defined. */
}

hr {
	background-color: #ccc;
	border: 0;
	height: 1px;
	margin-bottom: 1.5em;
}

ul, ol {
	margin: 0 0 1.5em 3em;
}

ul {
	list-style: disc;
}

ol {
	list-style: decimal;
}

li > ul,
li > ol {
	margin-bottom: 0;
	margin-left: 1.5em;
}

dt {
	font-weight: bold;
}

dd {
	margin: 0 1.5em 1.5em;
}

img {
	height: auto;
	/* Make sure images are scaled correctly. */
	max-width: 100%;
	/* Adhere to container width. */
}

figure {
	margin: 1em 0;
	/* Extra wide images within figure tags don't overflow the content area. */
}

table {
	margin: 0 0 1.5em;
	width: 100%;
}
html,body,div,span,object,iframe,h1,h2,h3,h4,h5,h6,p,blockquote,pre,abbr,address,cite,code,del,dfn,em,img,ins,kbd,q,samp,small,strong,sub,sup,var,b,i,dl,dt,dd,ol,ul,li,fieldset,form,label,legend,table,caption,tbody,tfoot,thead,tr,th,td,article,aside,canvas,details,figcaption,figure,footer,header,hgroup,menu,nav,section,summary,time,mark,audio,video{margin:0;padding:0;border:0;outline:0;font-size:100%;vertical-align:baseline;background:transparent}body{line-height:1}
/*--------------------------------------------------------------
# Forms
--------------------------------------------------------------*/
button,
input[type="button"],
input[type="reset"],
input[type="submit"] {
	border: 1px solid;
	border-color: #ccc #ccc #bbb;
	border-radius: 3px;
	background: #e6e6e6;
	color: rgba(0, 0, 0, 0.8);
	font-size: 12px;
	font-size: 0.75rem;
	line-height: 1;
	padding: .6em 1em .4em;
}

button:hover,
input[type="button"]:hover,
input[type="reset"]:hover,
input[type="submit"]:hover {
	border-color: #ccc #bbb #aaa;
}

button:active, button:focus,
input[type="button"]:active,
input[type="button"]:focus,
input[type="reset"]:active,
input[type="reset"]:focus,
input[type="submit"]:active,
input[type="submit"]:focus {
	border-color: #aaa #bbb #bbb;
}

input[type="text"],
input[type="email"],
input[type="url"],
input[type="password"],
input[type="search"],
input[type="number"],
input[type="tel"],
input[type="range"],
input[type="date"],
input[type="month"],
input[type="week"],
input[type="time"],
input[type="datetime"],
input[type="datetime-local"],
input[type="color"],
textarea {
	color: #666;
	border: 1px solid #ccc;
	border-radius: 3px;
	padding: 3px;
}

input[type="text"]:focus,
input[type="email"]:focus,
input[type="url"]:focus,
input[type="password"]:focus,
input[type="search"]:focus,
input[type="number"]:focus,
input[type="tel"]:focus,
input[type="range"]:focus,
input[type="date"]:focus,
input[type="month"]:focus,
input[type="week"]:focus,
input[type="time"]:focus,
input[type="datetime"]:focus,
input[type="datetime-local"]:focus,
input[type="color"]:focus,
textarea:focus {
	color: #111;
}

select {
	border: 1px solid #ccc;
}

textarea {
	width: 100%;
}

/*--------------------------------------------------------------
# Navigation
--------------------------------------------------------------*/
/*--------------------------------------------------------------
## Links
--------------------------------------------------------------*/
a {
	color: #005be2;
}

a:visited {
	color: #005be2;
}

a:hover, a:focus, a:active {
	color: #005be2;
}

a:focus {
	outline: thin dotted;
}

a:hover, a:active {
	outline: 0;
}

/*--------------------------------------------------------------
## Menus
--------------------------------------------------------------*/
.main-navigation {
	clear: both;
	display: block;
	float: left;
	width: 100%;
}

.main-navigation ul {
	display: none;
	list-style: none;
	margin: 0;
	padding-left: 0;
}

.main-navigation ul ul {
	box-shadow: 0 3px 3px rgba(0, 0, 0, 0.2);
	float: left;
	position: absolute;
	top: 100%;
	left: -999em;
	z-index: 99999;
}

.main-navigation ul ul ul {
	left: -999em;
	top: 0;
}

.main-navigation ul ul li:hover > ul,
.main-navigation ul ul li.focus > ul {
	left: 100%;
}

.main-navigation ul ul a {
	width: 200px;
}

.main-navigation ul li:hover > ul,
.main-navigation ul li.focus > ul {
	left: auto;
}

.main-navigation li {
	float: left;
	position: relative;
}

.main-navigation a {
	display: block;
	text-decoration: none;
}

/* Small menu. */
.menu-toggle,
.main-navigation.toggled ul {
	display: block;
}

@media screen and (min-width: 37.5em) {
	.menu-toggle {
		display: none;
	}
	.main-navigation ul {
		display: block;
	}
}

.site-main .comment-navigation, .site-main
.posts-navigation, .site-main
.post-navigation {
	margin: 0 0 1.5em;
	overflow: hidden;
}

.comment-navigation .nav-previous,
.posts-navigation .nav-previous,
.post-navigation .nav-previous {
	float: left;
	width: 50%;
}

.comment-navigation .nav-next,
.posts-navigation .nav-next,
.post-navigation .nav-next {
	float: right;
	text-align: right;
	width: 50%;
}

/*--------------------------------------------------------------
# Accessibility
--------------------------------------------------------------*/
/* Text meant only for screen readers. */
.screen-reader-text {
	border: 0;
	clip: rect(1px, 1px, 1px, 1px);
	clip-path: inset(50%);
	height: 1px;
	margin: -1px;
	overflow: hidden;
	padding: 0;
	position: absolute ;
	width: 1px;
	word-wrap: normal ; /* Many screen reader and browser combinations announce broken words as they would appear visually. */
}

.screen-reader-text:focus {
	background-color: #f1f1f1;
	border-radius: 3px;
	box-shadow: 0 0 2px 2px rgba(0, 0, 0, 0.6);
	clip: auto ;
	clip-path: none;
	color: #21759b;
	display: block;
	font-size: 14px;
	font-size: 0.875rem;
	font-weight: bold;
	height: auto;
	left: 5px;
	line-height: normal;
	padding: 15px 23px 14px;
	text-decoration: none;
	top: 5px;
	width: auto;
	z-index: 100000;
	/* Above WP toolbar. */
}

/* Do not show the outline on the skip link target. */
#content[tabindex="-1"]:focus {
	outline: 0;
}

/*--------------------------------------------------------------
# Alignments
--------------------------------------------------------------*/
.alignleft {
	display: inline;
	float: left;
	margin-right: 1.5em;
}

.alignright {
	display: inline;
	float: right;
	margin-left: 1.5em;
}

.aligncenter {
	clear: both;
	display: block;
	margin-left: auto;
	margin-right: auto;
}

/*--------------------------------------------------------------
# Clearings
--------------------------------------------------------------*/
.clear:before,
.clear:after,
.entry-content:before,
.entry-content:after,
.comment-content:before,
.comment-content:after,
.site-header:before,
.site-header:after,
.site-content:before,
.site-content:after,
.site-footer:before,
.site-footer:after {
	content: "";
	display: table;
	table-layout: fixed;
}

.clear:after,
.entry-content:after,
.comment-content:after,
.site-header:after,
.site-content:after,
.site-footer:after {
	clear: both;
}

/*--------------------------------------------------------------
# Widgets
--------------------------------------------------------------*/
.widget {
	margin: 0 0 1.5em;
	/* Make sure select elements fit in widgets. */
}

.widget select {
	max-width: 100%;
}

/*--------------------------------------------------------------
# Content
--------------------------------------------------------------*/
/*--------------------------------------------------------------
## Posts and pages
--------------------------------------------------------------*/
.sticky {
	display: block;
}

.hentry {
	margin: 0 0 1.5em;
}

.updated:not(.published) {
	display: none;
}

.page-content,
.entry-content,
.entry-summary {
	margin: 1.5em 0 0;
}

.page-links {
	clear: both;
	margin: 0 0 1.5em;
}

/*--------------------------------------------------------------
## Comments
--------------------------------------------------------------*/
.comment-content a {
	word-wrap: break-word;
}

.bypostauthor {
	display: block;
}

/*--------------------------------------------------------------
# Infinite scroll
--------------------------------------------------------------*/
/* Globally hidden elements when Infinite Scroll is supported and in use. */
.infinite-scroll .posts-navigation,
.infinite-scroll.neverending .site-footer {
	/* Theme Footer (when set to scrolling) */
	display: none;
}

/* When Infinite Scroll has reached its end we need to re-display elements that were hidden (via .neverending) before. */
.infinity-end.neverending .site-footer {
	display: block;
}

/*--------------------------------------------------------------
# Media
--------------------------------------------------------------*/
.page-content .wp-smiley,
.entry-content .wp-smiley,
.comment-content .wp-smiley {
	border: none;
	margin-bottom: 0;
	margin-top: 0;
	padding: 0;
}

/* Make sure embeds and iframes fit their containers. */
embed,
iframe,
object {
	max-width: 100%;
}

/* Make sure logo link wraps around logo image. */
.custom-logo-link {
	display: inline-block;
}

/*--------------------------------------------------------------
## Captions
--------------------------------------------------------------*/
.wp-caption {
	margin-bottom: 1.5em;
	max-width: 100%;
}

.wp-caption img[class*="wp-image-"] {
	display: block;
	margin-left: auto;
	margin-right: auto;
}

.wp-caption .wp-caption-text {
	margin: 0.8075em 0;
}

.wp-caption-text {
	text-align: center;
}

/*--------------------------------------------------------------
## Galleries
--------------------------------------------------------------*/
.gallery {
	margin-bottom: 1.5em;
}

.gallery-item {
	display: inline-block;
	text-align: center;
	vertical-align: top;
	width: 100%;
}

.gallery-columns-2 .gallery-item {
	max-width: 50%;
}

.gallery-columns-3 .gallery-item {
	max-width: 33.33%;
}

.gallery-columns-4 .gallery-item {
	max-width: 25%;
}

.gallery-columns-5 .gallery-item {
	max-width: 20%;
}

.gallery-columns-6 .gallery-item {
	max-width: 16.66%;
}

.gallery-columns-7 .gallery-item {
	max-width: 14.28%;
}

.gallery-columns-8 .gallery-item {
	max-width: 12.5%;
}

.gallery-columns-9 .gallery-item {
	max-width: 11.11%;
}

.gallery-caption {
	display: block;
}

/*** Container ***/
.container {
    max-width: 1100px;
    margin: 0 auto;
    padding: 0px 20px;
    background: #fff
}
/*** Font Family ***/
@font-face {
  font-family: 'Poppins';
  font-style: normal;
  font-weight: 300;
  src: local('Poppins Light'), local('Poppins-Light'), url('get_template_directory_uri() /fonts/Poppins-Light.ttf');
}
@font-face {
  font-family: 'Poppins';
  font-style: normal;
  font-weight: 400;
  src: local('Poppins Regular'), local('Poppins-Regular'), url('fonts/Poppins-Regular.ttf');
}
@font-face {
  font-family: 'Poppins';
  font-style: normal;
  font-weight: 500;
  src: local('Poppins Medium'), local('Poppins-Medium'), url('fonts/Poppins-Medium.ttf');
} 
@font-face {
  font-family: 'Poppins';
  font-style: normal;
  font-weight: 600;
  src: local('Poppins SemiBold'), local('Poppins-SemiBold'), url('fonts/Poppins-SemiBold.ttf'); 
}
@font-face {
  font-family: 'Poppins';
  font-style: normal;
  font-weight: 700;
  src: local('Poppins Bold'), local('Poppins-Bold'), url('fonts/Poppins-Bold.ttf'); 
}
/*** Font-icons ***/
@font-face {
  font-family: 'icomoon';
  src:  url('fonts/icomoon.eot?hw8sbw');
  src:  url('fonts/icomoon.eot?hw8sbw#iefix') format('embedded-opentype'),
    url('fonts/icomoon.ttf?hw8sbw') format('truetype'),
    url('fonts/icomoon.woff?hw8sbw') format('woff'),
    url('fonts/icomoon.svg?hw8sbw#icomoon') format('svg');
  font-weight: normal;
  font-style: normal;
}

[class^="icon-"], [class*=" icon-"] {
  /* use to prevent issues with browser extensions that change fonts */
  font-family: 'icomoon' ;
  speak: none;
  font-style: normal;
  font-weight: normal;
  font-variant: normal;
  text-transform: none;
  line-height: 1;

  /* Better Font Rendering =========== */
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
}

.icon-camera2:before {
  content: "\e916";
}
.icon-camera:before {
  content: "\e915";
}
.icon-angle-down:before {
  content: "\e903";
}
.icon-angle-up:before {
  content: "\e904";
}
.icon-angle-right:before {
  content: "\e905";
}
.icon-cross:before {
  content: "\e906";
}
.icon-close:before {
  content: "\e907";
}
.icon-menu:before {
  content: "\e900";
}
.icon-menu2:before {
  content: "\e902";
}
.icon-mail-envelope-closed:before {
  content: "\e908";
}
.icon-search2:before {
  content: "\e901";
}
.icon-whatsapp:before {
  content: "\e909";
}
.icon-brand:before {
  content: "\e909";
}
.icon-social:before {
  content: "\e909";
}
.icon-facebook:before {
  content: "\e90a";
  color: #3b5998;
}
.icon-facebook2:before {
  content: "\e917";
}
.icon-googleplus:before {
  content: "\e90b";
  color: #dc4e41;
}
.icon-linkedin:before {
  content: "\e90c";
  color: #0077b5;
}
.icon-linkedin2:before {
  content: "\e918";
}
.icon-odnoklassniki:before {
  content: "\e90d";
  color: #f4731c;
}
.icon-pinterest:before {
  content: "\e90e";
  color: #bd081c;
}
.icon-twitter:before {
  content: "\e90f";
  color: #1da1f2;
}
.icon-whatsapp2:before {
  content: "\e910";
  color: #25d366;
}
.icon-youtube:before {
  content: "\e911";
  color: #f00;
}

/*!
 * jquery-drawer v3.2. 
 */
.hamburger-menu .drawer-menu{
    margin-top: 30px;
    padding-left: 25px;
}
.hamburger-menu .drawer-menu h3{
    line-height: 1;
    font-size: 17px;
    width: 100%;
    color: #ff4422;
    text-align: left;
    text-transform: uppercase;
    margin-left: 0;
    letter-spacing: 1px;
}
.drawer-open {
    overflow: hidden
}
.drawer-nav {
    position: fixed;
    z-index: 2;
    top: 0;
    overflow: hidden;
    width: 20rem;
    height: 100%;
    border-right:none;
    color: #222;
    background-color: rgba(20, 20, 22, 0.9)
}
.drawer-menu {
    margin: 0;
    padding: 0;
    list-style: none
}
.drawer-menu-item {
    font-size: 1rem;
    display: block;
    padding: .75rem;
    text-decoration: none;
    color: #222
}
.drawer-menu-item:hover {
    text-decoration: underline;
    color: #555;
    background-color: transparent
}
.drawer-overlay {
    position: fixed;
    z-index: 1;
    top: 0;
    left: 0;
    display: none;
    width: 100%;
    height: 100%;
    background-color: rgba(0, 0, 0, .45)
}
.drawer-open .drawer-overlay {
    display: block
}
.drawer--left .drawer-nav {
    left: -25.25rem;
    -webkit-transition: left .6s cubic-bezier(.19, 1, .22, 1);
    transition: left .6s cubic-bezier(.19, 1, .22, 1)
}
.drawer--left .drawer-hamburger,
.drawer--left.drawer-open .drawer-nav,
.drawer--left.drawer-open .drawer-navbar .drawer-hamburger {
    left: 0;

}
.drawer--left.drawer-open .drawer-hamburger {
    left: 25.25rem
}
.drawer-hamburger {
  background-color: transparent;
  border: 0 none;
  box-sizing: content-box;
  display: block;
  height: 30px;
  line-height: 24px;
  margin-top:-6px;
  outline: 0 none;
  padding: 0;
  top: 0; 
  transform: translateZ(0px);
  transition: all 0.6s cubic-bezier(0.19, 1, 0.22, 1) 0s;
  width: 24px;
  z-index: 9;
}
.drawer-hamburger:hover {
    cursor: pointer;
    background-color: transparent
}
.drawer-hamburger-icon {
    position: relative;
    display: block;
    margin-top: 10px
}
.drawer-hamburger-icon,
.drawer-hamburger-icon:after,
.drawer-hamburger-icon:before {
    width: 100%;
    height: 2px;
    border-radius: 100px;
    -webkit-transition: all .6s cubic-bezier(.19, 1, .22, 1);
    transition: all .6s cubic-bezier(.19, 1, .22, 1);
    background-color: #505050;
}
.drawer-hamburger-icon:after,
.drawer-hamburger-icon:before {
    position: absolute;
    top: -7px;
    left: 0;
    content: " "
}
.drawer-hamburger-icon:after {
    top: 7px
}
.drawer-open .drawer-hamburger-icon {
    background-color: transparent
}
.drawer-open .drawer-hamburger-icon:after,
.drawer-open .drawer-hamburger-icon:before {
    top: 0
}
.drawer-open .drawer-hamburger-icon:before {
    /*-webkit-transform: rotate(45deg);
    transform: rotate(45deg)*/
    background-color: transparent;
}
.drawer-open .drawer-hamburger-icon:after {
   /* -webkit-transform: rotate(-45deg);
    transform: rotate(-45deg)*/
    background-color: transparent;
}
.sr-only {
    position: absolute;
    overflow: hidden;
    clip: rect(0, 0, 0, 0);
    width: 1px;
    height: 1px;
    margin: -1px;
    padding: 0;
    border: 0
}
.sr-only-focusable:active,
.sr-only-focusable:focus {
    position: static;
    overflow: visible;
    clip: auto;
    width: auto;
    height: auto;
    margin: 0
}
.drawer--sidebar,
.drawer--sidebar .drawer-contents {
    background-color: #fff
} 
.drawer-navbar--fixed {
    position: fixed
}
.drawer-navbar-header {
    position: relative;
    z-index: 3;
    box-sizing: border-box;
    width: 100%;
    height: 3.75rem;
    padding: 0 .75rem;
    text-align: center
}
.drawer-navbar .drawer-nav {
    padding-top: 3.75rem
}

.drawer-navbar .drawer-menu {
    padding-bottom: 7.5rem
}
.drawer--left.drawer-open .drawer-nav{
	width:80%;
}
.icon-close{
	z-index: 99999;
	font-size: 16px;
    color: rgba(255, 255, 255, 0.8);
	display: inline-block;
    position: absolute;
    right: 15px;
    top: 10px;
    cursor: pointer;
}
/*** Light Box ***/
.h-ic a:after, .h-ic a:before{    
    color:rgba(51,51,51,1);
    font-family: 'icomoon';
    font-size: 23px;
    font-weight: 600;
}
.h-ic a{
	text-decoration: none;
}
.lb-t{
    position: fixed;
    top: -50px;
    width: 100%;
    width: 100%;
    opacity: 0;
    -webkit-transition: opacity .5s ease-in-out;
    transition: opacity .5s ease-in-out;
    overflow: hidden;
    z-index:9;
    background: rgba(20, 20, 22, 0.9);
}
.lb-t img {
    margin: auto;
    position: absolute;
    top: 0;
    left:0;
    right:0;
    bottom: 0;
    max-height: 0%;
    max-width: 0%;
    border: 3px solid white;
    box-shadow: 0px 0px 8px rgba(0,0,0,.3);
    box-sizing: border-box;
    -webkit-transition: .5s ease-in-out;
    transition: .5s ease-in-out;
}
a.lb-x {
    display: block;
    width:50px;
    height:50px;
    box-sizing: border-box;
    background: tranparent;
    color: black;
    text-decoration: none;
    position: absolute;
    top: -80px;
    right: 0;
    -webkit-transition: .5s ease-in-out;
    transition: .5s ease-in-out;
}
a.lb-x:after {
    content: "\e907";
    font-family: 'icomoon';
    font-size: 30px;
    color: rgba(255, 255, 255, 0.8);
    line-height: 0;
    display: block;
    text-indent: 1px;
}
.lb-t:target {
    opacity: 1;
    top: 0;
    bottom: 0;
    left:0;
    z-index:1;
}
.lb-t:target img {
    max-height: 100%;
    max-width: 100%;
}
.lb-t:target a.lb-x {
    top: 25px;
}
.lb-btn form{
    position: absolute;
    top: 200px;
    left: 0;
    right: 0;
    margin: 0 auto;
    text-align: center;
}
.lb-btn form .search-submit {
    cursor: pointer;
    background:transparent;
    border: none;
    display: inline-block;
}
.search-overlay:after{
	content: "\e901";
	font-family: 'icomoon';
	cursor: pointer;
	font-size: 24px;
    color: rgba(255, 255, 255, 0.8);
    position: relative;
    right: 30px;
    top: 4px;
}
.lb-btn .search-field {
    padding: 10px;
    background: transparent;
    border: none;
    border-bottom: 1px solid #504c4c;
    color: #fff;
    width:80%;
}
.lb-btn .search-field:focus, .lb-btn .search-field:hover{
	color:#fff;
}
/*** Transitions ***/
body a, .rp-list{
    transition: all 0.3s ease-in-out 0s;
    -webkit-transition: all 0.3s ease-in-out 0s;
}
/** Header **/

.head{
    width: 100%;
    clear: both;
    display: flex;
    padding:10px 0px;
    min-height: 60px;
}
.hamburger-menu{
	display: flex;
    align-items: center;
}
.logo{
    flex-grow: 1;
    text-align: center;
}
.logo a h1{
    margin: 0;
    font-size: 18px;
    line-height: 23px;
    color: #333;
}
.logo span{
    font-size: 12px;
}
.h-srch{
	 align-items: center;
    display: flex;
}
/*** Primary Menu ***/
.hamburger-menu ul li a{
  color:#fff;
  text-decoration: none;
  font-size: 15px;
  font-weight: 500;
  padding: 10px 0px;
  display: block;
}
.hamburger-menu ul{
	margin:0;
	padding:0;
}
.hamburger-menu li {
    position: relative;
    display: block;
}
.hamburger-menu li .sub-menu{
  padding-left:15px;
}
.hamburger-menu  li.menu-item-has-children>ul>li {
    padding-left: 10px;
}
.hamburger-menu li.menu-item-has-children ul li a {
    font-size: 13px;
}
.hamburger-menu li.menu-item-has-children ul {
    display: none;
}
.hamburger-menu li.menu-item-has-children:hover>ul {
    display: block;
    padding: 0;
    margin: 0;
}
.hamburger-menu ul li.menu-item-has-children:after{
    content: "\e903";
    font-family: 'icomoon';
    background-size: 16px;
    display: inline-block;
    background: rgba(255, 255, 255, 0.29);
    top: 5px;
    right:13px;
    padding: 3px 8px;
    font-size:16px;
    border-radius:100%;
    color:#fff;
    position: absolute;
}
.hamburger-menu ul li ul li.menu-item-has-children:after{
   right:24px;
}
.hamburger-menu ul li ul li.menu-item-has-children:hover:after{
    right:24px;
}
.hamburger-menu ul li.menu-item-has-children:hover:after{
    -webkit-transform:rotate(180deg);
    transform:rotate(180deg);
    top:4px;
    right:13px;
}
.hamburger-menu .levelup-menu li:hover li:hover>a{background:transparent;}
.hamburger-menu li:hover a {background: transparent none repeat scroll 0 0;}

/*** Primary Menu ***/
.p-m-fl {
    width: 100%;
    background: linear-gradient(45deg,#48525c,#29323c);
    display: inline-block;
}
.p-menu {
    width: 100%;
    text-align: center;
    margin: 0px auto;
    max-width: 1100px;
    overflow-x: inherit;
    overflow-y: hidden;
    white-space: nowrap;
    padding: 14px 25px 12px 25px;
}
.parallax-item .scroll-arrow {
   display: none ;
 }
#primary-menu{
	list-style-type: none;
    margin: 0;
    padding: 0;
}
.p-menu ul li {
    display: inline-block;
    margin-right: 21px;
    font-size: 12px;
    line-height: 20px;
    letter-spacing: 1px;
    font-weight: 400;
}
.p-menu ul li a {
    padding: 0;
    color: #fff;
    text-transform: uppercase;
}
.p-menu ul li .sub-menu{
	display: none;
}

/*** index ***/
.site-main{
   margin-top: 20px;
    clear: both;
    width: 100%;
    overflow: hidden;
}
.loop-wrapper{
	display: flex;
    flex-wrap: wrap;
    margin: -15px;
}
.fsp{
    margin: 15px 15px 25px 15px;
    flex-basis: calc(33.33% - 30px);
}
.fsp-cnt{
    margin-top:10px;
}
.fsp-img{
	line-height: 0;
}
.fsp-img a{
    display:block;
    line-height:0;
}
.fsp h2{
    margin: 5px 0px 5px 0px;
    font-size: 20px;
    line-height: 1.4;
    font-weight: 600;
    padding: 0;
}
.fsp h2 a{
	color:#191919;
}
.fsp-cnt p{
    color:#444;
    font-size:13px;
    line-height:20px;
    letter-spacing: 0.10px;
    margin:0;
}
.category-lists a{
	display: inline-block;
    list-style-type: none;
    margin-right: 10px;
    font-size: 10px;
    font-weight: 500;
    letter-spacing: 1.5px;
    color: #555;
    text-transform: uppercase;
}
.category-lists a:hover{
	color: #005be2;
}
.posted-dt{
    font-size:11px;
    color:#999;
    margin: 8px 0px 0px 0px;
    display: inline-flex;
}
.fsp:hover h2 a {
    color: #005be2;
}
/*** pagination ***/
.pagination{
	width:100%;
	display: inline-block;
	clear: both;
	margin: 0px 15px 30px 15px;

}
.pagination-prev{
	float: left;
}
.pagination-next{
	float: right;
}
.pagination-next a, .pagination-prev a{
	background: #005be2;
    padding: 12px 22px 12px 25px;
    color: #fff;
    line-height: 1;
    border-radius: 46px;
    font-size: 14px;
    display: inline-block;
}
.also_see{
	width: 100%;
    text-align: center;
    display: inline-block;
    margin: 0;
    font-size: 18px;
    color: #444;
    font-weight: 500;
    margin-bottom: 10px;
}
.page-links a{
	color: #005be2;
    padding: 0px 10px;
}
.content-pt .navigation {margin: 0;}
/*** Footer ***/
.site-footer{
	display: inline-block;
	width:100%;
	clear: both;
    margin: 50px 0 0 0;
}
.site-footer .container{
    background: transparent
}
.footer-widgets{
    padding: 70px 0px;
    width: 100%;
    color: #fff;
    display: inline-block;
    background: linear-gradient(45deg,#48525c,#29323c);
}
.site-info{
    padding: 36px 0px;
    width: 100%;
    color: #fff;
    display: inline-block;
    background: linear-gradient(45deg,#48525c,#29323c);
}
.f-w{
	display: inline-flex;
    width: 100%;
    flex-wrap: wrap;
}
.w-bl {
    margin-left: 0;
    display: flex;
    flex-direction: column;
    position: relative;
    -webkit-box-flex: 1;
    flex: 1 0 22%;
    margin: 0 15px;
}
.w-bl .search-field{
	width:70%;
}
.w-bl .search-submit{
    padding: 11px 11px 7px 12px;
}
.w-bl h4 {
    color: #fff;
    font-size: 16px;
    font-weight: 600;
    margin: 0px 0px 20px;
    letter-spacing: 1px;
    padding-bottom: 4px;
}
.w-bl ul{
	margin: 0;
	padding:0;
}
.w-bl ul .children {
    margin-top: 10px;
    margin-left: 20px;
}
.w-bl ul li {
    font-size: 14px;
    line-height: 1.5;
    margin-bottom: 10px;
    list-style-position: inside;
    list-style-type: circle;
}
.w-bl ul li a{
    COLOR: #F1F1F1;
}
.footer-menu {
	text-align: center;
    width:100%;
    margin-bottom: 25px;
}
.footer-menu ul{
	margin:0;
	padding: 0;
}
.footer-menu ul li {
    display: inline-block;
    margin-right: 20px;
}
.footer-menu ul li a {
    padding: 0;
    font-size: 16px;
    color: #fff;
}
.footer-menu  ul > li:hover a {
    color: #005be2;
}
.rr{
	display: inline-block;
	width: 100%;
	text-align: center;
	font-size: 13px;
    color: #fff;
}
.rr a{
        color: #fff
}
/*** Archives ***/
.page-header{
	margin-bottom: 30px;
}
.archive-title {
    margin:0px;
    font-size: 15px;
    font-weight: 600;
}
.archive-description{
	font-size: 14px;
    margin: 8px 0px 0px 0px;
    color: #333;
    line-height: 20px;
}
.archive-description p{
	margin:0;
}
/*** Single page ***/
.breadcrumbs{
    border-bottom: 1px solid #eee;
    padding-bottom: 10px;
    display: inline-block;
    width:100%;
    font-size: 10px;
    text-transform: uppercase;
}
#br-crumbs {
    margin: 0;
    color: #999;
    letter-spacing: 1px;
}
#br-crumbs a{
	color: #999;
}
#br-crumbs a:hover{
	color: #005be2;
}
.breadcrumb_last{
	font-weight: 500;
}
.cat-list{
	margin-top: 15px;
	width:100%;
	display: inline-block;
}
.cat-list a{
	color: #005be2;
    font-size: 12px;
    font-weight: 500;
    text-transform: uppercase;
}
.cat-list a:after {
    content: "/";
    display: inline-block;
    margin: 0px 5px 0px 5px;
    position: relative;
    top: 1px;
    color: rgba(0, 0, 0, 0.25);
}
.cat-list a:last-child:after{
	display: none;
}
.entry-title {
    font-size: 48px;
    line-height: 1.2;
    color: #333;
    margin: 0;
    padding-top: 15px;
}
.post-img{
	width:100%;
	display: inline-block;
	margin-top: 33px;
}
.post-img img{
	width:100%;
	height: auto;
}
.post-img .featured_caption {
    width: 1100px;
    text-align: left;
    margin: 0 auto;
    color: #a1a1a1;
    font-size: 14px;
    line-height: 20px;
    font-weight: 500;
    border-bottom: 1px solid #ccc;
    padding: 15px 0px;
}
.post-img .featured_caption:before {
    content: "\e916";
    font-family: 'icomoon';
    position: relative;
    top: 4px;
    opacity: 0.4;
    font-size: 24px;
    margin-right: 8px;
}
.entry-content{
    display: flex;
    width: 100%;
    margin-top:40px;
}
.right-part{
    width: 72%;
    margin-left: 60px;
    flex-direction: column;
    justify-content: space-around;
    order: 1;
}
.left-part{
    display: flex;
    flex-direction: column;
    flex: 1 0 20%;
    order: 0;
}
.content-pt{
    margin: 0 0 30px 0;
}
.social-share-btns, .post-athr, .tgs, .pt-dt{
    padding-bottom: 20px;
    border-bottom: 1px dotted #ccc;
}
.social-share-btns span, .post-athr .pb-txt, .tgs span, .pt-dt, .related-posts h3, .recent-post h3{
    text-transform: uppercase;
    font-size: 12px;
    color: #666;
    font-weight: 400;
    margin-bottom: 12px;
    display: block;
}
.social-share-btns ul{
	padding:0;
	margin:0;
}
.social-share-btns ul li{
	list-style-type: none;
	display: inline-block;
	margin:0px 10px 10px 0px;
}
.social-share-btns ul li a{
	padding:5px 7px;
	font-size: 16px;
	display: inline-block;
	border-radius: 2px;
}
.social-share-btns ul li a:before{
    color: #fff;
    display: inline-block;
}
.ic-1{
	background: #1da1f2;
}
.ic-2{
	background: #3b5998;
}
.ic-3{
	background: #bd081c;
}
.ic-4{
	background: #dd4b39;
}
.ic-5{
	background: #0077b5;
}
.content-pt p{
	font-size: 18px;
    color: #000;
    line-height: 1.7;
}
.content-pt a{
	margin:10px 0px;
	display: inline-block;
}
.content-pt blockquote p {
    font-size: 34px;
    line-height: 1.4;
    font-weight: 700;
    position: relative;
    padding: 30px 0 0 0;
    margin-bottom: 20px;
}
blockquote p:last-child {
    margin-bottom: 0;
}
blockquote p:before {
    content: "";
    border-top: 8px solid #000;
    width: 115px;
    line-height: 40px;
    display: inline-block;
    position: absolute;
    top: 0;
}
.post-athr, .tgs, .pt-dt {
    margin-top: 20px;
}
.post-athr .pb-athr{
	display: block;
	font-size: 15px;
    color: #005be2;
    font-weight: 400;
    line-height: 1.5;
}
.tgs a:after {
    content: "/";
    display: inline-block;
    padding: 0px 10px;
    position: relative;
    top: -1px;
    color: #ccc;
    font-size: 12px;
}
.tgs a:last-child:after{
	display: none;
}
.pt-dt .posted-dt{
	margin: 0;
}
.post-edit-link{
	float: right;
}
.post-author-info {
    padding: 20px 20px;
    border-radius: 0;
    background: #f9f9f9;
    border: 1px solid #ececec;
    display: inline-block;
    width: 100%;
}
.post-aurhor-image{
    float: left;
}
.post-aurhor-image img {
    border-radius: 50%;
    margin: 0px 12px 10px 0px;
    display: block;
    width: 60px;
    height:60px;
}
.post-author-desc p {
    margin: 0;
    font-size: 13px;
    line-height: 20px;
    color: #666;
    padding-top: 4px;
}
.nav-links {
    margin-top: 30px ;
    border-top: 1px dotted #ccc;
    padding: 20px 5px 0px 5px;
    font-size: 16px;
    line-height: 24px;
    font-weight: 400;
}
.nav-links .nav-next {
    float: right;
    width: 45%;
    text-align: right;
    position: relative;
    margin-top: 10px;
}
.nav-links .nav-previous{
	float: left;
    width: 45%;
    position: relative;
    margin-top: 10px;
}
.nav-links .nav-next a, .nav-links .nav-previous a {
    color: #333;
    position: relative;
}
.nav-links .nav-next a:hover, .nav-links .nav-previous a:hover {
	color:#005be2;
}
.nav-links .nav-previous:after {
    border-left: 1px dotted #ccc;
    content: "";
    height: calc(100% - -10px);
    right: -50px;
    position: absolute;
    top: 50%;
    transform: translate(0px, -50%);
    width: 2px;
}
.nav-links .nav-previous:before {
    content: "PREVIOUS";
    position: absolute;
    top: -25px;
    font-size: 12px;
    color: #666;
    display: block;
    font-weight: 400;
}
.nav-links .nav-next:before {
	content: "NEXT";
    position: absolute;
    top: -25px;
    right:0;
    font-size: 12px;
    color: #666;
    display: block;
    font-weight: 400;
}
.rp-list{
	margin-bottom:24px;
}
.rp-list:hover {
    opacity: 0.7;
}
.rp-list:hover h4{
	color:#005be2;
}
.rp-img a{
	line-height: 0;
	display: block;
}
.rp-tlt{
	margin-top:10px;
}
.rp-tlt a{
	color:#333;
}
.rp-tlt h4{
	margin: 0;
    font-weight: 400;
}
/*** Recent posts ***/
.recentpublish-posts{
	display: flex;
    -ms-flex-wrap: wrap;
    flex-wrap: wrap;
    margin: -15px;
}
/*** Comments ***/
.comments-title, .says{
	display: none;
}
.cmts {
    width: 100%;
    display: inline-block;
    clear: both;
    margin: 40px 0px;
}
.comment-list{
	padding: 0;
	margin:0;
}
.cmts .view-cmts{
    margin: 0;
    font-size: 12px;
    padding-bottom: 6px;
    border-bottom: 1px solid #eee;
    font-weight: 400;
    letter-spacing: 0.5px;
    text-transform: uppercase;
    color: #444;
    display: block;
}
.cmts .view-cmts:after {
    content: "";
    display: block;
    width: 115px;
    border-bottom: 1px solid #005be2;
    position: relative;
    top: 7px;
}
.cmts ol li {
    list-style: none;
    margin-bottom: 20px;
    padding-bottom: 20px;
    border-bottom: 1px solid #eee;
}
.comments-area{
	margin-top: 16px;
}
.comment-list .comment-author img {
    float: left;
    margin-right: 10px;
    border-radius: 50%;
}
.cmts .comment-author.vcard .fn,  .cmts .comment-author.vcard .fn a{
    font-size: 12px;
    font-weight: 500;
    color: #333;
}
.cmts .comment-metadata {
    font-size: 11px;
    margin-top: 1px;
}
.cmts .comment-metadata a {
    color: #999;
}
.comment-content {
    margin-top: 6px;
    width: 100%;
    display: inline-block;
}
.comment-content p {
    font-size: 14px;
    color: #333;
    line-height: 22px;
    font-weight: 400;
    margin: 0;
}
.comments-area ol li:hover .comment-meta .comment-metadata a {
    color: #005be2;
}
.cmts .comments-area ol .children {
    margin: 16px 0px 0px 30px;
    padding: 16px 0px 0px 0px;
    border-top: 1px solid #eee;
}
.cmts .comments-area ol .parent{
	border-bottom:none;
	margin:0;
	padding:0;
}
.reply{
	text-align: right;
    font-size: 12px;
}
.reply a{
	color:#333;
}
.reply a:hover{
	color:#005be2;
}
.comment-respond #submit:hover {
    box-shadow: 1px 1px 10px rgba(0,0,0,.4);
}
.form-submit .submit {
    background-color: #005be2;
    color: #fff;
    font-size: 14px;
    font-weight: 500;
    letter-spacing: 1px;
    line-height: 1;
    text-transform: uppercase;
    border-radius: 2px;
    padding: 18px 40px 16px 40px;
    border: 0;
    transition: all .3s ease-in-out 0s;
    -webkit-transition: all .3s ease-in-out 0s;
}
#respond{
	width: 100%;
    clear: both;
    background-color: #fbfbfb;
    padding: 50px;
    border: 1px solid #ebebeb;
    margin-top:30px;
}
#reply-title{
    font-size: 18px;
    font-weight: 600;
    line-height: 1;
    color: #005be2;
    margin-bottom: 15px;
}
#comment {
    border: 1px solid #e3e3e3;
    color: #444;
    font-size: 14px;
    line-height: 1.4;
    margin-bottom: 2px;
    min-height: 136px;
    padding: 20px 30px;
    resize: none;
    width: 100%;
    height: 185px;
}
#author, #email, #url{
	display: block;
	border: 1px solid #eee;
    border-radius: 0;
    color: #444;
    font-size: 13px;
    font-weight: 400;
    line-height: 33px;
    padding: 7px 10px 4px 18px;
    width: 100%;
}
.comment-respond label {
    display: block;
    padding: 25px 0 10px 0;
    font-size: 16px;
    color: #333;
}
.comment-form-cookies-consent{        
    padding: 15px 0px;
    display: inline-block;
}
.comment-form-cookies-consent input, .comment-form-cookies-consent label{
    float: left;
    padding: 0px 5px;
}
    
/*** Responsive ***/

@media(max-width:768px){
	.fsp{
	    flex-basis: calc(100% - 30px);
	}
	.fsp-img {
	    width: 40%;
	    float: left;
	    margin-right: 20px;
	}
	.fsp-cnt {
	    width: 54%;
	    float: left;
	}
	/** Single page **/
	.entry-content {
 	   display: inline-block;
 	   margin-top: 20px;
	}
	.right-part {
	    width: 100%;
	    margin-left: 0;
	}
	.left-part {
	    width: 100%;
	    margin-top: 20px;
	}
	.rp-img {
	    width: 200px;
	    float: left;
	    margin-right: 15px;
	}
	.rp-tlt {
	    display: flex;
	    font-size: 20px;
	    line-height: 1.4;
	}
	.rp-tlt h4{
		font-weight: 700;
	}
	.rp-list{display:inline-block;}
	.fsp h2{
    	font-size:24px;
    	font-weight: 700;
    }
    .footer-menu ul li{
    	margin-bottom:10px;
    }
}
@media (max-width: 480px){
	.home .site-main .container{padding:0;}
	.fsp {
	    border: none;
	    padding: 0;
	}
	.fsp-img {
	    width: 100%;
	    float: none;
	    margin-right: 0px;
	}
	.fsp-img img{width:100%;}
	.fsp-cnt {
	    width: 100%;
	    float: none;
	    padding: 0px 15px 0px 14px;
	}
	.pagination{text-align:center;}
	.pagination-next, .pagination-prev {
	    float: none;
	}
	.pagination-next{margin-top:20px;}

	/*** Single ***/
	.entry-title {
		font-size: 36px;
	}
	.rp-tlt, .rp-img img{
		width:100%;
	}
	.rp-img {
	    width: 100%;
	    float: none;
	    margin-right: 0px;
	}
	.nav-links .nav-previous {
	    float: none;
	    width: 100%;
	}
	.nav-links .nav-next {
	    float: none;
	    width: 100%;
	}
	.nav-previous a{
		margin-bottom: 45px;
    	display: inline-block;
	}
	#respond {
    	padding: 25px;
    }
    #reply-title {
    	font-size: 18px;
    	margin:10px 0px;
    }
    .content-pt .logged-in-as{
    	font-size: 14px;
    	margin: 6px 0px;
    }
    .comment-respond label{
    	padding: 10px 0 10px 0;
    }
	#comment {
	    padding: 15px 20px;
	}
	.form-submit .submit{
		padding: 16px 25px 16px 25px;
	}
	.post-img .featured_caption{
		width: 100%;
    	padding: 10px 15px;
	}
	.content-pt blockquote p {
	    font-size: 20px;
	    line-height: 1.65;
	}

}
</style>
</head>
<body <?php body_class(); ?>>
<div id="page" class="site">
	<?php
	if(!function_exists('levelup_check_hf_builder') || (function_exists('levelup_check_hf_builder') && !levelup_check_hf_builder('head'))){  ?>
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'level-up' ); ?></a>

	<header id="masthead" class="site-header">
		<div class="container">
			<div class="head">
				<div class="hamburger-menu drawer drawer--left">
	                <button type="button" class="drawer-toggle drawer-hamburger">
	                  <span class="screen-reader-text"><?php esc_html_e( 'Menu', 'level-up' ); ?></span>
	                  <span class="drawer-hamburger-icon"></span>
	                </button>
	                <nav class="drawer-nav" role="navigation">
	                  <div class="drawer-menu">
	                    <?php
	                    if ( has_nav_menu( 'header-menu' ) ) {
	                      wp_nav_menu(array(
	                    	'theme_location' => 'header-menu',
							'menu_class'        => 'header-menu',
	                    ));
	                    } ?>
	                  </div>
	                  <span class="icon-close drawer-toggle"></span>
	                </nav>
                </div><!-- /.mobile-menu -->
				<div class="logo">
	              <a href="<?php echo esc_url( home_url() ); ?>">
	                <?php 
	                $custom_logo_id = esc_attr( get_theme_mod( 'custom_logo' ) );

	                if( $custom_logo_id ) {
	                	$logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );
	                }
	                if ( has_custom_logo() ) {       	
	                    echo '<img src="'. esc_url( $logo[0] ) .'">';
	                } else {
	                    echo '<h1>'. esc_attr( get_bloginfo( 'name' ) ) .'</h1><span>'. esc_attr( get_bloginfo( 'description', 'display' ) ) .'</span>';
	                } ?>
	              </a>
	            </div><!-- /.logo -->
                <div class="h-srch h-ic">
                    <a class="lb icon-search2" href="#search"></a>
                    <div class="lb-btn"> 
                        <div class="lb-t" id="search">
                            <?php get_search_form(); ?>
                        </div> 
                    </div>
                </div><!-- /.search -->
		    </div><!-- /.head -->
		</div><!-- /.container -->
	</header><!-- #masthead -->
	<?php if ( has_nav_menu( 'primary-menu' ) ) { ?>
	<div class="p-m-fl">
		<div class="p-menu">
			<?php
				wp_nav_menu( array(
					'theme_location' => 'primary-menu',
					'menu_id'        => 'primary-menu',
				) );
			 ?>
		</div><!-- /.p-menu -->
	</div><!-- /.p-m-fl -->
	<?php } ?>
	<?php } ?>
	<div id="content" class="site-content">
