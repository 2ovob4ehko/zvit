<table>
	<tr>
		<td>Тип платника</td>
		<td>
			<select name="face">
				<? while($face=$faceList->fetch_object()){
						echo '<option value="'.$face->id.'">'.$face->name.'</option>';
					}
				?>
			</select>
		</td>
	</tr>
	<? $f=$firm->fetch_object(); ?>
	<tr>
		<td>Код ДПІ</td>
		<td>
			<input name="tax" class="small" value="<? echo $f->tax ?>" type="text">
		</td>
	</tr>
	<tr>
		<td>Код ПФУ</td>
		<td>
			<input name="pension" class="small" value="<? echo $f->pension ?>" type="text">
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
			<input name="kved" class="small" value="<? echo $f->kved ?>" type="text">
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
<div class="page_button">Зберегти</div>
