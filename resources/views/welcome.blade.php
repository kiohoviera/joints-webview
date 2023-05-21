<!DOCTYPE html>

<html
    lang="en"
    class="light-style layout-navbar-fixed layout-menu-fixed"
    dir="ltr"
    data-theme="theme-default"
    data-assets-path="{{ asset('assets') }}/"
    data-template="vertical-menu-template-no-customizer"
>
<head>
    <meta charset="utf-8" />
    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0"
    />

    <title></title>

    <meta name="description" content="" />

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="{{ asset('assets') }}/img/favicon/favicon.ico" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=IBM+Plex+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Rubik:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
        rel="stylesheet"
    />

    <!-- Icons -->
    <link rel="stylesheet" href="{{ asset('assets') }}/vendor/fonts/boxicons.css" />
    <link rel="stylesheet" href="{{ asset('assets') }}/vendor/fonts/fontawesome.css" />
    <link rel="stylesheet" href="{{ asset('assets') }}/vendor/fonts/flag-icons.css" />

    <!-- Core CSS -->
    <link rel="stylesheet" href="{{ asset('assets') }}/vendor/css/rtl/core.css" />
    <link rel="stylesheet" href="{{ asset('assets') }}/vendor/css/rtl/theme-default.css" />
    <link rel="stylesheet" href="{{ asset('assets') }}/css/demo.css" />

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="{{ asset('assets') }}/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />
    <link rel="stylesheet" href="{{ asset('assets') }}/vendor/libs/typeahead-js/typeahead.css" />
    <link rel="stylesheet" href="{{ asset('assets') }}/vendor/libs/apex-charts/apex-charts.css" />
    <link rel="stylesheet" href="{{ asset('custom-alert.css') }}" />
    <!-- Page CSS -->

    <!-- Helpers -->
    <script src="{{ asset('assets') }}/vendor/js/helpers.js"></script>

    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="{{ asset('assets') }}/js/config.js"></script>
</head>

<body>
<!-- Layout wrapper -->
<!-- Layout wrapper -->
<div class="layout-wrapper layout-content-navbar">
    <div class="layout-container">
        <!-- Menu -->

        <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
            <div class="app-brand demo">
                <a href="/" class="app-brand-link">
                    <span class="app-brand-text demo menu-text fw-bold ms-2">Osteo Track</span>
                </a>

                <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto">
                    <i class="bx menu-toggle-icon d-none d-xl-block fs-4 align-middle"></i>
                    <i class="bx bx-x d-block d-xl-none bx-sm align-middle"></i>
                </a>
            </div>

            <div class="menu-divider mt-0"></div>

            <div class="menu-inner-shadow"></div>

            <ul class="menu-inner py-1">
                <!-- Page -->
                <li class="menu-item active">
                    <a href="/" class="menu-link">
                        <i class="menu-icon tf-icons bx bx-home-circle"></i>
                        <div data-i18n="Dashboard">Dashboard</div>
                    </a>
                </li>
            </ul>
        </aside>
        <!-- / Menu -->

        <!-- Layout container -->
        <div class="layout-page">
            <!-- Navbar -->

            <nav class="layout-navbar navbar navbar-expand-xl align-items-center bg-navbar-theme" id="layout-navbar">
                <div class="container-fluid">
                    <div class="navbar-nav align-items-center">
                        <a class="nav-link style-switcher-toggle hide-arrow" href="javascript:void(0);">
                            <i class="bx bx-sm"></i>
                        </a>
                    </div>

                    <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0 d-xl-none">
                        <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
                            <i class="bx bx-menu bx-sm"></i>
                        </a>
                    </div>
                </div>
            </nav>

            <!-- / Navbar -->

            <!-- Content wrapper -->
            <div class="content-wrapper">
                <!-- Content -->

                <div class="container-xxl flex-grow-1 container-p-y">
                    <div class="row">
                        <div class="col-sm-6 col-12">
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-12 mb-4">
                                    <div class="card h-100">
                                        <div class="card-header">
                                            <h3 class="card-title mb-2">Welcome!</h3>
                                            <span class="d-block mb-4 text-nowrap">Current Angle Measurement</span>
                                        </div>
                                        <div class="card-body">
                                            <div class="row align-items-end">
                                                <div class="col-12">
                                                    <center>
                                                        <h1 class="display-6 text-primary pt-4 pb-1" id="curr_angle">0 °</h1>
                                                    </center>

                                                    <div class="row">
                                                        <div class="col-6">
                                                            <div class="d-block mb-3">
                                                                <strong>Suggested Exercise: </strong>
                                                                <div id="suggested"></div>
                                                            </div>
                                                        </div>
                                                        <div class="col-6">
                                                            <div class="d-block mb-3">
                                                                <strong>Sets and Reps: </strong>
                                                                <div id="sets"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <a href="javascript:;" class="btn btn-md btn-primary">
                                                        <i class='bx bx-objects-horizontal-center'></i> <span id="leg_position"></span>
                                                    </a>

                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mb-4">
                                    <div class="card">
                                        <div class="card-body">
                                            <center>
                                                <div class="col-12">
                                                    <img src="{{ asset('main.png') }}" width="100%" height="100%" class="rounded-start" alt="View Sales" data-app-light-img="illustrations/prize-light.png" data-app-dark-img="illustrations/prize-dark.png">
                                                </div>
                                            </center>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-body text-center">
                                            <div class="avatar avatar-md mx-auto mb-3">
                                                <span class="avatar-initial rounded-circle bg-label-info"><i class="bx bx-shape-triangle fs-3"></i></span>
                                            </div>
                                            <span class="d-block mb-1 text-nowrap">Joint Angular Velocity</span>
                                            <h2 class="mb-0" id="velocity">0 Rad/s</h2>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-12">
                            <div class="col-12 mb-4">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-between" style="position: relative;">
                                            <div class="d-flex align-items-center gap-3">
                                                <div class="avatar">
                                                    <span class="avatar-initial bg-label-primary rounded-circle"><i class="bx bx-shape-triangle fs-4"></i></span>
                                                </div>
                                                <div class="card-info">
                                                    <h5 class="card-title mb-0 me-2" id="minimum_angle">0</h5>
                                                    <small class="text-muted">Minimum Angle</small>
                                                </div>
                                            </div>
                                            <div id="conversationChart" style="min-height: 40px;"><div id="apexcharts1p9kvnsj" class="apexcharts-canvas apexcharts1p9kvnsj apexcharts-theme-light" style="width: 89px; height: 40px;"><svg id="SvgjsSvg1342" width="89" height="40" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;"><g id="SvgjsG1344" class="apexcharts-inner apexcharts-graphical" transform="translate(10, 5)"><defs id="SvgjsDefs1343"><clipPath id="gridRectMask1p9kvnsj"><rect id="SvgjsRect1349" width="76" height="33" x="-3.5" y="-1.5" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath><clipPath id="forecastMask1p9kvnsj"></clipPath><clipPath id="nonForecastMask1p9kvnsj"></clipPath><clipPath id="gridRectMarkerMask1p9kvnsj"><rect id="SvgjsRect1350" width="73" height="34" x="-2" y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath><linearGradient id="SvgjsLinearGradient1355" x1="0" y1="1" x2="1" y2="1"><stop id="SvgjsStop1356" stop-opacity="0" stop-color="rgba(173,198,247,0)" offset="0"></stop><stop id="SvgjsStop1357" stop-opacity="0.9" stop-color="rgba(90,141,238,0.9)" offset="0.3"></stop><stop id="SvgjsStop1358" stop-opacity="0.9" stop-color="rgba(90,141,238,0.9)" offset="0.7"></stop><stop id="SvgjsStop1359" stop-opacity="0" stop-color="rgba(173,198,247,0)" offset="1"></stop></linearGradient></defs><line id="SvgjsLine1348" x1="0" y1="0" x2="0" y2="30" stroke="#b6b6b6" stroke-dasharray="3" stroke-linecap="butt" class="apexcharts-xcrosshairs" x="0" y="0" width="1" height="30" fill="#b1b9c4" filter="none" fill-opacity="0.9" stroke-width="1"></line><g id="SvgjsG1361" class="apexcharts-xaxis" transform="translate(0, 0)"><g id="SvgjsG1362" class="apexcharts-xaxis-texts-g" transform="translate(0, -4)"></g></g><g id="SvgjsG1370" class="apexcharts-grid"><g id="SvgjsG1371" class="apexcharts-gridlines-horizontal" style="display: none;"><line id="SvgjsLine1373" x1="0" y1="0" x2="69" y2="0" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine1374" x1="0" y1="7.5" x2="69" y2="7.5" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine1375" x1="0" y1="15" x2="69" y2="15" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine1376" x1="0" y1="22.5" x2="69" y2="22.5" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine1377" x1="0" y1="30" x2="69" y2="30" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line></g><g id="SvgjsG1372" class="apexcharts-gridlines-vertical" style="display: none;"></g><line id="SvgjsLine1379" x1="0" y1="30" x2="69" y2="30" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt"></line><line id="SvgjsLine1378" x1="0" y1="1" x2="0" y2="30" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt"></line></g><g id="SvgjsG1351" class="apexcharts-line-series apexcharts-plot-series"><g id="SvgjsG1352" class="apexcharts-series" seriesName="seriesx1" data:longestSeries="true" rel="1" data:realIndex="0"><path id="SvgjsPath1360" d="M0 17.5C4.829999999999999 17.5 8.969999999999999 5 13.799999999999999 5C18.63 5 22.77 30 27.599999999999998 30C32.43 30 36.57 15 41.4 15C46.23 15 50.37 25 55.199999999999996 25C60.029999999999994 25 64.17 22.5 69 22.5C69 22.5 69 22.5 69 22.5 " fill="none" fill-opacity="1" stroke="url(#SvgjsLinearGradient1355)" stroke-opacity="1" stroke-linecap="butt" stroke-width="3" stroke-dasharray="0" class="apexcharts-line" index="0" clip-path="url(#gridRectMask1p9kvnsj)" pathTo="M 0 17.5C 4.829999999999999 17.5 8.969999999999999 5 13.799999999999999 5C 18.63 5 22.77 30 27.599999999999998 30C 32.43 30 36.57 15 41.4 15C 46.23 15 50.37 25 55.199999999999996 25C 60.029999999999994 25 64.17 22.5 69 22.5" pathFrom="M -1 30L -1 30L 13.799999999999999 30L 27.599999999999998 30L 41.4 30L 55.199999999999996 30L 69 30"></path><g id="SvgjsG1353" class="apexcharts-series-markers-wrap" data:realIndex="0"></g></g><g id="SvgjsG1354" class="apexcharts-datalabels" data:realIndex="0"></g></g><line id="SvgjsLine1380" x1="0" y1="0" x2="69" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" stroke-linecap="butt" class="apexcharts-ycrosshairs"></line><line id="SvgjsLine1381" x1="0" y1="0" x2="69" y2="0" stroke-dasharray="0" stroke-width="0" stroke-linecap="butt" class="apexcharts-ycrosshairs-hidden"></line><g id="SvgjsG1382" class="apexcharts-yaxis-annotations"></g><g id="SvgjsG1383" class="apexcharts-xaxis-annotations"></g><g id="SvgjsG1384" class="apexcharts-point-annotations"></g></g><rect id="SvgjsRect1347" width="0" height="0" x="0" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fefefe"></rect><g id="SvgjsG1369" class="apexcharts-yaxis" rel="0" transform="translate(-18, 0)"></g><g id="SvgjsG1345" class="apexcharts-annotations"></g></svg><div class="apexcharts-legend" style="max-height: 20px;"></div></div></div>
                                            <div class="resize-triggers"><div class="expand-trigger"><div style="width: 225px; height: 43px;"></div></div><div class="contract-trigger"></div></div></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 mb-4">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-between" style="position: relative;">
                                            <div class="d-flex align-items-center gap-3">
                                                <div class="avatar">
                                                    <span class="avatar-initial bg-label-warning rounded-circle"><i class="bx bx-shape-triangle fs-4"></i></span>
                                                </div>
                                                <div class="card-info">
                                                    <h5 class="card-title mb-0 me-2" id="maximum_angle">0</h5>
                                                    <small class="text-muted">Maximum Angle</small>
                                                </div>
                                            </div>
                                            <div id="incomeChart" style="min-height: 40px;"><div id="apexchartsze724f1k" class="apexcharts-canvas apexchartsze724f1k apexcharts-theme-light" style="width: 90px; height: 40px;"><svg id="SvgjsSvg1385" width="90" height="40" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;"><g id="SvgjsG1387" class="apexcharts-inner apexcharts-graphical" transform="translate(10, 10)"><defs id="SvgjsDefs1386"><clipPath id="gridRectMaskze724f1k"><rect id="SvgjsRect1392" width="77" height="33" x="-3.5" y="-1.5" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath><clipPath id="forecastMaskze724f1k"></clipPath><clipPath id="nonForecastMaskze724f1k"></clipPath><clipPath id="gridRectMarkerMaskze724f1k"><rect id="SvgjsRect1393" width="74" height="34" x="-2" y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath><linearGradient id="SvgjsLinearGradient1398" x1="0" y1="1" x2="1" y2="1"><stop id="SvgjsStop1399" stop-opacity="0" stop-color="rgba(254,214,160,0)" offset="0"></stop><stop id="SvgjsStop1400" stop-opacity="0.9" stop-color="rgba(253,172,65,0.9)" offset="0.3"></stop><stop id="SvgjsStop1401" stop-opacity="0.9" stop-color="rgba(253,172,65,0.9)" offset="0.7"></stop><stop id="SvgjsStop1402" stop-opacity="0" stop-color="rgba(254,214,160,0)" offset="1"></stop></linearGradient></defs><line id="SvgjsLine1391" x1="0" y1="0" x2="0" y2="30" stroke="#b6b6b6" stroke-dasharray="3" stroke-linecap="butt" class="apexcharts-xcrosshairs" x="0" y="0" width="1" height="30" fill="#b1b9c4" filter="none" fill-opacity="0.9" stroke-width="1"></line><g id="SvgjsG1404" class="apexcharts-xaxis" transform="translate(0, 0)"><g id="SvgjsG1405" class="apexcharts-xaxis-texts-g" transform="translate(0, -4)"></g></g><g id="SvgjsG1413" class="apexcharts-grid"><g id="SvgjsG1414" class="apexcharts-gridlines-horizontal" style="display: none;"><line id="SvgjsLine1416" x1="0" y1="0" x2="70" y2="0" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine1417" x1="0" y1="4.285714285714286" x2="70" y2="4.285714285714286" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine1418" x1="0" y1="8.571428571428571" x2="70" y2="8.571428571428571" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine1419" x1="0" y1="12.857142857142858" x2="70" y2="12.857142857142858" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine1420" x1="0" y1="17.142857142857142" x2="70" y2="17.142857142857142" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine1421" x1="0" y1="21.428571428571427" x2="70" y2="21.428571428571427" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine1422" x1="0" y1="25.71428571428571" x2="70" y2="25.71428571428571" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine1423" x1="0" y1="29.999999999999996" x2="70" y2="29.999999999999996" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line></g><g id="SvgjsG1415" class="apexcharts-gridlines-vertical" style="display: none;"></g><line id="SvgjsLine1425" x1="0" y1="30" x2="70" y2="30" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt"></line><line id="SvgjsLine1424" x1="0" y1="1" x2="0" y2="30" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt"></line></g><g id="SvgjsG1394" class="apexcharts-line-series apexcharts-plot-series"><g id="SvgjsG1395" class="apexcharts-series" seriesName="seriesx1" data:longestSeries="true" rel="1" data:realIndex="0"><path id="SvgjsPath1403" d="M0 25.71428571428571C4.8999999999999995 25.71428571428571 9.100000000000001 12.857142857142858 14 12.857142857142858C18.9 12.857142857142858 23.1 26.57142857142857 28 26.57142857142857C32.9 26.57142857142857 37.1 4.285714285714285 42 4.285714285714285C46.9 4.285714285714285 51.1 25.71428571428571 56 25.71428571428571C60.9 25.71428571428571 65.1 15 70 15C70 15 70 15 70 15 " fill="none" fill-opacity="1" stroke="url(#SvgjsLinearGradient1398)" stroke-opacity="1" stroke-linecap="butt" stroke-width="3" stroke-dasharray="0" class="apexcharts-line" index="0" clip-path="url(#gridRectMaskze724f1k)" pathTo="M 0 25.71428571428571C 4.8999999999999995 25.71428571428571 9.100000000000001 12.857142857142858 14 12.857142857142858C 18.9 12.857142857142858 23.1 26.57142857142857 28 26.57142857142857C 32.9 26.57142857142857 37.1 4.285714285714285 42 4.285714285714285C 46.9 4.285714285714285 51.1 25.71428571428571 56 25.71428571428571C 60.9 25.71428571428571 65.1 15 70 15" pathFrom="M -1 42.857142857142854L -1 42.857142857142854L 14 42.857142857142854L 28 42.857142857142854L 42 42.857142857142854L 56 42.857142857142854L 70 42.857142857142854"></path><g id="SvgjsG1396" class="apexcharts-series-markers-wrap" data:realIndex="0"></g></g><g id="SvgjsG1397" class="apexcharts-datalabels" data:realIndex="0"></g></g><line id="SvgjsLine1426" x1="0" y1="0" x2="70" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" stroke-linecap="butt" class="apexcharts-ycrosshairs"></line><line id="SvgjsLine1427" x1="0" y1="0" x2="70" y2="0" stroke-dasharray="0" stroke-width="0" stroke-linecap="butt" class="apexcharts-ycrosshairs-hidden"></line><g id="SvgjsG1428" class="apexcharts-yaxis-annotations"></g><g id="SvgjsG1429" class="apexcharts-xaxis-annotations"></g><g id="SvgjsG1430" class="apexcharts-point-annotations"></g></g><rect id="SvgjsRect1390" width="0" height="0" x="0" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fefefe"></rect><g id="SvgjsG1412" class="apexcharts-yaxis" rel="0" transform="translate(-18, 0)"></g><g id="SvgjsG1388" class="apexcharts-annotations"></g></svg><div class="apexcharts-legend" style="max-height: 20px;"></div></div></div>
                                            <div class="resize-triggers"><div class="expand-trigger"><div style="width: 225px; height: 43px;"></div></div><div class="contract-trigger"></div></div></div>
                                    </div>
                                </div>
                            </div>

                            <!-- images -->
                            <div class="col-12 mb-4">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-between" style="position: relative;">
                                            <div class="d-flex align-items-center gap-3">
                                                <div class="card-info">
                                                    <h5 class="card-title">Suggested Exercise</h5>
                                                </div>
                                            </div>
                                        </div>
                                        <center>
                                            <img src="{{ asset('0-30.png') }}" class="img img-fluid" id="angle1" style="display: none" />
                                            <img src="{{ asset('31-60.png') }}" class="img img-fluid" id="angle2" style="display: none" />
                                            <img src="{{ asset('61-90.png') }}" class="img img-fluid" id="angle3" style="display: none" />
                                            <img src="{{ asset('_90.png') }}" class="img img-fluid" id="angle4" style="display: none" />
                                        </center>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- / Content -->

                <div class="content-backdrop fade"></div>
            </div>
            <!-- Content wrapper -->
        </div>
        <!-- / Layout page -->
    </div>

    <!-- Overlay -->
    <div class="layout-overlay layout-menu-toggle"></div>

    <!-- Drag Target Area To SlideIn Menu On Small Screens -->
    <div class="drag-target"></div>
</div>
<!-- / Layout wrapper -->
<!-- / Layout wrapper -->

<!-- Core JS -->
<!-- build:js assets/vendor/js/core.js -->
<script src="{{ asset('assets') }}/vendor/libs/jquery/jquery.js"></script>
<script src="{{ asset('assets') }}/vendor/libs/popper/popper.js"></script>
<script src="{{ asset('assets') }}/vendor/js/bootstrap.js"></script>
<script src="{{ asset('assets') }}/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>

<script src="{{ asset('assets') }}/vendor/libs/hammer/hammer.js"></script>

<script src="{{ asset('assets') }}/vendor/libs/i18n/i18n.js"></script>
<script src="{{ asset('assets') }}/vendor/libs/typeahead-js/typeahead.js"></script>

<script src="{{ asset('assets') }}/vendor/js/menu.js"></script>
<!-- endbuild -->

<!-- Vendors JS -->
<script src="{{ asset('assets') }}/vendor/libs/apex-charts/apexcharts.js"></script>

<!-- Main JS -->
<script src="{{ asset('assets') }}/js/main.js"></script>
<!-- Page JS -->
<script src="{{ asset('assets') }}/js/dashboards-analytics.js"></script>
<script src="{{ asset('alert.js') }}"></script>
<script>
    $(document).ready(function () {

        async function getData() {
            const response = await fetch('/getData')
            let jsonData = await response.json();


            $("#curr_angle").html(jsonData['angle'] + " °");
            $("#velocity").html(jsonData['velocity'] + " Rad/s");
            $("#minimum_angle").html(jsonData['min_angle'] + " °");
            $("#maximum_angle").html(jsonData['max_angle'] + " °");
            $("#leg_position").html(jsonData['position'] + " leg");
            let angle = jsonData['angle'];

            console.log(angle);
            if(angle >= 0 && angle <= 30){
                $("#suggested").html(
                    "<div>" +
                    "<ul>" +
                        "<li>" + "<p>Isometric quadriceps contraction</p>" +"</li>" +
                        "<li>" + "<p>Short arc quad extension</p>" +"</li>" +
                        "<li>" + "<p>Straight leg raise</p>" +"</li>" +
                    "</ul>" +
                    "</div>")

                $("#sets").html(
                    "<div>" +
                    "<ul>" +
                    "<li>" + "<p>Hold for 5-10 seconds, 10 reps</p>" +"</li>" +
                    "<li>" + "<p>3 sets of 10-15 reps</p>" +"</li>" +
                    "<li>" + "<p>3 sets of 10-15 reps</p>" +"</li>" +
                    "</ul>" +
                    "</div>")

                $("#angle1").css('display', 'block');
                $("#angle2").css('display', 'none');
                $("#angle3").css('display', 'none');
                $("#angle4").css('display', 'none');
            }

            if(angle >= 31 && angle <= 60){
                $("#suggested").html(
                    "<div>" +
                    "<ul>" +
                    "<li>" + "<p>Seated knee extension</p>" +"</li>" +
                    "<li>" + "<p>Standing hamstring curl</p>" +"</li>" +
                    "<li>" + "<p>Step-ups</p>" +"</li>" +
                    "</ul>" +
                    "</div>")

                $("#sets").html(
                    "<div>" +
                    "<ul>" +
                    "<li>" + "<p>3 sets of 10-15 reps</p>" +"</li>" +
                    "<li>" + "<p>3 sets of 10-15 reps</p>" +"</li>" +
                    "<li>" + "<p>3 sets of 10-15 reps</p>" +"</li>" +
                    "</ul>" +
                    "</div>")

                $("#angle1").css('display', 'none');
                $("#angle2").css('display', 'block');
                $("#angle3").css('display', 'none');
                $("#angle4").css('display', 'none');
            }

            if(angle >= 61 && angle <= 90){
                $("#suggested").html(
                    "<div>" +
                    "<ul>" +
                    "<li>" + "<p>Wall squats</p>" +"</li>" +
                    "<li>" + "<p>Stationary bike (low resistance)</p>" +"</li>" +
                    "<li>" + "<p>Mini-squats</p>" +"</li>" +
                    "</ul>" +
                    "</div>")

                $("#sets").html(
                    "<div>" +
                    "<ul>" +
                    "<li>" + "<p>3 sets of 10-15 reps</p>" +"</li>" +
                    "<li>" + "<p>10-15 minutes</p>" +"</li>" +
                    "<li>" + "<p>3 sets of 10-15 reps</p>" +"</li>" +
                    "</ul>" +
                    "</div>")

                $("#angle1").css('display', 'none');
                $("#angle2").css('display', 'none');
                $("#angle3").css('display', 'block');
                $("#angle4").css('display', 'none');
            }

            if(angle >= 91){
                $("#suggested").html(
                    "<div>" +
                    "<ul>" +
                    "<li>" + "<p>Lunges</p>" +"</li>" +
                    "<li>" + "<p>Leg press (light resistance)</p>" +"</li>" +
                    "<li>" + "<p>Stationary bike (moderate resistance)</p>" +"</li>" +
                    "</ul>" +
                    "</div>")

                $("#sets").html(
                    "<div>" +
                    "<ul>" +
                    "<li>" + "<p>3 sets of 10-15 reps</p>" +"</li>" +
                    "<li>" + "<p>3 sets of 10-15 reps</p>" +"</li>" +
                    "<li>" + "<p>20-30 minutes</p>" +"</li>" +
                    "</ul>" +
                    "</div>")

                $("#angle1").css('display', 'none');
                $("#angle2").css('display', 'none');
                $("#angle3").css('display', 'none');
                $("#angle4").css('display', 'block');
            }

        }

        getData();

        setInterval(function (){
            getData();
        }, 1000)

    })
</script>
</body>
</html>
