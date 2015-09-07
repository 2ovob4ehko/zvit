<div id="page">
	<table id="files">
		<thead>
			<tr>
				<td style="width:80px;cursor:pointer;" onclick="showAjax('filelist&field=code&order=asc')">Код</td>
				<td>Назва</td>
				<td style="width:80px;cursor:pointer;" onclick="showAjax('filelist&field=period&order=asc')">Період</td>
				<td style="width:35px;cursor:pointer;" onclick="showAjax('filelist&field=year&order=asc')">Рік</td>
				<td style="width:100px;cursor:pointer;" onclick="showAjax('filelist&field=stan&order=asc')">Стан звіту</td>
				<td style="width:15px;cursor:pointer;" onclick="showAjax('filelist&field=number&order=asc')">№</td>
				<td style="width:135px;cursor:pointer;" onclick="showAjax('filelist&field=time&order=asc')">Створений</td>
			</tr>
		</thead>
<?
	$file_array=array();
	while($f=$list->fetch_object()){
		$file_array[$f->id]=$f;
	}
	foreach($file_array as $file) {
		$blank=$blanks->getByCode($file->code);
		$b=$blank->fetch_object();
		if($b->parent==0){
			echo '<tr class="rows sup" id="row'.$file->id.'"><td>'.$file->code.'</td><td style="overflow:hidden;white-space:nowrap;">'.$b->name;
			viewLine($file);
			$bsub=$blanks->getByParent($b->id);
			while($bs=$bsub->fetch_object()){
				foreach($file_array as $fs){
					if(($bs->code==$fs->code)&&($file->period==$fs->period)&&($file->year==$fs->year)){
						echo '<tr class="rows" id="row'.$fs->id.'"><td style="padding-left:10px;"><font color="#BF532C">- </font>'.$fs->code.'</td><td style="overflow:hidden;white-space:nowrap;">'.$bs->name;
						viewLine($fs);
					}
				}
			}
		}
	}
function viewLine($f){
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
	echo '</td><td>';
	if(substr($f->code,0,1)!='E'){echo $f->number;}
	echo '</td><td>'.date("d.m.Y H:i:s",strtotime($f->time)).'</td></tr>';
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
		if($(this).hasClass("sup")){
			$('#export_menu').css('display','block');
		}else{
			$('#export_menu').css('display','none');
		}
	});
</script>
