<?xml version="1.0" encoding="windows-1251"?>
<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
	<xsl:output method="html" encoding="windows-1251"/>
	<xsl:template match="DECLAR">
		<html>
			<head>
				<title>E04T01I - "������� 1. ����������� ������� ������"</title>
				<link HREF="./css/xsl_edit_styles.css" REL="stylesheet"/>
				<script SRC="./PrepareEditDoc.js"/>
			</head>
			<body>
				<table width="100%" border="0">
					<tr>
						<td width="15%" align="right">� ������ ���� </td>
						<td width="20%" class="td_box">
							<xsl:call-template name="body_id">
								<xsl:with-param name="id" select="'PAGE_NUM'"/>
							</xsl:call-template>
						</td>
					</tr>
				</table>
				<table width="70%" border="0">
					<tr>
						<td width="25%">1. ��� �� �����</td>
						<td width="5%" class="td_box">
							<xsl:call-template name="body_id">
								<xsl:with-param name="id" select="'PERIOD_MONTH'"/>
							</xsl:call-template>
						</td>
						<td width="15%" align="right">P��:</td>
						<td width="5%" class="td_box">
							<xsl:call-template name="body_id">
								<xsl:with-param name="id" select="'PERIOD_YEAR'"/>
							</xsl:call-template>
						</td>
					</tr>
				</table>
				<table width="100%" border="0">
					<tr>
						<td width="35%">2. ��� �� ������/ ������������ ����� ������� ������ �������� �������   </td>
						<td class="td_box">
							<xsl:call-template name="body_id">
								<xsl:with-param name="id" select="'FIRM_EDRPOU'"/>
							</xsl:call-template>
						</td></tr>
						<tr>
						<td width="35%">3. ��� �� ������ ��� ���������� �����/���� �� ����� �������� ����������� ��������������*
(������������ � ��� ������ ���� ����������������) </td>
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
							<b>������������� </b>
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
						<td align="center">(������������ �������������� ��� �������, ��'�, 
�� ������� - ��� ������� ����� � ��������, �����, ��� ��������� ��������� ��������� ��������)</td>
					</tr>
				</table>
				<table width="100%" border="0" cellspacing="4">
					<tr>
						<td width="60%"><b>4. ��� ��������� ���� ��������� ��������  �������� �� ����� ����������� ���� ����������� ������ </b></td>
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
							<b>5. ���� ����������� ������ ����������� </b>
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
							<b>6. �������� �������� </b>
						</td>
						<td width="10%" align="center" class="td_box">
							<xsl:call-template name="body_id">
								<xsl:with-param name="id" select="'BUDGET_UST'"/>
							</xsl:call-template>
						</td>
						<td width="25%"><b>16. ʳ������ ��������� ����� ������� ���� � ������� �����</b> </td>
						<td width="10%" align="center" class="td_box">
							<xsl:call-template name="body_id">
								<xsl:with-param name="id" select="'ID_1128'"/>
							</xsl:call-template>
						</td>
					</tr>
					<tr>
						<td width="25%">
							<b>7. ϳ���������, ���������� ������������ ���������� ���������� �������, �������  ��������� ����,  ���� </b>
						</td>
						<td width="10%" align="center" class="td_box">
							<xsl:call-template name="body_id">
								<xsl:with-param name="id" select="'UTOGS'"/>
							</xsl:call-template>
						</td>
						<td width="25%"><b>17. ������������ ����������� </b></td>
						<td  align="center" class="td_box">
							<div id="ZAST_KOEF" style="padding:10px;"><input type="checkbox" onclick="SelectEFormType();" style="margin:2px;">
									<xsl:if test="//DECLARBODY//*[name()='ZAST_KOEF'][.='1']">
										<xsl:attribute name="checked">true</xsl:attribute>
									</xsl:if>���</input>
								<input type="checkbox" onclick="SelectEFormType();" style="margin:2px;">
									<xsl:if test="//DECLARBODY//*[name()='ZAST_KOEF'][.='0']">
										<xsl:attribute name="checked">true</xsl:attribute>
									</xsl:if>Ͳ</input>
							<br/>
							</div>
						</td>
					</tr>
					<tr>
						<td width="25%">
							<b>8. ϳ���������, ���������� ����������  ���������� �������       </b>
						</td>
						<td width="10%" align="center" class="td_box">
							<xsl:call-template name="body_id">
								<xsl:with-param name="id" select="'ORG_INV'"/>
							</xsl:call-template>
						</td>
						<td width="25%"><b>18. ����� ����������� (�� 0,400 �� 0,999)</b></td>
						<td width="10%" align="center" class="td_box">
							<xsl:call-template name="body_id">
								<xsl:with-param name="id" select="'ROZM_KOEF'"/>
							</xsl:call-template>
						</td>
					</tr>
					<tr>
						<td width="25%">
							<b>9. ϳ��������� ����������� ������������ </b>
							<br/>
(���� 30.11 ����� 30.1 ����� 30, ���� 33.15 ����� 33.1 ����� 33 ���� �� 009:2010)</td>
						<td width="10%" align="center" class="td_box">
							<xsl:call-template name="body_id">
								<xsl:with-param name="id" select="'ORG_SP'"/>
							</xsl:call-template>
						</td>
					<td width="25%"><b>19. ������� �������� ����� �� 2014 �� </b></td>
						<td width="10%" align="center" class="td_box">
							<xsl:call-template name="body_id">
								<xsl:with-param name="id" select="'SER_ZP'"/>
							</xsl:call-template> ���.
						</td>
					</tr>
					<tr>
						<td width="25%" colspan="2"> (�������� "�" ��������� � ������� ���������� �������)  </td>
						<td width="25%"><b>20. �������������� ������� ������������� ��� �� 2014 �� </b></td>
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
							<b>10. ̳���������, �����  ����������� ����� ��������� ����� </b>
						</td>
						<td width="30%" align="center" class="td_box">
							<xsl:call-template name="body_id">
								<xsl:with-param name="id" select="'FIRM_MIN'"/>
							</xsl:call-template>
						</td>
						<td width="25%"><b>21. ��������������� ������� �������  ���������� �� ������ �����, ��� </b></td>
						<td width="10%" align="center" class="td_box">
							<xsl:call-template name="body_id">
								<xsl:with-param name="id" select="'ID_1012'"/>
							</xsl:call-template>
						</td>
					</tr>
					<tr>
						<td>
							<b>11. ̳�������������� (���� ����������) </b>
						</td>
						<td>
							<xsl:element name="input">
								<xsl:attribute name="style">width:100%;</xsl:attribute>
								<xsl:attribute name="value"><xsl:value-of select="//DECLAR/*[name()='FIRM_ADR']"/></xsl:attribute>
								<xsl:attribute name="id">FIRM_ADR</xsl:attribute>
							</xsl:element>
						</td>
						<td><b>� ���� ����:  <br/>
 ����������,  ���� �������� �� ������� ������������� ����������� ����������, ��� </b></td>
						<td align="center" class="td_box">
							<xsl:call-template name="body_id">
								<xsl:with-param name="id" select="'ID_1121'"/>
							</xsl:call-template>
						</td>
					</tr>
					<tr>
						<td>
							<b>���. _  </b>
						</td>
						<td>
							<xsl:call-template name="body_id">
								<xsl:with-param name="id" select="'FIRM_PHON'"/>
							</xsl:call-template>
						</td>
						<td><b>����������, �� ����� �������� ������ � ������� ���������������� </b></td>
						<td align="center" class="td_box">
							<xsl:call-template name="body_id">
								<xsl:with-param name="id" select="'ID_1129'"/>
							</xsl:call-template>
						</td>
					</tr>
					<tr>
						<td>
							<b>12.������������-������� ����� �������������� </b>
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
							<b>13. � ��������� ��������������</b>
						</td>
						<td>
							<xsl:call-template name="body_id">
								<xsl:with-param name="id" select="'FIRM_PENS'"/>
							</xsl:call-template>
						</td>
						<td><b>������ ���������� ����������</b>  </td>
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
						<td><b>ʳ������ ���, �� ���������� ������ (�������� �������) �� ���������� �������-���������  ��������� </b></td>
						<td align="center" class="td_box">
							<xsl:call-template name="body_id">
								<xsl:with-param name="id" select="'ID_1013'"/>
							</xsl:call-template>
						</td>
					</tr>
					<tr>
						<td>
							<b>14.������������ ����� </b>
						</td>
						<td>
							<xsl:element name="input">
								<xsl:attribute name="style">width:100%;</xsl:attribute>
								<xsl:attribute name="value"><xsl:value-of select="//DECLAR//*[name()='FIRM_NMBANK']"/></xsl:attribute>
								<xsl:attribute name="id">FIRM_NMBANK</xsl:attribute>
							</xsl:element>
						</td>
						<td><b>ʳ������ ������������� ��� � ������� �����, ����  ��������� ������� </b>  </td>
						<td align="center">
							<xsl:call-template name="body_id">
								<xsl:with-param name="id" select="'ID_1014'"/>
							</xsl:call-template>
						</td>
					</tr>
					<tr>
						<td>
							<b>15. ���  </b>
						</td>
						<td class="td_box">
							<xsl:call-template name="body_id">
								<xsl:with-param name="id" select="'FIRM_CBANK'"/>
							</xsl:call-template>
						</td>
						<td><b>� ���� ����: <br/> �������</b> </td>
						<td align="center" class="td_box">
							<xsl:call-template name="body_id">
								<xsl:with-param name="id" select="'ID_1015'"/>
							</xsl:call-template>
						</td>
					</tr>
					<tr>
						<td>
							<b>� �/�������   </b>
						</td>
						<td>
							<xsl:call-template name="body_id">
								<xsl:with-param name="id" select="'FIRM_RS'"/>
							</xsl:call-template>
						</td>
						<td><b>���� </b></td>
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
							<i>(��������� ������� ���������� ������������ � ����� ��������) </i>
						</td>
					</tr>
					<tr>
						<td>
							<xsl:text disable-output-escaping="yes">&amp;nbsp;</xsl:text>
						</td>
						<td>
							<xsl:text disable-output-escaping="yes">&amp;nbsp;</xsl:text>
						</td>
					<!--	<td>������ ������� �������������  </td>
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
							<b>������� 1. ����������� ������� ������</b>
						</td>
					</tr>
				</table>
				<table border="1" width="100%" cellspacing="0" bordercolor="black">
					<tr>
						<td width="5%" align="center"> � �/�</td>
						<td width="85%" align="center"> ����� ���������</td>
						<td width="10%" align="center"> ���� (���.)</td>
					</tr>
					<tr>
						<td align="center"> 1 </td>
						<td align="center"> 2 </td>
						<td align="center"> 3 </td>
					</tr>
					<tr>
						<td align="center"> 1</td>
						<td>�������� ���� ���������� �������� �����, ��������� �� �������� ������ 
(����� �������) �� �������-��������� ����������, ������ �������� �� ��������� ��������������� 
�� �������� � ������ � �������� �� ��������, ������ (�.1.1 + �. 1.2 + �. 1.3 + �. 1.4 + �. 1.5)                   </td>
						<td align="right">
							<xsl:call-template name="body_id">
								<xsl:with-param name="id" select="'ID_1000'"/>
							</xsl:call-template>
						</td>
					</tr>
					<tr>
						<td align="center"> 1.1</td>
						<td> ���� ���������� �������� �����  </td>
						<td align="right">
							<xsl:call-template name="body_id">
								<xsl:with-param name="id" select="'ID_1100'"/>
							</xsl:call-template>
						</td>
					</tr>
					<tr>
						<td align="center"> 1.2</td>
						<td> ���� ��������� �� ���������� �������-��������� ��������� </td>
						<td align="right">
							<xsl:call-template name="body_id">
								<xsl:with-param name="id" select="'ID_1200'"/>
							</xsl:call-template>
						</td>
					</tr>
					<tr>
						<td align="center"> 1.3</td>
						<td> ���� ������ ������ �'��� ��� ��������� ���������������, �� ����������� �� ������� ����� ����������� </td>
						<td align="right">
							<xsl:call-template name="body_id">
								<xsl:with-param name="id" select="'ID_1300'"/>
							</xsl:call-template>
						</td>
					</tr>
					<tr>
						<td align="center"> 1.4</td>
						<td> ���� �������� �� ��������� ���������������, ��� ����������� �� ������� ����� ����� ����������� �����������, ������,  � ���� ����:</td>
						<td align="right">
							<xsl:call-template name="body_id">
								<xsl:with-param name="id" select="'ID_1400'"/>
							</xsl:call-template>
						</td>
					</tr>
					<tr>
						<td align="center"> 1.4.1</td>
						<td> ���� �������� �� ��������� ���������������, ��� ����������� �� ������� ����� ����� ����������� ����������� �� ��������
������� �� ���������� �� ���������� ����������� �� ����������</td>
						<td aight="center">
							<xsl:call-template name="body_id">
								<xsl:with-param name="id" select="'ID_1410'"/>
							</xsl:call-template>
						</td>
					</tr>
					<tr>
						<td align="center"> 1.5</td>
						<td> ���� �������� � ��'���� � �������� �� ��������</td>
						<td align="right">
							<xsl:call-template name="body_id">
								<xsl:with-param name="id" select="'ID_1500'"/>
							</xsl:call-template>
						</td>
					</tr>
					<tr>
						<td align="center"> 2</td>
						<td> ���� ���������� �������� �����, ��������� �� �������� ������ (����� �������) 
�� �������-��������� ����������, ������ �������� �� ��������� ��������������� �� �������� 
� ������ � �������� �� ��������, �� ��� ������������ ������ ������, ������ (�. 2.1 + �.2.2 + �. 2.3 + �. 2.4 + �. 2.5) </td>
						<td align="right">
							<xsl:call-template name="body_id">
								<xsl:with-param name="id" select="'ID_2000'"/>
							</xsl:call-template>
						</td>
					</tr>
					<tr>
						<td align="center"> 2.1</td>
						<td> ���� ���������� �������� �����, �� ��� ������������ ������ ������, ������     
 (�. 2.1.1 + �. 2.1.2 + �. 2.1.3 + �. 2.1.4 + �. 2.1.5 + �. 2.1.6+ �. 2.1.7) </td>
						<td align="right">
							<xsl:call-template name="body_id">
								<xsl:with-param name="id" select="'ID_2100'"/>
							</xsl:call-template>
						</td>
					</tr>
					<tr>
						<td align="center"> 2.1.1</td>
						<td> ������������� �������� �� ����� ����������� ������ ����������� (36,76 - 49,7%)</td>
						<td align="right">
							<xsl:call-template name="body_id">
								<xsl:with-param name="id" select="'ID_2110'"/>
							</xsl:call-template>
						</td>
					</tr>
					<tr>
						<td align="center"> 2.1.2</td>
						<td> ���������� ���������� (36,3%)</td>
						<td align="right">
							<xsl:call-template name="body_id">
								<xsl:with-param name="id" select="'ID_2120'"/>
							</xsl:call-template>
						</td>
					</tr>
					<tr>
						<td align="center"> 2.1.3</td>
						<td>������������� �������� ����������� �� ����� ��� ������� ������ ���������  ����� 
������� ������ (�����, ��������, �����������, �����������, �����������, ��������-���������) � ��������������, 
��  ��������� ��������� ������ � ��������  (45,96 %)</td>
						<td align="right">
							<xsl:call-template name="body_id">
								<xsl:with-param name="id" select="'ID_2130'"/>
							</xsl:call-template>
						</td>
					</tr>
					<tr>
						<td align="center"> 2.1.4</td>
						<td>������������, ���������� � ������������ ��������� �������� (8,41 %)</td>
						<td align="right">
							<xsl:call-template name="body_id">
								<xsl:with-param name="id" select="'ID_2140'"/>
							</xsl:call-template>
						</td>
					</tr>
					<tr>
						<td align="center"> 2.1.5</td>
						<td>������������ �� ������������ ������������� ����������� ���������� �������, ������� ������������ ���� �� ���� (5,3 %)</td>
						<td align="right">
							<xsl:call-template name="body_id">
								<xsl:with-param name="id" select="'ID_2150'"/>
							</xsl:call-template>
						</td>
					</tr>
					<tr>
						<td align="center"> 2.1.6</td>
						<td>������������ �� ������������ ����������� ���������� ������� (�� ����, ���������� �������� ������������� ����� 8 ������) ��������� ��������  (5,5 %)</td>
						<td align="right">
							<xsl:call-template name="body_id">
								<xsl:with-param name="id" select="'ID_2160'"/>
							</xsl:call-template>
						</td>
					</tr>
					<tr>
						<td align="center"> 2.1.7</td>
						<td>������������ ����������� ������������ (���� 30.11 ����� 30.1 ������ 30, ���� 33.15 ����� 33.1 ������ 33 ���� �� 009:2010)  (33,2 %)</td>
						<td align="right">
							<xsl:call-template name="body_id">
								<xsl:with-param name="id" select="'ID_2170'"/>
							</xsl:call-template>
						</td>
					</tr>
					<tr>
						<td align="center"> 2.2</td>
						<td>���� ��������� �� ������� ������ (����� �������) �� �������-��������� ����������, ������  (�. 2.2.1 + �. 2.2.2 + �. 2.2.3)</td>
						<td align="right">
							<xsl:call-template name="body_id">
								<xsl:with-param name="id" select="'ID_2200'"/>
							</xsl:call-template>
						</td>
					</tr>
					<tr>
						<td align="center"> 2.2.1</td>
						<td>���� ��������� �� ������� ������ (����� �������) �� �������-��������� ����������, 34,7 %</td>
						<td align="right">
							<xsl:call-template name="body_id">
								<xsl:with-param name="id" select="'ID_2210'"/>
							</xsl:call-template>
						</td>
					</tr>
					<tr>
						<td align="center"> 2.2.2</td>
						<td>���� ��������� �� ������� ������ (����� �������) �� �������-��������� ����������, 
���������� ������������ �� ������������ ������������� ����������� ���������� �������, ������� ������������ ���� �� ����  (5,3 %)</td>
						<td align="right">
							<xsl:call-template name="body_id">
								<xsl:with-param name="id" select="'ID_2220'"/>
							</xsl:call-template>
						</td>
					</tr>
					<tr>
						<td align="center"> 2.2.3</td>
						<td>���� ��������� �� ������� ������ (����� �������) �� �������-��������� ����������, ���������� ������������ ����������� ������������ (���� 30.11 ����� 30.1 ������ 30,  ���� 33.15 ����� 33.1 ������ 33 ���� �� 009:2010) (33,2 %)</td>
						<td align="right">
							<xsl:call-template name="body_id">
								<xsl:with-param name="id" select="'ID_2230'"/>
							</xsl:call-template>
						</td>
					</tr>
					<tr>
						<td align="center"> 2.3</td>
						<td>���� �������� �� ��������� ���������������, ������ (�. 2.3.1 + �. 2.3.2 + �.  2.3.3 + �. 2.3.4)</td>
						<td align="right">
							<xsl:call-template name="body_id">
								<xsl:with-param name="id" select="'ID_2300'"/>
							</xsl:call-template>
						</td>
					</tr>
					<tr>
						<td align="center"> 2.3.1</td>
						<td>���� �������� �� ��������� ���������������, �� ��� ������������ ������ ������ � �����  33,2 %</td>
						<td align="right">
							<xsl:call-template name="body_id">
								<xsl:with-param name="id" select="'ID_2310'"/>
							</xsl:call-template>
						</td>
					</tr>
					<tr>
						<td align="center"> 2.3.2</td>
						<td>���� �������� �� ��������� ���������������, ���������� ������������, ���������� � ������������ ��������� �������� (8,41 %)</td>
						<td align="right">
							<xsl:call-template name="body_id">
								<xsl:with-param name="id" select="'ID_2320'"/>
							</xsl:call-template>
						</td>
					</tr>
					<tr>
						<td align="center"> 2.3.3</td>
						<td>���� �������� �� ��������� ���������������, ���������� ������������ �� ������������ ������������� ����������� ���������� �������,
������� ������������ ���� �� ����, (5,3%)</td>
						<td align="right">
							<xsl:call-template name="body_id">
								<xsl:with-param name="id" select="'ID_2330'"/>
							</xsl:call-template>
						</td>
					</tr>
					<tr>
						<td align="center"> 2.3.4</td>
						<td>���� �������� �� ��������� ���������������, ����������  ������������ �� ������������ ����������� ���������� ������� (�� ����, ���������� �������� ������������� ����� 8 ������) ��������� �������� (5,5 %)</td>
						<td align="right">
							<xsl:call-template name="body_id">
								<xsl:with-param name="id" select="'ID_2340'"/>
							</xsl:call-template>
						</td>
					</tr>
					<tr>
						<td align="center"> 2.4</td>
						<td>C��� �������� � ������ � �������� �� ��������  (�. 2.4.1 + �. 2.4.2 + �.  2.4.3 + �. 2.4.4)</td>
						<td align="right">
							<xsl:call-template name="body_id">
								<xsl:with-param name="id" select="'ID_2400'"/>
							</xsl:call-template>
						</td>
					</tr>
					<tr>
						<td align="center"> 2.4.1</td>
						<td>C��� �������� � ��'���� � �������� �� ��������, �� ��� ������������ ������ ������ � �����  33,2 %</td>
						<td align="right">
							<xsl:call-template name="body_id">
								<xsl:with-param name="id" select="'ID_2410'"/>
							</xsl:call-template>
						</td>
					</tr>
					<tr>
						<td align="center"> 2.4.2</td>
						<td>C��� �������� � ��'���� � �������� �� ��������, ���������� ������������, ���������� � ������������ ��������� �������� (8,41 %)</td>
						<td align="right">
							<xsl:call-template name="body_id">
								<xsl:with-param name="id" select="'ID_2420'"/>
							</xsl:call-template>
						</td>
					</tr>
					<tr>
						<td align="center"> 2.4.3</td>
						<td>C��� �������� � ��'���� � �������� �� ��������, ���������� ������������ �� ������������ ������������� ����������� ���������� �������,
������� ������������ ���� �� ���� (5,3%)</td>
						<td align="right">
							<xsl:call-template name="body_id">
								<xsl:with-param name="id" select="'ID_2430'"/>
							</xsl:call-template>
						</td>
					</tr>
					<tr>
						<td align="center"> 2.4.4</td>
						<td>C��� �������� � ��'���� � �������� �� ��������, ����������  ������������ �� ������������ ����������� ���������� �������
 (�� ����, ���������� �������� ������������� ����� 8 ������) ��������� �������� (5,5%)</td>
						<td align="right">
							<xsl:call-template name="body_id">
								<xsl:with-param name="id" select="'ID_2440'"/>
							</xsl:call-template>
						</td>
					</tr>
							<tr>
						<td align="center"> 2.5</td>
						<td>��������� ���� ����������� ������� ������, ������ (�. 2.5.1 + �. 2.5.2 + �. 2.5.3 + �. 2.5.4 + �.2.5.5)</td>
						<td align="right">
							<xsl:call-template name="body_id">
								<xsl:with-param name="id" select="'ID_2500'"/>
							</xsl:call-template>
						</td>
					</tr>
					<tr>
						<td align="center"> 2.5.1</td>
						<td>������������� �������� �� ����� ����������� ������ ����������� (36,76 � 49,7 %)</td>
						<td align="right">
							<xsl:call-template name="body_id">
								<xsl:with-param name="id" select="'ID_2510'"/>
							</xsl:call-template>
						</td>
					</tr>
					<tr>
						<td align="center"> 2.5.2</td>
						<td>���������� ���������� (36,3 %)</td>
						<td align="right">
							<xsl:call-template name="body_id">
								<xsl:with-param name="id" select="'ID_2520'"/>
							</xsl:call-template>
						</td>
					</tr>
					<tr>
						<td align="center"> 2.5.3</td>
						<td>������������� �������� ����������� �� ����� ��� ������� ������ ��������� ����� �������
������ (�����, ��������, �����������, �����������, �����������, ��������-���������) �
��������������, �� ��������� ��������� ������ � �������� (45,96 %)</td>
						<td align="right">
							<xsl:call-template name="body_id">
								<xsl:with-param name="id" select="'ID_2530'"/>
							</xsl:call-template>
						</td>
					</tr>
					<tr>
						<td align="center"> 2.5.4</td>
						<td>������������ ����������� ������������ (���� 30.11 ����� 30.1 ������ 30, ���� 33.15 ����� 33.1
������ 33 ���� �� 009:2010) (33,2 %)</td>
						<td align="right">
							<xsl:call-template name="body_id">
								<xsl:with-param name="id" select="'ID_2540'"/>
							</xsl:call-template>
						</td>
					</tr>
							<tr>
						<td align="center"> 2.5.5</td>
						<td>���� �������� �� ��������� ���������������, ���� �������� � ������ � �������� �� ��������, ��
��� ������������ ������ ������ � ����� 33,2 %</td>
						<td align="right">
							<xsl:call-template name="body_id">
								<xsl:with-param name="id" select="'ID_2550'"/>
							</xsl:call-template>
						</td>
					</tr>
				
				
				
					<tr>
						<td align="center"> 3</td>
						<td>���������� ������� ������, ������  (�. 3.1 + �. 3.2 + �. 3.3 + �. 3.4 + �. 3.5)</td>
						<td align="right">
							<xsl:call-template name="body_id">
								<xsl:with-param name="id" select="'ID_3000'"/>
							</xsl:call-template>
						</td>
					</tr>
					<tr>
						<td align="center"> 3.1</td>
						<td>�� ���� �������� �����, ������ (�. 3.1.1 + �. 3.1.2 + �. 3.1.3 + �. 3.1.4 + �. 3.1.5 + �. 3.1.6 + �. 3.1.7)</td>
						<td align="right">
							<xsl:call-template name="body_id">
								<xsl:with-param name="id" select="'ID_3100'"/>
							</xsl:call-template>
						</td>
					</tr>
					<tr>
						<td align="center"> 3.1.1</td>
						<td>�� ���� �������� �����, ���������� �������������, �������� �� ����� ����������� ������ ����������� (�. 2.1.1 � 
(36,76 %-49,7 %) � ����������)</td>
						<td align="right">
							<xsl:call-template name="body_id">
								<xsl:with-param name="id" select="'ID_3110'"/>
							</xsl:call-template>
						</td>
					</tr>
					<tr>
						<td align="center"> 3.1.2</td>
						<td>�� ���� �������� �����, ���������� ���������� ���������� ((�. 2.1.2 � 36,3 %) � ����������)</td>
						<td align="right">
							<xsl:call-template name="body_id">
								<xsl:with-param name="id" select="'ID_3120'"/>
							</xsl:call-template>
						</td>
					</tr>
					<tr>
						<td align="center"> 3.1.3</td>
						<td>�� ���� �������� �����, ���������� ������������� �������� ����������� �� ����� ��� ������� ������ ���������  ����� ������� ������ (�����, ��������, �����������, �����������, �����������, ��������-���������) � ��������������, ��  ��������� ��������� ������ � �������� 
(�. 2.1.3 � 45,96 % � ����������)</td>
						<td align="right">
							<xsl:call-template name="body_id">
								<xsl:with-param name="id" select="'ID_3130'"/>
							</xsl:call-template>
						</td>
					</tr>
					<tr>
						<td align="center"> 3.1.4</td>
						<td>�� ���� �������� �����, ���������� ������������, ���������� � ������������ ��������� �������� (�. 2.1.4 � 8,41 %)</td>
						<td align="right">
							<xsl:call-template name="body_id">
								<xsl:with-param name="id" select="'ID_3140'"/>
							</xsl:call-template>
						</td>
					</tr>
					<tr>
						<td align="center"> 3.1.5</td>
						<td>�� ���� �������� �����, ���������� ������������ �� ������������ ������������� ����������� ���������� �������,
������� ������������ ���� �� ���� (�. 2.1.5 � 5,3 %)</td>
						<td align="right">
							<xsl:call-template name="body_id">
								<xsl:with-param name="id" select="'ID_3150'"/>
							</xsl:call-template>
						</td>
					</tr>
					<tr>
						<td align="center"> 3.1.6</td>
						<td>�� ���� �������� �����, ����������  ������������ �� ������������ ����������� ���������� ������� (�� ����,
���������� �������� ������������� ����� 8 ������) ��������� ��������                  (�. 2.1.6 � 5,5 %)</td>
						<td align="right">
							<xsl:call-template name="body_id">
								<xsl:with-param name="id" select="'ID_3160'"/>
							</xsl:call-template>
						</td>
					</tr>
					<tr>
						<td align="center"> 3.1.7</td>
						<td>�� ���� �������� �����, ���������� ������������ ����������� ������������ (���� 30.11 ����� 30.1 ������ 30, ���� 33.15 ����� 33.1 ������ 33 ���� �� 009:2010) 
(�. 2.1.7 � 33,2 % � ����������)</td>
						<td align="right">
							<xsl:call-template name="body_id">
								<xsl:with-param name="id" select="'ID_3170'"/>
							</xsl:call-template>
						</td>
					</tr>
					<tr>
						<td align="center"> 3.2</td>
						<td>�� ���� ��������� �� ������� ������ (����� �������) �� �������-��������� ����������, ������ (�. 3.2.1 + �. 3.2.2  + �. 3.2.3)</td>
						<td align="right">
							<xsl:call-template name="body_id">
								<xsl:with-param name="id" select="'ID_3200'"/>
							</xsl:call-template>
						</td>
					</tr>
					<tr>
						<td align="center"> 3.2.1</td>
						<td>�� ���� ��������� �� ������� ������ (����� �������) �� �������-��������� ����������                           (�. 2.2.1 � 34,7 % � ����������)</td>
						<td align="right">
							<xsl:call-template name="body_id">
								<xsl:with-param name="id" select="'ID_3210'"/>
							</xsl:call-template>
						</td>
					</tr>
					<tr>
						<td align="center"> 3.2.2</td>
						<td>�� ���� ��������� �� ������� ������ (����� �������) �� �������-��������� ����������, ����������� ������������ ��
 ������������ ������������� ����������� ���������� �������, ������� ������������ ���� �� ����  (�. 2.2.2 � 5,3%)</td>
						<td align="right">
							<xsl:call-template name="body_id">
								<xsl:with-param name="id" select="'ID_3220'"/>
							</xsl:call-template>
						</td>
					</tr>
					<tr>
						<td align="center"> 3.2.3</td>
						<td>�� ���� ��������� �� ������� ������ (����� �������) �� �������-��������� ����������, �����������  ������������ ����������� ������������ (���� 30.11 ����� 30.1 ������ 30, ���� 33.15 ����� 33.1 ������ 33 ���� �� 009:2010) (�. 2.2.3 � 33,2 % � ����������)</td>
						<td align="right">
							<xsl:call-template name="body_id">
								<xsl:with-param name="id" select="'ID_3230'"/>
							</xsl:call-template>
						</td>
					</tr>
					<tr>
						<td align="center"> 3.3</td>
						<td>�� ���� �������� �� ��������� ��������������� (�. 3.3.1 + �. 3.3.2 + �. 3.3.3 + �. 3.3.4)</td>
						<td align="right">
							<xsl:call-template name="body_id">
								<xsl:with-param name="id" select="'ID_3300'"/>
							</xsl:call-template>
						</td>
					</tr>
					<tr>
						<td align="center"> 3.3.1</td>
						<td>�� ���� �������� �� ��������� ��������������� (�. 2.3.1 � 33,2 % � ����������)</td>
						<td align="right">
							<xsl:call-template name="body_id">
								<xsl:with-param name="id" select="'ID_3310'"/>
							</xsl:call-template>
						</td>
					</tr>
					<tr>
						<td align="center"> 3.3.2</td>
						<td>�� ���� �������� �� ��������� ���������������, ���������� ������������, ���������� � ������������ ��������� �������� (�. 2.3.2 � 8,41 %)</td>
						<td align="right">
							<xsl:call-template name="body_id">
								<xsl:with-param name="id" select="'ID_3320'"/>
							</xsl:call-template>
						</td>
					</tr>
					<tr>
						<td align="center"> 3.3.3</td>
						<td>�� ���� �������� �� ��������� ���������������, ���������� ������������ �� ������������ ������������� ����������� ���������� �������,
 ������� ������������ ���� �� ����                  (�. 2.3.3 � 5,3 %)</td>
						<td align="right">
							<xsl:call-template name="body_id">
								<xsl:with-param name="id" select="'ID_3330'"/>
							</xsl:call-template>
						</td>
					</tr>
					<tr>
						<td align="center"> 3.3.4</td>
						<td>�� ���� �������� �� ��������� ���������������, ����������  ������������ �� ������������ ����������� ���������� �������
(�� ����, ���������� �������� ������������� ����� 8 ������) ��������� �������� (�. 2.3.4 � 5,5 %)</td>
						<td align="right">
							<xsl:call-template name="body_id">
								<xsl:with-param name="id" select="'ID_3340'"/>
							</xsl:call-template>
						</td>
					</tr>
					<tr>
						<td align="center"> 3.4</td>
						<td>�� ���� �������� � ��'���� � �������� �� ��������  (�. 3.4.1 + �. 3.4.2 + �. 3.4.3 + �. 3.4.4)</td>
						<td align="right">
							<xsl:call-template name="body_id">
								<xsl:with-param name="id" select="'ID_3400'"/>
							</xsl:call-template>
						</td>
					</tr>
					<tr>
						<td align="center"> 3.4.1</td>
						<td>�� ���� �������� � ��'���� � �������� �� �������� (�. 2.4.1 � 33,2 %)</td>
						<td align="right">
							<xsl:call-template name="body_id">
								<xsl:with-param name="id" select="'ID_3410'"/>
							</xsl:call-template>
						</td>
					</tr>
					<tr>
						<td align="center"> 3.4.2</td>
						<td>�� ���� �������� � ��'���� � �������� �� ��������, ���������� ������������, ���������� � ������������ ��������� �������� (�. 2.4.2 � 8,41 %)</td>
						<td align="right">
							<xsl:call-template name="body_id">
								<xsl:with-param name="id" select="'ID_3420'"/>
							</xsl:call-template>
						</td>
					</tr>
					<tr>
						<td align="center"> 3.4.3</td>
						<td>�� ���� �������� � ��'���� � �������� �� ��������, ���������� ������������ �� ������������ ������������� ����������� ���������� �������,
������� ������������ ���� �� ����  (�. 2.4.3 � 5,3 %)</td>
						<td align="right">
							<xsl:call-template name="body_id">
								<xsl:with-param name="id" select="'ID_3430'"/>
							</xsl:call-template>
						</td>
					</tr>
					<tr>
						<td align="center"> 3.4.4</td>
						<td>�� ���� �������� � ��'���� � �������� �� ��������, ����������  ������������ �� ������������ ����������� ���������� �������
 (�� ����, ���������� �������� ������������� ����� 8 ������) ��������� �������� (�. 2.4.4 � 5,5 %)</td>
						<td align="right">
							<xsl:call-template name="body_id">
								<xsl:with-param name="id" select="'ID_3440'"/>
							</xsl:call-template>
						</td>
					</tr>
					<tr>
			    	<td align="center"> 3.5</td>
						<td>�� ���� ��������� ���� ����������� ������� ������ (�. 3.5.1 + �. 3.5.2 + �. 3.5.3 + �. 3.5.4 + �. 3.5.5)</td>
						<td align="right">
							<xsl:call-template name="body_id">
								<xsl:with-param name="id" select="'ID_3500'"/>
							</xsl:call-template>
						</td>
					</tr>
					<tr>
						<td align="center"> 3.5.1</td>
						<td>�� ���� ������ �� ������� �������� �������� ����� �� �������� ���������� �������� ����� �������������, �������� �� ����� ����������� ������ ����������� (�. 2.5.1 � (36,76 %-49,7 %))</td>
						<td align="right">
							<xsl:call-template name="body_id">
								<xsl:with-param name="id" select="'ID_3510'"/>
							</xsl:call-template>
						</td>
					</tr>
					<tr>
						<td align="center"> 3.5.2</td>
						<td>�� ���� ������ �� ������� �������� �������� ����� �� �������� ���������� �������� ����� ���������� ���������� (�. 2.5.2 � 36,3 %)</td>
						<td align="right">
							<xsl:call-template name="body_id">
								<xsl:with-param name="id" select="'ID_3520'"/>
							</xsl:call-template>
						</td>
					</tr>
					<tr>
						<td align="center"> 3.5.3</td>
						<td>�� ���� ������ �� ������� �������� �������� ����� �� �������� ���������� �������� ����� ������������� �������� ����������� �� ����� ��� ������� ������ ��������� ����� ������� ������ (�����, ��������, �����������, �����������, �����������, ��������-���������) � ��������������, �� ��������� ��������� ������ � �������� (�. 2.5.3 � 45,96 %)</td>
						<td align="right">
							<xsl:call-template name="body_id">
								<xsl:with-param name="id" select="'ID_3530'"/>
							</xsl:call-template>
						</td>
					</tr>
					<tr>
						<td align="center"> 3.5.4</td>
						<td>�� ���� ������ �� ������� �������� �������� ����� �� �������� ���������� �������� ����� ������������ ����������� ������������ (���� 30.11 ����� 30.1 ������ 30, ���� 33.15 ����� 33.1 ������ 33 ���� �� 009:2010) (�. 2.5.4 � 33,2 %)</td>
						<td align="right">
							<xsl:call-template name="body_id">
								<xsl:with-param name="id" select="'ID_3540'"/>
							</xsl:call-template>
						</td>
					</tr>
	<tr>
						<td align="center"> 3.5.5</td>
						<td>�� ���� �������� � ��'���� � �������� �� ��������, ����������  ������������ �� ������������ ����������� ���������� �������
 (�� ����, ���������� �������� ������������� ����� 8 ������) ��������� �������� (�. 2.4.4 � 5,5 %)</td>
						<td align="right">
							<xsl:call-template name="body_id">
								<xsl:with-param name="id" select="'ID_3550'"/>
							</xsl:call-template>
						</td>
					</tr>
					<tr>
						<td align="center"> 4</td>
						<td>���� ���������� �������� �����, ��������� �� �������� ������ (����� �������) �� �������-��������� ����������,
������ �������� �� ��������� ��������������� �� �������� � ��'���� � �������� �� ��������, � ��� �������� ������ ������,
 ������ (�. 4.1 + �. 4.2 + �. 4.3 + �. 4.4) </td>
						<td align="right">
							<xsl:call-template name="body_id">
								<xsl:with-param name="id" select="'ID_4000'"/>
							</xsl:call-template>
						</td>
					</tr>
					<tr>
						<td align="center"> 4.1</td>
						<td>���� �������� ����� ������������� ���, ������ (�. 4.1.1 + �. 4.1.2 + �. 4.1.3)</td>
						<td align="right">
							<xsl:call-template name="body_id">
								<xsl:with-param name="id" select="'ID_4100'"/>
							</xsl:call-template>
						</td>
					</tr>
					<tr>
						<td align="center"> 4.1.1</td>
						<td>���, �� �������� �� ������ ��������� �������� (���������) (3,6 %)</td>
						<td align="right">
							<xsl:call-template name="body_id">
								<xsl:with-param name="id" select="'ID_4110'"/>
							</xsl:call-template>
						</td>
					</tr>
					<tr>
						<td align="center"> 4.1.2</td>
						<td>�������� ���������� - �������, �� �������� �� ����������� ����, ���� (2,85 %)</td>
						<td align="right">
							<xsl:call-template name="body_id">
								<xsl:with-param name="id" select="'ID_4120'"/>
							</xsl:call-template>
						</td>
					</tr>
					<tr>
						<td align="center"> 4.1.3</td>
						<td>����������, �� �������� �� �������, ������ �� ���� ������������ �� �����, �� �� ����� �� ��������� ���� �������� �� �������  ������ ������ (6,1 %)</td>
						<td align="right">
							<xsl:call-template name="body_id">
								<xsl:with-param name="id" select="'ID_4130'"/>
							</xsl:call-template>
						</td>
					</tr>
					<tr>
						<td align="center"> 4.2</td>
						<td>���� ��������� �� �������� ������ (����� �������) �� �������-��������� ����������, 2,6%  (������� �������� �. 2.2)</td>
						<td align="right">
							<xsl:call-template name="body_id">
								<xsl:with-param name="id" select="'ID_4200'"/>
							</xsl:call-template>
						</td>
					</tr>
					<tr>
						<td align="center"> 4.3</td>
						<td>���� �������� �� ��������� ���������������, 2 % </td>
						<td align="right">
							<xsl:call-template name="body_id">
								<xsl:with-param name="id" select="'ID_4300'"/>
							</xsl:call-template>
						</td>
					</tr>
					<tr>
						<td align="center"> 4.4</td>
						<td>C��� �������� � ��'���� � �������� �� �������� (2 %)</td>
						<td align="right">
							<xsl:call-template name="body_id">
								<xsl:with-param name="id" select="'ID_4400'"/>
							</xsl:call-template>
						</td>
					</tr>
					<tr>
						<td align="center"> 5</td>
						<td>�������� ������� ������, ������ (�. 5.1 +  �. 5.2 +  �. 5.3 + �. 5.4 +  �. 5.5 +  �. 5.6) </td>
						<td align="right">
							<xsl:call-template name="body_id">
								<xsl:with-param name="id" select="'ID_5000'"/>
							</xsl:call-template>
						</td>
					</tr>
					<tr>
						<td align="center"> 5.1</td>
						<td>�. 4.1.1� 3,6 %</td>
						<td align="right">
							<xsl:call-template name="body_id">
								<xsl:with-param name="id" select="'ID_5100'"/>
							</xsl:call-template>
						</td>
					</tr>
					<tr>
						<td align="center"> 5.2</td>
						<td>�. 4.1.2 � 2,85 %</td>
						<td align="right">
							<xsl:call-template name="body_id">
								<xsl:with-param name="id" select="'ID_5200'"/>
							</xsl:call-template>
						</td>
					</tr>
					<tr>
						<td align="center"> 5.3</td>
						<td>�. 4.1.3 � 6,1%</td>
						<td align="right">
							<xsl:call-template name="body_id">
								<xsl:with-param name="id" select="'ID_5300'"/>
							</xsl:call-template>
						</td>
					</tr>
					<tr>
						<td align="center"> 5.4</td>
						<td>�. 4.2 � 2,6 %</td>
						<td align="right">
							<xsl:call-template name="body_id">
								<xsl:with-param name="id" select="'ID_5400'"/>
							</xsl:call-template>
						</td>
					</tr>
					<tr>
						<td align="center"> 5.5</td>
						<td>�. 4.3 � 2%</td>
						<td align="right">
							<xsl:call-template name="body_id">
								<xsl:with-param name="id" select="'ID_5500'"/>
							</xsl:call-template>
						</td>
					</tr>
					<tr>
						<td align="center"> 5.6</td>
						<td>�. 4.4 � 2%</td>
						<td align="right">
							<xsl:call-template name="body_id">
								<xsl:with-param name="id" select="'ID_5600'"/>
							</xsl:call-template>
						</td>
					</tr>
					<tr>
						<td align="center"> 6</td>
						<td>������������ ��/��� ���������� ������� ������ � ��'���� � ������������ �������, �������� � ��������� ������  ������� ( �. 6.1 + �. 6.2 + �. 6.3)</td>
						<td align="right">
							<xsl:call-template name="body_id">
								<xsl:with-param name="id" select="'ID_6000'"/>
							</xsl:call-template>
						</td>
					</tr>
					<tr>
						<td align="center"> 6.1</td>
						<td>������������ ������� ������ (��� ���, ���������� � �. 6.2)</td>
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
						<td>33,2 %, � �.�. ������������ �� �������� �������� �����    </td>
						<td align="right">
							<xsl:call-template name="body_id">
								<xsl:with-param name="id" select="'ID_6180'"/>
							</xsl:call-template>
						</td>
					</tr>
					<tr>
						<td align="center"> 6.1.9</td>
						<td>36,76-49,7 % � ����������</td>
						<td align="right">
							<xsl:call-template name="body_id">
								<xsl:with-param name="id" select="'ID_6190'"/>
							</xsl:call-template>
						</td>
					</tr>
					<tr>
						<td align="center"> 6.1.10</td>
						<td>36,3 % � ����������</td>
						<td align="right">
							<xsl:call-template name="body_id">
								<xsl:with-param name="id" select="'ID_61100'"/>
							</xsl:call-template>
						</td>
					</tr>
					<tr>
						<td align="center"> 6.1.11</td>
						<td>45,96 % � �����������</td>
						<td align="right">
							<xsl:call-template name="body_id">
								<xsl:with-param name="id" select="'ID_61110'"/>
							</xsl:call-template>
						</td>
					</tr>
					<tr>
						<td align="center"> 6.1.12</td>
						<td>34,7 % � ����������</td>
						<td align="right">
							<xsl:call-template name="body_id">
								<xsl:with-param name="id" select="'ID_61120'"/>
							</xsl:call-template>
						</td>
					</tr>
					<tr>
						<td align="center"> 6.1.13</td>
						<td>33,2 % � ����������</td>
						<td align="right">
							<xsl:call-template name="body_id">
								<xsl:with-param name="id" select="'ID_61130'"/>
							</xsl:call-template>
						</td>
					</tr>
	
					<tr>
						<td align="center"> 6.2</td>
						<td>������������ ������� ������ �� �������� ���� ������ �������� ��������� ����� ����������� ������ �����������</td>
						<td align="right">
							<xsl:call-template name="body_id">
								<xsl:with-param name="id" select="'ID_6200'"/>
							</xsl:call-template>
						</td>
					</tr>
					<tr>
						<td align="center"> 6.3</td>
						<td>��������� �������� ������� ������   </td>
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
						<td>���� ������, �� ��� ������������ ������  ������ </td>
						<td align="right">
							<xsl:call-template name="body_id">
								<xsl:with-param name="id" select="'ID_6400'"/>
							</xsl:call-template>
						</td>
					</tr>
					<tr>
						<td align="center"> 6.5</td>
						<td>���� �������<br/>
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
						<td>��������  ���� ������� ������ � ��'���� � ������������ �������, �������� � ���������  ������ �������  (�. 7.1 + �. 7.2 + �. 7.3)</td>
						<td align="right">
							<xsl:call-template name="body_id">
								<xsl:with-param name="id" select="'ID_7000'"/>
							</xsl:call-template>
						</td>
					</tr>
					<tr>
						<td align="center"> 7.1</td>
						<td>�������� ����������� (��� ���, ���������� � �. 7.2)</td>
						<td align="right">
							<xsl:call-template name="body_id">
								<xsl:with-param name="id" select="'ID_7100'"/>
							</xsl:call-template>
						</td>
					</tr>
					<tr>
						<td align="center"> 7.1.1</td>
						<td>36,76-49,7 %, � �.�. �������� �������� � ������ �������� �������� �����</td>
						<td align="right">
							<xsl:call-template name="body_id">
								<xsl:with-param name="id" select="'ID_7110'"/>
							</xsl:call-template>
						</td>
					</tr>
					<tr>
						<td align="center"> 7.1.2</td>
						<td>36,3 %, � �.�. �������� �������� � ������ �������� �������� �����</td>
						<td align="right">
							<xsl:call-template name="body_id">
								<xsl:with-param name="id" select="'ID_7120'"/>
							</xsl:call-template>
						</td>
					</tr>
					<tr>
						<td align="center"> 7.1.3</td>
						<td>45,96 %, � �.�. �������� �������� � ������ �������� �������� �����  </td>
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
						<td>33,2 %, � �.�. �������� �������� � ������ �������� �������� �����</td>
						<td align="right">
							<xsl:call-template name="body_id">
								<xsl:with-param name="id" select="'ID_7180'"/>
							</xsl:call-template>
						</td>
					</tr>
									<tr>
						<td align="center"> 7.1.9</td>
						<td>36,76-49,7 % � ����������</td>
						<td align="right">
							<xsl:call-template name="body_id">
								<xsl:with-param name="id" select="'ID_7190'"/>
							</xsl:call-template>
						</td>
					</tr>
					<tr>
						<td align="center"> 7.1.10</td>
						<td>36,3 % � ����������</td>
						<td align="right">
							<xsl:call-template name="body_id">
								<xsl:with-param name="id" select="'ID_71100'"/>
							</xsl:call-template>
						</td>
					</tr>
					<tr>
						<td align="center">7.1.11</td>
						<td>45,96 % � �����������</td>
						<td align="right">
							<xsl:call-template name="body_id">
								<xsl:with-param name="id" select="'ID_71110'"/>
							</xsl:call-template>
						</td>
					</tr>
					<tr>
						<td align="center">7.1.12</td>
						<td>34,7 % � ����������</td>
						<td align="right">
							<xsl:call-template name="body_id">
								<xsl:with-param name="id" select="'ID_71120'"/>
							</xsl:call-template>
						</td>
					</tr>
					<tr>
						<td align="center"> 7.1.13</td>
						<td>33,2 % � ����������</td>
						<td align="right">
							<xsl:call-template name="body_id">
								<xsl:with-param name="id" select="'ID_71130'"/>
							</xsl:call-template>
						</td>
					</tr>
	
					<tr>
						<td align="center"> 7.2</td>
						<td>�������� ���� ������� ������  �� �������� ���� ������ �������� ��������� ����� ����������� ������ ����������� </td>
						<td align="right">
							<xsl:call-template name="body_id">
								<xsl:with-param name="id" select="'ID_7200'"/>
							</xsl:call-template>
						</td>
					</tr>
					<tr>
						<td align="center"> 7.3</td>
						<td>�������� ��������</td>
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
						<td>���� ������, �� ��� ����� ���������� ������ ������</td>
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
						<td>���� �������<br/>
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
						<td>�������� ���� ������� ������, �� ������ �����,  ������ (�. 3 + �. 5 + �. 6  - �. 7)</td>
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
						<td>� ���� ����</td>
						<td align="right">
							<xsl:text disable-output-escaping="yes">&amp;nbsp;</xsl:text>
						</td>
					</tr>
					<tr>
						<td align="center"> 8.1</td>
						<td>�. 3.1.1 + �. 3.5.1 + �. 6.1.1 + �. 6.1.9  � �. 7.1.1 � �. 7.1.9  (36,76�49,7 %) </td>
						<td align="right">
							<xsl:call-template name="body_id">
								<xsl:with-param name="id" select="'ID_8100'"/>
							</xsl:call-template>
						</td>
					</tr>
					<tr>
						<td align="center"> 8.2</td>
						<td>�. 3.1.2 + �. 3.5.2 + �. 6.1.2 + �. 6.1.10 � �. 7.1.2 � �. 7.1.10  (36,3 %) </td>
						<td align="right">
							<xsl:call-template name="body_id">
								<xsl:with-param name="id" select="'ID_8200'"/>
							</xsl:call-template>
						</td>
					</tr>
					<tr>
						<td align="center"> 8.3</td>
						<td>�. 3.1.3 + �. 3.5.3  + �. 6.1.3 + �. 6.1.11� �. 7.1.3 � �. 7.1.11  (45,96 %)</td>
						<td align="right">
							<xsl:call-template name="body_id">
								<xsl:with-param name="id" select="'ID_8300'"/>
							</xsl:call-template>
						</td>
					</tr>
					<tr>
						<td align="center"> 8.4</td>
						<td>�. 3.1.4 + �. 3.3.2 + �. 3.4.2 + �. 6.1.4 � �. 7.1.4  (8,41 %)</td>
						<td align="right">
							<xsl:call-template name="body_id">
								<xsl:with-param name="id" select="'ID_8400'"/>
							</xsl:call-template>
						</td>
					</tr>
					<tr>
						<td align="center"> 8.5</td>
						<td>�. 3.1.5 + �.3.2.2 + �. 3.3.3 + �. 3.4.3 + �. 6.1.5 � �. 7.1.5 (5,3 %) </td>
						<td align="right">
							<xsl:call-template name="body_id">
								<xsl:with-param name="id" select="'ID_8500'"/>
							</xsl:call-template>
						</td>
					</tr>
					<tr>
						<td align="center"> 8.6</td>
						<td>�. 3.1.6 + �. 3.3.4 + �. 3.4.4 + �. 6.1.6 � �. 7.1.6 (5,5 %)</td>
						<td align="right">
							<xsl:call-template name="body_id">
								<xsl:with-param name="id" select="'ID_8600'"/>
							</xsl:call-template>
						</td>
					</tr>
					<tr>
						<td align="center"> 8.7</td>
						<td>�. 3.2.1 + �. 6.1.7 + �. 6.1.12 � �. 7.1.7 � �. 7.1.12 (34,7 %) </td>
						<td align="right">
							<xsl:call-template name="body_id">
								<xsl:with-param name="id" select="'ID_8700'"/>
							</xsl:call-template>
						</td>
					</tr>
					<tr>
						<td align="center"> 8.8</td>
						<td>�. 3.1.7 + �. 3.2.3 + �. 3.3.1 + �. 3.4.1+ �. 3.5.4 + �. 3.5.5 + �. 6.1.8 + �. 6.1.13 � �. 7.1.8 - �. 7.1.13 (33,2 %)</td>
						<td align="right">
							<xsl:call-template name="body_id">
								<xsl:with-param name="id" select="'ID_8800'"/>
							</xsl:call-template>
						</td>
					</tr>
					<tr>
						<td align="center"> 8.9</td>
						<td>�. 5.1 + �. 6.3.1� �. 7.3.1 (3,6 %)</td>
						<td align="right">
							<xsl:call-template name="body_id">
								<xsl:with-param name="id" select="'ID_8900'"/>
							</xsl:call-template>
						</td>
					</tr>
					<tr>
						<td align="center"> 8.10</td>
						<td>�. 5.2 + �. 6.3.2 � �. 7.3.2 (2,85 %)</td>
						<td align="right">
							<xsl:call-template name="body_id">
								<xsl:with-param name="id" select="'ID_8110'"/>
							</xsl:call-template>
						</td>
					</tr>
					<tr>
						<td align="center"> 8.11</td>
						<td>�. 5.3 + �. 6.3.3 � �. 7.3.3 (6,1 %)</td>
						<td align="right">
							<xsl:call-template name="body_id">
								<xsl:with-param name="id" select="'ID_8120'"/>
							</xsl:call-template>
						</td>
					</tr>
					<tr>
						<td align="center"> 8.12</td>
						<td>�. 5.4 + �. 6.3.4 - �. 7.3.4 (2,6%)</td>
						<td align="right">
							<xsl:call-template name="body_id">
								<xsl:with-param name="id" select="'ID_8130'"/>
							</xsl:call-template>
						</td>
					</tr>
					<tr>
						<td align="center"> 8.13</td>
						<td>�. 5.5 + �. 5.6 + �. 6.3.5 � �. 7.3.5 (2 %) </td>
						<td align="right">
							<xsl:call-template name="body_id">
								<xsl:with-param name="id" select="'ID_8140'"/>
							</xsl:call-template>
						</td>
					</tr>
					<tr>
						<td align="center"> 8.14</td>
						<td>�. 6.2 - �. 7.2 </td>
						<td align="right">
							<xsl:call-template name="body_id">
								<xsl:with-param name="id" select="'ID_8150'"/>
							</xsl:call-template>
						</td>
					</tr>
				</table>
				* ��� �������� ���, �� ����� ������ � ������� ��� ����� ���������� ����-�� ������ �� ���� �� ������� ��������.
				<br/>
				<table width="40%" border="0">
					<tr>
						<td width="85%">���� ���������� � �������������� </td>
						<td width="10%" align="center" class="td_box">
							<xsl:call-template name="body_id">
								<xsl:with-param name="id" select="'DATA_FILL'"/>
							</xsl:call-template>
						</td>
					</tr>
				</table>
				<table width="100%" border="0">
					<tr>
						<td width="15%">�������  </td>
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
						<td>(����������  ����� ��� ���� �� ����� ��������*)        </td>
						<td>
							<xsl:text disable-output-escaping="yes">&amp;nbsp;</xsl:text>
						</td>
						<td align="center">
							<font size="-1">(�����)</font>
						</td>
						<td>
							<xsl:text disable-output-escaping="yes">&amp;nbsp;</xsl:text>
						</td>
						<td align="center">
							<font size="-1">(������� �� �������) </font>
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
						<td>�������� ���������</td>
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
						(����������  ����� ��� ���� �� ����� ��������*)      </td>
						<td>
							<xsl:text disable-output-escaping="yes">&amp;nbsp;</xsl:text>
						</td>
						<td align="center">
							<font size="-1">(�����)</font>
						</td>
						<td>
							<xsl:text disable-output-escaping="yes">&amp;nbsp;</xsl:text>
						</td>
						<td align="center">
							<font size="-1">(������� �� �������) </font>
						</td>
					</tr>
				</table>
				<br/>
				<table width="100%">
					<tr align="center">
						<td>�.�. (�� ��������)</td>
					</tr>
				</table>
				<br/>
				<table width="100%" border="0">
					<tr>
						<td align="center">������� �� ������� 1 ���� �� _______����� _____ ����</td>
					</tr>
				</table>
				<table width="80%" border="0">
					<tr>
						<td width="80%">���� ������������� � ������� �������� ����� �� ������� ������� ������</td>
						<td width="20%" align="right">
							<xsl:call-template name="body_id">
								<xsl:with-param name="id" select="'ID_1103'"/>
							</xsl:call-template>  ���.</td>
					</tr>
					<tr>
						<td width="80%">���� ������������� � ������� �������� ����� �� ����� ������� ������</td>
						<td width="20%" align="right">
							<xsl:call-template name="body_id">
								<xsl:with-param name="id" select="'ID_1104'"/>
							</xsl:call-template>  ���.</td>
					</tr>
				</table>
				
				<table width="100%" border="0">
					<tr>
						<td width="30%">��������� �������� ����� ������  </td>
						<td width="20%" align="right">
							<xsl:call-template name="body_id">
								<xsl:with-param name="id" select="'ID_1117'"/>
							</xsl:call-template>  ���.,</td>
						<td width="30%">� �.�. � ���������� ���� </td>
						<td width="20%" align="right">
							<xsl:call-template name="body_id">
								<xsl:with-param name="id" select="'ID_1118'"/>
							</xsl:call-template>  ���.</td>
					</tr>
					<tr>
						<td colspan="3">� �.�.: ��������� � ������� ����� �������� ����� �� ����� ������ � ��������� ������, �� �������� �� ������ ��������� ��������
 (���������) ��� �� ����� ������, ������������ ��������������, �� �� �������-��������� ����������, ����������� �� ����� �� 01.01.2011  </td>
						<td width="20%" align="right">
							<xsl:call-template name="body_id">
								<xsl:with-param name="id" select="'ID_1122'"/>
							</xsl:call-template>  ���.</td>
					</tr>
					<tr>
						<td colspan="3">� �.�.: ��������� � ������� ����� �������� ����� �� ����� ������ � ��������� ������, �� �������� �� ������ ��������� ��������
(���������) ��� �� ����� ������, ������������ ��������������, �� �� �������-��������� ����������, ����������� �� ����� �� 01.01.2004   </td>
						<td width="20%" align="right">
							<xsl:call-template name="body_id">
								<xsl:with-param name="id" select="'ID_1123'"/>
							</xsl:call-template>  ���.</td>
					</tr>
				</table>
				<table width="100%" border="0">
					<tr>
						<td colspan="2">1. �������� �� ������ ����������� �� ����� �� 01.01.2011: </td>
					</tr>
					<tr>
						<td width="80%">1.1. ��������� ������ �� ����� ����������� ����������� �� �������� ������� �� ���������� �� ���������� ����������� ������  </td>
						<td width="20%" align="right">
							<xsl:call-template name="body_id">
								<xsl:with-param name="id" select="'ID_1124'"/>
							</xsl:call-template>  ���.</td>
					</tr>
					<tr>
						<td>1.2. ��������� ������ �� ����� ����������� ����������� � ��������� ������ ������������� </td>
						<td align="right">
							<xsl:call-template name="body_id">
								<xsl:with-param name="id" select="'ID_1125'"/>
							</xsl:call-template>  ���.</td>
					</tr>
					<tr>
						<td>1.3. ��������� ������ �� ����� ����������� ����������� �� ������� ���������  </td>
						<td align="right">
							<xsl:call-template name="body_id">
								<xsl:with-param name="id" select="'ID_1126'"/>
							</xsl:call-template>  ���.</td>
					</tr>
					<tr>
						<td>2. �������� �� ������ ����� �� ����'������ �������� ������� �����������, ������������ �� ����� �� 01.01.2004 , </td>
						<td align="right">
							<xsl:call-template name="body_id">
								<xsl:with-param name="id" select="'ID_1127'"/>
							</xsl:call-template>  ���.*</td>
					</tr>
				</table>
				<table width="100%" border="0">
					<tr>
						<td colspan="2">3.  ����������� �������, ��������� ��� ���������� ������ �� ������������'������ �������� ������� ����������� �� ����� �� 01.01.2011: </td>
					</tr>
					<tr>
						<td width="80%">3.1. ����, �� ��� �������� ������ � ��'���� � ������������ �������, � �.�. </td>
						<td width="20%" align="right">
							<xsl:call-template name="body_id">
								<xsl:with-param name="id" select="'ID_1039'"/>
							</xsl:call-template>  ���.</td>
					</tr>
					<tr>
						<td>3.1.1. 32%; 32,3%; 31,8%; 33,2%; 4%; 42%; 6,4%; 6,46%; 13,28%; 19,92%; 26,56% </td>
						<td align="right">
							<xsl:call-template name="body_id">
								<xsl:with-param name="id" select="'ID_1040'"/>
							</xsl:call-template>  ���.</td>
					</tr>
					<tr>
						<td>3.1.2. 0,5 - 5 %  </td>
						<td align="right">
							<xsl:call-template name="body_id">
								<xsl:with-param name="id" select="'ID_1041'"/>
							</xsl:call-template>  ���.</td>
					</tr>
					<tr>
						<td>3.2. ���� ������� (�������� �����, ������), �� ��� ����������� ������� ������, </td>
						<td align="right">
							<xsl:call-template name="body_id">
								<xsl:with-param name="id" select="'ID_1060'"/>
							</xsl:call-template>  ���.</td>
					</tr>
					<tr>
						<td>3.3. ����, �� ��� �������� ������ � ��'���� � ������������ �������, � �.�.</td>
						<td align="right">
							<xsl:call-template name="body_id">
								<xsl:with-param name="id" select="'ID_1042'"/>
							</xsl:call-template>  ���.</td>
					</tr>
					<tr>
						<td>3.3.1. 32%; 32,3%; 31,8%; 33,2%; 4%; 42%; 6,4%; 6,46%; 13,28%; 19,92%; 26,56% </td>
						<td align="right">
							<xsl:call-template name="body_id">
								<xsl:with-param name="id" select="'ID_1043'"/>
							</xsl:call-template>  ���.</td>
					</tr>
					<tr>
						<td>3.3.2. 0,5 - 5 %</td>
						<td align="right">
							<xsl:call-template name="body_id">
								<xsl:with-param name="id" select="'ID_1044'"/>
							</xsl:call-template>  ���.</td>
					</tr>
					<tr>
						<td>3.4. ���� ������� (�������� �����, ������), �� ��� ����� ��������� ������� ������,</td>
						<td align="right">
							<xsl:call-template name="body_id">
								<xsl:with-param name="id" select="'ID_1061'"/>
							</xsl:call-template>  ���.</td>
					</tr>
				</table>
				<table width="100%" border="0">
					<tr>
						<td >3.5. ����������� �������� ������� ������� ���        
 � ���������������� ����� ������������� ���  ��� (1) /� (0) </td>
<td  align="center" class="td_box">
<xsl:call-template name="body_id">
								<xsl:with-param name="id" select="'ZM_SPOV'"/>
							</xsl:call-template>						
						</td>	
					</tr>
					
				</table>
				<table width="100%" border="0">
					<tr>
						<td>3.6. ���� �������  </td>
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
						<td colspan="2">4. ���������� ������ ������� �������� �����:</td>
					</tr>
					<tr>
						<td width="30%">�� ����� �������� ����� </td>
						<td width="10%" class="td_box" align="center">
							<xsl:call-template name="body_id">
								<xsl:with-param name="id" select="'VUPL_ZP1'"/>
							</xsl:call-template>
						</td>
					</tr>
					<tr>
						<td width="30%">�� ����� �������� �����   </td>
						<td width="10%" class="td_box" align="center">
							<xsl:call-template name="body_id">
								<xsl:with-param name="id" select="'VUPL_ZP2'"/>
							</xsl:call-template>
						</td>
					</tr>
				</table>
				<table width="100%" border="0">
					<tr>
						<td>�������� ���������</td>
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
							<font size="-1">(�����)</font>
						</td>
						<td>
							<xsl:text disable-output-escaping="yes">&amp;nbsp;</xsl:text>
						</td>
						<td align="center">
							<font size="-1">(������� �� �������)  </font>
						</td>
					</tr>
				</table>
				<br/>
				<table width="100%">
					<tr>
						<td>* ������������ ���������� ������� ������, �� ����� ������������� �� ������������ � �������� ������ �� 01.01.2004. <br/>
������� : ����, �������� � ������� 1 �� 2, ��������� ����� ������ �� ������� ����� ����������� ����������� �� ��������� ����� ������.
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
