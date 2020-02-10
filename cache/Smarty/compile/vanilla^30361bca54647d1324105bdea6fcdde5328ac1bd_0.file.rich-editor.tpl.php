<?php
/* Smarty version 3.1.33, created on 2020-02-07 07:22:39
  from '/Applications/mamp/apache2/htdocs/vanilla/plugins/rich-editor/views/rich-editor.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5e3d103f289524_68856355',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '30361bca54647d1324105bdea6fcdde5328ac1bd' => 
    array (
      0 => '/Applications/mamp/apache2/htdocs/vanilla/plugins/rich-editor/views/rich-editor.tpl',
      1 => 1572256150,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e3d103f289524_68856355 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/Applications/mamp/apache2/htdocs/vanilla/library/SmartyPlugins/function.t.php','function'=>'smarty_function_t',),));
?>
<div class="richEditor isDisabled" aria-label="<?php echo smarty_function_t(array('c'=>"Type your message"),$_smarty_tpl);?>
" data-id="<?php echo $_smarty_tpl->tpl_vars['editorData']->value['editorID'];?>
" aria-describedby="<?php echo $_smarty_tpl->tpl_vars['editorData']->value['editorDescriptionID'];?>
" role="textbox" aria-multiline="true">
    <p id="<?php echo $_smarty_tpl->tpl_vars['editorData']->value['editorDescriptionID'];?>
" class="sr-only">
        <?php echo smarty_function_t(array('c'=>"richEditor.description.title"),$_smarty_tpl);?>

        <?php echo smarty_function_t(array('c'=>"richEditor.description.paragraphMenu"),$_smarty_tpl);?>

        <?php echo smarty_function_t(array('c'=>"richEditor.description.inlineMenu"),$_smarty_tpl);?>

        <?php echo smarty_function_t(array('c'=>"richEditor.description.embed"),$_smarty_tpl);?>

    </p>
    <div class="richEditor-frame InputBox">
        <div class="richEditor-textWrap">
            <div class="ql-editor richEditor-text userContent isDisabled" data-gramm="false" contenteditable="false" disabled="disabled" data-placeholder="Create a new post..." tabindex="0"></div>
        </div>
    </div>
</div>
<?php }
}
