<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<title>Реєстрація</title>
		<link rel="stylesheet" href="<? echo base_url()?>css/style.css" type="text/css" media="all" />
		<script src="<? echo base_url()?>js/jquery.js" type="text/javascript"></script>
		<script src="<? echo base_url()?>js/angular.min.js" type="text/javascript"></script>
	</head>
	<body>
	<div class="page_title">Реєстрація</div>
		<form method="POST" action="<? echo base_url()?>?action=regist">
			<div id="author_pos">
				<div id="author">
					<table>
						<tr>
							<td>Логін</td><td><input id="login" type="text" name="login"></td>
						</tr>
						<tr>
							<td>Пароль</td><td><input id="pass" type="password" name="pass"></td>
						</tr>
						<tr>
							<td colspan="2"><input id="send" type="submit" value="Відправити"></td>
						</tr>
						<?if(!empty($_GET['error'])){
						echo '
						<tr><td class="error" colspan="2">'.urldecode($_GET['error']).'</td></tr>';
						}?>
					</table>
				</div>
			</div>
		</form>
		<script>
		setInterval(function(){
			if($('#login').val()==''||$('#pass').val()==''){
				$('#send').attr('disabled','disabled');
			}else{
				$('#send').removeAttr('disabled');
			}
		},500);
		</script>
	</body>
</html>
