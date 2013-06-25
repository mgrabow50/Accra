<?php 
   switch($form){
   		case "pd":
	   		$MailBody = "Quotation Sheet - Pallet Decoiler: \n\n";
			$Subj = "Quotation Sheet - Pallet Decoiler";
			break;
   		case "wd":
	   		$MailBody = "Quotation Sheet - Wire Dereeler: \n\n";
			$Subj = "Quotation Sheet - Wire Dereeler";
			break;
		case "ph":
	   		$MailBody = "Quotation Sheet - Parts Handler: \n\n";
			$Subj = "Quotation Sheet - Parts Handler";
			break;
		case "rw":
	   		$MailBody = "Quotation Sheet - Rewind: \n\n";
			$Subj = "Quotation Sheet - Rewind";
			break;
		case "wl":
	   		$MailBody = "Quotation Sheet - Weld Dereeler: \n\n";
			$Subj = "Quotation Sheet - Weld Dereeler";
			break;
		case "cp":
	   		$MailBody = "Quotation Sheet - COMP Buster: \n\n";
			$Subj = "Quotation Sheet - COMP Buster";
			break;
		case "cl":
	   		$MailBody = "Quotation Sheet - Cut-to-Length: \n\n";
			$Subj = "Quotation Sheet - Cut-to-Length";
			break;
		default:			
	   		$MailBody = "Contact Us Information: \n\n";
			$Subj = "Contact Us";
   }
   
   while ((list($key, $value) = each ($HTTP_POST_VARS))) {
   if($key=="Submit" or $key=="form" or $key=="print" or $key=="reset"){
      continue; 
   }	
    if (is_array($value)){
	      $MailBody.= str_replace("_"," ",$key) . " = ";
       while (list(,$value1) = each ($value)){
          $MailBody.= "$value1, ";
	   }
	   $MailBody = strrev(substr(strrev($MailBody),2));
	   $MailBody .= "\n";
	}
	else {
      $MailBody.= str_replace("_"," ",$key) . " = $value\n";
	}
}
?>
<html>
<head>
<title>Accra Wire Controls Inc. - || Thank You || </title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<style type="text/css">
<!--
body {  margin: 0px;}
.arial11 {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 11px;
	color: #FFFFFF;
}
.arial11gray {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 11px;
	color: #7D7628;
}
.arial18 {
	font-family: Arial, Helvetica, sans-serif;
	color: #000000;
	font-size: 18px;
}
.arial12 {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 12px;
	color: #000000;
}
.arial11black {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 11px;
	color: #000000;
}
-->
</style>
<script language="JavaScript" type="text/JavaScript">
<!--
function MM_preloadImages() { //v3.0
  var d=document; if(d.images){ if(!d.MM_p) d.MM_p=new Array();
    var i,j=d.MM_p.length,a=MM_preloadImages.arguments; for(i=0; i<a.length; i++)
    if (a[i].indexOf("#")!=0){ d.MM_p[j]=new Image; d.MM_p[j++].src=a[i];}}
}

function MM_swapImgRestore() { //v3.0
  var i,x,a=document.MM_sr; for(i=0;a&&i<a.length&&(x=a[i])&&x.oSrc;i++) x.src=x.oSrc;
}

function MM_findObj(n, d) { //v4.01
  var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {
    d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}
  if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];
  for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document);
  if(!x && d.getElementById) x=d.getElementById(n); return x;
}

function MM_swapImage() { //v3.0
  var i,j=0,x,a=MM_swapImage.arguments; document.MM_sr=new Array; for(i=0;i<(a.length-2);i+=3)
   if ((x=MM_findObj(a[i]))!=null){document.MM_sr[j++]=x; if(!x.oSrc) x.oSrc=x.src; x.src=a[i+2];}
}
//-->
</script>
<link href="main.css" rel="stylesheet" type="text/css">
</head>  
<body bgcolor="#666666" text="#000000" leftmargin="0" topmargin="0" marginwidth="0" marginheight="0" onLoad="MM_preloadImages('images/home_nav_ovr.gif','images/about_nav_ovr.gif','images/product_nav_ovr.gif','images/tradeshow_nav_ovr.gif','images/contact_nav_ovr.gif')">
<?php include_once("analyticstracking.php") ?>
<table width="778" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr> 
    <td width="264"><img src="images/hdr_img01.jpg" width="264" height="100"></td>
    <td width="514" align="center" valign="middle" background="images/bg_darkgreen.gif"><img src="images/hdr_img02.jpg" width="442" height="72"></td>
  </tr>
</table>
<table width="778" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr> 
    <td width="212"><img src="images/hdr_img03.jpg" width="212" height="39"></td>
    <td width="566" valign="top" bgcolor="#333333"> 
      <table width="566" height="29" border="0" cellpadding="0" cellspacing="0">
<tr>
          <td height="27" background="images/bg_darkgreen2.gif"> 
<table width="566" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td align="right"><a href="index.html" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('home','','images/home_nav_ovr.gif',1)"><img src="images/home_nav.gif" name="home" width="44" height="20" border="0"></a><a href="aboutus.html" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('about','','images/about_nav_ovr.gif',1)"><img src="images/about_nav.gif" name="about" width="65" height="20" border="0"></a><a href="products.html" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('product','','images/product_nav_ovr.gif',1)"><img src="images/product_nav.gif" name="product" width="70" height="20" border="0"></a><a href="tradeshow.html" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('trade','','images/tradeshow_nav_ovr.gif',1)"><img src="images/tradeshow_nav.gif" name="trade" width="89" height="20" border="0"></a><a href="contactus.html" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('contact','','images/contact_nav_ovr.gif',1)"><img src="images/contact_nav.gif" name="contact" width="76" height="20" border="0"></a></td>
              </tr>
            </table></td>
        </tr>
      </table></td>
  </tr>
</table>
<table width="778" border="0" align="center" cellpadding="0" cellspacing="0"><!--DWLayoutTable-->
  <tr> 
    <td width="149" valign="top" bgcolor="#999999"> <table width="149" border="0" cellspacing="0" cellpadding="0">
        <tr> 
          <td><img src="images/hdr_img04.jpg" width="149" height="52"></td>
        </tr>
        <tr> 
          <td><table width="149" border="0" cellspacing="0" cellpadding="0">
              <tr> 
                <td width="149" align="center" background="images/bg_yellow.gif"><strong><span class="arial18"> 
                  </span></strong>
                  <table width="129" border="0" cellspacing="0" cellpadding="0">
                    <tr>
                      <td>&nbsp;</td>
                    </tr>
                    <tr> 
                      <td><strong><span class="arial18">PRODUCTS</span></strong></td>
                    </tr>
                    <tr> 
                      <td><img src="images/spacer.gif" width="10" height="10"></td>
                    </tr>
                    <tr> 
                      <td><strong><a href="pallet.html" class="arial12">Pallet Decoilers</a></strong></td>
                    </tr>
                    <tr> 
                      <td><img src="images/spacer.gif" width="5" height="5"></td>
                    </tr>
                    <tr> 
                      <td><strong><a href="wire.html" class="arial12">Wire Dereelers</a></strong></td>
                    </tr>
                    <tr> 
                      <td><img src="images/spacer.gif" width="5" height="5"></td>
                    </tr>
                    <tr> 
                      <td class="arial12"><strong><a href="parts.html" class="arial12">Parts 
                        Handlers</a></strong></td>
                    </tr>
                    <tr> 
                      <td><img src="images/spacer.gif" width="5" height="5"></td>
                    </tr>
                    <tr> 
                      <td><strong><a href="weldwire.html" class="arial12">Weld Wire Dereelers</a></strong></td>
                    </tr>
                    <tr> 
                      <td><img src="images/spacer.gif" width="5" height="5"></td>
                    </tr>
                    <tr> 
                      <td><strong><a href="rewing.html" class="arial12">Rewind/Respool</a></strong></td>
                    </tr>
                    <tr> 
                      <td colspan="2"><img src="images/spacer.gif" width="5" height="5"></td>
                    </tr>
                    <tr> 
                      <td colspan="2"><strong><a href="comp.html" class="arial12">Comp 
                        Busters</a></strong></td>
                    </tr>
                    <tr> 
                      <td colspan="2"><img src="images/spacer.gif" width="5" height="5"></td>
                    </tr>
                    <tr> 
                      <td colspan="2" height="12"><strong><a href="ctl.html" class="arial12">Cut-to-Length 
                        </a><img src="images/new.jpg" width="37" height="15" align="bottom"></strong></td>
                    </tr>
                    <tr> 
                      <td colspan="2"><img src="images/spacer.gif" width="5" height="5"></td>
                    </tr>
                    <tr> 
                      <td colspan="2" height="12"><strong><a href="shield.html" class="arial12">Safety 
                        Shields </a></strong><img src="images/new.jpg" width="37" height="15" align="bottom"></td>
                    </tr>
                    <tr> 
                      <td colspan="2"><img src="images/spacer.gif" width="5" height="5"></td>
                    </tr>
					<tr> 
                      <td colspan="2"><strong><a href="otherprod.html" class="arial12">Other Products</a></strong></td>
                    </tr>
                    <tr> 
                      <td colspan="2"><img src="images/spacer.gif" width="5" height="5"></td>
                    </tr>
                  </table>
                  <strong><span class="arial12"> </span></strong></td>
              </tr>
            </table></td>
        </tr>
        <tr> 
          <td><img src="images/left_div.jpg" width="149" height="13"></td>
        </tr>
        <tr> 
          <td><table width="129" border="0" align="center" cellpadding="0" cellspacing="0">
              <tr> 
                <td valign="top" class="arial11black">&nbsp;</td>
              </tr>
              <tr> 
                <td width="129" valign="top" class="arial11black"><strong>OUR 
                  CUSTOMERS </strong> <p>&quot;When I presented my challenges 
                    to Accra-Wire Controls, it was apparent that the technology 
                    used in tension control and coil handling could really help 
                    us. We are now able to load a shift's production at one time, 
                    eliminating up to nine coil changes.&quot; - <strong>Monty 
                    BrennerPlant Manager<br>
                    Pullman Industries<br>
                    Michigan, USA </strong><br>
                  </p></td>
              </tr>
              <tr>
                <td valign="top" class="arial11black">&nbsp;</td>
              </tr>
            </table></td>
        </tr>
      </table></td>
    <td width="629" valign="top" bgcolor="#FFFFFF"> <table width="629" border="0" cellspacing="0" cellpadding="0">
        <!--DWLayoutTable-->
        <tr> 
          <td background="images/bg_yellow2.gif"><img src="images/ylwlower.gif" width="50" height="51"></td>
        </tr>
      </table>
      <p>&nbsp;</p>
      <table width="95%" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr> 
          <td class="content" bgcolor="#FF6633"> <table width="100%" border="0" cellspacing="2" cellpadding="0">
              <tr> 
                <td bgcolor="#FFFFFF" class="content" align="center"><br> 
                  <?php 
			  
			  if (empty($Client_Email)){
			     $Client_Email="postmaster@accrainc.com";
			  }
	          if(@mail("sales@accrainc.com",$Subj,$MailBody,"From: $Client_Email")){
      ?>
                  You have successfully sent your request. We will be contacting 
                  you soon. 
                  <?php
	  }
	  else{
	  ?>
                  Our mail server is temporarily out of service at this moment. 
                  Please try again later. 
                  <?php
	  }
	  ?>
                  <br> <br> <br> </td>
              </tr>
            </table></td>
        </tr>
      </table>
      <br> <br> <br> <table width="95%" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr> 
          <td align="center" class="content"><font face="Arial, Helvetica, sans-serif"><strong>ACCRA-WIRE 
            CONTROLS INC.</strong></font><strong><br>
            </strong><font size="2" face="Arial, Helvetica, sans-serif">10891 
            Northland Drive,<br>
            Rockford, Michigan 49341</font><strong> <br>
            </strong><font size="2" face="Arial, Helvetica, sans-serif">Telephone 
            : (616) 866-3434<br>
            Email : <a href="mailto:sales@accrainc.com">sales@accrainc.com</a> 
            </font><strong> </strong></td>
        </tr>
      </table>
      <p><br>
        <strong><span class="arial12"><br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        </span></strong></p>
    </td>
  </tr>
</table>
<table width="778" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td bgcolor="#FFFFFF"><img src="images/spacer.gif" width="1" height="1"></td>
  </tr>
  <tr>
    <td background="images/bg_darkgreen.gif"><div align="center"><img src="images/footer.gif" width="208" height="65" border="0" usemap="#Map"></div></td>
  </tr>
  <tr>
    <td bgcolor="#FFFFFF"><img src="images/spacer.gif" width="1" height="1"></td>
  </tr>
</table>
<map name="Map">
  <area shape="rect" coords="64,38,210,51" href="http://www.uswebsitebuilder.com" target="_blank" alt="Site Designed by USWebsiteBuilder">
</map>
</body>	  
</html>