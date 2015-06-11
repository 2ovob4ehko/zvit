<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<title><? if(empty($firm)){echo 'Створення підприємства';}else{echo $firm;}?></title>
		<link rel="stylesheet" href="<? echo base_url()?>css/style.css" type="text/css" media="all" />
		<script src="<? echo base_url()?>js/jquery.js" type="text/javascript"></script>
		<script src="<? echo base_url()?>js/angular.min.js" type="text/javascript"></script>
	</head>
	<body>
		<div id="top_menu">
				<div>Меню</div>
				<div>Вибір підприємства</div>
				<div><? echo $_COOKIE['login']?> <div>Вихід</div></div>
		</div>
  </body>
</html>
