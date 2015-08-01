<?xml version="1.0" encoding="windows-1251"?>
<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
<xsl:output method="html" encoding="windows-1251"/>
<xsl:template match="DECLAR">

<html>
<head>
<title>E04T00I - "Звіт про суми нарахованої заробітної плати (доходу, грошового забезпечення, допомоги, компенсації) 
застрахованих осіб та суми нарахованого єдиного внеску на загальнообов’язкове державне соціальне страхування до фіскальних органів"</title>
<style>
.td_border1 {border: 1px solid black;}
</style>
<script SRC="./PrepareEditDoc.js" ></script></head>

<body>
	 <table width="100%">
  <tr>
    <td width="30%" valign="bottom" align="center"><xsl:text disable-output-escaping="yes">&amp;nbsp;</xsl:text>  </td>
    <td width="10%"><xsl:text disable-output-escaping="yes">&amp;nbsp;</xsl:text> </td>
    <td width="40%"> Додаток 4    <br />
 до Порядку формування та подання    страхувальниками звіту щодо сум    нарахованого єдиного внеску на 
   загальнообов’язкове державне           соціальне страхування	   (пункт 1 розділу ІІІ)</td>
  </tr>
</table>
<br />
<table width="100%" border="0">
  <tr align="center">
    <td colspan="6"> <b>Звітність</b>  </td>
  </tr>
  <tr align="center">
    <td colspan="6"><b>Звіт про суми нарахованої заробітної плати (доходу, грошового забезпечення, допомоги, компенсації) 
застрахованих осіб та суми нарахованого єдиного внеску на загальнообов’язкове державне соціальне страхування до фіскальних органів</b></td>
  </tr>
 </table>
 <table width="60%" border="0">
  <tr >
		<td width="35%" >1. Звіт за місяць</td>
    <td width="5%" class="td_box"><xsl:call-template name="body_id"><xsl:with-param name="id" select="'PERIOD_MONTH'"/></xsl:call-template></td>
    <td width="10%" align="right">рік:</td>
    <td width="5%" class="td_box"><xsl:call-template name="body_id"><xsl:with-param name="id" select="'PERIOD_YEAR'"/></xsl:call-template></td>
  </tr>
</table>
<br />
<table cellspacing="0" border="1" >
  <tr>
    <td width="30%"  align="center" class="td_border1">Подають:</td>
    <td width="30%" align="center" class="td_border1">Терміни подання</td>
    <td width="15%" ><xsl:text disable-output-escaping="yes">&amp;nbsp;</xsl:text></td>
    <td align="left" rowspan="2" ><b>Форма № Д4</b>
     <i>(місячна) </i>
          	     
    	<div id="FORM_TYPE" style="padding:10px;"><input type="checkbox" onclick="SelectEFormType();" style="margin:2px;">
									<xsl:if test="//DECLARBODY//*[name()='FORM_TYPE'][.='1']">
										<xsl:attribute name="checked">true</xsl:attribute>
									</xsl:if>(початкова) </input>
								<br/><input type="checkbox" onclick="SelectEFormType();" style="margin:2px;">
									<xsl:if test="//DECLARBODY//*[name()='FORM_TYPE'][.='2']">
										<xsl:attribute name="checked">true</xsl:attribute>
									</xsl:if>(скасовуюча)</input>
								<br/><input type="checkbox" onclick="SelectEFormType();" style="margin:2px;">
									<xsl:if test="//DECLARBODY//*[name()='FORM_TYPE'][.='3']">
										<xsl:attribute name="checked">true</xsl:attribute>
									</xsl:if>(додаткова)</input>
								<br/>
							</div>
                   <br />ЗАТВЕРДЖЕНО<br />
                   наказом Міністерства фінансів України <br />
		14.04.2015 № 435 <br /> 
                   за погодженням з  Держстатом <br /> 
            </td>
  </tr>
  <tr>
    <td width="30%" align="left" class="td_border1">Страхувальники, фізичні особи - підприємці, у тому числі ті,
 які обрали спрощену систему оподаткування, особи,  які  провадять незалежну професійну діяльність, 
які використовують працю фізичних осіб, районні (міські) 
управління праці та соціального захисту населення, - відповідним фіскальним органам за місцем реєстрації</td>
    <td width="30%" align="left" valign="top" class="td_border1" >не пізніше ніж через 20 календарних днів, 
наступних за останнім календарним днем звітного місяця </td>
    <td width="15%" ><xsl:text disable-output-escaping="yes">&amp;nbsp;</xsl:text></td>
  </tr>
     </table>
 <br />

<table width="100%" border="0" cellspacing="4">
  <tr>
    <td  >2. Код за ЄДРПОУ/ реєстраційний номер облікової картки платника податків   </td>
    <td width="20%" class="td_box"><xsl:call-template name="body_id"><xsl:with-param name="id" select="'FIRM_EDRPOU'"/></xsl:call-template></td>
		<td  >3. Код за ЄДРПОУ або податковий номер/серія та номер паспорта ліквідованого страхувальника* (заповнюється у разі подачі звіту правонаступником)     </td>
    <td width="20%" class="td_box"><xsl:call-template name="body_id"><xsl:with-param name="id" select="'LIKV_EDRPOU'"/></xsl:call-template></td>
  </tr>
  <tr>
    <td >4. Найменування / Прізвище, ім'я, по батькові <br />
<i>(страхувальника/фізичної особи)</i>
</td>
    <td class="td_box" colspan="3">
<xsl:element name="input">
<xsl:attribute name="style">width:100%;</xsl:attribute>
<xsl:attribute name="value"><xsl:value-of select="//DECLAR//*[name()='FIRM_NAME']" /></xsl:attribute>
<xsl:attribute name="id">FIRM_NAME</xsl:attribute>
</xsl:element></td>
  </tr>
  <tr>
    <td  >Місцезнаходження / Місце проживання</td>
    <td class="td_box" colspan="3">
<xsl:element name="input">
<xsl:attribute name="style">width:100%;</xsl:attribute>
<xsl:attribute name="value"><xsl:value-of select="//DECLAR//*[name()='FIRM_ADR']" /></xsl:attribute>
<xsl:attribute name="id">FIRM_ADR</xsl:attribute>
</xsl:element>
   </td>
  </tr>
  <tr>
    <td  >Телефон </td>
    <td class="td_box"  align="left" colspan="3"><xsl:call-template name="body_id"><xsl:with-param name="id" select="'FIRM_PHON'"/></xsl:call-template> </td>
  </tr>
	<tr>
    <td  >5.Код територіального фіскального органу, до якого подається звіт </td>
    <td class="td_box" colspan="3" >
		<xsl:element name="input">
<xsl:attribute name="style">width:100%;</xsl:attribute>
<xsl:attribute name="value"><xsl:value-of select="//DECLAR//*[name()='DPACD_ST']" /></xsl:attribute>
<xsl:attribute name="id">DPACD_ST</xsl:attribute>
</xsl:element>
</td>
  </tr>
</table>
<br />

<table border="0"  width="100%" cellspacing="0" bordercolor="black">
 <tr>
    <td align="center" >Перелік таблиць звіту</td>
  </tr>
</table>

<table border="1"  width="100%" cellspacing="0" bordercolor="black">
  <tr>
    <td  width="4%" align="center"> № з/п</td>
    <td  width="70%" align="center"> Назва таблиці</td>
    <td  width="10%" align="center"> Кількість аркушів</td>
    <td  width="10%" align="center" >Кількість рядків</td>
  </tr>
	<tr>
    <td  align="center"  > 1</td>
    <td   > Нарахування єдиного внеску </td>
    <td  align="right"><xsl:call-template name="body_id"><xsl:with-param name="id" select="'N1_0'"/></xsl:call-template>  </td>
    <td  align="center" > * </td>
  </tr>
	<tr>
    <td  align="center"  > 2</td>
    <td   >Нарахування єдиного внеску на загальнообов'язкове державне соціальне страхування за деякі категорії застрахованих осіб</td>
    <td  align="right"><xsl:call-template name="body_id"><xsl:with-param name="id" select="'N2_0'"/></xsl:call-template>  </td>
    <td  align="center" > * </td>
  </tr>
	<tr>
    <td  align="center"  > 3</td>
    <td   > Нарахування єдиного внеску на загальнообов'язкове державне соціальне страхування за осіб, які проходять строкову військову службу</td>
    <td  align="right"><xsl:call-template name="body_id"><xsl:with-param name="id" select="'N3_0'"/></xsl:call-template>  </td>
    <td  align="center" > * </td>
  </tr>
	 <tr>
    <td   align="center" >4</td>
    <td   >Нарахування єдиного внеску на загальнообов’язкове державне соціальне страхування  на суми грошового забезпечення</td>
    <td  align="right"><xsl:call-template name="body_id"><xsl:with-param name="id" select="'N4_0'"/></xsl:call-template>  </td>
    <td  align="center" > * </td>
  </tr>
		<tr>
    <td  align="center"  >5</td>
    <td   >Відомості про трудові відносини застрахованих осіб</td>
    <td  align="right"><xsl:call-template name="body_id"><xsl:with-param name="id" select="'N5_0'"/></xsl:call-template>  </td>
    <td  align="right"><xsl:call-template name="body_id"><xsl:with-param name="id" select="'N5_1'"/></xsl:call-template>  </td>
  </tr>
		<tr>
    <td  align="center"  >6</td>
    <td   >Відомості про нарахування заробітної плати (доходу) застрахованим особам</td>
    <td  align="right"><xsl:call-template name="body_id"><xsl:with-param name="id" select="'N6_0'"/></xsl:call-template>  </td>
    <td  align="right"><xsl:call-template name="body_id"><xsl:with-param name="id" select="'N6_1'"/></xsl:call-template>  </td>
  </tr>
		<tr>
    <td  align="center"  >7</td>
    <td   >Наявність підстав для обліку стажу окремим категоріям осіб відповідно до законодавства </td>
    <td  align="right"><xsl:call-template name="body_id"><xsl:with-param name="id" select="'N7_0'"/></xsl:call-template>  </td>
    <td  align="right"><xsl:call-template name="body_id"><xsl:with-param name="id" select="'N7_1'"/></xsl:call-template>  </td>
  </tr>
		<tr>
    <td  align="center"  >8</td>
    <td   >Відомості про осіб, які доглядають за дитиною до досягнення нею трирічного віку та відповідно до закону 
отримують допомогу по догляду за дитиною до досягнення нею трирічного віку та/або при народженні дитини, 
та осіб із числа непрацюючих працездатних батьків, усиновителів, опікунів, піклувальників, які фактично 
здійснюють догляд за дитиною-інвалідом, а також непрацюючих працездатних осіб, які здійснюють догляд 
 за інвалідом І групи або за престарілим, який за висновком медичного закладу потребує постійного стороннього догляду 
або досяг 80-річного віку, якщо такі непрацюючі працездатні особи отримують допомогу або компенсацію відповідно до законодавства, 
та нарахування сум єдиного внеску за батьків-вихователів дитячих будинків сімейного типу, прийомних батьків, 
якщо вони отримують грошове забезпечення відповідно до законодавства</td>
    <td  align="right"><xsl:call-template name="body_id"><xsl:with-param name="id" select="'N8_0'"/></xsl:call-template>  </td>
    <td  align="right"><xsl:call-template name="body_id"><xsl:with-param name="id" select="'N8_1'"/></xsl:call-template>  </td>
  </tr>
		<tr>
    <td   align="center" >9</td>
    <td   >Відомості про осіб, які проходять строкову  військову службу</td>
    <td  align="right"><xsl:call-template name="body_id"><xsl:with-param name="id" select="'N9_0'"/></xsl:call-template>  </td>
    <td  align="right"><xsl:call-template name="body_id"><xsl:with-param name="id" select="'N9_1'"/></xsl:call-template>  </td>
  </tr>
		<tr>
    <td   > </td>
    <td   ><b>Усього</b></td>
    <td  align="right"><xsl:call-template name="body_id"><xsl:with-param name="id" select="'N10_0'"/></xsl:call-template>  </td>
    <td  align="right"><xsl:call-template name="body_id"><xsl:with-param name="id" select="'N10_1'"/></xsl:call-template>  </td>
  </tr>
     </table>
<br />
* Для фізичних осіб, які мають відмітку в паспорті про право здійснювати будь-які платежі за серією та номером паспорта.

<table width="100%" border="0">
  <tr>
    <td width="15%">Керівник  </td>
    <td width="5%"><xsl:text disable-output-escaping="yes">&amp;nbsp;</xsl:text></td>
		<td width="15%" class="td_box"><xsl:call-template name="body_id"><xsl:with-param name="id" select="'BOSS_NUMIDENT'"/></xsl:call-template></td>
		<td width="5%"><xsl:text disable-output-escaping="yes">&amp;nbsp;</xsl:text></td>
    <td width="10%" class="td_unln"><xsl:text disable-output-escaping="yes">&amp;nbsp;</xsl:text></td>
    <td width="5%"><xsl:text disable-output-escaping="yes">&amp;nbsp;</xsl:text></td>
    <td width="45%" class="td_box">
		<xsl:element name="input">
<xsl:attribute name="style">width:100%;</xsl:attribute>
<xsl:attribute name="value"><xsl:value-of select="//DECLAR//*[name()='FIRM_BOSS']" /></xsl:attribute>
<xsl:attribute name="id">FIRM_BOSS</xsl:attribute>
</xsl:element>
   </td>
  </tr>
  <tr>
    <td><xsl:text disable-output-escaping="yes">&amp;nbsp;</xsl:text></td>
    <td><xsl:text disable-output-escaping="yes">&amp;nbsp;</xsl:text></td>
		<td>    (податковий  номер або серія  та номер паспорта*)  </td>
    <td><xsl:text disable-output-escaping="yes">&amp;nbsp;</xsl:text></td>
    <td align="center"><font size="-1">(підпис)</font></td>
    <td><xsl:text disable-output-escaping="yes">&amp;nbsp;</xsl:text></td>
    <td align="center"><font size="-1">(ініціали та прізвище)  )</font></td>
  </tr>
  <tr>
    <td><xsl:text disable-output-escaping="yes">&amp;nbsp;</xsl:text></td>
    <td><xsl:text disable-output-escaping="yes">&amp;nbsp;</xsl:text></td>
    <td><xsl:text disable-output-escaping="yes">&amp;nbsp;</xsl:text></td>
    <td><xsl:text disable-output-escaping="yes">&amp;nbsp;</xsl:text></td>
    <td><xsl:text disable-output-escaping="yes">&amp;nbsp;</xsl:text></td>
  </tr>
  <tr>
    <td  >Головний бухгалтер</td>
    <td><xsl:text disable-output-escaping="yes">&amp;nbsp;</xsl:text></td>
		<td class="td_box"><xsl:call-template name="body_id"><xsl:with-param name="id" select="'BUH_NUMIDENT'"/></xsl:call-template></td>
		<td><xsl:text disable-output-escaping="yes">&amp;nbsp;</xsl:text></td>
    <td class="td_unln"><xsl:text disable-output-escaping="yes">&amp;nbsp;</xsl:text></td>
    <td><xsl:text disable-output-escaping="yes">&amp;nbsp;</xsl:text></td>
    <td class="td_box">
		<xsl:element name="input">
<xsl:attribute name="style">width:100%;</xsl:attribute>
<xsl:attribute name="value"><xsl:value-of select="//DECLAR//*[name()='FIRM_BUH']" /></xsl:attribute>
<xsl:attribute name="id">FIRM_BUH</xsl:attribute>
</xsl:element>
   </td>
  </tr>
  <tr>
    <td><xsl:text disable-output-escaping="yes">&amp;nbsp;</xsl:text></td>
    <td><xsl:text disable-output-escaping="yes">&amp;nbsp;</xsl:text></td>
		<td>(податковий  номер або серія  та номер паспорта*)     </td>
    <td><xsl:text disable-output-escaping="yes">&amp;nbsp;</xsl:text></td>
    <td align="center"><font size="-1">(підпис)</font></td>
    <td><xsl:text disable-output-escaping="yes">&amp;nbsp;</xsl:text></td>
    <td align="center"><font size="-1">(ініціали та прізвище)  </font></td>
  </tr>
</table>
<br />
<table width="100%">
  <tr align="center">
    <td>М.П. (за наявності)</td>
  </tr>
</table>
<br />
</body></html>
</xsl:template>

 <xsl:template name="body_id">
	<xsl:param name="id"/>
	<xsl:param name="tCss"/>
	<input type="textbox">
		<xsl:attribute name="value"><xsl:value-of select="//DECLAR//*[name()=$id]"/></xsl:attribute>
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

