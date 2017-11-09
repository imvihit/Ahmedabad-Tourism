<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<script type="text/javascript">


function validate_name(field,alerttxt)
{
 with(field){
 	var charpos = value.search("[0-9]"); 
	
              if(value.length > 0 &&  charpos >= 0) 
              {              
                alert(alerttxt + "\n [Error character position " + eval(charpos+1)+"]"); 
				
                return false; 
              } 
			  
			 
	}
}



function validate_required(field,alerttxt)
{
with (field)
 {
if (value==null||value=="")
  {
	alert(alerttxt);
	return false;
  }
else 
  {
	return true
  }
 }
}





function validate_compare(field,alerttxt)
{
with (field)
 {
 
  if (value != form1.Passwd.value)
  {
	alert(alerttxt);
	return false;
	
  }
else 
  {
  return true;
  }
 }
}


function validate_ima(field,field,alerttxt)
{
with (field)
 {
 var m1="piciquessl";
if (form1.newaccountcaptcha.value != m1)
  {
	alert(alerttxt);
	return false;
  }
else 
  {
	return true
  }
 }
}

function validate_email(field,alerttxt)
{
with (field)
{
apos=value.indexOf("@");
dotpos=value.lastIndexOf(".");
if (apos<1||dotpos-apos<2) 
  {alert(alerttxt);return false;}
else {return true;}
}
}



function chk_form(thisform)
{

with (thisform)
{
 
	
if (validate_required(FirstName,"Name must be filled out!")==false)
  {
  FirstName.focus();
  return false;
  }
  
  if (validate_name(FirstName,"User Name must contain character")==false)
  {FirstName.focus();return false;}
 
  
  
  
  
  if (validate_required(LastName,"LastName must be filled out!")==false)
  {
  LastName.focus();
  return false;
  }
  
  if (validate_name(LastName,"User Name must contain character")==false)
  {LastName.focus();return false;}
 
if (validate_required(Address,"Address must be filled out!")==false)
  {
  Address.focus();
  return false;
  }
  
if (validate_required(Email,"Email must be filled out!")==false)
  {
  Email.focus();
  return false;
  }
  
   
if (validate_required(Passwd,"Password must be filled out!")==false)
  {Passwd.focus();return false;}
  
  
if (validate_required(PasswdAgain," You must Re-Enter the Password")==false)
  { PasswdAgain.focus();return false;}
  
 if (validate_compare(PasswdAgain,"Password must be same")==false)
  {
  PasswdAgain.focus();
  return false;
  } 
   if (validate_required(IdentityAnswer,"Email must be filled out!")==false)
  {
  IdentityAnswer.focus();
  return false;
  }
   if (validate_required(SecondaryEmail,"Email must be filled out!")==false)
  {
  SecondaryEmail.focus();
  return false;
  }
  
   if (validate_email(SecondaryEmail,"Email must be filled out!")==false)
  {
  SecondaryEmail.focus();
  return false;
  }
  
   if (validate_required(newaccountcaptcha,"Image character must be filled!")==false)
  {
  newaccountcaptcha.focus();
  return false;
  }
  if (validate_ima(newaccountcaptcha,"image char r nt same")==false)
  {
  newaccountcaptcha.focus();
  return false;
  }
   }

javascript:alert('Successfully Registered');
}

</script>
</head>

<body>




<form id="form1" name="form1" method="" action="" onsubmit="return chk_form(this)">
  <table border="0" cellspacing="0" cellpadding="0" width="60%">
    <tr>
      <td width="1%" valign="top"><p>&nbsp;</p></td>
      <td width="99%" valign="top"><p><img src="yuthmail.png" width="157" height="92" /> </p></td>
    </tr>
  </table>
  <p><strong>Create  an Account</strong></p>
  <table border="0" cellspacing="0" cellpadding="0" width="1%">
    <tr>
      <td><table border="0" cellspacing="0" cellpadding="0" width="100%">
          <tr>
            <td height="720"><table border="0" cellspacing="0" cellpadding="0" width="100%">
                <tr>
                  <td valign="top">
                      <div align="">
                        <table border="0" cellspacing="0" cellpadding="0" width="100%">
                          <tr>
                            <td colspan="2" valign="top"><p><strong>Get started with Yuthmail&nbsp;</strong> </p></td>
                          </tr>
                          <tr>
                            <td nowrap="nowrap" valign="top"><p><strong> Firstname :</strong> </p></td>
                            <td><p>
                                <input type="text" size="30" name="FirstName" />
                            </p></td>
                          </tr>
                          <tr>
                            <td nowrap="nowrap" valign="top"><p><strong>Lastname:</strong> </p></td>
                            <td><p>
                                <input type="text" size="30" name="LastName" />
                            </p></td>
                          </tr>
                          <tr>
                            <td nowrap="nowrap" valign="top"><strong>Address:</strong></td>
                            <td nowrap="nowrap"><textarea name="Address" cols="30"></textarea></td>
                          </tr>
                          <tr>
                            <td nowrap="nowrap" valign="top"><p><strong>Desired Login Name:</strong><strong>&nbsp;</strong><strong>&nbsp;</strong> </p></td>
                            <td nowrap="nowrap"><table width="277" border="0" height="10" cellpadding="0">
                                <tr>
                                  <td height="0"><p>
                                      <input type="text" size="20" name="Email" />
                                      <br />
                                    Examples: pmanu ,smaulik <br /></p>
                                      </td>
                                  <td nowrap="nowrap" valign="top"><p><em>@yuthmail.com</em> </p></td>
                                </tr>
                            </table></td>
                          </tr>
                          <tr>
                            <td nowrap="nowrap" valign="top"><strong>Gender</strong></td>
                            <td valign="top"><label>
                              <input name="radiobutton" type="radio" value="radiobutton" />
                            Male 
                            <input name="radiobutton" type="radio" value="radiobutton" />
                            Female</label></td>
                          </tr>
                          <tr>
                            <td width="1%" nowrap="nowrap" valign="top"><p><strong>Choose a password:          &nbsp;&nbsp;</strong> </p></td>
                            <td valign="top"><table border="0" cellspacing="0" cellpadding="0">
                                <tr>
                                  <td valign="top"><p>
                                      <input type="password" size="30" name="Passwd" />
                                      <br />
                                    Minimum of 8            characters in length. </p></td>
                                  <td><p>&nbsp;</p></td>
                                  <td width="180" nowrap="nowrap" valign="top"><p> </p></td>
                                </tr>
                            </table></td>
                          </tr>
                          
                          <tr>
                            <td nowrap="nowrap"><p><strong>Re-enter password:</strong></p></td>
                            <td><p>
                                <input type="password" size="30" name="PasswdAgain" />
                            </p></td>
                          </tr>
                          
                          <tr>
                            <td nowrap="nowrap" valign="top"><p><strong>Security          Question:</strong> </p></td>
                            <td><p>
                                <select name="selection">
                                  <option value="choosequestion">&#160; &#160;Choose a question ... </option>
                                  <option value="What is the name of your best friend from childhood?">What is the name of your best friend from childhood? </option>
                                  <option value="What was the name of your first teacher?">What was the name of your first teacher? </option>
                                  <option value="What is the name of your manager at your first job?">What is the name of your manager at your first job? </option>
                                  <option value="What was your first phone number?">What was your first phone number? </option>
                                  <option value="What is your vehicle registration number?">What is your vehicle registration number? </option>
                                  <option value="ownquestion">Write my own question </option>
                                </select>
                                <br />
                              If you forget your password we will ask for the answer to          your security question.</p></td>
                          </tr>
                          <tr>
                            <td nowrap="nowrap" valign="top"><p><strong>Answer:</strong> </p></td>
                            <td><p>
                                <input type="text" size="53" name="IdentityAnswer" />
                            </p></td>
                          </tr>
                          <tr>
                            <td nowrap="nowrap" valign="top"><p><strong>Recovery          email:</strong> </p></td>
                            <td><p>
                                <input type="text" size="30" name="SecondaryEmail" />
                                <br />
                              This address is used to authenticate your account should          you ever encounter problems or forget your password. If you do not have          another email address, you may leave this field blank.&nbsp;<a href="javascript:openWindow(%22SecondaryEmailHelp%22,700,%20450)">Learn More</a> </p></td>
                          </tr>
                          <tr>
                            <td nowrap="nowrap" valign="top"><p><strong>Location:</strong> </p></td>
                            <td><p>
                                <select name="loc">
                                  <option value="AF">&#160; &#160;Afghanistan (&#1575;&#1601;&#1594;&#1575;&#1606;&#1587;&#1578;&#1575;&#1606;) </option>
                                  <option value="AU">&#160; &#160;Australia </option>
                                  <option value="AT">&#160; &#160;Austria (&Ouml;sterreich) </option>
                                  <option value="BD">&#160; &#160;Bangladesh (&#2476;&#2494;&#2434;&#2482;&#2494;&#2470;&#2503;&#2486;) </option>
                                  <option value="CN">&#160; &#160;China (&#20013;&#22269;) </option>
                                  <option value="DK">&#160; &#160;Denmark (Danmark) </option>
                                  <option value="EG">&#160; &#160;Egypt (&#1605;&#1589;&#1585;) </option>
                                  <option value="FR">&#160; &#160;France </option>
                                  <option value="DE">&#160; &#160;Germany (Deutschland) </option>
                                  <option value="HK">&#160; &#160;Hong Kong </option>
                                  <option value="IE" selected="selected">&#160; &#160;India </option>
                                  <option value="KE">&#160; &#160;Kenya </option>
                                  <option value="LT">&#160; &#160;Lithuania (Lietuva) </option>
                                  <option value="MO">&#160; &#160;Macao </option>
                                  <option value="MY">&#160; &#160;Malaysia </option>
                                  <option value="MV">&#160; &#160;Maldives (&#1934;&#1962;&#1942;&#1965;&#1927;&#1968;&#1923;&#1959; &#1940;&#1959;&#1927;&#1968;&#1923;&#1960;&#1920;&#1963;&#1929;&#1968;&#1942;) </option>
                                  <option value="NZ">&#160; &#160;New Zealand </option>
                                  <option value="PK">&#160; &#160;Pakistan (&#1662;&#1575;&#1705;&#1587;&#1578;&#1575;&#1606;) </option>
                                  <option value="RO">&#160; &#160;Romania (Rom&acirc;nia) </option>
                                  <option value="RU">&#160; &#160;Russia (&#1056;&#1086;&#1089;&#1089;&#1080;&#1103;) </option>
                                  <option value="SA">&#160; &#160;Saudi Arabia (&#1575;&#1604;&#1605;&#1605;&#1604;&#1603;&#1577; &#1575;&#1604;&#1593;&#1585;&#1576;&#1610;&#1577; &#1575;&#1604;&#1587;&#1593;&#1608;&#1583;&#1610;&#1577;) </option>
                                  <
                                  <option value="ES">&#160; &#160;Spain (Espa&ntilde;a) </option>
                                  <option value="LK">&#160; &#160;Sri Lanka </option>
                                  <option value="SZ">&#160; &#160;Swaziland </option>
                                  <option value="SE">&#160; &#160;Sweden (Sverige) </option>
                                  <option value="CH">&#160; &#160;Switzerland (Schweiz) </option>
                                  <option value="TR">&#160; &#160;Turkey (T&uuml;rkiye) </option>
                                  <option value="GB">&#160; &#160;United Kingdom </option>
                                  <option value="US">&#160; &#160;United States </option>
                                  <option value="VG">&#160; &#160;Virgin Islands, British </option>
                                  <option value="EH">&#160; &#160;Western Sahara (&#1575;&#1604;&#1589;&#1581;&#1585;&#1575;&#1569; &#1575;&#1604;&#1594;&#1585;&#1576;&#1610;&#1577;) </option>
                                  <option value="YE">&#160; &#160;Yemen (&#1575;&#1604;&#1610;&#1605;&#1606;) </option>
                                  <option value="ZW">&#160; &#160;Zimbabwe </option>
                                </select>
                              &nbsp;&nbsp;          &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;          &nbsp;&nbsp; &nbsp;</p></td>
                          </tr>
                          <tr>
                            <td valign="top"><p><strong>Word          Verification:</strong> </p></td>
                            <td><table border="0" cellpadding="0">
                                <tr>
                                  <td height="93" valign="top"><p>&nbsp;</p></td>
                                  <td valign="top"><p>Type            the characters you see in the picture below. <br />
                                          <img border="0" width="176" height="59" src="char.png" alt="Visual verification" /> </p></td>
                                </tr>
                                <tr>
                                  <td><p>&nbsp;</p></td>
                                  <td><p>
                                    <input type="text" size="22" name="newaccountcaptcha" />
                                    <a href="javascript:playCaptcha()"><img border="0" width="19" height="21" src="Untitled.png" alt="Listen and type the numbers you hear" /></a>                                    &nbsp;&nbsp;<a href="http://www.Yuthmail.com/support/accounts/bin/answer.py?answer=33974" target="_top"><img border="0" width="1" height="1" src="file:///E|/Documents and Settings/Student/Application Data/Macromedia/Dreamweaver 8/OfficeImageTemp/clip_image005.gif" alt="For more help with screen readers, click here." /></a> <br />
                                    Letters are not case-sensitive </p></td>
                                </tr>
                            </table></td>
                          </tr>
                          <tr>
                            <td><p>&nbsp;</p></td>
                            <td valign="top"><table border="0" cellspacing="0" cellpadding="0">
                                
                                <tr>
                                  <td><p>
                                    <textarea name="textarea" cols="80" rows="5">Your Yuthmail Account gives you access to yuthmail and other yuthmail services. If you already have a Yuthmail Account, you can sign in here.&#13;&#10;&#13;&#10; &#13;&#10;Get started with Gmail &#13;&#10;First name:&#9;&#13;&#10;&#13;&#10;Last name:&#9;&#13;&#10;&#13;&#10;Desired Login Name:  &#9;&#13;&#10; &#13;&#10;Examples: JSmith, John.Smith&#13;&#10;&#13;&#10; &#13;&#10;&#13;&#10;@gmail.com&#13;&#10;Choose a password:   &#9;&#13;&#10;&#13;&#10;Minimum of 8 characters in length.&#9;&#9;&#13;&#10;Password strength:&#9;&#13;&#10;Re-enter password:&#9;&#13;&#10;&#13;&#10; &#9;   Stay signed in&#13;&#10; &#9; Enable Web History Learn More&#13;&#10; &#13;&#10;Security Question:&#9;&#13;&#10;&#13;&#10;If you forget your password we will ask for the answer to your security question. Learn More&#13;&#10;Answer:&#9;&#13;&#10;&#13;&#10;Recovery email:&#9;&#13;&#10;&#13;&#10;This address is used to authenticate your account should you ever encounter problems or forget your password. If you do not have another email address, you may leave this field blank. Learn More&#13;&#10;Location:&#9;&#13;&#10;Word Verification:&#9;&#13;&#10;Type the characters you see in the picture below.&#13;&#10;&#13;&#10;    &#13;&#10;Letters are not case-sensitive&#13;&#10;Terms of Service:&#9; Please check the Yuthmail Account information you've entered above (feel free to change anything you like), and review the Terms of Service below. &#13;&#10;&#13;&#10;With Gmail, you won't see blinking banner ads. Instead, we display ads you might find useful that are relevant to the content of your messages. Learn more&#13;&#10; &#9;&#13;&#10;Printable Version&#13;&#10;&#13;&#10; &#13;&#10;By clicking on 'I accept' below you are agreeing to the Terms of Service above and both the Program Policy and the Privacy Policy.&#13;&#10; &#9;&#13;&#10; &#13;&#10;&copy; 2011 - Gmail for Organizations - Terms &amp; Privacy - Help</textarea>
                                  </p></td>
                                </tr>
                                
                                <tr>
                                  <td><p>By clicking on 'I accept'            below you are agreeing to the&nbsp;<a href="https://www.Yuthmail.com/accounts/TOS?loc=IN&amp;hl=en" target="_blank">Terms            of Service</a>&nbsp;.</p></td>
                                </tr>
                            </table></td>
                          </tr>
                          <tr>
                            <td><p>&nbsp;</p></td>
                            <td><p align="center">
                                <input type="submit" action="https://www.Yuthmail.com/accounts/CreateAccount?service=mail&amp;continue=http%3A%2F%2Fmail.Yuthmail.com%2Fmail%2Fe-11-2e60939bac4844fb046575f7be4a10-38a2dbf4210eaed7d1b12ba568c76ce77bf3359f&amp;type=2" value="I accept. Create my account." method="post" name="submitbutton" />
                            </p></td>
                          </tr>
                        </table>
                      </div></td>
                </tr>
              </table>
            <p> </p></td>
          </tr>
      </table></td>
    </tr>
  </table>
  <p align="">&copy; 2011 -&nbsp;<a href="http://www.Yuthmail.com/a/help/intl/en/users/user_features.html#utm_medium=et&amp;utm_source=gmail-en&amp;utm_campaign=crossnav&amp;token=gmail_footer">Manu &amp; Maulik  for Organizations</a>&nbsp;-&nbsp;<a href="http://mail.Yuthmail.com/mail/help/intl/en/terms.html">Terms &amp; Privacy</a>&nbsp;-&nbsp;<a href="http://mail.Yuthmail.com/support/">Help</a></p>
  <p align="center">&nbsp;</p>
  <p align="center">&nbsp;</p>
  <p align="center">&nbsp;</p>
  <p align="center">&nbsp;</p>
  <p align="center">&nbsp;</p>
  <p align="center">&nbsp;</p>
  <p align="center">&nbsp;</p>
  <p align="center">&nbsp;</p>
</form>
</body>
</html>
