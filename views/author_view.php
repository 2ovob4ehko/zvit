<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<title>Авторизація</title>
		<?addScripts()?>
	</head>
	<body>
	<div class="page_title">Авторизація</div>
		<form method="POST" action="<? echo base_url()?>?action=author">
			<div id="author_pos">
				<div id="author">
					<table>
						<tr>
							<td>Логін</td><td><input type="text" name="login"></td>
						</tr>
						<tr>
							<td>Пароль</td><td><input type="password" name="pass"></td>
						</tr>
						<tr>
							<td colspan="2"><input type="submit" value="Авторизуватися"></td>
						</tr>
						<?if(!empty($_GET['error'])){
						echo '
						<tr><td class="error" colspan="2">'.urldecode($_GET['error']).'</td></tr>';
						}?>
						<tr><td colspan="2"><a href="<? echo base_url()?>?view=regist">Зареєструватися</a></td></tr>
					</table>
				</div>
			</div>
		</form>
	</body>
</html>
