<?xml version="1.0" encoding="windows-1251"?>
<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
<xsl:output method="html" encoding="windows-1251"/>

<xsl:variable name="T1" select="//*[substring(name(),1,2)='T1']" />
<xsl:key name="grT1" match="//*[substring(name(),1,2)='T1']" use="@ROWNUM"/>

<xsl:variable name="T2" select="//*[substring(name(),1,2)='T2']" />
<xsl:key name="grT2" match="//*[substring(name(),1,2)='T2']" use="@ROWNUM"/>

<xsl:template match="DECLAR">

<html><head>
<title>F0103304 - "ПОДАТКОВА ДЕКЛАРАЦІЯ ПЛАТНИКА ЄДИНОГО ПОДАТКУ - ФІЗИЧНОЇ ОСОБИ - ПІДПРИЄМЦЯ"</title>
<link HREF="./css/xsl_edit_styles.css" REL="stylesheet"></link>
<script SRC="./PrepareEditDoc.js" ></script></head><body>

<table BORDER="0" width="100%" class="td_box">
	<tr >
	  <td>  <font color="red"> *  <b> Поля обов'язкові для заповнення. </b></font ></td>
	</tr>
      </table>

<table width="100%" border="0" cellspacing="0">
  <tr>
    <td width="30%" valign="bottom">
      <table BORDER="0" width="100%" class="td_box">
	<tr align="center">
	  <td>  <xsl:text disable-output-escaping="yes">&amp;nbsp;</xsl:text> </td>
	</tr>
      </table>
    </td>
    <td><xsl:text disable-output-escaping="yes">&amp;nbsp;</xsl:text></td>
    <td width="45%">ЗАТВЕРДЖЕНО <br />
Наказ Міністерства фінансів України  <br />
21.12.2011 № 1688  <br />
(у редакції наказу Міністерства фінансів України   від 07.11.2012 № 1159) </td>
  </tr>
</table>
<br />
<table width="100%" border="1" cellpadding="0" cellspacing="0">
 	<tr>
	  <td  align="center" >
	    <h2>ПОДАТКОВА ДЕКЛАРАЦІЯ ПЛАТНИКА ЄДИНОГО ПОДАТКУ -  ФІЗИЧНОЇ ОСОБИ - ПІДПРИЄМЦЯ</h2> <br />
			І. ЗАГАЛЬНІ ВІДОМОСТІ
	  </td>
		 	</tr>
 </table>

 <table width="100%" border="0" cellpadding="0" cellspacing="0">
	<tr>
		<th rowspan="2" width="30" align="center" class="td_box"><b> 1</b><font color="red"> *  </font> </th>
	  <td colspan="8"  > 	    Тип податкової декларації	  </td>
 	</tr>
	<tr>
		<td width="60" class="td_box"><xsl:call-template name="body_id"><xsl:with-param name="id" select="'HZ'"/></xsl:call-template></td>
		<td>звітна</td>

		<td class="td_box"><xsl:call-template name="body_id"><xsl:with-param name="id" select="'HZN'"/></xsl:call-template></td>
		<td>звітна нова </td>

	  <td class="td_box"><xsl:call-template name="body_id"><xsl:with-param name="id" select="'HZU'"/></xsl:call-template></td>
		<td>уточнююча </td>

		<td class="td_box"><xsl:call-template name="body_id"><xsl:with-param name="id" select="'HD'"/></xsl:call-template></td>
		<td>довідково* </td>
		 </tr>
   </table>


 <table width="100%" border="0" cellpadding="0" cellspacing="0">
	 <tr>
		<th rowspan="2" width="2%" align="center" class="td_box"><b>2</b> <font color="red"> *  </font></th>
	  <td colspan="5"  > 	    Звітний (податковий) період, за який подається або уточнюється податкова декларація: </td>
		<td width="5%" class="td_box"><xsl:call-template name="body_id"><xsl:with-param name="id" select="'HZY'"/></xsl:call-template></td>
		<td width="5%"  >(рік)</td>
 	</tr>
 <tr>
    <td width="10%" align="right">І квартал</td>
		<td width="3%" class="td_box"><xsl:call-template name="body_id"><xsl:with-param name="id" select="'H1KV'"/></xsl:call-template></td>

    <td width="10%" align="right">півріччя </td>
		<td width="3%" class="td_box"><xsl:call-template name="body_id"><xsl:with-param name="id" select="'HHY'"/></xsl:call-template></td>

    <td width="10%" align="right">три квартали</td>
		<td width="3%" class="td_box"><xsl:call-template name="body_id"><xsl:with-param name="id" select="'H3KV'"/></xsl:call-template></td>

    <td width="5%" align="right">рік</td>
		<td width="3%" class="td_box"><xsl:call-template name="body_id"><xsl:with-param name="id" select="'HY'"/></xsl:call-template></td>

    <td width="10%" align="right">місяць*</td>
		<td width="3%" class="td_box"><xsl:call-template name="body_id"><xsl:with-param name="id" select="'HMONTH'"/></xsl:call-template></td>

	 </tr>
	    </table>

	<table width="100%" border="1" cellpadding="0" cellspacing="0">
		<tr>
    <th align="center" width="2%" valign="middle" class="td_box" rowspan="4" >     <b>3</b><font color="red"> *  </font>     </th>
    <td colspan="2"> Прізвище, ім'я, по батькові платника податку:	 </td>	</tr>
		<tr>
   <td colspan="2">
		<xsl:element name="input">
<xsl:attribute name="style">width:100%;</xsl:attribute>
<xsl:attribute name="value"><xsl:value-of select="//DECLARBODY/*[name()='HNAME']" /></xsl:attribute>
<xsl:attribute name="id">HNAME</xsl:attribute>
</xsl:element>
</td>
	</tr>
		<tr>
       <td width="70%">  Реєстраційний номер облікової картки платника податків - фізичної особи - підприємця: </td>
			 <td width="10%" ><xsl:call-template name="body_id"><xsl:with-param name="id" select="'HTIN'"/></xsl:call-template></td>
		</tr>
		<tr>
       <td colspan="2"> або серія та номер паспорта (для фізичних осіб, які через релігійні переконання відмовляються від прийняття реєстраційного номера
облікової картки платника податків та повідомили про це відповідний орган державної податкової служби і мають відмітку у паспорті)</td>
		</tr>
      </table>

		<table width="100%" border="1" cellpadding="0" cellspacing="0">
		<tr>
    <th align="center" width="2%" valign="middle" class="td_box" rowspan="4">     <b>4</b>     </th>
    <td colspan="3"> Податкова адреса (місце проживання) платника податку <font color="red"> *  </font></td>
		<td width="15%">  поштовий індекс</td>
		<td width="10%" ><xsl:call-template name="body_id"><xsl:with-param name="id" select="'HZIP'"/></xsl:call-template></td>
</tr>
		<tr>
		<td width="10%"> (область, місто):   </td>
		<td width="15%" >
		<xsl:element name="input">
<xsl:attribute name="style">width:100%;</xsl:attribute>
<xsl:attribute name="value"><xsl:value-of select="//DECLARBODY/*[name()='HREG']" /></xsl:attribute>
<xsl:attribute name="id">HREG</xsl:attribute>
</xsl:element>
   </td>
		<td width="15%" >
		<xsl:element name="input">
<xsl:attribute name="style">width:90%;</xsl:attribute>
<xsl:attribute name="value"><xsl:value-of select="//DECLARBODY/*[name()='HCITY']" /></xsl:attribute>
<xsl:attribute name="id">HCITY</xsl:attribute>
</xsl:element>  <font color="red"> *  </font>
   </td>
		<td  >  міжміський код</td>
		<td width="10%" ><xsl:call-template name="body_id"><xsl:with-param name="id" select="'HINTURB'"/></xsl:call-template></td>
	</tr>
		<tr>
		<td width="15%">  Адреса: <font color="red"> *  </font>   </td>
		<td colspan="2" >
		<xsl:element name="input">
<xsl:attribute name="style">width:100%;</xsl:attribute>
<xsl:attribute name="value"><xsl:value-of select="//DECLARBODY/*[name()='HLOC']" /></xsl:attribute>
<xsl:attribute name="id">HLOC</xsl:attribute>
</xsl:element></td>
		<td  >  телефон</td>
		<td width="10%" ><xsl:call-template name="body_id"><xsl:with-param name="id" select="'HTEL'"/></xsl:call-template></td>
		</tr>
		<tr>
		<td width="15%"> Електронна адреса<sup>1</sup>:    </td>
		<td colspan="2" >
		<xsl:element name="input">
<xsl:attribute name="style">width:100%;</xsl:attribute>
<xsl:attribute name="value"><xsl:value-of select="//DECLARBODY/*[name()='HEMAIL']" /></xsl:attribute>
<xsl:attribute name="id">HEMAIL</xsl:attribute>
</xsl:element></td>
		<td  >  факс<sup>1</sup>:</td>
		<td width="10%" ><xsl:call-template name="body_id"><xsl:with-param name="id" select="'HFAX'"/></xsl:call-template></td>
		</tr>
      </table>

		 <table width="100%" border="1" cellpadding="0" cellspacing="0">
<tr>
		<th align="center" valign="middle" class="td_box" rowspan="2" width="3%">     <b>5</b> <font color="red"> *  </font>    </th>
    <td  > найменування органу державної податкової служби, до якого подається податкова декларація:	</td>
	</tr>
 <tr>
		<td class="td_unln">
<xsl:element name="input">
<xsl:attribute name="style">width:100%;</xsl:attribute>
<xsl:attribute name="value"><xsl:value-of select="//DECLARBODY/*[name()='HSTI']" /></xsl:attribute>
<xsl:attribute name="id">HSTI</xsl:attribute>
</xsl:element></td>
	</tr>
	      </table>

		<table width="100%" border="0" cellpadding="0" cellspacing="0">
<tr>
		<th align="center" valign="middle" class="td_box" width="3%" rowspan="2">     <b>6</b> <font color="red"> *  </font>    </th>
    <td width="97%"> Види підприємницької діяльності, які здійснювалися у звітному періоді:  </td>
	</tr>
</table>
 <table width="100%" border="1" cellpadding="0" cellspacing="0">
 <TBODY id="Process">

<tr>
		<td width="20%" >номер згідно з КВЕД<font color="red"> *  </font></td>
		<td  > назва згідно з КВЕД<font color="red"> *  </font></td>
 </tr>

	 <!--Output Table-->
    <xsl:choose>
		<xsl:when  test="count($T1)=0">
			<xsl:call-template name="t1_row">
				<xsl:with-param name="rownum" select="1"/>
				<xsl:with-param name="row" select="//DECLARHEAD/C_DOC"/>
			</xsl:call-template>
	   </xsl:when>
		<xsl:otherwise>
		   <xsl:for-each select = "$T1[generate-id(.)=generate-id(key('grT1', @ROWNUM))]">
				<xsl:variable name="rownum" select="number(./@ROWNUM)"/>
				<xsl:call-template name="t1_row">
					<xsl:with-param name="rownum" select="@ROWNUM"/>
					<xsl:with-param name="row" select="key('grT1', $rownum)"/>
				</xsl:call-template>
		   </xsl:for-each>
		</xsl:otherwise>
	</xsl:choose>

</TBODY>
 	      </table>

<table width="100%" border="1" cellpadding="0" cellspacing="0">
<tr>
		<th align="center" valign="middle" class="td_box" rowspan="2" width="3%">     <b>7</b>  <font color="red"> *  </font>   </th>
    <td  width="70%"> Фактична чисельність працівників у  звітному  періоді:  </td>
		<td width="10%" ><xsl:call-template name="body_id"><xsl:with-param name="id" select="'HNACTL'"/></xsl:call-template></td>
	</tr>
  </table>

 <table border="0" width="100%" cellspacing="0" bordercolor="#000000">
  <tr  >
    <td>*  Подається з метою отримання  довідки про доходи за  інший період, ніж  квартальний (річний) податковий (звітний) період, наростаючим підсумком.</td>
  </tr>
	 <tr  >
    <td><sup>1</sup>  За бажанням платника податку.</td>
  </tr>
 </table>
  <br />

	 <table border="0"  width="100%" cellspacing="0" bordercolor="#000000">
  <tr  >
    <td align="center"><b>ІІ. ПОКАЗНИКИ ГОСПОДАРСЬКОЇ ДІЯЛЬНОСТІ ДЛЯ ПЛАТНИКІВ ЄДИНОГО ПОДАТКУ І ГРУПИ</b></td>
  </tr>
	 <tr  >
    <td>Щомісячні авансові внески, грн.</td>
  </tr>
 </table>

<table border="1" width="100%" cellspacing="0" bordercolor="#000000">
  <tr align="center">
    <td width="10%">№ з/п</td>
    <td width="15%">І  квартал</td>
    <td width="15%">ІI  квартал </td>
		<td width="15%">ІII  квартал</td>
    <td width="15%">IV  квартал </td>
  </tr>
  <tr align="center">
    <td>1</td>
    <td>2</td>
    <td>3</td>
		<td>4</td>
    <td>5</td>
  </tr>
  <tr>
    <td>1-й місяць кварталу</td>
    <td align="right"><xsl:call-template name="body_id"><xsl:with-param name="id" select="'R0201G2'"/></xsl:call-template></td>
		<td align="right"><xsl:call-template name="body_id"><xsl:with-param name="id" select="'R0201G3'"/></xsl:call-template></td>
		<td align="right"><xsl:call-template name="body_id"><xsl:with-param name="id" select="'R0201G4'"/></xsl:call-template></td>
		<td align="right"><xsl:call-template name="body_id"><xsl:with-param name="id" select="'R0201G5'"/></xsl:call-template></td>
  </tr>
	<tr>
    <td>2-й місяць кварталу</td>
    <td align="right"><xsl:call-template name="body_id"><xsl:with-param name="id" select="'R0202G2'"/></xsl:call-template></td>
		<td align="right"><xsl:call-template name="body_id"><xsl:with-param name="id" select="'R0202G3'"/></xsl:call-template></td>
		<td align="right"><xsl:call-template name="body_id"><xsl:with-param name="id" select="'R0202G4'"/></xsl:call-template></td>
		<td align="right"><xsl:call-template name="body_id"><xsl:with-param name="id" select="'R0202G5'"/></xsl:call-template></td>
  </tr>
	<tr>
    <td>3-й місяць кварталу</td>
    <td align="right"><xsl:call-template name="body_id"><xsl:with-param name="id" select="'R0203G2'"/></xsl:call-template></td>
		<td align="right"><xsl:call-template name="body_id"><xsl:with-param name="id" select="'R0203G3'"/></xsl:call-template></td>
		<td align="right"><xsl:call-template name="body_id"><xsl:with-param name="id" select="'R0203G4'"/></xsl:call-template></td>
		<td align="right"><xsl:call-template name="body_id"><xsl:with-param name="id" select="'R0203G5'"/></xsl:call-template></td>
  </tr>
</table>

 <table border="1" width="100%" cellspacing="0" bordercolor="#000000">
  <tr align="center">
    <td width="60%">Назва показника</td>
    <td width="5%">Код рядка</td>
    <td width="10%">Обсяг (грн.)* </td>
  </tr>
  <tr align="center">
    <td>1</td>
    <td>2</td>
    <td>3</td>
  </tr>
  <tr>
    <td>Сума доходу за звітний (податковий) період відповідно до статті 292 глави 1 розділу XIV Податкового кодексу України
(згідно з підпунктом 1 пункту 291.4 статті 291 глави 1 розділу XIV Податкового кодексу України)</td>
    <td align="center">01</td>
    <td align="right"><xsl:call-template name="body_id"><xsl:with-param name="id" select="'R001G3'"/></xsl:call-template></td>
  </tr>
  <tr>
    <td>Сума доходу, що перевищує обсяги, встановлені підпунктом 1 пункту 291.4 статті 291 глави 1 розділу XIV Податкового кодексу України,
 у звітному (податковому) періоді</td>
    <td align="center">02  </td>
    <td align="right"><xsl:call-template name="body_id"><xsl:with-param name="id" select="'R002G3'"/></xsl:call-template></td>
  </tr>
  <tr>
    <td>Сума доходу, отриманого від провадження діяльності, не зазначеної у свідоцтві платника єдиного податку, у звітному (податковому) періоді</td>
    <td align="center">03 </td>
    <td align="right"><xsl:call-template name="body_id"><xsl:with-param name="id" select="'R003G3'"/></xsl:call-template></td>
  </tr>

	 <tr>
    <td>Сума доходу, отриманого при застосуванні іншого способу розрахунків, ніж передбачено пунктом 291.6 статті 291 глави 1 розділу XIV Податкового кодексу України,
у звітному (податковому) періоді</td>
    <td align="center">04</td>
    <td align="right"><xsl:call-template name="body_id"><xsl:with-param name="id" select="'R004G3'"/></xsl:call-template></td>
  </tr>
  <tr>
    <td>Сума доходу, отриманого від здійснення видів діяльності, які не дають права на застосування спрощеної системи оподаткування, у звітному (податковому) періоді</td>
    <td align="center">05 </td>
    <td align="right"><xsl:call-template name="body_id"><xsl:with-param name="id" select="'R005G3'"/></xsl:call-template></td>
  </tr>
	</table>

		 <table border="0"  width="100%" cellspacing="0" bordercolor="#000000">
	 <tr  >
    <td>* Заповнюється наростаючим підсумком з початку року.</td>
  </tr>
 </table>
	<br />

	 <table border="0"  width="100%" cellspacing="0" bordercolor="#000000">
  <tr  >
    <td align="center"><b>ІІІ. ПОКАЗНИКИ ГОСПОДАРСЬКОЇ ДІЯЛЬНОСТІ ДЛЯ ПЛАТНИКІВ ЄДИНОГО ПОДАТКУ ІІ ГРУПИ</b></td>
  </tr>
	 <tr  >
    <td>Щомісячні авансові внески, грн.</td>
  </tr>
 </table>

<table border="1" width="100%" cellspacing="0" bordercolor="#000000">
  <tr align="center">
    <td width="10%">№ з/п</td>
    <td width="15%">І  квартал</td>
    <td width="15%">ІI  квартал </td>
		<td width="15%">ІII  квартал</td>
    <td width="15%">IV  квартал </td>
  </tr>
  <tr align="center">
    <td>1</td>
    <td>2</td>
    <td>3</td>
		<td>4</td>
    <td>5</td>
  </tr>
  <tr>
    <td>1-й місяць кварталу</td>
    <td align="right"><xsl:call-template name="body_id"><xsl:with-param name="id" select="'R0301G2'"/></xsl:call-template></td>
		<td align="right"><xsl:call-template name="body_id"><xsl:with-param name="id" select="'R0301G3'"/></xsl:call-template></td>
		<td align="right"><xsl:call-template name="body_id"><xsl:with-param name="id" select="'R0301G4'"/></xsl:call-template></td>
		<td align="right"><xsl:call-template name="body_id"><xsl:with-param name="id" select="'R0301G5'"/></xsl:call-template></td>
  </tr>
	<tr>
    <td>2-й місяць кварталу</td>
    <td align="right"><xsl:call-template name="body_id"><xsl:with-param name="id" select="'R0302G2'"/></xsl:call-template></td>
		<td align="right"><xsl:call-template name="body_id"><xsl:with-param name="id" select="'R0302G3'"/></xsl:call-template></td>
		<td align="right"><xsl:call-template name="body_id"><xsl:with-param name="id" select="'R0302G4'"/></xsl:call-template></td>
		<td align="right"><xsl:call-template name="body_id"><xsl:with-param name="id" select="'R0302G5'"/></xsl:call-template></td>
  </tr>
	<tr>
    <td>3-й місяць кварталу</td>
    <td align="right"><xsl:call-template name="body_id"><xsl:with-param name="id" select="'R0303G2'"/></xsl:call-template></td>
		<td align="right"><xsl:call-template name="body_id"><xsl:with-param name="id" select="'R0303G3'"/></xsl:call-template></td>
		<td align="right"><xsl:call-template name="body_id"><xsl:with-param name="id" select="'R0303G4'"/></xsl:call-template></td>
		<td align="right"><xsl:call-template name="body_id"><xsl:with-param name="id" select="'R0303G5'"/></xsl:call-template></td>
  </tr>
</table>

 <table border="1" width="100%" cellspacing="0" bordercolor="#000000">
  <tr align="center">
    <td width="60%">Назва показника</td>
    <td width="5%">Код рядка</td>
    <td width="10%">Обсяг (грн.)* </td>
  </tr>
  <tr align="center">
    <td>1</td>
    <td>2</td>
    <td>3</td>
  </tr>
  <tr>
    <td>Сума доходу за звітний (податковий) період відповідно до статті 292 глави 1 розділу XIV Податкового кодексу України (згідно з підпунктом 2 пункту 291.4
статті 291 глави 1 розділу XIV Податкового кодексу України)</td>
    <td align="center">06</td>
    <td align="right"><xsl:call-template name="body_id"><xsl:with-param name="id" select="'R006G3'"/></xsl:call-template></td>
  </tr>
  <tr>
    <td>Сума доходу, що перевищує обсяги, встановлені підпунктом 2 пункту 291.4 статті 291 глави 1 розділу XIV Податкового кодексу України,
 у звітному (податковому) періоді</td>
    <td align="center">07  </td>
    <td align="right"><xsl:call-template name="body_id"><xsl:with-param name="id" select="'R007G3'"/></xsl:call-template></td>
  </tr>
  <tr>
    <td>Сума доходу, отриманого від провадження діяльності, не зазначеної у свідоцтві платника єдиного податку, у звітному (податковому) періоді</td>
    <td align="center">08 </td>
    <td align="right"><xsl:call-template name="body_id"><xsl:with-param name="id" select="'R008G3'"/></xsl:call-template></td>
  </tr>

	 <tr>
    <td>Сума доходу, отриманого при застосуванні іншого способу розрахунків, ніж передбачено пунктом 291.6 статті 291 глави 1 розділу XIV Податкового кодексу України,
у звітному (податковому) періоді</td>
    <td align="center">09</td>
    <td align="right"><xsl:call-template name="body_id"><xsl:with-param name="id" select="'R009G3'"/></xsl:call-template></td>
  </tr>
  <tr>
    <td>Сума доходу, отриманого від здійснення видів діяльності, які не дають права на застосування спрощеної системи оподаткування, у звітному (податковому) періоді</td>
    <td align="center">10 </td>
    <td align="right"><xsl:call-template name="body_id"><xsl:with-param name="id" select="'R010G3'"/></xsl:call-template></td>
  </tr>
	</table>

		 <table border="0"  width="100%" cellspacing="0" bordercolor="#000000">
	 <tr  >
    <td>* Заповнюється наростаючим підсумком з початку року.</td>
  </tr>
 </table>
				 <br />
		  <table border="0"  width="100%" cellspacing="0" bordercolor="#000000">
  <tr  >
    <td align="center"><b>ІV.  ПОКАЗНИКИ ГОСПОДАРСЬКОЇ ДІЯЛЬНОСТІ ДЛЯ ПЛАТНИКІВ ЄДИНОГО ПОДАТКУ ІІІ  ГРУПИ </b></td>
  </tr>
 </table>

 <table border="1" width="100%" cellspacing="0" bordercolor="#000000">
  <tr align="center">
    <td width="60%">Назва показника</td>
    <td width="5%">Код рядка</td>
    <td width="10%">Обсяг (грн.)* </td>
  </tr>
  <tr align="center">
    <td>1</td>
    <td>2</td>
    <td>3</td>
  </tr>
  <tr>
    <td>Сума доходу за звітний (податковий) період, що оподатковується за ставкою 3 %</td>
    <td align="center">11</td>
    <td align="right"><xsl:call-template name="body_id"><xsl:with-param name="id" select="'R011G3'"/></xsl:call-template></td>
  </tr>
  <tr>
    <td>Сума доходу за звітний (податковий) період, що оподатковується за ставкою 5 %</td>
    <td align="center">12  </td>
    <td align="right"><xsl:call-template name="body_id"><xsl:with-param name="id" select="'R012G3'"/></xsl:call-template></td>
  </tr>
  <tr>
    <td>Сума доходу, що перевищує обсяги, встановлені підпунктом 3 пункту 291.4 статті 291 глави 1 розділу XIV Податкового кодексу України, у звітному (податковому) періоді</td>
    <td align="center">13 </td>
    <td align="right"><xsl:call-template name="body_id"><xsl:with-param name="id" select="'R013G3'"/></xsl:call-template></td>
  </tr>

	 <tr>
    <td>Сума доходу, отриманого при застосуванні іншого способу розрахунків, ніж передбачено пунктом 291.6 статті 291 глави 1 розділу XIV Податкового кодексу України,
у звітному (податковому) періоді</td>
    <td align="center">14</td>
    <td align="right"><xsl:call-template name="body_id"><xsl:with-param name="id" select="'R014G3'"/></xsl:call-template></td>
  </tr>
  <tr>
    <td>Сума доходу, отриманого від здійснення видів діяльності, які не дають права на застосування спрощеної системи оподаткування, у звітному (податковому) періоді </td>
    <td align="center">15 </td>
    <td align="right"><xsl:call-template name="body_id"><xsl:with-param name="id" select="'R015G3'"/></xsl:call-template></td>
  </tr>
	</table>
				 <br />

 <table border="0"  width="100%" cellspacing="0" bordercolor="#000000">
  <tr  >
    <td align="center"><b>V.  ПОКАЗНИКИ ГОСПОДАРСЬКОЇ ДІЯЛЬНОСТІ ДЛЯ ПЛАТНИКІВ ЄДИНОГО ПОДАТКУ V  ГРУПИ  </b></td>
  </tr>
 </table>

 <table border="1" width="100%" cellspacing="0" bordercolor="#000000">
  <tr align="center">
    <td width="60%">Назва показника</td>
    <td width="5%">Код рядка</td>
    <td width="10%">Обсяг (грн.)* </td>
  </tr>
  <tr align="center">
    <td>1</td>
    <td>2</td>
    <td>3</td>
  </tr>
  <tr>
    <td>Сума доходу за звітний (податковий) період, що оподатковується за ставкою 7 %</td>
    <td align="center">16</td>
    <td align="right"><xsl:call-template name="body_id"><xsl:with-param name="id" select="'R016G3'"/></xsl:call-template></td>
  </tr>
  <tr>
    <td>Сума доходу за звітний (податковий) період, що оподатковується за ставкою 10 %</td>
    <td align="center">17  </td>
    <td align="right"><xsl:call-template name="body_id"><xsl:with-param name="id" select="'R017G3'"/></xsl:call-template></td>
  </tr>
  <tr>
    <td>Сума доходу, що перевищує обсяги, встановлені підпунктом 5 пункту 291.4 статті 291 глави 1 розділу XIV Податкового кодексу України, у звітному (податковому) періоді</td>
    <td align="center">18 </td>
    <td align="right"><xsl:call-template name="body_id"><xsl:with-param name="id" select="'R018G3'"/></xsl:call-template></td>
  </tr>

	 <tr>
    <td>Сума доходу, отриманого при застосуванні іншого способу розрахунків, ніж передбачено пунктом 291.6 статті 291 глави 1 розділу XIV Податкового кодексу України,
у звітному (податковому) періоді</td>
    <td align="center">19</td>
    <td align="right"><xsl:call-template name="body_id"><xsl:with-param name="id" select="'R019G3'"/></xsl:call-template></td>
  </tr>
  <tr>
    <td>Сума доходу, отриманого від здійснення видів діяльності, які не дають права на застосування спрощеної системи оподаткування, у звітному (податковому) періоді</td>
    <td align="center">20 </td>
    <td align="right"><xsl:call-template name="body_id"><xsl:with-param name="id" select="'R020G3'"/></xsl:call-template></td>
  </tr>

	</table>
				 <br />


		 <table border="0"  width="100%" cellspacing="0" bordercolor="#000000">
  <tr  >
    <td align="center"><b>VI. ВИЗНАЧЕННЯ ПОДАТКОВИХ ЗОБОВ'ЯЗАНЬ ПО ЄДИНОМУ ПОДАТКУ*</b></td>
  </tr>
 </table>

 <table border="1" width="100%" cellspacing="0" bordercolor="#000000">
  <tr align="center">
    <td width="60%">Назва показника</td>
    <td width="5%">Код рядка</td>
    <td width="10%">Сума (грн.) </td>
  </tr>
  <tr align="center">
    <td>1</td>
    <td>2</td>
    <td>3</td>
  </tr>
  <tr>
    <td><b>Загальна сума доходу за звітний (податковий) період  </b> <br />
(сума значень рядків 01 + 02 + 03 + 04 + 05 + 06 + 07 + 08 + 09 + 10 + 11 + 12 + 13 + 14 + 15 + 16 + 17 + 18 + 19 + 20) </td>
    <td align="center">21</td>
    <td align="right"><xsl:call-template name="body_id"><xsl:with-param name="id" select="'R021G3'"/></xsl:call-template></td>
  </tr>
  <tr>
    <td>Сума податку за ставкою 15 % <br />((рядок 02 + рядок 03 + рядок 04 + рядок 05 + рядок 07 + рядок 08 + рядок 09 + рядок 10 + рядок 13 + рядок 14 + рядок 15 + рядок 18 + рядок 19 + рядок 20) х 15 %)
 </td>
    <td align="center">22  </td>
    <td align="right"><xsl:call-template name="body_id"><xsl:with-param name="id" select="'R022G3'"/></xsl:call-template></td>
  </tr>
  <tr>
    <td>Сума податку за ставкою 3 % (рядок 11 х 3 %)</td>
    <td align="center">23 </td>
    <td align="right"><xsl:call-template name="body_id"><xsl:with-param name="id" select="'R023G3'"/></xsl:call-template></td>
  </tr>

	 <tr>
    <td>Сума податку за ставкою 5 % (рядок 12 х 5 %)</td>
    <td align="center">24</td>
    <td align="right"><xsl:call-template name="body_id"><xsl:with-param name="id" select="'R024G3'"/></xsl:call-template></td>
  </tr>
  <tr>
    <td>Сума податку за ставкою 7 % (рядок 16 х 7 %)</td>
    <td align="center">25 </td>
    <td align="right"><xsl:call-template name="body_id"><xsl:with-param name="id" select="'R025G3'"/></xsl:call-template></td>
  </tr>
	 <tr>
    <td>Сума податку за ставкою 10 % (рядок 17 х 10 %)</td>
    <td align="center">26 </td>
    <td align="right"><xsl:call-template name="body_id"><xsl:with-param name="id" select="'R026G3'"/></xsl:call-template></td>
  </tr>
	 <tr>
    <td>Нараховано всього за звітний (податковий) період <br />
(рядок 22 + рядок 23 +  рядок 24 + рядок 25 + рядок 26))</td>
    <td align="center">27 </td>
    <td align="right"><xsl:call-template name="body_id"><xsl:with-param name="id" select="'R027G3'"/></xsl:call-template></td>
  </tr>
		<tr>
    <td>Нараховано за попередній звітний (податковий) період (значення рядка 27 декларації попереднього звітного (податкового) періоду)</td>
    <td align="center">28 </td>
    <td align="right"><xsl:call-template name="body_id"><xsl:with-param name="id" select="'R028G3'"/></xsl:call-template></td>
  </tr>
	 <tr>
    <td>Сума єдиного податку, яка підлягає нарахуванню та сплаті в бюджет за підсумками поточного звітного (податкового) періоду (рядок 27 - рядок 28)</td>
    <td align="center">29 </td>
    <td align="right"><xsl:call-template name="body_id"><xsl:with-param name="id" select="'R029G3'"/></xsl:call-template></td>
  </tr>
	</table>

		 <table border="0"  width="100%" cellspacing="0" bordercolor="#000000">
  <tr  >
    <td >* Не заповнюється платником податку, що подає декларацію "Довідково".</td>
  </tr>
 </table>

				 <br />
	<table border="0"  width="100%" cellspacing="0" bordercolor="#000000">
  <tr  >
    <td align="center"><b>VІI. ВИЗНАЧЕННЯ ПОДАТКОВИХ ЗОБОВ'ЯЗАНЬ У ЗВ'ЯЗКУ З ВИПРАВЛЕННЯМ САМОСТІЙНО ВИЯВЛЕНИХ ПОМИЛОК*</b></td>
  </tr>
 </table>

 <table border="1" width="100%" cellspacing="0" bordercolor="#000000">
  <tr align="center">
    <td width="60%">Назва показника</td>
    <td width="5%">Код рядка</td>
    <td width="10%">Сума (грн.) </td>
  </tr>
  <tr align="center">
    <td>1</td>
    <td>2</td>
    <td>3</td>
  </tr>
  <tr>
    <td>Сума єдиного податку, яка підлягала перерахуванню до бюджету, за даними звітного (податкового) періоду, в якому виявлена помилка (рядок 29 відповідної декларації) </td>
    <td align="center">30</td>
    <td align="right"><xsl:call-template name="body_id"><xsl:with-param name="id" select="'R030G3'"/></xsl:call-template></td>
  </tr>
  <tr>
    <td>Уточнена сума податкових зобов'язань за звітний (податковий) період, у якому виявлена помилка</td>
    <td align="center">31  </td>
    <td align="right"><xsl:call-template name="body_id"><xsl:with-param name="id" select="'R031G3'"/></xsl:call-template></td>
  </tr>

  <tr>
    <td colspan="3"><b>Розрахунки у зв'язку з виправленням помилки:</b></td>
  </tr>
	 <tr>
    <td>збільшення суми, яка підлягала перерахуванню до бюджету <br />(рядок 31 - рядок 30, якщо рядок 31 &gt; рядка 30) </td>
    <td align="center">32</td>
    <td align="right"><xsl:call-template name="body_id"><xsl:with-param name="id" select="'R032G3'"/></xsl:call-template></td>
  </tr>
  <tr>
    <td>зменшення суми, яка підлягала перерахуванню до бюджету**  <br /> (рядок 31- рядок 30, якщо рядок 31 &lt; рядка 30)</td>
    <td align="center">33 </td>
    <td align="right"><xsl:call-template name="body_id"><xsl:with-param name="id" select="'R033G3'"/></xsl:call-template></td>
  </tr>
	 <tr>
    <td style="text-align:left">Сума штрафу, яка нарахована платником податку самостійно у зв'язку з виправленням помилки,
<xsl:call-template name="body_id"><xsl:with-param name="id" select="'R034G1'"/></xsl:call-template> % (рядок 32 х 3 % або 5 %)</td>
    <td align="center">34 </td>
    <td align="right"><xsl:call-template name="body_id"><xsl:with-param name="id" select="'R034G3'"/></xsl:call-template></td>
  </tr>
	 <tr>
    <td>Сума пені, яка нарахована платником податку самостійно відповідно до підпункту 129.1.2 пункту 129.1 статті 129 глави 12 розділу II Податкового кодексу України</td>
    <td align="center">35 </td>
    <td align="right"><xsl:call-template name="body_id"><xsl:with-param name="id" select="'R035G3'"/></xsl:call-template></td>
  </tr>
	</table>

		 <table border="0"  width="100%" cellspacing="0" bordercolor="#000000">
  <tr  >
    <td >*  Заповнюється  платником податку, який уточнює податкові зобов'язання.</td>
  </tr>
	 <tr  >
    <td >** Відображаються тільки позитивні значення.</td>
  </tr>
 </table>
 <br />

 <table  width="100%" border="1" cellspacing="0" bordercolor="#000000">
		<tr>
    <td width="70%"> Доповнення до податкової декларації (заповнюється і додається відповідно до пункту 46.4 статті 46 глави 2 розділу II Податкового кодексу України) на: </td>
    <td width="10%" align="right"><xsl:call-template name="body_id"><xsl:with-param name="id" select="'HJAR'"/></xsl:call-template>  </td>
    <td width="5%"> арк.</td>
  </tr>
</table>
	 <TABLE width="100%" border="0" cellspacing="0" bordercolor="#000000">
		 <TR>
		<TD >Відповідно до пункту 46.4 статті 46 розділу ІІ Податкового кодексу України, повідомляємо:</TD>
	</TR>
</TABLE>
	<TABLE width="100%" border="1" cellspacing="0" bordercolor="#000000">
	<TBODY id="Process">
	<TR>
		<TD align="center" width="3%" >№  з/п</TD>
		<TD align="center"  > Зміст доповнення  </TD>
	</TR>
<!--Output Table-->
    <xsl:choose>
		<xsl:when  test="count($T2)=0">
			<xsl:call-template name="t2_row">
				<xsl:with-param name="rownum" select="1"/>
				<xsl:with-param name="row" select="//DECLARHEAD/C_DOC"/>
			</xsl:call-template>
	   </xsl:when>
		<xsl:otherwise>
		   <xsl:for-each select = "$T2[generate-id(.)=generate-id(key('grT2', @ROWNUM))]">
				<xsl:variable name="rownum" select="number(./@ROWNUM)"/>
				<xsl:call-template name="t2_row">
					<xsl:with-param name="rownum" select="@ROWNUM"/>
					<xsl:with-param name="row" select="key('grT2', $rownum)"/>
				</xsl:call-template>
		   </xsl:for-each>
		</xsl:otherwise>
	</xsl:choose>

</TBODY>

</TABLE>
<br />
	<table width="50%">
	<tr>
				<td width="70%">Дата подання податкової декларації<font color="red"> *  </font></td>
		    <td class="td_box"><xsl:call-template name="body_id"><xsl:with-param name="id" select="'HFILL'"/></xsl:call-template> </td>
      </tr>
	<tr>
      </tr>
</table>

<br />
<table width="50%">
  <tr>
		<td >Інформація, наведена у податковій декларації, є достовірною.</td>
	 </tr>
</table>

<table width="100%" cellspacing="3" border="0">
  <tr>
    <td width="20%">Фізична особа - підприємець  <font color="red"> *  </font>  </td>
    <td width="15%" align="center" class="td_unln"><xsl:text disable-output-escaping="yes">&amp;nbsp;</xsl:text></td>
    <td class="td_unln" align="left" ><b>
<xsl:element name="input">
<xsl:attribute name="style">width:100%;</xsl:attribute>
<xsl:attribute name="value"><xsl:value-of select="//DECLARBODY/*[name()='HBOS']" /></xsl:attribute>
<xsl:attribute name="id">HBOS</xsl:attribute>
</xsl:element>
</b></td>
		<td class="td_box" align="left"><b><xsl:call-template name="body_id"><xsl:with-param name="id" select="'HKBOS'"/></xsl:call-template></b><font color="red"> *  </font></td>
    <td rowspan="4" align="center">
      <h2>М.П.</h2>
    </td>
  </tr>
  <tr>
    <td><xsl:text disable-output-escaping="yes">&amp;nbsp;</xsl:text></td>
    <td align="center"><font size="-1">(підпис)</font></td>
    <td align="center"><font size="-1">(ініціали та прізвище)</font></td>
    <td colspan="2">(реєстраційний номер облікової картки платника податків)</td>
  </tr>

</table>

  </body></html>
</xsl:template>

<xsl:template name="prn_id">
	<xsl:param name="id"/>
	<xsl:param name="zn"/>
	<xsl:param name="rownum"/>
	<xsl:param name="tCss"/>
		<input type="textbox">
		<xsl:attribute name="value"><xsl:value-of select="$zn"/></xsl:attribute>
		<xsl:attribute name="id"><xsl:value-of select="$id"/></xsl:attribute>
		<xsl:attribute name="class">
			<xsl:choose>
				<xsl:when test="string-length($tCss)>0"><xsl:value-of select="$tCss"/></xsl:when>
				<xsl:otherwise><xsl:text>edtCss</xsl:text></xsl:otherwise>
			</xsl:choose>
		</xsl:attribute>
		<xsl:if test="string-length($rownum)>0">
			<xsl:attribute name="rownum"><xsl:value-of select="$rownum"/></xsl:attribute>
		</xsl:if>
	</input>
</xsl:template>

<xsl:template name="tab_id">
	<xsl:param name="id"/>
	<xsl:param name="rownum"/>
	<xsl:param name="tCss"/>
	<xsl:call-template name="prn_id">
		<xsl:with-param name="id" select="$id"/>
		<xsl:with-param name="zn" select="//DECLARBODY/*[name()=$id][@ROWNUM=$rownum]"/>
		<xsl:with-param name="rownum" select="$rownum"/>
		<xsl:with-param name="tCss" select="$tCss"/>
	</xsl:call-template>
 </xsl:template>

<xsl:template name="t1_row">
		 <xsl:param name="rownum"/>
     <xsl:param name="iden">T1RXXXX</xsl:param>
	<tr align="center" id="StretchTable">
<xsl:attribute name="rownum"><xsl:value-of select="$rownum"/></xsl:attribute>
     <td><xsl:call-template name="tab_id"><xsl:with-param name="id" select="concat($iden, 'G1S')"/><xsl:with-param name="rownum" select="$rownum"/></xsl:call-template></td>
		 <td><xsl:call-template name="tab_id"><xsl:with-param name="id" select="concat($iden, 'G2S')"/><xsl:with-param name="rownum" select="$rownum"/></xsl:call-template></td>
    </tr>
</xsl:template>

 <xsl:template name="t2_row">
		 <xsl:param name="rownum"/>
     <xsl:param name="iden">T2RXXXX</xsl:param>
	<tr align="center" id="StretchTable">
<xsl:attribute name="rownum"><xsl:value-of select="$rownum"/></xsl:attribute>
		 <td><span id="spRownum"><xsl:value-of select="$rownum"/></span></td>
     <td>  <xsl:call-template name="tab_id">  <xsl:with-param name="id" select="concat($iden, 'G2S')"/><xsl:with-param name="rownum" select="$rownum"/>    </xsl:call-template>      </td>
    </tr>
</xsl:template>

 <xsl:template name="body_id">
	<xsl:param name="id"/>
	<xsl:param name="tCss"/>
	<input type="textbox">
		<xsl:attribute name="value"><xsl:value-of select="//DECLARBODY/*[name()=$id]"/></xsl:attribute>
		<xsl:attribute name="id"><xsl:value-of select="$id"/></xsl:attribute>
		<xsl:attribute name="class">
			<xsl:choose>
				<xsl:when test="$tCss='edCss'">
					<xsl:text>edCss</xsl:text>
				</xsl:when>
				<xsl:otherwise>
					<xsl:text>edtCss</xsl:text>
				</xsl:otherwise>
			</xsl:choose>
		</xsl:attribute>
	</input>
</xsl:template>


</xsl:stylesheet>
