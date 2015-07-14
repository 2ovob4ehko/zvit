<?xml version="1.0" encoding="windows-1251"?>
<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
<xsl:output method="html" encoding="windows-1251"/>
<xsl:template match="DECLARHEAD"/>

<xsl:template match="DECLARBODY">

<html><head>
<TITLE>- F0500105 - "Податковий розрахунок сум доходу, нарахованого (сплаченого) на користь платників податку, і сум утриманого з них податку"</TITLE>
<link HREF="./css/xsl_edit_styles.css" REL="stylesheet"></link>
<script SRC="./PrepareEditDoc.js" ></script></head>

<body>
<table WIDTH="100%">
  <tr>
    <td WIDTH="35%" align="center" rowspan="2">
      <table BORDER="1" WIDTH="90%" bordercolor="black" cellspacing="0">
        <tr align="center">
          <td>Відмітка про одержання <br />
(штамп контролюючого  органу)</td>
        </tr>
      </table>
    </td>
    <td WIDTH="30%" rowspan="2" align="center"> <xsl:text disable-output-escaping="yes">&amp;nbsp;</xsl:text>       </td>
    <td WIDTH="25%" align="center"> ЗАТВЕРДЖЕНО</td>
  </tr>
  <tr>
    <td WIDTH="25%">Наказ  Міністерства фінансів  України  <br />    13.01.2015 року № 4    </td>
  </tr>
</table>
<br />
<TABLE width="80%" border="0" cellspacing="4">
  <TR>
    <TD width="40%" align="center" class="td_box">
		<input id="HTIN"><xsl:attribute name="value"><xsl:value-of select="HTIN"/></xsl:attribute></input></TD>
    <TD width="50%"><xsl:text disable-output-escaping="yes">&amp;nbsp;</xsl:text></TD>
    <TD width="10%">Стор.</TD>
    <TD width="10%" class="td_box">
		<input id="HPAGES"><xsl:attribute name="value"><xsl:value-of select="HPAGES"/></xsl:attribute></input></TD>
  </TR>
  <TR>
    <TD width="40%" align="center"><FONT size="-1">(податковий номер юридичної особи (податковий номер  або серія та номер  паспорта*  самозайнятої фізичної особи)) </FONT></TD>
    <TD width="50%"><xsl:text disable-output-escaping="yes">&amp;nbsp;</xsl:text></TD>
    <TD width="5%"><xsl:text disable-output-escaping="yes">&amp;nbsp;</xsl:text></TD>
    <TD><xsl:text disable-output-escaping="yes">&amp;nbsp;</xsl:text></TD>
  </TR>
</TABLE>
<br />
<TABLE width="100%" border="0" cellspacing="4">
  <TR>
		<TD colspan="2" ><xsl:text disable-output-escaping="yes">&amp;nbsp;</xsl:text></TD>
		<TD width="20%" align="right"><b><H3>Форма № 1 ДФ</H3></b></TD>
    <TD width="5%" class="td_box">      <input id="HZ"><xsl:attribute name="value"><xsl:value-of select="HZ"/></xsl:attribute></input></TD>
    <TD width="10%">Звітний</TD>
	</TR>
	<TR>
    <TH width="5%" class="td_box" align="center">  <xsl:text disable-output-escaping="yes">&amp;nbsp;</xsl:text></TH>
		<TD width="30%">юридична особа</TD>
		<TD><xsl:text disable-output-escaping="yes">&amp;nbsp;</xsl:text></TD>
		<TD class="td_box"> 		<input id="HZN"><xsl:attribute name="value"><xsl:value-of select="HZN"/></xsl:attribute></input></TD>
    <TD>Новий звітний</TD>
	</TR>
	<TR>
		<TH width="5%" class="td_box" align="center">X </TH>
		<TD >самозайнята фізична особа </TD>
		<TD><xsl:text disable-output-escaping="yes">&amp;nbsp;</xsl:text></TD>
		<TD class="td_box"> 		<input id="HZU"><xsl:attribute name="value"><xsl:value-of select="HZU"/></xsl:attribute></input></TD>
    <TD>Уточнюючий</TD>
	</TR>
</TABLE>
<br />

<TABLE width="100%">
	<TR>
			<td align="center"><H2>Податковий розрахунок <br />   сум доходу, нарахованого (сплаченого) на користь фізичних осіб, і сум утриманого з них податку   </H2></td>
	</TR>
</TABLE>
<br />
<table width="100%" border="0">
  <tr align="center">
    <td class="td_unln">   		<input id="HNAME" style="width:100%"><xsl:attribute name="value"><xsl:value-of select="HNAME"/></xsl:attribute></input></td>
  </tr>
  <tr align="center">
    <td><font size="-1">(найменування юридичної особи чи прізвище, ім’я та по батькові самозайнятої фізичної особи)</font></td>
  </tr>
  </table>
<br />
<table width="100%" border="0">
  <tr align="center">
    <td class="td_unln">   <input id="HLOC" style="width:100%"><xsl:attribute name="value"><xsl:value-of select="HLOC"/></xsl:attribute></input></td>
  </tr>
  <tr align="center">
    <td><font size="-1">(податкова адреса юридичної особи чи самозайнятої  фізичної особи)</font></td>
  </tr>
		<tr align="center">
			<td class="td_unln"> <input id="HSTI" style="width:100%"><xsl:attribute name="value"><xsl:value-of select="HSTI"/></xsl:attribute></input></td>
		</tr>
		<tr>
			<td align="center" rowspan="3">(найменування контролюючого  органу) </td>
		</tr>
  </table>
<br />
	<table width="100%">
		 <tr align="center">
			<td><table width="50%"><tr>
			<td width="15%" align="right" >Звітний період:</td>
			<td width="15%" class="td_box" >
			<input id="HZKV"><xsl:attribute name="value"><xsl:value-of select="HZKV"/></xsl:attribute></input></td>
			<TD width="5%" align="left"><xsl:text disable-output-escaping="yes">&amp;nbsp;</xsl:text></TD>
			<td width="10%" class="td_box">
			<input id="HZY"><xsl:attribute name="value"><xsl:value-of select="HZY"/></xsl:attribute></input></td>
			 <TD width="5%" align="left"><xsl:text disable-output-escaping="yes">&amp;nbsp;</xsl:text></TD>
		 </tr>
		 <tr  align="center">
			<TD ><xsl:text disable-output-escaping="yes">&amp;nbsp;</xsl:text></TD>
			<td align="center">квартал</td>
			<TD ><xsl:text disable-output-escaping="yes">&amp;nbsp;</xsl:text></TD>
			<td align="center">рік</td>
			<TD ><xsl:text disable-output-escaping="yes">&amp;nbsp;</xsl:text></TD>
			</tr></table></td>
		</tr>
</table>
<table width="100%">
		</table>
<br />
	<table width="100%">
		<tr>
			<td width="30%">Працювало за трудовими договорами (контрактами)</td>
			<td width="15%" class="td_box" align="right">
			<input id="R00G01I" style="width:100%"><xsl:attribute name="value"><xsl:value-of select="R00G01I"/></xsl:attribute></input></td>
			<td width="20%" align="right">ПОРЦІЯ №</td>
			<td class="td_unln"><input id="R00G03I" style="width:100%"><xsl:attribute name="value"><xsl:value-of select="R00G03I"/></xsl:attribute></input></td>
			 		</tr>
		<tr>
			<td width="30%">Працювало за цивільно-правовими договорами</td>
			<td width="15%" class="td_box" align="right">
			<input id="R00G02I" style="width:100%"><xsl:attribute name="value"><xsl:value-of select="R00G02I"/></xsl:attribute></input></td>

		</tr>
	 </table>
<br />
 <table width="100%">
		<tr>
			<td ><b>Розділ І.  Суми доходу, нарахованого (сплаченого) на користь фізичних осіб, і суми утриманого з них податку </b></td>
		</tr>
</table>
<table width="100%" border="1" bordercolor="black" cellspacing="0">
<thead>
  <tr align="center">
    <td rowspan="2" width="3%"> №<br /> з/п</td>
    <td rowspan="2">Податковий  номер або серія та номер паспорта*</td>
    <td rowspan="2">Сума нарахованого доходу <br /> (грн., коп.)</td>
    <td rowspan="2">Сума виплаченого доходу <br />(грн., коп.)</td>
    <td colspan="2">Сума утриманого податку <br />(грн., коп.)</td>
    <td rowspan="2">Ознака <br />доходу</td>
    <td colspan="2">Дата</td>
		<td rowspan="2">Ознака подат. <br />соц. пільги</td>
    <td rowspan="2">Ознака <br />(0,1)</td>
  </tr>
  <tr align="center">
    <td >нарахованого</td>
    <td >перерахованого</td>
    <td >прийняття на роботу </td>
    <td >звільнення з роботи </td>
  </tr>
</thead>
 <tBody id="Process">
  <tr align="center">
    <td><font size ="-1">1</font></td>
    <td><font size ="-1">2</font></td>
    <td><font size ="-1">3a</font></td>
		<td><font size ="-1">3</font></td>
		<td><font size ="-1">4a</font></td>
    <td><font size ="-1">4</font></td>
    <td><font size ="-1">5</font></td>
    <td><font size ="-1">6</font></td>
    <td><font size ="-1">7</font></td>
    <td><font size ="-1">8</font></td>
    <td><font size ="-1">9</font></td>
    </tr>

     <xsl:choose>
	<xsl:when  test="count(//DECLARBODY/*[substring(name(),1,7)='T1RXXXX'])=0">
    <tr align="center" id="StretchTable" rownum="1">
	<td><span id="spRownum">1</span></td>
    <td><input type="textbox" id="T1RXXXXG02" rownum="1"/></td>
    <td><input type="textbox" id="T1RXXXXG03A" rownum="1"/></td>
    <td><input type="textbox" id="T1RXXXXG03" rownum="1"/></td>
    <td><input type="textbox" id="T1RXXXXG04A" rownum="1" canBeX="true"/></td>
    <td><input type="textbox" id="T1RXXXXG04" rownum="1"/></td>
    <td><input type="textbox" id="T1RXXXXG05" rownum="1"/></td>
    <td><input type="textbox" id="T1RXXXXG06D" rownum="1" canBeX="true"/></td>
    <td><input type="textbox" id="T1RXXXXG07D" rownum="1" /></td>
    <td><input type="textbox" id="T1RXXXXG08" rownum="1" canBeX="true"/></td>
    <td><input type="textbox" id="T1RXXXXG09" rownum="1"/></td>
  </tr>
   </xsl:when>
   <xsl:otherwise>
    <xsl:for-each select = "//T1RXXXXG02">
    <xsl:sort select="./@ROWNUM" data-type="number"/>
    <xsl:variable name="rownum"><xsl:value-of select="number(./@ROWNUM)"/></xsl:variable>
    <xsl:call-template name="T1row"><xsl:with-param name="rownum" select="@ROWNUM"/>
    <xsl:with-param name="selElements" select="//*[@ROWNUM=$rownum][substring(name(),1,4)='T1RX']"/>
    </xsl:call-template>
   </xsl:for-each>
   </xsl:otherwise>
   </xsl:choose>

 </tBody>
 <tr align="center">
		<td align="center">Всього </td>
		<td align="center">X</td>
    <td align="right"><input type="textbox" id="R01G03A" style="width:100%"><xsl:attribute name="value"><xsl:value-of select="//R01G03A"/></xsl:attribute></input></td>
    <td align="right">
		<input type="textbox" id="R01G03" style="width:100%"><xsl:attribute name="value"><xsl:value-of select="//R01G03"/></xsl:attribute></input></td>
    <td align="right">
		<input type="textbox" id="R01G04A" style="width:100%"><xsl:attribute name="value"><xsl:value-of select="//R01G04A"/></xsl:attribute></input></td>
    <td align="right">
		<input type="textbox" id="R01G04" style="width:100%"><xsl:attribute name="value"><xsl:value-of select="//R01G04"/></xsl:attribute></input></td>
		<td align="center"> X </td>
		<td align="center"> X </td>
		<td align="center"> X </td>
		<td align="center"> X </td>
		<td align="center"> X </td>
  </tr>
	</table>
<table width="100%" border="0" bordercolor="black" cellspacing="0">
	 <tr >
		<td colspan="11"><b>Розділ ІІ. Оподаткування процентів, виграшів (призів) у лотерею та військовий збір</b></td>
  </tr>
</table>
<table width="100%" border="1" bordercolor="black" cellspacing="0">
	 <tr align="center">
    <td rowspan="2" width="3%"> X </td>
    <td rowspan="2" width="13%"> X </td>
    <td rowspan="2" width="8%">Загальна сума нарахованого доходу   <br /> (грн., коп.)</td>
    <td rowspan="2" width="8%">Загальна сума виплаченого доходу <br />(грн., коп.)</td>
    <td colspan="2">Загальна сума утриманого податку, збору <br />(грн., коп.)</td>
    <td rowspan="2" colspan="5"> X </td>
      </tr>
  <tr align="center">
    <td  width="3%">нарахованого</td>
    <td  width="5%">перерахованого</td>
   </tr>
	 <tr >
		<td align="center">X</td>
		<td align="center">Оподаткування процентів  </td>
    <td align="right"><input type="textbox" id="R0201G03A" style="width:100%"><xsl:attribute name="value"><xsl:value-of select="//R0201G03A"/></xsl:attribute></input></td>
    <td align="center"> X </td>
    <td align="right"><input type="textbox" id="R0201G04A" style="width:100%"><xsl:attribute name="value"><xsl:value-of select="//R0201G04A"/></xsl:attribute></input></td>
    <td align="right"><input type="textbox" id="R0201G04" style="width:100%"><xsl:attribute name="value"><xsl:value-of select="//R0201G04"/></xsl:attribute></input></td>
		<td align="center" width="3%"> X </td>
		<td align="center" width="6%"> X </td>
		<td align="center" width="6%"> X </td>
		<td align="center" width="5%"> X </td>
		<td align="center" width="3%"> X </td>
  </tr>
	 <tr >
		<td align="center">X</td>
		<td align="center">Оподаткування процентів - виключення** </td>
    <td align="right"><input type="textbox" id="R0202G03A" style="width:100%"><xsl:attribute name="value"><xsl:value-of select="//R0202G03A"/></xsl:attribute></input></td>
    <td align="center"> X </td>
    <td align="right"><input type="textbox" id="R0202G04A" style="width:100%"><xsl:attribute name="value"><xsl:value-of select="//R0202G04A"/></xsl:attribute></input></td>
    <td align="right"><input type="textbox" id="R0202G04" style="width:100%"><xsl:attribute name="value"><xsl:value-of select="//R0202G04"/></xsl:attribute></input></td>
		<td align="center"> X </td>
		<td align="center"> X </td>
		<td align="center"> X </td>
		<td align="center"> X </td>
		<td align="center"> X </td>
  </tr>
		<tr >
		<td align="center">X</td>
		<td align="center">Оподаткування виграшів (призів) у лотерею </td>
    <td align="right"><input type="textbox" id="R0203G03A" style="width:100%"><xsl:attribute name="value"><xsl:value-of select="//R0203G03A"/></xsl:attribute></input></td>
    <td align="right"><input type="textbox" id="R0203G03" style="width:100%"><xsl:attribute name="value"><xsl:value-of select="//R0203G03"/></xsl:attribute></input></td>
    <td align="right"><input type="textbox" id="R0203G04A" style="width:100%"><xsl:attribute name="value"><xsl:value-of select="//R0203G04A"/></xsl:attribute></input></td>
    <td align="right"><input type="textbox" id="R0203G04" style="width:100%"><xsl:attribute name="value"><xsl:value-of select="//R0203G04"/></xsl:attribute></input></td>
		<td align="center"> X </td>
		<td align="center"> X </td>
		<td align="center"> X </td>
		<td align="center"> X </td>
		<td align="center"> X </td>
  </tr>
		<tr >
		<td align="center">X</td>
		<td align="center">Оподаткування виграшів (призів) у лотерею - виключення*** </td>
    <td align="right"><input type="textbox" id="R0204G03A" style="width:100%"><xsl:attribute name="value"><xsl:value-of select="//R0204G03A"/></xsl:attribute></input></td>
    <td align="right"><input type="textbox" id="R0204G03" style="width:100%"><xsl:attribute name="value"><xsl:value-of select="//R0204G03"/></xsl:attribute></input></td>
    <td align="right"><input type="textbox" id="R0204G04A" style="width:100%"><xsl:attribute name="value"><xsl:value-of select="//R0204G04A"/></xsl:attribute></input></td>
    <td align="right"><input type="textbox" id="R0204G04" style="width:100%"><xsl:attribute name="value"><xsl:value-of select="//R0204G04"/></xsl:attribute></input></td>
		<td align="center"> X </td>
		<td align="center"> X </td>
		<td align="center"> X </td>
		<td align="center"> X </td>
		<td align="center"> X </td>
  </tr>
		<tr>
		<td align="center">X</td>
		<td align="center">Військовий збір</td>
    <td align="right"><input type="textbox" id="R0205G03A" style="width:100%"><xsl:attribute name="value"><xsl:value-of select="//R0205G03A"/></xsl:attribute></input></td>
    <td align="right"><input type="textbox" id="R0205G03" style="width:100%"><xsl:attribute name="value"><xsl:value-of select="//R0205G03"/></xsl:attribute></input></td>
    <td align="right"><input type="textbox" id="R0205G04A" style="width:100%"><xsl:attribute name="value"><xsl:value-of select="//R0205G04A"/></xsl:attribute></input></td>
    <td align="right"><input type="textbox" id="R0205G04" style="width:100%"><xsl:attribute name="value"><xsl:value-of select="//R0205G04"/></xsl:attribute></input></td>
		<td align="center"> X </td>
		<td align="center"> X </td>
		<td align="center"> X </td>
		<td align="center"> X </td>
		<td align="center"> X </td>
  </tr>
		<tr >
		<td align="center">X</td>
		<td align="center">Військовий збір - виключення****</td>
    <td align="right"><input type="textbox" id="R0206G03A" style="width:100%"><xsl:attribute name="value"><xsl:value-of select="//R0206G03A"/></xsl:attribute></input></td>
    <td align="right"><input type="textbox" id="R0206G03" style="width:100%"><xsl:attribute name="value"><xsl:value-of select="//R0206G03"/></xsl:attribute></input></td>
    <td align="right"><input type="textbox" id="R0206G04A" style="width:100%"><xsl:attribute name="value"><xsl:value-of select="//R0206G04A"/></xsl:attribute></input></td>
    <td align="right"><input type="textbox" id="R0206G04" style="width:100%"><xsl:attribute name="value"><xsl:value-of select="//R0206G04"/></xsl:attribute></input></td>
		<td align="center"> X </td>
		<td align="center"> X </td>
		<td align="center"> X </td>
		<td align="center"> X </td>
		<td align="center"> X </td>
  </tr>
   </table>
	 <br />
  <table width="70%" border="0" cellspacing="4">
    <tr>
			<td width="20%">Кількість рядків <br /> (Розділ І)</td>
      <td width="15%" class="td_box">
 			<input id="R02G01I"><xsl:attribute name="value"><xsl:value-of select="R02G01I"/></xsl:attribute></input></td>
			<td width="25%">Кількість фізичних осіб <br /> (Розділ І)</td>
      <td width="15%" class="td_box">
			<input id="R02G02I"><xsl:attribute name="value"><xsl:value-of select="R02G02I"/></xsl:attribute></input></td>
			<td width="20%">Кількість сторінок</td>
      <td width="15%" class="td_box">
			<input id="R02G03I"><xsl:attribute name="value"><xsl:value-of select="R02G03I"/></xsl:attribute></input></td>
    </tr>
 </table><br />
 <table width="70%">
    <tr>
      <td>Дата подання </td>
      <td class="td_box">
			<input id="HFILL"><xsl:attribute name="value"><xsl:value-of select="HFILL"/></xsl:attribute></input></td>
      <td width="5%"><xsl:text disable-output-escaping="yes">&amp;nbsp;</xsl:text></td>
      <td colspan="3">Наведена інформація є правильною.</td>
		</tr>
  </table>
<br />
<table width="100%" border="0" cellspacing="4">
   <tr>
    <td  >Керівник юридичної особи</td>
		<td  class="td_unln"><xsl:text disable-output-escaping="yes">&amp;nbsp;</xsl:text> </td>
    <td class="td_unln" ><xsl:text disable-output-escaping="yes">&amp;nbsp;</xsl:text> </td>
    <td class="td_box"><xsl:text disable-output-escaping="yes">&amp;nbsp;</xsl:text>  </td>
    <td class="td_box"><xsl:text disable-output-escaping="yes">&amp;nbsp;</xsl:text>  </td>
  </tr>
	 <tr align="center">
		<td  ><xsl:text disable-output-escaping="yes">&amp;nbsp;</xsl:text> </td>
		<td ><font size="-1">(податковий номер або серія  та номер паспорта* самозайнятої фізичної особи)</font></td>
    <td ><font size="-1">(підпис)</font></td>
    <td ><font size="-1">(ініціали, прізвище)</font></td>
    <td ><font size="-1">(тел.)</font></td>
  </tr>
	<tr>
    <td  >Головний бухгалтер</td>
    <td class="td_box">
		<input id="HKBUH" style="width:100%"><xsl:attribute name="value"><xsl:value-of select="HKBUH"/></xsl:attribute></input> </td>
    <td class="td_unln" ><xsl:text disable-output-escaping="yes">&amp;nbsp;</xsl:text> </td>
    <td class="td_box">
	 	<input id="HBUH" style="width:100%"><xsl:attribute name="value"><xsl:value-of select="HBUH"/></xsl:attribute></input> </td>
    <td class="td_box">
		<input id="HTELBUH"><xsl:attribute name="value"><xsl:value-of select="HTELBUH"/></xsl:attribute></input> </td>
  </tr>
	 <tr align="center">
		<td  ><xsl:text disable-output-escaping="yes">&amp;nbsp;</xsl:text> </td>
    <td ><font size="-1">(податковий номер або серія  та номер паспорта* головного бухгалтера)</font></td>
    <td ><font size="-1">(підпис)</font></td>
    <td ><font size="-1">(ініціали, прізвище)</font></td>
    <td ><font size="-1">(тел.)</font></td>
  </tr>
	 <tr>
    <td width="20%" >Самозайнята фізична особа </td>
    <td width="25%" class="td_box">   		<input id="HKBOS" style="width:100%" ><xsl:attribute name="value"><xsl:value-of select="HKBOS"/></xsl:attribute></input> </td>
    <td width="10%" class="td_unln" ><xsl:text disable-output-escaping="yes">&amp;nbsp;</xsl:text> </td>
    <td width="20%" class="td_box"> 		<input id="HBOS" style="width:100%"><xsl:attribute name="value"><xsl:value-of select="HBOS"/></xsl:attribute></input> </td>
    <td width="10%" class="td_box"> 		<input id="HTELBOS"><xsl:attribute name="value"><xsl:value-of select="HTELBOS"/></xsl:attribute></input> </td>
  </tr>
	 <tr align="center">
		<td  ><xsl:text disable-output-escaping="yes">&amp;nbsp;</xsl:text> </td>
    <td ><font size="-1">(податковий  номер або серія  та номер паспорта* керівника юридичної особи)</font></td>
    <td ><font size="-1">(підпис)</font></td>
    <td ><font size="-1">(ініціали, прізвище)</font></td>
    <td ><font size="-1">(тел.)</font></td>
  </tr>
	 </table>
<br />
<table width="25%"><tr><td rowspan="2" class="td_box" align="center"><H2>М. П. (за наявності)</H2></td></tr>
			<tr><td><xsl:text disable-output-escaping="yes">&amp;nbsp;</xsl:text></td></tr>
		</table>
 <br />
 <table width="100%">
<tr><td >* Для фізичної особи, яка має відмітку в паспорті про право здійснювати будь-які платежі за серією та номером паспорта.</td></tr>
<tr><td >** Виключення інформації щодо оподаткування процентів при проведенні коригувань.</td></tr>
<tr><td >*** Виключення інформації щодо оподаткування виграшів (призів) у лотерею при проведенні коригувань.</td></tr>
<tr><td >**** Виключення інформації щодо військового збору при проведенні коригувань.</td></tr>		</table>

 </body></html>
</xsl:template>

<xsl:template name="T1row">
<xsl:param name="selElements"/>
<xsl:param name="rownum"/>
 <tr align="center" id="StretchTable">
    <xsl:attribute name="rownum"><xsl:value-of select="$rownum"/></xsl:attribute>
	<td><span id="spRownum"><xsl:value-of select="$rownum"/></span></td>
    <td><input type="textbox" id="T1RXXXXG02">
          <xsl:attribute name="value"><xsl:value-of select="$selElements[name()='T1RXXXXG02']"/></xsl:attribute>
    </input></td>
    <td><input type="textbox" id="T1RXXXXG03A">
      <xsl:attribute name="value"><xsl:value-of select="$selElements[name()='T1RXXXXG03A' ]"/></xsl:attribute>
    </input></td>
        <td><input type="textbox" id="T1RXXXXG03">
                <xsl:attribute name="value"><xsl:value-of select="$selElements[name()='T1RXXXXG03' ]"/></xsl:attribute>
    </input></td>
    <td><input type="textbox" id="T1RXXXXG04A" canBeX="true">
           <xsl:attribute name="value"><xsl:value-of select="$selElements[name()='T1RXXXXG04A' ]"/></xsl:attribute>
          </input></td>
    <td><input type="textbox" id="T1RXXXXG04">
           <xsl:attribute name="value"><xsl:value-of select="$selElements[name()='T1RXXXXG04' ]"/></xsl:attribute>
           </input></td>
    <td><input type="textbox" id="T1RXXXXG05">
           <xsl:attribute name="value"><xsl:value-of select="$selElements[name()='T1RXXXXG05' ]"/></xsl:attribute>
    </input></td>
    <td><input type="textbox" id="T1RXXXXG06D" canBeX="true">
       <xsl:attribute name="value"><xsl:value-of select="$selElements[name()='T1RXXXXG06D' ]"/></xsl:attribute>
    </input></td>
    <td><input type="textbox" id="T1RXXXXG07D">
       <xsl:attribute name="value"><xsl:value-of select="$selElements[name()='T1RXXXXG07D' ]"/></xsl:attribute>
    </input></td>
    <td><input type="textbox" id="T1RXXXXG08" canBeX="true">
       <xsl:attribute name="value"><xsl:value-of select="$selElements[name()='T1RXXXXG08' ]"/></xsl:attribute>
    </input></td>
    <td><input type="textbox" id="T1RXXXXG09">
    <xsl:attribute name="value"><xsl:value-of select="$selElements[name()='T1RXXXXG09' ]"/></xsl:attribute>
    </input></td>
  </tr>
</xsl:template>

</xsl:stylesheet>
