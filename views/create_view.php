<div id="page">
	<div id="categ_list">
		<? while($c=$categs->fetch_object()){
				echo '<div class="categ_item" onclick="showZvitlist('.$c->id.')">'.$c->name.'</div>';
			}
		?>
	</div>
	<div id="zvit_list">
		Тут потрібно відображати список звітів за вибраною категорією. По замовчуванню показувати всі звіти.
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
</script>
