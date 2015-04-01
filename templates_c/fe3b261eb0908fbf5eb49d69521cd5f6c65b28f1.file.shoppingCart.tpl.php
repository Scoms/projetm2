<?php /* Smarty version Smarty-3.1.21, created on 2015-04-01 12:10:15
         compiled from "templates/shoppingCart.tpl" */ ?>
<?php /*%%SmartyHeaderCode:182796805054f8bdd1263521-00071821%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fe3b261eb0908fbf5eb49d69521cd5f6c65b28f1' => 
    array (
      0 => 'templates/shoppingCart.tpl',
      1 => 1427883013,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '182796805054f8bdd1263521-00071821',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_54f8bdd12e7ce8_38371270',
  'variables' => 
  array (
    'products' => 0,
    'pro' => 0,
    'qtys' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54f8bdd12e7ce8_38371270')) {function content_54f8bdd12e7ce8_38371270($_smarty_tpl) {?>
    <div class="message">
        <span class="glyphicon glyphicon-ok"></span> Bla bla bla lorem ipsum amet portiiis 
    </div>  
    <div class="caddie">
        
        <table>
            
            <!-- Header -->
            <tr class="header">
                <td class="name">Product name</td>
                <td class="description"></td>
                <td class="edit"></td>
                <td class="price">Unit Price</td>
                <td class="qty">Qty</td>
                <td class="subtotal">Subtotal</td>
                <td class="remove"></td>
            </tr>
            
            <?php  $_smarty_tpl->tpl_vars['pro'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['pro']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['products']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['pro']->key => $_smarty_tpl->tpl_vars['pro']->value) {
$_smarty_tpl->tpl_vars['pro']->_loop = true;
?>
                <tr class="item">
                        <td class="thumb"><img alt="X" src="img/<?php echo $_smarty_tpl->tpl_vars['pro']->value['image'];?>
"/>
                            
                        </td>
                    <td><?php echo $_smarty_tpl->tpl_vars['pro']->value['description'];?>
</td>
                    <td class="bold">Edit</td>
                    <td class="red">$<?php echo $_smarty_tpl->tpl_vars['pro']->value['price'];?>
</td>
                    <td class="input"><input type="number" class="qty" value="<?php echo $_smarty_tpl->tpl_vars['qtys']->value[$_smarty_tpl->tpl_vars['pro']->value['id']];?>
" id="<?php echo $_smarty_tpl->tpl_vars['pro']->value['id'];?>
"/></td>
                    <td class="red">$<?php echo $_smarty_tpl->tpl_vars['pro']->value['price']*$_smarty_tpl->tpl_vars['qtys']->value[$_smarty_tpl->tpl_vars['pro']->value['id']];?>
</td>
                    <td class="red cross">
                            <a class="red cross" id="<?php echo $_smarty_tpl->tpl_vars['pro']->value['id'];?>
" onclick="DeleteAndReload(<?php echo $_smarty_tpl->tpl_vars['pro']->value['id'];?>
)">
                            x
                            </a>
                    </td>
                </tr>
            <?php } ?>
            
        </table>
    </div>

    <div class="buttonsC"> 
        <input class="blackButton" value="CONTINUE SHOPPING" id="continueSHop">
        </input>
        <input type="button" value="UPDATE SHOPPING CART"  class="redButton"/>
    </div>

<?php echo '<script'; ?>
>
    
$( "#continueSHop" ).click(function() {
    window.location = "/ProjetM2/?page=shop";
});
    
$(".qty").change(function(){
    $.ajax({
          url: "http://localhost:8888/ProjetM2/?page=updateCart&id=" +this.id + "&val=" + this.value,
          context: document.body
        }).done(function(data){ 
        $("#cartCount").text(data);
        
    Load();
    
    });    
});
    
<?php echo '</script'; ?>
><?php }} ?>
