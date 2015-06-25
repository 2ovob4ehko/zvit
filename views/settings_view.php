<div id="page">
	<div id="firm_list">
		<div class="page_button" onclick="newFirm()">Створити нове підприємство</div>
		<? while($firm=$myfirms->fetch_object()){
				echo '<div class="firm_item" onclick="showFirmdata('.$firm->id.')">'.$firm->tin.' - '.$firm->name.'</div>';
			}
		?>
	</div>
	<div id="firm_data">
		Не обрано підприємство для відображення даних
	</div>
</div>
<script>
function showFirmdata(id){
	$.ajax({
		url: "?tab=firmdata&id="+id,
		cache: false,
		dataType: 'html',
		success: function(html){
			$('#firm_data').html(html);
		}
	});
}
function newFirm(){
	$.ajax({
		url: "?tab=newfirm",
		cache: false,
		success: function(){
			showAjax('settings');
		}
	});
}
</script>
