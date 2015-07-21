Zvit
========================

Інструкція по встановленню
----------------------------------

1) Клонувати репозиторій в папку хостів Web-серверу

	git clone git@github.com:2ovob4ehko/zvit.git

Костилі для Denwer :)
----------------------------------
2) Змінити пароль Mysql

	run cmd
	mysql -u root -p
	use mysql;
	update user set password=PASSWORD('ghj') where User='root';
	flush privileges;
	quit
	
3)Зміна кодування по замовчуванню

	open \usr\local\apache\conf\httpd.conf
	
знайти:

	AddDefaultCharset windows-1251 

і закоментувати

4) Змінити налаштування phpmyadmin для запиту паролю

	open \home\localhost\www\tools\phpmyadmin\config.inc.php
	
Змінити значення параметру:

	$cfg['Servers'][$i]['auth_type'] = 'config'; 
	
на 

	$cfg['Servers'][$i]['auth_type'] = 'cookie';

Кінець костилів для Denwer
----------------------------------
	
5) Зайти на http://localhost/Tools/phpmyadmin та імпортувати дані в таблиці з папки sql, що знаходится в корні сайту.
