<?php
/* Smarty version 3.1.32, created on 2018-09-29 04:27:50
  from '/var/www/html/themes/classic/templates/customer/guest-login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5baee326929509_12321161',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0ddeebc10aa33aa6a74bd831f718311ed1573f22' => 
    array (
      0 => '/var/www/html/themes/classic/templates/customer/guest-login.tpl',
      1 => 1538187989,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5baee326929509_12321161 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19089011275baee3268a0a00_04215527', 'page_title');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17954072315baee3268aa095_58785003', 'page_content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'page.tpl');
}
/* {block 'page_title'} */
class Block_19089011275baee3268a0a00_04215527 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_title' => 
  array (
    0 => 'Block_19089011275baee3268a0a00_04215527',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Guest Order Tracking','d'=>'Shop.Theme.Customeraccount'),$_smarty_tpl ) );?>

<?php
}
}
/* {/block 'page_title'} */
/* {block 'page_content'} */
class Block_17954072315baee3268aa095_58785003 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_content' => 
  array (
    0 => 'Block_17954072315baee3268aa095_58785003',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <form id="guestOrderTrackingForm" action="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['pages']['guest_tracking'], ENT_QUOTES, 'UTF-8');?>
" method="get">
    <header>
      <p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'To track your order, please enter the following information:','d'=>'Shop.Theme.Customeraccount'),$_smarty_tpl ) );?>
</p>
    </header>

    <section class="form-fields">

      <div class="form-group row">
        <label class="col-md-3 form-control-label required">
          <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Order Reference:','d'=>'Shop.Forms.Labels'),$_smarty_tpl ) );?>

        </label>
        <div class="col-md-6">
          <input
            class="form-control"
            name="order_reference"
            type="text"
            size="8"
            value="<?php if (isset($_REQUEST['order_reference'])) {
echo htmlspecialchars($_REQUEST['order_reference'], ENT_QUOTES, 'UTF-8');
}?>"
          >
          <div class="form-control-comment">
            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'For example: QIIXJXNUI or QIIXJXNUI#1','d'=>'Shop.Theme.Customeraccount'),$_smarty_tpl ) );?>

          </div>
        </div>
      </div>

      <div class="form-group row">
        <label class="col-md-3 form-control-label required">
          <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Email:','d'=>'Shop.Forms.Labels'),$_smarty_tpl ) );?>

        </label>
        <div class="col-md-6">
          <input
            class="form-control"
            name="email"
            type="email"
            value="<?php if (isset($_REQUEST['email'])) {
echo htmlspecialchars($_REQUEST['email'], ENT_QUOTES, 'UTF-8');
}?>"
          >
        </div>
      </div>

    </section>

    <footer class="form-footer text-sm-center clearfix">
      <button class="btn btn-primary" type="submit">
        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Send','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>

      </button>
    </footer>
  </form>
<?php
}
}
/* {/block 'page_content'} */
}
