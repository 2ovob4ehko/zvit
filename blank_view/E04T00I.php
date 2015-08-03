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
  <table width="100%">
    <tr style="text-align:center">
      <td><b>Звіт про суми нарахованої заробітної плати (доходу, грошового забезпечення, допомоги, компенсації) застрахованих осіб та суми нарахованого єдиного внеску на загальнообов’язкове державне соціальне страхування до фіскальних органів</b></td>
    </tr>
  </table>
  <table style="margin:auto;width:220px;">
    <tr>
      <td style="text-align:right">1. Звіт за місяць</td>
      <td style="text-align:left"><? echo $period; $f=$myfirm->fetch_object(); ?></td>
      <td style="text-align:right">рік:</td>
     <td style="text-align:left"><? echo $year; ?></td>
   </tr>
  </table>
  <br/>
  <table style="width:100%" class="bordered">
    <tr>
      <td style="width:35%;text-align:center;">Подають:</td>
      <td style="width:35%;text-align:center;">Терміни подання</td>
      <td style="text-align:left;" rowspan="2"><b>Форма № Д4</b>
        <i>(місячна) </i>
        <div style="padding:10px;">
          <input type="radio" name="type" checked>(початкова)</input><br/>
          <input type="radio" name="type">(скасовуюча)</input><br/>
          <input type="radio" name="type">(додаткова)</input><br/>
        </div><br/>ЗАТВЕРДЖЕНО<br/>наказом Міністерства фінансів України <br/>14.04.2015 № 435<br/>за погодженням з  Держстатом<br/>
      </td>
    </tr>
    <tr>
      <td style="vertical-align:top;text-align:left;">Страхувальники, фізичні особи - підприємці, у тому числі ті,які обрали спрощену систему оподаткування, особи, які  провадять незалежну професійну діяльність, які використовують працю фізичних осіб, районні (міські) управління праці та соціального захисту населення, - відповідним фіскальним органам за місцем реєстрації</td>
      <td style="vertical-align:top;text-align:left;">не пізніше ніж через 20 календарних днів, наступних за останнім календарним днем звітного місяця</td>
    </tr>
  </table>
  <br/>
  <table style="width:100%">
    <tr>
      <td>2. Код за ЄДРПОУ/ реєстраційний номер облікової картки платника податків</td>
      <td><input class="filling" style="width:80px;" type="text" name="FIRM_EDRPOU" value="<? echo $f->tin; ?>"></td>
      <td>3. Код за ЄДРПОУ або податковий номер/серія та номер паспорта ліквідованого страхувальника* (заповнюється у разі подачі звіту правонаступником)</td>
      <td><input class="filling" style="width:80px;" type="text" name="LIKV_EDRPOU" value=""></td>
   </tr>
   <tr>
     <td>4. Найменування / Прізвище, ім'я, по батькові<br/>
       <i>(страхувальника/фізичної особи)</i>
     </td>
     <td colspan="3"><input class="filling" style="width:100%;" type="text" name="FIRM_NAME" value="<? echo $f->name; ?>"></td>
   </tr>
   <tr>
     <td>Місцезнаходження / Місце проживання</td>
     <td colspan="3"><input class="filling" style="width:100%;" type="text" name="FIRM_ADR" value="<? echo $f->address; ?>"></td>
   </tr>
   <tr>
     <td>Телефон</td>
     <td colspan="3"><input class="filling" style="width:100%;" type="text" name="FFIRM_PHON" value="<? echo $f->telcode.' '.$f->tel; ?>"></td>
   </tr>
   <tr>
     <td>5.Код територіального фіскального органу, до якого подається звіт</td>
     <td colspan="3"><input class="filling" style="width:100%;" type="text" name="DPACD_ST" value="<? echo $f->tax_code; ?>"></td>
   </tr>
  </table>
  <br/>
  <table width="100%">
    <tr>
      <td style="text-align:center;">Перелік таблиць звіту</td>
    </tr>
  </table>
  <table width="100%" class="bordered">
    <tr>
      <td style="width:4%;text-align:center;">№ з/п</td>
      <td style="width:70%;text-align:center;">Назва таблиці</td>
      <td style="width:10%;text-align:center;">Кількість аркушів</td>
      <td style="width:10%;text-align:center;">Кількість рядків</td>
    </tr>
    <tr>
      <td align="center">1</td>
      <td>Нарахування єдиного внеску</td>
      <td><input class="filling" style="width:100%;" type="text" name="N1_0" value="0"></td>
      <td align="center">*</td>
    </tr>
    <tr>
      <td align="center">2</td>
      <td>Нарахування єдиного внеску на загальнообов'язкове державне соціальне страхування за деякі категорії застрахованих осіб</td>
      <td><input class="filling" style="width:100%;" type="text" name="N2_0" value="0"></td>
      <td align="center">*</td>
    </tr>
    <tr>
      <td align="center">3</td>
      <td>Нарахування єдиного внеску на загальнообов'язкове державне соціальне страхування за осіб, які проходять строкову військову службу</td>
      <td><input class="filling" style="width:100%;" type="text" name="N3_0" value="0"></td>
      <td align="center">*</td>
    </tr>
    <tr>
      <td align="center">4</td>
      <td>Нарахування єдиного внеску на загальнообов’язкове державне соціальне страхування  на суми грошового забезпечення</td>
      <td><input class="filling" style="width:100%;" type="text" name="N4_0" value="0"></td>
      <td align="center">*</td>
    </tr>
    <tr>
      <td align="center">5</td>
      <td>Відомості про трудові відносини застрахованих осіб</td>
      <td><input class="filling" style="width:100%;" type="text" name="N5_0" value="0"></td>
      <td><input class="filling" style="width:100%;" type="text" name="N5_1" value="0"></td>
    </tr>
    <tr>
      <td align="center">6</td>
      <td>Відомості про нарахування заробітної плати (доходу) застрахованим особам</td>
      <td><input class="filling" style="width:100%;" type="text" name="N6_0" value="0"></td>
      <td><input class="filling" style="width:100%;" type="text" name="N6_1" value="0"></td>
    </tr>
    <tr>
      <td align="center">7</td>
      <td>Наявність підстав для обліку стажу окремим категоріям осіб відповідно до законодавства</td>
      <td><input class="filling" style="width:100%;" type="text" name="N7_0" value="0"></td>
      <td><input class="filling" style="width:100%;" type="text" name="N7_1" value="0"></td>
    </tr>
    <tr>
      <td align="center">8</td>
      <td>Відомості про осіб, які доглядають за дитиною до досягнення нею трирічного віку та відповідно до закону отримують допомогу по догляду за дитиною до досягнення нею трирічного віку та/або при народженні дитини, та осіб із числа непрацюючих працездатних батьків, усиновителів, опікунів, піклувальників, які фактично здійснюють догляд за дитиною-інвалідом, а також непрацюючих працездатних осіб, які здійснюють догляд за інвалідом І групи або за престарілим, який за висновком медичного закладу потребує постійного стороннього догляду або досяг 80-річного віку, якщо такі непрацюючі працездатні особи отримують допомогу або компенсацію відповідно до законодавства, та нарахування сум єдиного внеску за батьків-вихователів дитячих будинків сімейного типу, прийомних батьків, якщо вони отримують грошове забезпечення відповідно до законодавства</td>
      <td><input class="filling" style="width:100%;" type="text" name="N8_0" value="0"></td>
      <td><input class="filling" style="width:100%;" type="text" name="N8_1" value="0"></td>
    </tr>
    <tr>
      <td align="center">9</td>
      <td>Відомості про осіб, які проходять строкову  військову службу</td>
      <td><input class="filling" style="width:100%;" type="text" name="N9_0" value="0"></td>
      <td><input class="filling" style="width:100%;" type="text" name="N9_1" value="0"></td>
    </tr>
    <tr>
      <td></td>
      <td><b>Усього</b></td>
      <td><input class="calculation" style="width:100%;" type="text" name="N10_0" value="0"></td>
      <td><input class="calculation" style="width:100%;" type="text" name="N10_1" value="0"></td>
    </tr>
  </table>
  <br/>
  * Для фізичних осіб, які мають відмітку в паспорті про право здійснювати будь-які платежі за серією та номером паспорта.
  <table width="100%">
    <tr>
      <td width="15%">Керівник</td>
      <td width="5%"><input class="filling" style="width:80px;" type="text" name="BOSS_NUMIDENT" value="<? echo $f->btin; ?>"></td>
      <td width="45%"><input class="filling" style="width:100%;" type="text" name="FIRM_BOSS" value="<? echo $f->bfio; ?>"></td>
   </tr>
   <tr>
     <td></td>
     <td><font size="-1">(податковий номер або серія та номер паспорта*)</font></td>
     <td style="vertical-align:top;text-align:center;"><font size="-1">(ініціали та прізвище)</font></td>
   </tr>
   <tr>
     <td></td>
     <td></td>
     <td></td>
   </tr>
   <tr>
     <td>Головний бухгалтер</td>
     <td><input class="filling" style="width:80px;" type="text" name="BUH_NUMIDENT" value="<? echo $f->ctin; ?>"></td>
     <td><input class="filling" style="width:100%;" type="text" name="FIRM_BUH" value="<? echo $f->cfio; ?>"></td>
   </tr>
   <tr>
      <td></td>
      <td><font size="-1">(податковий номер або серія та номер паспорта*)</font></td>
      <td style="vertical-align:top;text-align:center;"><font size="-1">(ініціали та прізвище) </font></td>
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
    var n1=Number($("input[name='N1_0']").val());
    var n2=Number($("input[name='N2_0']").val());
    var n3=Number($("input[name='N3_0']").val());
    var n4=Number($("input[name='N4_0']").val());
    var n5=Number($("input[name='N5_0']").val());
    var n51=Number($("input[name='N5_1']").val());
    var n6=Number($("input[name='N6_0']").val());
    var n61=Number($("input[name='N6_1']").val());
    var n7=Number($("input[name='N7_0']").val());
    var n71=Number($("input[name='N7_1']").val());
    var n8=Number($("input[name='N8_0']").val());
    var n81=Number($("input[name='N8_1']").val());
    var n9=Number($("input[name='N9_0']").val());
    var n91=Number($("input[name='N9_1']").val());

    var n10=(n1+n2+n3+n4+n5+n6+n7+n8+n9);
    var n101=(n51+n61+n71+n81+n91);
    $("input[name='N10_0']").val(n10);
    $("input[name='N10_1']").val(n101);
  }
  checkBlank();
},500);
function checkBlank(){
  required($("input[name='FIRM_EDRPOU']"));
  required($("input[name='FIRM_NAME']"));
  required($("input[name='DPACD_ST']"));
  required($("input[name='N1_0']"));
  required($("input[name='N2_0']"));
  required($("input[name='N3_0']"));
  required($("input[name='N4_0']"));
  required($("input[name='N5_0']"));
  required($("input[name='N5_1']"));
  required($("input[name='N6_0']"));
  required($("input[name='N6_1']"));
  required($("input[name='N7_0']"));
  required($("input[name='N7_1']"));
  required($("input[name='N8_0']"));
  required($("input[name='N8_1']"));
  required($("input[name='N9_0']"));
  required($("input[name='N9_1']"));
  required($("input[name='N10_0']"));
  required($("input[name='N10_1']"));
  numbered($("input[name='BOSS_NUMIDENT']"),10,10);
  required($("input[name='FIRM_BOSS']"));
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
      el.parent().children(".callout").remove();
      if(!el.parent().has(".callout").length){
        el.parent().append('<div class="callout bottom">Поле повинно бути заповнене цифрами</div>');
      }
    }else if((el.val().length<min)||(el.val().length>max)){
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
	$.post('<? echo base_url(); ?>?render=E04T00I', $('#blank_form').serialize(),function(){
		alert('Звіт збережено');
	});
}
</script>
