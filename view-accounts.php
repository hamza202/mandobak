<!DOCTYPE html>

<html lang="en">

<!-- begin::Head -->
<head>
    <meta charset="utf-8"/>
    <title>Metronic | Dashboard</title>
    <meta name="description" content="Latest updates and statistic charts">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">

    <?php include 'style.php' ?>
    <link href="assets/vendors/custom/datatables/datatables.bundle.css" rel="stylesheet" type="text/css"/>

    <!--RTL version:<link href="assets/vendors/custom/datatables/datatables.bundle.rtl.css" rel="stylesheet" type="text/css" />-->

    <!--begin::Page Vendors Styles -->


</head>

<!-- end::Head -->

<!-- begin::Body -->
<body class="m-page--fluid m--skin- m-content--skin-light2 m-header--fixed m-header--fixed-mobile m-aside-left--enabled m-aside-left--skin-dark m-aside-left--fixed m-aside-left--offcanvas m-footer--push m-aside--offcanvas-default">

<!-- begin:: Page -->
<div class="m-grid m-grid--hor m-grid--root m-page">

    <!-- BEGIN: Header -->
    <?php include "header.php" ?>
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
                        <h3 class="m-subheader__title text-capitalize ">all corporate accounts</h3>
                    </div>
                </div>
            </div>
            <!-- END: Subheader -->
            <div class="m-content">
                <div class="row">
                    <div class="col-12">
                        <div class="m-portlet m-portlet--full-height ">
                            <div class="m-portlet__head">
                                <div class="m-portlet__head-caption">
                                    <div class="m-portlet__head-title">
                                        <h3 class="m-portlet__head-text">
                                            All Accounts
                                        </h3>
                                    </div>
                                </div>
                                <div class="ml-auto pt-3">
                                    <a href="add-account.php"
                                       class="btn btn-outline-success m-btn m-btn--custom m-btn--icon m-btn--pill m-btn--air">
                                           <span>
                                               <i class="la la-plus"></i>
                                               <span>Add New Account</span>
                                           </span>
                                    </a>
                                </div>
                            </div>
                            <div class="m-portlet__body">
                                <table class="table table-striped- table-bordered table-hover table-checkable"
                                       id="m_table_1">
                                    <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Company name</th>
                                        <th>Phone</th>
                                        <th>Email</th>
                                        <th>Type</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Name</td>
                                        <td>0123456789</td>
                                        <td>info@gmail.cpm</td>
                                        <td>2</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>Name</td>
                                        <td>0123456789</td>
                                        <td>info@gmail.cpm</td>
                                        <td>1</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>Name</td>
                                        <td>0123456789</td>
                                        <td>info@gmail.cpm</td>
                                        <td>3</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td>Name</td>
                                        <td>0123456789</td>
                                        <td>info@gmail.cpm</td>
                                        <td>1</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>1</td>
                                        <td>Name</td>
                                        <td>0123456789</td>
                                        <td>info@gmail.cpm</td>
                                        <td>2</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>Name</td>
                                        <td>0123456789</td>
                                        <td>info@gmail.cpm</td>
                                        <td>1</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>Name</td>
                                        <td>0123456789</td>
                                        <td>info@gmail.cpm</td>
                                        <td>3</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td>Name</td>
                                        <td>0123456789</td>
                                        <td>info@gmail.cpm</td>
                                        <td>1</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>1</td>
                                        <td>Name</td>
                                        <td>0123456789</td>
                                        <td>info@gmail.cpm</td>
                                        <td>2</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>Name</td>
                                        <td>0123456789</td>
                                        <td>info@gmail.cpm</td>
                                        <td>1</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>Name</td>
                                        <td>0123456789</td>
                                        <td>info@gmail.cpm</td>
                                        <td>3</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td>Name</td>
                                        <td>0123456789</td>
                                        <td>info@gmail.cpm</td>
                                        <td>1</td>
                                        <td></td>
                                    </tr>
                                    </tbody>
                                </table>

                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <!-- end:: Body -->

    <!-- begin::Footer -->
    <?php include "footer.php" ?>
    <!-- end::Footer -->
</div>

<!-- end:: Page -->

<!-- begin::Scroll Top -->
<div id="m_scroll_top" class="m-scroll-top">
    <i class="la la-arrow-up"></i>
</div>

<!-- end::Scroll Top -->


<?php include "javascript.php" ?>

<!--begin::Page Vendors -->
<script src="assets/vendors/custom/datatables/datatables.bundle.js" type="text/javascript"></script>

<!--end::Page Vendors -->

<!--begin::Page Scripts -->
    <!--Data table Start-->
    <script>
        var DatatablesBasicHeaders = function () {

            var initTable1 = function () {
                var table = $('#m_table_1');

                // begin first table
                table.DataTable({
                    responsive: true,
                    columnDefs: [
                        {
                            targets: 5,
                            title: 'Actions',
                            orderable: false,
                            render: function (data, type, full, meta) {
                                return `
                            <a href="#" class="m-portlet__nav-link btn m-btn m-btn--hover-brand m-btn--icon m-btn--icon-only m-btn--pill" title="Edit">
                              <i class="la la-edit"></i>
                            </a>
                            <a href="#" class="m-portlet__nav-link btn m-btn m-btn--hover-brand m-btn--icon m-btn--icon-only m-btn--pill" title="View">
                              <i class="far fa-eye"></i>
                            </a>
                            <button type="button" class="m-portlet__nav-link btn m-btn m-btn--hover-danger m-btn--icon m-btn--icon-only m-btn--pill m_sweetalert_demo_9"> <i class="far fa-stop-circle"></i></button>`
                            },
                        },
                        {
                            targets: 4,
                            render: function (data, type, full, meta) {
                                var status = {
                                    1: {'title': 'Shop & Restaurant ', 'state': 'danger'},
                                    2: {'title': 'Taxi', 'state': 'primary'},
                                    3: {'title': 'Transportation', 'state': 'accent'},
                                };
                                if (typeof status[data] === 'undefined') {
                                    return data;
                                }
                                return '<span class="m-badge m-badge--' + status[data].state + ' m-badge--dot"></span>&nbsp;' +
                                    '<span class="m--font-bold m--font-' + status[data].state + '">' + status[data].title + '</span>';
                            },
                        },
                    ],
                });
            };

            return {

                //main function to initiate the module
                init: function () {
                    initTable1();
                },

            };

        }();

        jQuery(document).ready(function () {
            DatatablesBasicHeaders.init();
        });
    </script>
    <script>
        //== Class definition
        var SweetAlert2Demo = function() {

            //== Demos
            var initDemos = function() {

                $('.m_sweetalert_demo_9').click(function(e) {
                    var delll = this;
                    swal({
                        title: 'Are you sure?',
                        text: "You won't Disable this account!",
                        type: 'warning',
                        showCancelButton: true,
                        confirmButtonText: 'Yes, Disable it!',
                        cancelButtonText: 'No, cancel!',
                        reverseButtons: true
                    }).then(function(result){
                        if (result.value) {
                            swal(
                                'Deleted!',
                                'Your file has been Disabled.',
                                'success',
                                $(delll).find(".far").toggleClass('fa-stop-circle'),
                                $(delll).find(".far").toggleClass('fa-play-circle'),
                                $(delll).removeClass('m_sweetalert_demo_9'),
                                $(delll).addClass('Enable-account')
                            )
                            // result.dismiss can be 'cancel', 'overlay',
                            // 'close', and 'timer'
                        } else if (result.dismiss === 'cancel') {
                            swal(
                                'Cancelled',
                                'Your imaginary file is safe :)',
                                'error'
                            )
                        }
                    });
                });
            };

            return {
                //== Init
                init: function() {
                    initDemos();
                },
            };
        }();

        //== Class Initialization
        jQuery(document).ready(function() {
            SweetAlert2Demo.init();
        });

        $( ".Enable-account" ).on( "click", function() {
            this.addClass('m_sweetalert_demo_9');
            this.removeClass("Enable-account");
        });
    </script>
<!--end::Page Scripts -->
</body>

<!-- end::Body -->
</html>