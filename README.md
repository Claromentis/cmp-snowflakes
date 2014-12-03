Snowflakes
==================


Description
----


How it works
----


Installation
----

Copy this code into 'intranet/snowflakes/' folder


Usage
----
Place component code into your 

interface_{Custom}/common/page_top.html
at the location as example below
```html
								<!-- Snow control -->
								<component class="\Claromentis\Snowflakes\UI\SnowFlakes" />
								<!-- Snow control -->
```
Example Placement

```html
							<li class="dropdown" name="company_menu_visible">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown"><em class="icon-link icon-white"></em> <span class="hidden-desktop" name="common:page_top:company_links">Company Links</span> <b class="caret hidden-desktop"></b></a>

								<ul class="dropdown-menu">
									<li class="nav-header">
										<txt name="common:page_top:company_links">Company Links</txt>
									</li>
									<txt name="" datasrc="menu_items">
										<li><a href="#" name="menu_item">Shortcut 3</a></li>
									</txt>
									<txt name="edit_company_links_visible">
									<li class="divider"></li>
									<li><a href="/intranet/panels/infobar.php"><txt name="common:page_top:edit_company_links">edit company infobar</txt></a></li>
									</txt>
								</ul>
							</li>
								<!-- Snow control -->
								<component class="\Claromentis\Snowflakes\UI\SnowFlakes" />
								<!-- Snow control -->
```

Configuration
----
