<?php
	// Hủy SESSION
	unset($_SESSION['MaND']);
	unset($_SESSION['HoVaTen']);
	unset($_SESSION['QuyenHan']);
	
	// Chuyển hướng về trang index.php
	header("Location: index.php");
?>