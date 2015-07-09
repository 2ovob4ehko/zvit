<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<title><? if(empty($f)){echo 'Підприємство не вибрано';}else{echo $f->name.' - '.$f->tin;}?></title>
		<?addScripts()?>
		<script src="<? echo base_url()?>js/animation.js" type="text/javascript"></script>
		<script>var selected='';</script>
	</head>
	<body>
		<div id="message"></div>
		<div id="top_menu">
			<div id="menu_button">Меню</div>
			<div id="icon_menu">
				<div class="icon_button" id="edit_button">
					<img src="css/button_edit.png"><div>Редагувати</div>
				</div>
				<div class="icon_button" id="delete_button">
					<img src="css/button_delete.png"><div>Видалити</div>
				</div>
			</div>
			<div id="menu_panel">
				<?
				if(!empty($f)){
					echo '<div onclick="showAjax(\'create\')">Створити...</div>
					<div onclick="showAjax(\'filelist&field=id&order=asc\')">Список файлів</div><hr></hr>';
				}
				?>
				<div onclick="showAjax('settings')">Персональні параметри</div>
			</div>
			<form action="<? echo base_url(); ?>?tab=changefirm" method="POST" id="firm_form">
			<div id="login_panel">
				<select name="firm" data-placeholder="Вибір підприємства" onchange="$('#firm_form').submit();" id="select_box">
		    </select>
			<? echo $_COOKIE['login']?>
				<div id="exit_button" onclick="window.location='<? echo base_url()?>?action=delcookie'">Вихід</div>
			</div>
		</form>
		</div>
		<div id="work_space">
			<div class="tabs">
	    	<ul class="tab_ul">
	    	</ul>
	    	<div>
	    	</div>
			</div>
		</div>
  </body>
</html>
