<ul>
<?
	foreach($blank as $item){
		echo '<li class="categ_item_main"><b>'.$item['code'].'</b> '.$item['title'].'</li><ul>';
		foreach($item['child'] as $child){
			echo '<li class="categ_item_sub"><b>'.$child['code'].'</b> '.$child['title'].'</li>';
		}
		echo '</ul>';
	}
?>
</ul>
