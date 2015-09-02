<div id="page">
  <div class="blank">
    <table>
      <tr>
        <td><input type="checkbox" checked name="autocount">Авторозрахунок</td>
        <td><button onclick="saveDocuments('E04T06I')">Зберегти</button></td>
      </tr>
    </table>
  <form method="POST" id="blank_form">
    <!--Верх для всіх однаковий-->
    <table width="60%">
      <tr>
        <td width="30%" align="right"></td>
        <td width="10%"></td>
        <td width="15%" align="right">№ аркуша звіту</td>
        <td width="10%">
          <input class="filling" style="width:80px;" type="text" name="PAGE_NUM" value="">
        </td>
      </tr>
    </table>
    <br/>
    <table style="width:100%;">
      <tr align="center">
        <td>
          <b>Таблиця 6. Відомості про нарахування заробітної плати (доходу) застрахованим особам</b>
        </td>
      </tr>
    </table>
    <table style="width:100%;">
      <tr>
        <td width="35%">1. Код за ЄДРПОУ або податковий  номер /серія та номер паспорта страхувальника*</td>
        <td width="10%">
          <input class="filling" style="width:80px;" type="text" name="FIRM_EDRPOU" value="<? $f=$myfirm->fetch_object(); echo $f->tin; ?>">
        </td>
        <td width="25%" align="left">2. Код за ЄДРПОУ або податковий номер/серія та номер паспорта
  ліквідованого страхувальника* (заповнюється у разі подачі звіту правонаступником)</td>
        <td width="10%">
          <input class="filling" style="width:80px;" type="text" name="LIKV_EDRPOU" value="">
          <input type="hidden" name="DPACD_ST" value="<? echo $f->tax_code; ?>">
        </td>
      </tr>
    </table>
    <table style="width:100%;">
      <tr>
        <td>
          <input class="filling" style="width:100%;" type="text" name="FIRM_NAME" value="<? echo $f->name; ?>">
        </td>
      </tr>
      <tr>
        <td align="center"><font size="-1">(найменування страхувальника)</font></td>
      </tr>
    </table>
    <table style="margin:auto;width:220px;">
      <tr>
        <td style="text-align:right">3. Звіт за місяць</td>
        <td style="text-align:left"><? echo $period; ?></td>
        <td style="text-align:right">рік:</td>
        <td style="text-align:left"><? echo $year; ?></td>
     </tr>
    </table>
    <table>
      <tr>
        <td width="10%" align="right">4. Тип</td>
        <td width="15%">
          <input type="radio" name="FORM_TYPE" checked  value="1">початкова</input><br/>
          <input type="radio" name="FORM_TYPE" value="2">скасовуюча</input>
        </td>
      </tr>
    </table>
    <br/>
    <div id="pagew" style="width:100px;overflow-x:scroll;">
    <table class="bordered">
      <thead>
        <tr style="font-size:12px;word-break:break-word;">
          <td align="center">5. № з/п</td>
          <td align="center">6. Громадянин України<br/>(1 - так, <br/>0 - ні)</td>
          <td align="center">7. Чоловік - Ч (1), жінка - Ж (0)</td>
          <td align="center">8. Податковий номер /серія та номер паспорта ЗО*</td>
          <td align="center">9. Код категорії ЗО**</td>
          <td align="center">10. Код типу нарахувань ***</td>
          <td align="center">11. Місяць та рік, за який проведено нарахування ****</td>
          <td align="center">12. Прізвище ЗО<br/>Iм'я ЗО<br/>По батькові ЗО</td>
          <td align="center">13. Кількість календарних днів  тимчасової непрацездатності</td>
          <td align="center">14. Кількість календарних днів без збереження заробітної плати *****</td>
          <td align="center">15. Кількість днів перебування у трудових/ ЦП відносинах протягом календарного звітного місяця</td>
          <td align="center">16. Кількість календаних днів відпустки у зв'язку з вагітністю та пологами</td>
          <td align="center">17. Загальна сума нарахованої заробітної плати / доходу (усього з початку звітного місяця)<br/>(грн. коп.)</td>
          <td align="center">18. Сума нарахованої заробітної плати / доходу у межах максимальної величини, на яку нараховується єдиний внесок<br/>(грн. коп.)</td>
          <td align="center">19. Сума різниці між розміром мінімальної заробітної плати та фактично нарахованою заробітною платою за звітний місяць (із заробітної плати / доходу)</td>
          <td align="center">20. Сума утриманого єдиного внеску за звітний місяць (із заробітної плати / доходу)</td>
          <td align="center">21. Сума нарахованого єдиного внеску за звітний місяць (на заробітну плату / дохід)</td>
          <td align="center">22. Ознака наявності трудової книжки<br/>(1-так, 0-ні)</td>
          <td align="center">23. Ознака наявності спецстажу<br/> (1-так, 0-ні)</td>
          <td align="center">24. Ознака неповного робочого часу <br/>(1-так, 0- ні)</td>
          <td align="center">25. Ознака нового робочого місця<br/>(1-так, 0-ні)</td>
          <td>X</td>
        </tr>
      </thead>
      <TBODY  id="rownum">
        <tr style="font-size:12px;">
          <td align="center" style="min-width:15px;">5</td>
          <td align="center" style="min-width:50px;">6</td>
          <td align="center" style="min-width:40px;">7</td>
          <td align="center" style="min-width:80px;">8</td>
          <td align="center" style="min-width:25px;">9</td>
          <td align="center" style="min-width:25px;">10</td>
          <td align="center" style="min-width:36px;">11</td>
          <td align="center" style="min-width:100px;">12</td>
          <td align="center" style="min-width:25px;">13</td>
          <td align="center" style="min-width:25px;">14</td>
          <td align="center" style="min-width:25px;">15</td>
          <td align="center" style="min-width:25px;">16</td>
          <td align="center" style="min-width:65px;">17</td>
          <td align="center" style="min-width:65px;">18</td>
          <td align="center" style="min-width:65px;">19</td>
          <td align="center" style="min-width:65px;">20</td>
          <td align="center" style="min-width:65px;">21</td>
          <td align="center" style="min-width:50px;">22</td>
          <td align="center" style="min-width:50px;">23</td>
          <td align="center" style="min-width:50px;">24</td>
          <td align="center" style="min-width:50px;">25</td>
          <td></td>
        </tr>
        <tr class="rownum">
          <td></td>
          <td>
            <select class="filling" style="width:100%;" name="UKR_GROMAD[]">
              <option value="1">Так</option>
              <option value="0">Ні</option>
            </select>
          </td>
          <td>
            <select class="filling" style="width:100%;" name="ST[]">
              <option value="1">Ч</option>
              <option value="0">Ж</option>
            </select>
          </td>
          <td><input class="filling" style="width:100%;" type="text" name="NUMIDENT[]" value=""></td>
          <td><input class="filling" style="width:100%;" type="text" name="ZO[]" value=""></td>
          <td><input class="filling" style="width:100%;" type="text" name="PAY_TP[]" value=""></td>
          <td style="text-align:center;padding:0;"><table><tr><td style="border:hidden;padding:0;"><input class="filling" style="width:100%;" type="text" name="PAY_MNTH[]" value=""></td></tr><tr><td style="border:hidden;padding:0;"><input class="filling" style="width:100%;" type="text" name="PAY_YEAR[]" value=""></td></tr></table></td>
          <td style="padding:0;"><table><tr><td style="border:hidden;"><input class="filling" style="width:100%;" type="text" name="LN[]" value=""></td></tr><tr><td style="border:hidden;"><input class="filling" style="width:100%;" type="text" name="NM[]" value=""></td></tr><tr><td style="border:hidden;"><input class="filling" style="width:100%;" type="text" name="FTN[]" value=""></td></tr></table></td>
          <td><input class="filling" style="width:100%;" type="text" name="KD_NP[]" value=""></td>
          <td><input class="filling" style="width:100%;" type="text" name="KD_NZP[]" value=""></td>
          <td><input class="filling" style="width:100%;" type="text" name="KD_PTV[]" value=""></td>
          <td><input class="filling" style="width:100%;" type="text" name="KD_VP[]" value=""></td>
          <td><input class="filling" style="width:100%;" type="text" onchange="fixedToDecimal(this)" name="SUM_TOTAL[]" value=""></td>
          <td><input class="filling" style="width:100%;" type="text" onchange="fixedToDecimal(this)" name="SUM_MAX[]" value=""></td>
          <td><input class="filling" style="width:100%;" type="text" onchange="fixedToDecimal(this)" name="SUM_DIFF[]" value=""></td>
          <td><input class="filling" style="width:100%;" type="text" onchange="fixedToDecimal(this)" name="SUM_INS[]" value=""></td>
          <td><input class="filling" style="width:100%;" type="text" onchange="fixedToDecimal(this)" name="SUM_NARAH[]" value=""></td>
          <td>
            <select class="filling" style="width:100%;" name="OTK[]">
              <option value="0">Ні</option>
              <option value="1">Так</option>
            </select>
          </td>
          <td>
            <select class="filling" style="width:100%;" name="EXP[]">
              <option value="0">Ні</option>
              <option value="1">Так</option>
            </select>
          </td>
          <td>
            <select class="filling" style="width:100%;" name="NRC[]">
              <option value="0">Ні</option>
              <option value="1">Так</option>
            </select>
          </td>
          <td>
            <select class="filling" style="width:100%;" name="NRM[]">
              <option value="0">Ні</option>
              <option value="1">Так</option>
            </select>
          </td>
          <td><div class="del" onclick="$(this).parent().parent().remove()">&ndash;</div></td>
        </tr>
      </TBODY>
      <tr><td colspan="22"><div class="add" onclick="addNewRow();">+</div></td></tr>
        <tr>
          <td colspan="12">Разом</td>
          <td><input class="filling" style="width:100%;" type="text" name="PAGE_SUM_TOTAL" value=""></td>
          <td><input class="filling" style="width:100%;" type="text" name="PAGE_SUM_MAX" value=""></td>
          <td><input class="filling" style="width:100%;" type="text" name="PAGE_SUM_DIFF" value=""></td>
          <td><input class="filling" style="width:100%;" type="text" name="PAGE_SUM_INS" value=""></td>
          <td><input class="filling" style="width:100%;" type="text" name="PAGE_SUM_NARAH" value=""></td>
          <td colspan="5"></td>
        </tr>
    </table>
  </div>
    <br/>
    <table style="width:100%;">
      <tr>
        <td width="35%"></td>
        <td width="10%"></td>
        <td width="35%" align="right">26. Кількість заповнених рядків на аркуші</td>
        <td width="10%" align="center">
          <input class="filling" style="width:100%;" type="text" name="ROWS" value="">
        </td>
      </tr>
    </table>
    <table style="width:100%;">
    <tr>
      <td>* Для фізичних осіб, які мають відмітку в паспорті про право здійснювати будь-які платежі
  за серією та номером паспорта.</td>
    </tr>
    <tr>
      <td>** Код категорії ЗО - обирається з таблиці відповідності кодів категорії застрахованої особи
  та кодів бази нарахування і розмірів ставок єдиного внеску на загальнообов`язкове державне соціальне страхування  (додаток 2).</td>
    </tr>
    <tr>
      <td>*** Код типу нарахувань:<br/>1 – сума заробітної плати (доходу) за виконану роботу (надані послуги), строк виконання яких перевищує календарний місяць, а також за відпрацьований час після звільнення з роботи або згідно з рішенням суду - середня заробітна плата за вимушений прогул;<br/>2 - сума заробітної плати (доходу), нарахована у попередніх звітних періодах на підставі бухгалтерських та інших документів, відповідно до яких проводиться нарахування (обчислення) або які підтверджують нарахування (обчислення) заробітної плати (доходу), на яку страхувальником самостійно донараховано суму єдиного внеску;<br/>3 - сума заробітної плати (доходу), нарахована у попередніх звітних періодах на підставі бухгалтерських та інших документів, відповідно до яких проводиться нарахування (обчислення)   або які підтверджують нарахування (обчислення) заробітної плати (доходу), на яку  страхувальником самостійно зменшено зайво нараховану суму єдиного внеску;<br/>6 – сума заробітної плати (доходу), нарахована у попередніх звітних періодах на підставі бухгалтерських та інших документів, відповідно до яких проводиться нарахування (обчислення) або які підтверджують нарахування (обчислення) заробітної плати (доходу), на яку страхувальником самостійно донараховано суму внесків на загальнообов'язкове державне пенсійне страхування за період до 1 січня 2011 року;<br/>7 - сума заробітної плати (доходу), нарахована у попередніх звітних періодах на підставі бухгалтерських та інших документів, відповідно до яких проводиться нарахування (обчислення) або які підтверджують нарахування (обчислення) заробітної плати (доходу), на яку страхувальником самостійно зменшено нараховану суму внесків на загальнообов'язкове державне пенсійне страхування за період до 1 січня 2011 року;<br/>8 - сума заробітної плати (доходу), нарахована у попередніх звітних періодах на підставі бухгалтерських та інших документів, відповідно до яких проводиться нарахування (обчислення) або які підтверджують нарахування (обчислення) заробітної плати (доходу), на яку при перевірці органом Пенсійного фонду донараховано суму внесків на загальнообов'язкове державне пенсійне страхування за період до 1 січня 2011 року;<br/>9 - сума заробітної плати (доходу), нарахована у попередніх звітних періодах на підставі бухгалтерських та інших документів, відповідно до яких проводиться нарахування (обчислення) або які підтверджують нарахування (обчислення) заробітної плати (доходу), на яку  при перевірці органом Пенсійного фонду зменшено нараховану суму внесків на загальнообов'язкове державне пенсійне страхування за період до 1 січня 2011 року;<br/>10 – нарахована сума заробітку (доходу) за дні відпустки;<br/>11 - сума заробітної плати (доходу), нарахована у попередніх звітних періодах на підставі бухгалтерських та інших документів, відповідно до яких проводиться нарахування (обчислення) або які підтверджують нарахування (обчислення) заробітної плати (доходу), на яку при перевірці фіскальними органами  донараховано суму єдиного внеску;<br/>12 - сума заробітної плати (доходу), нарахована у попередніх звітних періодах на підставі бухгалтерських та інших документів, відповідно до яких проводиться нарахування (обчислення) або які підтверджують нарахування (обчислення) заробітної плати (доходу), на яку при перевірці фіскальними органами зменшено зайво нараховану суму єдиного внеску;<br/>13 - сума різниці між розміром мінімальної заробітної плати та фактично нарахованою заробітною платою за звітний місяць (із заробітної плати / доходу).</td>
    </tr>
    <tr>
      <td>**** Місяць та рік, за який проведено нарахування, - реквізит обов’язково повинен бути заповнений.</td>
    </tr>
    <tr>
      <td>***** Кількість календарних  днів без збереження заробітної плати - кількість календарних днів може бути відображено із знаком мінус "-" у разі необхідності зменшення кількості таких днів, відображених в попередніх звітних періодах.</td>
    </tr>
  </table>
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
      <td style="vertical-align:top;text-align:center;"><font size="-1">(ініціали та прізвище)</font></td>
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
    var sum=0;
    $("div[id='E04T06I']").find("input[name='SUM_TOTAL[]']").each(function(){
        sum+=Number($(this).val());
    });
    $("input[name='PAGE_SUM_TOTAL']").val(sum.toFixed(2));
    var sum=0;
    $("div[id='E04T06I']").find("input[name='SUM_MAX[]']").each(function(){
        sum+=Number($(this).val());
    });
    $("input[name='PAGE_SUM_MAX']").val(sum.toFixed(2));
    var sum=0;
    $("div[id='E04T06I']").find("input[name='SUM_DIFF[]']").each(function(){
        sum+=Number($(this).val());
    });
    $("input[name='PAGE_SUM_DIFF']").val(sum.toFixed(2));
    var sum=0;
    $("div[id='E04T06I']").find("input[name='SUM_INS[]']").each(function(){
        sum+=Number($(this).val());
    });
    $("input[name='PAGE_SUM_INS']").val(sum.toFixed(2));
    var sum=0;
    $("div[id='E04T06I']").find("input[name='SUM_NARAH[]']").each(function(){
        sum+=Number($(this).val());
    });
    $("input[name='PAGE_SUM_NARAH']").val(sum.toFixed(2));
    $("input[name='ROWS']").val($("div[id='E04T06I']").find("input[name='NUMIDENT[]']").length);
  }
  checkBlank();
  setTableNumero();
},500);
function checkBlank(){
  required($("div[id='E04T06I']").find("input[name='PAGE_NUM']"));
  required($("div[id='E04T06I']").find("input[name='FIRM_EDRPOU']"));
  required($("div[id='E04T06I']").find("input[name='FIRM_NAME']"));
  $("div[id='E04T06I']").find("input[name='NUMIDENT[]']").each(function(){
    numbered($(this),10,10,1);
  });
  $("div[id='E04T06I']").find("input[name='ZO[]']").each(function(){
    numbered($(this),1,2,1);
  });
  $("div[id='E04T06I']").find("input[name='PAY_MNTH[]']").each(function(){
    numbered($(this),2,2,1);
  });
  $("div[id='E04T06I']").find("input[name='PAY_YEAR[]']").each(function(){
    numbered($(this),4,4,1);
  });
  $("div[id='E04T06I']").find("input[name='LN[]']").each(function(){
    required($(this));
  });
  $("div[id='E04T06I']").find("input[name='NM[]']").each(function(){
    required($(this));
  });
  $("div[id='E04T06I']").find("input[name='SUM_TOTAL[]']").each(function(){
    required($(this));
  });
  $("div[id='E04T06I']").find("input[name='SUM_MAX[]']").each(function(){
    required($(this));
  });
  $("div[id='E04T06I']").find("input[name='SUM_DIFF[]']").each(function(){
    required($(this));
  });
  $("div[id='E04T06I']").find("input[name='SUM_INS[]']").each(function(){
    required($(this));
  });
  $("div[id='E04T06I']").find("input[name='SUM_NARAH[]']").each(function(){
    required($(this));
  });
  required($("div[id='E04T06I']").find("input[name='PAGE_SUM_TOTAL']"));
  required($("div[id='E04T06I']").find("input[name='PAGE_SUM_MAX']"));
  required($("div[id='E04T06I']").find("input[name='PAGE_SUM_DIFF']"));
  required($("div[id='E04T06I']").find("input[name='PAGE_SUM_INS']"));
  required($("div[id='E04T06I']").find("input[name='PAGE_SUM_NARAH']"));
  required($("div[id='E04T06I']").find("input[name='ROWS']"));
  numbered($("div[id='E04T06I']").find("input[name='BOSS_NUMIDENT']"),10,10);
  required($("div[id='E04T06I']").find("input[name='FIRM_BOSS']"));
}
function setTableNumero(){
  $("div[id='E04T06I']").find(".rownum").each(function(i) {
    var number=i+1;
    $(this).find('td:first').text(number);
  });
}
function addNewRow(){
  var v=$("div[id='E04T06I']").find("#rownum").children("tr:last").html();
  $("div[id='E04T06I']").find("#rownum").append('<tr class="rownum"></tr>');
  $("div[id='E04T06I']").find("#rownum").children("tr:last").html(v);
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
function saveDocuments(title){
	$.post('<? echo base_url(); ?>?render='+title, $("div[id="+title+"]").find("#blank_form").serialize(),function(){
		alert('Звіт збережено');
	});
}
</script>
