<? 
   if($form=="pd"){
   		$MailBody = "Quotation Sheet - PALLET DECOILER: \n\n";
		$Subj = "Quotation Sheet - PALLET DECOILER";
   }
   elseif($form=="wd"){
   		$MailBody = "Quotation Sheet - Shaped Material: \n\n";
		$Subj = "Quotation Sheet - Shaped Material";
   }
   else{
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
<title>Accra-Wire Controls Inc. - || Contact Us || - USWEBSITEBUILDER.COM</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link href="style.css" rel="stylesheet" type="text/css">
<script language="JavaScript" type="text/JavaScript">
<!--
function MM_swapImgRestore() { //v3.0
  var i,x,a=document.MM_sr; for(i=0;a&&i<a.length&&(x=a[i])&&x.oSrc;i++) x.src=x.oSrc;
}

function MM_preloadImages() { //v3.0
  var d=document; if(d.images){ if(!d.MM_p) d.MM_p=new Array();
    var i,j=d.MM_p.length,a=MM_preloadImages.arguments; for(i=0; i<a.length; i++)
    if (a[i].indexOf("#")!=0){ d.MM_p[j]=new Image; d.MM_p[j++].src=a[i];}}
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
</head>

<body bgcolor="#333333" leftmargin="0" topmargin="0" marginwidth="0" marginheight="0" onLoad="MM_preloadImages('images/home02.jpg','images/aboutua02.jpg','images/products01.jpg','images/tradeshow02.jpg','images/contact02.jpg')">
<form name="form1" action="thankyou.php" method="POST">
<table width="778" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td width="200"><img src="images/inside_header01.jpg" width="200" height="100"></td>
    <td width="200"><img src="images/inside_header02.jpg" width="200" height="100"></td>
    <td width="200"><img src="images/inside_header03.jpg" width="200" height="100"></td>
    <td><img src="images/inside_header04.jpg" width="178" height="100"></td>
  </tr>
</table>
  <table width="778" border="0" align="center" cellpadding="0" cellspacing="0">
    <tr> 
    <td width="170"><img src="images/inside_header05.jpg" width="170" height="29"></td>
      <td bgcolor="003366">
<table width="50%" border="0" align="right" cellpadding="0" cellspacing="0">
        <tr>
          <td width="42"><a href="index.html" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('Image23','','images/home02.jpg',1)"><img src="images/home01.jpg" name="Image23" width="42" height="13" border="0"></a></td>
          <td width="69"><a href="aboutus.html" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('Image24','','images/aboutua02.jpg',1)"><img src="images/aboutua01.jpg" name="Image24" width="65" height="13" border="0"></a></td>
          <td width="71"><a href="product.html" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('Image25','','images/products01.jpg',1)"><img src="images/products02.jpg" name="Image25" width="71" height="13" border="0"></a></td>
          <td width="88"><a href="tradeshow.html" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('Image26','','images/tradeshow02.jpg',1)"><img src="images/tradeshow01.jpg" name="Image26" width="88" height="13" border="0"></a></td>
          <td width="75"><a href="contactus.html" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('Image27','','images/contact02.jpg',1)"><img src="images/contact01.jpg" name="Image27" width="75" height="13" border="0"></a></td>
        </tr>
      </table></td>
  </tr>
</table>
<table width="778" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td width="164"><img src="images/inside_header06.jpg" width="164" height="11"></td>
    <td bgcolor="#999999"><img src="images/spacer.gif" width="1" height="1"></td>
  </tr>
</table>
<table width="778" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr> 
    <td width="163"><img src="images/inside_header07.jpg" width="163" height="51"></td>
    <td background="images/title_contactus.jpg">&nbsp;</td>
  </tr>
</table>
<table width="778" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr> 
    <td width="163" valign="top"> <table width="100%" border="0" cellspacing="0" cellpadding="0">
        <tr> 
          <td height="20" colspan="2" bgcolor="F77B21"><br> <table width="95%" border="0" align="center" cellpadding="0" cellspacing="0">
              <tr> 
                <td align="center"><img src="images/title_product01.jpg" width="100" height="15"></td>
              </tr>
              <tr> 
                <td height="10"><img src="images/spacer.gif" width="1" height="1"></td>
              </tr>
              <tr> 
                <td class="style"><a href="pallet.html" class="link">Pallet Decoilers</a></td>
              </tr>
              <tr> 
                <td height="10"><img src="images/spacer.gif" width="1" height="1"></td>
              </tr>
              <tr> 
                <td class="style"><a href="wire_dereelers.htm" class="link">Wire 
                  Dereelers</a></td>
              </tr>
              <tr> 
                <td height="10"><img src="images/spacer.gif" width="1" height="1"></td>
              </tr>
              <tr> 
                <td class="style"><a href="parts_handlers.html" class="link">Parts 
                  Handlers</a></td>
              </tr>
              <tr> 
                <td height="10"><img src="images/spacer.gif" width="1" height="1"></td>
              </tr>
              <tr> 
                <td class="style"><a href="weld_wire.html" class="link">Weld Wire 
                  Dereelers</a></td>
              </tr>
              <tr> 
                <td height="10"><img src="images/spacer.gif" width="1" height="1"></td>
              </tr>
              <tr> 
                <td height="10" class="style"><a href="rewind_respool.html" class="link">Rewind/Respool</a></td>
              </tr>
            </table>
            <br> </td>
        </tr>
        <tr> 
          <td width="150"><img src="images/inside_header09.jpg" width="150" height="11"></td>
          <td background="images/inside_header010.jpg"><img src="images/inside_header010.jpg" width="1" height="11"></td>
        </tr>
      </table>
      <table width="100%" height="350" border="0" cellpadding="0" cellspacing="0" bgcolor="#999999">
        <tr> 
          <td align="center" valign="top"><br>
            <table width="95%" border="0" cellpadding="0" cellspacing="0">
              <tr> 
                <td class="style"><font color="000066" size="2">OUR CUSTOMERS</font></td>
              </tr>
              <tr> 
                <td class="content"><br> &quot;When I presented my challenges 
                  to Accra-Wire Controls, it was apparent that the technology 
                  used in tension control and coil handling could really help 
                  us. We are now able to load a shift's production at one time, 
                  eliminating up to nine coil changes.&quot; - <span class="contentsmall"><font color="000066"><strong>Monty 
                  BrennerPlant Manager<br>
                  Pullman Industries<br>
                  Michigan, USA</strong></font></span></td>
              </tr>
            </table>
             </td>
        </tr>
      </table></td>
    <td bgcolor="#FFFFFF" valign="top" align="center"><br>
        <br>
        <br>
        <table width="95%" border="0" cellspacing="0" cellpadding="0">
        <tr> 
          <td class="content" bgcolor="#FF6633">
            <table width="100%" border="0" cellspacing="2" cellpadding="0">
              <tr> 
                  <td bgcolor="#FFFFFF" class="content" align="center"><br>
                    <?php 
			  
			  if (empty($Client_Email)){
			     $Client_Email="postmaster@accrainc.com";
			  }
	       if(mail("sales@accrainc.com",$Subj,$MailBody,"From: $Client_Email")){
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
                    <br>
                    <br>
                    <br>
                  </td>
              </tr>
            </table>
          </td>
        </tr>
      </table>
        <br>
        <br>
        <br>
        <table width="95%" border="0" cellpadding="0" cellspacing="0">
        <tr> 
          <td align="center" class="content"><font face="Arial, Helvetica, sans-serif"><strong>ACCRA-WIRE 
            CONTROLS INC.</strong></font><strong><br>
            </strong><font size="2" face="Arial, Helvetica, sans-serif">10891 
            Northland Drive,<br>
            Rockford, Michigan 49341</font><strong> <br>
            </strong><font size="2" face="Arial, Helvetica, sans-serif">Telephone 
            : (616) 866-2337<br>
            Email : <a href="mailto:mgrabow@accrainc.com">mgrabow@accrainc.com</a> 
            </font><strong> </strong></td>
        </tr>
      </table>
       
    </td>
  </tr>
</table>
  <table width="778" border="0" align="center" cellpadding="0" cellspacing="0">
    <tr> 
      <td height="1" bgcolor="#FFFFFF"><img src="images/spacer.gif" width="1" height="1"></td>
    </tr>
  </table>
  <table width="778" border="0" align="center" cellpadding="0" cellspacing="0">
    <tr> 
      <td align="center" bgcolor="003399" class="header"><table width="75%" border="0" cellspacing="0" cellpadding="0">
          <tr> 
            <td height="10"><img src="images/spacer.gif" width="1" height="1"></td>
          </tr>
          <tr> 
            <td align="center"><span class="contentputi">ACCRAINC.COM</span><span class="contentsmall"><br>
              <font color="#FFFFFF">Copyright &copy; 2003. All Rights Reserved. 
              </font></span></td>
          </tr>
          <tr> 
            <td height="10"><img src="images/spacer.gif" width="1" height="1"></td>
          </tr>
        </table></td>
    </tr>
  </table>
</form>
</body>
</html>
