<? $f=$firm->fetch_object(); ?>
<form id="save_form" action="<? echo base_url(); ?>?tab=savefirm" method="POST">
<table>
	<tr>
		<td>Тип платника</td>
		<td>
			<select name="face">
				<? while($face=$faceList->fetch_object()){
						echo '<option value="'.$face->id.'"';
						if($f->face==$face->id){echo 'selected';}
						echo '>'.$face->name.'</option>';
					}
				?>
			</select>
			<input name="id" value="<? echo $_GET['id']; ?>" type="hidden">
		</td>
	</tr>
	<tr>
		<td>Код ДПІ</td>
		<td>
			<select name="tax" id="select_tax">
				<? while($tax=$taxList->fetch_object()){
						echo '<option value="'.$tax->id.'"';
						if($f->tax==$tax->id){echo 'selected';}
						echo '>'.$tax->code.' '.$tax->name.'</option>';
					}
				?>
			</select>
		</td>
	</tr>
	<tr>
		<td>Код ПФУ</td>
		<td>
			<select name="pension" id="select_pens">
				<? while($pens=$pensList->fetch_object()){
						echo '<option value="'.$pens->id.'"';
						if($f->pension==$pens->id){echo 'selected';}
						echo '>'.$pens->code.' '.$pens->name.'</option>';
					}
				?>
			</select>
		</td>
	</tr>
	<tr>
		<td>Код ЄДРПОУ/ДРФО</td>
		<td>
			<input name="tin" class="middle" value="<? echo $f->tin ?>" type="text">
		</td>
	</tr>
	<tr>
		<td>Назва/ПІП платника</td>
		<td>
			<textarea name="name" class="big"><? echo $f->name ?></textarea>
		</td>
	</tr>
	<tr>
		<td>Код ПДВ</td>
		<td>
			<input name="tinpdv" class="middle" value="<? echo $f->tinpdv ?>" type="text">
		</td>
	</tr>
	<tr>
		<td>Вид діяльності (КВЕД)</td>
		<td>
			<select name="kved" id="select_kved">
				<? while($kved=$kvedList->fetch_object()){
						echo '<option value="'.$kved->id.'"';
						if($f->kved==$kved->id){echo 'selected';}
						echo '>'.$kved->code.' '.$kved->text.'</option>';
					}
				?>
			</select>
		</td>
		</tr>
	<tr>
		<td>Поштовий індекс</td>
		<td>
			<input name="zipcode" class="small" value="<? echo $f->zipcode ?>" type="text">
		</td>
	</tr>
	<tr>
		<td>Область</td>
		<td>
			<input name="state" class="big" value="<? echo $f->state ?>" type="text">
		</td>
	</tr>
	<tr>
		<td>Місто/Село</td>
		<td>
			<input name="city" class="big" value="<? echo $f->city ?>" type="text">
		</td>
	</tr>
	<tr>
		<td>Поштова адреса</td>
		<td>
			<textarea name="address" class="big"><? echo $f->address ?></textarea>
		</td>
	</tr>
	<tr>
		<td>Телефон</td>
		<td>
			<input name="telcode" class="small" value="<? echo $f->telcode ?>" type="text"><input name="tel" class="middle" value="<? echo $f->tel ?>" type="text">
		</td>
	</tr>
	<tr>
		<td>Факс</td>
		<td>
			<input name="fax" class="middle" value="<? echo $f->fax ?>" type="text">
		</td>
	</tr>
	<tr>
		<td>E-mail</td>
		<td>
			<input name="email" class="big" value="<? echo $f->email ?>" type="text">
		</td>
	</tr>
	<tr>
		<td>ДРФО Директора</td>
		<td>
			<input name="btin" class="middle" value="<? echo $f->btin ?>" type="text">
		</td>
	</tr>
	<tr>
		<td>ПІП Директора</td>
		<td>
			<input name="bfio" class="big" value="<? echo $f->bfio ?>" type="text">
		</td>
	</tr>
	<tr>
		<td>ДРФО Бухгалтера</td>
		<td>
			<input name="ctin" class="middle" value="<? echo $f->ctin ?>" type="text">
		</td>
	</tr>
	<tr>
		<td>ПІП Бухгалтера</td>
		<td>
			<input name="cfio" class="big" value="<? echo $f->cfio ?>" type="text">
		</td>
	</tr>
</table>
<div class="page_button" onclick="saveForm()">Зберегти</div>
</form>
<script>
	$("#select_tax").chosen();
	$("#select_pens").chosen();
	$("#select_kved").chosen();
	function saveForm(){
		$.post('<? echo base_url(); ?>?tab=savefirm', $('#save_form').serialize());
		alert("Дані підприємства збережено");
		showAjax('settings');
	}
</script>
