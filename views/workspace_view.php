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
			</div>
			<form action="<? echo base_url(); ?>?tab=changefirm" method="POST" id="firm_form">
			<div id="login_panel">
				<select name="firm" data-placeholder="Вибір підприємства" onchange="$('#firm_form').submit();" id="select_box">
		      <option value=""></option>
					<?
						if(!empty($_COOKIE['firm'])){
							$selectedFirm=$_COOKIE['firm'];
						}else{
							$selectedFirm='';
						}
						while($firm=$myfirms->fetch_object()){
							echo '<option value="'.$firm->id.'"';
							if($firm->id==$selectedFirm){echo 'selected';}
							echo '>'.$firm->name.' - '.$firm->tin.'</option>';
						}
					?>
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
