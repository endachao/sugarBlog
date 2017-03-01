<nav class="menu">
    <ul class="nav metismenu" id="sidebar-menu">
        <li class="">
            <a href="index.html"> <i class="fa fa-home"></i> Dashboard </a>
        </li>
        <li>
            <a href=""> <i class="fa fa-th-large"></i> Items Manager <i class="fa arrow"></i> </a>
            <ul>
                <li> <a href="items-list.html">
                    Items List
                </a> </li>
                <li> <a href="item-editor.html">
                    Item Editor
                </a> </li>
            </ul>
        </li>
        <li>
            <a href=""> <i class="fa fa-bar-chart"></i> Charts <i class="fa arrow"></i> </a>
            <ul>
                <li> <a href="charts-flot.html">
                    Flot Charts
                </a> </li>
                <li> <a href="charts-morris.html">
                    Morris Charts
                </a> </li>
            </ul>
        </li>
        <li>
            <a href=""> <i class="fa fa-table"></i> Tables <i class="fa arrow"></i> </a>
            <ul>
                <li> <a href="static-tables.html">
                    Static Tables
                </a> </li>
                <li> <a href="responsive-tables.html">
                    Responsive Tables
                </a> </li>
            </ul>
        </li>
        <li>
            <a href="forms.html"> <i class="fa fa-pencil-square-o"></i> Forms </a>
        </li>
        <li>
            <a href=""> <i class="fa fa-desktop"></i> UI Elements <i class="fa arrow"></i> </a>
            <ul>
                <li> <a href="buttons.html">
                    Buttons
                </a> </li>
                <li> <a href="cards.html">
                    Cards
                </a> </li>
                <li> <a href="typography.html">
                    Typography
                </a> </li>
                <li> <a href="icons.html">
                    Icons
                </a> </li>
                <li> <a href="grid.html">
                    Grid
                </a> </li>
            </ul>
        </li>
        <li>
            <a href=""> <i class="fa fa-file-text-o"></i> Pages <i class="fa arrow"></i> </a>
            <ul>
                <li> <a href="login.html">
                    Login
                </a> </li>
                <li> <a href="signup.html">
                    Sign Up
                </a> </li>
                <li> <a href="reset.html">
                    Reset
                </a> </li>
                <li> <a href="error-404.html">
                    Error 404 App
                </a> </li>
                <li> <a href="error-404-alt.html">
                    Error 404 Global
                </a> </li>
                <li> <a href="error-500.html">
                    Error 500 App
                </a> </li>
                <li> <a href="error-500-alt.html">
                    Error 500 Global
                </a> </li>
            </ul>
        </li>
        <li>
            <a href=""> <i class="fa fa-file-text-o"></i> 单页面管理 <i class="fa arrow"></i> </a>
            <ul>
                <li><a href="items-list.html">
                    创建单页面
                </a></li>
                <li><a href="item-editor.html">
                    单页面列表
                </a></li>
            </ul>
        </li>
        <li class="@yield('setting')">
            <a href="javascript:;"> <i class="fa fa-th-large"></i> 系统设置 <i class="fa arrow"></i> </a>
            <ul class="@yield('setting_ul')">
                <li class="@yield('general_setting')"> <a href="/backend/general-setting">
                    通用设置
                </a> </li>
                <li class="@yield('email_setting')"> <a href="/backend/email-setting">
                    邮件设置
                </a> </li>
                <li class="@yield('nav_setting')"> <a href="/backend/nav-setting">
                    导航设置
                </a> </li>
                <li class="@yield('link_setting')"> <a href="/backend/link-setting">
                    友情链接管理
                </a> </li>
            </ul>
        </li>
<!--         <li>
            <a href="https://github.com/modularcode/modular-admin-html"> <i class="fa fa-github-alt"></i> Theme Docs </a>
        </li> -->
    </ul>
</nav>