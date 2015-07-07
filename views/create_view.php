<div id="page">
	<div id="categ_list">
		<ul>
		<?
			foreach($categs as $item){
				echo '<li class="categ_item_main">'.$item['title'].'</li><ul>';
				foreach($item['child'] as $child){
					echo '<li class="categ_item_sub" onclick="showZvitlist('.$child['id'].')">'.$child['title'].'</li>';
				}
				echo '</ul>';
			}
		?>
	</ul>
	</div>
	<div id="create_data">
		<form id="create_form">
		<div id="zvit_data">
			<table>
				<tr><td>Рік</td><td>Період</td><td>Стан звіту</td></tr>
				<tr>
					<td>
						<select name="year">
							<?for($i=Date('Y')+1;$i>Date('Y')-5;$i--){
								echo '<option value="'.$i.'" ';
								if($i==Date('Y')){echo 'selected';}
								echo '>'.$i.'</option>';
							}?>
						</select>
					</td>
					<td>
						<select name="period">
							<?
							$period=array('Січень','Лютий','Березень','Квітень','Травень','Червень','Липень','Серпень','Вересень','Жовтень','Листопад','Грудень','І Квартал','ІІ Квартал','ІІІ Квартал','IV Квартал','Півріччя','9 місяців','Рік');
							for($i=1;$i<=count($period);$i++){
								echo '<option value="'.$i.'">'.$period[$i-1].'</option>';
							}
							?>
						</select>
					</td>
					<td>
						<select name="stan">
							<option value="1">Звітний</option>
							<option value="2">Новий звітний</option>
							<option value="3">Уточнюючий</option>
						</select>
					</td>
				</tr>
			</table>
		</div>
		<div id="zvit_list">
			<?include ('views/zvitlist_view.php');?>
		</div>
	</form>
		<div class="page_button" onclick="createDocuments()">Створити</div>
	</div>
</div>
<script>
function showZvitlist(id){
	$.ajax({
		url: "?tab=zvitlist&id="+id,
		cache: false,
		dataType: 'html',
		success: function(html){
			$('#zvit_list').html(html);
		}
	});
}
function createDocuments(){
	$.post('<? echo base_url(); ?>?tab=createdoc', $('#create_form').serialize(),function(json){
		showAjax('blank&title='+json.title[0]+'&year='+json.year+'&period='+json.period+'&stan='+json.stan);
	},"json");
}
</script>
