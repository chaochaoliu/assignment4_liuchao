<form action='<?php echo isset($update)?'update.php':'new.php';?>' method='post' name='article'>
Title:<input type='text' size='100' name='title' value="<?php if(isset($title)){echo $title;}?>"/><br/>
Content:<br/>
<textarea rows="4" cols="50" name='content'><?php if(isset($content)){echo $content;}?></textarea><br/>
Position:<input type='text' name='position' size='10' value="<?php if(isset($position)){echo $position;}?>"/><br/>
<?php if(isset($id)):?>
	<input type='hidden' name='id' value="<?php echo $id;?>"/>
<?php endif;?>
<input type='submit' value='<?php echo isset($update)?"update":"Create";?> news'/>
</form>