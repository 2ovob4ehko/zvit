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
      <input class="filling" name="R00G01I" type="text" style="width:100%" value="0"></td>
      <td style="width:20%;text-align:right;">ПОРЦІЯ №</td>
      <td><input class="filling" name="R00G03I" type="text" style="width:100%" value="1"></td>
  </tr>
  <tr>
    <td style="width:30%">Працювало за цивільно-правовими договорами</td>
    <td style="width:15%;text-align:right;">
      <input class="filling" name="R00G02I" type="text" style="width:100%" value="0">
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
    <td rowspan="2">Ознака<br/>доходу</td>
    <td colspan="2">Дата</td>
    <td rowspan="2">Ознака подат.<br/>соц. пільги</td>
    <td rowspan="2">Ознака<br/>(0,1)</td>
  </tr>
  <tr style="text-align:center;">
    <td>нарахованого</td>
    <td>перерахованого</td>
    <td>прийняття на роботу</td>
    <td>звільнення з роботи</td>
  </tr>
</thead>
 <tBody>
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
  </tr>
  <tr style="text-align:center;" rownum="1">
    <td>1</td>
    <td><input style="width:100%;" type="text" name="T1RXXXXG02" class="filling" rownum="1" value="0"></td>
    <td><input style="width:100%;" type="text" name="T1RXXXXG03A" onchange="fixedToDecimal(this)" class="filling" rownum="1" value="0"></td>
    <td><input style="width:100%;" type="text" name="T1RXXXXG03" onchange="fixedToDecimal(this)" class="filling" rownum="1" value="0"></td>
    <td><input style="width:100%;" type="text" name="T1RXXXXG04A" onchange="fixedToDecimal(this)" class="filling" rownum="1" value="0"></td>
    <td><input style="width:100%;" type="text" name="T1RXXXXG04" onchange="fixedToDecimal(this)" class="filling" rownum="1" value="0"></td>
    <td><input style="width:100%;" type="text" name="T1RXXXXG05" class="filling" rownum="1" value="0"></td>
    <td><input style="width:100%;" type="text" name="T1RXXXXG06D" class="filling" rownum="1" value="0"></td>
    <td><input style="width:100%;" type="text" name="T1RXXXXG07D" class="filling" rownum="1" value="0"></td>
    <td><input style="width:100%;" type="text" name="T1RXXXXG08" class="filling" rownum="1" value="0"></td>
    <td><input style="width:100%;" type="text" name="T1RXXXXG09" class="filling" rownum="1" value="0"></td>
  </tr>
</tBody>
 <tr style="text-align:center;">
    <td style="text-align:center;">Всього</td>
    <td style="text-align:center;">X</td>
    <td style="text-align:right;"><input type="text" name="R01G03A" onchange="fixedToDecimal(this)" style="width:100%" class="calculation" value="0"></td>
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
    <td style="text-align:right;"><input type="text" name="R0201G03A" onchange="fixedToDecimal(this)" class="filling" style="width:100%" value="0"></td>
    <td style="text-align:center;">X</td>
    <td style="text-align:right;"><input type="text" name="R0201G04A" onchange="fixedToDecimal(this)" class="filling" style="width:100%" value="0"></td>
    <td style="text-align:right;"><input type="text" name="R0201G04" onchange="fixedToDecimal(this)" class="filling" style="width:100%" value="0"></td>
  </tr>
  <tr>
    <td style="text-align:center;">Оподаткування процентів - виключення**</td>
    <td style="text-align:right;"><input type="text" name="R0202G03A" class="filling" style="width:100%" onchange="fixedToDecimal(this)" value="0"></td>
    <td style="text-align:center;">X</td>
    <td style="text-align:right;"><input type="text" name="R0202G04A" class="filling" style="width:100%" onchange="fixedToDecimal(this)" value="0"></td>
    <td style="text-align:right;"><input type="text" name="R0202G04" class="filling" onchange="fixedToDecimal(this)" style="width:100%" value="0"></td>
  </tr>
  <tr>
    <td style="text-align:center;">Оподаткування виграшів (призів) у лотерею</td>
    <td style="text-align:right;"><input type="text" name="R0203G03A" onchange="fixedToDecimal(this)" class="filling" style="width:100%" value="0"></td>
    <td style="text-align:right;"><input type="text" name="R0203G03" onchange="fixedToDecimal(this)" class="filling" style="width:100%" value="0"></td>
    <td style="text-align:right;"><input type="text" name="R0203G04A" onchange="fixedToDecimal(this)" class="filling" style="width:100%" value="0"></td>
    <td style="text-align:right;"><input type="text" name="R0203G04" onchange="fixedToDecimal(this)" class="filling" style="width:100%" value="0"></td>
  </tr>
  <tr>
    <td style="text-align:center;">Оподаткування виграшів (призів) у лотерею - виключення***</td>
    <td style="text-align:right;"><input type="text" name="R0204G03A" onchange="fixedToDecimal(this)" class="filling" style="width:100%" value="0"></td>
    <td style="text-align:right;"><input type="text" name="R0204G03" onchange="fixedToDecimal(this)" class="filling" style="width:100%" value="0"></td>
    <td style="text-align:right;"><input type="text" name="R0204G04A" onchange="fixedToDecimal(this)" class="filling" style="width:100%" value="0"></td>
    <td style="text-align:right;"><input type="text" name="R0204G04" onchange="fixedToDecimal(this)" class="filling" style="width:100%" value="0"></td>
  </tr>
  <tr>
    <td style="text-align:center;">Військовий збір</td>
    <td style="text-align:right;"><input type="text" name="R0205G03A" onchange="fixedToDecimal(this)" class="filling" style="width:100%" value="0"></td>
    <td style="text-align:right;"><input type="text" name="R0205G03" onchange="fixedToDecimal(this)" class="filling" style="width:100%" value="0"></td>
    <td style="text-align:right;"><input type="text" name="R0205G04A" onchange="fixedToDecimal(this)" class="filling" style="width:100%" value="0"></td>
    <td style="text-align:right;"><input type="text" name="R0205G04" onchange="fixedToDecimal(this)" class="filling" style="width:100%" value="0"></td>
  </tr>
  <tr>
    <td style="text-align:center;">Військовий збір - виключення****</td>
    <td style="text-align:right;"><input type="text" name="R0206G03A" onchange="fixedToDecimal(this)" class="filling" style="width:100%" value="0"></td>
    <td style="text-align:right;"><input type="text" name="R0206G03" onchange="fixedToDecimal(this)" class="filling" style="width:100%" value="0"></td>
    <td style="text-align:right;"><input type="text" name="R0206G04A" onchange="fixedToDecimal(this)" class="filling" style="width:100%" value="0"></td>
    <td style="text-align:right;"><input type="text" name="R0206G04" onchange="fixedToDecimal(this)" class="filling" style="width:100%" value="0"></td>
  </tr>
</table>
<br/>
<table style="width:100%;">
  <tr>
    <td style="width:20%;">Кількість рядків<br/>(Розділ І)</td>
    <td style="width:15%;">
      <input name="R02G01I" class="calculation" type="text" style="width:100%;" value="0"></td>
    <td style="width:25%;">Кількість фізичних осіб<br/>(Розділ І)</td>
    <td style="width:15%;">
      <input name="R02G02I" class="filling" type="text" style="width:100%;" value="0"></td>
    <td style="width:20%;">Кількість сторінок</td>
    <td style="width:15%;">
      <input name="R02G03I" type="text" style="width:100%;" class="filling" value="0"></td>
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
      if(<?echo $stan;?><3){
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
  checkBlank();
},500);
function checkBlank(){
  required($("input[name='HNAME']"));
  numbered($("input[name='HTIN']"),10,10);
  required($("input[name='HREG']"));
  required($("input[name='HCITY']"));
  required($("input[name='HLOC']"));
  required($("input[name='HSTI']"));
  numbered($("input[name='HNACTL']"),1,4);
  required($("input[name='HBOS']"));
  numbered($("input[name='HKBOS']"),10,10);
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
function numbered(el,min,max){
  if(typeof el.val() != "undefined"){
    if(!el.val().match(/^\d+$/)){
      if(!el.parent().has(".callout").length){
        el.parent().append('<div class="callout bottom">Поле тільки для цифр</div>');
      }
    }else if((el.val().length<min)||(el.val().length>max)){
      if(!el.parent().has(".callout").length){
        el.parent().append('<div class="callout bottom">Невірна кількість цифр</div>');
      }
    }else{
      el.parent().children(".callout").remove();
    }
  }
}
function saveDocuments(){
	$.post('<? echo base_url(); ?>?render=F0103304', $('#blank_form').serialize(),function(){
		alert('Звіт збережено');
	});
}
</script>
