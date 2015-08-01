<?xml version="1.0" encoding="windows-1251"?>
<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
<xsl:output method="html" encoding="windows-1251"/>
<xsl:template match="DECLAR">

<html>
<head>
<title>E04T00I - "��� ��� ���� ���������� �������� ����� (������, ��������� ������������, ��������, �����������) 
������������� ��� �� ���� ������������ ������� ������ �� ������������������ �������� ��������� ����������� �� ���������� ������"</title>
<style>
.td_border1 {border: 1px solid black;}
</style>
<script SRC="./PrepareEditDoc.js" ></script></head>

<body>
	 <table width="100%">
  <tr>
    <td width="30%" valign="bottom" align="center"><xsl:text disable-output-escaping="yes">&amp;nbsp;</xsl:text>  </td>
    <td width="10%"><xsl:text disable-output-escaping="yes">&amp;nbsp;</xsl:text> </td>
    <td width="40%"> ������� 4    <br />
 �� ������� ���������� �� �������    ���������������� ���� ���� ���    ������������ ������� ������ �� 
   ������������������ ��������           ��������� �����������	   (����� 1 ������ ���)</td>
  </tr>
</table>
<br />
<table width="100%" border="0">
  <tr align="center">
    <td colspan="6"> <b>�������</b>  </td>
  </tr>
  <tr align="center">
    <td colspan="6"><b>��� ��� ���� ���������� �������� ����� (������, ��������� ������������, ��������, �����������) 
������������� ��� �� ���� ������������ ������� ������ �� ������������������ �������� ��������� ����������� �� ���������� ������</b></td>
  </tr>
 </table>
 <table width="60%" border="0">
  <tr >
		<td width="35%" >1. ��� �� �����</td>
    <td width="5%" class="td_box"><xsl:call-template name="body_id"><xsl:with-param name="id" select="'PERIOD_MONTH'"/></xsl:call-template></td>
    <td width="10%" align="right">��:</td>
    <td width="5%" class="td_box"><xsl:call-template name="body_id"><xsl:with-param name="id" select="'PERIOD_YEAR'"/></xsl:call-template></td>
  </tr>
</table>
<br />
<table cellspacing="0" border="1" >
  <tr>
    <td width="30%"  align="center" class="td_border1">�������:</td>
    <td width="30%" align="center" class="td_border1">������ �������</td>
    <td width="15%" ><xsl:text disable-output-escaping="yes">&amp;nbsp;</xsl:text></td>
    <td align="left" rowspan="2" ><b>����� � �4</b>
     <i>(������) </i>
          	     
    	<div id="FORM_TYPE" style="padding:10px;"><input type="checkbox" onclick="SelectEFormType();" style="margin:2px;">
									<xsl:if test="//DECLARBODY//*[name()='FORM_TYPE'][.='1']">
										<xsl:attribute name="checked">true</xsl:attribute>
									</xsl:if>(���������) </input>
								<br/><input type="checkbox" onclick="SelectEFormType();" style="margin:2px;">
									<xsl:if test="//DECLARBODY//*[name()='FORM_TYPE'][.='2']">
										<xsl:attribute name="checked">true</xsl:attribute>
									</xsl:if>(����������)</input>
								<br/><input type="checkbox" onclick="SelectEFormType();" style="margin:2px;">
									<xsl:if test="//DECLARBODY//*[name()='FORM_TYPE'][.='3']">
										<xsl:attribute name="checked">true</xsl:attribute>
									</xsl:if>(���������)</input>
								<br/>
							</div>
                   <br />�����������<br />
                   ������� ̳��������� ������� ������ <br />
		14.04.2015 � 435 <br /> 
                   �� ����������� �  ���������� <br /> 
            </td>
  </tr>
  <tr>
    <td width="30%" align="left" class="td_border1">��������������, ������ ����� - ��������, � ���� ���� �,
 �� ������ �������� ������� �������������, �����,  ��  ��������� ��������� ��������� ��������, 
�� �������������� ����� �������� ���, ������ (����) 
��������� ����� �� ����������� ������� ���������, - ��������� ���������� ������� �� ����� ���������</td>
    <td width="30%" align="left" valign="top" class="td_border1" >�� ����� �� ����� 20 ����������� ���, 
��������� �� ������� ����������� ���� ������� ����� </td>
    <td width="15%" ><xsl:text disable-output-escaping="yes">&amp;nbsp;</xsl:text></td>
  </tr>
     </table>
 <br />

<table width="100%" border="0" cellspacing="4">
  <tr>
    <td  >2. ��� �� ������/ ������������ ����� ������� ������ �������� �������   </td>
    <td width="20%" class="td_box"><xsl:call-template name="body_id"><xsl:with-param name="id" select="'FIRM_EDRPOU'"/></xsl:call-template></td>
		<td  >3. ��� �� ������ ��� ���������� �����/���� �� ����� �������� ����������� ��������������* (������������ � ��� ������ ���� ����������������)     </td>
    <td width="20%" class="td_box"><xsl:call-template name="body_id"><xsl:with-param name="id" select="'LIKV_EDRPOU'"/></xsl:call-template></td>
  </tr>
  <tr>
    <td >4. ������������ / �������, ��'�, �� ������� <br />
<i>(��������������/������� �����)</i>
</td>
    <td class="td_box" colspan="3">
<xsl:element name="input">
<xsl:attribute name="style">width:100%;</xsl:attribute>
<xsl:attribute name="value"><xsl:value-of select="//DECLAR//*[name()='FIRM_NAME']" /></xsl:attribute>
<xsl:attribute name="id">FIRM_NAME</xsl:attribute>
</xsl:element></td>
  </tr>
  <tr>
    <td  >̳�������������� / ̳��� ����������</td>
    <td class="td_box" colspan="3">
<xsl:element name="input">
<xsl:attribute name="style">width:100%;</xsl:attribute>
<xsl:attribute name="value"><xsl:value-of select="//DECLAR//*[name()='FIRM_ADR']" /></xsl:attribute>
<xsl:attribute name="id">FIRM_ADR</xsl:attribute>
</xsl:element>
   </td>
  </tr>
  <tr>
    <td  >������� </td>
    <td class="td_box"  align="left" colspan="3"><xsl:call-template name="body_id"><xsl:with-param name="id" select="'FIRM_PHON'"/></xsl:call-template> </td>
  </tr>
	<tr>
    <td  >5.��� �������������� ����������� ������, �� ����� �������� ��� </td>
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
    <td align="center" >������ ������� ����</td>
  </tr>
</table>

<table border="1"  width="100%" cellspacing="0" bordercolor="black">
  <tr>
    <td  width="4%" align="center"> � �/�</td>
    <td  width="70%" align="center"> ����� �������</td>
    <td  width="10%" align="center"> ʳ������ �������</td>
    <td  width="10%" align="center" >ʳ������ �����</td>
  </tr>
	<tr>
    <td  align="center"  > 1</td>
    <td   > ����������� ������� ������ </td>
    <td  align="right"><xsl:call-template name="body_id"><xsl:with-param name="id" select="'N1_0'"/></xsl:call-template>  </td>
    <td  align="center" > * </td>
  </tr>
	<tr>
    <td  align="center"  > 2</td>
    <td   >����������� ������� ������ �� ������������'������ �������� ��������� ����������� �� ���� ������� ������������� ���</td>
    <td  align="right"><xsl:call-template name="body_id"><xsl:with-param name="id" select="'N2_0'"/></xsl:call-template>  </td>
    <td  align="center" > * </td>
  </tr>
	<tr>
    <td  align="center"  > 3</td>
    <td   > ����������� ������� ������ �� ������������'������ �������� ��������� ����������� �� ���, �� ��������� �������� �������� ������</td>
    <td  align="right"><xsl:call-template name="body_id"><xsl:with-param name="id" select="'N3_0'"/></xsl:call-template>  </td>
    <td  align="center" > * </td>
  </tr>
	 <tr>
    <td   align="center" >4</td>
    <td   >����������� ������� ������ �� ������������������ �������� ��������� �����������  �� ���� ��������� ������������</td>
    <td  align="right"><xsl:call-template name="body_id"><xsl:with-param name="id" select="'N4_0'"/></xsl:call-template>  </td>
    <td  align="center" > * </td>
  </tr>
		<tr>
    <td  align="center"  >5</td>
    <td   >³������ ��� ������ �������� ������������� ���</td>
    <td  align="right"><xsl:call-template name="body_id"><xsl:with-param name="id" select="'N5_0'"/></xsl:call-template>  </td>
    <td  align="right"><xsl:call-template name="body_id"><xsl:with-param name="id" select="'N5_1'"/></xsl:call-template>  </td>
  </tr>
		<tr>
    <td  align="center"  >6</td>
    <td   >³������ ��� ����������� �������� ����� (������) ������������� ������</td>
    <td  align="right"><xsl:call-template name="body_id"><xsl:with-param name="id" select="'N6_0'"/></xsl:call-template>  </td>
    <td  align="right"><xsl:call-template name="body_id"><xsl:with-param name="id" select="'N6_1'"/></xsl:call-template>  </td>
  </tr>
		<tr>
    <td  align="center"  >7</td>
    <td   >�������� ������ ��� ����� ����� ������� ��������� ��� �������� �� ������������� </td>
    <td  align="right"><xsl:call-template name="body_id"><xsl:with-param name="id" select="'N7_0'"/></xsl:call-template>  </td>
    <td  align="right"><xsl:call-template name="body_id"><xsl:with-param name="id" select="'N7_1'"/></xsl:call-template>  </td>
  </tr>
		<tr>
    <td  align="center"  >8</td>
    <td   >³������ ��� ���, �� ���������� �� ������� �� ���������� ��� ��������� ��� �� �������� �� ������ 
��������� �������� �� ������� �� ������� �� ���������� ��� ��������� ��� ��/��� ��� ��������� ������, 
�� ��� �� ����� ����������� ������������ ������, �����������, ������, ������������, �� �������� 
��������� ������ �� �������-��������, � ����� ����������� ������������ ���, �� ��������� ������ 
 �� �������� � ����� ��� �� ����������, ���� �� ��������� ��������� ������� ������� ��������� ����������� ������� 
��� ����� 80-������ ���, ���� ��� ���������� ���������� ����� ��������� �������� ��� ����������� �������� �� �������������, 
�� ����������� ��� ������� ������ �� ������-���������� ������� ������� �������� ����, ��������� ������, 
���� ���� ��������� ������� ������������ �������� �� �������������</td>
    <td  align="right"><xsl:call-template name="body_id"><xsl:with-param name="id" select="'N8_0'"/></xsl:call-template>  </td>
    <td  align="right"><xsl:call-template name="body_id"><xsl:with-param name="id" select="'N8_1'"/></xsl:call-template>  </td>
  </tr>
		<tr>
    <td   align="center" >9</td>
    <td   >³������ ��� ���, �� ��������� ��������  �������� ������</td>
    <td  align="right"><xsl:call-template name="body_id"><xsl:with-param name="id" select="'N9_0'"/></xsl:call-template>  </td>
    <td  align="right"><xsl:call-template name="body_id"><xsl:with-param name="id" select="'N9_1'"/></xsl:call-template>  </td>
  </tr>
		<tr>
    <td   > </td>
    <td   ><b>������</b></td>
    <td  align="right"><xsl:call-template name="body_id"><xsl:with-param name="id" select="'N10_0'"/></xsl:call-template>  </td>
    <td  align="right"><xsl:call-template name="body_id"><xsl:with-param name="id" select="'N10_1'"/></xsl:call-template>  </td>
  </tr>
     </table>
<br />
* ��� �������� ���, �� ����� ������ � ������� ��� ����� ���������� ����-�� ������ �� ���� �� ������� ��������.

<table width="100%" border="0">
  <tr>
    <td width="15%">�������  </td>
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
		<td>    (����������  ����� ��� ����  �� ����� ��������*)  </td>
    <td><xsl:text disable-output-escaping="yes">&amp;nbsp;</xsl:text></td>
    <td align="center"><font size="-1">(�����)</font></td>
    <td><xsl:text disable-output-escaping="yes">&amp;nbsp;</xsl:text></td>
    <td align="center"><font size="-1">(������� �� �������)  )</font></td>
  </tr>
  <tr>
    <td><xsl:text disable-output-escaping="yes">&amp;nbsp;</xsl:text></td>
    <td><xsl:text disable-output-escaping="yes">&amp;nbsp;</xsl:text></td>
    <td><xsl:text disable-output-escaping="yes">&amp;nbsp;</xsl:text></td>
    <td><xsl:text disable-output-escaping="yes">&amp;nbsp;</xsl:text></td>
    <td><xsl:text disable-output-escaping="yes">&amp;nbsp;</xsl:text></td>
  </tr>
  <tr>
    <td  >�������� ���������</td>
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
		<td>(����������  ����� ��� ����  �� ����� ��������*)     </td>
    <td><xsl:text disable-output-escaping="yes">&amp;nbsp;</xsl:text></td>
    <td align="center"><font size="-1">(�����)</font></td>
    <td><xsl:text disable-output-escaping="yes">&amp;nbsp;</xsl:text></td>
    <td align="center"><font size="-1">(������� �� �������)  </font></td>
  </tr>
</table>
<br />
<table width="100%">
  <tr align="center">
    <td>�.�. (�� ��������)</td>
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

