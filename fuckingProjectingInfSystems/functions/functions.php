<?
	$mysqli = false;
	function connectDB(){
		global $mysqli;
		$mysqli = new mysqli("localhost", "root", "", "auctionbase");
		$misqli->("SET NAMES 'utf-8'");
	}
	function closeDB(){
		global $mysqli;
		$mysqli->close
	}
	
?>