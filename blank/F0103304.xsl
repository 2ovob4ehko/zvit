<?xml version="1.0" encoding="windows-1251"?>
<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
<xsl:output method="html" encoding="windows-1251"/>

<xsl:variable name="T1" select="//*[substring(name(),1,2)='T1']" />
<xsl:key name="grT1" match="//*[substring(name(),1,2)='T1']" use="@ROWNUM"/>

<xsl:variable name="T2" select="//*[substring(name(),1,2)='T2']" />
<xsl:key name="grT2" match="//*[substring(name(),1,2)='T2']" use="@ROWNUM"/>

<xsl:template match="DECLAR">

<html><head>
<title>F0103304 - "��������� �������ֲ� �������� ������� ������� - Բ����ί ����� - ϲ���Ȫ���"</title>
<link HREF="./css/xsl_edit_styles.css" REL="stylesheet"></link>
<script SRC="./PrepareEditDoc.js" ></script></head><body>

<table BORDER="0" width="100%" class="td_box">
	<tr >
	  <td>  <font color="red"> *  <b> ���� ����'����� ��� ����������. </b></font ></td>
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
    <td width="45%">����������� <br />
����� ̳��������� ������� ������  <br />
21.12.2011 � 1688  <br />
(� �������� ������ ̳��������� ������� ������   �� 07.11.2012 � 1159) </td>
  </tr>
</table>
<br />
<table width="100%" border="1" cellpadding="0" cellspacing="0">
 	<tr>
	  <td  align="center" >
	    <h2>��������� �������ֲ� �������� ������� ������� -  Բ����ί ����� - ϲ���Ȫ���</h2> <br />
			�. ������Ͳ ²�����Ҳ
	  </td>
		 	</tr>
 </table>

 <table width="100%" border="0" cellpadding="0" cellspacing="0">
	<tr>
		<th rowspan="2" width="30" align="center" class="td_box"><b> 1</b><font color="red"> *  </font> </th>
	  <td colspan="8"  > 	    ��� ��������� ����������	  </td>
 	</tr>
	<tr>
		<td width="60" class="td_box"><xsl:call-template name="body_id"><xsl:with-param name="id" select="'HZ'"/></xsl:call-template></td>
		<td>�����</td>

		<td class="td_box"><xsl:call-template name="body_id"><xsl:with-param name="id" select="'HZN'"/></xsl:call-template></td>
		<td>����� ���� </td>

	  <td class="td_box"><xsl:call-template name="body_id"><xsl:with-param name="id" select="'HZU'"/></xsl:call-template></td>
		<td>��������� </td>

		<td class="td_box"><xsl:call-template name="body_id"><xsl:with-param name="id" select="'HD'"/></xsl:call-template></td>
		<td>��������* </td>
		 </tr>
   </table>


 <table width="100%" border="0" cellpadding="0" cellspacing="0">
	 <tr>
		<th rowspan="2" width="2%" align="center" class="td_box"><b>2</b> <font color="red"> *  </font></th>
	  <td colspan="5"  > 	    ������ (����������) �����, �� ���� �������� ��� ����������� ��������� ����������: </td>
		<td width="5%" class="td_box"><xsl:call-template name="body_id"><xsl:with-param name="id" select="'HZY'"/></xsl:call-template></td>
		<td width="5%"  >(��)</td>
 	</tr>
 <tr>
    <td width="10%" align="right">� �������</td>
		<td width="3%" class="td_box"><xsl:call-template name="body_id"><xsl:with-param name="id" select="'H1KV'"/></xsl:call-template></td>

    <td width="10%" align="right">������ </td>
		<td width="3%" class="td_box"><xsl:call-template name="body_id"><xsl:with-param name="id" select="'HHY'"/></xsl:call-template></td>

    <td width="10%" align="right">��� ��������</td>
		<td width="3%" class="td_box"><xsl:call-template name="body_id"><xsl:with-param name="id" select="'H3KV'"/></xsl:call-template></td>

    <td width="5%" align="right">��</td>
		<td width="3%" class="td_box"><xsl:call-template name="body_id"><xsl:with-param name="id" select="'HY'"/></xsl:call-template></td>

    <td width="10%" align="right">�����*</td>
		<td width="3%" class="td_box"><xsl:call-template name="body_id"><xsl:with-param name="id" select="'HMONTH'"/></xsl:call-template></td>

	 </tr>
	    </table>

	<table width="100%" border="1" cellpadding="0" cellspacing="0">
		<tr>
    <th align="center" width="2%" valign="middle" class="td_box" rowspan="4" >     <b>3</b><font color="red"> *  </font>     </th>
    <td colspan="2"> �������, ��'�, �� ������� �������� �������:	 </td>	</tr>
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
       <td width="70%">  ������������ ����� ������� ������ �������� ������� - ������� ����� - ��������: </td>
			 <td width="10%" ><xsl:call-template name="body_id"><xsl:with-param name="id" select="'HTIN'"/></xsl:call-template></td>
		</tr>
		<tr>
       <td colspan="2"> ��� ���� �� ����� �������� (��� �������� ���, �� ����� ������ ����������� ������������ �� ��������� ������������� ������
������� ������ �������� ������� �� ��������� ��� �� ��������� ����� �������� ��������� ������ � ����� ������ � �������)</td>
		</tr>
      </table>

		<table width="100%" border="1" cellpadding="0" cellspacing="0">
		<tr>
    <th align="center" width="2%" valign="middle" class="td_box" rowspan="4">     <b>4</b>     </th>
    <td colspan="3"> ��������� ������ (���� ����������) �������� ������� <font color="red"> *  </font></td>
		<td width="15%">  �������� ������</td>
		<td width="10%" ><xsl:call-template name="body_id"><xsl:with-param name="id" select="'HZIP'"/></xsl:call-template></td>
</tr>
		<tr>
		<td width="10%"> (�������, ����):   </td>
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
		<td  >  �������� ���</td>
		<td width="10%" ><xsl:call-template name="body_id"><xsl:with-param name="id" select="'HINTURB'"/></xsl:call-template></td>
	</tr>
		<tr>
		<td width="15%">  ������: <font color="red"> *  </font>   </td>
		<td colspan="2" >
		<xsl:element name="input">
<xsl:attribute name="style">width:100%;</xsl:attribute>
<xsl:attribute name="value"><xsl:value-of select="//DECLARBODY/*[name()='HLOC']" /></xsl:attribute>
<xsl:attribute name="id">HLOC</xsl:attribute>
</xsl:element></td>
		<td  >  �������</td>
		<td width="10%" ><xsl:call-template name="body_id"><xsl:with-param name="id" select="'HTEL'"/></xsl:call-template></td>
		</tr>
		<tr>
		<td width="15%"> ���������� ������<sup>1</sup>:    </td>
		<td colspan="2" >
		<xsl:element name="input">
<xsl:attribute name="style">width:100%;</xsl:attribute>
<xsl:attribute name="value"><xsl:value-of select="//DECLARBODY/*[name()='HEMAIL']" /></xsl:attribute>
<xsl:attribute name="id">HEMAIL</xsl:attribute>
</xsl:element></td>
		<td  >  ����<sup>1</sup>:</td>
		<td width="10%" ><xsl:call-template name="body_id"><xsl:with-param name="id" select="'HFAX'"/></xsl:call-template></td>
		</tr>
      </table>

		 <table width="100%" border="1" cellpadding="0" cellspacing="0">
<tr>
		<th align="center" valign="middle" class="td_box" rowspan="2" width="3%">     <b>5</b> <font color="red"> *  </font>    </th>
    <td  > ������������ ������ �������� ��������� ������, �� ����� �������� ��������� ����������:	</td>
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
    <td width="97%"> ���� ������������ ��������, �� ������������ � ������� �����:  </td>
	</tr>
</table>
 <table width="100%" border="1" cellpadding="0" cellspacing="0">
 <TBODY id="Process">

<tr>
		<td width="20%" >����� ����� � ����<font color="red"> *  </font></td>
		<td  > ����� ����� � ����<font color="red"> *  </font></td>
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
    <td  width="70%"> �������� ���������� ���������� �  �������  �����:  </td>
		<td width="10%" ><xsl:call-template name="body_id"><xsl:with-param name="id" select="'HNACTL'"/></xsl:call-template></td>
	</tr>
  </table>

 <table border="0" width="100%" cellspacing="0" bordercolor="#000000">
  <tr  >
    <td>*  �������� � ����� ���������  ������ ��� ������ ��  ����� �����, ��  ����������� (�����) ���������� (������) �����, ����������� ��������.</td>
  </tr>
	 <tr  >
    <td><sup>1</sup>  �� �������� �������� �������.</td>
  </tr>
 </table>
  <br />

	 <table border="0"  width="100%" cellspacing="0" bordercolor="#000000">
  <tr  >
    <td align="center"><b>��. ��������� �����������ί Ĳ������Ҳ ��� ������ʲ� ������� ������� � �����</b></td>
  </tr>
	 <tr  >
    <td>������� ������� ������, ���.</td>
  </tr>
 </table>

<table border="1" width="100%" cellspacing="0" bordercolor="#000000">
  <tr align="center">
    <td width="10%">� �/�</td>
    <td width="15%">�  �������</td>
    <td width="15%">�I  ������� </td>
		<td width="15%">�II  �������</td>
    <td width="15%">IV  ������� </td>
  </tr>
  <tr align="center">
    <td>1</td>
    <td>2</td>
    <td>3</td>
		<td>4</td>
    <td>5</td>
  </tr>
  <tr>
    <td>1-� ����� ��������</td>
    <td align="right"><xsl:call-template name="body_id"><xsl:with-param name="id" select="'R0201G2'"/></xsl:call-template></td>
		<td align="right"><xsl:call-template name="body_id"><xsl:with-param name="id" select="'R0201G3'"/></xsl:call-template></td>
		<td align="right"><xsl:call-template name="body_id"><xsl:with-param name="id" select="'R0201G4'"/></xsl:call-template></td>
		<td align="right"><xsl:call-template name="body_id"><xsl:with-param name="id" select="'R0201G5'"/></xsl:call-template></td>
  </tr>
	<tr>
    <td>2-� ����� ��������</td>
    <td align="right"><xsl:call-template name="body_id"><xsl:with-param name="id" select="'R0202G2'"/></xsl:call-template></td>
		<td align="right"><xsl:call-template name="body_id"><xsl:with-param name="id" select="'R0202G3'"/></xsl:call-template></td>
		<td align="right"><xsl:call-template name="body_id"><xsl:with-param name="id" select="'R0202G4'"/></xsl:call-template></td>
		<td align="right"><xsl:call-template name="body_id"><xsl:with-param name="id" select="'R0202G5'"/></xsl:call-template></td>
  </tr>
	<tr>
    <td>3-� ����� ��������</td>
    <td align="right"><xsl:call-template name="body_id"><xsl:with-param name="id" select="'R0203G2'"/></xsl:call-template></td>
		<td align="right"><xsl:call-template name="body_id"><xsl:with-param name="id" select="'R0203G3'"/></xsl:call-template></td>
		<td align="right"><xsl:call-template name="body_id"><xsl:with-param name="id" select="'R0203G4'"/></xsl:call-template></td>
		<td align="right"><xsl:call-template name="body_id"><xsl:with-param name="id" select="'R0203G5'"/></xsl:call-template></td>
  </tr>
</table>

 <table border="1" width="100%" cellspacing="0" bordercolor="#000000">
  <tr align="center">
    <td width="60%">����� ���������</td>
    <td width="5%">��� �����</td>
    <td width="10%">����� (���.)* </td>
  </tr>
  <tr align="center">
    <td>1</td>
    <td>2</td>
    <td>3</td>
  </tr>
  <tr>
    <td>���� ������ �� ������ (����������) ����� �������� �� ����� 292 ����� 1 ������ XIV ����������� ������� ������
(����� � ��������� 1 ������ 291.4 ����� 291 ����� 1 ������ XIV ����������� ������� ������)</td>
    <td align="center">01</td>
    <td align="right"><xsl:call-template name="body_id"><xsl:with-param name="id" select="'R001G3'"/></xsl:call-template></td>
  </tr>
  <tr>
    <td>���� ������, �� �������� ������, ���������� ��������� 1 ������ 291.4 ����� 291 ����� 1 ������ XIV ����������� ������� ������,
 � ������� (�����������) �����</td>
    <td align="center">02  </td>
    <td align="right"><xsl:call-template name="body_id"><xsl:with-param name="id" select="'R002G3'"/></xsl:call-template></td>
  </tr>
  <tr>
    <td>���� ������, ���������� �� ����������� ��������, �� ��������� � ������� �������� ������� �������, � ������� (�����������) �����</td>
    <td align="center">03 </td>
    <td align="right"><xsl:call-template name="body_id"><xsl:with-param name="id" select="'R003G3'"/></xsl:call-template></td>
  </tr>

	 <tr>
    <td>���� ������, ���������� ��� ����������� ������ ������� ����������, �� ����������� ������� 291.6 ����� 291 ����� 1 ������ XIV ����������� ������� ������,
� ������� (�����������) �����</td>
    <td align="center">04</td>
    <td align="right"><xsl:call-template name="body_id"><xsl:with-param name="id" select="'R004G3'"/></xsl:call-template></td>
  </tr>
  <tr>
    <td>���� ������, ���������� �� ��������� ���� ��������, �� �� ����� ����� �� ������������ �������� ������� �������������, � ������� (�����������) �����</td>
    <td align="center">05 </td>
    <td align="right"><xsl:call-template name="body_id"><xsl:with-param name="id" select="'R005G3'"/></xsl:call-template></td>
  </tr>
	</table>

		 <table border="0"  width="100%" cellspacing="0" bordercolor="#000000">
	 <tr  >
    <td>* ������������ ����������� �������� � ������� ����.</td>
  </tr>
 </table>
	<br />

	 <table border="0"  width="100%" cellspacing="0" bordercolor="#000000">
  <tr  >
    <td align="center"><b>���. ��������� �����������ί Ĳ������Ҳ ��� ������ʲ� ������� ������� �� �����</b></td>
  </tr>
	 <tr  >
    <td>������� ������� ������, ���.</td>
  </tr>
 </table>

<table border="1" width="100%" cellspacing="0" bordercolor="#000000">
  <tr align="center">
    <td width="10%">� �/�</td>
    <td width="15%">�  �������</td>
    <td width="15%">�I  ������� </td>
		<td width="15%">�II  �������</td>
    <td width="15%">IV  ������� </td>
  </tr>
  <tr align="center">
    <td>1</td>
    <td>2</td>
    <td>3</td>
		<td>4</td>
    <td>5</td>
  </tr>
  <tr>
    <td>1-� ����� ��������</td>
    <td align="right"><xsl:call-template name="body_id"><xsl:with-param name="id" select="'R0301G2'"/></xsl:call-template></td>
		<td align="right"><xsl:call-template name="body_id"><xsl:with-param name="id" select="'R0301G3'"/></xsl:call-template></td>
		<td align="right"><xsl:call-template name="body_id"><xsl:with-param name="id" select="'R0301G4'"/></xsl:call-template></td>
		<td align="right"><xsl:call-template name="body_id"><xsl:with-param name="id" select="'R0301G5'"/></xsl:call-template></td>
  </tr>
	<tr>
    <td>2-� ����� ��������</td>
    <td align="right"><xsl:call-template name="body_id"><xsl:with-param name="id" select="'R0302G2'"/></xsl:call-template></td>
		<td align="right"><xsl:call-template name="body_id"><xsl:with-param name="id" select="'R0302G3'"/></xsl:call-template></td>
		<td align="right"><xsl:call-template name="body_id"><xsl:with-param name="id" select="'R0302G4'"/></xsl:call-template></td>
		<td align="right"><xsl:call-template name="body_id"><xsl:with-param name="id" select="'R0302G5'"/></xsl:call-template></td>
  </tr>
	<tr>
    <td>3-� ����� ��������</td>
    <td align="right"><xsl:call-template name="body_id"><xsl:with-param name="id" select="'R0303G2'"/></xsl:call-template></td>
		<td align="right"><xsl:call-template name="body_id"><xsl:with-param name="id" select="'R0303G3'"/></xsl:call-template></td>
		<td align="right"><xsl:call-template name="body_id"><xsl:with-param name="id" select="'R0303G4'"/></xsl:call-template></td>
		<td align="right"><xsl:call-template name="body_id"><xsl:with-param name="id" select="'R0303G5'"/></xsl:call-template></td>
  </tr>
</table>

 <table border="1" width="100%" cellspacing="0" bordercolor="#000000">
  <tr align="center">
    <td width="60%">����� ���������</td>
    <td width="5%">��� �����</td>
    <td width="10%">����� (���.)* </td>
  </tr>
  <tr align="center">
    <td>1</td>
    <td>2</td>
    <td>3</td>
  </tr>
  <tr>
    <td>���� ������ �� ������ (����������) ����� �������� �� ����� 292 ����� 1 ������ XIV ����������� ������� ������ (����� � ��������� 2 ������ 291.4
����� 291 ����� 1 ������ XIV ����������� ������� ������)</td>
    <td align="center">06</td>
    <td align="right"><xsl:call-template name="body_id"><xsl:with-param name="id" select="'R006G3'"/></xsl:call-template></td>
  </tr>
  <tr>
    <td>���� ������, �� �������� ������, ���������� ��������� 2 ������ 291.4 ����� 291 ����� 1 ������ XIV ����������� ������� ������,
 � ������� (�����������) �����</td>
    <td align="center">07  </td>
    <td align="right"><xsl:call-template name="body_id"><xsl:with-param name="id" select="'R007G3'"/></xsl:call-template></td>
  </tr>
  <tr>
    <td>���� ������, ���������� �� ����������� ��������, �� ��������� � ������� �������� ������� �������, � ������� (�����������) �����</td>
    <td align="center">08 </td>
    <td align="right"><xsl:call-template name="body_id"><xsl:with-param name="id" select="'R008G3'"/></xsl:call-template></td>
  </tr>

	 <tr>
    <td>���� ������, ���������� ��� ����������� ������ ������� ����������, �� ����������� ������� 291.6 ����� 291 ����� 1 ������ XIV ����������� ������� ������,
� ������� (�����������) �����</td>
    <td align="center">09</td>
    <td align="right"><xsl:call-template name="body_id"><xsl:with-param name="id" select="'R009G3'"/></xsl:call-template></td>
  </tr>
  <tr>
    <td>���� ������, ���������� �� ��������� ���� ��������, �� �� ����� ����� �� ������������ �������� ������� �������������, � ������� (�����������) �����</td>
    <td align="center">10 </td>
    <td align="right"><xsl:call-template name="body_id"><xsl:with-param name="id" select="'R010G3'"/></xsl:call-template></td>
  </tr>
	</table>

		 <table border="0"  width="100%" cellspacing="0" bordercolor="#000000">
	 <tr  >
    <td>* ������������ ����������� �������� � ������� ����.</td>
  </tr>
 </table>
				 <br />
		  <table border="0"  width="100%" cellspacing="0" bordercolor="#000000">
  <tr  >
    <td align="center"><b>�V.  ��������� �����������ί Ĳ������Ҳ ��� ������ʲ� ������� ������� ���  ����� </b></td>
  </tr>
 </table>

 <table border="1" width="100%" cellspacing="0" bordercolor="#000000">
  <tr align="center">
    <td width="60%">����� ���������</td>
    <td width="5%">��� �����</td>
    <td width="10%">����� (���.)* </td>
  </tr>
  <tr align="center">
    <td>1</td>
    <td>2</td>
    <td>3</td>
  </tr>
  <tr>
    <td>���� ������ �� ������ (����������) �����, �� �������������� �� ������� 3 %</td>
    <td align="center">11</td>
    <td align="right"><xsl:call-template name="body_id"><xsl:with-param name="id" select="'R011G3'"/></xsl:call-template></td>
  </tr>
  <tr>
    <td>���� ������ �� ������ (����������) �����, �� �������������� �� ������� 5 %</td>
    <td align="center">12  </td>
    <td align="right"><xsl:call-template name="body_id"><xsl:with-param name="id" select="'R012G3'"/></xsl:call-template></td>
  </tr>
  <tr>
    <td>���� ������, �� �������� ������, ���������� ��������� 3 ������ 291.4 ����� 291 ����� 1 ������ XIV ����������� ������� ������, � ������� (�����������) �����</td>
    <td align="center">13 </td>
    <td align="right"><xsl:call-template name="body_id"><xsl:with-param name="id" select="'R013G3'"/></xsl:call-template></td>
  </tr>

	 <tr>
    <td>���� ������, ���������� ��� ����������� ������ ������� ����������, �� ����������� ������� 291.6 ����� 291 ����� 1 ������ XIV ����������� ������� ������,
� ������� (�����������) �����</td>
    <td align="center">14</td>
    <td align="right"><xsl:call-template name="body_id"><xsl:with-param name="id" select="'R014G3'"/></xsl:call-template></td>
  </tr>
  <tr>
    <td>���� ������, ���������� �� ��������� ���� ��������, �� �� ����� ����� �� ������������ �������� ������� �������������, � ������� (�����������) ����� </td>
    <td align="center">15 </td>
    <td align="right"><xsl:call-template name="body_id"><xsl:with-param name="id" select="'R015G3'"/></xsl:call-template></td>
  </tr>
	</table>
				 <br />

 <table border="0"  width="100%" cellspacing="0" bordercolor="#000000">
  <tr  >
    <td align="center"><b>V.  ��������� �����������ί Ĳ������Ҳ ��� ������ʲ� ������� ������� V  �����  </b></td>
  </tr>
 </table>

 <table border="1" width="100%" cellspacing="0" bordercolor="#000000">
  <tr align="center">
    <td width="60%">����� ���������</td>
    <td width="5%">��� �����</td>
    <td width="10%">����� (���.)* </td>
  </tr>
  <tr align="center">
    <td>1</td>
    <td>2</td>
    <td>3</td>
  </tr>
  <tr>
    <td>���� ������ �� ������ (����������) �����, �� �������������� �� ������� 7 %</td>
    <td align="center">16</td>
    <td align="right"><xsl:call-template name="body_id"><xsl:with-param name="id" select="'R016G3'"/></xsl:call-template></td>
  </tr>
  <tr>
    <td>���� ������ �� ������ (����������) �����, �� �������������� �� ������� 10 %</td>
    <td align="center">17  </td>
    <td align="right"><xsl:call-template name="body_id"><xsl:with-param name="id" select="'R017G3'"/></xsl:call-template></td>
  </tr>
  <tr>
    <td>���� ������, �� �������� ������, ���������� ��������� 5 ������ 291.4 ����� 291 ����� 1 ������ XIV ����������� ������� ������, � ������� (�����������) �����</td>
    <td align="center">18 </td>
    <td align="right"><xsl:call-template name="body_id"><xsl:with-param name="id" select="'R018G3'"/></xsl:call-template></td>
  </tr>

	 <tr>
    <td>���� ������, ���������� ��� ����������� ������ ������� ����������, �� ����������� ������� 291.6 ����� 291 ����� 1 ������ XIV ����������� ������� ������,
� ������� (�����������) �����</td>
    <td align="center">19</td>
    <td align="right"><xsl:call-template name="body_id"><xsl:with-param name="id" select="'R019G3'"/></xsl:call-template></td>
  </tr>
  <tr>
    <td>���� ������, ���������� �� ��������� ���� ��������, �� �� ����� ����� �� ������������ �������� ������� �������������, � ������� (�����������) �����</td>
    <td align="center">20 </td>
    <td align="right"><xsl:call-template name="body_id"><xsl:with-param name="id" select="'R020G3'"/></xsl:call-template></td>
  </tr>

	</table>
				 <br />


		 <table border="0"  width="100%" cellspacing="0" bordercolor="#000000">
  <tr  >
    <td align="center"><b>VI. ���������� ���������� �����'����� �� ������� �������*</b></td>
  </tr>
 </table>

 <table border="1" width="100%" cellspacing="0" bordercolor="#000000">
  <tr align="center">
    <td width="60%">����� ���������</td>
    <td width="5%">��� �����</td>
    <td width="10%">���� (���.) </td>
  </tr>
  <tr align="center">
    <td>1</td>
    <td>2</td>
    <td>3</td>
  </tr>
  <tr>
    <td><b>�������� ���� ������ �� ������ (����������) �����  </b> <br />
(���� ������� ����� 01 + 02 + 03 + 04 + 05 + 06 + 07 + 08 + 09 + 10 + 11 + 12 + 13 + 14 + 15 + 16 + 17 + 18 + 19 + 20) </td>
    <td align="center">21</td>
    <td align="right"><xsl:call-template name="body_id"><xsl:with-param name="id" select="'R021G3'"/></xsl:call-template></td>
  </tr>
  <tr>
    <td>���� ������� �� ������� 15 % <br />((����� 02 + ����� 03 + ����� 04 + ����� 05 + ����� 07 + ����� 08 + ����� 09 + ����� 10 + ����� 13 + ����� 14 + ����� 15 + ����� 18 + ����� 19 + ����� 20) � 15 %)
 </td>
    <td align="center">22  </td>
    <td align="right"><xsl:call-template name="body_id"><xsl:with-param name="id" select="'R022G3'"/></xsl:call-template></td>
  </tr>
  <tr>
    <td>���� ������� �� ������� 3 % (����� 11 � 3 %)</td>
    <td align="center">23 </td>
    <td align="right"><xsl:call-template name="body_id"><xsl:with-param name="id" select="'R023G3'"/></xsl:call-template></td>
  </tr>

	 <tr>
    <td>���� ������� �� ������� 5 % (����� 12 � 5 %)</td>
    <td align="center">24</td>
    <td align="right"><xsl:call-template name="body_id"><xsl:with-param name="id" select="'R024G3'"/></xsl:call-template></td>
  </tr>
  <tr>
    <td>���� ������� �� ������� 7 % (����� 16 � 7 %)</td>
    <td align="center">25 </td>
    <td align="right"><xsl:call-template name="body_id"><xsl:with-param name="id" select="'R025G3'"/></xsl:call-template></td>
  </tr>
	 <tr>
    <td>���� ������� �� ������� 10 % (����� 17 � 10 %)</td>
    <td align="center">26 </td>
    <td align="right"><xsl:call-template name="body_id"><xsl:with-param name="id" select="'R026G3'"/></xsl:call-template></td>
  </tr>
	 <tr>
    <td>���������� ������ �� ������ (����������) ����� <br />
(����� 22 + ����� 23 +  ����� 24 + ����� 25 + ����� 26))</td>
    <td align="center">27 </td>
    <td align="right"><xsl:call-template name="body_id"><xsl:with-param name="id" select="'R027G3'"/></xsl:call-template></td>
  </tr>
		<tr>
    <td>���������� �� ��������� ������ (����������) ����� (�������� ����� 27 ���������� ������������ ������� (�����������) ������)</td>
    <td align="center">28 </td>
    <td align="right"><xsl:call-template name="body_id"><xsl:with-param name="id" select="'R028G3'"/></xsl:call-template></td>
  </tr>
	 <tr>
    <td>���� ������� �������, ��� ������ ����������� �� ����� � ������ �� ��������� ��������� ������� (�����������) ������ (����� 27 - ����� 28)</td>
    <td align="center">29 </td>
    <td align="right"><xsl:call-template name="body_id"><xsl:with-param name="id" select="'R029G3'"/></xsl:call-template></td>
  </tr>
	</table>

		 <table border="0"  width="100%" cellspacing="0" bordercolor="#000000">
  <tr  >
    <td >* �� ������������ ��������� �������, �� ���� ���������� "��������".</td>
  </tr>
 </table>

				 <br />
	<table border="0"  width="100%" cellspacing="0" bordercolor="#000000">
  <tr  >
    <td align="center"><b>V�I. ���������� ���������� �����'����� � ��'���� � ������������ �����Ҳ��� ��������� �������*</b></td>
  </tr>
 </table>

 <table border="1" width="100%" cellspacing="0" bordercolor="#000000">
  <tr align="center">
    <td width="60%">����� ���������</td>
    <td width="5%">��� �����</td>
    <td width="10%">���� (���.) </td>
  </tr>
  <tr align="center">
    <td>1</td>
    <td>2</td>
    <td>3</td>
  </tr>
  <tr>
    <td>���� ������� �������, ��� �������� ������������� �� �������, �� ������ ������� (�����������) ������, � ����� �������� ������� (����� 29 �������� ����������) </td>
    <td align="center">30</td>
    <td align="right"><xsl:call-template name="body_id"><xsl:with-param name="id" select="'R030G3'"/></xsl:call-template></td>
  </tr>
  <tr>
    <td>�������� ���� ���������� �����'����� �� ������ (����������) �����, � ����� �������� �������</td>
    <td align="center">31  </td>
    <td align="right"><xsl:call-template name="body_id"><xsl:with-param name="id" select="'R031G3'"/></xsl:call-template></td>
  </tr>

  <tr>
    <td colspan="3"><b>���������� � ��'���� � ������������ �������:</b></td>
  </tr>
	 <tr>
    <td>��������� ����, ��� �������� ������������� �� ������� <br />(����� 31 - ����� 30, ���� ����� 31 &gt; ����� 30) </td>
    <td align="center">32</td>
    <td align="right"><xsl:call-template name="body_id"><xsl:with-param name="id" select="'R032G3'"/></xsl:call-template></td>
  </tr>
  <tr>
    <td>��������� ����, ��� �������� ������������� �� �������**  <br /> (����� 31- ����� 30, ���� ����� 31 &lt; ����� 30)</td>
    <td align="center">33 </td>
    <td align="right"><xsl:call-template name="body_id"><xsl:with-param name="id" select="'R033G3'"/></xsl:call-template></td>
  </tr>
	 <tr>
    <td style="text-align:left">���� ������, ��� ���������� ��������� ������� ��������� � ��'���� � ������������ �������,
<xsl:call-template name="body_id"><xsl:with-param name="id" select="'R034G1'"/></xsl:call-template> % (����� 32 � 3 % ��� 5 %)</td>
    <td align="center">34 </td>
    <td align="right"><xsl:call-template name="body_id"><xsl:with-param name="id" select="'R034G3'"/></xsl:call-template></td>
  </tr>
	 <tr>
    <td>���� ���, ��� ���������� ��������� ������� ��������� �������� �� �������� 129.1.2 ������ 129.1 ����� 129 ����� 12 ������ II ����������� ������� ������</td>
    <td align="center">35 </td>
    <td align="right"><xsl:call-template name="body_id"><xsl:with-param name="id" select="'R035G3'"/></xsl:call-template></td>
  </tr>
	</table>

		 <table border="0"  width="100%" cellspacing="0" bordercolor="#000000">
  <tr  >
    <td >*  ������������  ��������� �������, ���� ������� �������� �����'������.</td>
  </tr>
	 <tr  >
    <td >** ³������������ ����� �������� ��������.</td>
  </tr>
 </table>
 <br />

 <table  width="100%" border="1" cellspacing="0" bordercolor="#000000">
		<tr>
    <td width="70%"> ���������� �� ��������� ���������� (������������ � �������� �������� �� ������ 46.4 ����� 46 ����� 2 ������ II ����������� ������� ������) ��: </td>
    <td width="10%" align="right"><xsl:call-template name="body_id"><xsl:with-param name="id" select="'HJAR'"/></xsl:call-template>  </td>
    <td width="5%"> ���.</td>
  </tr>
</table>
	 <TABLE width="100%" border="0" cellspacing="0" bordercolor="#000000">
		 <TR>
		<TD >³������� �� ������ 46.4 ����� 46 ������ �� ����������� ������� ������, �����������:</TD>
	</TR>
</TABLE>
	<TABLE width="100%" border="1" cellspacing="0" bordercolor="#000000">
	<TBODY id="Process">
	<TR>
		<TD align="center" width="3%" >�  �/�</TD>
		<TD align="center"  > ���� ����������  </TD>
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
				<td width="70%">���� ������� ��������� ����������<font color="red"> *  </font></td>
		    <td class="td_box"><xsl:call-template name="body_id"><xsl:with-param name="id" select="'HFILL'"/></xsl:call-template> </td>
      </tr>
	<tr>
      </tr>
</table>

<br />
<table width="50%">
  <tr>
		<td >����������, �������� � ��������� ����������, � ����������.</td>
	 </tr>
</table>

<table width="100%" cellspacing="3" border="0">
  <tr>
    <td width="20%">Գ����� ����� - ���������  <font color="red"> *  </font>  </td>
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
      <h2>�.�.</h2>
    </td>
  </tr>
  <tr>
    <td><xsl:text disable-output-escaping="yes">&amp;nbsp;</xsl:text></td>
    <td align="center"><font size="-1">(�����)</font></td>
    <td align="center"><font size="-1">(������� �� �������)</font></td>
    <td colspan="2">(������������ ����� ������� ������ �������� �������)</td>
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
