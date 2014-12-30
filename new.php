<?php if(isset($_POST['title'])):?>
<?php 
	require_once('lib/news_model.php');
	// echo $_POST['title'].'<br/>';
	// echo $_POST['content'].'<br/>';
	$news=new News_model();
	$news->set_title($_POST['title']);
	$news->set_content($_POST['content']);
	$news->set_position($_POST['position']);
	$news->create_news();
	header('Location: index.php');
	else:
?>
<?php require_once('form.php');?>
<?php echo 'no article';?>
<?php endif;?>
