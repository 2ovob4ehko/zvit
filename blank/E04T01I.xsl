<?xml version="1.0" encoding="windows-1251"?>
<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
	<xsl:output method="html" encoding="windows-1251"/>
	<xsl:template match="DECLAR">
		<html>
			<head>
				<title>E04T01I - "Таблиця 1. Нарахування єдиного внеску"</title>
				<link HREF="./css/xsl_edit_styles.css" REL="stylesheet"/>
				<script SRC="./PrepareEditDoc.js"/>
			</head>
			<body>
				<table width="100%" border="0">
					<tr>
						<td width="15%" align="right">№ аркуша звіту </td>
						<td width="20%" class="td_box">
							<xsl:call-template name="body_id">
								<xsl:with-param name="id" select="'PAGE_NUM'"/>
							</xsl:call-template>
						</td>
					</tr>
				</table>
				<table width="70%" border="0">
					<tr>
						<td width="25%">1. Звіт за місяць</td>
						<td width="5%" class="td_box">
							<xsl:call-template name="body_id">
								<xsl:with-param name="id" select="'PERIOD_MONTH'"/>
							</xsl:call-template>
						</td>
						<td width="15%" align="right">Pік:</td>
						<td width="5%" class="td_box">
							<xsl:call-template name="body_id">
								<xsl:with-param name="id" select="'PERIOD_YEAR'"/>
							</xsl:call-template>
						</td>
					</tr>
				</table>
				<table width="100%" border="0">
					<tr>
						<td width="35%">2. Код за ЄДРПОУ/ реєстраційний номер облікової картки платника податків   </td>
						<td class="td_box">
							<xsl:call-template name="body_id">
								<xsl:with-param name="id" select="'FIRM_EDRPOU'"/>
							</xsl:call-template>
						</td></tr>
						<tr>
						<td width="35%">3. Код за ЄДРПОУ або податковий номер/серія та номер паспорта ліквідованого страхувальника*
(заповнюється у разі подачі звіту правонаступником) </td>
						<td class="td_box">
							<xsl:call-template name="body_id">
								<xsl:with-param name="id" select="'LIKV_EDRPOU'"/>
							</xsl:call-template>
						</td>
					</tr>
				</table>
				<table width="100%" border="0" cellspacing="4">
					<tr>
						<td width="10%">
							<b>Страхувальник </b>
						</td>
						<td class="td_box">
							<xsl:element name="input">
								<xsl:attribute name="style">width:100%;</xsl:attribute>
								<xsl:attribute name="value"><xsl:value-of select="//DECLAR//*[name()='FIRM_NAME']"/></xsl:attribute>
								<xsl:attribute name="id">FIRM_NAME</xsl:attribute>
							</xsl:element>
						</td>
					</tr>
					<tr>
						<td>
							<xsl:text disable-output-escaping="yes">&amp;nbsp;</xsl:text>
						</td>
						<td align="center">(найменування страхувальника або прізвище, ім'я, 
по батькові - для фізичної особи – підприємця, особи, яка провадить незалежну професійну діяльність)</td>
					</tr>
				</table>
				<table width="100%" border="0" cellspacing="4">
					<tr>
						<td width="60%"><b>4. Код основного виду економічної діяльності  відповідно до якого встановлено клас професійного ризику </b></td>
						<td class="td_box">
							<xsl:call-template name="body_id">
								<xsl:with-param name="id" select="'KVED'"/>
							</xsl:call-template>
						</td>
					</tr>
				</table>
				<table cellspacing="1" border="0" width="100%">
					<tr>
						<td width="25%">
							<b>5. Клас професійного ризику виробництва </b>
						</td>
						<td width="10%" align="center" class="td_box">
							<xsl:call-template name="body_id">
								<xsl:with-param name="id" select="'PROF_RISK'"/>
							</xsl:call-template>
						</td>
						<td width="25%">
							<xsl:text disable-output-escaping="yes">&amp;nbsp;</xsl:text>
						</td>
						<td width="10%" align="center">
							<xsl:text disable-output-escaping="yes">&amp;nbsp;</xsl:text>
						</td>
					</tr>
					<tr>
						<td width="25%">
							<b>6. Бюджетна установа </b>
						</td>
						<td width="10%" align="center" class="td_box">
							<xsl:call-template name="body_id">
								<xsl:with-param name="id" select="'BUDGET_UST'"/>
							</xsl:call-template>
						</td>
						<td width="25%"><b>16. Кількість створених нових робочих місць у звітному періоді</b> </td>
						<td width="10%" align="center" class="td_box">
							<xsl:call-template name="body_id">
								<xsl:with-param name="id" select="'ID_1128'"/>
							</xsl:call-template>
						</td>
					</tr>
					<tr>
						<td width="25%">
							<b>7. Підприємство, організація всеукраїнської громадської організації інвалідів, зокрема  товариств УТОГ,  УТОС </b>
						</td>
						<td width="10%" align="center" class="td_box">
							<xsl:call-template name="body_id">
								<xsl:with-param name="id" select="'UTOGS'"/>
							</xsl:call-template>
						</td>
						<td width="25%"><b>17. Застосування коефіцієнта </b></td>
						<td  align="center" class="td_box">
							<div id="ZAST_KOEF" style="padding:10px;"><input type="checkbox" onclick="SelectEFormType();" style="margin:2px;">
									<xsl:if test="//DECLARBODY//*[name()='ZAST_KOEF'][.='1']">
										<xsl:attribute name="checked">true</xsl:attribute>
									</xsl:if>ТАК</input>
								<input type="checkbox" onclick="SelectEFormType();" style="margin:2px;">
									<xsl:if test="//DECLARBODY//*[name()='ZAST_KOEF'][.='0']">
										<xsl:attribute name="checked">true</xsl:attribute>
									</xsl:if>НІ</input>
							<br/>
							</div>
						</td>
					</tr>
					<tr>
						<td width="25%">
							<b>8. Підприємство, організація громадської  організації інвалідів       </b>
						</td>
						<td width="10%" align="center" class="td_box">
							<xsl:call-template name="body_id">
								<xsl:with-param name="id" select="'ORG_INV'"/>
							</xsl:call-template>
						</td>
						<td width="25%"><b>18. Розмір коефіцієнта (від 0,400 до 0,999)</b></td>
						<td width="10%" align="center" class="td_box">
							<xsl:call-template name="body_id">
								<xsl:with-param name="id" select="'ROZM_KOEF'"/>
							</xsl:call-template>
						</td>
					</tr>
					<tr>
						<td width="25%">
							<b>9. Підприємство суднобудівної промисловості </b>
							<br/>
(клас 30.11 група 30.1 розділ 30, клас 33.15 група 33.1 розділ 33 КВЕД ДК 009:2010)</td>
						<td width="10%" align="center" class="td_box">
							<xsl:call-template name="body_id">
								<xsl:with-param name="id" select="'ORG_SP'"/>
							</xsl:call-template>
						</td>
					<td width="25%"><b>19. Середня заробітна плата за 2014 рік </b></td>
						<td width="10%" align="center" class="td_box">
							<xsl:call-template name="body_id">
								<xsl:with-param name="id" select="'SER_ZP'"/>
							</xsl:call-template> грн.
						</td>
					</tr>
					<tr>
						<td width="25%" colspan="2"> (позначка "х" вноситься у клітинку відповідного варіанта)  </td>
						<td width="25%"><b>20. Середньомісячна кількість застрахованих осіб за 2014 рік </b></td>
						<td width="10%" align="center" class="td_box">
							<xsl:call-template name="body_id">
								<xsl:with-param name="id" select="'SER_ZO'"/>
							</xsl:call-template> 
						</td>
					</tr>
				</table>
				<table cellspacing="1" border="0" width="100%">
					<tr>
						<td width="15%">
							<b>10. Міністерство, інший  центральний орган виконавчої влади </b>
						</td>
						<td width="30%" align="center" class="td_box">
							<xsl:call-template name="body_id">
								<xsl:with-param name="id" select="'FIRM_MIN'"/>
							</xsl:call-template>
						</td>
						<td width="25%"><b>21. Середньооблікова кількість штатних  працівників за звітний період, осіб </b></td>
						<td width="10%" align="center" class="td_box">
							<xsl:call-template name="body_id">
								<xsl:with-param name="id" select="'ID_1012'"/>
							</xsl:call-template>
						</td>
					</tr>
					<tr>
						<td>
							<b>11. Місцезнаходження (місце проживання) </b>
						</td>
						<td>
							<xsl:element name="input">
								<xsl:attribute name="style">width:100%;</xsl:attribute>
								<xsl:attribute name="value"><xsl:value-of select="//DECLAR/*[name()='FIRM_ADR']"/></xsl:attribute>
								<xsl:attribute name="id">FIRM_ADR</xsl:attribute>
							</xsl:element>
						</td>
						<td><b>у тому числі:  <br/>
 працівників,  яким відповідно до чинного законодавства встановлено інвалідність, осіб </b></td>
						<td align="center" class="td_box">
							<xsl:call-template name="body_id">
								<xsl:with-param name="id" select="'ID_1121'"/>
							</xsl:call-template>
						</td>
					</tr>
					<tr>
						<td>
							<b>тел. _  </b>
						</td>
						<td>
							<xsl:call-template name="body_id">
								<xsl:with-param name="id" select="'FIRM_PHON'"/>
							</xsl:call-template>
						</td>
						<td><b>працівників, що мають додаткові гарантії у сприянні працевлаштуванню </b></td>
						<td align="center" class="td_box">
							<xsl:call-template name="body_id">
								<xsl:with-param name="id" select="'ID_1129'"/>
							</xsl:call-template>
						</td>
					</tr>
					<tr>
						<td>
							<b>12.Організаційно-правова форма господарювання </b>
						</td>
						<td>
							<xsl:call-template name="body_id">
								<xsl:with-param name="id" select="'FIRM_VLAS'"/>
							</xsl:call-template>
						</td>
						<td>
							<xsl:text disable-output-escaping="yes">&amp;nbsp;</xsl:text>
						</td>
						<td align="center">
							<xsl:text disable-output-escaping="yes">&amp;nbsp;</xsl:text>
						</td>
					</tr>
					<tr>
						<td>
							<b>13. № реєстрації страхувальника</b>
						</td>
						<td>
							<xsl:call-template name="body_id">
								<xsl:with-param name="id" select="'FIRM_PENS'"/>
							</xsl:call-template>
						</td>
						<td><b>Штатна чисельність працівників</b>  </td>
						<td align="center" class="td_box">
							<xsl:call-template name="body_id">
								<xsl:with-param name="id" select="'ID_1130'"/>
							</xsl:call-template>
						</td>
					</tr>
					<tr>
						<td>
							<xsl:text disable-output-escaping="yes">&amp;nbsp;</xsl:text>
						</td>
						<td>
							<xsl:text disable-output-escaping="yes">&amp;nbsp;</xsl:text>
						</td>
						<td><b>Кількість осіб, які виконували роботи (надавали послуги) за договорами цивільно-правового  характеру </b></td>
						<td align="center" class="td_box">
							<xsl:call-template name="body_id">
								<xsl:with-param name="id" select="'ID_1013'"/>
							</xsl:call-template>
						</td>
					</tr>
					<tr>
						<td>
							<b>14.Найменування банку </b>
						</td>
						<td>
							<xsl:element name="input">
								<xsl:attribute name="style">width:100%;</xsl:attribute>
								<xsl:attribute name="value"><xsl:value-of select="//DECLAR//*[name()='FIRM_NMBANK']"/></xsl:attribute>
								<xsl:attribute name="id">FIRM_NMBANK</xsl:attribute>
							</xsl:element>
						</td>
						<td><b>Кількість застрахованих осіб у звітному періоді, яким  нараховані виплати </b>  </td>
						<td align="center">
							<xsl:call-template name="body_id">
								<xsl:with-param name="id" select="'ID_1014'"/>
							</xsl:call-template>
						</td>
					</tr>
					<tr>
						<td>
							<b>15. МФО  </b>
						</td>
						<td class="td_box">
							<xsl:call-template name="body_id">
								<xsl:with-param name="id" select="'FIRM_CBANK'"/>
							</xsl:call-template>
						</td>
						<td><b>у тому числі: <br/> чоловіків</b> </td>
						<td align="center" class="td_box">
							<xsl:call-template name="body_id">
								<xsl:with-param name="id" select="'ID_1015'"/>
							</xsl:call-template>
						</td>
					</tr>
					<tr>
						<td>
							<b>№ п/рахунку   </b>
						</td>
						<td>
							<xsl:call-template name="body_id">
								<xsl:with-param name="id" select="'FIRM_RS'"/>
							</xsl:call-template>
						</td>
						<td><b>жінок </b></td>
						<td align="center" class="td_box">
							<xsl:call-template name="body_id">
								<xsl:with-param name="id" select="'ID_1016'"/>
							</xsl:call-template>
						</td>
					</tr>
					<tr>
						<td>
							<xsl:text disable-output-escaping="yes">&amp;nbsp;</xsl:text>
						</td>
						<td>
							<xsl:text disable-output-escaping="yes">&amp;nbsp;</xsl:text>
						</td>
						<td colspan="2" align="center">
							<i>(показники кількості працівників зазначаються в цілих одиницях) </i>
						</td>
					</tr>
					<tr>
						<td>
							<xsl:text disable-output-escaping="yes">&amp;nbsp;</xsl:text>
						</td>
						<td>
							<xsl:text disable-output-escaping="yes">&amp;nbsp;</xsl:text>
						</td>
					<!--	<td>Обрана система оподаткування  </td>
						<td align="center">
							<xsl:call-template name="body_id">
								<xsl:with-param name="id" select="'POD_STATUS'"/>
							</xsl:call-template>
						</td>-->
					</tr>
				</table>
				<br/>
				<table width="100%" border="0">
					<tr align="center">
						<td>
							<b>Таблиця 1. Нарахування єдиного внеску</b>
						</td>
					</tr>
				</table>
				<table border="1" width="100%" cellspacing="0" bordercolor="black">
					<tr>
						<td width="5%" align="center"> № з/п</td>
						<td width="85%" align="center"> Назва показника</td>
						<td width="10%" align="center"> Сума (грн.)</td>
					</tr>
					<tr>
						<td align="center"> 1 </td>
						<td align="center"> 2 </td>
						<td align="center"> 3 </td>
					</tr>
					<tr>
						<td align="center"> 1</td>
						<td>Загальна сума нарахованої заробітної плати, винагород за виконану роботу 
(надані послуги) за цивільно-правовими договорами, оплати допомоги по тимчасовій непрацездатності 
та допомоги у зв’язку з вагітністю та пологами, усього (р.1.1 + р. 1.2 + р. 1.3 + р. 1.4 + р. 1.5)                   </td>
						<td align="right">
							<xsl:call-template name="body_id">
								<xsl:with-param name="id" select="'ID_1000'"/>
							</xsl:call-template>
						</td>
					</tr>
					<tr>
						<td align="center"> 1.1</td>
						<td> сума нарахованої заробітної плати  </td>
						<td align="right">
							<xsl:call-template name="body_id">
								<xsl:with-param name="id" select="'ID_1100'"/>
							</xsl:call-template>
						</td>
					</tr>
					<tr>
						<td align="center"> 1.2</td>
						<td> сума винагород за договорами цивільно-правового характеру </td>
						<td align="right">
							<xsl:call-template name="body_id">
								<xsl:with-param name="id" select="'ID_1200'"/>
							</xsl:call-template>
						</td>
					</tr>
					<tr>
						<td align="center"> 1.3</td>
						<td> сума оплати перших п'яти днів тимчасової непрацездатності, що здійснюється за рахунок коштів роботодавця </td>
						<td align="right">
							<xsl:call-template name="body_id">
								<xsl:with-param name="id" select="'ID_1300'"/>
							</xsl:call-template>
						</td>
					</tr>
					<tr>
						<td align="center"> 1.4</td>
						<td> сума допомоги по тимчасовій непрацездатності, яка виплачується за рахунок коштів фондів соціального страхування, усього,  у тому числі:</td>
						<td align="right">
							<xsl:call-template name="body_id">
								<xsl:with-param name="id" select="'ID_1400'"/>
							</xsl:call-template>
						</td>
					</tr>
					<tr>
						<td align="center"> 1.4.1</td>
						<td> сума допомоги по тимчасовій непрацездатності, яка виплачується за рахунок коштів Фонду соціального страхування від нещасних
випадків на виробництві та професійних захворювань на виробництві</td>
						<td aight="center">
							<xsl:call-template name="body_id">
								<xsl:with-param name="id" select="'ID_1410'"/>
							</xsl:call-template>
						</td>
					</tr>
					<tr>
						<td align="center"> 1.5</td>
						<td> сума допомоги у зв'язку з вагітністю та пологами</td>
						<td align="right">
							<xsl:call-template name="body_id">
								<xsl:with-param name="id" select="'ID_1500'"/>
							</xsl:call-template>
						</td>
					</tr>
					<tr>
						<td align="center"> 2</td>
						<td> Сума нарахованої заробітної плати, винагород за виконану роботу (надані послуги) 
за цивільно-правовими договорами, оплати допомоги по тимчасовій непрацездатності та допомоги 
у зв’язку з вагітністю та пологами, на яку нараховується єдиний внесок, усього (р. 2.1 + р.2.2 + р. 2.3 + р. 2.4 + р. 2.5) </td>
						<td align="right">
							<xsl:call-template name="body_id">
								<xsl:with-param name="id" select="'ID_2000'"/>
							</xsl:call-template>
						</td>
					</tr>
					<tr>
						<td align="center"> 2.1</td>
						<td> Сума нарахованої заробітної плати, на яку нараховується єдиний внесок, усього     
 (р. 2.1.1 + р. 2.1.2 + р. 2.1.3 + р. 2.1.4 + р. 2.1.5 + р. 2.1.6+ р. 2.1.7) </td>
						<td align="right">
							<xsl:call-template name="body_id">
								<xsl:with-param name="id" select="'ID_2100'"/>
							</xsl:call-template>
						</td>
					</tr>
					<tr>
						<td align="center"> 2.1.1</td>
						<td> роботодавцями відповідно до класу професійного ризику виробництва (36,76 - 49,7%)</td>
						<td align="right">
							<xsl:call-template name="body_id">
								<xsl:with-param name="id" select="'ID_2110'"/>
							</xsl:call-template>
						</td>
					</tr>
					<tr>
						<td align="center"> 2.1.2</td>
						<td> бюджетними установами (36,3%)</td>
						<td align="right">
							<xsl:call-template name="body_id">
								<xsl:with-param name="id" select="'ID_2120'"/>
							</xsl:call-template>
						</td>
					</tr>
					<tr>
						<td align="center"> 2.1.3</td>
						<td>роботодавцями найманим працівникам із числа осіб льотних екіпажів повітряних  суден 
цивільної авіації (пілоти, штурмани, бортінженери, бортмеханіки, бортрадисти, льотчики-наглядачі) і бортоператорам, 
які  виконують спеціальні роботи в польотах  (45,96 %)</td>
						<td align="right">
							<xsl:call-template name="body_id">
								<xsl:with-param name="id" select="'ID_2130'"/>
							</xsl:call-template>
						</td>
					</tr>
					<tr>
						<td align="center"> 2.1.4</td>
						<td>підприємствами, установами і організаціями працюючим інвалідам (8,41 %)</td>
						<td align="right">
							<xsl:call-template name="body_id">
								<xsl:with-param name="id" select="'ID_2140'"/>
							</xsl:call-template>
						</td>
					</tr>
					<tr>
						<td align="center"> 2.1.5</td>
						<td>підприємствами та організаціями всеукраїнських громадських організацій інвалідів, зокрема товариствами УТОГ та УТОС (5,3 %)</td>
						<td align="right">
							<xsl:call-template name="body_id">
								<xsl:with-param name="id" select="'ID_2150'"/>
							</xsl:call-template>
						</td>
					</tr>
					<tr>
						<td align="center"> 2.1.6</td>
						<td>підприємствами та організаціями громадських організацій інвалідів (за умов, визначених частиною чотирнадцятою статті 8 Закону) працюючим інвалідам  (5,5 %)</td>
						<td align="right">
							<xsl:call-template name="body_id">
								<xsl:with-param name="id" select="'ID_2160'"/>
							</xsl:call-template>
						</td>
					</tr>
					<tr>
						<td align="center"> 2.1.7</td>
						<td>підприємствами суднобудівної промисловості (клас 30.11 групи 30.1 розділу 30, клас 33.15 групи 33.1 розділу 33 КВЕД ДК 009:2010)  (33,2 %)</td>
						<td align="right">
							<xsl:call-template name="body_id">
								<xsl:with-param name="id" select="'ID_2170'"/>
							</xsl:call-template>
						</td>
					</tr>
					<tr>
						<td align="center"> 2.2</td>
						<td>Сума винагород за виконані роботи (надані послуги) за цивільно-правовими договорами, усього  (р. 2.2.1 + р. 2.2.2 + р. 2.2.3)</td>
						<td align="right">
							<xsl:call-template name="body_id">
								<xsl:with-param name="id" select="'ID_2200'"/>
							</xsl:call-template>
						</td>
					</tr>
					<tr>
						<td align="center"> 2.2.1</td>
						<td>Сума винагород за виконані роботи (надані послуги) за цивільно-правовими договорами, 34,7 %</td>
						<td align="right">
							<xsl:call-template name="body_id">
								<xsl:with-param name="id" select="'ID_2210'"/>
							</xsl:call-template>
						</td>
					</tr>
					<tr>
						<td align="center"> 2.2.2</td>
						<td>Сума винагород за виконані роботи (надані послуги) за цивільно-правовими договорами, 
нарахована підприємствами та організаціями всеукраїнських громадських організацій інвалідів, зокрема товариствами УТОГ та УТОС  (5,3 %)</td>
						<td align="right">
							<xsl:call-template name="body_id">
								<xsl:with-param name="id" select="'ID_2220'"/>
							</xsl:call-template>
						</td>
					</tr>
					<tr>
						<td align="center"> 2.2.3</td>
						<td>Сума винагород за виконані роботи (надані послуги) за цивільно-правовими договорами, нарахована підприємствами суднобудівної промисловості (клас 30.11 групи 30.1 розділу 30,  клас 33.15 групи 33.1 розділу 33 КВЕД ДК 009:2010) (33,2 %)</td>
						<td align="right">
							<xsl:call-template name="body_id">
								<xsl:with-param name="id" select="'ID_2230'"/>
							</xsl:call-template>
						</td>
					</tr>
					<tr>
						<td align="center"> 2.3</td>
						<td>Сума допомоги по тимчасовій непрацездатності, усього (р. 2.3.1 + р. 2.3.2 + р.  2.3.3 + р. 2.3.4)</td>
						<td align="right">
							<xsl:call-template name="body_id">
								<xsl:with-param name="id" select="'ID_2300'"/>
							</xsl:call-template>
						</td>
					</tr>
					<tr>
						<td align="center"> 2.3.1</td>
						<td>Сума допомоги по тимчасовій непрацездатності, на яку нараховується єдиний внесок у розмірі  33,2 %</td>
						<td align="right">
							<xsl:call-template name="body_id">
								<xsl:with-param name="id" select="'ID_2310'"/>
							</xsl:call-template>
						</td>
					</tr>
					<tr>
						<td align="center"> 2.3.2</td>
						<td>Сума допомоги по тимчасовій непрацездатності, нарахована підприємствами, установами і організаціями працюючим інвалідам (8,41 %)</td>
						<td align="right">
							<xsl:call-template name="body_id">
								<xsl:with-param name="id" select="'ID_2320'"/>
							</xsl:call-template>
						</td>
					</tr>
					<tr>
						<td align="center"> 2.3.3</td>
						<td>Сума допомоги по тимчасовій непрацездатності, нарахована підприємствами та організаціями всеукраїнських громадських організацій інвалідів,
зокрема товариствами УТОГ та УТОС, (5,3%)</td>
						<td align="right">
							<xsl:call-template name="body_id">
								<xsl:with-param name="id" select="'ID_2330'"/>
							</xsl:call-template>
						</td>
					</tr>
					<tr>
						<td align="center"> 2.3.4</td>
						<td>Сума допомоги по тимчасовій непрацездатності, нарахована  підприємствами та організаціями громадських організацій інвалідів (за умов, визначених частиною чотирнадцятою статті 8 Закону) працюючим інвалідам (5,5 %)</td>
						<td align="right">
							<xsl:call-template name="body_id">
								<xsl:with-param name="id" select="'ID_2340'"/>
							</xsl:call-template>
						</td>
					</tr>
					<tr>
						<td align="center"> 2.4</td>
						<td>Cума допомоги у зв’язку з вагітністю та пологами  (р. 2.4.1 + р. 2.4.2 + р.  2.4.3 + р. 2.4.4)</td>
						<td align="right">
							<xsl:call-template name="body_id">
								<xsl:with-param name="id" select="'ID_2400'"/>
							</xsl:call-template>
						</td>
					</tr>
					<tr>
						<td align="center"> 2.4.1</td>
						<td>Cума допомоги у зв'язку з вагітністю та пологами, на яку нараховується єдиний внесок у розмірі  33,2 %</td>
						<td align="right">
							<xsl:call-template name="body_id">
								<xsl:with-param name="id" select="'ID_2410'"/>
							</xsl:call-template>
						</td>
					</tr>
					<tr>
						<td align="center"> 2.4.2</td>
						<td>Cума допомоги у зв'язку з вагітністю та пологами, нарахована підприємствами, установами і організаціями працюючим інвалідам (8,41 %)</td>
						<td align="right">
							<xsl:call-template name="body_id">
								<xsl:with-param name="id" select="'ID_2420'"/>
							</xsl:call-template>
						</td>
					</tr>
					<tr>
						<td align="center"> 2.4.3</td>
						<td>Cума допомоги у зв'язку з вагітністю та пологами, нарахована підприємствами та організаціями всеукраїнських громадських організацій інвалідів,
зокрема товариствами УТОГ та УТОС (5,3%)</td>
						<td align="right">
							<xsl:call-template name="body_id">
								<xsl:with-param name="id" select="'ID_2430'"/>
							</xsl:call-template>
						</td>
					</tr>
					<tr>
						<td align="center"> 2.4.4</td>
						<td>Cума допомоги у зв'язку з вагітністю та пологами, нарахована  підприємствами та організаціями громадських організацій інвалідів
 (за умов, визначених частиною чотирнадцятою статті 8 Закону) працюючим інвалідам (5,5%)</td>
						<td align="right">
							<xsl:call-template name="body_id">
								<xsl:with-param name="id" select="'ID_2440'"/>
							</xsl:call-template>
						</td>
					</tr>
							<tr>
						<td align="center"> 2.5</td>
						<td>Додаткова база нарахування єдиного внеску, усього (р. 2.5.1 + р. 2.5.2 + р. 2.5.3 + р. 2.5.4 + р.2.5.5)</td>
						<td align="right">
							<xsl:call-template name="body_id">
								<xsl:with-param name="id" select="'ID_2500'"/>
							</xsl:call-template>
						</td>
					</tr>
					<tr>
						<td align="center"> 2.5.1</td>
						<td>роботодавцями відповідно до класу професійного ризику виробництва (36,76 – 49,7 %)</td>
						<td align="right">
							<xsl:call-template name="body_id">
								<xsl:with-param name="id" select="'ID_2510'"/>
							</xsl:call-template>
						</td>
					</tr>
					<tr>
						<td align="center"> 2.5.2</td>
						<td>бюджетними установами (36,3 %)</td>
						<td align="right">
							<xsl:call-template name="body_id">
								<xsl:with-param name="id" select="'ID_2520'"/>
							</xsl:call-template>
						</td>
					</tr>
					<tr>
						<td align="center"> 2.5.3</td>
						<td>роботодавцями найманим працівникам із числа осіб льотних екіпажів повітряних суден цивільної
авіації (пілоти, штурмани, бортінженери, бортмеханіки, бортрадисти, льотчики-наглядачі) і
бортоператорам, які виконують спеціальні роботи в польотах (45,96 %)</td>
						<td align="right">
							<xsl:call-template name="body_id">
								<xsl:with-param name="id" select="'ID_2530'"/>
							</xsl:call-template>
						</td>
					</tr>
					<tr>
						<td align="center"> 2.5.4</td>
						<td>підприємствами суднобудівної промисловості (клас 30.11 групи 30.1 розділу 30, клас 33.15 групи 33.1
розділу 33 КВЕД ДК 009:2010) (33,2 %)</td>
						<td align="right">
							<xsl:call-template name="body_id">
								<xsl:with-param name="id" select="'ID_2540'"/>
							</xsl:call-template>
						</td>
					</tr>
							<tr>
						<td align="center"> 2.5.5</td>
						<td>сума допомоги по тимчасовій непрацездатності, сума допомоги у зв’язку з вагітністю та пологами, на
яку нараховується єдиний внесок у розмірі 33,2 %</td>
						<td align="right">
							<xsl:call-template name="body_id">
								<xsl:with-param name="id" select="'ID_2550'"/>
							</xsl:call-template>
						</td>
					</tr>
				
				
				
					<tr>
						<td align="center"> 3</td>
						<td>Нараховано єдиного внеску, усього  (р. 3.1 + р. 3.2 + р. 3.3 + р. 3.4 + р. 3.5)</td>
						<td align="right">
							<xsl:call-template name="body_id">
								<xsl:with-param name="id" select="'ID_3000'"/>
							</xsl:call-template>
						</td>
					</tr>
					<tr>
						<td align="center"> 3.1</td>
						<td>на суми заробітної плати, усього (р. 3.1.1 + р. 3.1.2 + р. 3.1.3 + р. 3.1.4 + р. 3.1.5 + р. 3.1.6 + р. 3.1.7)</td>
						<td align="right">
							<xsl:call-template name="body_id">
								<xsl:with-param name="id" select="'ID_3100'"/>
							</xsl:call-template>
						</td>
					</tr>
					<tr>
						<td align="center"> 3.1.1</td>
						<td>на суми заробітної плати, нарахованої роботодавцями, відповідно до класу професійного ризику виробництва (р. 2.1.1 х 
(36,76 %-49,7 %) х коефіцієнт)</td>
						<td align="right">
							<xsl:call-template name="body_id">
								<xsl:with-param name="id" select="'ID_3110'"/>
							</xsl:call-template>
						</td>
					</tr>
					<tr>
						<td align="center"> 3.1.2</td>
						<td>на суми заробітної плати, нарахованої бюджетними установами ((р. 2.1.2 х 36,3 %) х коефіцієнт)</td>
						<td align="right">
							<xsl:call-template name="body_id">
								<xsl:with-param name="id" select="'ID_3120'"/>
							</xsl:call-template>
						</td>
					</tr>
					<tr>
						<td align="center"> 3.1.3</td>
						<td>на суми заробітної плати, нарахованої роботодавцями найманим працівникам із числа осіб льотних екіпажів повітряних  суден цивільної авіації (пілоти, штурмани, бортінженери, бортмеханіки, бортрадисти, льотчики-наглядачі) і бортоператорам, які  виконують спеціальні роботи в польотах 
(р. 2.1.3 х 45,96 % х коефіцієнт)</td>
						<td align="right">
							<xsl:call-template name="body_id">
								<xsl:with-param name="id" select="'ID_3130'"/>
							</xsl:call-template>
						</td>
					</tr>
					<tr>
						<td align="center"> 3.1.4</td>
						<td>на суми заробітної плати, нарахованої підприємствами, установами і організаціями працюючим інвалідам (р. 2.1.4 х 8,41 %)</td>
						<td align="right">
							<xsl:call-template name="body_id">
								<xsl:with-param name="id" select="'ID_3140'"/>
							</xsl:call-template>
						</td>
					</tr>
					<tr>
						<td align="center"> 3.1.5</td>
						<td>на суми заробітної плати, нарахованої підприємствами та організаціями всеукраїнських громадських організацій інвалідів,
зокрема товариствами УТОГ та УТОС (р. 2.1.5 х 5,3 %)</td>
						<td align="right">
							<xsl:call-template name="body_id">
								<xsl:with-param name="id" select="'ID_3150'"/>
							</xsl:call-template>
						</td>
					</tr>
					<tr>
						<td align="center"> 3.1.6</td>
						<td>на суми заробітної плати, нарахованої  підприємствами та організаціями громадських організацій інвалідів (за умов,
визначених частиною чотирнадцятою статті 8 закону) працюючим інвалідам                  (р. 2.1.6 х 5,5 %)</td>
						<td align="right">
							<xsl:call-template name="body_id">
								<xsl:with-param name="id" select="'ID_3160'"/>
							</xsl:call-template>
						</td>
					</tr>
					<tr>
						<td align="center"> 3.1.7</td>
						<td>на суми заробітної плати, нарахованої підприємствами суднобудівної промисловості (клас 30.11 групи 30.1 розділу 30, клас 33.15 групи 33.1 розділу 33 КВЕД ДК 009:2010) 
(р. 2.1.7 х 33,2 % х коефіцієнт)</td>
						<td align="right">
							<xsl:call-template name="body_id">
								<xsl:with-param name="id" select="'ID_3170'"/>
							</xsl:call-template>
						</td>
					</tr>
					<tr>
						<td align="center"> 3.2</td>
						<td>на суми винагород за виконані роботи (надані послуги) за цивільно-правовими договорами, усього (р. 3.2.1 + р. 3.2.2  + р. 3.2.3)</td>
						<td align="right">
							<xsl:call-template name="body_id">
								<xsl:with-param name="id" select="'ID_3200'"/>
							</xsl:call-template>
						</td>
					</tr>
					<tr>
						<td align="center"> 3.2.1</td>
						<td>на суми винагород за виконані роботи (надані послуги) за цивільно-правовими договорами                           (р. 2.2.1 х 34,7 % х коефіцієнт)</td>
						<td align="right">
							<xsl:call-template name="body_id">
								<xsl:with-param name="id" select="'ID_3210'"/>
							</xsl:call-template>
						</td>
					</tr>
					<tr>
						<td align="center"> 3.2.2</td>
						<td>на суми винагород за виконані роботи (надані послуги) за цивільно-правовими договорами, нарахованих підприємствами та
 організаціями всеукраїнських громадських організацій інвалідів, зокрема товариствами УТОГ та УТОС  (р. 2.2.2 х 5,3%)</td>
						<td align="right">
							<xsl:call-template name="body_id">
								<xsl:with-param name="id" select="'ID_3220'"/>
							</xsl:call-template>
						</td>
					</tr>
					<tr>
						<td align="center"> 3.2.3</td>
						<td>на суми винагород за виконані роботи (надані послуги) за цивільно-правовими договорами, нарахованих  підприємствами суднобудівної промисловості (клас 30.11 групи 30.1 розділу 30, клас 33.15 групи 33.1 розділу 33 КВЕД ДК 009:2010) (р. 2.2.3 х 33,2 % х коефіцієнт)</td>
						<td align="right">
							<xsl:call-template name="body_id">
								<xsl:with-param name="id" select="'ID_3230'"/>
							</xsl:call-template>
						</td>
					</tr>
					<tr>
						<td align="center"> 3.3</td>
						<td>на суми допомоги по тимчасовій непрацездатності (р. 3.3.1 + р. 3.3.2 + р. 3.3.3 + р. 3.3.4)</td>
						<td align="right">
							<xsl:call-template name="body_id">
								<xsl:with-param name="id" select="'ID_3300'"/>
							</xsl:call-template>
						</td>
					</tr>
					<tr>
						<td align="center"> 3.3.1</td>
						<td>на суми допомоги по тимчасовій непрацездатності (р. 2.3.1 х 33,2 % х коефіцієнт)</td>
						<td align="right">
							<xsl:call-template name="body_id">
								<xsl:with-param name="id" select="'ID_3310'"/>
							</xsl:call-template>
						</td>
					</tr>
					<tr>
						<td align="center"> 3.3.2</td>
						<td>на суми допомоги по тимчасовій непрацездатності, нарахованої підприємствами, установами і організаціями працюючим інвалідам (р. 2.3.2 х 8,41 %)</td>
						<td align="right">
							<xsl:call-template name="body_id">
								<xsl:with-param name="id" select="'ID_3320'"/>
							</xsl:call-template>
						</td>
					</tr>
					<tr>
						<td align="center"> 3.3.3</td>
						<td>на суми допомоги по тимчасовій непрацездатності, нарахованої підприємствами та організаціями всеукраїнських громадських організацій інвалідів,
 зокрема товариствами УТОГ та УТОС                  (р. 2.3.3 х 5,3 %)</td>
						<td align="right">
							<xsl:call-template name="body_id">
								<xsl:with-param name="id" select="'ID_3330'"/>
							</xsl:call-template>
						</td>
					</tr>
					<tr>
						<td align="center"> 3.3.4</td>
						<td>на суми допомоги по тимчасовій непрацездатності, нарахованої  підприємствами та організаціями громадських організацій інвалідів
(за умов, визначених частиною чотирнадцятою статті 8 закону) працюючим інвалідам (р. 2.3.4 х 5,5 %)</td>
						<td align="right">
							<xsl:call-template name="body_id">
								<xsl:with-param name="id" select="'ID_3340'"/>
							</xsl:call-template>
						</td>
					</tr>
					<tr>
						<td align="center"> 3.4</td>
						<td>на суми допомоги у зв'язку з вагітністю та пологами  (р. 3.4.1 + р. 3.4.2 + р. 3.4.3 + р. 3.4.4)</td>
						<td align="right">
							<xsl:call-template name="body_id">
								<xsl:with-param name="id" select="'ID_3400'"/>
							</xsl:call-template>
						</td>
					</tr>
					<tr>
						<td align="center"> 3.4.1</td>
						<td>на суми допомоги у зв'язку з вагітністю та пологами (р. 2.4.1 х 33,2 %)</td>
						<td align="right">
							<xsl:call-template name="body_id">
								<xsl:with-param name="id" select="'ID_3410'"/>
							</xsl:call-template>
						</td>
					</tr>
					<tr>
						<td align="center"> 3.4.2</td>
						<td>на суми допомоги у зв'язку з вагітністю та пологами, нарахованої підприємствами, установами і організаціями працюючим інвалідам (р. 2.4.2 х 8,41 %)</td>
						<td align="right">
							<xsl:call-template name="body_id">
								<xsl:with-param name="id" select="'ID_3420'"/>
							</xsl:call-template>
						</td>
					</tr>
					<tr>
						<td align="center"> 3.4.3</td>
						<td>на суми допомоги у зв'язку з вагітністю та пологами, нарахованої підприємствами та організаціями всеукраїнських громадських організацій інвалідів,
зокрема товариствами УТОГ та УТОС  (р. 2.4.3 х 5,3 %)</td>
						<td align="right">
							<xsl:call-template name="body_id">
								<xsl:with-param name="id" select="'ID_3430'"/>
							</xsl:call-template>
						</td>
					</tr>
					<tr>
						<td align="center"> 3.4.4</td>
						<td>на суми допомоги у зв'язку з вагітністю та пологами, нарахованої  підприємствами та організаціями громадських організацій інвалідів
 (за умов, визначених частиною чотирнадцятою статті 8 Закону) працюючим інвалідам (р. 2.4.4 х 5,5 %)</td>
						<td align="right">
							<xsl:call-template name="body_id">
								<xsl:with-param name="id" select="'ID_3440'"/>
							</xsl:call-template>
						</td>
					</tr>
					<tr>
			    	<td align="center"> 3.5</td>
						<td>на суми додаткової бази нарахування єдиного внеску (р. 3.5.1 + р. 3.5.2 + р. 3.5.3 + р. 3.5.4 + р. 3.5.5)</td>
						<td align="right">
							<xsl:call-template name="body_id">
								<xsl:with-param name="id" select="'ID_3500'"/>
							</xsl:call-template>
						</td>
					</tr>
					<tr>
						<td align="center"> 3.5.1</td>
						<td>на суми різниці між розміром мінімальної заробітної плати та фактично нарахованої заробітної плати роботодавцями, відповідно до класу професійного ризику виробництва (р. 2.5.1 х (36,76 %-49,7 %))</td>
						<td align="right">
							<xsl:call-template name="body_id">
								<xsl:with-param name="id" select="'ID_3510'"/>
							</xsl:call-template>
						</td>
					</tr>
					<tr>
						<td align="center"> 3.5.2</td>
						<td>на суми різниці між розміром мінімальної заробітної плати та фактично нарахованої заробітної плати бюджетними установами (р. 2.5.2 х 36,3 %)</td>
						<td align="right">
							<xsl:call-template name="body_id">
								<xsl:with-param name="id" select="'ID_3520'"/>
							</xsl:call-template>
						</td>
					</tr>
					<tr>
						<td align="center"> 3.5.3</td>
						<td>на суми різниці між розміром мінімальної заробітної плати та фактично нарахованої заробітної плати роботодавцями найманим працівникам із числа осіб льотних екіпажів повітряних суден цивільної авіації (пілоти, штурмани, бортінженери, бортмеханіки, бортрадисти, льотчики-наглядачі) і бортоператорам, які виконують спеціальні роботи в польотах (р. 2.5.3 х 45,96 %)</td>
						<td align="right">
							<xsl:call-template name="body_id">
								<xsl:with-param name="id" select="'ID_3530'"/>
							</xsl:call-template>
						</td>
					</tr>
					<tr>
						<td align="center"> 3.5.4</td>
						<td>на суми різниці між розміром мінімальної заробітної плати та фактично нарахованої заробітної плати підприємствами суднобудівної промисловості (клас 30.11 групи 30.1 розділу 30, клас 33.15 групи 33.1 розділу 33 КВЕД ДК 009:2010) (р. 2.5.4 х 33,2 %)</td>
						<td align="right">
							<xsl:call-template name="body_id">
								<xsl:with-param name="id" select="'ID_3540'"/>
							</xsl:call-template>
						</td>
					</tr>
	<tr>
						<td align="center"> 3.5.5</td>
						<td>на суми допомоги у зв'язку з вагітністю та пологами, нарахованої  підприємствами та організаціями громадських організацій інвалідів
 (за умов, визначених частиною чотирнадцятою статті 8 Закону) працюючим інвалідам (р. 2.4.4 х 5,5 %)</td>
						<td align="right">
							<xsl:call-template name="body_id">
								<xsl:with-param name="id" select="'ID_3550'"/>
							</xsl:call-template>
						</td>
					</tr>
					<tr>
						<td align="center"> 4</td>
						<td>Сума нарахованої заробітної плати, винагород за виконану роботу (надані послуги) за цивільно-правовими договорами,
оплати допомоги по тимчасовій непрацездатності та допомоги у зв'язку з вагітністю та пологами, з якої утримано єдиний внесок,
 усього (р. 4.1 + р. 4.2 + р. 4.3 + р. 4.4) </td>
						<td align="right">
							<xsl:call-template name="body_id">
								<xsl:with-param name="id" select="'ID_4000'"/>
							</xsl:call-template>
						</td>
					</tr>
					<tr>
						<td align="center"> 4.1</td>
						<td>Сума заробітної плати застрахованих осіб, усього (р. 4.1.1 + р. 4.1.2 + р. 4.1.3)</td>
						<td align="right">
							<xsl:call-template name="body_id">
								<xsl:with-param name="id" select="'ID_4100'"/>
							</xsl:call-template>
						</td>
					</tr>
					<tr>
						<td align="center"> 4.1.1</td>
						<td>осіб, які працюють на умовах трудового договору (контракту) (3,6 %)</td>
						<td align="right">
							<xsl:call-template name="body_id">
								<xsl:with-param name="id" select="'ID_4110'"/>
							</xsl:call-template>
						</td>
					</tr>
					<tr>
						<td align="center"> 4.1.2</td>
						<td>найманих працівників - інвалідів, які працюють на підприємствах УТОГ, УТОС (2,85 %)</td>
						<td align="right">
							<xsl:call-template name="body_id">
								<xsl:with-param name="id" select="'ID_4120'"/>
							</xsl:call-template>
						</td>
					</tr>
					<tr>
						<td align="center"> 4.1.3</td>
						<td>працівників, які працюють на посадах, робота на яких зараховується до стажу, що дає право на одержання пенсії відповідно до окремих  законів України (6,1 %)</td>
						<td align="right">
							<xsl:call-template name="body_id">
								<xsl:with-param name="id" select="'ID_4130'"/>
							</xsl:call-template>
						</td>
					</tr>
					<tr>
						<td align="center"> 4.2</td>
						<td>Сума винагород за виконану роботу (надані послуги) за цивільно-правовими договорами, 2,6%  (відповідає значенню р. 2.2)</td>
						<td align="right">
							<xsl:call-template name="body_id">
								<xsl:with-param name="id" select="'ID_4200'"/>
							</xsl:call-template>
						</td>
					</tr>
					<tr>
						<td align="center"> 4.3</td>
						<td>Сума допомоги по тимчасовій непрацездатності, 2 % </td>
						<td align="right">
							<xsl:call-template name="body_id">
								<xsl:with-param name="id" select="'ID_4300'"/>
							</xsl:call-template>
						</td>
					</tr>
					<tr>
						<td align="center"> 4.4</td>
						<td>Cума допомоги у зв'язку з вагітністю та пологами (2 %)</td>
						<td align="right">
							<xsl:call-template name="body_id">
								<xsl:with-param name="id" select="'ID_4400'"/>
							</xsl:call-template>
						</td>
					</tr>
					<tr>
						<td align="center"> 5</td>
						<td>Утримано єдиного внеску, усього (р. 5.1 +  р. 5.2 +  р. 5.3 + р. 5.4 +  р. 5.5 +  р. 5.6) </td>
						<td align="right">
							<xsl:call-template name="body_id">
								<xsl:with-param name="id" select="'ID_5000'"/>
							</xsl:call-template>
						</td>
					</tr>
					<tr>
						<td align="center"> 5.1</td>
						<td>р. 4.1.1х 3,6 %</td>
						<td align="right">
							<xsl:call-template name="body_id">
								<xsl:with-param name="id" select="'ID_5100'"/>
							</xsl:call-template>
						</td>
					</tr>
					<tr>
						<td align="center"> 5.2</td>
						<td>р. 4.1.2 х 2,85 %</td>
						<td align="right">
							<xsl:call-template name="body_id">
								<xsl:with-param name="id" select="'ID_5200'"/>
							</xsl:call-template>
						</td>
					</tr>
					<tr>
						<td align="center"> 5.3</td>
						<td>р. 4.1.3 х 6,1%</td>
						<td align="right">
							<xsl:call-template name="body_id">
								<xsl:with-param name="id" select="'ID_5300'"/>
							</xsl:call-template>
						</td>
					</tr>
					<tr>
						<td align="center"> 5.4</td>
						<td>р. 4.2 х 2,6 %</td>
						<td align="right">
							<xsl:call-template name="body_id">
								<xsl:with-param name="id" select="'ID_5400'"/>
							</xsl:call-template>
						</td>
					</tr>
					<tr>
						<td align="center"> 5.5</td>
						<td>р. 4.3 х 2%</td>
						<td align="right">
							<xsl:call-template name="body_id">
								<xsl:with-param name="id" select="'ID_5500'"/>
							</xsl:call-template>
						</td>
					</tr>
					<tr>
						<td align="center"> 5.6</td>
						<td>р. 4.4 х 2%</td>
						<td align="right">
							<xsl:call-template name="body_id">
								<xsl:with-param name="id" select="'ID_5600'"/>
							</xsl:call-template>
						</td>
					</tr>
					<tr>
						<td align="center"> 6</td>
						<td>Донараховано та/або доутримано єдиного внеску у зв'язку з виправленням помилки, допущеної в попередніх звітних  періодах ( р. 6.1 + р. 6.2 + р. 6.3)</td>
						<td align="right">
							<xsl:call-template name="body_id">
								<xsl:with-param name="id" select="'ID_6000'"/>
							</xsl:call-template>
						</td>
					</tr>
					<tr>
						<td align="center"> 6.1</td>
						<td>Донараховано єдиного внеску (крім сум, зазначених у р. 6.2)</td>
						<td align="right">
							<xsl:call-template name="body_id">
								<xsl:with-param name="id" select="'ID_6100'"/>
							</xsl:call-template>
						</td>
					</tr>
					<tr>
						<td align="center"> 6.1.1</td>
						<td>36,76-49,7%</td>
						<td align="right">
							<xsl:call-template name="body_id">
								<xsl:with-param name="id" select="'ID_6110'"/>
							</xsl:call-template>
						</td>
					</tr>
					<tr>
						<td align="center"> 6.1.2</td>
						<td>36,3%</td>
						<td align="right">
							<xsl:call-template name="body_id">
								<xsl:with-param name="id" select="'ID_6120'"/>
							</xsl:call-template>
						</td>
					</tr>
					<tr>
						<td align="center"> 6.1.3</td>
						<td>45,96 %</td>
						<td align="right">
							<xsl:call-template name="body_id">
								<xsl:with-param name="id" select="'ID_6130'"/>
							</xsl:call-template>
						</td>
					</tr>
					<tr>
						<td align="center"> 6.1.4</td>
						<td>8,41%      </td>
						<td align="right">
							<xsl:call-template name="body_id">
								<xsl:with-param name="id" select="'ID_6140'"/>
							</xsl:call-template>
						</td>
					</tr>
					<tr>
						<td align="center"> 6.1.5</td>
						<td>5,3%</td>
						<td align="right">
							<xsl:call-template name="body_id">
								<xsl:with-param name="id" select="'ID_6150'"/>
							</xsl:call-template>
						</td>
					</tr>
					<tr>
						<td align="center"> 6.1.6</td>
						<td>5,5%      </td>
						<td align="right">
							<xsl:call-template name="body_id">
								<xsl:with-param name="id" select="'ID_6160'"/>
							</xsl:call-template>
						</td>
					</tr>
					<tr>
						<td align="center"> 6.1.7</td>
						<td>34,7%</td>
						<td align="right">
							<xsl:call-template name="body_id">
								<xsl:with-param name="id" select="'ID_6170'"/>
							</xsl:call-template>
						</td>
					</tr>
					<tr>
						<td align="center"> 6.1.8</td>
						<td>33,2 %, в т.ч. донараховано до мінімальної заробітної плати    </td>
						<td align="right">
							<xsl:call-template name="body_id">
								<xsl:with-param name="id" select="'ID_6180'"/>
							</xsl:call-template>
						</td>
					</tr>
					<tr>
						<td align="center"> 6.1.9</td>
						<td>36,76-49,7 % х коефіцієнт</td>
						<td align="right">
							<xsl:call-template name="body_id">
								<xsl:with-param name="id" select="'ID_6190'"/>
							</xsl:call-template>
						</td>
					</tr>
					<tr>
						<td align="center"> 6.1.10</td>
						<td>36,3 % х коефіцієнт</td>
						<td align="right">
							<xsl:call-template name="body_id">
								<xsl:with-param name="id" select="'ID_61100'"/>
							</xsl:call-template>
						</td>
					</tr>
					<tr>
						<td align="center"> 6.1.11</td>
						<td>45,96 % х коефіцієнта</td>
						<td align="right">
							<xsl:call-template name="body_id">
								<xsl:with-param name="id" select="'ID_61110'"/>
							</xsl:call-template>
						</td>
					</tr>
					<tr>
						<td align="center"> 6.1.12</td>
						<td>34,7 % х коефіцієнт</td>
						<td align="right">
							<xsl:call-template name="body_id">
								<xsl:with-param name="id" select="'ID_61120'"/>
							</xsl:call-template>
						</td>
					</tr>
					<tr>
						<td align="center"> 6.1.13</td>
						<td>33,2 % х коефіцієнт</td>
						<td align="right">
							<xsl:call-template name="body_id">
								<xsl:with-param name="id" select="'ID_61130'"/>
							</xsl:call-template>
						</td>
					</tr>
	
					<tr>
						<td align="center"> 6.2</td>
						<td>Донараховано єдиного внеску за попередні звітні періоди внаслідок збільшення класу професійного ризику виробництва</td>
						<td align="right">
							<xsl:call-template name="body_id">
								<xsl:with-param name="id" select="'ID_6200'"/>
							</xsl:call-template>
						</td>
					</tr>
					<tr>
						<td align="center"> 6.3</td>
						<td>Додатково утримано єдиного внеску   </td>
						<td align="right">
							<xsl:call-template name="body_id">
								<xsl:with-param name="id" select="'ID_6300'"/>
							</xsl:call-template>
						</td>
					</tr>
					<tr>
						<td align="center"> 6.3.1</td>
						<td>3,6 % </td>
						<td align="right">
							<xsl:call-template name="body_id">
								<xsl:with-param name="id" select="'ID_6310'"/>
							</xsl:call-template>
						</td>
					</tr>
					<tr>
						<td align="center"> 6.3.2</td>
						<td>2,85% </td>
						<td align="right">
							<xsl:call-template name="body_id">
								<xsl:with-param name="id" select="'ID_6320'"/>
							</xsl:call-template>
						</td>
					</tr>
					<tr>
						<td align="center"> 6.3.3</td>
						<td>6,1% </td>
						<td align="right">
							<xsl:call-template name="body_id">
								<xsl:with-param name="id" select="'ID_6330'"/>
							</xsl:call-template>
						</td>
					</tr>
					<tr>
						<td align="center"> 6.3.4</td>
						<td>2,6% </td>
						<td align="right">
							<xsl:call-template name="body_id">
								<xsl:with-param name="id" select="'ID_6340'"/>
							</xsl:call-template>
						</td>
					</tr>
					<tr>
						<td align="center"> 6.3.5</td>
						<td>2% </td>
						<td align="right">
							<xsl:call-template name="body_id">
								<xsl:with-param name="id" select="'ID_6350'"/>
							</xsl:call-template>
						</td>
					</tr>
					<tr>
						<td align="center"> 6.4</td>
						<td>Сума виплат, на яку донараховано єдиний  внесок </td>
						<td align="right">
							<xsl:call-template name="body_id">
								<xsl:with-param name="id" select="'ID_6400'"/>
							</xsl:call-template>
						</td>
					</tr>
					<tr>
						<td align="center"> 6.5</td>
						<td>Зміст помилки<br/>
							<xsl:element name="input">
								<xsl:attribute name="style">width:100%;</xsl:attribute>
								<xsl:attribute name="value"><xsl:value-of select="//DECLAR//*[name()='ERROR_TXT1']"/></xsl:attribute>
								<xsl:attribute name="id">ERROR_TXT1</xsl:attribute>
							</xsl:element>
						</td>
						<td align="right">
							<xsl:text disable-output-escaping="yes">&amp;nbsp;</xsl:text>
						</td>
					</tr>
					<tr>
						<td align="center"> 7</td>
						<td>Зменшено  суму єдиного внеску у зв'язку з виправленням помилки, допущеної в попередніх  звітних періодах  (р. 7.1 + р. 7.2 + р. 7.3)</td>
						<td align="right">
							<xsl:call-template name="body_id">
								<xsl:with-param name="id" select="'ID_7000'"/>
							</xsl:call-template>
						</td>
					</tr>
					<tr>
						<td align="center"> 7.1</td>
						<td>Зменшено нарахування (крім сум, зазначених у р. 7.2)</td>
						<td align="right">
							<xsl:call-template name="body_id">
								<xsl:with-param name="id" select="'ID_7100'"/>
							</xsl:call-template>
						</td>
					</tr>
					<tr>
						<td align="center"> 7.1.1</td>
						<td>36,76-49,7 %, в т.ч. зменшено виходячи з розміру мінімальної заробітної плати</td>
						<td align="right">
							<xsl:call-template name="body_id">
								<xsl:with-param name="id" select="'ID_7110'"/>
							</xsl:call-template>
						</td>
					</tr>
					<tr>
						<td align="center"> 7.1.2</td>
						<td>36,3 %, в т.ч. зменшено виходячи з розміру мінімальної заробітної плати</td>
						<td align="right">
							<xsl:call-template name="body_id">
								<xsl:with-param name="id" select="'ID_7120'"/>
							</xsl:call-template>
						</td>
					</tr>
					<tr>
						<td align="center"> 7.1.3</td>
						<td>45,96 %, в т.ч. зменшено виходячи з розміру мінімальної заробітної плати  </td>
						<td align="right">
							<xsl:call-template name="body_id">
								<xsl:with-param name="id" select="'ID_7130'"/>
							</xsl:call-template>
						</td>
					</tr>
					<tr>
						<td align="center"> 7.1.4</td>
						<td>8,41 %    </td>
						<td align="right">
							<xsl:call-template name="body_id">
								<xsl:with-param name="id" select="'ID_7140'"/>
							</xsl:call-template>
						</td>
					</tr>
					<tr>
						<td align="center"> 7.1.5</td>
						<td>5,3%   </td>
						<td align="right">
							<xsl:call-template name="body_id">
								<xsl:with-param name="id" select="'ID_7150'"/>
							</xsl:call-template>
						</td>
					</tr>
					<tr>
						<td align="center"> 7.1.6</td>
						<td>5,5%   </td>
						<td align="right">
							<xsl:call-template name="body_id">
								<xsl:with-param name="id" select="'ID_7160'"/>
							</xsl:call-template>
						</td>
					</tr>
					<tr>
						<td align="center"> 7.1.7</td>
						<td>34,7 % </td>
						<td align="right">
							<xsl:call-template name="body_id">
								<xsl:with-param name="id" select="'ID_7170'"/>
							</xsl:call-template>
						</td>
					</tr>
					<tr>
						<td align="center"> 7.1.8</td>
						<td>33,2 %, в т.ч. зменшено виходячи з розміру мінімальної заробітної плати</td>
						<td align="right">
							<xsl:call-template name="body_id">
								<xsl:with-param name="id" select="'ID_7180'"/>
							</xsl:call-template>
						</td>
					</tr>
									<tr>
						<td align="center"> 7.1.9</td>
						<td>36,76-49,7 % х коефіцієнт</td>
						<td align="right">
							<xsl:call-template name="body_id">
								<xsl:with-param name="id" select="'ID_7190'"/>
							</xsl:call-template>
						</td>
					</tr>
					<tr>
						<td align="center"> 7.1.10</td>
						<td>36,3 % х коефіцієнт</td>
						<td align="right">
							<xsl:call-template name="body_id">
								<xsl:with-param name="id" select="'ID_71100'"/>
							</xsl:call-template>
						</td>
					</tr>
					<tr>
						<td align="center">7.1.11</td>
						<td>45,96 % х коефіцієнта</td>
						<td align="right">
							<xsl:call-template name="body_id">
								<xsl:with-param name="id" select="'ID_71110'"/>
							</xsl:call-template>
						</td>
					</tr>
					<tr>
						<td align="center">7.1.12</td>
						<td>34,7 % х коефіцієнт</td>
						<td align="right">
							<xsl:call-template name="body_id">
								<xsl:with-param name="id" select="'ID_71120'"/>
							</xsl:call-template>
						</td>
					</tr>
					<tr>
						<td align="center"> 7.1.13</td>
						<td>33,2 % х коефіцієнт</td>
						<td align="right">
							<xsl:call-template name="body_id">
								<xsl:with-param name="id" select="'ID_71130'"/>
							</xsl:call-template>
						</td>
					</tr>
	
					<tr>
						<td align="center"> 7.2</td>
						<td>Зменшено суму єдиного внеску  за попередні звітні періоди внаслідок зменшення класу професійного ризику виробництва </td>
						<td align="right">
							<xsl:call-template name="body_id">
								<xsl:with-param name="id" select="'ID_7200'"/>
							</xsl:call-template>
						</td>
					</tr>
					<tr>
						<td align="center"> 7.3</td>
						<td>Зменшено утримань</td>
						<td align="right">
							<xsl:call-template name="body_id">
								<xsl:with-param name="id" select="'ID_7300'"/>
							</xsl:call-template>
						</td>
					</tr>
					<tr>
						<td align="center"> 7.3.1</td>
						<td>3,6 %</td>
						<td align="right">
							<xsl:call-template name="body_id">
								<xsl:with-param name="id" select="'ID_7310'"/>
							</xsl:call-template>
						</td>
					</tr>
					<tr>
						<td align="center"> 7.3.2</td>
						<td>2,85%</td>
						<td align="right">
							<xsl:call-template name="body_id">
								<xsl:with-param name="id" select="'ID_7320'"/>
							</xsl:call-template>
						</td>
					</tr>
					<tr>
						<td align="center"> 7.3.3</td>
						<td>6,1%</td>
						<td align="right">
							<xsl:call-template name="body_id">
								<xsl:with-param name="id" select="'ID_7330'"/>
							</xsl:call-template>
						</td>
					</tr>
					<tr>
						<td align="center"> 7.3.4</td>
						<td>2,6%</td>
						<td align="right">
							<xsl:call-template name="body_id">
								<xsl:with-param name="id" select="'ID_7340'"/>
							</xsl:call-template>
						</td>
					</tr>
					<tr>
						<td align="center"> 7.3.5</td>
						<td>2%</td>
						<td align="right">
							<xsl:call-template name="body_id">
								<xsl:with-param name="id" select="'ID_7350'"/>
							</xsl:call-template>
						</td>
					</tr>
					<tr>
						<td align="center"> 7.4</td>
						<td>Сума виплат, на яку зайво нараховано єдиний внесок</td>
						<td align="right">
							<xsl:call-template name="body_id">
								<xsl:with-param name="id" select="'ID_7400'"/>
							</xsl:call-template>
						</td>
					</tr>
					<tr>
						<td align="center">
							<xsl:text disable-output-escaping="yes">&amp;nbsp;</xsl:text>
						</td>
						<td>Зміст помилки<br/>
							<xsl:element name="input">
								<xsl:attribute name="style">width:100%;</xsl:attribute>
								<xsl:attribute name="value"><xsl:value-of select="//DECLAR//*[name()='ERROR_TXT2']"/></xsl:attribute>
								<xsl:attribute name="id">ERROR_TXT2</xsl:attribute>
							</xsl:element>
						</td>
						<td align="right">
							<xsl:text disable-output-escaping="yes">&amp;nbsp;</xsl:text>
						</td>
					</tr>
					<tr>
						<td align="center"> 8</td>
						<td>Загальна сума єдиного внеску, що підлягає сплаті,  всього (р. 3 + р. 5 + р. 6  - р. 7)</td>
						<td align="right">
							<xsl:call-template name="body_id">
								<xsl:with-param name="id" select="'ID_8000'"/>
							</xsl:call-template>
						</td>
					</tr>
					<tr>
						<td align="center">
							<xsl:text disable-output-escaping="yes">&amp;nbsp;</xsl:text>
						</td>
						<td>у тому числі</td>
						<td align="right">
							<xsl:text disable-output-escaping="yes">&amp;nbsp;</xsl:text>
						</td>
					</tr>
					<tr>
						<td align="center"> 8.1</td>
						<td>р. 3.1.1 + р. 3.5.1 + р. 6.1.1 + р. 6.1.9  – р. 7.1.1 – р. 7.1.9  (36,76–49,7 %) </td>
						<td align="right">
							<xsl:call-template name="body_id">
								<xsl:with-param name="id" select="'ID_8100'"/>
							</xsl:call-template>
						</td>
					</tr>
					<tr>
						<td align="center"> 8.2</td>
						<td>р. 3.1.2 + р. 3.5.2 + р. 6.1.2 + р. 6.1.10 – р. 7.1.2 – р. 7.1.10  (36,3 %) </td>
						<td align="right">
							<xsl:call-template name="body_id">
								<xsl:with-param name="id" select="'ID_8200'"/>
							</xsl:call-template>
						</td>
					</tr>
					<tr>
						<td align="center"> 8.3</td>
						<td>р. 3.1.3 + р. 3.5.3  + р. 6.1.3 + р. 6.1.11– р. 7.1.3 – р. 7.1.11  (45,96 %)</td>
						<td align="right">
							<xsl:call-template name="body_id">
								<xsl:with-param name="id" select="'ID_8300'"/>
							</xsl:call-template>
						</td>
					</tr>
					<tr>
						<td align="center"> 8.4</td>
						<td>р. 3.1.4 + р. 3.3.2 + р. 3.4.2 + р. 6.1.4 – р. 7.1.4  (8,41 %)</td>
						<td align="right">
							<xsl:call-template name="body_id">
								<xsl:with-param name="id" select="'ID_8400'"/>
							</xsl:call-template>
						</td>
					</tr>
					<tr>
						<td align="center"> 8.5</td>
						<td>р. 3.1.5 + р.3.2.2 + р. 3.3.3 + р. 3.4.3 + р. 6.1.5 – р. 7.1.5 (5,3 %) </td>
						<td align="right">
							<xsl:call-template name="body_id">
								<xsl:with-param name="id" select="'ID_8500'"/>
							</xsl:call-template>
						</td>
					</tr>
					<tr>
						<td align="center"> 8.6</td>
						<td>р. 3.1.6 + р. 3.3.4 + р. 3.4.4 + р. 6.1.6 – р. 7.1.6 (5,5 %)</td>
						<td align="right">
							<xsl:call-template name="body_id">
								<xsl:with-param name="id" select="'ID_8600'"/>
							</xsl:call-template>
						</td>
					</tr>
					<tr>
						<td align="center"> 8.7</td>
						<td>р. 3.2.1 + р. 6.1.7 + р. 6.1.12 – р. 7.1.7 – р. 7.1.12 (34,7 %) </td>
						<td align="right">
							<xsl:call-template name="body_id">
								<xsl:with-param name="id" select="'ID_8700'"/>
							</xsl:call-template>
						</td>
					</tr>
					<tr>
						<td align="center"> 8.8</td>
						<td>р. 3.1.7 + р. 3.2.3 + р. 3.3.1 + р. 3.4.1+ р. 3.5.4 + р. 3.5.5 + р. 6.1.8 + р. 6.1.13 – р. 7.1.8 - р. 7.1.13 (33,2 %)</td>
						<td align="right">
							<xsl:call-template name="body_id">
								<xsl:with-param name="id" select="'ID_8800'"/>
							</xsl:call-template>
						</td>
					</tr>
					<tr>
						<td align="center"> 8.9</td>
						<td>р. 5.1 + р. 6.3.1– р. 7.3.1 (3,6 %)</td>
						<td align="right">
							<xsl:call-template name="body_id">
								<xsl:with-param name="id" select="'ID_8900'"/>
							</xsl:call-template>
						</td>
					</tr>
					<tr>
						<td align="center"> 8.10</td>
						<td>р. 5.2 + р. 6.3.2 – р. 7.3.2 (2,85 %)</td>
						<td align="right">
							<xsl:call-template name="body_id">
								<xsl:with-param name="id" select="'ID_8110'"/>
							</xsl:call-template>
						</td>
					</tr>
					<tr>
						<td align="center"> 8.11</td>
						<td>р. 5.3 + р. 6.3.3 – р. 7.3.3 (6,1 %)</td>
						<td align="right">
							<xsl:call-template name="body_id">
								<xsl:with-param name="id" select="'ID_8120'"/>
							</xsl:call-template>
						</td>
					</tr>
					<tr>
						<td align="center"> 8.12</td>
						<td>р. 5.4 + р. 6.3.4 - р. 7.3.4 (2,6%)</td>
						<td align="right">
							<xsl:call-template name="body_id">
								<xsl:with-param name="id" select="'ID_8130'"/>
							</xsl:call-template>
						</td>
					</tr>
					<tr>
						<td align="center"> 8.13</td>
						<td>р. 5.5 + р. 5.6 + р. 6.3.5 – р. 7.3.5 (2 %) </td>
						<td align="right">
							<xsl:call-template name="body_id">
								<xsl:with-param name="id" select="'ID_8140'"/>
							</xsl:call-template>
						</td>
					</tr>
					<tr>
						<td align="center"> 8.14</td>
						<td>р. 6.2 - р. 7.2 </td>
						<td align="right">
							<xsl:call-template name="body_id">
								<xsl:with-param name="id" select="'ID_8150'"/>
							</xsl:call-template>
						</td>
					</tr>
				</table>
				* Для фізичних осіб, які мають відмітку в паспорті про право здійснювати будь-які платежі за серією та номером паспорта.
				<br/>
				<table width="40%" border="0">
					<tr>
						<td width="85%">Дата формування у страхувальника </td>
						<td width="10%" align="center" class="td_box">
							<xsl:call-template name="body_id">
								<xsl:with-param name="id" select="'DATA_FILL'"/>
							</xsl:call-template>
						</td>
					</tr>
				</table>
				<table width="100%" border="0">
					<tr>
						<td width="15%">Керівник  </td>
						<td width="5%">
							<xsl:text disable-output-escaping="yes">&amp;nbsp;</xsl:text>
						</td>
						<td width="15%" class="td_box">
							<xsl:call-template name="body_id">
								<xsl:with-param name="id" select="'BOSS_NUMIDENT'"/>
							</xsl:call-template>
						</td>
						<td width="5%">
							<xsl:text disable-output-escaping="yes">&amp;nbsp;</xsl:text>
						</td>
						<td width="10%" class="td_unln">
							<xsl:text disable-output-escaping="yes">&amp;nbsp;</xsl:text>
						</td>
						<td width="5%">
							<xsl:text disable-output-escaping="yes">&amp;nbsp;</xsl:text>
						</td>
						<td width="45%" class="td_box">
							<xsl:element name="input">
								<xsl:attribute name="style">width:100%;</xsl:attribute>
								<xsl:attribute name="value"><xsl:value-of select="//DECLAR//*[name()='FIRM_BOSS']"/></xsl:attribute>
								<xsl:attribute name="id">FIRM_BOSS</xsl:attribute>
							</xsl:element>
						</td>
					</tr>
					<tr>
						<td>
							<xsl:text disable-output-escaping="yes">&amp;nbsp;</xsl:text>
						</td>
						<td>
							<xsl:text disable-output-escaping="yes">&amp;nbsp;</xsl:text>
						</td>
						<td>(податковий  номер або серія та номер паспорта*)        </td>
						<td>
							<xsl:text disable-output-escaping="yes">&amp;nbsp;</xsl:text>
						</td>
						<td align="center">
							<font size="-1">(підпис)</font>
						</td>
						<td>
							<xsl:text disable-output-escaping="yes">&amp;nbsp;</xsl:text>
						</td>
						<td align="center">
							<font size="-1">(прізвище та ініціали) </font>
						</td>
					</tr>
					<tr>
						<td>
							<xsl:text disable-output-escaping="yes">&amp;nbsp;</xsl:text>
						</td>
						<td>
							<xsl:text disable-output-escaping="yes">&amp;nbsp;</xsl:text>
						</td>
						<td>
							<xsl:text disable-output-escaping="yes">&amp;nbsp;</xsl:text>
						</td>
						<td>
							<xsl:text disable-output-escaping="yes">&amp;nbsp;</xsl:text>
						</td>
						<td>
							<xsl:text disable-output-escaping="yes">&amp;nbsp;</xsl:text>
						</td>
					</tr>
					<tr>
						<td>Головний бухгалтер</td>
						<td>
							<xsl:text disable-output-escaping="yes">&amp;nbsp;</xsl:text>
						</td>
						<td class="td_box">
							<xsl:call-template name="body_id">
								<xsl:with-param name="id" select="'BUH_NUMIDENT'"/>
							</xsl:call-template>
						</td>
						<td>
							<xsl:text disable-output-escaping="yes">&amp;nbsp;</xsl:text>
						</td>
						<td class="td_unln">
							<xsl:text disable-output-escaping="yes">&amp;nbsp;</xsl:text>
						</td>
						<td>
							<xsl:text disable-output-escaping="yes">&amp;nbsp;</xsl:text>
						</td>
						<td class="td_box">
							<xsl:element name="input">
								<xsl:attribute name="style">width:100%;</xsl:attribute>
								<xsl:attribute name="value"><xsl:value-of select="//DECLAR//*[name()='FIRM_BUH']"/></xsl:attribute>
								<xsl:attribute name="id">FIRM_BUH</xsl:attribute>
							</xsl:element>
						</td>
					</tr>
					<tr>
						<td>
							<xsl:text disable-output-escaping="yes">&amp;nbsp;</xsl:text>
						</td>
						<td>
							<xsl:text disable-output-escaping="yes">&amp;nbsp;</xsl:text>
						</td><td>
						(податковий  номер або серія та номер паспорта*)      </td>
						<td>
							<xsl:text disable-output-escaping="yes">&amp;nbsp;</xsl:text>
						</td>
						<td align="center">
							<font size="-1">(підпис)</font>
						</td>
						<td>
							<xsl:text disable-output-escaping="yes">&amp;nbsp;</xsl:text>
						</td>
						<td align="center">
							<font size="-1">(прізвище та ініціали) </font>
						</td>
					</tr>
				</table>
				<br/>
				<table width="100%">
					<tr align="center">
						<td>М.П. (за наявності)</td>
					</tr>
				</table>
				<br/>
				<table width="100%" border="0">
					<tr>
						<td align="center">Додаток до таблиці 1 звіту за _______місяць _____ року</td>
					</tr>
				</table>
				<table width="80%" border="0">
					<tr>
						<td width="80%">Сума заборгованості з виплати заробітної плати на початок звітного періоду</td>
						<td width="20%" align="right">
							<xsl:call-template name="body_id">
								<xsl:with-param name="id" select="'ID_1103'"/>
							</xsl:call-template>  грн.</td>
					</tr>
					<tr>
						<td width="80%">Сума заборгованості з виплати заробітної плати на кінець звітного періоду</td>
						<td width="20%" align="right">
							<xsl:call-template name="body_id">
								<xsl:with-param name="id" select="'ID_1104'"/>
							</xsl:call-template>  грн.</td>
					</tr>
				</table>
				
				<table width="100%" border="0">
					<tr>
						<td width="30%">Виплачено заробітної плати усього  </td>
						<td width="20%" align="right">
							<xsl:call-template name="body_id">
								<xsl:with-param name="id" select="'ID_1117'"/>
							</xsl:call-template>  грн.,</td>
						<td width="30%">у т.ч. у натуральній формі </td>
						<td width="20%" align="right">
							<xsl:call-template name="body_id">
								<xsl:with-param name="id" select="'ID_1118'"/>
							</xsl:call-template>  грн.</td>
					</tr>
					<tr>
						<td colspan="3">у т.ч.: виплачено у звітному періоді заробітної плати та інших виплат і винагород особам, які працюють на умовах трудового договору
 (контракту) або на інших умовах, передбачених законодавством, чи за цивільно-правовими договорами, нарахованих за період до 01.01.2011  </td>
						<td width="20%" align="right">
							<xsl:call-template name="body_id">
								<xsl:with-param name="id" select="'ID_1122'"/>
							</xsl:call-template>  грн.</td>
					</tr>
					<tr>
						<td colspan="3">у т.ч.: виплачено у звітному періоді заробітної плати та інших виплат і винагород особам, які працюють на умовах трудового договору
(контракту) або на інших умовах, передбачених законодавством, чи за цивільно-правовими договорами, нарахованих за період до 01.01.2004   </td>
						<td width="20%" align="right">
							<xsl:call-template name="body_id">
								<xsl:with-param name="id" select="'ID_1123'"/>
							</xsl:call-template>  грн.</td>
					</tr>
				</table>
				<table width="100%" border="0">
					<tr>
						<td colspan="2">1. Належить до сплати нарахованих за період до 01.01.2011: </td>
					</tr>
					<tr>
						<td width="80%">1.1. Страхових внесків до Фонду соціального страхування від нещасних випадків на виробництві та професійних захворювань України  </td>
						<td width="20%" align="right">
							<xsl:call-template name="body_id">
								<xsl:with-param name="id" select="'ID_1124'"/>
							</xsl:call-template>  грн.</td>
					</tr>
					<tr>
						<td>1.2. Страхових внесків до Фонду соціального страхування з тимчасової втрати працездатності </td>
						<td align="right">
							<xsl:call-template name="body_id">
								<xsl:with-param name="id" select="'ID_1125'"/>
							</xsl:call-template>  грн.</td>
					</tr>
					<tr>
						<td>1.3. Страхових внесків до Фонду соціального страхування на випадок безробіття  </td>
						<td align="right">
							<xsl:call-template name="body_id">
								<xsl:with-param name="id" select="'ID_1126'"/>
							</xsl:call-template>  грн.</td>
					</tr>
					<tr>
						<td>2. Належить до сплати збору на обов'язкове державне пенсійне страхування, нарахованого за період до 01.01.2004 , </td>
						<td align="right">
							<xsl:call-template name="body_id">
								<xsl:with-param name="id" select="'ID_1127'"/>
							</xsl:call-template>  грн.*</td>
					</tr>
				</table>
				<table width="100%" border="0">
					<tr>
						<td colspan="2">3.  Виправлення помилок, допущених при нарахуванні внесків на загальнообов'язкове державне пенсійне страхування за період до 01.01.2011: </td>
					</tr>
					<tr>
						<td width="80%">3.1. Сума, на яку збільшено внески у зв'язку з виправленням помилки, у т.ч. </td>
						<td width="20%" align="right">
							<xsl:call-template name="body_id">
								<xsl:with-param name="id" select="'ID_1039'"/>
							</xsl:call-template>  грн.</td>
					</tr>
					<tr>
						<td>3.1.1. 32%; 32,3%; 31,8%; 33,2%; 4%; 42%; 6,4%; 6,46%; 13,28%; 19,92%; 26,56% </td>
						<td align="right">
							<xsl:call-template name="body_id">
								<xsl:with-param name="id" select="'ID_1040'"/>
							</xsl:call-template>  грн.</td>
					</tr>
					<tr>
						<td>3.1.2. 0,5 - 5 %  </td>
						<td align="right">
							<xsl:call-template name="body_id">
								<xsl:with-param name="id" select="'ID_1041'"/>
							</xsl:call-template>  грн.</td>
					</tr>
					<tr>
						<td>3.2. Сума виплати (заробітної плати, доходу), на яку донараховані страхові внески, </td>
						<td align="right">
							<xsl:call-template name="body_id">
								<xsl:with-param name="id" select="'ID_1060'"/>
							</xsl:call-template>  грн.</td>
					</tr>
					<tr>
						<td>3.3. Сума, на яку зменшено внески у зв'язку з виправленням помилки, у т.ч.</td>
						<td align="right">
							<xsl:call-template name="body_id">
								<xsl:with-param name="id" select="'ID_1042'"/>
							</xsl:call-template>  грн.</td>
					</tr>
					<tr>
						<td>3.3.1. 32%; 32,3%; 31,8%; 33,2%; 4%; 42%; 6,4%; 6,46%; 13,28%; 19,92%; 26,56% </td>
						<td align="right">
							<xsl:call-template name="body_id">
								<xsl:with-param name="id" select="'ID_1043'"/>
							</xsl:call-template>  грн.</td>
					</tr>
					<tr>
						<td>3.3.2. 0,5 - 5 %</td>
						<td align="right">
							<xsl:call-template name="body_id">
								<xsl:with-param name="id" select="'ID_1044'"/>
							</xsl:call-template>  грн.</td>
					</tr>
					<tr>
						<td>3.4. Сума виплати (заробітної плати, доходу), на яку зайво нараховані страхові внески,</td>
						<td align="right">
							<xsl:call-template name="body_id">
								<xsl:with-param name="id" select="'ID_1061'"/>
							</xsl:call-template>  грн.</td>
					</tr>
				</table>
				<table width="100%" border="0">
					<tr>
						<td >3.5. Виправлення допущеної помилки потребує змін        
 у персоніфікованому обліку застрахованих осіб  так (1) /ні (0) </td>
<td  align="center" class="td_box">
<xsl:call-template name="body_id">
								<xsl:with-param name="id" select="'ZM_SPOV'"/>
							</xsl:call-template>						
						</td>	
					</tr>
					
				</table>
				<table width="100%" border="0">
					<tr>
						<td>3.6. Зміст помилки  </td>
					</tr>
					<tr>
						<td>
							<xsl:element name="input">
								<xsl:attribute name="style">width:100%;</xsl:attribute>
								<xsl:attribute name="value"><xsl:value-of select="//DECLAR//*[name()='ERROR_TXT3']"/></xsl:attribute>
								<xsl:attribute name="id">ERROR_TXT3</xsl:attribute>
							</xsl:element>
						</td>
					</tr>
				</table>
				<table width="60%" border="0">
					<tr>
						<td colspan="2">4. Встановлені строки виплати заробітної плати:</td>
					</tr>
					<tr>
						<td width="30%">за першу половину місяця </td>
						<td width="10%" class="td_box" align="center">
							<xsl:call-template name="body_id">
								<xsl:with-param name="id" select="'VUPL_ZP1'"/>
							</xsl:call-template>
						</td>
					</tr>
					<tr>
						<td width="30%">за другу половину місяця   </td>
						<td width="10%" class="td_box" align="center">
							<xsl:call-template name="body_id">
								<xsl:with-param name="id" select="'VUPL_ZP2'"/>
							</xsl:call-template>
						</td>
					</tr>
				</table>
				<table width="100%" border="0">
					<tr>
						<td>Головний бухгалтер</td>
						<td>
							<xsl:text disable-output-escaping="yes">&amp;nbsp;</xsl:text>
						</td>
						<td class="td_unln">
							<xsl:text disable-output-escaping="yes">&amp;nbsp;</xsl:text>
						</td>
						<td>
							<xsl:text disable-output-escaping="yes">&amp;nbsp;</xsl:text>
						</td>
						<td class="td_unln">
							<xsl:text disable-output-escaping="yes">&amp;nbsp;</xsl:text>
						</td>
					</tr>
					<tr>
						<td>
							<xsl:text disable-output-escaping="yes">&amp;nbsp;</xsl:text>
						</td>
						<td>
							<xsl:text disable-output-escaping="yes">&amp;nbsp;</xsl:text>
						</td>
						<td align="center">
							<font size="-1">(підпис)</font>
						</td>
						<td>
							<xsl:text disable-output-escaping="yes">&amp;nbsp;</xsl:text>
						</td>
						<td align="center">
							<font size="-1">(ініціали та прізвище)  </font>
						</td>
					</tr>
				</table>
				<br/>
				<table width="100%">
					<tr>
						<td>* Заповнюється платниками єдиного внеску, які мають заборгованість за розрахунками з Пенсійним фондом на 01.01.2004. <br/>
Примітка : Суми, зазначені у пунктах 1 та 2, підлягають сплаті окремо на рахунки фондів соціального страхування та Пенсійного фонду України.
</td>
					</tr>
				</table>
			</body>
		</html>
	</xsl:template>
	<xsl:template name="body_id">
		<xsl:param name="id"/>
		<xsl:param name="tCss"/>
		<input type="textbox">
			<xsl:attribute name="value"><xsl:value-of select="//DECLAR//*[name()=$id]"/></xsl:attribute>
			<xsl:attribute name="id"><xsl:value-of select="$id"/></xsl:attribute>
			<xsl:attribute name="class"><xsl:choose><xsl:when test="$tCss='edCss'"><xsl:text>edCss</xsl:text></xsl:when><xsl:otherwise><xsl:text>edtCss</xsl:text></xsl:otherwise></xsl:choose></xsl:attribute>
		</input>
	</xsl:template>
	<xsl:template name="prn_id">
		<xsl:param name="id"/>
		<xsl:param name="zn"/>
		<xsl:param name="rownum"/>
		<xsl:param name="tCss"/>
		<input type="textbox">
			<xsl:attribute name="value"><xsl:value-of select="$zn"/></xsl:attribute>
			<xsl:attribute name="id"><xsl:value-of select="$id"/></xsl:attribute>
			<xsl:attribute name="class"><xsl:choose><xsl:when test="string-length($tCss)>0"><xsl:value-of select="$tCss"/></xsl:when><xsl:otherwise><xsl:text>edtCss</xsl:text></xsl:otherwise></xsl:choose></xsl:attribute>
			<xsl:if test="string-length($rownum)>0">
				<xsl:attribute name="rownum"><xsl:value-of select="$rownum"/></xsl:attribute>
			</xsl:if>
		</input>
	</xsl:template>
</xsl:stylesheet>
