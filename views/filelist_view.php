<div id="page">
	<table id="files">
		<thead>
			<tr>
				<td style="width:65px;cursor:pointer;" onclick="showAjax('filelist&field=code&order=asc')">Код</td>
				<td>Назва</td>
				<td style="width:80px;cursor:pointer;" onclick="showAjax('filelist&field=period&order=asc')">Період</td>
				<td style="width:35px;cursor:pointer;" onclick="showAjax('filelist&field=year&order=asc')">Рік</td>
				<td style="width:100px;cursor:pointer;" onclick="showAjax('filelist&field=stan&order=asc')">Стан звіту</td>
				<td style="width:15px;cursor:pointer;" onclick="showAjax('filelist&field=number&order=asc')">№</td>
				<td style="width:135px;cursor:pointer;" onclick="showAjax('filelist&field=time&order=asc')">Створений</td>
			</tr>
		</thead>
<?
	while($f=$list->fetch_object()){
		echo '<tr><td>'.$f->code.'</td><td style="overflow:hidden;white-space:nowrap;">';
		$blank=$blanks->getByCode($f->code);
		$b=$blank->fetch_object();
		echo $b->name;
		$tp=array('Січень','Лютий','Березень','Квітень','Травень','Червень','Липень','Серпень','Вересень','Жовтень','Листопад','Грудень','І Квартал','ІІ Квартал','ІІІ Квартал','IV Квартал','Півріччя','9 місяців','Рік');
		echo '</td><td>'.$tp[($f->period)-1].'</td><td>'.$f->year.'</td><td>';
		switch ($f->stan) {
			case 1:
				echo 'звітний';
				break;
			case 2:
				echo 'новий звітний';
				break;
			case 3:
				echo 'уточнюючий';
				break;
		}
		echo '</td><td>'.$f->number.'</td><td>'.date("d.m.Y H:i:s",strtotime($f->time)).'</td></tr>';
	}
?>
	</table>
</div>
