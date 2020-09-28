<?php
define('DB_SERVER','localhost');
define('DB_USER','root');
define('DB_PASS' ,'');
define('DB_NAME', 'ajax');
class Database{
    function __construct(){
$con = mysqli_connect(DB_SERVER,DB_USER,DB_PASS,DB_NAME);
$this->dbh=$con;

if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
 }
}

 public function creattable(){
	  	$query = "CREATE TABLE IF NOT EXISTS `register` (
	  		`id` int(11) NOT NULL AUTO_INCREMENT,
	  		`name` VARCHAR(255) NOT NULL ,
	  		`email` VARCHAR(255) NOT NULL ,
	  		`phone` VARCHAR(20) NOT NULL ,
	  		`city` VARCHAR(100) NOT NULL ,
	  		`UpateTime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
	  		) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1";
	  		$this->dbh->query($query);
	  }

  public function registerUser($name,$email,$phone,$city){
	  	$stmt = $this->dbh->prepare("INSERT INTO  register(name,email,phone,city) VALUES(?,?,?,?)");
	  	$stmt->bind_param("ssss", $name,$email,$phone,$city);
	  	$result = $stmt->execute();
	  	return $result;
	  }
	
	 public function fetch($tableName,$post_date,$post){
	$oneresult=mysqli_query($this->dbh,"SELECT * FROM $tableName where $post_date = $post");
	return $oneresult;
	}

	public function fetchAll($tableName){
	$oneresult=mysqli_query($this->dbh,"SELECT * FROM $tableName");
	return $oneresult;
	}


	public function moveToArchive($rid){
	$deleterecord=mysqli_query($this->dbh,"INSERT INTO archive (head,category,post,image)SELECT head,category,post,image FROM post WHERE $posting_date = $post; DELETE FROM post WHERE $posting_date = $post");
	return $deleterecord;
	}


}



?>