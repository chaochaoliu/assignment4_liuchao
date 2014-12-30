<!DOCTYPE html>
<html>
<head>
<title>NBA TIMES</title>
<meta charset='utf-8'>
<meta name='author' content='chaoliu'>
<meta name='description' content='NBA news'>
<meta name='keywords' content='NBA'>
</head>
<body>
<?php require_once('lib/news_model.php'); ?>
<h1>NBA TIMES</h1>
<nav>
<h3><a href='new.php'>Create News</a></h3>
</nav>
<?php
$news=new News_model();
$articles=$news->get_last10_news();
if ($articles->num_rows > 0):
?>
<?php while($row = $articles->fetch_assoc()):?>
<h2><?php echo $row['title'];?></h2>
<article>
<?php echo $row['content'];?>
</article>
<a href="delete.php?id=<?php echo $row['id'];;?>">delete</a> <a href="edit.php?id=<?php echo $row['id'];?>">edit</a>
<?php endwhile;?>
<?php endif;?>


</body>
</html>
