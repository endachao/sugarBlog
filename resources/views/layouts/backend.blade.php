<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title> {{ config('app.name', 'Laravel') }} </title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="apple-touch-icon" href="apple-touch-icon.png">
    <!-- Place favicon.ico in the root directory -->
    <link rel="stylesheet" href="{{ asset('/css/vendor.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/simplemde/latest/simplemde.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/highlight.js/latest/styles/github.min.css">
    <!-- Theme initialization -->
    <script>
        var themeSettings = (localStorage.getItem('themeSettings')) ? JSON.parse(localStorage.getItem('themeSettings')) :
        {};
        var themeName = themeSettings.themeName || '';
        if (themeName) {
            document.write('<link rel="stylesheet" id="theme-style" href="{{ asset('/') }}css/app-' + themeName + '.css">');
        }
        else {
            document.write('<link rel="stylesheet" id="theme-style" href="{{ asset('/css/app.css') }}">');
        }
    </script>
</head>

<body>
    <div class="main-wrapper">
        <div class="app" id="app">
            <header class="header">
                @include('partial.header')
            </header>
            <aside class="sidebar">
                <div class="sidebar-container">
                    <div class="sidebar-header">
                        <div class="brand">
                            <div class="logo"> 
                                <span class="l l1"></span> 
                                <span class="l l2"></span> 
                                <span class="l l3"></span> 
                                <span class="l l4"></span>                                
                                <span class="l l5"></span> 
                            </div> 
                            Modular Admin
                        </div>
                    </div>
                    @include('partial.nav')
                </div>
                @include('partial.customize')
            </aside>
            <div class="sidebar-overlay" id="sidebar-overlay"></div>
            @yield('content')
            <footer class="footer">
                <div class="footer-block buttons">
                    <iframe class="footer-github-btn" src="https://ghbtns.com/github-btn.html?user=modularcode&repo=modular-admin-html&type=star&count=true"
                    frameborder="0" scrolling="0" width="140px" height="20px"></iframe>
                </div>
                <div class="footer-block author">
                    <ul>
                        <li> created by <a href="https://github.com/modularcode">ModularCode</a> </li>
                        <li> <a href="https://github.com/modularcode/modular-admin-html#get-in-touch">get in touch</a> </li>
                    </ul>
                </div>
            </footer>

            <!-- /.modal -->

            <!-- /.modal -->
        </div>
    </div>
    <!-- Reference block for JS -->
    <div class="ref" id="ref">
        <div class="color-primary"></div>
        <div class="chart">
            <div class="color-primary"></div>
            <div class="color-secondary"></div>
        </div>
    </div>
    <script src="{{ asset('/js/vendor.js') }}"></script>
    <script src="{{ asset('/js/app.js') }}"></script>
    @yield('footerJs')
</body>

</html>