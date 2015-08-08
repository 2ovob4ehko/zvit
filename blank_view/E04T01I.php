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
        <td style="width:112px;">№ аркуша звіту</td>
        <td style="width:50px;"><input type="text" style="width:100%;" value="1" name="PAGE_NUM"></td>
        <td></td>
      </tr>
    </table>
    <table style="margin:auto;width:220px;">
      <tr>
        <td style="text-align:right">1. Звіт за місяць</td>
        <td style="text-align:left"><? echo $period; $f=$myfirm->fetch_object(); ?></td>
        <td style="text-align:right">рік:</td>
       <td style="text-align:left"><? echo $year; ?></td>
       <input type="hidden" name="DPACD_ST" value="<? echo $f->tax_code; ?>">
     </tr>
    </table>
    <table style="width:100%">
      <tr>
        <td>2. Код за ЄДРПОУ/ реєстраційний номер облікової картки платника податків</td>
        <td><input class="filling" style="width:80px;" type="text" name="FIRM_EDRPOU" value="<? echo $f->tin; ?>"></td>
        <td>3. Код за ЄДРПОУ або податковий номер/серія та номер паспорта ліквідованого страхувальника* (заповнюється у разі подачі звіту правонаступником)</td>
        <td><input class="filling" style="width:80px;" type="text" name="LIKV_EDRPOU" value=""></td>
      </tr>
    </table>
    <table style="width:100%;">
      <tr>
        <td width="10%">
          <b>Страхувальник</b>
        </td>
        <td>
          <input class="filling" style="width:100%;" type="text" name="FIRM_NAME" value="<? echo $f->name; ?>">
        </td>
      </tr>
      <tr>
        <td></td>
        <td align="center"><font size="-1">(найменування страхувальника або прізвище, ім'я, по батькові - для фізичної особи – підприємця, особи, яка провадить незалежну професійну діяльність)</font></td>
      </tr>
    </table>
    <table style="width:100%;">
      <tr>
        <td width="60%"><b>4. Код основного виду економічної діяльності  відповідно до якого встановлено клас професійного ризику</b></td>
        <td>
          <input class="filling" style="width:100%;" type="text" name="KVED" value="<? echo $f->kved_code; ?>">
        </td>
      </tr>
    </table>
    <table style="width:100%;">
      <tr>
        <td width="25%">
          <b>5. Клас професійного ризику виробництва</b>
        </td>
        <td style="width:10%;text-align:center;">
          <input class="filling" style="width:100%;" type="text" name="PROF_RISK" value="">
        </td>
        <td width="25%"></td>
        <td width="10%"></td>
      </tr>
      <tr>
        <td width="25%">
          <b>6. Бюджетна установа</b>
        </td>
        <td width="10%">
          <select name="BUDGET_UST">
            <option value="0">Ні</option>
            <option value="1">Так</option>
          </select>
        </td>
        <td width="25%"><b>16. Кількість створених нових робочих місць у звітному періоді</b></td>
        <td style="width:10%;text-align:center;">
          <input class="filling" style="width:100%;" type="text" name="ID_1128" value="">
        </td>
      </tr>
      <tr>
        <td width="25%">
          <b>7. Підприємство, організація всеукраїнської громадської організації інвалідів, зокрема товариств УТОГ, УТОС</b>
        </td>
        <td style="width:10%;text-align:center;">
          <select name="UTOGS">
            <option value="0">Ні</option>
            <option value="1">Так</option>
          </select>
        </td>
        <td width="25%"><b>17. Застосування коефіцієнта</b></td>
        <td align="center">
          <select name="ZAST_KOEF">
            <option value="0">Ні</option>
            <option value="1">Так</option>
          </select>
        </td>
      </tr>
      <tr>
        <td width="25%">
          <b>8. Підприємство, організація громадської  організації інвалідів</b>
        </td>
        <td style="width:10%;text-align:center;">
          <select name="ORG_INV">
            <option value="0">Ні</option>
            <option value="1">Так</option>
          </select>
        </td>
        <td width="25%"><b>18. Розмір коефіцієнта (від 0,400 до 0,999)</b></td>
        <td style="width:10%;text-align:center;">
          <input class="filling" style="width:100%;" type="text" name="ROZM_KOEF" value="">
        </td>
      </tr>
      <tr>
        <td width="25%">
          <b>9. Підприємство суднобудівної промисловості</b>
          <br/>(клас 30.11 група 30.1 розділ 30, клас 33.15 група 33.1 розділ 33 КВЕД ДК 009:2010)</td>
        <td style="width:10%;text-align:center;">
          <select name="ORG_SP">
            <option value="0">Ні</option>
            <option value="1">Так</option>
          </select>
        </td>
        <td width="25%"><b>19. Середня заробітна плата за 2014 рік</b></td>
        <td style="width:10%;text-align:center;">
          <input class="filling" style="width:100%;" type="text" name="SER_ZP" value="">
        </td>
      </tr>
      <tr>
        <td width="25%" colspan="2"></td>
        <td width="25%"><b>20. Середньомісячна кількість застрахованих осіб за 2014 рік</b></td>
        <td style="width:10%;text-align:center;">
          <input class="filling" style="width:100%;" type="text" name="SER_ZO" value="">
        </td>
      </tr>
    </table>
    <table style="width:100%;">
      <tr>
        <td width="15%">
          <b>10. Міністерство, інший  центральний орган виконавчої влади</b>
        </td>
        <td style="width:30%;text-align:center;">
          <select name="FIRM_MIN">
            <option value="0">Ні</option>
            <option value="1">Так</option>
          </select>
        </td>
        <td width="25%"><b>21. Середньооблікова кількість штатних  працівників за звітний період, осіб</b></td>
        <td style="width:10%;text-align:center;">
          <input class="filling" style="width:100%;" type="text" name="ID_1012" value="">
        </td>
      </tr>
      <tr>
        <td>
          <b>11. Місцезнаходження (місце проживання)</b>
        </td>
        <td>
          <input class="filling" style="width:100%;" type="text" name="FIRM_ADR" value="<? echo $f->address; ?>">
        </td>
        <td><b>у тому числі:<br/>працівників,  яким відповідно до чинного законодавства встановлено інвалідність, осіб </b></td>
        <td align="center">
          <input class="filling" style="width:100%;" type="text" name="ID_1121" value="">
        </td>
      </tr>
      <tr>
        <td>
          <b>телефон</b>
        </td>
        <td>
          <input class="filling" style="width:100%;" type="text" name="FIRM_PHON" value="<? echo $f->telcode.' '.$f->tel; ?>">
        </td>
        <td><b>працівників, що мають додаткові гарантії у сприянні працевлаштуванню</b></td>
        <td align="center">
          <input class="filling" style="width:100%;" type="text" name="ID_1129" value="">
        </td>
      </tr>
      <tr>
        <td>
          <b>12.Організаційно-правова форма господарювання</b>
        </td>
        <td>
          <input class="filling" style="width:100%;" type="text" name="FIRM_VLAS" value="">
        </td>
        <td></td>
        <td></td>
      </tr>
      <tr>
        <td>
          <b>13. № реєстрації страхувальника</b>
        </td>
        <td>
          <input class="filling" style="width:100%;" type="text" name="FIRM_PENS" value="">
        </td>
        <td><b>Штатна чисельність працівників</b></td>
        <td align="center">
          <input class="filling" style="width:100%;" type="text" name="ID_1130" value="">
        </td>
      </tr>
      <tr>
        <td></td>
        <td></td>
        <td><b>Кількість осіб, які виконували роботи (надавали послуги) за договорами цивільно-правового характеру </b></td>
        <td align="center">
          <input class="filling" style="width:100%;" type="text" name="ID_1013" value="">
        </td>
      </tr>
      <tr>
        <td>
          <b>14.Найменування банку</b>
        </td>
        <td>
          <input class="filling" style="width:100%;" type="text" name="FIRM_NMBANK" value="">
        </td>
        <td><b>Кількість застрахованих осіб у звітному періоді, яким  нараховані виплати</b></td>
        <td align="center">
          <input class="calculation" style="width:100%;" type="text" name="ID_1014" value="">
        </td>
      </tr>
      <tr>
        <td><b>15. МФО</b></td>
        <td>
          <input class="filling" style="width:100%;" type="text" name="FIRM_CBANK" value="">
        </td>
        <td><b>у тому числі:<br/>чоловіків</b></td>
        <td align="center">
          <input class="filling" style="width:100%;" type="text" name="ID_1015" value="">
        </td>
      </tr>
      <tr>
        <td><b>№ п/рахунку</b></td>
        <td>
          <input class="filling" style="width:100%;" type="text" name="FIRM_RS" value="">
        </td>
        <td><b>жінок</b></td>
        <td align="center">
          <input class="filling" style="width:100%;" type="text" name="ID_1016" value="">
        </td>
      </tr>
      <tr>
        <td></td>
        <td></td>
        <td colspan="2" align="center">
          <i><font size="-1">(показники кількості працівників зазначаються в цілих одиницях)</font></i>
        </td>
      </tr>
      <tr>
        <td></td>
        <td></td>
      </tr>
    </table>
    <br/>
    <table style="width:100%;">
      <tr align="center">
        <td><b>Таблиця 1. Нарахування єдиного внеску</b></td>
      </tr>
    </table>
    <table style="width:100%;" class="bordered">
      <tr>
        <td width="5%" align="center">№ з/п</td>
        <td width="85%" align="center">Назва показника</td>
        <td style="width:10%;text-align:center;">Сума (грн.)</td>
      </tr>
      <tr>
        <td align="center">1</td>
        <td align="center">2</td>
        <td align="center">3</td>
      </tr>
      <tr>
        <td align="center">1</td>
        <td>Загальна сума нарахованої заробітної плати, винагород за виконану роботу (надані послуги) за цивільно-правовими договорами, оплати допомоги по тимчасовій непрацездатності та допомоги у зв’язку з вагітністю та пологами, усього (р.1.1 + р. 1.2 + р. 1.3 + р. 1.4 + р. 1.5)</td>
        <td align="right">
          <input onchange="fixedToDecimal(this)" class="calculation" style="width:100%;" type="text" name="ID_1000" value="0.00">
        </td>
      </tr>
      <tr>
        <td align="center">1.1</td>
        <td>сума нарахованої заробітної плати</td>
        <td align="right">
          <input onchange="fixedToDecimal(this)" class="filling" style="width:100%;" type="text" name="ID_1100" value="0.00">
        </td>
      </tr>
      <tr>
        <td align="center">1.2</td>
        <td>сума винагород за договорами цивільно-правового характеру</td>
        <td align="right">
          <input onchange="fixedToDecimal(this)" class="filling" style="width:100%;" type="text" name="ID_1200" value="0.00">
        </td>
      </tr>
      <tr>
        <td align="center">1.3</td>
        <td>сума оплати перших п'яти днів тимчасової непрацездатності, що здійснюється за рахунок коштів роботодавця</td>
        <td align="right">
          <input onchange="fixedToDecimal(this)" class="filling" style="width:100%;" type="text" name="ID_1300" value="0.00">
        </td>
      </tr>
      <tr>
        <td align="center">1.4</td>
        <td>сума допомоги по тимчасовій непрацездатності, яка виплачується за рахунок коштів фондів соціального страхування, усього,  у тому числі:</td>
        <td align="right">
          <input onchange="fixedToDecimal(this)" class="filling" style="width:100%;" type="text" name="ID_1400" value="0.00">
        </td>
      </tr>
      <tr>
        <td align="center">1.4.1</td>
        <td>сума допомоги по тимчасовій непрацездатності, яка виплачується за рахунок коштів Фонду соціального страхування від нещасних випадків на виробництві та професійних захворювань на виробництві</td>
        <td aight="center">
          <input onchange="fixedToDecimal(this)" class="filling" style="width:100%;" type="text" name="ID_1410" value="0.00">
        </td>
      </tr>
      <tr>
        <td align="center">1.5</td>
        <td>сума допомоги у зв'язку з вагітністю та пологами</td>
        <td align="right">
          <input onchange="fixedToDecimal(this)" class="filling" style="width:100%;" type="text" name="ID_1500" value="0.00">
        </td>
      </tr>
      <tr>
        <td align="center">2</td>
        <td>Сума нарахованої заробітної плати, винагород за виконану роботу (надані послуги) за цивільно-правовими договорами, оплати допомоги по тимчасовій непрацездатності та допомоги у зв’язку з вагітністю та пологами, на яку нараховується єдиний внесок, усього (р. 2.1 + р.2.2 + р. 2.3 + р. 2.4 + р. 2.5)</td>
        <td align="right">
          <input onchange="fixedToDecimal(this)" class="calculation" style="width:100%;" type="text" name="ID_2000" value="0.00">
        </td>
      </tr>
      <tr>
        <td align="center">2.1</td>
        <td>Сума нарахованої заробітної плати, на яку нараховується єдиний внесок, усього (р. 2.1.1 + р. 2.1.2 + р. 2.1.3 + р. 2.1.4 + р. 2.1.5 + р. 2.1.6+ р. 2.1.7)</td>
        <td align="right">
          <input onchange="fixedToDecimal(this)" class="calculation" style="width:100%;" type="text" name="ID_2100" value="0.00">
        </td>
      </tr>
      <tr>
        <td align="center">2.1.1</td>
        <td>роботодавцями відповідно до класу професійного ризику виробництва (36,76 - 49,7%)</td>
        <td align="right">
          <input onchange="fixedToDecimal(this)" class="filling" style="width:100%;" type="text" name="ID_2110" value="0.00">
        </td>
      </tr>
      <tr>
        <td align="center">2.1.2</td>
        <td>бюджетними установами (36,3%)</td>
        <td align="right">
          <input onchange="fixedToDecimal(this)" class="filling" style="width:100%;" type="text" name="ID_2120" value="0.00">
        </td>
      </tr>
      <tr>
        <td align="center">2.1.3</td>
        <td>роботодавцями найманим працівникам із числа осіб льотних екіпажів повітряних  суден цивільної авіації (пілоти, штурмани, бортінженери, бортмеханіки, бортрадисти, льотчики-наглядачі) і бортоператорам, які  виконують спеціальні роботи в польотах (45,96 %)</td>
        <td align="right">
          <input onchange="fixedToDecimal(this)" class="filling" style="width:100%;" type="text" name="ID_2130" value="0.00">
        </td>
      </tr>
      <tr>
        <td align="center">2.1.4</td>
        <td>підприємствами, установами і організаціями працюючим інвалідам (8,41 %)</td>
        <td align="right">
          <input onchange="fixedToDecimal(this)" class="filling" style="width:100%;" type="text" name="ID_2140" value="0.00">
        </td>
      </tr>
      <tr>
        <td align="center">2.1.5</td>
        <td>підприємствами та організаціями всеукраїнських громадських організацій інвалідів, зокрема товариствами УТОГ та УТОС (5,3 %)</td>
        <td align="right">
          <input onchange="fixedToDecimal(this)" class="filling" style="width:100%;" type="text" name="ID_2150" value="0.00">
        </td>
      </tr>
      <tr>
        <td align="center">2.1.6</td>
        <td>підприємствами та організаціями громадських організацій інвалідів (за умов, визначених частиною чотирнадцятою статті 8 Закону) працюючим інвалідам (5,5 %)</td>
        <td align="right">
          <input onchange="fixedToDecimal(this)" class="filling" style="width:100%;" type="text" name="ID_2160" value="0.00">
        </td>
      </tr>
      <tr>
        <td align="center">2.1.7</td>
        <td>підприємствами суднобудівної промисловості (клас 30.11 групи 30.1 розділу 30, клас 33.15 групи 33.1 розділу 33 КВЕД ДК 009:2010) (33,2 %)</td>
        <td align="right">
          <input onchange="fixedToDecimal(this)" class="filling" style="width:100%;" type="text" name="ID_2170" value="0.00">
        </td>
      </tr>
      <tr>
        <td align="center">2.2</td>
        <td>Сума винагород за виконані роботи (надані послуги) за цивільно-правовими договорами, усього (р. 2.2.1 + р. 2.2.2 + р. 2.2.3)</td>
        <td align="right">
          <input onchange="fixedToDecimal(this)" class="calculation" style="width:100%;" type="text" name="ID_2200" value="0.00">
        </td>
      </tr>
      <tr>
        <td align="center">2.2.1</td>
        <td>Сума винагород за виконані роботи (надані послуги) за цивільно-правовими договорами, 34,7 %</td>
        <td align="right">
          <input onchange="fixedToDecimal(this)" class="filling" style="width:100%;" type="text" name="ID_2210" value="0.00">
        </td>
      </tr>
      <tr>
        <td align="center">2.2.2</td>
        <td>Сума винагород за виконані роботи (надані послуги) за цивільно-правовими договорами, нарахована підприємствами та організаціями всеукраїнських громадських організацій інвалідів, зокрема товариствами УТОГ та УТОС (5,3 %)</td>
        <td align="right">
          <input onchange="fixedToDecimal(this)" class="filling" style="width:100%;" type="text" name="ID_2220" value="0.00">
        </td>
      </tr>
      <tr>
        <td align="center">2.2.3</td>
        <td>Сума винагород за виконані роботи (надані послуги) за цивільно-правовими договорами, нарахована підприємствами суднобудівної промисловості (клас 30.11 групи 30.1 розділу 30, клас 33.15 групи 33.1 розділу 33 КВЕД ДК 009:2010) (33,2 %)</td>
        <td align="right">
          <input onchange="fixedToDecimal(this)" class="filling" style="width:100%;" type="text" name="ID_2230" value="0.00">
        </td>
      </tr>
      <tr>
        <td align="center">2.3</td>
        <td>Сума допомоги по тимчасовій непрацездатності, усього (р. 2.3.1 + р. 2.3.2 + р. 2.3.3 + р. 2.3.4)</td>
        <td align="right">
          <input onchange="fixedToDecimal(this)" class="calculation" style="width:100%;" type="text" name="ID_2300" value="0.00">
        </td>
      </tr>
      <tr>
        <td align="center">2.3.1</td>
        <td>Сума допомоги по тимчасовій непрацездатності, на яку нараховується єдиний внесок у розмірі 33,2 %</td>
        <td align="right">
          <input onchange="fixedToDecimal(this)" class="filling" style="width:100%;" type="text" name="ID_2310" value="0.00">
        </td>
      </tr>
      <tr>
        <td align="center">2.3.2</td>
        <td>Сума допомоги по тимчасовій непрацездатності, нарахована підприємствами, установами і організаціями працюючим інвалідам (8,41 %)</td>
        <td align="right">
          <input onchange="fixedToDecimal(this)" class="filling" style="width:100%;" type="text" name="ID_2320" value="0.00">
        </td>
      </tr>
      <tr>
        <td align="center">2.3.3</td>
        <td>Сума допомоги по тимчасовій непрацездатності, нарахована підприємствами та організаціями всеукраїнських громадських організацій інвалідів, зокрема товариствами УТОГ та УТОС, (5,3%)</td>
        <td align="right">
          <input onchange="fixedToDecimal(this)" class="filling" style="width:100%;" type="text" name="ID_2330" value="0.00">
        </td>
      </tr>
      <tr>
        <td align="center">2.3.4</td>
        <td>Сума допомоги по тимчасовій непрацездатності, нарахована  підприємствами та організаціями громадських організацій інвалідів (за умов, визначених частиною чотирнадцятою статті 8 Закону) працюючим інвалідам (5,5 %)</td>
        <td align="right">
          <input onchange="fixedToDecimal(this)" class="filling" style="width:100%;" type="text" name="ID_2340" value="0.00">
        </td>
      </tr>
      <tr>
        <td align="center">2.4</td>
        <td>Cума допомоги у зв’язку з вагітністю та пологами (р. 2.4.1 + р. 2.4.2 + р. 2.4.3 + р. 2.4.4)</td>
        <td align="right">
          <input onchange="fixedToDecimal(this)" class="calculation" style="width:100%;" type="text" name="ID_2400" value="0.00">
        </td>
      </tr>
      <tr>
        <td align="center">2.4.1</td>
        <td>Cума допомоги у зв'язку з вагітністю та пологами, на яку нараховується єдиний внесок у розмірі  33,2 %</td>
        <td align="right">
          <input onchange="fixedToDecimal(this)" class="filling" style="width:100%;" type="text" name="ID_2410" value="0.00">
        </td>
      </tr>
      <tr>
        <td align="center">2.4.2</td>
        <td>Cума допомоги у зв'язку з вагітністю та пологами, нарахована підприємствами, установами і організаціями працюючим інвалідам (8,41 %)</td>
        <td align="right">
          <input onchange="fixedToDecimal(this)" class="filling" style="width:100%;" type="text" name="ID_2420" value="0.00">
        </td>
      </tr>
      <tr>
        <td align="center">2.4.3</td>
        <td>Cума допомоги у зв'язку з вагітністю та пологами, нарахована підприємствами та організаціями всеукраїнських громадських організацій інвалідів, зокрема товариствами УТОГ та УТОС (5,3%)</td>
        <td align="right">
          <input onchange="fixedToDecimal(this)" class="filling" style="width:100%;" type="text" name="ID_2430" value="0.00">
        </td>
      </tr>
      <tr>
        <td align="center">2.4.4</td>
        <td>Cума допомоги у зв'язку з вагітністю та пологами, нарахована  підприємствами та організаціями громадських організацій інвалідів (за умов, визначених частиною чотирнадцятою статті 8 Закону) працюючим інвалідам (5,5%)</td>
        <td align="right">
          <input onchange="fixedToDecimal(this)" class="filling" style="width:100%;" type="text" name="ID_2440" value="0.00">
        </td>
      </tr>
          <tr>
        <td align="center">2.5</td>
        <td>Додаткова база нарахування єдиного внеску, усього (р. 2.5.1 + р. 2.5.2 + р. 2.5.3 + р. 2.5.4 + р.2.5.5)</td>
        <td align="right">
          <input onchange="fixedToDecimal(this)" class="calculation" style="width:100%;" type="text" name="ID_2500" value="0.00">
        </td>
      </tr>
      <tr>
        <td align="center">2.5.1</td>
        <td>роботодавцями відповідно до класу професійного ризику виробництва (36,76 – 49,7 %)</td>
        <td align="right">
          <input onchange="fixedToDecimal(this)" class="filling" style="width:100%;" type="text" name="ID_2510" value="0.00">
        </td>
      </tr>
      <tr>
        <td align="center">2.5.2</td>
        <td>бюджетними установами (36,3 %)</td>
        <td align="right">
          <input onchange="fixedToDecimal(this)" class="filling" style="width:100%;" type="text" name="ID_2520" value="0.00">
        </td>
      </tr>
      <tr>
        <td align="center">2.5.3</td>
        <td>роботодавцями найманим працівникам із числа осіб льотних екіпажів повітряних суден цивільної авіації (пілоти, штурмани, бортінженери, бортмеханіки, бортрадисти, льотчики-наглядачі) і бортоператорам, які виконують спеціальні роботи в польотах (45,96 %)</td>
        <td align="right">
          <input onchange="fixedToDecimal(this)" class="filling" style="width:100%;" type="text" name="ID_2530" value="0.00">
        </td>
      </tr>
      <tr>
        <td align="center">2.5.4</td>
        <td>підприємствами суднобудівної промисловості (клас 30.11 групи 30.1 розділу 30, клас 33.15 групи 33.1 розділу 33 КВЕД ДК 009:2010) (33,2 %)</td>
        <td align="right">
          <input onchange="fixedToDecimal(this)" class="filling" style="width:100%;" type="text" name="ID_2540" value="0.00">
        </td>
      </tr>
      <tr>
        <td align="center">2.5.5</td>
        <td>сума допомоги по тимчасовій непрацездатності, сума допомоги у зв’язку з вагітністю та пологами, на яку нараховується єдиний внесок у розмірі 33,2 %</td>
        <td align="right">
          <input onchange="fixedToDecimal(this)" class="filling" style="width:100%;" type="text" name="ID_2550" value="0.00">
        </td>
      </tr>
      <tr>
        <td align="center">3</td>
        <td>Нараховано єдиного внеску, усього (р. 3.1 + р. 3.2 + р. 3.3 + р. 3.4 + р. 3.5)</td>
        <td align="right">
          <input onchange="fixedToDecimal(this)" class="calculation" style="width:100%;" type="text" name="ID_3000" value="0.00">
        </td>
      </tr>
      <tr>
        <td align="center">3.1</td>
        <td>на суми заробітної плати, усього (р. 3.1.1 + р. 3.1.2 + р. 3.1.3 + р. 3.1.4 + р. 3.1.5 + р. 3.1.6 + р. 3.1.7)</td>
        <td align="right">
          <input onchange="fixedToDecimal(this)" class="calculation" style="width:100%;" type="text" name="ID_3100" value="0.00">
        </td>
      </tr>
      <tr>
        <td align="center">3.1.1</td>
        <td>на суми заробітної плати, нарахованої роботодавцями, відповідно до класу професійного ризику виробництва (р. 2.1.1 х (36,76 %-49,7 %) х коефіцієнт)</td>
        <td align="right">
          <input onchange="fixedToDecimal(this)" class="calculation" style="width:100%;" type="text" name="ID_3110" value="0.00">
        </td>
      </tr>
      <tr>
        <td align="center">3.1.2</td>
        <td>на суми заробітної плати, нарахованої бюджетними установами ((р. 2.1.2 х 36,3 %) х коефіцієнт)</td>
        <td align="right">
          <input onchange="fixedToDecimal(this)" class="calculation" style="width:100%;" type="text" name="ID_3120" value="0.00">
        </td>
      </tr>
      <tr>
        <td align="center">3.1.3</td>
        <td>на суми заробітної плати, нарахованої роботодавцями найманим працівникам із числа осіб льотних екіпажів повітряних  суден цивільної авіації (пілоти, штурмани, бортінженери, бортмеханіки, бортрадисти, льотчики-наглядачі) і бортоператорам, які  виконують спеціальні роботи в польотах (р. 2.1.3 х 45,96 % х коефіцієнт)</td>
        <td align="right">
          <input onchange="fixedToDecimal(this)" class="calculation" style="width:100%;" type="text" name="ID_3130" value="0.00">
        </td>
      </tr>
      <tr>
        <td align="center">3.1.4</td>
        <td>на суми заробітної плати, нарахованої підприємствами, установами і організаціями працюючим інвалідам (р. 2.1.4 х 8,41 %)</td>
        <td align="right">
          <input onchange="fixedToDecimal(this)" class="calculation" style="width:100%;" type="text" name="ID_3140" value="0.00">
        </td>
      </tr>
      <tr>
        <td align="center">3.1.5</td>
        <td>на суми заробітної плати, нарахованої підприємствами та організаціями всеукраїнських громадських організацій інвалідів, зокрема товариствами УТОГ та УТОС (р. 2.1.5 х 5,3 %)</td>
        <td align="right">
          <input onchange="fixedToDecimal(this)" class="calculation" style="width:100%;" type="text" name="ID_3150" value="0.00">
        </td>
      </tr>
      <tr>
        <td align="center">3.1.6</td>
        <td>на суми заробітної плати, нарахованої  підприємствами та організаціями громадських організацій інвалідів (за умов, визначених частиною чотирнадцятою статті 8 закону) працюючим інвалідам                  (р. 2.1.6 х 5,5 %)</td>
        <td align="right">
          <input onchange="fixedToDecimal(this)" class="calculation" style="width:100%;" type="text" name="ID_3160" value="0.00">
        </td>
      </tr>
      <tr>
        <td align="center">3.1.7</td>
        <td>на суми заробітної плати, нарахованої підприємствами суднобудівної промисловості (клас 30.11 групи 30.1 розділу 30, клас 33.15 групи 33.1 розділу 33 КВЕД ДК 009:2010) (р. 2.1.7 х 33,2 % х коефіцієнт)</td>
        <td align="right">
          <input onchange="fixedToDecimal(this)" class="calculation" style="width:100%;" type="text" name="ID_3170" value="0.00">
        </td>
      </tr>
      <tr>
        <td align="center">3.2</td>
        <td>на суми винагород за виконані роботи (надані послуги) за цивільно-правовими договорами, усього (р. 3.2.1 + р. 3.2.2  + р. 3.2.3)</td>
        <td align="right">
          <input onchange="fixedToDecimal(this)" class="calculation" style="width:100%;" type="text" name="ID_3200" value="0.00">
        </td>
      </tr>
      <tr>
        <td align="center">3.2.1</td>
        <td>на суми винагород за виконані роботи (надані послуги) за цивільно-правовими договорами                           (р. 2.2.1 х 34,7 % х коефіцієнт)</td>
        <td align="right">
          <input onchange="fixedToDecimal(this)" class="calculation" style="width:100%;" type="text" name="ID_3210" value="0.00">
        </td>
      </tr>
      <tr>
        <td align="center">3.2.2</td>
        <td>на суми винагород за виконані роботи (надані послуги) за цивільно-правовими договорами, нарахованих підприємствами та організаціями всеукраїнських громадських організацій інвалідів, зокрема товариствами УТОГ та УТОС (р. 2.2.2 х 5,3%)</td>
        <td align="right">
          <input onchange="fixedToDecimal(this)" class="calculation" style="width:100%;" type="text" name="ID_3220" value="0.00">
        </td>
      </tr>
      <tr>
        <td align="center">3.2.3</td>
        <td>на суми винагород за виконані роботи (надані послуги) за цивільно-правовими договорами, нарахованих  підприємствами суднобудівної промисловості (клас 30.11 групи 30.1 розділу 30, клас 33.15 групи 33.1 розділу 33 КВЕД ДК 009:2010) (р. 2.2.3 х 33,2 % х коефіцієнт)</td>
        <td align="right">
          <input onchange="fixedToDecimal(this)" class="calculation" style="width:100%;" type="text" name="ID_3230" value="0.00">
        </td>
      </tr>
      <tr>
        <td align="center">3.3</td>
        <td>на суми допомоги по тимчасовій непрацездатності (р. 3.3.1 + р. 3.3.2 + р. 3.3.3 + р. 3.3.4)</td>
        <td align="right">
          <input onchange="fixedToDecimal(this)" class="calculation" style="width:100%;" type="text" name="ID_3300" value="0.00">
        </td>
      </tr>
      <tr>
        <td align="center">3.3.1</td>
        <td>на суми допомоги по тимчасовій непрацездатності (р. 2.3.1 х 33,2 % х коефіцієнт)</td>
        <td align="right">
          <input onchange="fixedToDecimal(this)" class="calculation" style="width:100%;" type="text" name="ID_3310" value="0.00">
        </td>
      </tr>
      <tr>
        <td align="center">3.3.2</td>
        <td>на суми допомоги по тимчасовій непрацездатності, нарахованої підприємствами, установами і організаціями працюючим інвалідам (р. 2.3.2 х 8,41 %)</td>
        <td align="right">
          <input onchange="fixedToDecimal(this)" class="calculation" style="width:100%;" type="text" name="ID_3320" value="0.00">
        </td>
      </tr>
      <tr>
        <td align="center">3.3.3</td>
        <td>на суми допомоги по тимчасовій непрацездатності, нарахованої підприємствами та організаціями всеукраїнських громадських організацій інвалідів, зокрема товариствами УТОГ та УТОС                  (р. 2.3.3 х 5,3 %)</td>
        <td align="right">
          <input onchange="fixedToDecimal(this)" class="calculation" style="width:100%;" type="text" name="ID_3330" value="0.00">
        </td>
      </tr>
      <tr>
        <td align="center">3.3.4</td>
        <td>на суми допомоги по тимчасовій непрацездатності, нарахованої  підприємствами та організаціями громадських організацій інвалідів (за умов, визначених частиною чотирнадцятою статті 8 закону) працюючим інвалідам (р. 2.3.4 х 5,5 %)</td>
        <td align="right">
          <input onchange="fixedToDecimal(this)" class="calculation" style="width:100%;" type="text" name="ID_3340" value="0.00">
        </td>
      </tr>
      <tr>
        <td align="center">3.4</td>
        <td>на суми допомоги у зв'язку з вагітністю та пологами (р. 3.4.1 + р. 3.4.2 + р. 3.4.3 + р. 3.4.4)</td>
        <td align="right">
          <input onchange="fixedToDecimal(this)" class="calculation" style="width:100%;" type="text" name="ID_3400" value="0.00">
        </td>
      </tr>
      <tr>
        <td align="center">3.4.1</td>
        <td>на суми допомоги у зв'язку з вагітністю та пологами (р. 2.4.1 х 33,2 %)</td>
        <td align="right">
          <input onchange="fixedToDecimal(this)" class="calculation" style="width:100%;" type="text" name="ID_3410" value="0.00">
        </td>
      </tr>
      <tr>
        <td align="center">3.4.2</td>
        <td>на суми допомоги у зв'язку з вагітністю та пологами, нарахованої підприємствами, установами і організаціями працюючим інвалідам (р. 2.4.2 х 8,41 %)</td>
        <td align="right">
          <input onchange="fixedToDecimal(this)" class="calculation" style="width:100%;" type="text" name="ID_3420" value="0.00">
        </td>
      </tr>
      <tr>
        <td align="center">3.4.3</td>
        <td>на суми допомоги у зв'язку з вагітністю та пологами, нарахованої підприємствами та організаціями всеукраїнських громадських організацій інвалідів, зокрема товариствами УТОГ та УТОС  (р. 2.4.3 х 5,3 %)</td>
        <td align="right">
          <input onchange="fixedToDecimal(this)" class="calculation" style="width:100%;" type="text" name="ID_3430" value="0.00">
        </td>
      </tr>
      <tr>
        <td align="center">3.4.4</td>
        <td>на суми допомоги у зв'язку з вагітністю та пологами, нарахованої  підприємствами та організаціями громадських організацій інвалідів (за умов, визначених частиною чотирнадцятою статті 8 Закону) працюючим інвалідам (р. 2.4.4 х 5,5 %)</td>
        <td align="right">
          <input onchange="fixedToDecimal(this)" class="calculation" style="width:100%;" type="text" name="ID_3440" value="0.00">
        </td>
      </tr>
      <tr>
        <td align="center">3.5</td>
        <td>на суми додаткової бази нарахування єдиного внеску (р. 3.5.1 + р. 3.5.2 + р. 3.5.3 + р. 3.5.4 + р. 3.5.5)</td>
        <td align="right">
          <input onchange="fixedToDecimal(this)" class="calculation" style="width:100%;" type="text" name="ID_3500" value="0.00">
        </td>
      </tr>
      <tr>
        <td align="center">3.5.1</td>
        <td>на суми різниці між розміром мінімальної заробітної плати та фактично нарахованої заробітної плати роботодавцями, відповідно до класу професійного ризику виробництва (р. 2.5.1 х (36,76 %-49,7 %))</td>
        <td align="right">
          <input onchange="fixedToDecimal(this)" class="calculation" style="width:100%;" type="text" name="ID_3510" value="0.00">
        </td>
      </tr>
      <tr>
        <td align="center">3.5.2</td>
        <td>на суми різниці між розміром мінімальної заробітної плати та фактично нарахованої заробітної плати бюджетними установами (р. 2.5.2 х 36,3 %)</td>
        <td align="right">
          <input onchange="fixedToDecimal(this)" class="calculation" style="width:100%;" type="text" name="ID_3520" value="0.00">
        </td>
      </tr>
      <tr>
        <td align="center">3.5.3</td>
        <td>на суми різниці між розміром мінімальної заробітної плати та фактично нарахованої заробітної плати роботодавцями найманим працівникам із числа осіб льотних екіпажів повітряних суден цивільної авіації (пілоти, штурмани, бортінженери, бортмеханіки, бортрадисти, льотчики-наглядачі) і бортоператорам, які виконують спеціальні роботи в польотах (р. 2.5.3 х 45,96 %)</td>
        <td align="right">
          <input onchange="fixedToDecimal(this)" class="calculation" style="width:100%;" type="text" name="ID_3530" value="0.00">
        </td>
      </tr>
      <tr>
        <td align="center">3.5.4</td>
        <td>на суми різниці між розміром мінімальної заробітної плати та фактично нарахованої заробітної плати підприємствами суднобудівної промисловості (клас 30.11 групи 30.1 розділу 30, клас 33.15 групи 33.1 розділу 33 КВЕД ДК 009:2010) (р. 2.5.4 х 33,2 %)</td>
        <td align="right">
          <input onchange="fixedToDecimal(this)" class="calculation" style="width:100%;" type="text" name="ID_3540" value="0.00">
        </td>
      </tr>
      <tr>
        <td align="center">3.5.5</td>
        <td>на суми допомоги у зв'язку з вагітністю та пологами, нарахованої  підприємствами та організаціями громадських організацій інвалідів (за умов, визначених частиною чотирнадцятою статті 8 Закону) працюючим інвалідам (р. 2.4.4 х 5,5 %)</td>
        <td align="right">
          <input onchange="fixedToDecimal(this)" class="calculation" style="width:100%;" type="text" name="ID_3550" value="0.00">
        </td>
      </tr>
      <tr>
        <td align="center">4</td>
        <td>Сума нарахованої заробітної плати, винагород за виконану роботу (надані послуги) за цивільно-правовими договорами, оплати допомоги по тимчасовій непрацездатності та допомоги у зв'язку з вагітністю та пологами, з якої утримано єдиний внесок, усього (р. 4.1 + р. 4.2 + р. 4.3 + р. 4.4) </td>
        <td align="right">
          <input onchange="fixedToDecimal(this)" class="calculation" style="width:100%;" type="text" name="ID_4000" value="0.00">
        </td>
      </tr>
      <tr>
        <td align="center">4.1</td>
        <td>Сума заробітної плати застрахованих осіб, усього (р. 4.1.1 + р. 4.1.2 + р. 4.1.3)</td>
        <td align="right">
          <input onchange="fixedToDecimal(this)" class="calculation" style="width:100%;" type="text" name="ID_4100" value="0.00">
        </td>
      </tr>
      <tr>
        <td align="center">4.1.1</td>
        <td>осіб, які працюють на умовах трудового договору (контракту) (3,6 %)</td>
        <td align="right">
          <input onchange="fixedToDecimal(this)" class="filling" style="width:100%;" type="text" name="ID_4110" value="0.00">
        </td>
      </tr>
      <tr>
        <td align="center">4.1.2</td>
        <td>найманих працівників - інвалідів, які працюють на підприємствах УТОГ, УТОС (2,85 %)</td>
        <td align="right">
          <input onchange="fixedToDecimal(this)" class="filling" style="width:100%;" type="text" name="ID_4120" value="0.00">
        </td>
      </tr>
      <tr>
        <td align="center">4.1.3</td>
        <td>працівників, які працюють на посадах, робота на яких зараховується до стажу, що дає право на одержання пенсії відповідно до окремих  законів України (6,1 %)</td>
        <td align="right">
          <input onchange="fixedToDecimal(this)" class="filling" style="width:100%;" type="text" name="ID_4130" value="0.00">
        </td>
      </tr>
      <tr>
        <td align="center">4.2</td>
        <td>Сума винагород за виконану роботу (надані послуги) за цивільно-правовими договорами, 2,6%  (відповідає значенню р. 2.2)</td>
        <td align="right">
          <input onchange="fixedToDecimal(this)" class="calculation" style="width:100%;" type="text" name="ID_4200" value="0.00">
        </td>
      </tr>
      <tr>
        <td align="center">4.3</td>
        <td>Сума допомоги по тимчасовій непрацездатності, 2 %</td>
        <td align="right">
          <input onchange="fixedToDecimal(this)" class="filling" style="width:100%;" type="text" name="ID_4300" value="0.00">
        </td>
      </tr>
      <tr>
        <td align="center">4.4</td>
        <td>Cума допомоги у зв'язку з вагітністю та пологами (2 %)</td>
        <td align="right">
          <input onchange="fixedToDecimal(this)" class="filling" style="width:100%;" type="text" name="ID_4400" value="0.00">
        </td>
      </tr>
      <tr>
        <td align="center">5</td>
        <td>Утримано єдиного внеску, усього (р. 5.1 +  р. 5.2 +  р. 5.3 + р. 5.4 +  р. 5.5 +  р. 5.6)</td>
        <td align="right">
          <input onchange="fixedToDecimal(this)" class="calculation" style="width:100%;" type="text" name="ID_5000" value="0.00">
        </td>
      </tr>
      <tr>
        <td align="center">5.1</td>
        <td>р. 4.1.1х 3,6 %</td>
        <td align="right">
          <input onchange="fixedToDecimal(this)" class="calculation" style="width:100%;" type="text" name="ID_5100" value="0.00">
        </td>
      </tr>
      <tr>
        <td align="center">5.2</td>
        <td>р. 4.1.2 х 2,85 %</td>
        <td align="right">
          <input onchange="fixedToDecimal(this)" class="calculation" style="width:100%;" type="text" name="ID_5200" value="0.00">
        </td>
      </tr>
      <tr>
        <td align="center">5.3</td>
        <td>р. 4.1.3 х 6,1%</td>
        <td align="right">
          <input onchange="fixedToDecimal(this)" class="calculation" style="width:100%;" type="text" name="ID_5300" value="0.00">
        </td>
      </tr>
      <tr>
        <td align="center">5.4</td>
        <td>р. 4.2 х 2,6 %</td>
        <td align="right">
          <input onchange="fixedToDecimal(this)" class="calculation" style="width:100%;" type="text" name="ID_5400" value="0.00">
        </td>
      </tr>
      <tr>
        <td align="center">5.5</td>
        <td>р. 4.3 х 2%</td>
        <td align="right">
          <input onchange="fixedToDecimal(this)" class="calculation" style="width:100%;" type="text" name="ID_5500" value="0.00">
        </td>
      </tr>
      <tr>
        <td align="center">5.6</td>
        <td>р. 4.4 х 2%</td>
        <td align="right">
          <input onchange="fixedToDecimal(this)" class="calculation" style="width:100%;" type="text" name="ID_5600" value="0.00">
        </td>
      </tr>
      <tr>
        <td align="center">6</td>
        <td>Донараховано та/або доутримано єдиного внеску у зв'язку з виправленням помилки, допущеної в попередніх звітних  періодах ( р. 6.1 + р. 6.2 + р. 6.3)</td>
        <td align="right">
          <input onchange="fixedToDecimal(this)" class="calculation" style="width:100%;" type="text" name="ID_6000" value="0.00">
        </td>
      </tr>
      <tr>
        <td align="center">6.1</td>
        <td>Донараховано єдиного внеску (крім сум, зазначених у р. 6.2)</td>
        <td align="right">
          <input onchange="fixedToDecimal(this)" class="calculation" style="width:100%;" type="text" name="ID_6100" value="0.00">
        </td>
      </tr>
      <tr>
        <td align="center">6.1.1</td>
        <td>36,76-49,7%</td>
        <td align="right">
          <input onchange="fixedToDecimal(this)" class="filling" style="width:100%;" type="text" name="ID_6110" value="0.00">
        </td>
      </tr>
      <tr>
        <td align="center">6.1.2</td>
        <td>36,3%</td>
        <td align="right">
          <input onchange="fixedToDecimal(this)" class="filling" style="width:100%;" type="text" name="ID_6120" value="0.00">
        </td>
      </tr>
      <tr>
        <td align="center">6.1.3</td>
        <td>45,96 %</td>
        <td align="right">
          <input onchange="fixedToDecimal(this)" class="filling" style="width:100%;" type="text" name="ID_6130" value="0.00">
        </td>
      </tr>
      <tr>
        <td align="center">6.1.4</td>
        <td>8,41%</td>
        <td align="right">
          <input onchange="fixedToDecimal(this)" class="filling" style="width:100%;" type="text" name="ID_6140" value="0.00">
        </td>
      </tr>
      <tr>
        <td align="center">6.1.5</td>
        <td>5,3%</td>
        <td align="right">
          <input onchange="fixedToDecimal(this)" class="filling" style="width:100%;" type="text" name="ID_6150" value="0.00">
        </td>
      </tr>
      <tr>
        <td align="center">6.1.6</td>
        <td>5,5%</td>
        <td align="right">
          <input onchange="fixedToDecimal(this)" class="filling" style="width:100%;" type="text" name="ID_6160" value="0.00">
        </td>
      </tr>
      <tr>
        <td align="center">6.1.7</td>
        <td>34,7%</td>
        <td align="right">
          <input onchange="fixedToDecimal(this)" class="filling" style="width:100%;" type="text" name="ID_6170" value="0.00">
        </td>
      </tr>
      <tr>
        <td align="center">6.1.8</td>
        <td>33,2 %, в т.ч. донараховано до мінімальної заробітної плати</td>
        <td align="right">
          <input onchange="fixedToDecimal(this)" class="filling" style="width:100%;" type="text" name="ID_6180" value="0.00">
        </td>
      </tr>
      <tr>
        <td align="center">6.1.9</td>
        <td>36,76-49,7 % х коефіцієнт</td>
        <td align="right">
          <input onchange="fixedToDecimal(this)" class="filling" style="width:100%;" type="text" name="ID_6190" value="0.00">
        </td>
      </tr>
      <tr>
        <td align="center">6.1.10</td>
        <td>36,3 % х коефіцієнт</td>
        <td align="right">
          <input onchange="fixedToDecimal(this)" class="filling" style="width:100%;" type="text" name="ID_61100" value="0.00">
        </td>
      </tr>
      <tr>
        <td align="center">6.1.11</td>
        <td>45,96 % х коефіцієнта</td>
        <td align="right">
          <input onchange="fixedToDecimal(this)" class="filling" style="width:100%;" type="text" name="ID_61110" value="0.00">
        </td>
      </tr>
      <tr>
        <td align="center">6.1.12</td>
        <td>34,7 % х коефіцієнт</td>
        <td align="right">
          <input onchange="fixedToDecimal(this)" class="filling" style="width:100%;" type="text" name="ID_61120" value="0.00">
        </td>
      </tr>
      <tr>
        <td align="center">6.1.13</td>
        <td>33,2 % х коефіцієнт</td>
        <td align="right">
          <input onchange="fixedToDecimal(this)" class="filling" style="width:100%;" type="text" name="ID_61130" value="0.00">
        </td>
      </tr>

      <tr>
        <td align="center">6.2</td>
        <td>Донараховано єдиного внеску за попередні звітні періоди внаслідок збільшення класу професійного ризику виробництва</td>
        <td align="right">
          <input onchange="fixedToDecimal(this)" class="filling" style="width:100%;" type="text" name="ID_6200" value="0.00">
        </td>
      </tr>
      <tr>
        <td align="center">6.3</td>
        <td>Додатково утримано єдиного внеску</td>
        <td align="right">
          <input onchange="fixedToDecimal(this)" class="calculation" style="width:100%;" type="text" name="ID_6300" value="0.00">
        </td>
      </tr>
      <tr>
        <td align="center">6.3.1</td>
        <td>3,6 %</td>
        <td align="right">
          <input onchange="fixedToDecimal(this)" class="filling" style="width:100%;" type="text" name="ID_6310" value="0.00">
        </td>
      </tr>
      <tr>
        <td align="center">6.3.2</td>
        <td>2,85%</td>
        <td align="right">
          <input onchange="fixedToDecimal(this)" class="filling" style="width:100%;" type="text" name="ID_6320" value="0.00">
        </td>
      </tr>
      <tr>
        <td align="center">6.3.3</td>
        <td>6,1%</td>
        <td align="right">
          <input onchange="fixedToDecimal(this)" class="filling" style="width:100%;" type="text" name="ID_6330" value="0.00">
        </td>
      </tr>
      <tr>
        <td align="center">6.3.4</td>
        <td>2,6%</td>
        <td align="right">
          <input onchange="fixedToDecimal(this)" class="filling" style="width:100%;" type="text" name="ID_6340" value="0.00">
        </td>
      </tr>
      <tr>
        <td align="center">6.3.5</td>
        <td>2%</td>
        <td align="right">
          <input onchange="fixedToDecimal(this)" class="filling" style="width:100%;" type="text" name="ID_6350" value="0.00">
        </td>
      </tr>
      <tr>
        <td align="center">6.4</td>
        <td>Сума виплат, на яку донараховано єдиний  внесок</td>
        <td align="right">
          <input onchange="fixedToDecimal(this)" class="filling" style="width:100%;" type="text" name="ID_6400" value="0.00">
        </td>
      </tr>
      <tr>
        <td align="center">6.5</td>
        <td>Зміст помилки<br/>
          <textarea class="filling" style="width:100%;" name="ERROR_TXT1"></textarea>
        </td>
        <td></td>
      </tr>
      <tr>
        <td align="center">7</td>
        <td>Зменшено суму єдиного внеску у зв'язку з виправленням помилки, допущеної в попередніх звітних періодах (р. 7.1 + р. 7.2 + р. 7.3)</td>
        <td align="right">
          <input onchange="fixedToDecimal(this)" class="calculation" style="width:100%;" type="text" name="ID_7000" value="0.00">
        </td>
      </tr>
      <tr>
        <td align="center">7.1</td>
        <td>Зменшено нарахування (крім сум, зазначених у р. 7.2)</td>
        <td align="right">
          <input onchange="fixedToDecimal(this)" class="calculation" style="width:100%;" type="text" name="ID_7100" value="0.00">
        </td>
      </tr>
      <tr>
        <td align="center">7.1.1</td>
        <td>36,76-49,7 %, в т.ч. зменшено виходячи з розміру мінімальної заробітної плати</td>
        <td align="right">
          <input onchange="fixedToDecimal(this)" class="filling" style="width:100%;" type="text" name="ID_7110" value="0.00">
        </td>
      </tr>
      <tr>
        <td align="center">7.1.2</td>
        <td>36,3 %, в т.ч. зменшено виходячи з розміру мінімальної заробітної плати</td>
        <td align="right">
          <input onchange="fixedToDecimal(this)" class="filling" style="width:100%;" type="text" name="ID_7120" value="0.00">
        </td>
      </tr>
      <tr>
        <td align="center">7.1.3</td>
        <td>45,96 %, в т.ч. зменшено виходячи з розміру мінімальної заробітної плати</td>
        <td align="right">
          <input onchange="fixedToDecimal(this)" class="filling" style="width:100%;" type="text" name="ID_7130" value="0.00">
        </td>
      </tr>
      <tr>
        <td align="center">7.1.4</td>
        <td>8,41 %</td>
        <td align="right">
          <input onchange="fixedToDecimal(this)" class="filling" style="width:100%;" type="text" name="ID_7140" value="0.00">
        </td>
      </tr>
      <tr>
        <td align="center">7.1.5</td>
        <td>5,3%</td>
        <td align="right">
          <input onchange="fixedToDecimal(this)" class="filling" style="width:100%;" type="text" name="ID_7150" value="0.00">
        </td>
      </tr>
      <tr>
        <td align="center">7.1.6</td>
        <td>5,5%</td>
        <td align="right">
          <input onchange="fixedToDecimal(this)" class="filling" style="width:100%;" type="text" name="ID_7160" value="0.00">
        </td>
      </tr>
      <tr>
        <td align="center">7.1.7</td>
        <td>34,7 %</td>
        <td align="right">
          <input onchange="fixedToDecimal(this)" class="filling" style="width:100%;" type="text" name="ID_7170" value="0.00">
        </td>
      </tr>
      <tr>
        <td align="center">7.1.8</td>
        <td>33,2 %, в т.ч. зменшено виходячи з розміру мінімальної заробітної плати</td>
        <td align="right">
          <input onchange="fixedToDecimal(this)" class="filling" style="width:100%;" type="text" name="ID_7180" value="0.00">
        </td>
      </tr>
      <tr>
        <td align="center">7.1.9</td>
        <td>36,76-49,7 % х коефіцієнт</td>
        <td align="right">
          <input onchange="fixedToDecimal(this)" class="filling" style="width:100%;" type="text" name="ID_7190" value="0.00">
        </td>
      </tr>
      <tr>
        <td align="center">7.1.10</td>
        <td>36,3 % х коефіцієнт</td>
        <td align="right">
          <input onchange="fixedToDecimal(this)" class="filling" style="width:100%;" type="text" name="ID_71100" value="0.00">
        </td>
      </tr>
      <tr>
        <td align="center">7.1.11</td>
        <td>45,96 % х коефіцієнта</td>
        <td align="right">
          <input onchange="fixedToDecimal(this)" class="filling" style="width:100%;" type="text" name="ID_71110" value="0.00">
        </td>
      </tr>
      <tr>
        <td align="center">7.1.12</td>
        <td>34,7 % х коефіцієнт</td>
        <td align="right">
          <input onchange="fixedToDecimal(this)" class="filling" style="width:100%;" type="text" name="ID_71120" value="0.00">
        </td>
      </tr>
      <tr>
        <td align="center">7.1.13</td>
        <td>33,2 % х коефіцієнт</td>
        <td align="right">
          <input onchange="fixedToDecimal(this)" class="filling" style="width:100%;" type="text" name="ID_71130" value="0.00">
        </td>
      </tr>
      <tr>
        <td align="center">7.2</td>
        <td>Зменшено суму єдиного внеску  за попередні звітні періоди внаслідок зменшення класу професійного ризику виробництва</td>
        <td align="right">
          <input onchange="fixedToDecimal(this)" class="filling" style="width:100%;" type="text" name="ID_7200" value="0.00">
        </td>
      </tr>
      <tr>
        <td align="center">7.3</td>
        <td>Зменшено утримань</td>
        <td align="right">
          <input onchange="fixedToDecimal(this)" class="calculation" style="width:100%;" type="text" name="ID_7300" value="0.00">
        </td>
      </tr>
      <tr>
        <td align="center">7.3.1</td>
        <td>3,6 %</td>
        <td align="right">
          <input onchange="fixedToDecimal(this)" class="filling" style="width:100%;" type="text" name="ID_7310" value="0.00">
        </td>
      </tr>
      <tr>
        <td align="center">7.3.2</td>
        <td>2,85%</td>
        <td align="right">
          <input onchange="fixedToDecimal(this)" class="filling" style="width:100%;" type="text" name="ID_7320" value="0.00">
        </td>
      </tr>
      <tr>
        <td align="center">7.3.3</td>
        <td>6,1%</td>
        <td align="right">
          <input onchange="fixedToDecimal(this)" class="filling" style="width:100%;" type="text" name="ID_7330" value="0.00">
        </td>
      </tr>
      <tr>
        <td align="center">7.3.4</td>
        <td>2,6%</td>
        <td align="right">
          <input onchange="fixedToDecimal(this)" class="filling" style="width:100%;" type="text" name="ID_7340" value="0.00">
        </td>
      </tr>
      <tr>
        <td align="center">7.3.5</td>
        <td>2%</td>
        <td align="right">
          <input onchange="fixedToDecimal(this)" class="filling" style="width:100%;" type="text" name="ID_7350" value="0.00">
        </td>
      </tr>
      <tr>
        <td align="center">7.4</td>
        <td>Сума виплат, на яку зайво нараховано єдиний внесок</td>
        <td align="right">
          <input onchange="fixedToDecimal(this)" class="filling" style="width:100%;" type="text" name="ID_7400" value="0.00">
        </td>
      </tr>
      <tr>
        <td></td>
        <td>Зміст помилки<br/>
          <textarea class="filling" style="width:100%;" name="ERROR_TXT2"></textarea>
        </td>
        <td></td>
      </tr>
      <tr>
        <td align="center">8</td>
        <td>Загальна сума єдиного внеску, що підлягає сплаті, всього (р. 3 + р. 5 + р. 6  - р. 7)</td>
        <td align="right">
          <input onchange="fixedToDecimal(this)" class="calculation" style="width:100%;" type="text" name="ID_8000" value="0.00">
        </td>
      </tr>
      <tr>
        <td></td>
        <td>у тому числі</td>
        <td></td>
      </tr>
      <tr>
        <td align="center">8.1</td>
        <td>р. 3.1.1 + р. 3.5.1 + р. 6.1.1 + р. 6.1.9  – р. 7.1.1 – р. 7.1.9  (36,76–49,7 %)</td>
        <td align="right">
          <input onchange="fixedToDecimal(this)" class="calculation" style="width:100%;" type="text" name="ID_8100" value="0.00">
        </td>
      </tr>
      <tr>
        <td align="center">8.2</td>
        <td>р. 3.1.2 + р. 3.5.2 + р. 6.1.2 + р. 6.1.10 – р. 7.1.2 – р. 7.1.10 (36,3 %)</td>
        <td align="right">
          <input onchange="fixedToDecimal(this)" class="calculation" style="width:100%;" type="text" name="ID_8200" value="0.00">
        </td>
      </tr>
      <tr>
        <td align="center">8.3</td>
        <td>р. 3.1.3 + р. 3.5.3  + р. 6.1.3 + р. 6.1.11– р. 7.1.3 – р. 7.1.11 (45,96 %)</td>
        <td align="right">
          <input onchange="fixedToDecimal(this)" class="calculation" style="width:100%;" type="text" name="ID_8300" value="0.00">
        </td>
      </tr>
      <tr>
        <td align="center">8.4</td>
        <td>р. 3.1.4 + р. 3.3.2 + р. 3.4.2 + р. 6.1.4 – р. 7.1.4 (8,41 %)</td>
        <td align="right">
          <input onchange="fixedToDecimal(this)" class="calculation" style="width:100%;" type="text" name="ID_8400" value="0.00">
        </td>
      </tr>
      <tr>
        <td align="center">8.5</td>
        <td>р. 3.1.5 + р.3.2.2 + р. 3.3.3 + р. 3.4.3 + р. 6.1.5 – р. 7.1.5 (5,3 %)</td>
        <td align="right">
          <input onchange="fixedToDecimal(this)" class="calculation" style="width:100%;" type="text" name="ID_8500" value="0.00">
        </td>
      </tr>
      <tr>
        <td align="center">8.6</td>
        <td>р. 3.1.6 + р. 3.3.4 + р. 3.4.4 + р. 6.1.6 – р. 7.1.6 (5,5 %)</td>
        <td align="right">
          <input onchange="fixedToDecimal(this)" class="calculation" style="width:100%;" type="text" name="ID_8600" value="0.00">
        </td>
      </tr>
      <tr>
        <td align="center">8.7</td>
        <td>р. 3.2.1 + р. 6.1.7 + р. 6.1.12 – р. 7.1.7 – р. 7.1.12 (34,7 %)</td>
        <td align="right">
          <input onchange="fixedToDecimal(this)" class="calculation" style="width:100%;" type="text" name="ID_8700" value="0.00">
        </td>
      </tr>
      <tr>
        <td align="center">8.8</td>
        <td>р. 3.1.7 + р. 3.2.3 + р. 3.3.1 + р. 3.4.1+ р. 3.5.4 + р. 3.5.5 + р. 6.1.8 + р. 6.1.13 – р. 7.1.8 - р. 7.1.13 (33,2 %)</td>
        <td align="right">
          <input onchange="fixedToDecimal(this)" class="calculation" style="width:100%;" type="text" name="ID_8800" value="0.00">
        </td>
      </tr>
      <tr>
        <td align="center">8.9</td>
        <td>р. 5.1 + р. 6.3.1– р. 7.3.1 (3,6 %)</td>
        <td align="right">
          <input onchange="fixedToDecimal(this)" class="calculation" style="width:100%;" type="text" name="ID_8900" value="0.00">
        </td>
      </tr>
      <tr>
        <td align="center">8.10</td>
        <td>р. 5.2 + р. 6.3.2 – р. 7.3.2 (2,85 %)</td>
        <td align="right">
          <input onchange="fixedToDecimal(this)" class="calculation" style="width:100%;" type="text" name="ID_8110" value="0.00">
        </td>
      </tr>
      <tr>
        <td align="center">8.11</td>
        <td>р. 5.3 + р. 6.3.3 – р. 7.3.3 (6,1 %)</td>
        <td align="right">
          <input onchange="fixedToDecimal(this)" class="calculation" style="width:100%;" type="text" name="ID_8120" value="0.00">
        </td>
      </tr>
      <tr>
        <td align="center">8.12</td>
        <td>р. 5.4 + р. 6.3.4 - р. 7.3.4 (2,6%)</td>
        <td align="right">
          <input onchange="fixedToDecimal(this)" class="calculation" style="width:100%;" type="text" name="ID_8130" value="0.00">
        </td>
      </tr>
      <tr>
        <td align="center">8.13</td>
        <td>р. 5.5 + р. 5.6 + р. 6.3.5 – р. 7.3.5 (2 %)</td>
        <td align="right">
          <input onchange="fixedToDecimal(this)" class="calculation" style="width:100%;" type="text" name="ID_8140" value="0.00">
        </td>
      </tr>
      <tr>
        <td align="center">8.14</td>
        <td>р. 6.2 - р. 7.2</td>
        <td align="right">
          <input onchange="fixedToDecimal(this)" class="calculation" style="width:100%;" type="text" name="ID_8150" value="0.00">
        </td>
      </tr>
    </table>
    * Для фізичних осіб, які мають відмітку в паспорті про право здійснювати будь-які платежі за серією та номером паспорта.
    <br/>
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
    <br/>
    <table style="width:100%;">
      <tr>
        <td align="center">Додаток до таблиці 1 звіту за __<? echo $period; ?>____місяць <? echo $year; ?> року</td>
      </tr>
    </table>
    <table width="80%">
      <tr>
        <td width="80%">Сума заборгованості з виплати заробітної плати на початок звітного періоду</td>
        <td width="20%" align="right">
          <input class="filling" style="width:100%;" type="text" name="ID_1103" value="">
      </tr>
      <tr>
        <td width="80%">Сума заборгованості з виплати заробітної плати на кінець звітного періоду</td>
        <td width="20%" align="right">
          <input class="filling" style="width:100%;" type="text" name="ID_1104" value="">
      </tr>
    </table>
    <table style="width:100%;">
      <tr>
        <td width="30%">Виплачено заробітної плати усього</td>
        <td width="20%" align="right">
          <input class="filling" style="width:100%;" type="text" name="ID_1117" value="">
        <td width="30%">у т.ч. у натуральній формі</td>
        <td width="20%" align="right">
          <input class="filling" style="width:100%;" type="text" name="ID_1118" value="">
      </tr>
      <tr>
        <td colspan="3">у т.ч.: виплачено у звітному періоді заробітної плати та інших виплат і винагород особам, які працюють на умовах трудового договору (контракту) або на інших умовах, передбачених законодавством, чи за цивільно-правовими договорами, нарахованих за період до 01.01.2011</td>
        <td width="20%" align="right">
          <input class="filling" style="width:100%;" type="text" name="ID_1122" value="">
      </tr>
      <tr>
        <td colspan="3">у т.ч.: виплачено у звітному періоді заробітної плати та інших виплат і винагород особам, які працюють на умовах трудового договору (контракту) або на інших умовах, передбачених законодавством, чи за цивільно-правовими договорами, нарахованих за період до 01.01.2004</td>
        <td width="20%" align="right">
          <input class="filling" style="width:100%;" type="text" name="ID_1123" value="">
      </tr>
    </table>
    <table style="width:100%;">
      <tr>
        <td colspan="2">1. Належить до сплати нарахованих за період до 01.01.2011:</td>
      </tr>
      <tr>
        <td width="80%">1.1. Страхових внесків до Фонду соціального страхування від нещасних випадків на виробництві та професійних захворювань України</td>
        <td width="20%" align="right">
          <input class="filling" style="width:100%;" type="text" name="ID_1124" value="">
      </tr>
      <tr>
        <td>1.2. Страхових внесків до Фонду соціального страхування з тимчасової втрати працездатності</td>
        <td align="right">
          <input class="filling" style="width:100%;" type="text" name="ID_1125" value="">
      </tr>
      <tr>
        <td>1.3. Страхових внесків до Фонду соціального страхування на випадок безробіття</td>
        <td align="right">
          <input class="filling" style="width:100%;" type="text" name="ID_1126" value="">
      </tr>
      <tr>
        <td>2. Належить до сплати збору на обов'язкове державне пенсійне страхування, нарахованого за період до 01.01.2004 , </td>
        <td align="right">
          <input class="filling" style="width:100%;" type="text" name="ID_1127" value="">
      </tr>
    </table>
    <table style="width:100%;">
      <tr>
        <td colspan="2">3. Виправлення помилок, допущених при нарахуванні внесків на загальнообов'язкове державне пенсійне страхування за період до 01.01.2011:</td>
      </tr>
      <tr>
        <td width="80%">3.1. Сума, на яку збільшено внески у зв'язку з виправленням помилки, у т.ч.</td>
        <td width="20%" align="right">
          <input class="filling" style="width:100%;" type="text" name="ID_1039" value="">
      </tr>
      <tr>
        <td>3.1.1. 32%; 32,3%; 31,8%; 33,2%; 4%; 42%; 6,4%; 6,46%; 13,28%; 19,92%; 26,56%</td>
        <td align="right">
          <input class="filling" style="width:100%;" type="text" name="ID_1040" value="">
      </tr>
      <tr>
        <td>3.1.2. 0,5 - 5 %</td>
        <td align="right">
          <input class="filling" style="width:100%;" type="text" name="ID_1041" value="">
      </tr>
      <tr>
        <td>3.2. Сума виплати (заробітної плати, доходу), на яку донараховані страхові внески,</td>
        <td align="right">
          <input class="filling" style="width:100%;" type="text" name="ID_1060" value="">
      </tr>
      <tr>
        <td>3.3. Сума, на яку зменшено внески у зв'язку з виправленням помилки, у т.ч.</td>
        <td align="right">
          <input class="filling" style="width:100%;" type="text" name="ID_1042" value="">
      </tr>
      <tr>
        <td>3.3.1. 32%; 32,3%; 31,8%; 33,2%; 4%; 42%; 6,4%; 6,46%; 13,28%; 19,92%; 26,56%</td>
        <td align="right">
          <input class="filling" style="width:100%;" type="text" name="ID_1043" value="">
      </tr>
      <tr>
        <td>3.3.2. 0,5 - 5 %</td>
        <td align="right">
          <input class="filling" style="width:100%;" type="text" name="ID_1044" value="">
      </tr>
      <tr>
        <td>3.4. Сума виплати (заробітної плати, доходу), на яку зайво нараховані страхові внески,</td>
        <td align="right">
          <input class="filling" style="width:100%;" type="text" name="ID_1061" value="">
      </tr>
    </table>
    <table style="width:100%;">
      <tr>
        <td >3.5. Виправлення допущеної помилки потребує змін у персоніфікованому обліку застрахованих осіб  так (1) /ні (0)</td>
        <td  align="center">
          <input class="filling" style="width:100%;" type="text" name="ZM_SPOV" value="">
        </td>
      </tr>
    </table>
    <table style="width:100%;">
      <tr>
        <td>3.6. Зміст помилки</td>
      </tr>
      <tr>
        <td>
          <textarea class="filling" style="width:100%;" name="ERROR_TXT3"></textarea>
        </td>
      </tr>
    </table>
    <table width="60%">
      <tr>
        <td colspan="2">4. Встановлені строки виплати заробітної плати:</td>
      </tr>
      <tr>
        <td width="30%">за першу половину місяця</td>
        <td style="width:10%;text-align:center;">
          <input class="filling" style="width:100%;" type="text" name="VUPL_ZP1" value="">
        </td>
      </tr>
      <tr>
        <td width="30%">за другу половину місяця</td>
        <td style="width:10%;text-align:center;">
          <input class="filling" style="width:100%;" type="text" name="VUPL_ZP2" value="">
        </td>
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
    var m=Number($("input[name='ID_1015']").val());
    var w=Number($("input[name='ID_1016']").val());
    var t1100=Number($("input[name='ID_1100']").val());
    var t1200=Number($("input[name='ID_1200']").val());
    var t1300=Number($("input[name='ID_1300']").val());
    var t1400=Number($("input[name='ID_1400']").val());
    var t1500=Number($("input[name='ID_1500']").val());
    var t2110=Number($("input[name='ID_2110']").val());
    var t2120=Number($("input[name='ID_2120']").val());
    var t2130=Number($("input[name='ID_2130']").val());
    var t2140=Number($("input[name='ID_2140']").val());
    var t2150=Number($("input[name='ID_2150']").val());
    var t2160=Number($("input[name='ID_2160']").val());
    var t2170=Number($("input[name='ID_2170']").val());
    var t2210=Number($("input[name='ID_2210']").val());
    var t2220=Number($("input[name='ID_2220']").val());
    var t2230=Number($("input[name='ID_2230']").val());
    var t2310=Number($("input[name='ID_2310']").val());
    var t2320=Number($("input[name='ID_2320']").val());
    var t2330=Number($("input[name='ID_2330']").val());
    var t2340=Number($("input[name='ID_2340']").val());
    var t2410=Number($("input[name='ID_2410']").val());
    var t2420=Number($("input[name='ID_2420']").val());
    var t2430=Number($("input[name='ID_2430']").val());
    var t2440=Number($("input[name='ID_2440']").val());
    var t2510=Number($("input[name='ID_2510']").val());
    var t2520=Number($("input[name='ID_2520']").val());
    var t2530=Number($("input[name='ID_2530']").val());
    var t2540=Number($("input[name='ID_2540']").val());
    var t2550=Number($("input[name='ID_2550']").val());
    var t4110=Number($("input[name='ID_4110']").val());
    var t4120=Number($("input[name='ID_4120']").val());
    var t4130=Number($("input[name='ID_4130']").val());
    var t4200=Number($("input[name='ID_4200']").val());
    var t4300=Number($("input[name='ID_4300']").val());
    var t4400=Number($("input[name='ID_4400']").val());
    var t6110=Number($("input[name='ID_6110']").val());
    var t6120=Number($("input[name='ID_6120']").val());
    var t6130=Number($("input[name='ID_6130']").val());
    var t6140=Number($("input[name='ID_6140']").val());
    var t6150=Number($("input[name='ID_6150']").val());
    var t6160=Number($("input[name='ID_6160']").val());
    var t6170=Number($("input[name='ID_6170']").val());
    var t6180=Number($("input[name='ID_6180']").val());
    var t6190=Number($("input[name='ID_6190']").val());
    var t61100=Number($("input[name='ID_61100']").val());
    var t61110=Number($("input[name='ID_61110']").val());
    var t61120=Number($("input[name='ID_61120']").val());
    var t61130=Number($("input[name='ID_61130']").val());
    var t6310=Number($("input[name='ID_6310']").val());
    var t6320=Number($("input[name='ID_6320']").val());
    var t6330=Number($("input[name='ID_6330']").val());
    var t6340=Number($("input[name='ID_6340']").val());
    var t6350=Number($("input[name='ID_6350']").val());
    var t6200=Number($("input[name='ID_6200']").val());
    var t7110=Number($("input[name='ID_7110']").val());
    var t7120=Number($("input[name='ID_7120']").val());
    var t7130=Number($("input[name='ID_7130']").val());
    var t7140=Number($("input[name='ID_7140']").val());
    var t7150=Number($("input[name='ID_7150']").val());
    var t7160=Number($("input[name='ID_7160']").val());
    var t7170=Number($("input[name='ID_7170']").val());
    var t7180=Number($("input[name='ID_7180']").val());
    var t7190=Number($("input[name='ID_7190']").val());
    var t71100=Number($("input[name='ID_71100']").val());
    var t71110=Number($("input[name='ID_71110']").val());
    var t71120=Number($("input[name='ID_71120']").val());
    var t71130=Number($("input[name='ID_71130']").val());
    var t7310=Number($("input[name='ID_7310']").val());
    var t7320=Number($("input[name='ID_7320']").val());
    var t7330=Number($("input[name='ID_7330']").val());
    var t7340=Number($("input[name='ID_7340']").val());
    var t7350=Number($("input[name='ID_7350']").val());
    var t7200=Number($("input[name='ID_7200']").val());

    var h=(m+w);
    $("input[name='ID_1014']").val(h);
    var t1000=(t1100+t1200+t1300+t1400+t1500).toFixed(2);
    $("input[name='ID_1000']").val(t1000);
    var t2100=(t2110+t2120+t2130+t2140+t2150+t2160+t2170).toFixed(2);
    $("input[name='ID_2100']").val(t2100);
    var t2200=(t2210+t2220+t2230).toFixed(2);
    $("input[name='ID_2200']").val(t2200);
    var t2300=(t2310+t2320+t2330+t2340).toFixed(2);
    $("input[name='ID_2300']").val(t2300);
    var t2400=(t2410+t2420+t2430+t2440).toFixed(2);
    $("input[name='ID_2400']").val(t2400);
    var t2500=(t2510+t2520+t2530+t2540+t2550).toFixed(2);
    $("input[name='ID_2500']").val(t2500);
    var t2000=(Number(t2100)+Number(t2200)+Number(t2300)+Number(t2400)+Number(t2500)).toFixed(2);
    $("input[name='ID_2000']").val(t2000);
    var risk=[0.3676,0.3677,0.3678,0.3679,0.368,0.3682,0.3683,0.3685,0.3686,0.3688,0.369,0.3692,0.3693,0.3695,0.37,0.3704,0.3706,0.3713,0.3716,0.3717,0.3718,0.3719,0.3726,0.373,0.3733,0.3739,0.3745,0.3751,0.3758,0.376,0.3761,0.3765,0.3766,0.3777,0.3778,0.3786,0.3787,0.3796,0.3797,0.3799,0.38,0.3803,0.3805,0.381,0.3811,0.3819,0.3824,0.3826,0.3828,0.3845,0.3847,0.3852,0.3854,0.3857,0.3866,0.3874,0.3901,0.3902,0.391,0.3948,0.3976,0.399,0.4019,0.404,0.4261,0.4272,0.497];
    var prof_risk=Number($("input[name='PROF_RISK']").val());
    var prc_risk=risk[prof_risk-1];
    var tkoef=Number($("input[name='ROZM_KOEF']").val());
    if(tkoef>0){
      var koef=tkoef;
    }else{
      var koef=1;
    }
    var t3110=(t2110*prc_risk*koef).toFixed(2);
    $("input[name='ID_3110']").val(t3110);
    var t3120=(t2120*0.363*koef).toFixed(2);
    $("input[name='ID_3120']").val(t3120);
    var t3130=(t2130*0.4596*koef).toFixed(2);
    $("input[name='ID_3130']").val(t3130);
    var t3140=(t2140*0.0841).toFixed(2);
    $("input[name='ID_3140']").val(t3140);
    var t3150=(t2150*0.053).toFixed(2);
    $("input[name='ID_3150']").val(t3150);
    var t3160=(t2160*0.055).toFixed(2);
    $("input[name='ID_3160']").val(t3160);
    var t3170=(t2170*0.332*koef).toFixed(2);
    $("input[name='ID_3170']").val(t3170);
    var t3100=(Number(t3110)+Number(t3120)+Number(t3130)+Number(t3140)+Number(t3150)+Number(t3160)+Number(t3170)).toFixed(2);
    $("input[name='ID_3100']").val(t3100);
    var t3210=(t2210*0.347*koef).toFixed(2);
    $("input[name='ID_3210']").val(t3210);
    var t3220=(t2220*0.053).toFixed(2);
    $("input[name='ID_3220']").val(t3220);
    var t3230=(t2230*0.332*koef).toFixed(2);
    $("input[name='ID_3230']").val(t3230);
    var t3200=(Number(t3210)+Number(t3220)+Number(t3230)).toFixed(2);
    $("input[name='ID_3200']").val(t3200);
    var t3310=(t2310*0.332*koef).toFixed(2);
    $("input[name='ID_3310']").val(t3310);
    var t3320=(t2320*0.0841).toFixed(2);
    $("input[name='ID_3320']").val(t3320);
    var t3330=(t2330*0.053).toFixed(2);
    $("input[name='ID_3330']").val(t3330);
    var t3340=(t2340*0.055).toFixed(2);
    $("input[name='ID_3340']").val(t3340);
    var t3300=(Number(t3310)+Number(t3320)+Number(t3330)+Number(t3340)).toFixed(2);
    $("input[name='ID_3300']").val(t3300);
    var t3410=(t2410*0.332*koef).toFixed(2);
    $("input[name='ID_3410']").val(t3410);
    var t3420=(t2420*0.0841).toFixed(2);
    $("input[name='ID_3420']").val(t3420);
    var t3430=(t2430*0.053).toFixed(2);
    $("input[name='ID_3430']").val(t3430);
    var t3440=(t2440*0.055).toFixed(2);
    $("input[name='ID_3440']").val(t3440);
    var t3400=(Number(t3410)+Number(t3420)+Number(t3430)+Number(t3440)).toFixed(2);
    $("input[name='ID_3400']").val(t3400);
    var t3510=(t2510*prc_risk).toFixed(2);
    $("input[name='ID_3510']").val(t3510);
    var t3520=(t2520*0.363).toFixed(2);
    $("input[name='ID_3520']").val(t3520);
    var t3530=(t2530*0.4596).toFixed(2);
    $("input[name='ID_3530']").val(t3530);
    var t3540=(t2540*0.332).toFixed(2);
    $("input[name='ID_3540']").val(t3540);
    var t3550=(t2550*0.055).toFixed(2);
    $("input[name='ID_3550']").val(t3550);
    var t3500=(Number(t3510)+Number(t3520)+Number(t3530)+Number(t3540)+Number(t3550)).toFixed(2);
    $("input[name='ID_3500']").val(t3500);
    var t3000=(Number(t3100)+Number(t3200)+Number(t3300)+Number(t3400)+Number(t3500)).toFixed(2);
    $("input[name='ID_3000']").val(t3000);
    var t4100=(t4110+t4120+t4130).toFixed(2);
    $("input[name='ID_4100']").val(t4100);
    $("input[name='ID_4200']").val(t2200);
    var t4000=(Number(t4100)+Number(t4200)+Number(t4300)+Number(t4400)).toFixed(2);
    $("input[name='ID_4000']").val(t4000);
    var t5100=(Number(t4110)*0.036).toFixed(2);
    $("input[name='ID_5100']").val(t5100);
    var t5200=(Number(t4120)*0.0285).toFixed(2);
    $("input[name='ID_5200']").val(t5200);
    var t5300=(Number(t4130)*0.061).toFixed(2);
    $("input[name='ID_5300']").val(t5300);
    var t5400=(Number(t4200)*0.026).toFixed(2);
    $("input[name='ID_5400']").val(t5400);
    var t5500=(Number(t4300)*0.02).toFixed(2);
    $("input[name='ID_5500']").val(t5500);
    var t5600=(Number(t4400)*0.02).toFixed(2);
    $("input[name='ID_5600']").val(t5600);
    var t5000=(Number(t5100)+Number(t5200)+Number(t5300)+Number(t5400)+Number(t5500)+Number(t5600)).toFixed(2);
    $("input[name='ID_5000']").val(t5000);
    var t6100=(Number(t6110)+Number(t6120)+Number(t6130)+Number(t6140)+Number(t6150)+Number(t6160)+Number(t6170)+Number(t6180)+Number(t6190)+Number(t61100)+Number(t61110)+Number(t61120)+Number(t61130)).toFixed(2);
    $("input[name='ID_6100']").val(t6100);
    var t6300=(Number(t6310)+Number(t6320)+Number(t6330)+Number(t6340)+Number(t6350)).toFixed(2);
    $("input[name='ID_6300']").val(t6300);
    t6000=(Number(t6100)+Number(t6200)+Number(t6300)).toFixed(2);
    $("input[name='ID_6000']").val(t6000);
    var t7100=(Number(t7110)+Number(t7120)+Number(t7130)+Number(t7140)+Number(t7150)+Number(t7160)+Number(t7170)+Number(t7180)+Number(t7190)+Number(t71100)+Number(t71110)+Number(t71120)+Number(t71130)).toFixed(2);
    $("input[name='ID_7100']").val(t7100);
    var t7300=(Number(t7310)+Number(t7320)+Number(t7330)+Number(t7340)+Number(t7350)).toFixed(2);
    $("input[name='ID_7300']").val(t7300);
    t7000=(Number(t7100)+Number(t7200)+Number(t7300)).toFixed(2);
    $("input[name='ID_7000']").val(t7000);

    var t8100=(Number(t3110)+Number(t3510)+Number(t6110)+Number(t6190)-Number(t7110)-Number(t7190)).toFixed(2);
    $("input[name='ID_8100']").val(t8100);
    var t8200=(Number(t3120)+Number(t3520)+Number(t6120)+Number(t61100)-Number(t7120)-Number(t71100)).toFixed(2);
    $("input[name='ID_8200']").val(t8200);
    var t8300=(Number(t3130)+Number(t3530)+Number(t6130)+Number(t61110)-Number(t7130)-Number(t71110)).toFixed(2);
    $("input[name='ID_8300']").val(t8300);
    var t8400=(Number(t3140)+Number(t3320)+Number(t3420)+Number(t6140)-Number(t7140)).toFixed(2);
    $("input[name='ID_8400']").val(t8400);
    var t8500=(Number(t3150)+Number(t3220)+Number(t3330)+Number(t3430)+Number(t6150)-Number(t7150)).toFixed(2);
    $("input[name='ID_8500']").val(t8500);
    var t8600=(Number(t3160)+Number(t3340)+Number(t3440)+Number(t6160)-Number(t7160)).toFixed(2);
    $("input[name='ID_8600']").val(t8600);
    var t8700=(Number(t3210)+Number(t6170)+Number(t61120)-Number(t7170)-Number(t71120)).toFixed(2);
    $("input[name='ID_8700']").val(t8700);
    var t8800=(Number(t3170)+Number(t3230)+Number(t3310)+Number(t3410)+Number(t3540)+Number(t3550)+Number(t6180)+Number(t61130)-Number(t7180)-Number(t71130)).toFixed(2);
    $("input[name='ID_8800']").val(t8800);
    var t8900=(Number(t5100)+Number(t6310)-Number(t7310)).toFixed(2);
    $("input[name='ID_8900']").val(t8900);
    var t8110=(Number(t5200)+Number(t6320)-Number(t7320)).toFixed(2);
    $("input[name='ID_8110']").val(t8110);
    var t8120=(Number(t5300)+Number(t6330)-Number(t7330)).toFixed(2);
    $("input[name='ID_8120']").val(t8120);
    var t8130=(Number(t5400)+Number(t6340)-Number(t7340)).toFixed(2);
    $("input[name='ID_8130']").val(t8130);
    var t8140=(Number(t5500)+Number(t5600)+Number(t6350)-Number(t7350)).toFixed(2);
    $("input[name='ID_8140']").val(t8140);
    var t8150=(Number(t6200)-Number(t7200)).toFixed(2);
    $("input[name='ID_8150']").val(t8150);
    var t8000=(Number(t3000)+Number(t5000)+Number(t6000)-Number(t7000)).toFixed(2);
    $("input[name='ID_8000']").val(t8000);
  }
  checkBlank();
},500);
function checkBlank(){
  required($("input[name='FIRM_EDRPOU']"));
  required($("input[name='FIRM_NAME']"));
  required($("input[name='KVED']"));
  required($("input[name='PROF_RISK']"));

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
	$.post('<? echo base_url(); ?>?render=E04T01I', $('#blank_form').serialize(),function(){
		alert('Звіт збережено');
	});
}
</script>
