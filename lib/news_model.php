<?php
define('DB_SERVER','localhost');
define('DB_USER','root');
define('DB_PASSWORD','');
define('DB_DATABASE','news');
class News_model{
	var $title='';
	var $content='';
	var $position='';
	var $conn='';
	function __construct(){
		$this->conn= new mysqli(DB_SERVER, DB_USER, DB_PASSWORD,DB_DATABASE);
		if ($this->conn->connect_error) {
			    die("Connection failed: " . $conn->connect_error);
			} 
		}
	function get_last10_news(){
		$sql='select * from articles';
		$result = $this->conn->query($sql);
		return $result;
		
	}
	function get_news_by_id($id){
		$sql="select * from articles where id='{$id}'";
		return $this->conn->query($sql);
	}
	function create_news(){
		$sql="insert into articles(title,content,position) values('{$this->title}','{$this->content}',{$this->position})";
		// $sql='insert into articles(title,content,position) values("title","content",0)';
		$this->conn->query($sql);
	}
	function update_news($id){
		$sql="update articles set title='{$this->title}',content='{$this->content}',position='{$this->position}' where id='{$id}'"; 
		$this->conn->query($sql);
	}
	function delete_news($id){
		$sql="delete from articles where id='{$id}'";
		$this->conn->query($sql);
	}
	function set_title($title){
		$this->title=mysqli_real_escape_string($this->conn,$title);
	}
	function set_content($content){
		$this->content=mysqli_real_escape_string($this->conn,$content);
	}
	function set_position($position){
		$this->position=(int)$position;
	}
}

