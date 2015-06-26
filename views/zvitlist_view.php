<fieldset>
<?
	foreach($blank as $item){
		echo '<input value="'.$item['id'].'" type="radio" blank="'.$item['id'].'" name="main_blank"><label><b>'.$item['code'].'</b> '.$item['title'].'</label><div class="sub_blank" id="b'.$item['id'].'">';
		foreach($item['child'] as $child){
			echo '<input value="'.$child['id'].'" type="checkbox" name="sub_blank[]"><label><b>'.$child['code'].'</b> '.$child['title'].'</label><br>';
		}
		echo '</div><br>';
	}
?>
</fieldset>
<script>
$(document).ready(function(){
	$("input[type='radio']").click(function(){
		$(".sub_blank").hide();
		$("input[type='checkbox']").prop( "checked",false);
		var i=$("input:checked").attr("blank");
		$("#b"+i).show();
	});
});
</script>
