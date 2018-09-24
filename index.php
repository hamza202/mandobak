<!DOCTYPE html>

<html lang="en">

<!-- begin::Head -->
<head>
    <meta charset="utf-8"/>
    <title>ManDoPick | Dashboard</title>
    <meta name="description" content="Latest updates and statistic charts">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">

    <?php include 'style.php' ?>

    <!--begin::Page Vendors Styles -->


</head>

<!-- end::Head -->

<!-- begin::Body -->
<body class="m-page--fluid m--skin- m-content--skin-light2 m-header--fixed m-header--fixed-mobile m-aside-left--enabled m-aside-left--skin-dark m-aside-left--fixed m-aside-left--offcanvas m-footer--push m-aside--offcanvas-default">

<!-- begin:: Page -->
<div class="m-grid m-grid--hor m-grid--root m-page">

    <!-- BEGIN: Header -->
    <?php include "header.php"?>
    <!-- END: Header -->

    <!-- begin::Body -->
    <div class="m-grid__item m-grid__item--fluid m-grid m-grid--ver-desktop m-grid--desktop m-body">

        <!-- BEGIN: Left Aside -->
        <?php include "asideMenu.php" ?>
        <!-- END: Left Aside -->
        <div class="m-grid__item m-grid__item--fluid m-wrapper">

            <!-- BEGIN: Subheader -->
            <div class="m-subheader ">
                <div class="d-flex align-items-center">
                    <div class="mr-auto">
                        <h3 class="m-subheader__title ">Dashboard</h3>
                    </div>
                </div>
            </div>

            <!-- END: Subheader -->
            <div class="m-content">
                <!--begin:: Widgets/Stats-->
                <div class="m-portlet ">
                    <div class="m-portlet__body  m-portlet__body--no-padding">
                        <div class="row m-row--no-padding m-row--col-separator-xl">
                            <div class="col-md-12 col-lg-6 col-xl-3">

                                <!--begin::Total Profit-->
                                <div class="m-widget24">
                                    <div class="m-widget24__item">
                                        <h4 class="m-widget24__title">
                                            New Customers
                                        </h4><br>
                                        <span class="m-widget24__stats m--font-brand">
													15
												</span>
                                        <div class="m--space-10"></div>
                                        <div class="progress m-progress--sm">
                                            <div class="progress-bar m--bg-brand" role="progressbar"
                                                 style="width: 100%;" aria-valuenow="50" aria-valuemin="0"
                                                 aria-valuemax="100"></div>
                                        </div>

                                    </div>
                                </div>

                                <!--end::Total Profit-->
                            </div>
                            <div class="col-md-12 col-lg-6 col-xl-3">

                                <!--begin::New Feedbacks-->
                                <div class="m-widget24">
                                    <div class="m-widget24__item">
                                        <h4 class="m-widget24__title">
                                            New Invoices
                                        </h4><br>
                                        <span class="m-widget24__stats m--font-info">
													47
												</span>
                                        <div class="m--space-10"></div>
                                        <div class="progress m-progress--sm">
                                            <div class="progress-bar m--bg-info" role="progressbar" style="width: 100%;"
                                                 aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>

                                    </div>
                                </div>

                                <!--end::New Feedbacks-->
                            </div>
                            <div class="col-md-12 col-lg-6 col-xl-3">

                                <!--begin::New Orders-->
                                <div class="m-widget24">
                                    <div class="m-widget24__item">
                                        <h4 class="m-widget24__title">
                                            Complete Invoices
                                        </h4><br>
                                        <span class="m-widget24__stats m--font-danger">
													250
												</span>
                                        <div class="m--space-10"></div>
                                        <div class="progress m-progress--sm">
                                            <div class="progress-bar m--bg-danger" role="progressbar"
                                                 style="width: 100%;" aria-valuenow="50" aria-valuemin="0"
                                                 aria-valuemax="100"></div>
                                        </div>

                                    </div>
                                </div>

                                <!--end::New Orders-->
                            </div>
                            <div class="col-md-12 col-lg-6 col-xl-3">

                                <!--begin::New Users-->
                                <div class="m-widget24">
                                    <div class="m-widget24__item">
                                        <h4 class="m-widget24__title">
                                            All Invoices
                                        </h4><br>

                                        <span class="m-widget24__stats m--font-success">
													276
												</span>
                                        <div class="m--space-10"></div>
                                        <div class="progress m-progress--sm">
                                            <div class="progress-bar m--bg-success" role="progressbar"
                                                 style="width: 100%;" aria-valuenow="50" aria-valuemin="0"
                                                 aria-valuemax="100"></div>
                                        </div>

                                    </div>
                                </div>

                                <!--end::New Users-->
                            </div>
                        </div>
                    </div>
                </div>
                <!--end:: Widgets/Stats-->
                <div class="row">
                    <div class="col-12">
                        <div class="m-portlet m-portlet--full-height ">
                            <div class="m-portlet__head">
                                <div class="m-portlet__head-caption">
                                    <div class="m-portlet__head-title">
                                        <h3 class="m-portlet__head-text">
                                            YEARLY SALES
                                        </h3>
                                    </div>
                                </div>
                                <div class="ml-auto">
                                    <ul class="list-inline font-12 cart1-list">
                                        <li class="list-inline-item"><i class="fa fa-circle text-cyan"></i> Iphone</li>
                                        <li class="list-inline-item"><i class="fa fa-circle text-pink"></i> Ipad</li>
                                        <li class="list-inline-item"><i class="fa fa-circle text-purple"></i> Ipod</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="m-portlet__body">
                                <div id="morris-area-chart" style="height: 340px;"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="m-portlet m-portlet--full-height ">
                            <div class="m-portlet__head">
                                <div class="m-portlet__head-caption">
                                    <div class="m-portlet__head-title position-relative">
                                        <h3 class="m-portlet__head-text ">
                                            Invoices Overview

                                        </h3>
                                        <span class="sup-title">
                                                Check the last 10 invoices
                                            </span>
                                    </div>

                                </div>
                                <div class="ml-auto">
                                    <ul class="list-inline font-12 mt-4">
                                        <li class="list-inline-item"><h4 class="text-primary">500$</h4></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="m-portlet__body p-0">
                                <table class="table m-table m-table--head-bg-success table-responsive text-center my-table">
                                    <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Code</th>
                                        <th>Type</th>
                                        <th>Date</th>
                                        <th>Commissions</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>Rv21564</td>
                                        <td>
                                            <span class="m-badge m-badge--brand m-badge--wide">Visa</span>
                                        </td>
                                        <td>April 18, 2017</td>
                                        <td class="text-primary">$24</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">2</th>
                                        <td>Rv21564</td>
                                        <td>
                                            <span class="m-badge m-badge--info m-badge--wide">Master</span>
                                        </td>
                                        <td>April 18, 2017</td>
                                        <td class="text-primary">$24</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">3</th>
                                        <td>Rv21564</td>
                                        <td>
                                            <span class="m-badge m-badge--danger m-badge--wide">Knet</span>
                                        </td>
                                        <td>April 18, 2017</td>
                                        <td class="text-primary">$24</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">4</th>
                                        <td>Rv21564</td>
                                        <td>
                                            <span class="m-badge m-badge--brand m-badge--wide">Visa</span>
                                        </td>
                                        <td>April 18, 2017</td>
                                        <td class="text-primary">$24</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">5</th>
                                        <td>Rv21564</td>
                                        <td>
                                            <span class="m-badge m-badge--info m-badge--wide">Master</span>
                                        </td>
                                        <td>April 18, 2017</td>
                                        <td class="text-primary">$24</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">6</th>
                                        <td>Rv21564</td>
                                        <td>
                                            <span class="m-badge m-badge--danger m-badge--wide">Knet</span>
                                        </td>
                                        <td>April 18, 2017</td>
                                        <td class="text-primary">$24</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">7</th>
                                        <td>Rv21564</td>
                                        <td>
                                            <span class="m-badge m-badge--brand m-badge--wide">Visa</span>
                                        </td>
                                        <td>April 18, 2017</td>
                                        <td class="text-primary">$24</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">8</th>
                                        <td>Rv21564</td>
                                        <td>
                                            <span class="m-badge m-badge--info m-badge--wide">Master</span>
                                        </td>
                                        <td>April 18, 2017</td>
                                        <td class="text-primary">$24</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">9</th>
                                        <td>Rv21564</td>
                                        <td>
                                            <span class="m-badge m-badge--danger m-badge--wide">Knet</span>
                                        </td>
                                        <td>April 18, 2017</td>
                                        <td class="text-primary">$24</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">10</th>
                                        <td>Rv21564</td>
                                        <td>
                                            <span class="m-badge m-badge--info m-badge--wide">Master</span>
                                        </td>
                                        <td>April 18, 2017</td>
                                        <td class="text-primary">$24</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="m-portlet m-portlet--full-height ">
                            <div class="m-portlet__head">
                                <div class="m-portlet__head-caption">
                                    <div class="m-portlet__head-title position-relative">
                                        <h3 class="m-portlet__head-text">
                                            Invoices Overview
                                        </h3>
                                        <span>Check the last 10 invoices</span>
                                    </div>
                                </div>
                                <div class="ml-auto">
                                    <ul class="list-inline font-12 mt-4">
                                        <li class="list-inline-item"><h4 class="text-primary">500$</h4></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="m-portlet__body p-0">
                                <table class="table m-table m-table--head-bg-success text-center table-responsive my-table">
                                    <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Code</th>
                                        <th>Type</th>
                                        <th>Date</th>
                                        <th>Commissions</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>Rv21564</td>
                                        <td>
                                            <span class="m-badge m-badge--brand m-badge--wide">Visa</span>
                                        </td>
                                        <td>April 18, 2017</td>
                                        <td class="text-primary">$24</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">2</th>
                                        <td>Rv21564</td>
                                        <td>
                                            <span class="m-badge m-badge--info m-badge--wide">Master</span>
                                        </td>
                                        <td>April 18, 2017</td>
                                        <td class="text-primary">$24</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">3</th>
                                        <td>Rv21564</td>
                                        <td>
                                            <span class="m-badge m-badge--danger m-badge--wide">Knet</span>
                                        </td>
                                        <td>April 18, 2017</td>
                                        <td class="text-primary">$24</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">4</th>
                                        <td>Rv21564</td>
                                        <td>
                                            <span class="m-badge m-badge--brand m-badge--wide">Visa</span>
                                        </td>
                                        <td>April 18, 2017</td>
                                        <td class="text-primary">$24</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">5</th>
                                        <td>Rv21564</td>
                                        <td>
                                            <span class="m-badge m-badge--info m-badge--wide">Master</span>
                                        </td>
                                        <td>April 18, 2017</td>
                                        <td class="text-primary">$24</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">6</th>
                                        <td>Rv21564</td>
                                        <td>
                                            <span class="m-badge m-badge--danger m-badge--wide">Knet</span>
                                        </td>
                                        <td>April 18, 2017</td>
                                        <td class="text-primary">$24</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">7</th>
                                        <td>Rv21564</td>
                                        <td>
                                            <span class="m-badge m-badge--brand m-badge--wide">Visa</span>
                                        </td>
                                        <td>April 18, 2017</td>
                                        <td class="text-primary">$24</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">8</th>
                                        <td>Rv21564</td>
                                        <td>
                                            <span class="m-badge m-badge--info m-badge--wide">Master</span>
                                        </td>
                                        <td>April 18, 2017</td>
                                        <td class="text-primary">$24</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">9</th>
                                        <td>Rv21564</td>
                                        <td>
                                            <span class="m-badge m-badge--danger m-badge--wide">Knet</span>
                                        </td>
                                        <td>April 18, 2017</td>
                                        <td class="text-primary">$24</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">10</th>
                                        <td>Rv21564</td>
                                        <td>
                                            <span class="m-badge m-badge--info m-badge--wide">Master</span>
                                        </td>
                                        <td>April 18, 2017</td>
                                        <td class="text-primary">$24</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="m-portlet m-portlet--full-height ">
                            <div class="m-portlet__head">
                                <div class="m-portlet__head-caption">
                                    <div class="m-portlet__head-title">
                                        <h3 class="m-portlet__head-text">
                                            Invoices Difference
                                        </h3>
                                    </div>
                                </div>
                                <div class="ml-auto">
                                    <ul class="list-inline font-12 cart1-list">
                                        <li class="list-inline-item"><i class="fa fa-circle text-cyan"></i> Complete
                                        </li>
                                        <li class="list-inline-item"><i class="fa fa-circle text-metal"></i> Pending
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="m-portlet__body">
                                <div id="morris-area-chart2" style="height: 340px;"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="m-portlet m-portlet--full-height ">
                            <div class="m-portlet__head">
                                <div class="m-portlet__head-caption">
                                    <div class="m-portlet__head-title position-relative">
                                        <h3 class="m-portlet__head-text">
                                            New Customers
                                        </h3>
                                        <span class="sup-title">
                                            Check the last 10 Customers
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="m-portlet__body">
                                <div class="m-scrollable" data-scrollbar-shown="true" data-scrollable="true"
                                     data-height="300" style="overflow:hidden; height: 300px">
                                    <div class="m-widget3">
                                        <div class="m-widget3__item">
                                            <div class="m-widget3__header">
                                                <div class="m-widget3__user-img">
                                                    <img class="m-widget3__img"
                                                         src="assets/app/media/img/users/user1.jpg" alt="">
                                                </div>
                                                <div class="m-widget3__info">
                                                    <span class="m-widget3__username">
                                                        Melania Trump
                                                    </span>
                                                    <br>
                                                    <span class="m-widget3__time">
                                                        Alshroog LTD.
                                                    </span>
                                                    <br>
                                                    <span class="m-widget3__time">
															2 day ago
                                                    </span>
                                                </div>
                                                    <span class="m-widget3__status m--font-info">
														Pending
													</span>
                                            </div>
                                        </div>
                                        <div class="m-widget3__item">
                                            <div class="m-widget3__header">
                                                <div class="m-widget3__user-img">
                                                    <img class="m-widget3__img"
                                                         src="assets/app/media/img/users/user4.jpg" alt="">
                                                </div>
                                                <div class="m-widget3__info">
														<span class="m-widget3__username">
															Lebron King James
														</span>
                                                    <br>
                                                    <span class="m-widget3__time">
															Alshroog LTD.
														</span>
                                                    <br>
                                                    <span class="m-widget3__time">
															1 day ago
														</span>
                                                </div>
                                                <span class="m-widget3__status m--font-success">
														accepted
													</span>
                                            </div>
                                        </div>
                                        <div class="m-widget3__item">
                                            <div class="m-widget3__header">
                                                <div class="m-widget3__user-img">
                                                    <img class="m-widget3__img"
                                                         src="assets/app/media/img/users/user5.jpg" alt="">
                                                </div>
                                                <div class="m-widget3__info">
														<span class="m-widget3__username">
															Deb Gibson
														</span><br>
                                                    <span class="m-widget3__time">
															Alshroog LTD.
														</span>
                                                    <br>
                                                    <span class="m-widget3__time">
															3 weeks ago
														</span>
                                                </div>
                                                <span class="m-widget3__status m--font-success">
														accepted
													</span>
                                            </div>
                                        </div>
                                        <div class="m-widget3__item">
                                            <div class="m-widget3__header">
                                                <div class="m-widget3__user-img">
                                                    <img class="m-widget3__img"
                                                         src="assets/app/media/img/users/user1.jpg" alt="">
                                                </div>
                                                <div class="m-widget3__info">
                                                    <span class="m-widget3__username">
                                                        Melania Trump
                                                    </span>
                                                    <br>
                                                    <span class="m-widget3__time">
                                                        Alshroog LTD.
                                                    </span>
                                                    <br>
                                                    <span class="m-widget3__time">
															2 day ago
                                                    </span>
                                                </div>
                                                <span class="m-widget3__status m--font-info">
														Pending
													</span>
                                            </div>
                                        </div>
                                        <div class="m-widget3__item">
                                            <div class="m-widget3__header">
                                                <div class="m-widget3__user-img">
                                                    <img class="m-widget3__img"
                                                         src="assets/app/media/img/users/user4.jpg" alt="">
                                                </div>
                                                <div class="m-widget3__info">
														<span class="m-widget3__username">
															Lebron King James
														</span>
                                                    <br>
                                                    <span class="m-widget3__time">
															Alshroog LTD.
														</span>
                                                    <br>
                                                    <span class="m-widget3__time">
															1 day ago
														</span>
                                                </div>
                                                <span class="m-widget3__status m--font-success">
														accepted
													</span>
                                            </div>
                                        </div>
                                        <div class="m-widget3__item">
                                            <div class="m-widget3__header">
                                                <div class="m-widget3__user-img">
                                                    <img class="m-widget3__img"
                                                         src="assets/app/media/img/users/user5.jpg" alt="">
                                                </div>
                                                <div class="m-widget3__info">
														<span class="m-widget3__username">
															Deb Gibson
														</span><br>
                                                    <span class="m-widget3__time">
															Alshroog LTD.
														</span>
                                                    <br>
                                                    <span class="m-widget3__time">
															3 weeks ago
														</span>
                                                </div>
                                                <span class="m-widget3__status m--font-success">
														accepted
													</span>
                                            </div>
                                        </div>
                                        <div class="m-widget3__item">
                                            <div class="m-widget3__header">
                                                <div class="m-widget3__user-img">
                                                    <img class="m-widget3__img"
                                                         src="assets/app/media/img/users/user1.jpg" alt="">
                                                </div>
                                                <div class="m-widget3__info">
                                                    <span class="m-widget3__username">
                                                        Melania Trump
                                                    </span>
                                                    <br>
                                                    <span class="m-widget3__time">
                                                        Alshroog LTD.
                                                    </span>
                                                    <br>
                                                    <span class="m-widget3__time">
															2 day ago
                                                    </span>
                                                </div>
                                                <span class="m-widget3__status m--font-info">
														Pending
													</span>
                                            </div>
                                        </div>
                                        <div class="m-widget3__item">
                                            <div class="m-widget3__header">
                                                <div class="m-widget3__user-img">
                                                    <img class="m-widget3__img"
                                                         src="assets/app/media/img/users/user4.jpg" alt="">
                                                </div>
                                                <div class="m-widget3__info">
														<span class="m-widget3__username">
															Lebron King James
														</span>
                                                    <br>
                                                    <span class="m-widget3__time">
															Alshroog LTD.
														</span>
                                                    <br>
                                                    <span class="m-widget3__time">
															1 day ago
														</span>
                                                </div>
                                                <span class="m-widget3__status m--font-success">
														accepted
													</span>
                                            </div>
                                        </div>
                                        <div class="m-widget3__item">
                                            <div class="m-widget3__header">
                                                <div class="m-widget3__user-img">
                                                    <img class="m-widget3__img"
                                                         src="assets/app/media/img/users/user5.jpg" alt="">
                                                </div>
                                                <div class="m-widget3__info">
														<span class="m-widget3__username">
															Deb Gibson
														</span><br>
                                                    <span class="m-widget3__time">
															Alshroog LTD.
														</span>
                                                    <br>
                                                    <span class="m-widget3__time">
															3 weeks ago
														</span>
                                                </div>
                                                <span class="m-widget3__status m--font-success">
														accepted
													</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="m-portlet m-portlet--full-height ">
                            <div class="m-portlet__head">
                                <div class="m-portlet__head-caption">
                                    <div class="m-portlet__head-title position-relative">
                                        <h3 class="m-portlet__head-text">
                                            New Customers not activated
                                        </h3>
                                        <span class="sup-title">
                                            Check the last 10 Customers
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="m-portlet__body">
                                <div class="m-scrollable" data-scrollbar-shown="true" data-scrollable="true"
                                     data-height="300" style="overflow:hidden; height: 300px">
                                    <div class="m-widget3">
                                        <div class="m-widget3__item">
                                            <div class="m-widget3__header">
                                                <div class="m-widget3__user-img">
                                                    <img class="m-widget3__img"
                                                         src="assets/app/media/img/users/user1.jpg" alt="">
                                                </div>
                                                <div class="m-widget3__info">
                                                    <span class="m-widget3__username">
                                                        Melania Trump
                                                    </span>
                                                    <br>
                                                    <span class="m-widget3__time">
                                                        Alshroog LTD.
                                                    </span>
                                                    <br>
                                                    <span class="m-widget3__time">
															2 day ago
                                                    </span>
                                                </div>
                                                <span class="m-widget3__status m--font-info">
														Pending
													</span>
                                            </div>
                                        </div>
                                        <div class="m-widget3__item">
                                            <div class="m-widget3__header">
                                                <div class="m-widget3__user-img">
                                                    <img class="m-widget3__img"
                                                         src="assets/app/media/img/users/user4.jpg" alt="">
                                                </div>
                                                <div class="m-widget3__info">
														<span class="m-widget3__username">
															Lebron King James
														</span>
                                                    <br>
                                                    <span class="m-widget3__time">
															Alshroog LTD.
														</span>
                                                    <br>
                                                    <span class="m-widget3__time">
															1 day ago
														</span>
                                                </div>
                                                <span class="m-widget3__status m--font-success">
														accepted
													</span>
                                            </div>
                                        </div>
                                        <div class="m-widget3__item">
                                            <div class="m-widget3__header">
                                                <div class="m-widget3__user-img">
                                                    <img class="m-widget3__img"
                                                         src="assets/app/media/img/users/user5.jpg" alt="">
                                                </div>
                                                <div class="m-widget3__info">
														<span class="m-widget3__username">
															Deb Gibson
														</span><br>
                                                    <span class="m-widget3__time">
															Alshroog LTD.
														</span>
                                                    <br>
                                                    <span class="m-widget3__time">
															3 weeks ago
														</span>
                                                </div>
                                                <span class="m-widget3__status m--font-success">
														accepted
													</span>
                                            </div>
                                        </div>
                                        <div class="m-widget3__item">
                                            <div class="m-widget3__header">
                                                <div class="m-widget3__user-img">
                                                    <img class="m-widget3__img"
                                                         src="assets/app/media/img/users/user1.jpg" alt="">
                                                </div>
                                                <div class="m-widget3__info">
                                                    <span class="m-widget3__username">
                                                        Melania Trump
                                                    </span>
                                                    <br>
                                                    <span class="m-widget3__time">
                                                        Alshroog LTD.
                                                    </span>
                                                    <br>
                                                    <span class="m-widget3__time">
															2 day ago
                                                    </span>
                                                </div>
                                                <span class="m-widget3__status m--font-info">
														Pending
													</span>
                                            </div>
                                        </div>
                                        <div class="m-widget3__item">
                                            <div class="m-widget3__header">
                                                <div class="m-widget3__user-img">
                                                    <img class="m-widget3__img"
                                                         src="assets/app/media/img/users/user4.jpg" alt="">
                                                </div>
                                                <div class="m-widget3__info">
														<span class="m-widget3__username">
															Lebron King James
														</span>
                                                    <br>
                                                    <span class="m-widget3__time">
															Alshroog LTD.
														</span>
                                                    <br>
                                                    <span class="m-widget3__time">
															1 day ago
														</span>
                                                </div>
                                                <span class="m-widget3__status m--font-success">
														accepted
													</span>
                                            </div>
                                        </div>
                                        <div class="m-widget3__item">
                                            <div class="m-widget3__header">
                                                <div class="m-widget3__user-img">
                                                    <img class="m-widget3__img"
                                                         src="assets/app/media/img/users/user5.jpg" alt="">
                                                </div>
                                                <div class="m-widget3__info">
														<span class="m-widget3__username">
															Deb Gibson
														</span><br>
                                                    <span class="m-widget3__time">
															Alshroog LTD.
														</span>
                                                    <br>
                                                    <span class="m-widget3__time">
															3 weeks ago
														</span>
                                                </div>
                                                <span class="m-widget3__status m--font-success">
														accepted
													</span>
                                            </div>
                                        </div>
                                        <div class="m-widget3__item">
                                            <div class="m-widget3__header">
                                                <div class="m-widget3__user-img">
                                                    <img class="m-widget3__img"
                                                         src="assets/app/media/img/users/user1.jpg" alt="">
                                                </div>
                                                <div class="m-widget3__info">
                                                    <span class="m-widget3__username">
                                                        Melania Trump
                                                    </span>
                                                    <br>
                                                    <span class="m-widget3__time">
                                                        Alshroog LTD.
                                                    </span>
                                                    <br>
                                                    <span class="m-widget3__time">
															2 day ago
                                                    </span>
                                                </div>
                                                <span class="m-widget3__status m--font-info">
														Pending
													</span>
                                            </div>
                                        </div>
                                        <div class="m-widget3__item">
                                            <div class="m-widget3__header">
                                                <div class="m-widget3__user-img">
                                                    <img class="m-widget3__img"
                                                         src="assets/app/media/img/users/user4.jpg" alt="">
                                                </div>
                                                <div class="m-widget3__info">
														<span class="m-widget3__username">
															Lebron King James
														</span>
                                                    <br>
                                                    <span class="m-widget3__time">
															Alshroog LTD.
														</span>
                                                    <br>
                                                    <span class="m-widget3__time">
															1 day ago
														</span>
                                                </div>
                                                <span class="m-widget3__status m--font-success">
														accepted
													</span>
                                            </div>
                                        </div>
                                        <div class="m-widget3__item">
                                            <div class="m-widget3__header">
                                                <div class="m-widget3__user-img">
                                                    <img class="m-widget3__img"
                                                         src="assets/app/media/img/users/user5.jpg" alt="">
                                                </div>
                                                <div class="m-widget3__info">
														<span class="m-widget3__username">
															Deb Gibson
														</span><br>
                                                    <span class="m-widget3__time">
															Alshroog LTD.
														</span>
                                                    <br>
                                                    <span class="m-widget3__time">
															3 weeks ago
														</span>
                                                </div>
                                                <span class="m-widget3__status m--font-success">
														accepted
													</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- end:: Body -->

    <!-- begin::Footer -->
    <?php include "footer.php"?>
    <!-- end::Footer -->
</div>

<!-- end:: Page -->

<!-- begin::Scroll Top -->
<div id="m_scroll_top" class="m-scroll-top">
    <i class="la la-arrow-up"></i>
</div>

<!-- end::Scroll Top -->


<?php include "javascript.php" ?>

<!--begin::Page Scripts -->
<script src="vendors/morris.js/morris.js" type="text/javascript"></script>
<script src="assets/app/js/dashboard.js" type="text/javascript"></script>

<!--end::Page Scripts -->
</body>

<!-- end::Body -->
</html>