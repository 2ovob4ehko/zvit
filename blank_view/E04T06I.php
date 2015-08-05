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
          <input type="radio" name="FORM_TYPE" checked>початкова</input><br/>
          <input type="radio" name="FORM_TYPE">скасовуюча</input>
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
        </tr>
      </thead>
      <TBODY id="Process">
        <tr style="font-size:12px;">
          <td align="center" style="min-width:15px;">5</td>
          <td align="center" style="min-width:50px;">6</td>
          <td align="center" style="min-width:33px;">7</td>
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
        </tr>
        <tr class="rownum">
          <td></td>
          <td>
            <select class="filling" style="width:100%;" name="UKR_GROMAD">
              <option value="1">Так</option>
              <option value="0">Ні</option>
            </select>
          </td>
          <td>
            <select class="filling" style="width:100%;" name="ST">
              <option value="1">Ч</option>
              <option value="0">Ж</option>
            </select>
          </td>
          <td><input class="filling" style="width:100%;" type="text" name="NUMIDENT" value=""></td>
          <td><input class="filling" style="width:100%;" type="text" name="ZO" value=""></td>
          <td><input class="filling" style="width:100%;" type="text" name="PAY_TP" value=""></td>
          <td style="text-align:center;"><input class="filling" style="width:100%;" type="text" name="PAY_MNTH" value="">.<input class="filling" style="width:100%;" type="text" name="PAY_YEAR" value=""></td>
          <td><input class="filling" style="width:100%;" type="text" name="LN" value=""><br/><input class="filling" style="width:100%;" type="text" name="NM" value=""><br/><input class="filling" style="width:100%;" type="text" name="FTN" value=""></td>
          <td><input class="filling" style="width:100%;" type="text" name="KD_NP" value=""></td>
          <td><input class="filling" style="width:100%;" type="text" name="KD_NZP" value=""></td>
          <td><input class="filling" style="width:100%;" type="text" name="KD_PTV" value=""></td>
          <td><input class="filling" style="width:100%;" type="text" name="KD_VP" value=""></td>
          <td><input class="filling" style="width:100%;" type="text" name="SUM_TOTAL" value=""></td>
          <td><input class="filling" style="width:100%;" type="text" name="SUM_MAX" value=""></td>
          <td><input class="filling" style="width:100%;" type="text" name="SUM_DIFF" value=""></td>
          <td><input class="filling" style="width:100%;" type="text" name="SUM_INS" value=""></td>
          <td><input class="filling" style="width:100%;" type="text" name="SUM_NARAH" value=""></td>
          <td>
            <select class="filling" style="width:100%;" name="OTK">
              <option value="0">Ні</option>
              <option value="1">Так</option>
            </select>
          </td>
          <td>
            <select class="filling" style="width:100%;" name="EXP">
              <option value="0">Ні</option>
              <option value="1">Так</option>
            </select>
          </td>
          <td>
            <select class="filling" style="width:100%;" name="NRC">
              <option value="0">Ні</option>
              <option value="1">Так</option>
            </select>
          </td>
          <td>
            <select class="filling" style="width:100%;" name="NRM">
              <option value="0">Ні</option>
              <option value="1">Так</option>
            </select>
          </td>
        </tr>
      </TBODY>
        <tr>
          <td colspan="12">Разом за аркушем документів</td>
          <td><input class="filling" style="width:100%;" type="text" name="PAGE_SUM_TOTAL" value=""></td>
          <td><input class="filling" style="width:100%;" type="text" name="PAGE_SUM_MAX" value=""></td>
          <td><input class="filling" style="width:100%;" type="text" name="PAGE_SUM_DIFF" value=""></td>
          <td><input class="filling" style="width:100%;" type="text" name="PAGE_SUM_INS" value=""></td>
          <td><input class="filling" style="width:100%;" type="text" name="PAGE_SUM_NARAH" value=""></td>
          <td colspan="4"></td>
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
