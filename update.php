<?php if(isset($_POST['id'])):?>
<?php require_once('lib/news_model.php');
	$news=new News_model();
	$news->set_title($_POST['title']);
	$news->set_content($_POST['content']);
	$news->set_position($_POST['position']);
	$news->update_news($_POST['id']);
?>
<?php endif;?>
<?php header('Location: index.php');?>