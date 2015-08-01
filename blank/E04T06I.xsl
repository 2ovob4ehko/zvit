<?xml version="1.0" encoding="windows-1251"?>
<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
	<xsl:output method="html" encoding="windows-1251"/>
	<xsl:variable name="T1" select="//*[substring(name(),1,2)='T1']"/>
	<xsl:key name="grT1" match="DECLARBODY/*[substring(name(),1,2)='T1']" use="@ROWNUM"/>
	<xsl:template match="DECLAR">
		<html>
			<head>
				<title>E04T06I - "������� 6. ³������ ��� ����������� �������� ����� (������) ������������� ������"</title>
				<link HREF="./css/xsl_edit_styles.css" REL="stylesheet"/>
				<script SRC="./PrepareEditDoc.js"/>
			</head>
			<body>
				
				<table width="100%" border="0">
					<tr align="center">
						<td>
							<b>������� 6. ³������ ��� ����������� �������� ����� (������) ������������� ������</b>
						</td>
					</tr>
				</table>
				<table width="100%" border="0">
					<tr>
						<td width="35%">1. ��� �� ������ ��� ����������  ����� /���� �� ����� �������� �������������� * </td>
						<td width="10%" class="td_box">
							<xsl:call-template name="body_id">
								<xsl:with-param name="id" select="'FIRM_EDRPOU'"/>
							</xsl:call-template>
						</td>
						<td width="25%" align="left">2. ��� �� ������ ��� ���������� �����/���� �� ����� �������� 
����������� ��������������*  (������������ � ��� ������ ���� ����������������) </td>
						<td width="10%" class="td_box">
							<xsl:call-template name="body_id">
								<xsl:with-param name="id" select="'LIKV_EDRPOU'"/>
							</xsl:call-template>
						</td>
					</tr>
				</table>
				<table width="100%" border="0" cellspacing="4">
					<tr>
						<td class="td_box">
							<xsl:element name="input">
								<xsl:attribute name="style">width:100%;</xsl:attribute>
								<xsl:attribute name="value"><xsl:value-of select="//DECLAR//*[name()='FIRM_NAME']"/></xsl:attribute>
								<xsl:attribute name="id">FIRM_NAME</xsl:attribute>
							</xsl:element>
						</td>
					</tr>
					<tr>
						<td align="center">(������������ ��������������) </td>
					</tr>
				</table>
				<table width="100%" border="0">
					<tr>
						<td width="20%">1. ��� �� �����</td>
						<td width="5%" class="td_box">
							<xsl:call-template name="body_id">
								<xsl:with-param name="id" select="'PERIOD_MONTH'"/>
							</xsl:call-template>
						</td>
						<td width="10%" align="right">p��</td>
						<td width="5%" class="td_box">
							<xsl:call-template name="body_id">
								<xsl:with-param name="id" select="'PERIOD_YEAR'"/>
							</xsl:call-template>
						</td>
						<td width="10%" align="right">4. ���</td>
						<td width="15%" class="td_box">
							<div id="FORM_TYPE" style="padding:10px;">
								<input type="checkbox" onclick="SelectEFormType();" style="margin:2px;">
									<xsl:if test="//DECLARBODY//*[name()='FORM_TYPE'][.='1']">
										<xsl:attribute name="checked">true</xsl:attribute>
									</xsl:if>
		��������� </input>
								<br/>
								<input type="checkbox" onclick="SelectEFormType();" style="margin:2px;">
									<xsl:if test="//DECLARBODY//*[name()='FORM_TYPE'][.='2']">
										<xsl:attribute name="checked">true</xsl:attribute>
									</xsl:if>
		����������</input>
								<br/>
							</div>
						</td>
					</tr>
				</table>
				<br/>
<button onclick="pBlockAdd(this)" title="������ ����">������ ����</button>
				<xsl:for-each select="//PAGE">
				<div class="esvPageBlock">
				<xsl:attribute name="num">
					<xsl:choose>
					<xsl:when test="HEADER/PAGE_NUM!=''"><xsl:value-of select="HEADER/PAGE_NUM"/></xsl:when>
					<xsl:otherwise>1</xsl:otherwise>
					</xsl:choose>
				</xsl:attribute>
				
				<button onclick="pBlockDel(this)"  title="�������� ��� ����">�������� ����</button>
				<table width="60%" border="0">
					<tr>
						<td width="30%" align="right"> </td>
						<td width="10%" class="td_box">
						</td>
						<td width="15%" align="right">� ������ ���� </td>
						<td width="10%" class="td_box">
								<xsl:element name="input">
								<xsl:attribute name="style">width:100%;</xsl:attribute>
								<xsl:attribute name="value">
								<xsl:choose>
								<xsl:when test="HEADER/PAGE_NUM!=''"><xsl:value-of select="HEADER/PAGE_NUM"/></xsl:when>
								<xsl:otherwise>1</xsl:otherwise>
								</xsl:choose>

								</xsl:attribute>
								<xsl:attribute name="id">PAGE_NUM</xsl:attribute>
							</xsl:element>
						</td>
					</tr>
				</table>
				<br/>
				<table border="1" cellspacing="0" bordercolor="black"  width="170%">
					<thead>
						<tr>
							<td align="center"> 5. �  �/�  </td>
							<td align="center"> 6. �����-����� ������ <br/>(1 - ���, <br/>0 - �)</td>
							<td align="center"> 7. ����-�� - � (1), ���� - � (0)</td>
							<td align="center"> 8. ���������� ����� /���� �� ����� �������� ��*  </td>
							<td align="center"> 9. ��� ������-� ��** </td>
							<td align="center"> 10. ��� ���� ����-������ *** </td>
							<td align="center"> 11. ̳���� �� ��, �� ���� ��������� ����������� **** </td>
							<td align="center"> 12. ������� ��  <br/>		  I�'�  ��  <br/> 		   �� ������� ��  </td>
							<td align="center"> 13. ʳ������ ����������� ���  �����-���� �����-���������� </td>
							<td align="center"> 14. ʳ������ �����������  ��� ��� ���������� �������� ����� *****  </td>
							<td align="center"> 15. ʳ������  ��� ���������-�� � ��������/  ��  ��������� �������� ��������-����  ������� ����� </td>
							<td align="center"> 16. ʳ������ ���������� ��� �������� � ��'���� � �������� �� �������� </td>
							<td align="center"> 17. �������� ���� ���������� �������� ����� / ������ (������ � ������� ������� �����) <br/>(���. ���.)</td>
							<td align="center"> 18. ���� ���������� �������� ����� / ������  �  ����� ����������� ��������, �� ��� ������������ ������ ������ <br/>(���. ���.) </td>
							<td align="center"> 19. ���� ������ �� ������� �������� �������� ����� �� �������� ����������� ��������� ������ �� ������ ����� (�� �������� ����� / ������) </td>
							<td align="center"> 20. ���� ���������� ������� ������ �� ������ ����� (�� �������� ����� / ������)  </td>
							<td align="center">21. ���� ������������ ������� ������ �� ������ ����� (�� �������� ����� / �����)</td>
							<td align="center"> 22. ������ �������� ������� ������       <br/>       (1-���,           0-�) </td>
							<td align="center"> 23. ������ �������� ���������                      <br/>      (1-���,              0-�)  </td>
							<td align="center"> 24. ������ ��������� �������� ����    <br/>   (1-���, 0- �)</td>
							<td align="center"> 25. ������ ������ �������� ����       <br/>     (1-���,  0-�) </td>
						</tr>
						<tr>
  </tr>
					</thead>
					<TBODY id="Process">
						<tr>
							<td align="center" width="3%"> 5 </td>
							<td align="center" width="4%"> 6 </td>
							<td align="center" width="4%"> 7 </td>
							<td align="center" width="5%"> 8 </td>
							<td align="center" width="4%"> 9 </td>
							<td align="center" width="4%"> 10 </td>
							<td align="center" width="4%"> 11 </td>
							<td align="center" width="15%"> 12 </td>
							<td align="center" width="4%"> 13 </td>
							<td align="center" width="4%"> 14 </td>
							<td align="center" width="4%"> 15 </td>
							<td align="center" width="4%"> 16 </td>
							<td align="center" width="4%"> 17 </td>
							<td align="center" width="4%"> 18 </td>
							<td align="center" width="4%"> 19 </td>
							<td align="center" width="4%"> 20 </td>
							<td align="center" width="4%"> 21 </td>
							<td align="center" width="4%"> 22 </td>
							<td align="center" width="4%"> 23 </td>
							<td align="center" width="4%"> 24 </td>
							<td align="center" width="4%"> 25 </td>							
						</tr>
						<!--Output Table-->
						<xsl:choose>
							<xsl:when test="count(TABLE/ROW)!=0">
								<xsl:for-each select="TABLE/ROW">
									<TR align="center" id="StretchTable">
										<xsl:attribute name="rownum"><xsl:value-of select="ROWNUM"/></xsl:attribute>
										<TD>
											<SPAN id="spRownum">
												<xsl:value-of select="ROWNUM"/>
											</SPAN>
										</TD>
										<TD>
											<xsl:call-template name="bodyTable_id">
												<xsl:with-param name="rownum" select="ROWNUM"/>
												<xsl:with-param name="id" select="'UKR_GROMAD'"/>
											</xsl:call-template>
										</TD>
										<TD>
											<xsl:call-template name="bodyTable_id">
												<xsl:with-param name="rownum" select="ROWNUM"/>
												<xsl:with-param name="id" select="'ST'"/>
											</xsl:call-template>
										</TD>
										<TD>
										<xsl:call-template name="bodyTable_id">
												<xsl:with-param name="rownum" select="ROWNUM"/>
												<xsl:with-param name="id" select="'NUMIDENT'"/>
											</xsl:call-template>
										</TD>
										<TD>
										<xsl:call-template name="bodyTable_id">
												<xsl:with-param name="rownum" select="ROWNUM"/>
												<xsl:with-param name="id" select="'ZO'"/>
											</xsl:call-template>
										</TD>
										<TD>
											<xsl:call-template name="bodyTable_id">
												<xsl:with-param name="rownum" select="ROWNUM"/>
												<xsl:with-param name="id" select="'PAY_TP'"/>
											</xsl:call-template>
										</TD>
										<TD>
											<xsl:call-template name="bodyTable_id">
												<xsl:with-param name="rownum" select="ROWNUM"/>
												<xsl:with-param name="id" select="'PAY_MNTH'"/>
											</xsl:call-template>.
											<xsl:call-template name="bodyTable_id">
												<xsl:with-param name="rownum" select="ROWNUM"/>
												<xsl:with-param name="id" select="'PAY_YEAR'"/>
											</xsl:call-template>
										</TD>
										<td>
											<xsl:call-template name="bodyTable_id">
												<xsl:with-param name="rownum" select="ROWNUM"/>
												<xsl:with-param name="id" select="'LN'"/>
											</xsl:call-template> <br />
											<xsl:call-template name="bodyTable_id">
												<xsl:with-param name="rownum" select="ROWNUM"/>
												<xsl:with-param name="id" select="'NM'"/>
											</xsl:call-template><br />
											<xsl:call-template name="bodyTable_id">
												<xsl:with-param name="rownum" select="ROWNUM"/>
												<xsl:with-param name="id" select="'FTN'"/>
											</xsl:call-template>
										</td>
										<TD>
											<xsl:call-template name="bodyTable_id">
												<xsl:with-param name="rownum" select="ROWNUM"/>
												<xsl:with-param name="id" select="'KD_NP'"/>
											</xsl:call-template>
										</TD>
										<td>
											<xsl:call-template name="bodyTable_id">
												<xsl:with-param name="rownum" select="ROWNUM"/>
												<xsl:with-param name="id" select="'KD_NZP'"/>
											</xsl:call-template>
										</td>
										<TD>
											<xsl:call-template name="bodyTable_id">
												<xsl:with-param name="rownum" select="ROWNUM"/>
												<xsl:with-param name="id" select="'KD_PTV'"/>
											</xsl:call-template>
										</TD>
										<td>
											<xsl:call-template name="bodyTable_id">
												<xsl:with-param name="rownum" select="ROWNUM"/>
												<xsl:with-param name="id" select="'KD_VP'"/>
											</xsl:call-template>
										</td>
										<TD>
											<xsl:call-template name="bodyTable_id">
												<xsl:with-param name="rownum" select="ROWNUM"/>
												<xsl:with-param name="id" select="'SUM_TOTAL'"/>
											</xsl:call-template>
										</TD>
										<TD>
											<xsl:call-template name="bodyTable_id">
												<xsl:with-param name="rownum" select="ROWNUM"/>
												<xsl:with-param name="id" select="'SUM_MAX'"/>
											</xsl:call-template>
										</TD>
										<TD>
											<xsl:call-template name="bodyTable_id">
												<xsl:with-param name="rownum" select="ROWNUM"/>
												<xsl:with-param name="id" select="'SUM_DIFF'"/>
											</xsl:call-template>
										</TD>
										<TD>
											<xsl:call-template name="bodyTable_id">
												<xsl:with-param name="rownum" select="ROWNUM"/>
												<xsl:with-param name="id" select="'SUM_INS'"/>
											</xsl:call-template>
										</TD>
										<TD>
											<xsl:call-template name="bodyTable_id">
												<xsl:with-param name="rownum" select="ROWNUM"/>
												<xsl:with-param name="id" select="'SUM_NARAH'"/>
											</xsl:call-template>
										</TD>
										<TD>
											<xsl:call-template name="bodyTable_id">
												<xsl:with-param name="rownum" select="ROWNUM"/>
												<xsl:with-param name="id" select="'OTK'"/>
											</xsl:call-template>
										</TD>
										<TD>
											<xsl:call-template name="bodyTable_id">
												<xsl:with-param name="rownum" select="ROWNUM"/>
												<xsl:with-param name="id" select="'EXP'"/>
											</xsl:call-template>
										</TD>
										<TD>
											<xsl:call-template name="bodyTable_id">
												<xsl:with-param name="rownum" select="ROWNUM"/>
												<xsl:with-param name="id" select="'NRC'"/>
											</xsl:call-template>
										</TD>
										<TD>
											<xsl:call-template name="bodyTable_id">
												<xsl:with-param name="rownum" select="ROWNUM"/>
												<xsl:with-param name="id" select="'NRM'"/>
											</xsl:call-template>
										</TD>
									</TR>
								</xsl:for-each>
							</xsl:when>
							<xsl:otherwise>
								<TR align="center" id="StretchTable">
									<xsl:attribute name="rownum">1</xsl:attribute>
									<TD>
										<SPAN id="spRownum">1</SPAN>
									</TD>
									<TD>
										<input id="UKR_GROMAD"/>
									</TD>
									<TD>
										<input id="ST"/>
									</TD>
									<TD>
										<input id="NUMIDENT"/>
									</TD>
									<TD>
										<input id="ZO"/>
									</TD>
									<TD>
										<input id="PAY_TP"/>
									</TD>
									<TD>
										<input id="PAY_MNTH"/>.
										<input id="PAY_YEAR"/>
									</TD>
									<TD>
										<input id="LN"/><br />
										<input id="NM"/><br />
										<input id="FTN"/>
									</TD>
									<TD>
										<input id="KD_NP"/>
									</TD>
									<TD>
										<input id="KD_NZP"/>
									</TD>
									<TD>
										<input id="KD_PTV"/>
									</TD>
									<TD>
										<input id="KD_VP"/>
									</TD>
									<TD>
										<input id="SUM_TOTAL"/>
									</TD>
									<TD>
										<input id="SUM_MAX"/>
									</TD>
									<TD>
										<input id="SUM_DIFF"/>
									</TD>
									<TD>
										<input id="SUM_INS"/>
									</TD>
									<TD>
										<input id="SUM_NARAH"/>
									</TD>
									<TD>
										<input id="OTK"/>
									</TD>
									<TD>
										<input id="EXP"/>
									</TD>
									<TD>
										<input id="NRC"/>
									</TD>
									<TD>
										<input id="NRM"/>
									</TD>
								</TR>
							</xsl:otherwise>
						</xsl:choose>
					</TBODY>
					<tr>
						<td colspan="12"> ����� �� ������� ��������� </td>
						<td >
						<xsl:element name="input">
								<xsl:attribute name="style">width:100%;</xsl:attribute>
								<xsl:attribute name="value"><xsl:value-of select="FOOTER/PAGE_SUM_TOTAL"/></xsl:attribute>
								<xsl:attribute name="id">PAGE_SUM_TOTAL</xsl:attribute>
							</xsl:element>
						</td>
						<td >
						<xsl:element name="input">
								<xsl:attribute name="style">width:100%;</xsl:attribute>
								<xsl:attribute name="value"><xsl:value-of select="FOOTER/PAGE_SUM_MAX"/></xsl:attribute>
								<xsl:attribute name="id">PAGE_SUM_MAX</xsl:attribute>
							</xsl:element>
						</td>
						<td >
							<xsl:element name="input">
								<xsl:attribute name="style">width:100%;</xsl:attribute>
								<xsl:attribute name="value"><xsl:value-of select="FOOTER/PAGE_SUM_DIFF"/></xsl:attribute>
								<xsl:attribute name="id">PAGE_SUM_DIFF</xsl:attribute>
							</xsl:element>
						</td>
					<td >
						<xsl:element name="input">
								<xsl:attribute name="style">width:100%;</xsl:attribute>
								<xsl:attribute name="value"><xsl:value-of select="FOOTER/PAGE_SUM_INS"/></xsl:attribute>
								<xsl:attribute name="id">PAGE_SUM_INS</xsl:attribute>
							</xsl:element>
						</td>
						<td >
							<xsl:element name="input">
								<xsl:attribute name="style">width:100%;</xsl:attribute>
								<xsl:attribute name="value"><xsl:value-of select="FOOTER/PAGE_SUM_NARAH"/></xsl:attribute>
								<xsl:attribute name="id">PAGE_SUM_NARAH</xsl:attribute>
							</xsl:element>
							</td>

					</tr>					
				</table>
				<br/>
<table width="100%" border="0">
					<tr>
						<td width="35%">
							<xsl:text disable-output-escaping="yes">&amp;nbsp;</xsl:text>
						</td>
						<td width="10%">
							<xsl:text disable-output-escaping="yes">&amp;nbsp;</xsl:text>
						</td>
						<td width="35%" align="right">26. ʳ������ ���������� ����� �� ������ </td>
						<td width="10%" align="center" class="td_box">
							<xsl:element name="input">
								<xsl:attribute name="style">width:100%;</xsl:attribute>
								<xsl:attribute name="value"><xsl:value-of select="FOOTER/ROWS"/></xsl:attribute>
								<xsl:attribute name="id">ROWS</xsl:attribute>
							</xsl:element>
						</td>
					</tr>
				</table>
				</div>
			</xsl:for-each>

				<table width="50%" border="0">
					<tr>
						<td width="35%">27. ���� ���������� � ��������������: </td>
						<td width="10%" align="center" class="td_box">
							<xsl:call-template name="body_id">
								<xsl:with-param name="id" select="'DATA_FILL'"/>
							</xsl:call-template>
						</td>
					</tr>
				</table>
				<table width="100%" border="0">
				<tr>
					<td>* ��� �������� ���, �� ����� ������ � ������� ��� ����� ���������� ����-�� ������ 
�� ���� �� ������� ��������.</td>
				</tr>
				<tr>
						<td>** ��� ������� �� - ��������� � ������� ���������� ���� ������� ������������ ����� 
�� ���� ���� ����������� � ������ ������ ������� ������ �� ������������`������ �������� ��������� �����������  (������� 2).</td>
					</tr>
					<tr>
						<td>*** ��� ���� ����������: <br/>
1 � ���� �������� ����� (������) �� �������� ������ (����� �������), ����� ��������� ���� �������� ����������� �����, 
� ����� �� ������������� ��� ���� ��������� � ������ ��� ����� � ������� ���� - ������� �������� ����� �� ��������� ������;	<br />																																																						
 2 - ���� �������� ����� (������), ���������� � ��������� ������ ������� �� ������ �������������� �� ����� ���������,
 �������� �� ���� ����������� ����������� (����������) ��� �� ������������ ����������� (����������) �������� ����� (������), 
�� ��� ��������������� ��������� ������������ ���� ������� ������;		<br />																																																					
3 - ���� �������� ����� (������), ���������� � ��������� ������ ������� �� ������ �������������� �� ����� ���������,
 �������� �� ���� ����������� ����������� (����������)   ���   ��  ������������  ����������� (����������) �������� ����� 
(������), �� ���  ��������������� ��������� �������� ����� ���������� ���� ������� ������;		<br />																																																					
6 � ���� �������� ����� (������), ���������� � ��������� ������ ������� �� ������ �������������� �� ����� ���������, 
�������� �� ���� ����������� ����������� (����������) ��� �� ������������ ����������� (����������) �������� ����� (������), 
�� ��� ��������������� ��������� ������������ ���� ������ �� ������������'������ �������� ������� ����������� �� ����� 
�� 1 ���� 2011 ����;			<br />																																																				
7 - ���� �������� ����� (������), ���������� � ��������� ������ ������� �� ������ �������������� �� ����� ���������,
 �������� �� ���� ����������� ����������� (����������)   ���   ��  ������������  ����������� (����������) �������� �����
 (������), �� ���  ��������������� ��������� �������� ���������� ���� ������ �� ������������'������ �������� ������� 
����������� �� ����� �� 1 ���� 2011 ����;	<br />																																																						
8 - ���� �������� ����� (������), ���������� � ��������� ������ ������� �� ������ �������������� �� ����� ���������, 
�������� �� ���� ����������� ����������� (����������) ��� �� ������������ ����������� (����������) �������� ����� 
(������), �� ��� ��� �������� ������� ��������� ����� ������������ ���� ������ �� ������������'������ �������� ������� 
����������� �� ����� �� 1 ���� 2011 ����;		<br />																																																					
9 - ���� �������� ����� (������), ���������� � ��������� ������ ������� �� ������ �������������� �� ����� ���������,
 �������� �� ���� ����������� ����������� (����������)   ���   ��  ������������  ����������� (����������) �������� �����
 (������), �� ���  ��� �������� ������� ��������� ����� �������� ���������� ���� ������ �� ������������'������ ��������
 ������� ����������� �� ����� �� 1 ���� 2011 ����;		<br />																																																					
10 � ���������� ���� �������� (������) �� �� ��������;	<br />																																																						
11 - ���� �������� ����� (������), ���������� � ��������� ������ ������� �� ������ �������������� �� ����� ���������,
 �������� �� ���� ����������� ����������� (����������) ��� �� ������������ ����������� (����������) �������� ����� (������),
 �� ��� ��� �������� ����������� ��������  ������������ ���� ������� ������;				<br />																																																			
12 - ���� �������� ����� (������), ���������� � ��������� ������ ������� �� ������ �������������� �� ����� ���������, 
�������� �� ���� ����������� ����������� (����������) ��� �� ������������ ����������� (����������) �������� �����
 (������), �� ��� ��� �������� ����������� �������� �������� ����� ���������� ���� ������� ������;<br />																																																							
13 - ���� ������ �� ������� �������� �������� ����� �� �������� ����������� ��������� ������ �� ������ ����� 
(�� �������� ����� / ������).	</td>
					</tr>
					<tr>
		<td>****  ̳���� �� ��, �� ���� ��������� �����������, - ������� ���������� ������� ���� ����������. </td>
					</tr>
					<tr>
	<td> ***** ʳ������ �����������  ��� ��� ���������� �������� ����� - ������� ����������� ��� ���� ����
 ���������� �� ������ ���� "-" � ��� ����������� ��������� ������� ����� ���, ����������� � ��������� ������ �������.</td>
					</tr>
				</table>
				
				<table width="100%" border="0">
					<tr>
						<td width="15%">28. �������  </td>
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
						<td><font size="-1">(����������  ����� ��� ���� �� ����� ��������*)   </font>  </td>
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
							<font size="-1"> (������� �� �������)</font>
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
						<td>29. �������� ���������</td>
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
						</td>
						<td><font size="-1">(����������  ����� ��� ���� �� ����� ��������*)    </font> </td>
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
							<font size="-1"> (������� �� �������)</font>
						</td>
					</tr>
				</table>
				<br/>
				<table width="100%">
					<tr align="center">
						<td>�.�.  (�� ��������)</td>
					</tr>
				</table>
			</body>
		</html>
	</xsl:template>
	<xsl:template name="body_id">
		<xsl:param name="id"/>
		<xsl:param name="tCss"/>
		<xsl:param name="canBeX"/>
		<xsl:param name="disabled"/>
		<xsl:param name="WidthNone"/>
		<xsl:call-template name="body_zn">
			<xsl:with-param name="id" select="$id"/>
			<xsl:with-param name="canBeX" select="$canBeX"/>
			<xsl:with-param name="disabled" select="$disabled"/>
			<xsl:with-param name="zn" select="//DECLAR//*[name()=$id]"/>
			<xsl:with-param name="tCss" select="$tCss"/>
			<xsl:with-param name="WidthNone" select="$WidthNone"/>
		</xsl:call-template>
	</xsl:template>
	<xsl:template name="body_zn">
		<xsl:param name="id"/>
		<xsl:param name="zn"/>
		<xsl:param name="rownum"/>
		<xsl:param name="canBeX"/>
		<xsl:param name="WidthNone"/>
		<input type="textbox">
			<xsl:if test="string-length($canBeX)>0">
				<xsl:attribute name="canBeX">true</xsl:attribute>
			</xsl:if>
			<xsl:attribute name="value"><xsl:value-of select="$zn"/></xsl:attribute>
			<xsl:attribute name="id"><xsl:value-of select="$id"/></xsl:attribute>
			<xsl:if test="string-length($rownum)>0">
				<xsl:attribute name="rownum"><xsl:value-of select="$rownum"/></xsl:attribute>
			</xsl:if>
			<xsl:if test="not(string-length($WidthNone)>0)">

					</xsl:if>
		</input>
	</xsl:template>
    <xsl:template name="bodyTable_id">
		<xsl:param name="id"/>
		<xsl:param name="tCss"/>
		<xsl:param name="canBeX"/>
		<xsl:param name="rownum"/>
		<xsl:param name="disabled"/>
		<xsl:param name="WidthNone"/>
		<xsl:call-template name="body_zn">
			<xsl:with-param name="id" select="$id"/>
			<xsl:with-param name="canBeX" select="$canBeX"/>
			<xsl:with-param name="disabled" select="$disabled"/>
			<xsl:with-param name="zn" select="*[name()=$id]"/>
			<xsl:with-param name="tCss" select="$tCss"/>
			<xsl:with-param name="WidthNone" select="$WidthNone"/>
		</xsl:call-template>
	</xsl:template>
		
</xsl:stylesheet>

