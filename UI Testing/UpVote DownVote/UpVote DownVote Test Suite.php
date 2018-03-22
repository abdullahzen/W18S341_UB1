<?xml version="1.0" encoding="UTF-8"?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta content="text/html; charset=UTF-8" http-equiv="content-type" />
	<title>UpVote DownVote Test Suite</title>
</head>
<body>
<table cellpadding="1" cellspacing="1" border="1">
<thead>
<tr><td rowspan="1" colspan="3">Upvote Downvote</td></tr>
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
<tr><td>click</td><td>//form[@id='loginForm']/div/div/section/div/div/div/center<datalist><option>//form[@id='loginForm']/div/div/section/div/div/div/center</option><option>//center</option><option>css=center</option></datalist></td><td></td>
</tr>
<tr><td>click</td><td>//input[@id='loginButton']<datalist><option>//input[@id='loginButton']</option><option>//form[@id='loginForm']/div/div/section/div/div/div/center/div[4]/input</option><option>//div[4]/input</option><option>css=div.form-group &gt; #loginButton</option></datalist></td><td></td>
</tr>
<tr><td>click</td><td>//span<datalist><option>//span</option><option>css=span.slds-icon-waffle</option></datalist></td><td></td>
</tr>
<tr><td>click</td><td>link=C<datalist><option>link=C</option><option>xpath=(//a[contains(text(),'C')])[2]</option><option>//a[@onclick="showCategory('C');"]</option><option>//li[@id='Cli']/a</option><option>xpath=(//a[contains(@href, 'javascript:void(0);')])[9]</option><option>//li[4]/a</option><option>css=#Cli &gt; a.slds-nav-vertical__action</option></datalist></td><td></td>
</tr>
<tr><td>click</td><td>link=C Test 1<datalist><option>link=C Test 1</option><option>//a[contains(text(),'C Test 1')]</option><option>//div[@id='C']/article/div[5]/div/ul/li/article/header/div[2]/div/p/a</option><option>//a[contains(@href, './post/5')]</option><option>//div[20]/article/div[5]/div/ul/li/article/header/div[2]/div/p/a</option></datalist></td><td></td>
</tr>
<tr><td>click</td><td>css=svg.slds-icon.slds-icon-text-default.slds-icon-text-warning.slds-icon_x-small.slds-align-middle<datalist><option>css=svg.slds-icon.slds-icon-text-default.slds-icon-text-warning.slds-icon_x-small.slds-align-middle</option></datalist></td><td></td>
</tr>
<tr><td>click</td><td>css=svg.slds-icon.slds-icon-text-default.slds-icon-text-light.slds-icon_x-small.slds-align-middle &gt; use<datalist><option>css=svg.slds-icon.slds-icon-text-default.slds-icon-text-light.slds-icon_x-small.slds-align-middle &gt; use</option></datalist></td><td></td>
</tr>
<tr><td>click</td><td>css=svg.slds-icon.slds-icon-text-default.slds-icon-text-warning.slds-icon_x-small.slds-align-middle &gt; use<datalist><option>css=svg.slds-icon.slds-icon-text-default.slds-icon-text-warning.slds-icon_x-small.slds-align-middle &gt; use</option></datalist></td><td></td>
</tr>
<tr><td>click</td><td>css=svg.slds-icon.slds-icon-text-light.slds-icon_x-small.slds-align-middle &gt; use<datalist><option>css=svg.slds-icon.slds-icon-text-light.slds-icon_x-small.slds-align-middle &gt; use</option></datalist></td><td></td>
</tr>
<tr><td>click</td><td>xpath=(//img[@alt='Smiley face'])[2]<datalist><option>xpath=(//img[@alt='Smiley face'])[2]</option><option>//button[@id='logout']/img</option><option>//button/img</option><option>css=#logout &gt; img[alt="Smiley face"]</option></datalist></td><td></td>
</tr>
<tr><td>click</td><td>//button[@onclick="location.href='..'"]<datalist><option>//button[@onclick="location.href='..'"]</option><option>//li[3]/div/button</option><option>css=button.slds-button.slds-button_neutral</option></datalist></td><td></td>
</tr>
</tbody></table>
</body>
</html>