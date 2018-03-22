<?xml version="1.0" encoding="UTF-8"?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta content="text/html; charset=UTF-8" http-equiv="content-type" />
	<title>Add Category</title>
</head>
<body>
<table cellpadding="1" cellspacing="1" border="1">
<thead>
<tr><td rowspan="1" colspan="3">Add Category</td></tr>
</thead>
<tbody>
<tr><td>open</td><td>http://127.0.0.1/<datalist><option>http://127.0.0.1/</option></datalist></td><td></td>
</tr>
<tr><td>click</td><td>//span[5]<datalist><option>//span[5]</option><option>css=span.slds-r5</option></datalist></td><td></td>
</tr>
<tr><td>click</td><td>//button[@onclick="window.location.href='/newCat'"]<datalist><option>//button[@onclick="window.location.href='/newCat'"]</option><option>//div[@id='categories']/nav/div/ul/li[5]/button</option><option>//li[5]/button</option><option>css=button.slds-button.slds-button_reset.slds-p-vertical_xx-small.slds-size_1-of-1</option></datalist></td><td></td>
</tr>
<tr><td>click</td><td>id=newCat<datalist><option>id=newCat</option><option>name=newCat</option><option>//input[@id='newCat']</option><option>//form[@id='newCategoryForm']/div[2]/div/fieldset/div/div/input</option><option>//fieldset/div/div/input</option><option>css=#newCat</option></datalist></td><td></td>
</tr>
<tr><td>type</td><td>id=newCat<datalist><option>id=newCat</option><option>name=newCat</option><option>//input[@id='newCat']</option><option>//form[@id='newCategoryForm']/div[2]/div/fieldset/div/div/input</option><option>//fieldset/div/div/input</option><option>css=#newCat</option></datalist></td><td>Apex</td>
</tr>
<tr><td>click</td><td>//form[@id='newCategoryForm']/div[2]/div/fieldset/div[2]/div<datalist><option>//form[@id='newCategoryForm']/div[2]/div/fieldset/div[2]/div</option><option>//fieldset/div[2]/div</option><option>css=div.col-md-8</option></datalist></td><td></td>
</tr>
<tr><td>click</td><td>id=saveNewCategory<datalist><option>id=saveNewCategory</option><option>//input[@id='saveNewCategory']</option><option>//form[@id='newCategoryForm']/div[2]/div/fieldset/div[2]/div/input</option><option>//div[2]/div/input</option><option>css=#saveNewCategory</option></datalist></td><td></td>
</tr>
<tr><td>click</td><td>//span<datalist><option>//span</option><option>css=span.slds-icon-waffle</option></datalist></td><td></td>
</tr>
<tr><td>click</td><td>link=Apex<datalist><option>link=Apex</option><option>//a[contains(text(),'Apex')]</option><option>//a[@onclick="showCategory('Apex');"]</option><option>//li[@id='Apexli']/a</option><option>xpath=(//a[contains(@href, 'javascript:void(0);')])[7]</option><option>//li[5]/a</option><option>css=#Apexli &gt; a.slds-nav-vertical__action</option></datalist></td><td></td>
</tr>
</tbody></table>
</body>
</html>