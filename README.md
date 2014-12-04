Snowflakes
==================

Adding touch of winter on your intranet by having snowlakes falling down the page.


Installation
----

Download this component and copy this into 'intranet/snowflakes/' folder


Usage
----
Placing the component code only on top infobar

interface_{Custom}/common/page_top.html

Edit the file and insert the component code below at the location as indicated in example placement.

```html
<!-- Snow control -->
<component class="\Claromentis\Snowflakes\UI\SnowFlakes" />	
<!-- Snow control -->
```
Example placement of the component (after company infobar menu)

```html
<li class="dropdown" name="company_menu_visible">
	<a href="#" class="dropdown-toggle" data-toggle="dropdown"><em class="icon-link icon-white"></em> <span class="hidden-desktop" name="common:page_top:company_links">Company Links</span> <b class="caret hidden-desktop"></b></a>
		<ul class="dropdown-menu">
			<li class="nav-header">	<txt name="common:page_top:company_links">Company Links</txt></li>
			<txt name="" datasrc="menu_items"><li><a href="#" name="menu_item">Shortcut 3</a></li></txt>
			<txt name="edit_company_links_visible">
			<li class="divider"></li>
			<li><a href="/intranet/panels/infobar.php"><txt name="common:page_top:edit_company_links">edit company infobar</txt></a></li></txt>
		/ul>

</li>

<!-- Snow control -->
<component class="\Claromentis\Snowflakes\UI\SnowFlakes" />	
<!-- Snow control -->
```

Configuration
----
You can configure dropdown menu for the snow control and the intensity of the snow by editing this file

/intranet/snowflakes/html/SnowFlakes.html





