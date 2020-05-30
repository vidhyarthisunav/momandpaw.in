<?php

  require_once "vendor/autoload.php";
  use PHPMailer\PHPMailer\PHPMailer;

  $mail = new PHPMailer;
  $mail->isSMTP();
  $mail->SMTPDebug = 0;
  $mail->SMTPAuth = true;
  $mail->SMTPSecure = 'ssl';
  $mail->Host = 'smtp.gmail.com';
  $mail->Port = 465;

  $mail->Username = 'petcare@momandpaw.in';
  $mail->Password = 'MOMANDPAW';

  $mail->From = 'petcare@momandpaw.in';
  $mail->FromName = 'MOM & PAW';
  $mail->addAddress('vidhyarthisunav@gmail.com', 'sunav');

  $mail->addReplyTo('petcare@momandpaw.in', 'reply');

  $mail->WordWrap = 50;
  $mail->isHTML(true);

  $mail->Subject = "Your Pet's Diet Analysis is in progress!";
  $mail->Body    = '
  <div dir="ltr"><div class="gmail_quote"><br><u></u>
  
      <div style="color:#fff;font-family:&quot;Segoe UI&quot;,Segoe,&quot;Avenir Next&quot;,&quot;Open Sans&quot;,sans-serif;font-size:14px;line-height:1.5;margin:0">
      <table class="m_-3201832358163851173wrapper-table" cellpadding="5" cellspacing="0" width="100%" border="0" style="border-collapse:collapse;color:#fff;font-family:&quot;Segoe UI&quot;,Segoe,&quot;Avenir Next&quot;,&quot;Open Sans&quot;,sans-serif;font-size:14px;line-height:1.5;background-color:#fafafa;background-repeat:no-repeat" bgcolor="#FAFAFA">
      <tbody><tr style="border-color:transparent">
      <td align="center" style="border-collapse:collapse;border-color:transparent">
      <table cellpadding="0" cellspacing="0" width="600px" id="m_-3201832358163851173bodyTable" border="0" bgcolor="transparent" style="border-collapse:collapse;color:#fff;font-family:&quot;Segoe UI&quot;,Segoe,&quot;Avenir Next&quot;,&quot;Open Sans&quot;,sans-serif;font-size:14px;line-height:1.5">
      <tbody><tr style="border-color:transparent">
      <td border="0" cellpadding="0" cellspacing="0" style="border-collapse:collapse;border-color:transparent">
      <table cellpadding="0" cellspacing="0" style="border-collapse:collapse;color:#fff;font-family:&quot;Segoe UI&quot;,Segoe,&quot;Avenir Next&quot;,&quot;Open Sans&quot;,sans-serif;font-size:14px;line-height:1.5;width:100%" border="0" width="100%">
      <tbody><tr style="border-color:transparent">
      <th width="600" style="border-color:transparent;font-weight:400;text-align:left;vertical-align:top" cellpadding="0" cellspacing="0" class="m_-3201832358163851173tc" align="left" valign="top">
      <table border="0" width="100%" cellpadding="0" cellspacing="0" style="border-collapse:collapse;color:#fff;font-family:&quot;Segoe UI&quot;,Segoe,&quot;Avenir Next&quot;,&quot;Open Sans&quot;,sans-serif;font-size:14px;line-height:1.5;background-color:#313bba" bgcolor="#313BBA">
      <tbody><tr style="border-color:transparent">
      <td cellpadding="0" cellspacing="0" style="border-collapse:collapse;border-color:transparent">
      <table width="100%" cellpadding="0" cellspacing="0" style="border-collapse:collapse;color:#fff;font-family:&quot;Segoe UI&quot;,Segoe,&quot;Avenir Next&quot;,&quot;Open Sans&quot;,sans-serif;font-size:14px;line-height:1.5;background-color:#313bba" bgcolor="#313BBA">
      <tbody><tr style="border-color:transparent">
      <td class="m_-3201832358163851173expander" colspan="1" width="100%" height="30" style="border-collapse:collapse;border-color:transparent"></td>
      </tr>
      <tr class="m_-3201832358163851173content-row" style="border-color:transparent">
      <td class="m_-3201832358163851173content-cell" width="600" style="border-collapse:collapse;border-color:transparent;vertical-align:top" valign="top">
      <div id="m_-3201832358163851173" style="color:#fff;font-family:&quot;Segoe UI&quot;,Segoe,&quot;Avenir Next&quot;,&quot;Open Sans&quot;,sans-serif;font-size:14px;line-height:1.5;display:block;height:47;text-align:center;width:100%" height="47" align="center" width="100%">
      <center><img border="0" width="210" height="auto" class="m_-3201832358163851173sp-img m_-3201832358163851173small_img" align="center" alt="logo-3-removebg" src="https://s6915530.sendpul.se/files/emailservice/userfiles/1eb8a90ec47bb5a29be9b98d0481abea6915530/logo-3-removebg.png" style="text-decoration:none;border:0;height:auto;line-height:100%;outline:0;display:block"></center>
      </div>
      </td>
      </tr>
      <tr style="border-color:transparent">
      <td class="m_-3201832358163851173expander" colspan="1" width="100%" height="30" style="border-collapse:collapse;border-color:transparent"></td>
      </tr>
      </tbody></table>
      </td>
      </tr>
      </tbody></table>
      </th>
      </tr>
      </tbody></table>
      </td>
      </tr>
      <tr style="border-color:transparent">
      <td border="0" cellpadding="0" cellspacing="0" style="border-collapse:collapse;border-color:transparent">
      <table cellpadding="0" cellspacing="0" style="border-collapse:collapse;color:#fff;font-family:&quot;Segoe UI&quot;,Segoe,&quot;Avenir Next&quot;,&quot;Open Sans&quot;,sans-serif;font-size:14px;line-height:1.5;width:100%" border="0" width="100%">
      <tbody><tr style="border-color:transparent">
      <th width="600" style="border-color:transparent;font-weight:400;text-align:left;vertical-align:top" cellpadding="0" cellspacing="0" class="m_-3201832358163851173tc" align="left" valign="top">
      <table border="0" width="100%" cellpadding="0" cellspacing="0" style="border-collapse:collapse;color:#fff;font-family:&quot;Segoe UI&quot;,Segoe,&quot;Avenir Next&quot;,&quot;Open Sans&quot;,sans-serif;font-size:14px;line-height:1.5;background-color:transparent">
      <tbody><tr style="border-color:transparent">
      <td cellpadding="0" cellspacing="0" style="border-collapse:collapse;border-color:transparent">
      <table width="100%" cellpadding="0" cellspacing="0" style="border-collapse:collapse;color:#fff;font-family:&quot;Segoe UI&quot;,Segoe,&quot;Avenir Next&quot;,&quot;Open Sans&quot;,sans-serif;font-size:14px;line-height:1.5">
      <tbody><tr class="m_-3201832358163851173content-row" style="border-color:transparent">
      <td class="m_-3201832358163851173content-cell" width="600" style="border-collapse:collapse;border-color:transparent;vertical-align:top" valign="top">
      <div id="m_-3201832358163851173" style="color:#fff;font-family:&quot;Segoe UI&quot;,Segoe,&quot;Avenir Next&quot;,&quot;Open Sans&quot;,sans-serif;font-size:14px;line-height:1.5;display:block;height:193;width:100%" height="193" width="100%"><img border="0" width="600" height="auto" class="m_-3201832358163851173sp-img" align="left" alt="" src="https://s6915530.sendpul.se/files/emailservice/userfiles/e87c2cc59bdd62b30b9245c0a00c5c32366067/02-05-2019/Scene_dfgn-01.png" style="text-decoration:none;border:0;height:auto;line-height:100%;outline:0;margin:0;display:block"></div>
      </td>
      </tr>
      </tbody></table>
      </td>
      </tr>
      </tbody></table>
      <table border="0" width="100%" cellpadding="0" cellspacing="0" style="border-collapse:collapse;color:#fff;font-family:&quot;Segoe UI&quot;,Segoe,&quot;Avenir Next&quot;,&quot;Open Sans&quot;,sans-serif;font-size:14px;line-height:1.5;background-color:#313bba" bgcolor="#313BBA">
      <tbody><tr style="border-color:transparent">
      <td cellpadding="0" cellspacing="0" style="border-collapse:collapse;border-color:transparent">
      <table width="100%" cellpadding="0" cellspacing="0" id="m_-3201832358163851173w" style="border-collapse:collapse;color:#fff;font-family:&quot;Segoe UI&quot;,Segoe,&quot;Avenir Next&quot;,&quot;Open Sans&quot;,sans-serif;font-size:14px;line-height:1.5;background-color:#313bba;font-weight:normal;margin:0" bgcolor="#313BBA">
      <tbody><tr style="border-color:transparent">
      <td class="m_-3201832358163851173expander" colspan="3" width="100%" height="60" style="border-collapse:collapse;border-color:transparent"></td>
      </tr>
      <tr class="m_-3201832358163851173content-row" style="border-color:transparent">
      <td class="m_-3201832358163851173gutter" style="border-collapse:collapse;border-color:transparent;width:30px!important" width="30" height="100%"></td>
      <td class="m_-3201832358163851173content-cell" width="540" style="border-collapse:collapse;color:#fff; border-color:transparent;vertical-align:top" valign="top">
      <h3 style="font-weight:normal;line-height:1.2;margin:0 0 10px;font-size:24px;color:#fff;font-family:&quot;Segoe UI&quot;,Segoe,&quot;Avenir Next&quot;,&quot;Open Sans&quot;,sans-serif;text-align:center" align="center"><span style="font-size:32px"><strong>Hello,</strong></span></h3>
      </td>
      <td class="m_-3201832358163851173gutter" style="border-collapse:collapse;border-color:transparent;width:30px!important" width="30" height="100%"></td>
      </tr>
      <tr style="border-color:transparent">
      <td class="m_-3201832358163851173expander" colspan="3" width="100%" height="10" style="border-collapse:collapse;border-color:transparent"></td>
      </tr>
      </tbody></table>
      </td>
      </tr>
      </tbody></table>
      <table border="0" width="100%" cellpadding="0" cellspacing="0" style="border-collapse:collapse;color:#fff;font-family:&quot;Segoe UI&quot;,Segoe,&quot;Avenir Next&quot;,&quot;Open Sans&quot;,sans-serif;font-size:14px;line-height:1.5;background-color:#313bba" bgcolor="#313BBA">
      <tbody><tr style="border-color:transparent">
      <td cellpadding="0" cellspacing="0" style="border-collapse:collapse;border-color:transparent">
      <table width="100%" cellpadding="0" cellspacing="0" id="m_-3201832358163851173w" style="border-collapse:collapse;color:#fff;font-family:&quot;Segoe UI&quot;,Segoe,&quot;Avenir Next&quot;,&quot;Open Sans&quot;,sans-serif;font-size:14px;line-height:1.5;background-color:#313bba;font-weight:normal;margin:0" bgcolor="#313BBA">
      <tbody><tr style="border-color:transparent">
      <td class="m_-3201832358163851173expander" colspan="3" width="100%" height="20" style="border-collapse:collapse;border-color:transparent"></td>
      </tr>
      <tr class="m_-3201832358163851173content-row" style="border-color:transparent">
      <td class="m_-3201832358163851173gutter" style="border-collapse:collapse;border-color:transparent;width:70px!important" width="70" height="100%"></td>
      <td class="m_-3201832358163851173content-cell" width="460" style="border-collapse:collapse;color:#fff !important;border-color:transparent;vertical-align:top" valign="top">
      <p style="font-size:inherit;line-height:1.5;margin:0 0 10px;color:#fff !important;font-family:&quot;Segoe UI&quot;,Segoe,&quot;Avenir Next&quot;,&quot;Open Sans&quot;,sans-serif;font-weight:normal;padding:0"><span style="font-size:16px">Thank you for expressing your trust in us. We worked with a veterinary nutritionist to formulate a more nutritious dog food, packed with human-grade ingredients that have real health benefits.</span></p>
      <p style="font-size:inherit;line-height:1.5;margin:0 0 10px;color:#fff !important;font-family:&quot;Segoe UI&quot;,Segoe,&quot;Avenir Next&quot;,&quot;Open Sans&quot;,sans-serif;font-weight:normal;padding:0"><span style="font-size:16px">We&#39;ve successfully received your form submission and are working on a customised diet plan for your doggie! We&#39;ll be in touch shortly.</span></p>
      </td>
      <td class="m_-3201832358163851173gutter" style="border-collapse:collapse;border-color:transparent;width:70px!important" width="70" height="100%"></td>
      </tr>
      <tr style="border-color:transparent">
      <td class="m_-3201832358163851173expander" colspan="3" width="100%" height="30" style="border-collapse:collapse;border-color:transparent"></td>
      </tr>
      </tbody></table>
      </td>
      </tr>
      </tbody></table>
      </th>
      </tr>
      </tbody></table>
      </td>
      </tr>
      <tr style="border-color:transparent">
      <td border="0" cellpadding="0" cellspacing="0" style="border-collapse:collapse;border-color:transparent">
      <table cellpadding="0" cellspacing="0" style="border-collapse:collapse;color:#fff;font-family:&quot;Segoe UI&quot;,Segoe,&quot;Avenir Next&quot;,&quot;Open Sans&quot;,sans-serif;font-size:14px;line-height:1.5;width:100%" border="0" width="100%">
      <tbody><tr style="border-color:transparent">
      <th width="600" style="border-color:transparent;font-weight:400;text-align:left;vertical-align:top" cellpadding="0" cellspacing="0" class="m_-3201832358163851173tc" align="left" valign="top">
      <table border="0" width="100%" cellpadding="0" cellspacing="0" style="border-collapse:collapse;color:#fff;font-family:&quot;Segoe UI&quot;,Segoe,&quot;Avenir Next&quot;,&quot;Open Sans&quot;,sans-serif;font-size:14px;line-height:1.5;background-color:transparent">
      <tbody><tr style="border-color:transparent">
      <td cellpadding="0" cellspacing="0" style="border-collapse:collapse;border-color:transparent">
      <table width="100%" cellpadding="0" cellspacing="0" style="border-collapse:collapse;color:#fff;font-family:&quot;Segoe UI&quot;,Segoe,&quot;Avenir Next&quot;,&quot;Open Sans&quot;,sans-serif;font-size:14px;line-height:1.5">
      <tbody><tr class="m_-3201832358163851173content-row" style="border-color:transparent">
      <td class="m_-3201832358163851173content-cell" width="600" style="border-collapse:collapse;border-color:transparent;vertical-align:top" valign="top">
      <div id="m_-3201832358163851173" style="color:#fff;font-family:&quot;Segoe UI&quot;,Segoe,&quot;Avenir Next&quot;,&quot;Open Sans&quot;,sans-serif;font-size:14px;line-height:1.5;display:block;height:87;width:100%" height="87" width="100%"><img border="0" width="600" height="auto" class="m_-3201832358163851173sp-img" align="left" alt="" src="https://s6915530.sendpul.se/files/emailservice/userfiles/e87c2cc59bdd62b30b9245c0a00c5c32366067/02-05-2019/yachvpit-02.png" style="text-decoration:none;border:0;height:auto;line-height:100%;outline:0;margin:0;display:block"></div>
      </td>
      </tr>
      </tbody></table>
      </td>
      </tr>
      </tbody></table>
      <table border="0" width="100%" cellpadding="0" cellspacing="0" style="border-collapse:collapse;color:#fff;font-family:&quot;Segoe UI&quot;,Segoe,&quot;Avenir Next&quot;,&quot;Open Sans&quot;,sans-serif;font-size:14px;line-height:1.5;background-color:#313bba" bgcolor="#313BBA">
      <tbody><tr style="border-color:transparent">
      <td cellpadding="0" cellspacing="0" style="border-collapse:collapse;border-color:transparent">
      <table width="100%" cellpadding="0" cellspacing="0" style="border-collapse:collapse;color:#fff;font-family:&quot;Segoe UI&quot;,Segoe,&quot;Avenir Next&quot;,&quot;Open Sans&quot;,sans-serif;font-size:14px;line-height:1.5;background-color:#313bba;text-align:center" bgcolor="#313BBA" align="center">
      </table>
      </td>
      </tr>
      </tbody></table>
      </th>
      </tr>
      </tbody></table>
      </td>
      </tr>
      </tbody></table>
      <table width="600px" style="border-collapse:collapse;color:#fff;font-family:&quot;Segoe UI&quot;,Segoe,&quot;Avenir Next&quot;,&quot;Open Sans&quot;,sans-serif;font-size:14px;line-height:1.5">
      <tbody><tr style="border-color:transparent">
      <td style="border-collapse:collapse;border-color:transparent;text-align:center" align="center">
      <div align="center" style="color:#fff;font-family:&quot;Segoe UI&quot;,Segoe,&quot;Avenir Next&quot;,&quot;Open Sans&quot;,sans-serif;font-size:14px;line-height:1.5;padding-bottom:8px;padding-top:8px">
      <p style="font-size:11px;line-height:1.5;margin:0;color:#fff;font-family:Verdana,Arial,sans-serif"><br></p>
      </div></td></tr></tbody></table></td></tr></tbody></table></div></div><div dir="ltr" class="gmail_signature" data-smartmail="gmail_signature"><div dir="ltr"><div><div dir="ltr"></div></div></div></div></div>
      ';
  if(!$mail->send()) {
    echo '<script type="text/javascript"> alert("Please check the email you`ve entered and try again"); return false; </script>';
  }
  return;
?>