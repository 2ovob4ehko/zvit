<div id="page">
	<div id="categ_list">
		<ul>
		<?
			foreach($categs as $item){
				echo '<li class="categ_item_main" onclick="showZvitlist('.$item['id'].')">'.$item['title'].'</li><ul>';
				foreach($item['child'] as $child){
					echo '<li class="categ_item_sub" onclick="showZvitlist('.$child['id'].')">'.$child['title'].'</li>';
				}
				echo '</ul>';
			}
		?>
	</ul>
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
