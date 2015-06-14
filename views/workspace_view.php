<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<title><? if(empty($firm)){echo 'Створення підприємства';}else{echo $firm;}?></title>
		<?addScripts()?>
	</head>
	<body>
		<div id="top_menu">
			<div id="menu_button">Меню</div>
			<div id="menu_panel">
				<div onclick="showAjax('create')">Створити...</div>
				<hr></hr>
				<div onclick="showAjax('settings')">Персональні параметри</div>
				<div>Довідник документів</div>
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
	    	<ul>
					<li>
						<div class="tab_title">F0103304</div>
						<div class="tab_close"></div>
					</li>
					<li>
						<div class="tab_title">Персональні параметри</div>
						<div class="tab_close"></div>
					</li>
	    	</ul>
	    	<div>
					<div>Второе содержимое</div>
	        <div>Спочатку заховане. При натисненні Меню-Персональні параметри з’являється ця вкладка. З лівої сторони список підприємств з правої сторони анкета з даними. В лівій панелі є кнопка для створення нового підприємства. В правій панелі є кнопка збереження анкети.</div>
	    	</div>
			</div>
		</div>
		<script>
			$("#select_box").chosen();
			$("#menu_button").toggle(function(){
				$("#menu_panel").show();
			},function(){
				$("#menu_panel").hide();
			});
			$(document).mouseup(function(e){
				if(!$("#menu_panel").is(e.target)
				&& $("#menu_panel").has(e.target).length===0){
					$("#menu_panel").hide();
				}
			});
			setInterval(function(){
				if ($(window).width() < 800) {
					$(".chosen-container").css("width",70);
				}else {
					$(".chosen-container").css("width",340);
				}
				$("#work_space").css("height",$(window).height()-40);
				$(".tabs ul").css("width",$(window).width());
			},100);
			function showAjax(tab){
			  $.ajax({
			    url: "<?echo base_url();?>?tab="+tab,
			    cache: false,
			    dataType: 'json',
			    success: function(json){
						addTab(json.title).html(json.data);
						$(".tabs").lightTabs();
			    }
			  });
			}
			function addTab(t){
				var title=$('<div class="tab_title"></div>').html(t);
				var close=$('<div class="tab_close"></div>');
				var li=$("<li></li>").append(title);
				li.append(close);
				$(".tabs").children("ul").append(li);
				var text=$('<div></div>');
				$(".tabs").children("div").append(text);
				return text;
			}
		</script>
  </body>
</html>
