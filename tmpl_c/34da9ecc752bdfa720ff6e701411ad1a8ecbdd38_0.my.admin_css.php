<?php /* Smarty version 3.1.27, created on 2024-01-13 06:41:18
         compiled from "my:admin_css" */ ?>
<?php
/*%%SmartyHeaderCode:72733048265a2308e34bf50_36915434%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '34da9ecc752bdfa720ff6e701411ad1a8ecbdd38' => 
    array (
      0 => 'my:admin_css',
      1 => 1705128078,
      2 => 'my',
    ),
  ),
  'nocache_hash' => '72733048265a2308e34bf50_36915434',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_65a2308e354ae5_31417401',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_65a2308e354ae5_31417401')) {
function content_65a2308e354ae5_31417401 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '72733048265a2308e34bf50_36915434';
?>
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" /> 
 <style> .pagination { display: -ms-flexbox; display: flex; padding-left: 0; list-style: none; } .page-link { position: relative; display: block; padding: 0.5rem 0.75rem; margin-left: -1px; line-height: 1.25; color: #000; background-color: #fff; border: 1px solid #999; } .page-item:first-child .page-link { margin-left: 0; border-top-left-radius: 0.25rem; border-bottom-left-radius: 0.25rem; } .page-item:last-child .page-link { border-top-right-radius: 0.25rem; border-bottom-right-radius: 0.25rem; } .page-link:hover { z-index: 2; color: #000; text-decoration: none; background-color: #ccc; border-color: #999; } .page-link.disabled { color: #999; } .page-link.disabled:hover { background-color: #fff; } .page-link { cursor: pointer; text-decoration: none; color: #000; } .page-item.active .page-link { z-index: 1; color: #000; background-color: #ccc; border-color: #999; } .page-item.disabled .page-link { color: #666; pointer-events: none; cursor: auto; background-color: #fff; border-color: #999; } .alert { padding: 5px 5px 5px 15px; margin: 2px; border: solid 1px black; display: block; } .alert.alert-danger { background: #FFEEEE; border-color: red; color: #660000; } .alert.alert-warning { background: #FFFFEE; border-color: yellow; color: #333300; } .alert.alert-success { background: #EEFFEE; border-color: green; color: #006600; } .alert.alert-info { background: #EEEEFF; border-color: blue; color: #000066; } table.form { width: 100%; } table.form th { width: 30%; padding: 3px; padding-right: 5px; text-align: right; background: #FFC982; color: #493011; } table.form th.title { width: 100%; padding-left: 5px; text-align: left; color: #a45c07; } table.form td { width: 70%; padding: 3px; text-align: left; background: #FEF5EA; } table.form.nosize td { width: auto; } table.form.nosize th { width: auto; } table.form thead th { width: auto; padding: 3px; text-align: center; background: #FFC982; color: #FFFFFF; } table.form thead td { width: auto; padding: 3px; text-align: left; } table.form td input[type=text], table.form td input[type=password], table.form td textarea, table.form td select { width: 100%; } table.form td input[type=text].nosize, table.form td input[type=password].nosize, table.form td textarea.nosize, table.form td select.nosize { width: auto; } table.form.controls td { background: transparent; width: auto; } table.form.controls td input[type=text], table.form.controls td input[type=password], table.form.controls td textarea, table.form.controls td select { margin: 3px; } table.list { width: 100%; } table.list td { width: auto; padding: 3px; } table.list.sub td { width: auto; padding: 1px; } table.list th { width: auto; padding: 3px; text-align: center; background: #FFC982; color: #493011; } table.list .row1 { background: #FCE7CA; } table.list .row2 { background: #FFF3E3; } form input[type=submit], form input[type=button], form button, .sbmt { display: inline-block; font-weight: bold; text-align: center; text-decoration: none; white-space: nowrap; vertical-align: middle; user-select: none; border: 1px solid transparent; padding: .25rem .5rem; line-height: 1.5; border-radius: .2rem; border: none; } form input[type=submit]:hover, form input[type=button]:hover, form button:hover, .sbmt:hover { background-color: #FAD252; } form input[type=submit]:active, form input[type=button]:active, form button:active, .sbmt:active { background-color: #FFC200; } form input[type=submit]:focus, form input[type=button]:focus, form button:focus, .sbmt:focus { box-shadow: 0 0 0 .2rem rgba(255,236,176,.5); } form input[type=submit]:disabled, form input[type=button]:disabled, form button:disabled, .sbmt:disabled { opacity: .65; } .btn { cursor:pointer; text-transform: uppercase; margin:1px; } .sbmt.btn-sm { font-size: .525rem; padding: .25rem .35rem; text-transform: uppercase; cursor:pointer; margin:1px; } .btn-success { color: #fff; background-color: #28a745; border-color: #28a745; } .btn-success:hover { background-color: #218838 !important; border-color: #1e7e34 !important; } .btn-success:focus { background-color: #218838 !important; box-shadow: 0 0 0 .2rem rgba(40,167,69,.5) !important; } .btn-danger { color: #fff; background-color: #dc3545; border-color: #dc3545; } .btn-danger:hover { background-color: #c82333 !important; border-color: #bd2130 !important; } .btn-danger:focus { background-color: #c82333 !important; box-shadow: 0 0 0 .2rem rgba(220,53,69,.5) !important; } .btn-info { color: #fff; background-color: #17a2b8; border-color: #17a2b8; } .btn-info:hover { background-color: #138496 !important; border-color: #117a8b !important; } .btn-info:focus { background-color: #138496 !important; box-shadow: 0 0 0 .2rem rgba(23,162,184,.5) !important; } .btn-primary { color: #fff; background-color: #007bff; border-color: #007bff; } .btn-primary:hover { background-color: #0069d9 !important; border-color: #0062cc !important; } .btn-primary:focus { background-color: #007bff !important; box-shadow: 0 0 0 .2rem rgba(38,143,255,.5) !important; } .badge { display: inline-block; padding: .25em .4em; font-size: 75%; font-weight: 700; line-height: 1; text-align: center; /*white-space: nowrap;*/ vertical-align: baseline; border-radius: .25rem; margin:.25em; } .badge-bg { display: inline-block; font-size: .525rem; padding: .25rem .35rem; text-transform: uppercase; font-weight: 700; text-align: center; /*white-space: nowrap;*/ vertical-align: baseline; border-radius: .25rem; } .badge-success { color: #fff; background-color: #28a745; } .badge-info { color: #fff; background-color: #17a2b8; } .badge-danger { color: #fff; background-color: #dc3545; } .badge-warning { color: #212529; background-color: #ffc107; } .badge-primary { color: #fff; background-color: #007bff; } .badge.sticker { font-size: 90%; } .hide { display:none; } .pshead { padding: 3px; background: #FF8D00; margin: 2px 0; font-weight: bold; overflow: hidden; } .pshead b { display:block; width: 250px; float: left; } .pshead a { float: right; } .psettings { display:none; } </style> <style> .nav { --display: flex; --flex-wrap: wrap; padding: 0 .25rem; margin-bottom: 0; list-style: none; } .nav-link { border-radius: .25rem; display: block; padding: .5rem 1rem; color: #493011; text-decoration: none; background-color: #FFF3E3; border: solid 1px transparent; -webkit-text-decoration-skip: objects; margin-top: 0.2rem; text-align: left; font-weight: bold; } .nav-link:last-child { margin-bottom: 0.2rem; } .nav-link:hover { background-color: #FFC982; } .nav-link.active { background-color: #FFC982; } .nav-link:active, .nav-link:focus { background-color: #FCE7CA } .dropdown-toggle.show { border-bottom-right-radius: 0; border-bottom-left-radius: 0; } .dropdown-toggle::after { --display: inline-block; display: none; width: 0; height: 0; margin-left: .255em; vertical-align: .255em; content: ""; border-top: .3em solid; border-right: .3em solid transparent; border-bottom: 0; border-left: .3em solid transparent; z-index: 1000; } .dropdown-menu { --position: absolute; --top: 100%; left: 0; z-index: 1000; --display: none; --float: left; --min-width: 10rem; padding: .5rem 0; margin: 0 0 .125rem 0; --font-size: 1rem; color: #212529; text-align: left; list-style: none; background-color: #fff; background-clip: padding-box; border: 1px solid rgba(0,0,0,.15); border-top: 0; border-bottom-right-radius: .25rem; border-bottom-left-radius: .25rem; } .dropdown-menu.show { display: block; } .dropdown-item { display: block; --width: 100%; padding: .25rem 1rem; clear: both; font-weight: 400; color: #212529; text-align: inherit; --white-space: nowrap; background-color: transparent; border: 0; text-decoration: none; } .dropdown-item:hover { background-color: #FCE7CA; } .dropdown-item.active { background-color: #FFC982; } .dropdown-item:active, .dropdown-item:focus { background-color: #FCE7CA; } a.sort_link { cursor: pointer; color: #606060; } a.sort_link.active { color: red; } a.link.username { text-decoration: none; font-weight: bold; } b.username { font-size:1.2em; } .hlp.badge { color:#fff; font-size: 100%; } .hlp { --font-size: auto; color: black; text-decoration: none; cursor: help; position: relative; display: inline-block; } .hlp[title]:after, .hlp[data-hlp]:after { opacity: 0; content: attr(title); position: absolute; top: 100%; left: 0; color: #fff; transition: opacity 0.3s; border-radius: 6px; background-color: #555; padding: 5px 5px; width: 220px; display: none; font-size: 90%; z-index: 1000; text-align: left; } .hlp[data-hlp]:after { content: attr(data-hlp); } .hlp[title]:hover:after, .hlp[data-hlp]:hover:after { opacity: 1; display: inline-block; } </style>  <?php }
}
?>