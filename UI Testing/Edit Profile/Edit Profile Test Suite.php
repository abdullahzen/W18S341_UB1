<?xml version="1.0" encoding="UTF-8"?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta content="text/html; charset=UTF-8" http-equiv="content-type" />
	<title>Edit Profile Test Suite</title>
</head>
<body>
<table cellpadding="1" cellspacing="1" border="1">
<thead>
<tr><td rowspan="1" colspan="3">Edit Profile</td></tr>
</thead>
<tbody>
<tr><td>open</td><td>http://127.0.0.1/<datalist><option>http://127.0.0.1/</option></datalist></td><td></td>
</tr>
<tr><td>click</td><td>id=loginButton<datalist><option>id=loginButton</option><option>//button[@id='loginButton']</option><option>//button[3]</option><option>css=#loginButton</option></datalist></td><td></td>
</tr>
<tr><td>click</td><td>name=username<datalist><option>name=username</option><option>//input[@name='username']</option><option>//form[@id='loginForm']/div/div/section/div/div/div/center/div[2]/input</option><option>//div[2]/input</option><option>css=input[name="username"]</option></datalist></td><td></td>
</tr>
<tr><td>type</td><td>name=username<datalist><option>name=username</option><option>//input[@name='username']</option><option>//form[@id='loginForm']/div/div/section/div/div/div/center/div[2]/input</option><option>//div[2]/input</option><option>css=input[name="username"]</option></datalist></td><td>MyName</td>
</tr>
<tr><td>type</td><td>name=password<datalist><option>name=password</option><option>//input[@name='password']</option><option>//form[@id='loginForm']/div/div/section/div/div/div/center/div[3]/input</option><option>//div[3]/input</option><option>css=input[name="password"]</option></datalist></td><td>test123</td>
</tr>
<tr><td>click</td><td>//form[@id='loginForm']/div/div/section/div/div/div/center/div[4]<datalist><option>//form[@id='loginForm']/div/div/section/div/div/div/center/div[4]</option><option>//center/div[4]</option></datalist></td><td></td>
</tr>
<tr><td>click</td><td>//input[@id='loginButton']<datalist><option>//input[@id='loginButton']</option><option>//form[@id='loginForm']/div/div/section/div/div/div/center/div[4]/input</option><option>//div[4]/input</option><option>css=div.form-group &gt; #loginButton</option></datalist></td><td></td>
</tr>
<tr><td>click</td><td>css=#userProfileButton &gt; svg.slds-button__icon.slds-global-header__icon<datalist><option>css=#userProfileButton &gt; svg.slds-button__icon.slds-global-header__icon</option></datalist></td><td></td>
</tr>
<tr><td>click</td><td>//div[@id='userProfileModal']/div/div/div/div/section/article/div/button<datalist><option>//div[@id='userProfileModal']/div/div/div/div/section/article/div/button</option><option>//article/div/button</option><option>css=button.closeU.slds-button.slds-button__icon_left</option></datalist></td><td></td>
</tr>
<tr><td>click</td><td>css=#userProfileButton &gt; svg.slds-button__icon.slds-global-header__icon<datalist><option>css=#userProfileButton &gt; svg.slds-button__icon.slds-global-header__icon</option></datalist></td><td></td>
</tr>
<tr><td>click</td><td>css=svg.slds-button__icon_small.slds-button__icon<datalist><option>css=svg.slds-button__icon_small.slds-button__icon</option></datalist></td><td></td>
</tr>
<tr><td>click</td><td>xpath=(//input[@id='email'])[2]<datalist><option>xpath=(//input[@id='email'])[2]</option><option>//form[@id='editProfileForm']/div/div/div/section/article/div[2]/div/div/dl/dd[2]/input</option><option>//dd[2]/input</option><option>css=dd.slds-text-align_left.slds-text-heading_small.slds-item_detail.slds-truncate &gt; #email</option></datalist></td><td></td>
</tr>
<tr><td>click</td><td>id=editProfileButton<datalist><option>id=editProfileButton</option><option>//input[@id='editProfileButton']</option><option>//form[@id='editProfileForm']/div/div/div/section/article/div[2]/div/div/div/input</option><option>//article/div[2]/div/div/div/input</option><option>css=#editProfileButton</option></datalist></td><td></td>
</tr>
<tr><td>click</td><td>xpath=(//img[@alt='Smiley face'])[2]<datalist><option>xpath=(//img[@alt='Smiley face'])[2]</option><option>//button[@id='logout']/img</option><option>//button/img</option><option>css=#logout &gt; img[alt="Smiley face"]</option></datalist></td><td></td>
</tr>
</tbody></table>
</body>
</html>