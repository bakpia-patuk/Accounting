<div class="mc-wrapper">
    <div id="system-message-container"></div>
    <div id="mc-title">
        <h1>Site Dashboard</h1>
        <div class="mc-toolbar" id="toolbar">
            <ul></ul>
        </div>
        <div class="mc-clr"></div>
    </div>
    <div id="mc-submenu"></div>
    <div id="mc-sidebar">
        <div class="mc-module-sidebar ">
            <h2>Statistics Overview</h2>
            <div class="mc-module-content">
                <div id="rok-stats">
                    <ul>
                        <li class="none"><span class="desc">Current Active Users<span class="value">0</span></li>
                        <li class="none"><span class="desc">Active Guests<span class="value">0</span></li>
                        <li class="none"><span class="desc">Active Registered<span class="value">0</span></li>
                        <li class="down"><span class="desc">Unique Visits Today<span class="value">0</span></li>
                        <li class="up"><span class="desc">Unique Visits Yesterday<span class="value">1</span></li>
                        <li class="up"><span class="desc">Visits This Week<span class="value">1</span></li>
                        <li class="up"><span class="desc">Visits Previous Week<span class="value">1</span></li>
                        <li class="none"><span class="desc">Total Articles<span class="value">65</span></li>
                        <li class="up"><span class="desc">New Articles This Week<span class="value">0</span></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="mc-module-sidebar ">
            <h2>User Activity Chart</h2>
            <div class="mc-module-content">
                <div id="rok-userchart">
                    <img src="https://chart.googleapis.com/chart?cht=lc&amp;chs=285x120&amp;chtt=Unique+Users+%28Past+7+days%29&amp;chts=666666%2C13&amp;chd=t%3A1&amp;chco=4F9BD8&amp;chls=2&amp;chds=0%2C1&amp;chxt=y%2Cx&amp;chxr=0%2C0%2C1%7C1%2C0%2C0&amp;chxtc=0%2C2%7C1%2C2" alt="" />
                </div>
            </div>
        </div>
        <div class="mc-module-sidebar ">
            <h2>Admin Audit Trail</h2>
            <div class="mc-module-content">
                <div id="rok-audit">
                    <input type="hidden" id="rok-audit-count" value="0" />
                    <ul></ul>
                    <div class="rok-more">
                        <span class="loader"></span>
                        <div class="mc-button">
                            <span class="button"><a href="#">load more</a></span>
                        </div>
                        <div class="rok-audit-filter">
                            <span>details</span>
                            <select id="rok-audit-details" autocomplete="off">
                                    <option value="low" selected="selected">Low</option>
                                    <option value="medium" >Medium</option>
                                    <option value="high" >High</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="mc-cpanel">
        <p class="mc-dashtext">MissionControl is a brand-new take on the Joomla Administrator template.  Primary objectives during development were clean modern design, optimal usability, configurable colors and logo, and enhanced functionality via optimizations and new extensions.</p>
        <div class="mc-module-standard ">
                <h2>Quick Links</h2>
                <div class="mc-module-content">
                        <div class="rok-quicklinks-customize mc-button">
                                <span class="button">
                                        <a href="index.php?option=com_modules&task=module.edit&id=81">customize</a>
                                </span>
                        </div>
                        <div id="rok-quicklinks">
                                <ul>
                                        <li>
                                                <a href="<?php echo site_url('golongan'); ?>">
                                                        <span class="rok-quicklink-box">
                                                                <img src="<?php echo base_url(); ?>images/newspaper_add.png" alt="Add Article" /><br />
                                                                <strong>Golongan Perkiraan</strong>
                                                        </span>
                                                </a>
                                        </li>
                                        <li>
                                                <a href="index.php?option=com_media">
                                                        <span class="rok-quicklink-box">
                                                                <img src="<?php echo base_url(); ?>images/images.png" alt="Media Manager" /><br />
                                                                <strong>Media Manager</strong>
                                                        </span>
                                                </a>
                                        </li>
                                        <li>
                                                <a href="index.php?option=com_categories&amp;section=com_content">
                                                        <span class="rok-quicklink-box">
                                                                <img src="modules/mod_rokquicklinks/tmpl/icons/drawer_open.png" alt="Category Manager" /><br />
                                                                <strong>Category Manager</strong>
                                                        </span>
                                                </a>
                                        </li>
                                        <li>
                                                <a href="index.php?option=com_config">
                                                        <span class="rok-quicklink-box">
                                                                <img src="modules/mod_rokquicklinks/tmpl/icons/cog.png" alt="Configuration" /><br />
                                                                <strong>Configuration</strong>
                                                        </span>
                                                </a>
                                        </li>
                                        <li>
                                                <a href="index.php?option=com_installer">
                                                        <span class="rok-quicklink-box">
                                                                <img src="modules/mod_rokquicklinks/tmpl/icons/brick.png" alt="Install New" /><br />
                                                                <strong>Install New</strong>
                                                        </span>
                                                </a>
                                        </li>
                                        <li>
                                                <a href="index.php?option=com_templates">
                                                        <span class="rok-quicklink-box">
                                                                <img src="modules/mod_rokquicklinks/tmpl/icons/color_management.png" alt="Templates" /><br />
                                                                <strong>Templates</strong>
                                                        </span>
                                                </a>
                                        </li>
                                </ul>
                        </div>
                </div>
        </div>
        <div id="mc-component">
                        <div id="panel-sliders" class="pane-sliders">
                                <div style="display:none;">
                                        <div></div>
                                </div>
                                <div class="panel">
                                        <h3 class="pane-toggler title" id="cpanel-panel-logged">
                                                <a href="javascript:void(0);">
                                                        <span>Last 5 Logged-in Users</span>
                                                </a>
                                        </h3>
                                        <div class="pane-slider content">
                                                <table class="adminlist">
                                                        <thead>
                                                                <tr>
                                                                        <th>Name</th>
                                                                        <th>
                                                                                <strong>Location</strong>
                                                                        </th>
                                                                        <th>
                                                                                <strong>ID</strong>
                                                                        </th>
                                                                        <th>
                                                                                <strong>Last Activity</strong>
                                                                        </th>
                                                                        <th>
                                                                                <strong>Logout</strong>
                                                                        </th>
                                                                </tr>
                                                        </thead>
                                                        <tbody>
                                                                <tr>
                                                                        <th scope="row">
                                                                                <a href="/joomla/administrator/index.php?option=com_users&amp;task=user.edit&amp;id=42">Super User</a>
                                                                        </th>
                                                                        <td class="center">Administrator</td>
                                                                        <td class="center">42</td>
                                                                        <td class="center">2012-03-25 09:57:17</td>
                                                                        <td class="center"></td>
                                                                </tr>
                                                        </tbody>
                                                </table>
                                        </div>
                                </div>
                        <div class="panel">
                                <h3 class="pane-toggler title" id="cpanel-panel-popular">
                                        <a href="javascript:void(0);">
                                                <span>Top 5 Popular Articles</span>
                                        </a>
                                </h3>
                                <div class="pane-slider content">
                                        <table class="adminlist">
                                                <thead>
                                                        <tr>
                                                                <th>Popular Items</th>
                                                                <th><strong>Created</strong></th>
                                                                <th><strong>Hits</strong></th>
                                                        </tr>
                                                </thead>
                                                <tbody>
                                                        <tr>
                                                                <th scope="row">
                                                                        <a href="/joomla/administrator/index.php?option=com_content&amp;task=article.edit&amp;id=10">Content</a>
                                                                </th>
                                                                <td class="center">2011-01-01 00:00:01</td>
                                                                <td class="center">46</td>
                                                        </tr>
                                                        <tr>
                                                                <th scope="row">
                                                                        <a href="/joomla/administrator/index.php?option=com_content&amp;task=article.edit&amp;id=53">Using Joomla!</a>
                                                                </th>
                                                                <td class="center">2011-01-01 00:00:01</td>
                                                                <td class="center">42</td>
                                                        </tr>
                                                        <tr>
                                                                <th scope="row">
                                                                        <a href="/joomla/administrator/index.php?option=com_content&amp;task=article.edit&amp;id=22">Getting Started</a>
                                                                </th>
                                                                <td class="center">2011-01-01 00:00:01</td>
                                                                <td class="center">31</td>
                                                        </tr>
                                                        <tr>
                                                                <th scope="row">
                                                                        <a href="/joomla/administrator/index.php?option=com_content&amp;task=article.edit&amp;id=6">Australian Parks </a>
                                                                </th>
                                                                <td class="center">2011-01-01 00:00:01</td>
                                                                <td class="center">30</td>
                                                        </tr>
                                                        <tr>
                                                                <th scope="row">
                                                                        <a href="/joomla/administrator/index.php?option=com_content&amp;task=article.edit&amp;id=55">Weblinks Module</a>
                                                                </th>
                                                                <td class="center">2011-01-01 00:00:01</td>
                                                                <td class="center">26</td>
                                                        </tr>
                                                </tbody>
                                        </table>
                                </div>
                        </div>
                        <div class="panel">
                                <h3 class="pane-toggler title" id="cpanel-panel-latest">
                                        <a href="javascript:void(0);">
                                                <span>Last 5 Added Articles</span>
                                        </a>
                                </h3>
                                <div class="pane-slider content">
                                        <table class="adminlist">
                                                <thead>
                                                        <tr>
                                                                <th>
                                                                        Latest Items			</th>

                                                                <th>
                                                                        <strong>Status</strong>
                                                                </th>
                                                                <th>
                                                                        <strong>Created</strong>
                                                                </th>
                                                                <th>
                                                                        <strong>Created By</strong>

                                                                </th>
                                                        </tr>
                                                </thead>
                                                <tbody>
                                                        <tr>
                                                                <th scope="row"><a href="/joomla/administrator/index.php?option=com_content&amp;task=article.edit&amp;id=77">a</a></th>
                                                                <td class="center"><span class="jgrid" title="Archived"><span class="state archive"><span class="text">Archived</span></span></span></td>
                                                                <td class="center">2012-02-06 13:15:16</td>
                                                                <td class="center">Super User</td>
                                                        </tr>
                                                        <tr>
                                                                <th scope="row"><a href="/joomla/administrator/index.php?option=com_content&amp;task=article.edit&amp;id=76">b</a></th>
                                                                <td class="center"><span class="jgrid" title="Published"><span class="state publish"><span class="text">Published</span></span></span></td>
                                                                <td class="center">2012-01-17 21:16:38</td>
                                                                <td class="center">Super User</td>
                                                        </tr>
                                                        <tr>
                                                                <th scope="row"><a href="/joomla/administrator/index.php?option=com_content&amp;task=article.edit&amp;id=23">Happy Orange Orchard</a></th>
                                                                <td class="center"><span class="jgrid" title="Published"><span class="state publish"><span class="text">Published</span></span></span></td>
                                                                <td class="center">2011-01-01 00:00:01</td>
                                                                <td class="center">Super User</td>
                                                        </tr>
                                                        <tr>
                                                                <th scope="row">
                                                                        <a href="/joomla/administrator/index.php?option=com_content&amp;task=article.edit&amp;id=32">Parameters</a>
                                                                </th>
                                                                <td class="center">
                                                                        <span class="jgrid" title="Published">
                                                                                <span class="state publish">
                                                                                        <span class="text">Published</span>
                                                                                </span>
                                                                        </span>
                                                                </td>
                                                                <td class="center">2011-01-01 00:00:01</td>
                                                                <td class="center">Super User</td>
                                                        </tr>
                                                        <tr>
                                                                <th scope="row">
                                                                        <a href="/joomla/administrator/index.php?option=com_content&amp;task=article.edit&amp;id=41">Search </a>
                                                                </th>
                                                                <td class="center"><span class="jgrid" title="Published"><span class="state publish"><span class="text">Published</span></span></span></td>
                                                                <td class="center">2011-01-01 00:00:01</td>
                                                                <td class="center">Super User</td>
                                                        </tr>
                                                </tbody>
                                        </table>
                                </div>
                        </div>
                </div>
        </div>
    </div>
    <div class="mc-clr"></div>
</div>