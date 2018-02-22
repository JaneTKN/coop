<?php require_once('Connections/dbconnect.php'); ?>
<?php
if (!function_exists("GetSQLValueString")) {
function GetSQLValueString($theValue, $theType, $theDefinedValue = "", $theNotDefinedValue = "") 
{
  if (PHP_VERSION < 6) {
    $theValue = get_magic_quotes_gpc() ? stripslashes($theValue) : $theValue;
  }

  $theValue = function_exists("mysql_real_escape_string") ? mysql_real_escape_string($theValue) : mysql_escape_string($theValue);

  switch ($theType) {
    case "text":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;    
    case "long":
    case "int":
      $theValue = ($theValue != "") ? intval($theValue) : "NULL";
      break;
    case "double":
      $theValue = ($theValue != "") ? doubleval($theValue) : "NULL";
      break;
    case "date":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;
    case "defined":
      $theValue = ($theValue != "") ? $theDefinedValue : $theNotDefinedValue;
      break;
  }
  return $theValue;
}
}
$form = $_GET['noid'];
mysql_select_db($database_dbconnect, $dbconnect);
$query_Recordset1 = "SELECT * FROM (noid INNER JOIN seller ON noid.NoidNo = seller.NoidNo)INNER JOIN refference ON noid.NoidNo = refference.NoidNo WHERE noid.NoidNo = '$form'";
$Recordset1 = mysql_query($query_Recordset1, $dbconnect) or die(mysql_error());
$row_Recordset1 = mysql_fetch_assoc($Recordset1);
$totalRows_Recordset1 = mysql_num_rows($Recordset1);
$query_onetwo = "SELECT * FROM (noid INNER JOIN seller ON noid.NoidNo = seller.NoidNo)INNER JOIN refference ON noid.NoidNo = refference.NoidNo WHERE noid.NoidNo = '$form'";
$onetwo = mysql_query($query_onetwo, $dbconnect) or die(mysql_error());
$row_onetwo = mysql_fetch_assoc($onetwo);
$totalRows_onetwo = mysql_num_rows($onetwo);

mysql_select_db($database_dbconnect, $dbconnect);
$query_Recordset3 = "SELECT * FROM (noid INNER JOIN accessories ON noid.NoidNo = accessories.NoidNo) INNER JOIN other ON noid.NoidNo = other.NoidNo WHERE noid.NoidNo = '$form'";
$Recordset3 = mysql_query($query_Recordset3, $dbconnect) or die(mysql_error());
$row_Recordset3 = mysql_fetch_assoc($Recordset3);
$totalRows_Recordset3 = mysql_num_rows($Recordset3);

mysql_select_db($database_dbconnect, $dbconnect);
$query_Recordset4 = "SELECT * FROM (noid INNER JOIN test ON noid.NoidNo = test.NoidNo) INNER JOIN packing ON noid.NoidNo = packing.NoidNo WHERE noid.NoidNo = '$form'";
$Recordset4 = mysql_query($query_Recordset4, $dbconnect) or die(mysql_error());
$row_Recordset4 = mysql_fetch_assoc($Recordset4);
$totalRows_Recordset4 = mysql_num_rows($Recordset4);

mysql_select_db($database_dbconnect, $dbconnect);
$query_Recordset5 = "SELECT * FROM (noid INNER JOIN transport ON noid.NoidNo = transport.NoidNo) INNER JOIN etc ON noid.NoidNo = etc.NoidNo WHERE noid.NoidNo = '$form'";
$Recordset5 = mysql_query($query_Recordset5, $dbconnect) or die(mysql_error());
$row_Recordset5 = mysql_fetch_assoc($Recordset5);
$totalRows_Recordset5 = mysql_num_rows($Recordset5);

mysql_select_db($database_dbconnect, $dbconnect);
$query_Recordset6 = "SELECT * FROM (noid INNER JOIN approve ON noid.NoidNo = approve.NoidNo) INNER JOIN forcost ON noid.NoidNo = forcost.NoidNo WHERE noid.NoidNo = '$form'";
$Recordset6 = mysql_query($query_Recordset6, $dbconnect) or die(mysql_error());
$row_Recordset6 = mysql_fetch_assoc($Recordset6);
$totalRows_Recordset6 = mysql_num_rows($Recordset6);

mysql_select_db($database_dbconnect, $dbconnect);
$query_Recordset7 = "SELECT * FROM (noid INNER JOIN technical_data ON noid.NoidNo = technical_data.NoidNo) INNER JOIN guaranteed ON noid.NoidNo = guaranteed.NoidNo WHERE noid.NoidNo = '$form'";
$Recordset7 = mysql_query($query_Recordset7, $dbconnect) or die(mysql_error());
$row_Recordset7 = mysql_fetch_assoc($Recordset7);
$totalRows_Recordset7 = mysql_num_rows($Recordset7);
?>
<!DOCTYPE html>
<html>
<head>
<style>
@import url("webfonts/cordia_0/stylesheet.css");

        body {
	height: 297mm;
	width: 210mm;
	/* to centre page on screen*/
	margin-left: auto;
	margin-right: auto;
	font-size: 14px;
	font-style: normal;
	line-height: normal;
	font-weight: normal;
	font-variant: normal;
	counter-reset: section;
        }
		
    body,td,th {
	font-family: "cordia 0";
	font-size: 16px;
	}
@media print {
  .page {
    page-break-after: always;
  }
  .page .pageBreak::after {
    counter-increment: section;
    /* Increment the section counter*/
	position: absolute;
    
	right:0;
    content: "PP-F-003-40-01/08/60 Page " counter(section) " ";
    /* Display the counter */
  }
}
</style>
  <title>แบบสอบถามราคาต้นทุน</title>
<meta charset="utf-8">
</head>
<body>
<div class="page">
<table width="794">
	<tr>
	  <td width="604"><img src="img/site_logo_1443f2c7b7747f164b0c3827b741bdc0.png" width="85" height="90"></td>
	<td width="178"><p align="right"><font size= "2"> เลขที่ : <strong><u><?php echo $row_Recordset1['NoidNo']; ?></u></strong></font></p>
	<p align="right"><font size= "2"> แก้ไขครั้งที่ : <strong><u><?php echo $row_Recordset1['editNo']; ?></u></strong></font></p></td>
</table>

<fieldset>
  <legend align="center">ใบสอบถามราคาต้นทุน  </legend>
  <table width="100%" border="1">
    <tbody>
      <tr>
        <td width="140">ชื่อผู้ขอ : <strong><u><?php echo $row_Recordset1['sellerName1']; ?></u></strong></td>
        <td width="139">ผู้เปิดประมูล / ลูกค้า : <strong><u><?php echo $row_Recordset1['sellerName2']; ?></u></strong></td>
      </tr>
      <tr>
        <td>ชื่อผู้ใช้ (Owner) : <strong><u><?php echo $row_Recordset1['sellerName3']; ?></u></strong></td>
        <td>โครงการ / Bid : <strong><u><?php echo $row_Recordset1['sellerName4']; ?></u></strong></td>
      </tr>
    </tbody>
  </table>
</fieldset>

<fieldset>
  <legend>(1 REFFERENCE)</legend>
  <table width="100%" border="0">
    <tbody>
      <tr>
        <td width="50%"><strong><u><?php echo $row_Recordset1['refference1']; ?>&nbsp;&nbsp;</u></strong> ลูกค้าเคยใช้หม้อแปลงเอกรัฐ S/O <strong><u><?php echo $row_Recordset1['so']; ?></u></strong></td>
        <td width="50%"><strong><u><?php echo $row_Recordset1['refference2']; ?>&nbsp;&nbsp;</u></strong> อ้างอิงทุนเลขที่ <strong><u><?php echo $row_Recordset1['reffno']; ?></u></strong></td>
      </tr>
      <tr>
        <td><strong><u><?php echo $row_Recordset1['refference3']; ?>&nbsp;&nbsp;</u></strong> ลูกค้า(ผู้ใช้)ไม่เคยสั่งหม้อแปลงเอกรัฐ</td>
        <td><strong><u><?php echo $row_Recordset1['refference4']; ?>&nbsp;&nbsp;</u></strong>  ออกแบบใหม่เพื่อทดแทนของเดิม</td>
      </tr>
      <tr>
        <td><strong><u><?php echo $row_Recordset1['refference5']; ?>&nbsp;&nbsp;</u></strong> ออกแบบปกติตามมาตรฐานเอกรัฐ</td>
        <td><strong><u><?php echo $row_Recordset1['refference6']; ?>&nbsp;&nbsp;</u></strong>  ออกแบบตามลูกค้ากำหนด (FIX DIMENTION)</td>
      </tr>
    </tbody>
  </table>
</fieldset>

<fieldset>
  <legend>(2 TECHNICAL DATA)</legend>
  <table width="100%" border="0">
    <tbody>
      <tr style="text-align: left">
        <td width="25%">TYPE : <strong><u><?php echo $row_Recordset7['typeTransfrom']; ?></u></strong> <strong><u><?php echo $row_Recordset7['othertypetransfrom']; ?></u></strong></td>
        <td width="19%">TR. <strong><u><?php echo $row_Recordset7['kva']; ?></u></strong></td>
        <td width="17%">KVA <strong><u><?php echo $row_Recordset7['phase']; ?></u></strong></td>
        <td width="39%" colspan="2">PHASE   <strong><u><?php echo $row_Recordset7['hz']; ?></u></strong> Hz.</td>
      </tr>
      <tr style="text-align: left">
        <td colspan="2">ระบบไฟ :   <strong><u><?php echo $row_Recordset7['primaryvol']; ?></u></strong> - <strong><u><?php echo $row_Recordset7['secondaryvol']; ?></u></strong></td>
        <td>Vector G. : <strong><u><?php echo $row_Recordset7['vectorgroup']; ?></u></strong></td>
        <td>ชนิดตัวนำ : <strong><u><?php echo $row_Recordset7['leader']; ?></u></strong></td>
        <td>ครีบ : <u><strong><?php echo $row_Recordset7['fin']; ?></strong></u></td>
      </tr>
      <tr style="text-align: left">
        <td>%TAP : <strong><u><?php echo $row_Recordset7['tapping']; ?></u></strong></td>
        <td>ด้าน : <strong><u><?php echo $row_Recordset7['technical']; ?></u></strong></td>
        <td>ชนิด : <strong><u><?php echo $row_Recordset7['loadtap']; ?></u></strong></td>
        <td>LOADING TYPE :  <u><strong><?php echo $row_Recordset7['loadtype']; ?></strong></u></td>
        <td><strong><u><?php echo $row_Recordset7['otherload']; ?></u></strong></td>
      </tr>
    </tbody>
  </table>
</fieldset>

<fieldset>
  <legend>(3 GUARANTEED)</legend>
  <p><strong><u><?php echo $row_Recordset7['gua']; ?></u></strong></p>
  <table width="100%" border="0">
    <tbody>
      <tr>
        <td>CORE LOSS <strong><u><?php echo $row_Recordset7['core']; ?></u></strong> WATT.</td>
        <td>LOAD LOSS   <strong><u><?php echo $row_Recordset7['copper']; ?></u></strong> WATT.</td>
        <td>AT  <strong><u><?php echo $row_Recordset7['at']; ?></u></strong> °C</td>
      </tr>
      <tr>
        <td>TOLERANCE <strong><u><?php echo $row_Recordset7['tolerance1']; ?></u></strong> <strong><u><?php echo $row_Recordset7['otherTolerance1']; ?></u></strong></td>
        <td colspan="2">TEMP RISE OIL  <strong><u><?php echo $row_Recordset7['tempo']; ?></u></strong> /WINDDING  <strong><u><?php echo $row_Recordset7['tempw']; ?></u></strong>KEVIN</td>
      </tr>
      <tr>
        <td>IMPEDANCE(%Z) <strong><u><?php echo $row_Recordset7['z']; ?></u></strong></td>
        <td>TOLERANCE <strong><u><?php echo $row_Recordset7['tolerance2']; ?></u></strong> <strong><u><?php echo $row_Recordset7['otherTolerance2']; ?></u></strong></td>
        <td>IMPALUSE FULL WAVE HV  &nbsp <strong><u><?php echo $row_Recordset7['HV4']; ?></u></strong>&nbsp KV</td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>IMPALUSE FULL WAVE LV  &nbsp <strong><u><?php echo $row_Recordset7['LV4']; ?></u></strong>&nbsp KV</td>
      </tr>
    </tbody>
  </table>
</fieldset>

<fieldset>
  <legend>(4 ACCESSORIES)</legend>
  <p><strong><u><?php echo $row_Recordset3['standard1']; ?>&nbsp;&nbsp;</u></strong> มาตรฐานเอกรัฐ <strong>[<u><?php echo $row_Recordset3['akstandard']; ?></u>]</strong><br>
    <strong><u><?php echo $row_Recordset3['standard2']; ?>&nbsp;&nbsp;</u></strong> รายละเอียดเพิ่มเติม<br>
  </p>
  <table width="100%">
    <tbody>
      <tr>
        <td width="44%"><div align="justify">
          <table width="100%" border="0">
            <tr>
              <td width="50%"><div align="left">1. <strong><u><?php echo $row_Recordset3['accessories1']; ?></u></strong></div></td>
              <td width="16%"><div align="center"><strong><u><?php echo $row_Recordset3['value1']; ?></u></strong></div></td>
              <td width="34%"><div align="center"><strong><u><?php echo $row_Recordset3['comment1']; ?></u></strong></div></td>
              </tr>
            <tr>
              <td><div align="left">2. <strong><u><?php echo $row_Recordset3['accessories2']; ?></u></strong></div></td>
              <td><div align="center"><strong><u><?php echo $row_Recordset3['value2']; ?></u></strong></div></td>
              <td><div align="center"><strong><u><?php echo $row_Recordset3['comment2']; ?></u></strong></div></td>
              </tr>
            <tr>
              <td><div align="left">3. <strong><u><?php echo $row_Recordset3['accessories3']; ?></u></strong></div></td>
              <td><div align="center"><strong><u><?php echo $row_Recordset3['value3']; ?></u></strong></div></td>
              <td><div align="center"><strong><u><?php echo $row_Recordset3['comment3']; ?></u></strong></div></td>
              </tr>
            <tr>
              <td><div align="left">4. <strong><u><?php echo $row_Recordset3['accessories4']; ?></u></strong></div></td>
              <td><div align="center"><strong><u><?php echo $row_Recordset3['value4']; ?></u></strong></div></td>
              <td><div align="center"><strong><u><?php echo $row_Recordset3['comment4']; ?></u></strong></div></td>
              </tr>
            <tr>
              <td><div align="left">5. <strong><u><?php echo $row_Recordset3['accessories5']; ?></u></strong></div></td>
              <td><div align="center"><strong><u><?php echo $row_Recordset3['value5']; ?></u></strong></div></td>
              <td><div align="center"><strong><u><?php echo $row_Recordset3['comment5']; ?></u></strong></div></td>
              </tr>
            <tr>
              <td><div align="left">6. <strong><u><?php echo $row_Recordset3['accessories6']; ?></u></strong></div></td>
              <td><div align="center"><strong><u><?php echo $row_Recordset3['value6']; ?></u></strong></div></td>
              <td><div align="center"><strong><u><?php echo $row_Recordset3['comment6']; ?></u></strong></div></td>
              </tr>
            <tr>
              <td colspan="3"><div align="left">อื่นๆ <strong><u><?php echo $row_Recordset3['otherAcc']; ?></u></strong> </div></td>
              </tr>
          </table>
        </div></td>
        <td width="56%"><table width="100%" border="0">
          <tbody>
            <tr>
              <td width="35%" scope="row">CABLE BOX TYPE</td>
              <td colspan="2"><strong><u><?php echo $row_Recordset3['cable']; ?></u></strong> <strong><u><?php echo $row_Recordset3['spe']; ?></u></strong></td>
              </tr>
            <tr>
              <td scope="row">ชนิดหางปลา</td>
              <td width="30%"><strong><u><?php echo $row_Recordset3['fishtale']; ?></u></strong></td>
              <td width="35%"><strong><u><?php echo $row_Recordset3['talefish']; ?></u></strong></td>
            </tr>
            <tr>
              <td scope="row">ONLOAD TAPCHANGER</td>
              <td colspan="2"><strong><u><?php echo $row_Recordset3['onload']; ?></u></strong></td>
              </tr>
            <tr>
              <td scope="row">&nbsp;</td>
              <td colspan="2"><strong><u><?php echo $row_Recordset3['abb']; ?></u></strong> <strong><u><?php echo $row_Recordset3['commentAcc']; ?></u></strong></td>
              </tr>
            <tr>
              <td scope="row">OIL</td>
              <td colspan="2"><strong><u><?php echo $row_Recordset3['OIL']; ?><?php echo $row_Recordset3['otherOIL']; ?></u></strong> ติด Shock recorder / <strong><u><?php echo $row_Recordset5['shock']; ?></u></strong></td>
              </tr>
            <tr>
              <td>สี</td>
              <td><strong><u><?php echo $row_Recordset3['color']; ?></u></strong></td>
              <td><strong><u><?php echo $row_Recordset3['color1']; ?></u></strong></td>
            </tr>
            <tr>
              <td>เฉดสี</td>
              <td><strong><u><?php echo $row_Recordset3['shade']; ?></u></strong></td>
              <td><strong><u><?php echo $row_Recordset3['othercolor']; ?></u></strong></td>
            </tr>
          </tbody>
        </table></td>
      </tr>
    </tbody>
  </table>
</fieldset>

<fieldset>
  <legend>(5 OTHER)</legend>
  <table width="100%" border="0">
    <tbody>
      <tr>
        <td width="19%">PACKING : <strong><u><?php echo $row_Recordset4['pack']; ?></u></strong></td>
        <td width="16%">แบบ : <strong><u><?php echo $row_Recordset4['set8']; ?></u></strong></td>
        <td width="20%">รายละเอียดสภาพแวดล้อม : </td>
        <td colspan="2"><strong><u><?php echo $row_Recordset3['en']; ?><?php echo $row_Recordset3['otheren']; ?></u></strong></td>
      </tr>
      <tr>
        <td colspan="2"><strong><u><?php echo $row_Recordset4['set8_1']; ?></u></strong></td>
        <td>ขนส่ง :</td>
        <td width="18%"><strong><u><?php echo $row_Recordset5['transport']; ?></u></strong></td>
        <td width="27%"><strong><u><?php echo $row_Recordset5['transportin']; ?><?php echo $row_Recordset5['transportout']; ?></u></strong></td>
      </tr>
      <tr>
        <td colspan="2"><strong><u><?php echo $row_Recordset4['set8_2']; ?></u></strong></td>
        <td>&nbsp;</td>
        <td><strong><u><?php echo $row_Recordset5['car']; ?></u></strong></td>
        <td><strong><u><?php echo $row_Recordset5['road']; ?></u></strong></td>
      </tr>
    </tbody>
  </table>
</fieldset>

<fieldset>
  <legend>(6 TEST)</legend>
  <table width="100%" border="0">
    <tbody>
      <tr>
        <td width="24%">6.1 ROUTINE TEST</td>
        <td width="22%"><strong><u><?php echo $row_Recordset4['routine']; ?></u></strong></td>
        <td width="18%">6.2 TYPE TEST</td>
        <td width="36%"><strong><u><?php echo $row_Recordset4['typetest1']; ?><?php echo $row_Recordset4['HV7']; ?></u></strong>/<strong><u><?php echo $row_Recordset4['LV7']; ?></u></strong>/<strong><u><?php echo $row_Recordset4['typetest2']; ?></u></strong></td>
      </tr>
      <tr>
        <td colspan="2">6.3 OIL TEST : <strong><u><?php echo $row_Recordset4['oiltest']; ?></u></strong></td>
        <td>6.4 POWER FACTOR</td>
        <td><strong><u><?php echo $row_Recordset4['power']; ?></u></strong></td>
      </tr>
      <tr>
        <td>6.5 PARTIAL DISCHARGE (ภายนอก) </td>
        <td><strong><u><?php echo $row_Recordset4['partial']; ?></u></strong></td>
        <td>6.6 SOUND LEVEL TEST</td>
        <td><strong><u><?php echo $row_Recordset4['sound']; ?></u></strong></td>
      </tr>
      <tr>
        <td>6.7 การทดสอบรั่วซึม (1 วัน)</td>
        <td><strong><u><?php echo $row_Recordset4['leak']; ?></u></strong></td>
        <td>6.8 การทดสอบ VIBRATION</td>
        <td><strong><u><?php echo $row_Recordset4['vibration']; ?></u></strong></td>
      </tr>
      <tr>
        <td>6.9 DGA</td>
        <td><strong><u><?php echo $row_Recordset4['DGA']; ?></u></strong></td>
        <td>6.10 TRANSPORT TEST</td>
        <td><strong><u><?php echo $row_Recordset5['ttest']; ?></u></strong></td>
      </tr>
    </tbody>
  </table>
</fieldset>
<div class="pageBreak"></div>
<div style="page-break-after: always"></div>
<div class="page">
<fieldset>
  <legend>(7 PACKING)</legend>
  <p>7.1 วัสดุของลูกค้าส่งให้ประกอบ / ผลิต <strong><u><?php echo $row_Recordset5['mat']; ?></u></strong> คือ <strong><u><?php echo $row_Recordset5['othermat']; ?></u></strong><br>
    7.2 จำนวนที่ต้องการ <strong><u><?php echo $row_Recordset5['many']; ?></u></strong> เครื่อง กำหนดส่งประมาณวันที่ <strong><u><?php echo $row_Recordset5['date10']; ?></u></strong> หรือภายใน <strong><u><?php echo $row_Recordset5['date10_1']; ?></u></strong> วัน<br>
  7.3 ลูกค้าต้องการ Spare part <strong><u><?php echo $row_Recordset5['spare']; ?></u></strong><br>
  7.4 ได้ขอแบบเสนอลูกค้ามาด้วยเลขที่ <strong><u><?php echo $row_Recordset5['presentNo']; ?></u></strong><br>
  7.5 อื่นๆ <strong><u><?php echo $row_Recordset5['other10']; ?></u></strong><br>
  7.6 มีเอกสารแนบ <strong><u><?php echo $row_Recordset5['doc']; ?></u></strong> แผ่น</p>
</fieldset>

<fieldset>
  <legend>(8 APPROVE)</legend>
  <p><strong><u><?php echo $row_Recordset6['approve1']; ?>&nbsp;&nbsp;</u></strong> ลูกค้าไม่ต้องการ APPROVE แบบก่อนผลิต<br>
    <strong><u><?php echo $row_Recordset6['approve2']; ?>&nbsp;&nbsp;</u></strong> ลูกค้าต้องการ APPROVE ในวันที่ <strong><u><?php echo $row_Recordset6['wantDate']; ?></u></strong>  และแจ้งให้ฝ่ายวิศวกรรมภายใน <strong><u><?php echo $row_Recordset6['TellDate']; ?></u></strong>  วัน หลังจากได้รับแบบ<br>
    <strong><u><?php echo $row_Recordset6['approve3']; ?>&nbsp;&nbsp;</u></strong> ไม่เคยส่งแบบ PRELIMINARY ให้ลูกค้า<br>
    <strong><u><?php echo $row_Recordset6['approve4']; ?>&nbsp;&nbsp;</u></strong> เคยส่งแบบ PRELIMINARY เสนอลูกค้า และแนบมาด้วย (เลขที่ <strong><u><?php echo $row_Recordset6['present']; ?></u></strong>)<br>
    <strong><u><?php echo $row_Recordset6['approve5']; ?>&nbsp;&nbsp;</u></strong> OVER ALL DIMENSION (มีผลต่อการออกแบบต้องสรุปก่อน)<br>
    <strong><u><?php echo $row_Recordset6['approve6']; ?>&nbsp;&nbsp;</u></strong> ฐาน, ขนาดฐาน, ระยะฐานหม้อแปลง<br>
    <strong><u><?php echo $row_Recordset6['approve7']; ?>&nbsp;&nbsp;</u></strong>  ระยะ BOX และ BUSDUCT<br>
    <strong><u><?php echo $row_Recordset6['approve8']; ?>&nbsp;&nbsp;</u></strong> ตำแหน่งม จุดติดตั้งอุปกรณ์ได้แก่ <strong><u><?php echo $row_Recordset6['position']; ?></u></strong>  (มีผลต่อการออกแบบต้องสรุปก่อน)<br>
    <strong><u><?php echo $row_Recordset6['approve9']; ?>&nbsp;&nbsp;</u></strong>  วงจร CONTROL</p>
</fieldset>
  <table width="100%" border="0">
    <tbody>
      <tr>
        <td width="50%"><fieldset>
          <legend>สำหรับฝ่ายวิศวกรรม</legend>
          <p>___ มีเอกสารต้นทุนแล้ว เลขที่ _________________ <br>
             ___ จัดทำเอกสารต้นทุน 1 และ 2<br>
             ___ จัดทำเฉพาะเอกสารต้นทุน 2<br>
            ___ ปรับราคาเอกสารต้นทุนเลขที่_____________<br>
            ___ ไม่จัดทำเพราะ ________________________________________________________<br>
            ________________________________________________________________________<br>
            ________________________________________________________________________<br>
            ________________________________________________________________________</p>
          <p align="center">ผู้อนุมัติ ........................................... วันที่ (___/___/___)</p>
          <p align="center">(_______________________________)<br>
          (หผ.เทคนิค)</p>
        </fieldset></td>
        <td width="50%"><fieldset>
          <legend>สำหรับฝ่ายผู้ขอราคา</legend>
          <p>สอบถามราคาต้นทุนเพื่อ</p>
          <p>___ เสนแประมูลราคา<br>
            ___ เพื่อแข่งขันราคา<br>
            ___  อื่นๆ __________________________________________________________________</p>
          <p align="center">ลงชื่อ ........................................... วันที่ (___/___/___)</p>
          <p align="center">(______________________________)<br>
          (ผู้ขอราคา)</p>
          <p align="center">ลงชื่อ ........................................... วันที่ (___/___/___)</p>
          <p align="center">(_______________________________)<br>
          (ผู้จัดการฝ่ายผู้ขอราคา)</p>
        </fieldset></td>
      </tr>
      <tr>
        <td colspan="2"><fieldset>
          <legend>เรียน กรรมการผู้จัดการ</legend>
          <p>ได้จัดทำราคาต้นทุนของผลิตภัณฑ์ข้างต้น และแนบมาพร้อมกันแล้ว</p>
          <p>หมายเหตุ : ______________________________________________________________________________________________________________________________________</p>
          <p align="center">ผู้จัดการฝ่ายวิศวกรรม ........................................... วันที่ (___/___/___)<br>
          (______________________________) </p>
        </fieldset></td>
      </tr>
    </tbody>
  </table>
  <div class="pageBreak"></div>
</body>
</html>

