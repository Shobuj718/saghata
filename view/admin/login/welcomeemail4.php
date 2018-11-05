<?php 
session_start();
// echo "<pre>";
// var_dump($_POST);
//die();

if($_SERVER['REQUEST_METHOD'] == 'POST'){
  $to      = $_POST['email'];
  $subject = $_POST['subject'];
  $message = $_POST['message'];  
}

$message = '
<!doctype html>
<html>
  
  <head>
    <!-- NAME: SIMPLE TEXT -->
    <!--[if gte mso 15]>
      <xml>
        <o:OfficeDocumentSettings>
          <o:AllowPNG/>
          <o:PixelsPerInch>96</o:PixelsPerInch>
        </o:OfficeDocumentSettings>
      </xml>
    <![endif]-->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ehsan Software </title>
    <style
    type="text/css">p{ margin:10px 0; padding:0; } table{ border-collapse:collapse; } h1,h2,h3,h4,h5,h6{
      display:block; margin:0; padding:0; } img,a img{ border:0; height:auto; outline:none;
      text-decoration:none; } body,#bodyTable,#bodyCell{ height:100%; margin:0; padding:0;
      width:100%; } #outlook a{ padding:0; } img{ -ms-interpolation-mode:bicubic; } table{
      mso-table-lspace:0pt; mso-table-rspace:0pt; } .ReadMsgBody{ width:100%; } .ExternalClass{
      width:100%; } p,a,li,td,blockquote{ mso-line-height-rule:exactly; } a[href^=tel],a[href^=sms]{
      color:inherit; cursor:default; text-decoration:none; } p,a,li,td,body,table,blockquote{
      -ms-text-size-adjust:100%; -webkit-text-size-adjust:100%; } .ExternalClass,.ExternalClass
      p,.ExternalClass td,.ExternalClass div,.ExternalClass span,.ExternalClass font{
      line-height:100%; } a[x-apple-data-detectors]{ color:inherit !important; text-decoration:none
      !important; font-size:inherit !important; font-family:inherit !important; font-weight:inherit
      !important; line-height:inherit !important; } #bodyCell{ padding:10px; } .templateContainer{
      max-width:600px !important; } a.mcnButton{ display:block; } .mcnImage{ vertical-align:bottom;
      } .mcnTextContent{ word-break:break-word; } .mcnTextContent img{ height:auto !important;
      } .mcnDividerBlock{ table-layout:fixed !important; } body,#bodyTable{ background-color:#FFFFFF;
      background-image:none; background-repeat:no-repeat; background-position:center;
      background-size:cover; } #bodyCell{ border-top:0; } .templateContainer{ border:0;
      } h1{ color:#202020; font-family:Helvetica; font-size:26px; font-style:normal;
      font-weight:bold; line-height:125%; letter-spacing:normal; text-align:left; } h2{
      color:#202020; font-family:Helvetica; font-size:22px; font-style:normal; font-weight:bold;
      line-height:125%; letter-spacing:normal; text-align:left; } h3{ color:#202020;
      font-family:Helvetica; font-size:20px; font-style:normal; font-weight:bold; line-height:125%;
      letter-spacing:normal; text-align:left; } h4{ color:#202020; font-family:Helvetica;
      font-size:18px; font-style:normal; font-weight:bold; line-height:125%; letter-spacing:normal;
      text-align:left; } #templateHeader{ border-top:0; border-bottom:0; } #templateHeader
      .mcnTextContent,#templateHeader .mcnTextContent p{ color:#202020; font-family:Helvetica;
      font-size:16px; line-height:150%; text-align:left; } #templateHeader .mcnTextContent
      a,#templateHeader .mcnTextContent p a{ color:#2BAADF; font-weight:normal; text-decoration:underline;
      } #templateBody{ border-top:0; border-bottom:0; } #templateBody .mcnTextContent,#templateBody
      .mcnTextContent p{ color:#202020; font-family:Helvetica; font-size:16px; line-height:150%;
      text-align:left; } #templateBody .mcnTextContent a,#templateBody .mcnTextContent
      p a{ color:#2BAADF; font-weight:normal; text-decoration:underline; } #templateFooter{
      border-top:0; border-bottom:0; } #templateFooter .mcnTextContent,#templateFooter
      .mcnTextContent p{ color:#202020; font-family:Helvetica; font-size:12px; line-height:150%;
      text-align:left; } #templateFooter .mcnTextContent a,#templateFooter .mcnTextContent
      p a{ color:#202020; font-weight:normal; text-decoration:underline; } @media only
      screen and (min-width:768px){ .templateContainer{ width:600px !important; } } @media
      only screen and (max-width: 480px){ body,table,td,p,a,li,blockquote{ -webkit-text-size-adjust:none
      !important; } } @media only screen and (max-width: 480px){ body{ width:100% !important;
      min-width:100% !important; } } @media only screen and (max-width: 480px){ #bodyCell{
      padding-top:10px !important; } } @media only screen and (max-width: 480px){ .mcnImage{
      width:100% !important; } } @media only screen and (max-width: 480px){ .mcnCartContainer,.mcnCaptionTopContent,.mcnRecContentContainer,.mcnCaptionBottomContent,.mcnTextContentContainer,.mcnBoxedTextContentContainer,.mcnImageGroupContentContainer,.mcnCaptionLeftTextContentContainer,.mcnCaptionRightTextContentContainer,.mcnCaptionLeftImageContentContainer,.mcnCaptionRightImageContentContainer,.mcnImageCardLeftTextContentContainer,.mcnImageCardRightTextContentContainer{
      max-width:100% !important; width:100% !important; } } @media only screen and (max-width:
      480px){ .mcnBoxedTextContentContainer{ min-width:100% !important; } } @media only
      screen and (max-width: 480px){ .mcnImageGroupContent{ padding:9px !important; }
      } @media only screen and (max-width: 480px){ .mcnCaptionLeftContentOuter .mcnTextContent,.mcnCaptionRightContentOuter
      .mcnTextContent{ padding-top:9px !important; } } @media only screen and (max-width:
      480px){ .mcnImageCardTopImageContent,.mcnCaptionBlockInner .mcnCaptionTopContent:last-child
      .mcnTextContent{ padding-top:18px !important; } } @media only screen and (max-width:
      480px){ .mcnImageCardBottomImageContent{ padding-bottom:9px !important; } } @media
      only screen and (max-width: 480px){ .mcnImageGroupBlockInner{ padding-top:0 !important;
      padding-bottom:0 !important; } } @media only screen and (max-width: 480px){ .mcnImageGroupBlockOuter{
      padding-top:9px !important; padding-bottom:9px !important; } } @media only screen
      and (max-width: 480px){ .mcnTextContent,.mcnBoxedTextContentColumn{ padding-right:18px
      !important; padding-left:18px !important; } } @media only screen and (max-width:
      480px){ .mcnImageCardLeftImageContent,.mcnImageCardRightImageContent{ padding-right:18px
      !important; padding-bottom:0 !important; padding-left:18px !important; } } @media
      only screen and (max-width: 480px){ .mcpreview-image-uploader{ display:none !important;
      width:100% !important; } } @media only screen and (max-width: 480px){ h1{ font-size:22px
      !important; line-height:125% !important; } } @media only screen and (max-width:
      480px){ h2{ font-size:20px !important; line-height:125% !important; } } @media
      only screen and (max-width: 480px){ h3{ font-size:18px !important; line-height:125%
      !important; } } @media only screen and (max-width: 480px){ h4{ font-size:16px !important;
      line-height:150% !important; } } @media only screen and (max-width: 480px){ table.mcnBoxedTextContentContainer
      td.mcnTextContent,td.mcnBoxedTextContentContainer td.mcnTextContent p{ font-size:14px
      !important; line-height:150% !important; } } @media only screen and (max-width:
      480px){ td#templateHeader td.mcnTextContent,td#templateHeader td.mcnTextContent
      p{ font-size:16px !important; line-height:150% !important; } } @media only screen
      and (max-width: 480px){ td#templateBody td.mcnTextContent,td#templateBody td.mcnTextContent
      p{ font-size:16px !important; line-height:150% !important; } } @media only screen
      and (max-width: 480px){ td#templateFooter td.mcnTextContent,td#templateFooter td.mcnTextContent
      p{ font-size:14px !important; line-height:150% !important; } }</style>
  </head>
  
  <body style="background:#FFFFFF none no-repeat center/cover;height: 100%;margin: 0;padding: 0;width: 100%;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;background-color: #FFFFFF;background-image: none;background-repeat: no-repeat;background-position: center;background-size: cover;">
    <center>
      <table align="center" border="0" cellpadding="0" cellspacing="0" height="100%"
      width="100%" id="bodyTable" style="background:#FFFFFF none no-repeat center/cover;border-collapse: collapse;mso-table-lspace: 0pt;mso-table-rspace: 0pt;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;height: 100%;margin: 0;padding: 0;width: 100%;background-color: #FFFFFF;background-image: none;background-repeat: no-repeat;background-position: center;background-size: cover;">
        <tr>
          <td align="left" valign="top" id="bodyCell" style="mso-line-height-rule: exactly;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;height: 100%;margin: 0;padding: 10px;width: 100%;border-top: 0;">
            <!-- BEGIN TEMPLATE // -->
            <!--[if gte mso 9]>
              <table align="center" border="0" cellspacing="0" cellpadding="0" width="600" style="width:600px;">
                <tr>
                  <td align="center" valign="top" width="600" style="width:600px;">
                  <![endif]-->
                  <table border="0" cellpadding="0" cellspacing="0" width="100%" class="templateContainer"
                  style="border-collapse: collapse;mso-table-lspace: 0pt;mso-table-rspace: 0pt;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;border: 0;max-width: 600px !important;">
                    <tr>
                      <td valign="top" id="templateHeader" style="mso-line-height-rule: exactly;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;border-top: 0;border-bottom: 0;"></td>
                    </tr>
                    <tr>
                      <td valign="top" id="templateBody" style="mso-line-height-rule: exactly;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;border-top: 0;border-bottom: 0;">
                        <table class="mcnTextBlock" style="min-width: 100%;border-collapse: collapse;mso-table-lspace: 0pt;mso-table-rspace: 0pt;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;"
                        border="0" cellpadding="0" cellspacing="0" width="100%">
                          <tbody class="mcnTextBlockOuter">
                            <tr>
                              <td class="mcnTextBlockInner" style="padding-top: 9px;mso-line-height-rule: exactly;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;"
                              valign="top">
                                <!--[if mso]>
                                  <table align="left" border="0" cellspacing="0" cellpadding="0" width="100%" style="width:100%;">
                                    <tr>
                                    <![endif]-->
                                    <!--[if mso]>
                                      <td valign="top" width="600" style="width:600px;">
                                      <![endif]-->
                                      <table style="max-width: 100%;min-width: 100%;border-collapse: collapse;mso-table-lspace: 0pt;mso-table-rspace: 0pt;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;"
                                      class="mcnTextContentContainer" align="left" border="0" cellpadding="0" cellspacing="0"
                                      width="100%">
                                        <tbody>
                                          <tr>
                                            <td class="mcnTextContent" style="padding-top: 0;padding-right: 18px;padding-bottom: 9px;padding-left: 18px;mso-line-height-rule: exactly;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;word-break: break-word;color: #202020;font-family: Helvetica;font-size: 16px;line-height: 150%;text-align: left;"
                                            valign="top"> <span style="font-size:14px">হ্যালো স্যার,<br>
<br>
ইহসান সফটওয়্যার এ  আপনাকে স্বাগতম, আমাদের স্কুল ম্যানেজমেন্ট সফটওয়্যার এর ডেমো দেখতে নিচের লিংকে ক্লিক করুন </em></span>
                                              <br>
                                              <br>
<span style="font-size:14px">&gt;&gt; এখানে <a href="http://www.fuphs.com/view/admin/" target="_blank" style="mso-line-height-rule: exactly;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;color: #2BAADF;font-weight: normal;text-decoration: underline;"><strong> ক্লিক করুন  </strong></a></span>
                                              <br>
                                              <br>
<span style="font-size:14px"> আমরা আশা করি এই স্কুল ম্যানেজমেন্ট সফটওয়্যার টি আপনার স্কুলের জন্য গুরুত্বপূর্ণ <br>
<br>
আপনার যদি কোনো প্রশ্ন থাকে এই সফটওয়্যার টি নিয়ে  তবে আমাদেরকে জানাবেন অথবা মেইল করবেন <br> '.$message.'
<br>
ধন্যবাদ ,<br>
সবুজ  <br>
<br>
সবুজ ইসলাম <br>
সফটওয়্যার ইঞ্জিনিয়ার, ইহসান সফটওয়্যার <br>
shobujsa93@gmail.com<br>
<br>
<!-- ps:<strong> Want help putting the lessons to practice?</strong> <a href="https://getlighthouse.com/?utm_campaign=78f0336dd9-AUTOMATION_Free_Ebook__1&utm_medium=email&utm_source=Lighthouse+Blog+Subscribers&utm_term=0_d2a0b98733-78f0336dd9-438686181" target="_blank" style="mso-line-height-rule: exactly;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;color: #2BAADF;font-weight: normal;text-decoration: underline;">Sign up now for a free 28-day trial of Lighthouse management software. </a> --></span>
                                              <br>&nbsp;</td>
                                          </tr>
                                        </tbody>
                                      </table>
                                      <!--[if mso]>
                                      </td>
                                    <![endif]-->
                                    <!--[if mso]>
                                    </tr>
                                  </table>
                                <![endif]-->
                              </td>
                            </tr>
                          </tbody>
                        </table>
                      </td>
                    </tr>
                    <tr>
                      <td valign="top" id="templateFooter" style="mso-line-height-rule: exactly;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;border-top: 0;border-bottom: 0;"></td>
                    </tr>
                  </table>
                  <!--[if gte mso 9]>
                  </td>
                </tr>
              </table>
            <![endif]-->
            <!-- // END TEMPLATE -->
          </td>
        </tr>
      </table>
    </center>
    <center>
      <br />
      <br />
      <br />
      <br />
      <br />
      <br />
      <table border="0" cellpadding="0" cellspacing="0" width="100%" id="canspamBarWrapper"
      style="background-color:#FFFFFF; border-top:1px solid #E5E5E5;">
        <tr>
          <td align="center" valign="top" style="padding-top:20px; padding-bottom:20px;">
            <table border="0" cellpadding="0" cellspacing="0" id="canspamBar">
              <tr>
                <td align="center" valign="top" style="color:#606060; font-family:Helvetica, Arial, sans-serif; font-size:11px; line-height:150%; padding-right:20px; padding-bottom:5px; padding-left:20px; text-align:center;">This email was sent to
                  <a href="mailto:infoehsansoftware@gmail.com" target="_blank" style="color:#404040 !important;">jinfoehsansoftware@gmail.com</a>
                  <br />
                  <a href="http://www.fuphs.com/view/admin/"
                  target="_blank" style="color:#404040 !important;"><em>why did I get this?</em>
                  </a>&nbsp;&nbsp;&nbsp;&nbsp;
                  <a href="http://www.fuphs.com/view/admin/"
                  style="color:#404040 !important;">unsubscribe from this list</a>&nbsp;&nbsp;&nbsp;&nbsp;
                  <a href="http://www.fuphs.com/view/admin/"
                  style="color:#404040 !important;">update subscription preferences</a>
                  <br />Get Software &middot; www.globalehsan.com &middot; Bogra, Rajshahi.
                  &middot; Bangladesh
                  <br />
                  <br />
                </td>
              </tr>
            </table>
          </td>
        </tr>
      </table>
      <style type="text/css">
        @media only screen and (max-width: 480px){
                        table#canspamBar td{font-size:14px !important;}
                        table#canspamBar td a{display:block !important; margin-top:10px !important;}
                    }
      </style>
    </center> 
    <!-- <img src="http://getlighthouse.us8.list-manage.com/track/open.php?u=406808576defca47cea4ef641&id=78f0336dd9&e=91b8af3fbe"
    height="1" width="1"> -->
  </body>

</html> ';

//echo $message;

// if($_SERVER['REQUEST_METHOD'] == 'POST'){
//   $to = $_POST['email'];
//   $subject = $_POST['subject'];
//   $message = $_POST['message'];

  
// }
/*if(!filter_var($to,FILTER_VALIDATE_EMAIL)){
    $_SESSION['error'] = "Invalid Email Address ! Choose Validet Email !!!";
    echo "<script>window.Location='multiplemailsend2.php';</script>";
    die();
 }*/

//$to = 'shobujislam1989@gmail.com';
    //$subject = "Confirm Registration";
    $from = 'shobujsa93@gmail.com';
      
    
// To send HTML mail, the Content-type header must be set
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
 
// Create email headers
$headers .= 'From: '.$from."\r\n".
    'Reply-To: '.$from."\r\n" .
    'X-Mailer: PHP/' . phpversion();


  if(mail($to, $subject, $message, $headers)){
    $_SESSION['success'] = "Success: Mail Send Successfull ";
    echo "<script>window.location='multiplemailsend2.php'</script>";
  } else{
     $_SESSION['error'] = "Error: Mail not sending !!! ";
    echo "<script>window.location='multiplemailsend2.php'</script>";
  }