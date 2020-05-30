  
  function sendText(){
      var script_url ="https://script.google.com/a/momandpaw.in/macros/s/AKfycby2c20kmqKNMWBPJQbHwV0BBbE9f-_d2DNuybgKAkIr7blQv2Kp/exec";
      
      var parentname  = document.getElementById('parentname').value;
      var petname = document.getElementById('petname').value;
      var age  = document.getElementById('age').value;
      var breed = document.getElementById('breed').value;
      if(breed == 'otherbreed')
        breed = document.getElementById('dogbreed').value;

      var email = document.getElementById('email').value;
      var contactnumber = document.getElementById('contactnumber').value;
      var city = document.getElementById('city').value;
      var comments = document.getElementById('comments').value;
      var url = script_url + "?callback-ctrl-q&petname=" + petname + "&parentname=" + parentname + "&age=" + age + "&breed=" + breed + "&email=" + email + "&contactnumber=" + contactnumber + "&city=" + city + "&comments=" + comments;
      var request = jQuery.ajax({
        crossDomain: true,
        url : url,
        method: "GET",
        dataType: "jsonp"
      });
      
      Email.send({
      Host : "smtp.gmail.com",
      Username : "petcare@momandpaw.in",
      Password : "MOMANDPAW",
      To : email,
      From : "petcare@momandpaw.in",
      Subject : "Your Pet's Diet Analysis is in progress!",
      Body : '<html> <div class="gmail_quote"><br/><u></u> <div> <table cellpadding="5" cellspacing="0" width="100%" border="0" bgcolor="#FAFAFA"> <tbody><tr style="border-color:transparent"> <td align="center" style="border-collapse:collapse;border-color:transparent"> <table cellpadding="0" cellspacing="0" width="600px" id="m_3755964722898430266m_-3201832358163851173bodyTable" border="0" bgcolor="transparent"> <tbody><tr style="border-color:transparent"> <td border="0" cellpadding="0" cellspacing="0" style="border-collapse:collapse;border-color:transparent"> <table cellpadding="0" cellspacing="0" border="0" width="100%"> <tbody><tr style="border-color:transparent"> <th width="600" style="border-color:transparent;font-weight:400;text-align:left;vertical-align:top" cellpadding="0" cellspacing="0" align="left" valign="top"> <table border="0" width="100%" cellpadding="0" cellspacing="0" bgcolor="#313BBA"> <tbody><tr style="border-color:transparent"> <td cellpadding="0" cellspacing="0" style="border-collapse:collapse;border-color:transparent"> <table width="100%" cellpadding="0" cellspacing="0" bgcolor="#313BBA"> <tbody><tr style="border-color:transparent"> <td colspan="1" width="100%" height="30" style="border-collapse:collapse;border-color:transparent"></td> </tr> <tr style="border-color:transparent"> <td width="600" style="border-collapse:collapse;border-color:transparent;vertical-align:top" valign="top"> <div id="m_3755964722898430266m_-3201832358163851173" height="47" align="center" width="100%"> <center><img border="0" width="210" height="auto" align="center" alt="logo-3-removebg" src="https://s6915530.sendpul.se/files/emailservice/userfiles/1eb8a90ec47bb5a29be9b98d0481abea6915530/logo-3-removebg.png" style="text-decoration:none;border:0;height:auto;line-height:100%;outline:0;display:block"/></center> </div> </td> </tr> <tr style="border-color:transparent"> <td colspan="1" width="100%" height="30" style="border-collapse:collapse;border-color:transparent"></td> </tr> </tbody></table> </td> </tr> </tbody></table> </th> </tr> </tbody></table> </td> </tr> <tr style="border-color:transparent"> <td border="0" cellpadding="0" cellspacing="0" style="border-collapse:collapse;border-color:transparent"> <table cellpadding="0" cellspacing="0" border="0" width="100%"> <tbody><tr style="border-color:transparent"> <th width="600" style="border-color:transparent;font-weight:400;text-align:left;vertical-align:top" cellpadding="0" cellspacing="0" align="left" valign="top"> <table border="0" width="100%" cellpadding="0" cellspacing="0"> <tbody><tr style="border-color:transparent"> <td cellpadding="0" cellspacing="0" style="border-collapse:collapse;border-color:transparent"> <table width="100%" cellpadding="0" cellspacing="0"> <tbody><tr style="border-color:transparent"> <td width="600" style="border-collapse:collapse;border-color:transparent;vertical-align:top" valign="top"> <div id="m_3755964722898430266m_-3201832358163851173" height="193" width="100%"><img border="0" width="600" height="auto" align="left" alt="" src="https://s6915530.sendpul.se/files/emailservice/userfiles/e87c2cc59bdd62b30b9245c0a00c5c32366067/02-05-2019/Scene_dfgn-01.png" style="text-decoration:none;border:0;height:auto;line-height:100%;outline:0;margin:0;display:block"/></div> </td> </tr> </tbody></table> </td> </tr> </tbody></table> <table border="0" width="100%" cellpadding="0" cellspacing="0" bgcolor="#313BBA"> <tbody><tr style="border-color:transparent"> <td cellpadding="0" cellspacing="0" style="border-collapse:collapse;border-color:transparent"> <table width="100%" cellpadding="0" cellspacing="0" id="m_3755964722898430266m_-3201832358163851173w" bgcolor="#313BBA"> <tbody><tr style="border-color:transparent"> <td colspan="3" width="100%" height="60" style="border-collapse:collapse;border-color:transparent"></td> </tr> <tr style="border-color:transparent"> <td style="border-collapse:collapse;border-color:transparent;width:30px!important" width="30" height="100%"></td> <td width="540" style="border-collapse:collapse;color:#fff;border-color:transparent;vertical-align:top" valign="top"> <h3 align="center"><span style="font-size:32px"><strong>Hello,</strong></span></h3> </td> <td style="border-collapse:collapse;border-color:transparent;width:30px!important" width="30" height="100%"></td> </tr> <tr style="border-color:transparent"> <td colspan="3" width="100%" height="10" style="border-collapse:collapse;border-color:transparent"></td> </tr> </tbody></table> </td> </tr> </tbody></table> <table border="0" width="100%" cellpadding="0" cellspacing="0" bgcolor="#313BBA"> <tbody><tr style="border-color:transparent"> <td cellpadding="0" cellspacing="0" style="border-collapse:collapse;border-color:transparent"> <table width="100%" cellpadding="0" cellspacing="0" id="m_3755964722898430266m_-3201832358163851173w" bgcolor="#313BBA"> <tbody><tr style="border-color:transparent"> <td colspan="3" width="100%" height="20" style="border-collapse:collapse;border-color:transparent"></td> </tr> <tr style="border-color:transparent"> <td style="border-collapse:collapse;border-color:transparent;width:70px!important" width="70" height="100%"></td> <td width="460" style="border-collapse:collapse;color:#fff;border-color:transparent;vertical-align:top" valign="top"> <p><span style="font-size:16px">Thank you for expressing your trust in us. We worked with a veterinary nutritionist to formulate a more nutritious dog food, packed with human-grade ingredients that have real health benefits.</span></p> <p><span style="font-size:16px">We&#39;ve successfully received your form submission and are working on a customised diet plan for your doggie! We&#39;ll be in touch shortly.</span></p> </td> <td style="border-collapse:collapse;border-color:transparent;width:70px!important" width="70" height="100%"></td> </tr> <tr style="border-color:transparent"> <td colspan="3" width="100%" height="30" style="border-collapse:collapse;border-color:transparent"></td> </tr> </tbody></table> </td> </tr> </tbody></table> </th> </tr> </tbody></table> </td> </tr> <tr style="border-color:transparent"> <td border="0" cellpadding="0" cellspacing="0" style="border-collapse:collapse;border-color:transparent"> <table cellpadding="0" cellspacing="0" border="0" width="100%"> <tbody><tr style="border-color:transparent"> <th width="600" style="border-color:transparent;font-weight:400;text-align:left;vertical-align:top" cellpadding="0" cellspacing="0" align="left" valign="top"> <table border="0" width="100%" cellpadding="0" cellspacing="0"> <tbody><tr style="border-color:transparent"> <td cellpadding="0" cellspacing="0" style="border-collapse:collapse;border-color:transparent"> <table width="100%" cellpadding="0" cellspacing="0"> <tbody><tr style="border-color:transparent"> <td width="600" style="border-collapse:collapse;border-color:transparent;vertical-align:top" valign="top"> <div id="m_3755964722898430266m_-3201832358163851173" height="87" width="100%"><img border="0" width="600" height="auto" align="left" alt="" src="https://s6915530.sendpul.se/files/emailservice/userfiles/e87c2cc59bdd62b30b9245c0a00c5c32366067/02-05-2019/yachvpit-02.png" style="text-decoration:none;border:0;height:auto;line-height:100%;outline:0;margin:0;display:block"/></div> </td> </tr> </tbody></table> </td> </tr> </tbody></table> <table border="0" width="100%" cellpadding="0" cellspacing="0" bgcolor="#313BBA"> <tbody><tr style="border-color:transparent"> <td cellpadding="0" cellspacing="0" style="border-collapse:collapse;border-color:transparent"> <table width="100%" cellpadding="0" cellspacing="0" bgcolor="#313BBA" align="center"> </table> </td> </tr> </tbody></table> </th> </tr> </tbody></table> </td> </tr> </tbody></table> <table width="600px"> <tbody><tr style="border-color:transparent"> <td style="border-collapse:collapse;border-color:transparent;text-align:center" align="center"> <div align="center"> <p style="font-size:11px;line-height:1.5;margin:0;color:#fff;font-family:Verdana,Arial,sans-serif"><br/></p> </div></td></tr></tbody></table></td></tr></tbody></table></div></div><div dir="ltr" data-smartmail="gmail_signature"><div dir="ltr"><div><div dir="ltr"></div></div></div></div> </html>'
      
    }).then(
      alert('Thank you for contacting us!')
    );
    return true;
  }

  function sendSubs(){
    
    var script_url ="https://script.google.com/macros/s/AKfycbxZLp7IR2Jfg9jVOZbnfS-0poTZZgtgtL06kkUBNVDom64diHw/exec";
    
    var email = document.getElementById('subs').value;
    var url = script_url + "?callback-ctrl-q&email=" + email;
    var request = jQuery.ajax({
      crossDomain: true,
      url : url,
      method: "GET",
      dataType: "jsonp"
    });
    Email.send({
      Host : "smtp.gmail.com",
      Username : "petcare@momandpaw.in",
      Password : "MOMANDPAW",
      To : email,
      From : "petcare@momandpaw.in",
      Subject : "Your Pet's Diet Analysis is in progress!",
      Body: 'Hi,<br/><br/>Thanks for being awesome! You`re succesfully subscribed to our newsletter! <br/><br/>Looking forward to get your first order,<br/><br/>Team Mom and Paw'
    }).then(
      alert("You're all set for free tips :)")
    );
    return true;
  }