<?php if(isset($_GET['id'])):?>
<?php require_once('lib/news_model.php');
	$news=new News_model();
	$news->delete_news($_GET['id']);
?>
<?php endif;?>
<?php header('Location: index.php');?>
