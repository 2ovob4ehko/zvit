<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<title><? if(empty($firm)){echo 'Створення підприємства';}else{echo $firm;}?></title>
		<?addScripts()?>
	</head>
	<body>
		<div id="top_menu">
			<div id="menu_button">Меню</div>
			<div id="select_firm">
				<select name="firm" data-placeholder="Вибір підприємства" id="select_box">
		            <option value=""></option>
		            <option value="1">ФОП Головченко Максим Миколайович - 3871575588</option>
		            <option value="2">United Kingdom</option>
		            <option value="3">Afghanistan</option>
		          </select>
			</div>
			<div id="login"><? echo $_COOKIE['login']?>
				<div id="exit_button">Вихід</div>
			</div>
		</div>
		<script>
			$("#select_box").chosen();
		</script>
  </body>
</html>
