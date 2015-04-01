<?php /* Smarty version Smarty-3.1.21, created on 2015-02-17 11:03:05
         compiled from "templates/client.tpl" */ ?>
<?php /*%%SmartyHeaderCode:16965176354c75f0664dfa0-75838795%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '05833b814809887456881e8d3c97dc8db42d1f8f' => 
    array (
      0 => 'templates/client.tpl',
      1 => 1424161957,
      2 => 'file',
    ),
    '8e1a465b33c8b162d78e55a13a86ab2e008d57a3' => 
    array (
      0 => 'templates/masterPage.tpl',
      1 => 1424165808,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16965176354c75f0664dfa0-75838795',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_54c75f0667ca15_54743293',
  'variables' => 
  array (
    'path' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54c75f0667ca15_54743293')) {function content_54c75f0667ca15_54743293($_smarty_tpl) {?><!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css"  href="bootstrap/css/bootstrap.min.css"/>
</head>
<body>
	<div id="body" class="well">
        
        

    Formulaire Client - <?php echo $_smarty_tpl->tpl_vars['message']->value;?>

    <div class="container">
        <form method="post" action="index.php?action=validation&page=client" class="col-lg-6">
            <select name="civilite" value="M">
                <option value="M">M </option>
                <option value="Mlle">Mlle </option>
            </select>
            <input type="text"  name="Nom" placeholder="Nom" class="form-control"/>
            <input type="text"  name="Prenom" placeholder="Prenom" class="form-control"/>
            <input type="text"  name="Adresse" placeholder="Adresse" class="form-control"/>
            <input type="text"  name="cp" placeholder="CP" class="form-control" type="number"/>
            <input type="text"  name="ville" placeholder="Ville" class="form-control"/>
            <input type="tel"  name="tel" placeholder="Telephone" class="form-control" type="number"/>
            <input type="text"  name="email" placeholder="Email" class="form-control" type="email"/>
            <input type="text"  name="password" placeholder="Mot de passe" class="form-control" type="password"/>
            <input type="text"  name="login" placeholder="login" class="form-control" />
            <input type="submit" class="btn btn-primary" value="S'inscrire" />
        </form>
    </div>

    </div>
	<br/>
    
    <?php echo $_smarty_tpl->tpl_vars['path']->value;?>

    <a href="index.php?page=client">Client</a>
    <a href="index.php?page=catalogue">Catalogue</a>
</body>
<?php }} ?>
