<?php if(isset($_GET['id'])):?>
<?php 
require_once('lib/news_model.php');
$news=new News_model();
$article=$news->get_news_by_id($_GET['id']);
$row = $article->fetch_assoc();
$title=$row['title'];
$content=$row['content'];
$position=$row['position'];
$id=$row['id'];
$update=1;
require_once('form.php');?>
<?php endif;?>