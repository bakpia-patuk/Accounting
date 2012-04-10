<div class="mc-wrapper">
    <div id="mc-status">
        <ul class="active">
            <li class="action">
                <span class="logout">
                    <a href="/joomla/administrator/index.php?option=com_login&amp;task=logout&amp;1193c26c3661c87ac11fc737fbe00954=1">Logout</a>
                </span>
            </li>
            <li class="dropdown">
                <a href="#" id="ToolsToggle">
                    <span class="select-active">System Tools</span>
                    <span class="select-arrow">&#x25BE;</span>
                </a>
                <ul class="mc-dropdown">
                    <li class="checkin">
                        <a href="index.php?option=com_checkin">Checkin Manager</a>
                    </li>
                    <li class="divider"></li>
                    <li class="qcc"><a href="#">Quick-Cache-Clean</a><span class="badge number">0</span></li>
                    <li class="config"><a href="index.php?option=com_cache">Cache Manager</a></li>
                    <li class="config">
                        <a href="index.php?option=com_cache&view=purge">Purge Expired Cache</a>
                    </li>
                    <li class="divider"></li>
                    <li class="sysinfo">
                        <a href="index.php?option=com_admin&view=sysinfo">System Information</a>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
    <div id="mc-logo">
        <img src="<?php echo base_url(); ?>/images/logo.png" alt="logo" class="mc-logo" width="89" height="53" />
        <h1>Accounting</h1>
    </div>
    <div id="mc-nav">
        <?php $this->load->view($menu); ?>
    </div>
    <div id="mc-userinfo">
        <div class="mc-userinfo2">
            <div class="gravatar">
                <img src="http://www.gravatar.com/avatar/e99acaab4dac6bd5b3b7d81292e2d9b8?s=46&d=mm&r=g" alt="gravatar" />
            </div>
            <div class="userinfo active">
                <b>Super User</b>
                <span class="mc-button">
                    <a href="index.php?option=com_admin&task=profile.edit&id=42">edit</a>
                </span>
                <br />
                <a href="index.php?option=com_messages">(<span class="no-unread-messages">0</span>) Messages</a>
                <br />
                last visit: 2012-03-24 06:43:09
            </div>
            <div class="session_expire">
                <div class="session_progress"></div>
            </div>
        </div>
    </div>
    <div class="mc-clr"></div>
</div>