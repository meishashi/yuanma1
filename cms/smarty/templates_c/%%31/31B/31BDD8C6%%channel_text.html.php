<?php /* Smarty version 2.6.18, created on 2014-05-15 20:41:21
         compiled from 4/isouej1399863564/channel_text.html */ ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => $this->_tpl_vars['header'], 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
    <p class="bordertop"></p>    <div class="subcon">
	    	<ul class="newsul">
			          <?php if ($this->_tpl_vars['contents']): ?>
			<?php $_from = $this->_tpl_vars['contents']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['c']):
?>
			<li><a href="<?php echo $this->_tpl_vars['c']['link']; ?>
" title="<?php echo $this->_tpl_vars['c']['title']; ?>
"><p><?php echo $this->_tpl_vars['c']['title']; ?>
</p></a></li>
			
		     <?php endforeach; endif; unset($_from); ?>
			 <?php endif; ?>
                        
                    </ul>
		 <?php if ($this->_tpl_vars['currentPage'] && $this->_tpl_vars['totalPage']): ?>
    <div class="pages">
			<a class="pre-left" href="<?php echo $this->_tpl_vars['previousPageLink']; ?>
">&lt;</a>
		<span><?php echo $this->_tpl_vars['currentPage']; ?>
/<?php echo $this->_tpl_vars['totalPage']; ?>
</span>
		<a class="next-left" href="<?php echo $this->_tpl_vars['nextPageLink']; ?>
">&gt;</a>
	        <div class="clear"></div>
    </div>
	<?php endif; ?> </div>
    <p class="borderbottom"></p>
</div>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => $this->_tpl_vars['footer'], 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>