<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<title><? if(empty($firm)){echo 'Створення підприємства';}else{echo $firm;}?></title>
		<?addScripts()?>
		<script src="<? echo base_url()?>js/animation.js" type="text/javascript"></script>
	</head>
	<body>
		<div id="message"></div>
		<div id="top_menu">
			<div id="menu_button">Меню</div>
			<div id="menu_panel">
				<div onclick="showAjax('create')">Створити...</div>
				<hr></hr>
				<div onclick="showAjax('settings')">Персональні параметри</div>
				<div onclick="showAjax('docdirectory')">Довідник документів</div>
			</div>
			<div id="login_panel">
				<select name="firm" data-placeholder="Вибір підприємства" id="select_box">
		      <option value=""></option>
		      <option value="1">ФОП Головченко Максим Миколайович - 3871575588</option>
		      <option value="2">ТОВ "Аверс" - 38715755</option>
		      <option value="3">ТОВ "Good people" - 39497534</option>
		    </select>
			<? echo $_COOKIE['login']?>
				<div id="exit_button" onclick="window.location='<? echo base_url()?>?action=delcookie'">Вихід</div>
			</div>
		</div>
		<div id="work_space">
			<div class="tabs">
	    	<ul class="tab_ul">
					<li class="tab_li">
						<div class="tab_title">F0103304</div>
						<div class="tab_close"></div>
					</li>
	    	</ul>
	    	<div>
					<div>Второе содержимое</div>
	    	</div>
			</div>
		</div>
		<script>
			showAjax('settings');
		</script>
  </body>
</html>
