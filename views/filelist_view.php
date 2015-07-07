<div id="page">
	<table id="files">
		<thead>
			<tr><td style="width:65px;">Код</td><td>Назва</td><td style="width:80px;">Період</td><td style="width:35px;">Рік</td><td style="width:100px;">Стан звіту</td><td style="width:15px;">№</td><td style="width:135px;">Створений</td></tr>
		</thead>
<?
	foreach($list as $item){
		echo '<tr><td>'.substr($item,18,8).'</td><td style="overflow:hidden;white-space:nowrap;">';
		$blank=$blanks->getByCode(substr($item,18,8));
		$b=$blank->fetch_object();
		echo $b->name;
		echo '</td><td>';
		if(substr($item,36,1)==1){
			$tp=array('Січень','Лютий','Березень','Квітень','Травень','Червень','Липень','Серпень','Вересень','Жовтень','Листопад','Грудень');
			echo $tp[((int)substr($item,37,2))-1];
		}elseif(substr($item,36,1)==2){
			if((int)substr($item,37,2)==3){
				echo 'I Квартал';
			}elseif((int)substr($item,37,2)==6){
				echo 'II Квартал';
			}elseif((int)substr($item,37,2)==9){
				echo 'III Квартал';
			}elseif((int)substr($item,37,2)==12){
				echo 'IV Квартал';
			}
		}elseif(substr($item,36,1)==3){
			echo 'Півріччя';
		}elseif(substr($item,36,1)==4){
			echo '9 місяців';
		}elseif(substr($item,36,1)==5){
			echo 'Рік';
		}
		echo '</td><td>'.substr($item,39,4).'</td><td>';
		switch (substr($item,26,1)) {
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
		echo '</td><td>';
		if(substr($item,26,1)==1){
			echo (int)substr($item,29,7);
		}else{
			echo (int)substr($item,27,2);
		}
		echo '</td><td>'.date("d.m.Y H:i:s", filectime($item)).'</td></tr>';
	}
?>
	</table>
</div>
