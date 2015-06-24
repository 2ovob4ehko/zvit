<?addScripts();
$doc_stan=1;?>
<div class="blank">
<table>
  <tr>
    <td  align="center" >
      <h2>ПОДАТКОВА ДЕКЛАРАЦІЯ ПЛАТНИКА ЄДИНОГО ПОДАТКУ -  ФІЗИЧНОЇ ОСОБИ - ПІДПРИЄМЦЯ</h2>
    </td>
  </tr>
</table>
<table  id="period" class="bordered">
  <tr>
    <td>звітна</td>
    <td>рік</td>
    <td>2015</td>
    <td><input type="checkbox" name="HD">Довідкова*</td>
	</tr>
</table>
<table class="bordered">
  <tr>
    <td colspan="2">Прізвище, ім'я, по батькові платника податку:</td>
  </tr>
  <tr>
    <td colspan="2">
		    <input class="filling" type="text" style="width:100%;" name="HNAME" value="ФОП Петренко Петро Петрович">
    </td>
	</tr>
  <tr>
    <td>Реєстраційний номер облікової картки платника податків - фізичної особи - підприємця:</td>
		<td>
      <input class="filling" type="text" style="width:100%;" name="HTIN" value="1234567890">
    </td>
	</tr>
	<tr>
    <td colspan="2" style="font-size:12px;"> або серія та номер паспорта (для фізичних осіб, які через релігійні переконання відмовляються від прийняття реєстраційного номера
облікової картки платника податків та повідомили про це відповідний орган державної податкової служби і мають відмітку у паспорті)</td>
	</tr>
</table>
<table class="bordered">
	<tr>
    <td colspan="3">Податкова адреса (місце проживання) платника податку</td>
		<td>поштовий індекс</td>
		<td><input class="filling" type="text" style="width:100%;" name="HZIP" value="18000"></td>
  </tr>
	<tr>
		<td>(область, місто):</td>
		<td><input class="filling" type="text" style="width:100%;" name="HREG" value="Черкаська"></td>
		<td><input class="filling" type="text" style="width:100%;" name="HCITY" value="Черкаси"></td>
		<td>міжміський код</td>
		<td><input class="filling" type="text" style="width:100%;" name="HINTURB" value="0472"></td>
	</tr>
	<tr>
		<td>Адреса:</td>
		<td colspan="2"><input class="filling" type="text" style="width:100%;" name="HLOC" value="вул. Гагаріна 7 кв 1"></td>
		<td>телефон</td>
		<td><input class="filling" type="text" style="width:100%;" name="HTEL" value="764862"></td>
	</tr>
	<tr>
		<td>Електронна адреса:</td>
		<td colspan="2"><input class="filling" type="text" style="width:100%;" name="HEMAIL" value="1@ukr.net"></td>
		<td>факс:</td>
		<td><input class="filling" type="text" style="width:100%;" name="HFAX" value="764862"></td>
	</tr>
</table>
<table class="bordered">
  <tr>
    <td>найменування органу державної податкової служби, до якого подається податкова декларація:</td>
	</tr>
  <tr>
		<td><input class="filling" type="text" style="width:100%;" name="HSTI" value="2301 ДПІ у м. Черкасах"></td>
	</tr>
</table>
<table>
  <tr>
    <td>Види підприємницької діяльності, які здійснювалися у звітному періоді:</td>
	</tr>
</table>
<table class="bordered">
  <tr>
		<td>номер згідно з КВЕД</td>
		<td>назва згідно з КВЕД</td>
 </tr>
 <tr>
   <td>62.02</td>
   <td>Програмування</td>
 </tr>
</table>
<table class="bordered">
  <tr>
    <td>Фактична чисельність найманих працівників у  звітному  періоді:</td>
		<td><input class="filling" type="text" style="width:100%;" name="HNACTL" value="12"></td>
	</tr>
</table>
<table><tr><td><font size="-1">* Подається з метою отримання довідки про доходи за інший період, ніж квартальний (річний) податковий (звітний) період, наростаючим підсумком.</font></td></tr></table>
<br>
<table>
  <tr>
    <td align="center"><b>ПОКАЗНИКИ ГОСПОДАРСЬКОЇ ДІЯЛЬНОСТІ ДЛЯ ПЛАТНИКІВ ЄДИНОГО ПОДАТКУ ІІІ  ГРУПИ </b></td>
  </tr>
</table>
<table class="bordered">
  <tr align="center">
    <td>Назва показника</td>
    <td>Код рядка</td>
    <td>Обсяг (грн.)*</td>
  </tr>
  <tr align="center">
    <td>1</td>
    <td>2</td>
    <td>3</td>
  </tr>
  <tr>
    <td>Сума доходу за звітний (податковий) період, що оподатковується за ставкою 2 %</td>
    <td align="center">11</td>
    <td align="right"><input class="filling" type="text" style="width:100%;" name="R011G3" onchange="fixedToDecimal(this)" value=""></td>
  </tr>
  <tr>
    <td>Сума доходу за звітний (податковий) період, що оподатковується за ставкою 4 %</td>
    <td align="center">12</td>
    <td align="right"><input class="filling" type="text" style="width:100%;" name="R012G3" onchange="fixedToDecimal(this)" value=""></td>
  </tr>
  <tr>
    <td>Сума доходу, що перевищує обсяги, встановлені підпунктом 3 пункту 291.4 статті 291 глави 1 розділу XIV Податкового кодексу України, у звітному (податковому) періоді</td>
    <td align="center">13</td>
    <td align="right"><input class="filling" type="text" style="width:100%;" name="R013G3" onchange="fixedToDecimal(this)" value=""></td>
  </tr>
  <tr>
    <td>Сума доходу, отриманого при застосуванні іншого способу розрахунків, ніж передбачено пунктом 291.6 статті 291 глави 1 розділу XIV Податкового кодексу України, у звітному (податковому) періоді</td>
    <td align="center">14</td>
    <td align="right"><input class="filling" type="text" style="width:100%;" name="R014G3" onchange="fixedToDecimal(this)" value=""></td>
  </tr>
  <tr>
    <td>Сума доходу, отриманого від здійснення видів діяльності, які не дають права на застосування спрощеної системи оподаткування, у звітному (податковому) періоді</td>
    <td align="center">15</td>
    <td align="right"><input class="filling" type="text" style="width:100%;" name="R015G3" onchange="fixedToDecimal(this)" value=""></td>
  </tr>
</table>
<table><tr><td><font size="-1">* Заповнюється наростаючим підсумком з початку року.</font></td></tr></table>
<br>
<table>
  <tr>
    <td align="center"><b>ВИЗНАЧЕННЯ ПОДАТКОВИХ ЗОБОВ'ЯЗАНЬ ПО ЄДИНОМУ ПОДАТКУ*</b></td>
  </tr>
</table>
<table class="bordered">
  <tr align="center">
    <td>Назва показника</td>
    <td>Код рядка</td>
    <td>Сума (грн.)</td>
  </tr>
  <tr align="center">
    <td>1</td>
    <td>2</td>
    <td>3</td>
  </tr>
  <tr>
    <td><b>Загальна сума доходу за звітний (податковий) період</b><br/>(сума значень рядків 01 + 02 + 03 + 04 + 05 + 06 + 07 + 08 + 09 + 10 + 11 + 12 + 13 + 14 + 15 + 16 + 17 + 18 + 19 + 20)</td>
    <td align="center">21</td>
    <td align="right"><input class="calculation" type="text" style="width:100%;" name="R021G3" onchange="fixedToDecimal(this)" value=""></td>
  </tr>
  <tr>
    <td>Сума податку за ставкою 15 % <br />((рядок 02 + рядок 03 + рядок 04 + рядок 05 + рядок 07 + рядок 08 + рядок 09 + рядок 10 + рядок 13 + рядок 14 + рядок 15 + рядок 18 + рядок 19 + рядок 20) х 15 %)</td>
    <td align="center">22</td>
    <td align="right"><input class="calculation" type="text" style="width:100%;" name="R022G3" onchange="fixedToDecimal(this)" value=""></td>
  </tr>
  <tr>
    <td>Сума податку за ставкою 2 % (рядок 11 х 2 %)</td>
    <td align="center">23</td>
    <td align="right"><input class="calculation" type="text" style="width:100%;" name="R023G3" onchange="fixedToDecimal(this)" value=""></td>
  </tr>

	 <tr>
    <td>Сума податку за ставкою 4 % (рядок 12 х 4 %)</td>
    <td align="center">24</td>
    <td align="right"><input class="calculation" type="text" style="width:100%;" name="R024G3" onchange="fixedToDecimal(this)" value=""></td>
  </tr>
  <tr>
    <td>Нараховано всього за звітний (податковий) період <br/>(рядок 22 + рядок 23 +  рядок 24 + рядок 25 + рядок 26))</td>
    <td align="center">27</td>
    <td align="right"><input class="calculation" type="text" style="width:100%;" name="R027G3" onchange="fixedToDecimal(this)" value=""></td>
  </tr>
	<tr>
    <td>Нараховано за попередній звітний (податковий) період (значення рядка 27 декларації попереднього звітного (податкового) періоду)</td>
    <td align="center">28</td>
    <td align="right"><input class="filling" type="text" style="width:100%;" name="R028G3" onchange="fixedToDecimal(this)" value=""></td>
  </tr>
	<tr>
    <td>Сума єдиного податку, яка підлягає нарахуванню та сплаті в бюджет за підсумками поточного звітного (податкового) періоду (рядок 27 - рядок 28)</td>
    <td align="center">29</td>
    <td align="right"><input class="calculation" type="text" style="width:100%;" name="R029G3" onchange="fixedToDecimal(this)" value=""></td>
  </tr>
</table>
<table><tr><td><font size="-1">* Не заповнюється платником податку, що подає декларацію "Довідково".</font></td></tr></table>
<br/>
<table>
  <tr>
    <td align="center"><b>ВИЗНАЧЕННЯ ПОДАТКОВИХ ЗОБОВ'ЯЗАНЬ У ЗВ'ЯЗКУ З ВИПРАВЛЕННЯМ САМОСТІЙНО ВИЯВЛЕНИХ ПОМИЛОК*</b></td>
  </tr>
</table>
<table class="bordered">
  <tr align="center">
    <td>Назва показника</td>
    <td>Код рядка</td>
    <td>Сума (грн.)</td>
  </tr>
  <tr align="center">
    <td>1</td>
    <td>2</td>
    <td>3</td>
  </tr>
  <tr>
    <td>Сума єдиного податку, яка підлягала перерахуванню до бюджету, за даними звітного (податкового) періоду, в якому виявлена помилка (рядок 29 відповідної декларації)</td>
    <td align="center">30</td>
    <td align="right"><input class="filling" type="text" style="width:100%;" name="R030G3" onchange="fixedToDecimal(this)" value=""></td>
  </tr>
  <tr>
    <td>Уточнена сума податкових зобов'язань за звітний (податковий) період, у якому виявлена помилка</td>
    <td align="center">31</td>
    <td align="right"><input class="filling" type="text" style="width:100%;" name="R031G3" onchange="fixedToDecimal(this)" value=""></td>
  </tr>
  <tr>
    <td colspan="3"><b>Розрахунки у зв'язку з виправленням помилки:</b></td>
  </tr>
	<tr>
    <td>збільшення суми, яка підлягала перерахуванню до бюджету <br/>(рядок 31 - рядок 30, якщо рядок 31 &gt; рядка 30) </td>
    <td align="center">32</td>
    <td align="right"><input class="calculation" type="text" style="width:100%;" name="R032G3" onchange="fixedToDecimal(this)" value=""></td>
  </tr>
  <tr>
    <td>зменшення суми, яка підлягала перерахуванню до бюджету**<br/>(рядок 31- рядок 30, якщо рядок 31 &lt; рядка 30)</td>
    <td align="center">33</td>
    <td align="right"><input class="calculation" type="text" style="width:100%;" name="R033G3" onchange="fixedToDecimal(this)" value=""></td>
  </tr>
	<tr>
    <td>Сума штрафу, яка нарахована платником податку самостійно у зв'язку з виправленням помилки,
      <input class="calculation" type="text" style="width:20px;" name="R034G1" value=""> % (рядок 32 х 3 % або 5 %)</td>
    <td align="center">34</td>
    <td align="right"><input class="calculation" type="text" style="width:100%;" name="R034G3" onchange="fixedToDecimal(this)" value=""></td>
  </tr>
	<tr>
    <td>Сума пені, яка нарахована платником податку самостійно відповідно до підпункту 129.1.2 пункту 129.1 статті 129 глави 12 розділу II Податкового кодексу України</td>
    <td align="center">35</td>
    <td align="right"><input class="filling" type="text" style="width:100%;" name="R035G3" onchange="fixedToDecimal(this)" value=""></td>
  </tr>
</table>
<table>
  <tr>
    <td><font size="-1">*  Заповнюється  платником податку, який уточнює податкові зобов'язання.</font></td>
  </tr>
	<tr>
    <td><font size="-1">** Відображаються тільки позитивні значення.</font></td>
  </tr>
</table><br/>
<table>
  <tr>
    <td>Фізична особа - підприємець</td>
    <td><input class="filling" type="text" style="width:100%;" name="HBOS" value="12"></td>
		<td><input class="filling" type="text" style="width:100px;" name="HKBOS" value="12"></td>
  </tr>
  <tr>
    <td></td>
    <td align="center"><font size="-1">(ініціали та прізвище)</font></td>
    <td colspan="2"><font size="-1">(реєстраційний номер облікової картки платника податків)</font></td>
  </tr>
</table>
</div>
<script>
var autocount=true;
function fixedToDecimal(el){
  var n=Math.abs(parseFloat(el.value)).toFixed(2);
  if(n=='NaN'){
    el.value='';
  }else{
    el.value=n;
  }
}
setInterval(function(){
  if(autocount){
    var i11=Number($("input[name='R011G3']").val());
    var i12=Number($("input[name='R012G3']").val());
    var i13=Number($("input[name='R013G3']").val());
    var i14=Number($("input[name='R014G3']").val());
    var i15=Number($("input[name='R015G3']").val());
    var i28=Number($("input[name='R028G3']").val());
    var i30=Number($("input[name='R030G3']").val());
    var i31=Number($("input[name='R031G3']").val());

    var i21=(i11+i12+i13+i14+i15).toFixed(2);
    i21=i21==0 ? '' : i21;
    $("input[name='R021G3']").val(i21);
    var i22=((i13+i14+i15)*0.15).toFixed(2);
    i22=i22==0 ? '' : i22;
    $("input[name='R022G3']").val(i22);
    var i23=(i11*0.02).toFixed(2);
    i23=i23==0 ? '' : i23;
    $("input[name='R023G3']").val(i23);
    var i24=(i12*0.04).toFixed(2);
    i24=i24==0 ? '' : i24;
    $("input[name='R024G3']").val(i24);
    var i27=(Number(i22)+Number(i23)+Number(i24)).toFixed(2);
    i27=i27==0 ? '' : i27;
    $("input[name='R027G3']").val(i27);
    var i29=(Number(i27)-Number(i28)).toFixed(2);
    i29=i29==0 ? '' : i29;
    $("input[name='R029G3']").val(i29);
    if(i30!=0){
      if(<?echo $doc_stan;?><3){
        var i341=3;
      }else{
        var i341=5;
      }
      $("input[name='R034G1']").val(i341);
    }else{
      $("input[name='R034G1']").val('');
      $("input[name='R034G3']").val('');
    }
    if(i31>i30){
      var i32=(Number(i31)-Number(i30)).toFixed(2);
      i32=i32==0 ? '' : i32;
      $("input[name='R032G3']").val(i32);
      $("input[name='R033G3']").val('');
      var i34=(Number(i32)*i341/100).toFixed(2);
      i34=i34==0 ? '' : i34;
      $("input[name='R034G3']").val(i34);
    }else if(i31<i30){
      var i33=(Number(i30)-Number(i31)).toFixed(2);
      i33=i33==0 ? '' : i33;
      $("input[name='R033G3']").val(i33);
      $("input[name='R032G3']").val('');
      var i34=(Number(i33)*i341/100).toFixed(2);
      i34=i34==0 ? '' : i34;
      $("input[name='R034G3']").val(i34);
    }else{
      $("input[name='R032G3']").val('');
      $("input[name='R033G3']").val('');
    }

  }
},500);
</script>
