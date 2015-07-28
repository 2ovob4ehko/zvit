<div id="page">
  <div class="blank">
    <table>
      <tr>
        <td><input type="checkbox" checked name="autocount">Авторозрахунок</td>
        <td><button onclick="saveDocuments()">Зберегти</button></td>
      </tr>
    </table>
  <form method="POST" id="blank_form">
<!--Верх для всіх однаковий-->
<table style="width:100%;">
  <tr>
    <td style="text-align:center;">
      <H2>Форма № 1 ДФ Податковий розрахунок<br/>сум доходу, нарахованого (сплаченого) на користь фізичних осіб, і сум утриманого з них податку</H2>
    </td>
  </tr>
</table>
<br/>
<table  id="period" class="bordered">
  <?
    if($stan==1){
      echo '<input type="hidden" name="doc_type" value="0">
      <input type="hidden" name="doc_cnt" value="'.$number.'">';
    }else{
      echo '<input type="hidden" name="doc_type" value="'.$number.'">
      <input type="hidden" name="doc_cnt" value="1">';
    }
  ?>
  <input type="hidden" name="period" value="<? echo $period; ?>">
  <input type="hidden" name="year" value="<? echo $year; ?>">
  <input type="hidden" name="stan" value="<? echo $stan; ?>">
  <tr>
    <td><?
    switch ($stan) {
      case 1:
        $tstan='звітний';
        break;
      case 2:
        $tstan='новий звітний';
        break;
      case 3:
        $tstan='уточнюючий';
        break;
    }
    echo $tstan;
    ?></td>
    <td><?
    $tperiod=array('Січень','Лютий','Березень','Квітень','Травень','Червень','Липень','Серпень','Вересень','Жовтень','Листопад','Грудень','І Квартал','ІІ Квартал','ІІІ Квартал','IV Квартал','Півріччя','9 місяців','Рік');
    echo $tperiod[$period-1];
    $f=$myfirm->fetch_object();
    ?></td>
    <td><? echo $year; ?></td>
  </tr>
</table>
<br/>
<table style="width:100%;">
  <tr style="text-align:center;">
    <td>
      <input class="filling" name="HTIN" type="text" style="width:100%" value="<? echo $f->tin; ?>">
    </td>
  </tr>
  <tr style="text-align:center;">
    <td><font size="-1">(податковий номер юридичної особи (податковий номер або серія та номер  паспорта* самозайнятої фізичної особи))</font></td>
  </tr>
</table>
<br/>
<table style="width:100%;">
  <tr style="text-align:center;">
    <td>
      <input class="filling" name="HNAME" type="text" style="width:100%" value="<? echo $f->name; ?>">
    </td>
  </tr>
  <tr style="text-align:center;">
    <td><font size="-1">(найменування юридичної особи чи прізвище, ім’я та по батькові самозайнятої фізичної особи)</font></td>
  </tr>
</table>
<br/>
<table style="width:100%;">
  <tr style="text-align:center;">
    <td><input class="filling" name="HLOC" type="text" style="width:100%" value="<? echo $f->address; ?>"></td>
  </tr>
  <tr style="text-align:center;">
    <td><font size="-1">(податкова адреса юридичної особи чи самозайнятої  фізичної особи)</font></td>
  </tr>
</table>
<br/>
<table style="width:100%;">
  <tr style="text-align:center;">
    <td><input class="filling" name="HSTI" type="text" style="width:100%" value="<? echo $f->tax_code.' '.$f->tax_name; ?>"></td>
  </tr>
  <tr>
    <td style="text-align:center;"><font size="-1">(найменування контролюючого  органу)</font></td>
  </tr>
</table>
<br/>
<table style="width:100%;">
  <tr>
    <td style="width:30%;">Працювало за трудовими договорами (контрактами)</td>
      <td style="width:15%;text-align:right;">
      <input class="filling" name="R00G01I" type="text" style="width:100%" value=""></td>
      <td style="width:20%;text-align:right;">ПОРЦІЯ №</td>
      <td><input class="filling" name="R00G03I" type="text" style="width:100%" value="1"></td>
  </tr>
  <tr>
    <td style="width:30%">Працювало за цивільно-правовими договорами</td>
    <td style="width:15%;text-align:right;">
      <input class="filling" name="R00G02I" type="text" style="width:100%" value="">
    </td>
  </tr>
</table>
<br/>
<table style="width:100%">
  <tr>
    <td><b>Розділ І.  Суми доходу, нарахованого (сплаченого) на користь фізичних осіб, і суми утриманого з них податку</b></td>
  </tr>
</table>
<table style="width:100%;table-layout:fixed;word-wrap:break-word;" class="bordered">
<thead>
  <tr style="text-align:center;">
    <td rowspan="2" style="width:3%">№<br/>з/п</td>
    <td rowspan="2">Податковий номер або серія та номер паспорта*</td>
    <td rowspan="2">Сума нарахованого доходу<br/>(грн., коп.)</td>
    <td rowspan="2">Сума виплаченого доходу<br/>(грн., коп.)</td>
    <td colspan="2">Сума утриманого податку<br/>(грн., коп.)</td>
    <td rowspan="2">Ознака<br/>доходу<div class="question" onclick="alert(textOznDoh,1);">?</div></td>
    <td colspan="2">Дата<div class="question" onclick="alert('Формат дати: ддммгггг',1);">?</div></td>
    <td rowspan="2">Ознака подат.<br/>соц. пільги<div class="question" onclick="alert(textLgot,1);">?</div></td>
    <td rowspan="2">Ознака<br/>(мінусування)</td>
    <td rowspan="2" style="width:20px">X</td>
  </tr>
  <tr style="text-align:center;">
    <td>нарахованого</td>
    <td>перерахованого</td>
    <td>прийняття на роботу</td>
    <td>звільнення з роботи</td>
  </tr>
</thead>
 <tbody id="rownum">
  <tr style="text-align:center;">
    <td><font size="-1">1</font></td>
    <td><font size="-1">2</font></td>
    <td><font size="-1">3a</font></td>
    <td><font size="-1">3</font></td>
    <td><font size="-1">4a</font></td>
    <td><font size="-1">4</font></td>
    <td><font size="-1">5</font></td>
    <td><font size="-1">6</font></td>
    <td><font size="-1">7</font></td>
    <td><font size="-1">8</font></td>
    <td><font size="-1">9</font></td>
    <td><font size="-1"></font></td>
  </tr>
  <tr style="text-align:center;" class="rownum">
    <td></td>
    <td><input style="width:100%;" type="text" name="T1RXXXXG02[]" class="filling" value=""></td>
    <td><input style="width:100%;" type="text" name="T1RXXXXG03A[]" onchange="fixedToDecimal(this)" class="filling" value=""></td>
    <td><input style="width:100%;" type="text" name="T1RXXXXG03[]" onchange="fixedToDecimal(this)" class="filling" value=""></td>
    <td><input style="width:100%;" type="text" name="T1RXXXXG04A[]" onchange="fixedToDecimal(this)" class="filling" value=""></td>
    <td><input style="width:100%;" type="text" name="T1RXXXXG04[]" onchange="fixedToDecimal(this)" class="filling" value=""></td>
    <td>
      <select style="width:100%;" name="T1RXXXXG05[]" class="filling">
        <option value=""></option>
      </select>
    </td>
    <td><input style="width:100%;" type="text" name="T1RXXXXG06D[]" class="filling" value=""></td>
    <td><input style="width:100%;" type="text" name="T1RXXXXG07D[]" class="filling" value=""></td>
    <td>
      <select style="width:100%;" name="T1RXXXXG08[]" class="filling">
        <option value=""></option>
      </select>
    </td>
    <td><input style="width:100%;" type="checkbox" name="T1RXXXXG09[]" class="filling"></td>
    <td><div class="del" onclick="$(this).parent().parent().remove()">&ndash;</div></td>
  </tr>
</tbody>
  <tr><td colspan="12"><div class="add" onclick="addNewRow();">+</div></td></tr>
  <tr style="text-align:center;">
    <td style="text-align:center;">Всього</td>
    <td style="text-align:center;">X</td>
    <td style="text-align:right;">
    <input type="text" name="R01G03A" onchange="fixedToDecimal(this)" style="width:100%" class="calculation" value="0"></td>
    <td style="text-align:right;">
    <input type="text" name="R01G03" class="calculation" onchange="fixedToDecimal(this)" style="width:100%" value="0"></td>
    <td style="text-align:right;">
    <input type="text" name="R01G04A" class="calculation" onchange="fixedToDecimal(this)" style="width:100%" value="0"></td>
    <td style="text-align:right;">
    <input type="text" name="R01G04" class="calculation" onchange="fixedToDecimal(this)" style="width:100%" value="0"></td>
    <td style="text-align:center;">X</td>
    <td style="text-align:center;">X</td>
    <td style="text-align:center;">X</td>
    <td style="text-align:center;">X</td>
    <td style="text-align:center;">X</td>
    <td style="text-align:center;">X</td>
  </tr>
</table>
<br/>
<table style="width:100%;">
   <tr>
    <td><b>Розділ ІІ. Оподаткування процентів, виграшів (призів) у лотерею та військовий збір</b></td>
  </tr>
</table>
<table style="width:100%;table-layout:fixed;word-wrap:break-word;" class="bordered">
  <tr style="text-align:center;">
    <td rowspan="2" style="width:20%;">Вид збору</td>
    <td rowspan="2" style="width:20%;">Загальна сума нарахованого доходу<br/>(грн., коп.)</td>
    <td rowspan="2" style="width:20%;">Загальна сума виплаченого доходу<br/>(грн., коп.)</td>
    <td colspan="2">Загальна сума утриманого податку, збору<br/>(грн., коп.)</td>
  </tr>
  <tr style="text-align:center;">
    <td style="width:20%;">нарахованого</td>
    <td style="width:20%;">перерахованого</td>
   </tr>
   <tr>
    <td style="text-align:center;">Оподаткування процентів</td>
    <td style="text-align:right;"><input type="text" name="R0201G03A" onchange="fixedToDecimal(this)" class="filling" style="width:100%" value=""></td>
    <td style="text-align:center;">X</td>
    <td style="text-align:right;"><input type="text" name="R0201G04A" onchange="fixedToDecimal(this)" class="filling" style="width:100%" value=""></td>
    <td style="text-align:right;"><input type="text" name="R0201G04" onchange="fixedToDecimal(this)" class="filling" style="width:100%" value=""></td>
  </tr>
  <tr>
    <td style="text-align:center;">Оподаткування процентів - виключення**</td>
    <td style="text-align:right;"><input type="text" name="R0202G03A" class="filling" style="width:100%" onchange="fixedToDecimal(this)" value=""></td>
    <td style="text-align:center;">X</td>
    <td style="text-align:right;"><input type="text" name="R0202G04A" class="filling" style="width:100%" onchange="fixedToDecimal(this)" value=""></td>
    <td style="text-align:right;"><input type="text" name="R0202G04" class="filling" onchange="fixedToDecimal(this)" style="width:100%" value=""></td>
  </tr>
  <tr>
    <td style="text-align:center;">Оподаткування виграшів (призів) у лотерею</td>
    <td style="text-align:right;"><input type="text" name="R0203G03A" onchange="fixedToDecimal(this)" class="filling" style="width:100%" value=""></td>
    <td style="text-align:right;"><input type="text" name="R0203G03" onchange="fixedToDecimal(this)" class="filling" style="width:100%" value=""></td>
    <td style="text-align:right;"><input type="text" name="R0203G04A" onchange="fixedToDecimal(this)" class="filling" style="width:100%" value=""></td>
    <td style="text-align:right;"><input type="text" name="R0203G04" onchange="fixedToDecimal(this)" class="filling" style="width:100%" value=""></td>
  </tr>
  <tr>
    <td style="text-align:center;">Оподаткування виграшів (призів) у лотерею - виключення***</td>
    <td style="text-align:right;"><input type="text" name="R0204G03A" onchange="fixedToDecimal(this)" class="filling" style="width:100%" value=""></td>
    <td style="text-align:right;"><input type="text" name="R0204G03" onchange="fixedToDecimal(this)" class="filling" style="width:100%" value=""></td>
    <td style="text-align:right;"><input type="text" name="R0204G04A" onchange="fixedToDecimal(this)" class="filling" style="width:100%" value=""></td>
    <td style="text-align:right;"><input type="text" name="R0204G04" onchange="fixedToDecimal(this)" class="filling" style="width:100%" value=""></td>
  </tr>
  <tr>
    <td style="text-align:center;">Військовий збір</td>
    <td style="text-align:right;"><input type="text" name="R0205G03A" onchange="fixedToDecimal(this)" class="filling" style="width:100%" value=""></td>
    <td style="text-align:right;"><input type="text" name="R0205G03" onchange="fixedToDecimal(this)" class="filling" style="width:100%" value=""></td>
    <td style="text-align:right;"><input type="text" name="R0205G04A" onchange="fixedToDecimal(this)" class="filling" style="width:100%" value=""></td>
    <td style="text-align:right;"><input type="text" name="R0205G04" onchange="fixedToDecimal(this)" class="filling" style="width:100%" value=""></td>
  </tr>
  <tr>
    <td style="text-align:center;">Військовий збір - виключення****</td>
    <td style="text-align:right;"><input type="text" name="R0206G03A" onchange="fixedToDecimal(this)" class="filling" style="width:100%" value=""></td>
    <td style="text-align:right;"><input type="text" name="R0206G03" onchange="fixedToDecimal(this)" class="filling" style="width:100%" value=""></td>
    <td style="text-align:right;"><input type="text" name="R0206G04A" onchange="fixedToDecimal(this)" class="filling" style="width:100%" value=""></td>
    <td style="text-align:right;"><input type="text" name="R0206G04" onchange="fixedToDecimal(this)" class="filling" style="width:100%" value=""></td>
  </tr>
</table>
<br/>
<table style="width:100%;">
  <tr>
    <td style="width:20%;">Кількість рядків<br/>(Розділ І)</td>
    <td style="width:15%;">
      <input name="R02G01I" class="calculation" type="text" style="width:100%;" value=""></td>
    <td style="width:25%;">Кількість фізичних осіб<br/>(Розділ І)</td>
    <td style="width:15%;">
      <input name="R02G02I" class="filling" type="text" style="width:100%;" value=""></td>
    <td style="width:20%;">Кількість сторінок</td>
    <td style="width:15%;">
      <input name="R02G03I" type="text" style="width:100%;" class="filling" value=""></td>
  </tr>
</table>
<br/>
<table style="width:100%;">
  <tr>
    <td>Самозайнята фізична особа</td>
    <td style="width:100px;"><input name="HKBOS" style="width:100%" type="text" class="filling" value="<? echo $f->btin; ?>"></td>
    <td style="width:250px;"><input name="HBOS" style="width:100%" type="text" class="filling" value="<? echo $f->bfio; ?>"></td>
    <td style="width:120px;"><input name="HTELBOS" type="text" style="width:100%" class="filling" value=""></td>
  </tr>
   <tr style="text-align:center;">
    <td></td>
    <td><font size="-1">(податковий  номер або серія  та номер паспорта* керівника юридичної особи)</font></td>
    <td><font size="-1">(ініціали, прізвище)</font></td>
    <td><font size="-1">(тел.)</font></td>
  </tr>
  <tr>
    <td>Головний бухгалтер</td>
    <td>
      <input name="HKBUH" type="text" class="filling" style="width:100%" value="<? echo $f->ctin; ?>"></td>
    <td>
      <input name="HBUH" style="width:100%" class="filling" type="text" value="<? echo $f->cfio; ?>"></td>
    <td>
      <input name="HTELBUH" class="filling" style="width:100%" type="text" value=""></td>
  </tr>
  <tr style="text-align:center;">
    <td></td>
    <td><font size="-1">(податковий номер або серія  та номер паспорта* головного бухгалтера)</font></td>
    <td><font size="-1">(ініціали, прізвище)</font></td>
    <td><font size="-1">(тел.)</font></td>
  </tr>
</table>
<br/>
<table style="width:100%">
  <tr>
    <td>* Для фізичної особи, яка має відмітку в паспорті про право здійснювати будь-які платежі за серією та номером паспорта.</td>
  </tr>
  <tr>
    <td>** Виключення інформації щодо оподаткування процентів при проведенні коригувань.</td>
  </tr>
  <tr>
    <td>*** Виключення інформації щодо оподаткування виграшів (призів) у лотерею при проведенні коригувань.</td>
  </tr>
  <tr>
    <td>**** Виключення інформації щодо військового збору при проведенні коригувань.</td>
  </tr>
</table>
<!--Низ міняєтся від ситуації-->
</form>
  </div>
</div>
<script>
var textOznDoh='<table style="width:200px; border:1px solid black;border-spacing:0;border-collapse:collapse;">';
var textLgot='<table style="width:200px; border:1px solid black;border-spacing:0;border-collapse:collapse;">';
$(document).ready(function(){
  $.getScript("<? echo $base_url; ?>js/1df_ozndoh.js",function(){
    oznDoh.forEach(function(item){
      $("select[name='T1RXXXXG05[]']").append('<option value="'+item.ozn+'">'+item.ozn+'</option>');
      textOznDoh+='<tr><td style="border:1px solid black;">'+item.ozn+'</td><td  style="border:1px solid black;">'+item.name+'</td></tr>';
    });
    textOznDoh+='</table>';
  });
  $.getScript("<? echo $base_url; ?>js/1df_lgot.js",function(){
    lgot.forEach(function(item){
      $("select[name='T1RXXXXG08[]']").append('<option value="'+item.kod+'">'+item.kod+'</option>');
      textLgot+='<tr><td style="border:1px solid black;">'+item.kod+'</td><td  style="border:1px solid black;">'+item.name+'</td></tr>';
    });
    textLgot+='</table>';
  });
});

function fixedToDecimal(el){
  var n=Math.abs(parseFloat(el.value)).toFixed(2);
  if(n=='NaN'){
    el.value='';
  }else{
    el.value=n;
  }
}
setInterval(function(){
  if($("input[name='autocount']").prop("checked")){
    var sum=0;
    $("div[data-page][style='display: block;']").find("input[name='T1RXXXXG03A[]']").each(function() {
        sum += Number($(this).val());
    });
    $("input[name='R01G03A']").val(sum.toFixed(2));
    var sum=0;
    $("div[data-page][style='display: block;']").find("input[name='T1RXXXXG03[]']").each(function() {
        sum += Number($(this).val());
    });
    $("input[name='R01G03']").val(sum.toFixed(2));
    var sum=0;
    $("div[data-page][style='display: block;']").find("input[name='T1RXXXXG04A[]']").each(function() {
        sum += Number($(this).val());
    });
    $("input[name='R01G04A']").val(sum.toFixed(2));
    var sum=0;
    $("div[data-page][style='display: block;']").find("input[name='T1RXXXXG04[]']").each(function() {
        sum += Number($(this).val());
    });
    $("input[name='R01G04']").val(sum.toFixed(2));
    $("input[name='R02G01I']").val($("div[data-page][style='display: block;']").find("input[name='T1RXXXXG02[]']").length);
  }
  checkBlank();
  setTableNumero();
},500);
function checkBlank(){
  required($("input[name='HNAME']"));
  numbered($("input[name='HTIN']"),10,10,1);
  required($("input[name='HLOC']"));
  required($("input[name='HSTI']"));
  numbered($("input[name='R00G03I']"),1,2,1);
  $("div[data-page][style='display: block;']").find("input[name='T1RXXXXG02[]']").each(function(){
    numbered($(this),10,10,1);
  });
  $("div[data-page][style='display: block;']").find("select[name='T1RXXXXG05[]']").each(function(){
    numbered($(this),3,3,1);
  });
  $("div[data-page][style='display: block;']").find("input[name='T1RXXXXG06D[]']").each(function(){
    numbered($(this),8,8,0);
  });
  $("div[data-page][style='display: block;']").find("input[name='T1RXXXXG07D[]']").each(function(){
    numbered($(this),8,8,0);
  });
  required($("input[name='R01G03A']"));
  required($("input[name='R01G03']"));
  required($("input[name='R01G04A']"));
  required($("input[name='R01G04']"));
  required($("input[name='R02G01I']"));
  required($("input[name='R02G02I']"));
  required($("input[name='R02G03I']"));
  required($("input[name='HBOS']"));
  numbered($("input[name='HKBOS']"),10,10,1);
}
function setTableNumero(){
  $("div[data-page][style='display: block;']").find(".rownum").each(function(i) {
    var number=i+1;
    $(this).find('td:first').text(number);
  });
}
function addNewRow(){
  var v=$("div[data-page][style='display: block;']").find("#rownum").children("tr:last").html();
  $("div[data-page][style='display: block;']").find("#rownum").append('<tr style="text-align:center;" class="rownum"></tr>');
  $("div[data-page][style='display: block;']").find("#rownum").children("tr:last").html(v);
}
function required(el){
  if(el.val()==''){
    if(!el.parent().has(".callout").length){
      el.parent().append('<div class="callout bottom">Поле повинно бути заповнене</div>');
    }
  }else{
    el.parent().children(".callout").remove();
  }
}
function numbered(el,min,max,required){
  if(typeof el.val() != "undefined"){
    if((required)&&(el.val()=='')){
      el.parent().children(".callout").remove();
      if(!el.parent().has(".callout").length){
        el.parent().append('<div class="callout bottom">Поле повинно бути заповнене</div>');
      }
    }else if(!el.val().match(/^\d+$/)&&(el.val()!='')){
      el.parent().children(".callout").remove();
      if(!el.parent().has(".callout").length){
        el.parent().append('<div class="callout bottom">Поле повинно бути заповнене цифрами</div>');
      }
    }else if(((el.val().length<min)||(el.val().length>max))&&(el.val()!='')){
      el.parent().children(".callout").remove();
      if(!el.parent().has(".callout").length){
        el.parent().append('<div class="callout bottom">Невірна кількість цифр</div>');
      }
    }else{
      el.parent().children(".callout").remove();
    }
  }
}
function saveDocuments(){
	$.post('<? echo base_url(); ?>?render=F0500105', $('#blank_form').serialize(),function(){
		alert('Звіт збережено');
	});
}
</script>
