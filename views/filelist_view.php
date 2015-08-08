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
		echo '<tr class="rows" id="row'.$f->id.'"><td>'.$f->code.'</td><td style="overflow:hidden;white-space:nowrap;">';
		$blank=$blanks->getByCode($f->code);
		$b=$blank->fetch_object();
		echo $b->name;
		$tp=array('Січень','Лютий','Березень','Квітень','Травень','Червень','Липень','Серпень','Вересень','Жовтень','Листопад','Грудень','І Квартал','ІІ Квартал','ІІІ Квартал','IV Квартал','Півріччя','9 місяців','Рік');
		echo '</td><td>'.$tp[($f->period)-1].'</td><td>'.$f->year.'</td><td>';
		if(substr($f->code,0,1)=='E'){
			switch ($f->stan) {
				case 1:
					echo 'початкова';
					break;
				case 2:
					echo 'скасовуюча';
					break;
				case 3:
					echo 'додаткова';
					break;
			}
		}else{
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
		}
		echo '</td><td>'.$f->number.'</td><td>'.date("d.m.Y H:i:s",strtotime($f->time)).'</td></tr>';
	}
?>
	</table>
</div>
<script>
	setInterval(function(){
		if($("div[id='Список файлів']").is(':visible')) {
			$('#edit_button').css('display','inline-block');
			$('#delete_button').css('display','inline-block');
			$('#pdf_button').css('display','inline-block');
		}else{
			$('.icon_button').css('display','none');
		}
	},100);
	$('#delete_button').click(function(){
		$.ajax({
			url: "?tab=delfile&id="+selected.split('row')[1],
			cache: false,
			success: function(){
				showAjax('filelist&field=id&order=asc');
			}
		});
	});
	$('#pdf_button').click(function(){
		$('#pdfo_button').css('display','none');
		$.ajax({
			url: "?tab=createpdf&id="+selected.split('row')[1],
			cache: false,
			dataType: 'json',
			success: function(json){
				$('#pdfo_button').css('display','inline-block');
				console.log("logPDF: "+json.log);
				$('#pdfo_button').attr('onclick','window.open(\''+json.title+'\')');
			}
		});
	});
	$('.rows').click(function(){
		$('.rows').css('background','#fff').css('color','#000');
		$(this).css('background','#37d').css('color','#fff');
		selected=$(this).attr("id");
	});
</script>
