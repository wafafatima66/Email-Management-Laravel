<!DOCTYPE html>
<html lang="en">

<head>
    <title>All Emails</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description"
        content="Gradient Able Bootstrap admin template made using Bootstrap 4 and it has huge amount of ready made feature, UI components, pages which completely fulfills any dashboard needs." />
    <meta name="keywords"
        content="bootstrap, bootstrap admin template, admin theme, admin dashboard, dashboard template, admin template, responsive" />
    <meta name="author" content="Phoenixcoded" />
    <!-- Favicon icon -->
    <link rel="icon" href="../files/assets/images/favicon.ico" type="image/x-icon">
    <!-- Google font-->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,500" rel="stylesheet">
    {{-- select2 --}}
    <link href="{{asset('css/select2.min.css')}}" rel="stylesheet" />
    <!-- Required Fremwork -->
    <link rel="stylesheet" type="text/css" href="{{asset('')}}css/bootstrap.min.css">
    <!-- waves.css -->
    <link rel="stylesheet" href="{{asset('')}}css/waves.min.css" type="text/css" media="all">
    <!-- themify-icons line icon -->
    <link rel="stylesheet" type="text/css" href="{{asset('')}}css/themify-icons.css">
    <!-- ico font -->
    <link rel="stylesheet" type="text/css" href="{{asset('')}}css/icofont.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" type="text/css" href="{{asset('')}}css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <!-- Style.css -->
    <link rel="stylesheet" type="text/css" href="{{asset('')}}css/style.css">
    <link rel="stylesheet" type="text/css" href="{{asset('')}}css/jquery.mCustomScrollbar.css">
    <link rel="stylesheet" href="https://unpkg.com/@icon/icofont/icofont.css">

    {{-- yajra --}}
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" />
    <link href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css" rel="stylesheet">

    <style type="text/css">
        .header_title {
            color: white;
            font-weight: bold;
            font-size: 20px;
        }
        .datatables-lead  a {
            color: #222 !important;
            font-weight: 500 !important ; 
        }
        .datatables-lead  a:hover{
            text-decoration: none;
        }

    </style>

</head>

<body>

    <!-- Pre-loader start -->
    <div class="theme-loader">
        <div class="loader-track">
            <div class="preloader-wrapper">
                <div class="spinner-layer spinner-blue">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="gap-patch">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>
                <div class="spinner-layer spinner-red">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="gap-patch">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>

                <div class="spinner-layer spinner-yellow">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="gap-patch">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>

                <div class="spinner-layer spinner-green">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="gap-patch">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Pre-loader end -->

    <div id="pcoded" class="pcoded">
        <div class="pcoded-overlay-box"></div>
        <div class="pcoded-container navbar-wrapper">

            <!-- Sidebar inner chat end-->
            <div class="pcoded-main-container">
                <div class="pcoded-wrapper">
                    <nav class="pcoded-navbar">
                        <div class="sidebar_toggle"><a href="#"><i class="icon-close icons"></i></a></div>
                    </nav>
                    <div class="pcoded-content">
                        <div class="pcoded-inner-content">
                            <!-- Main-body start -->
                            <div class="main-body">
                                <div class="page-wrapper">

                                    <div class="page-body">
                                        <div class="card">
                                            <!-- Email-card start -->
                                            <div class="card-block email-card">
                                                <div class="row">
                                                    <div class="col-lg-12 col-xl-3">
                                                        <div class="user-head row header_title">All Emails -
                                                            {{ ucfirst($typeVal)}}</div>
                                                    </div>
                                                    <div class="col-lg-12 col-xl-9">
                                                        <div class="mail-box-head row">
                                                            <div class="col-auto">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <!-- Left-side section start -->
                                                    <div class="col-lg-12 col-xl-3 mt-3">
                                                        <div class="user-body">

                                                            {{-- <div class="p-20 text-center">
                                                        <a href="{{route('create')}}"
                                                            class="btn btn-danger waves-effect">Compose</a>
                                                        </div> --}}

                                                        <ul class="page-list nav nav-tabs flex-column" id="pills-tab"
                                                            role="tablist">

                                                            <li class="nav-item mail-section">
                                                                <a class="nav-link waves-effect d-block @if (request()->is('create'))
                                                                    active
                                                                    @endif" href="{{route('create')}}">
                                                                    <i class="icofont icofont-inbox"></i> Compose
                                                                    {{-- <span class="label label-primary f-right"></span> - --}}
                                                                </a>
                                                            </li>

                                                            <li class="nav-item mail-section">
                                                                <a class="nav-link waves-effect d-block @if (request()->is('emails/inbox'))
                                                                    active
                                                                    @endif " href="{{route('emails', 'inbox')}}">
                                                                    <i class="icofont icofont-inbox"></i> Inbox
                                                                    <span
                                                                        class="label label-primary f-right">{{ $inbox_count }}</span>
                                                                </a>
                                                            </li>
                                                            <li class="nav-item mail-section">
                                                                <a class="nav-link waves-effect d-block @if (request()->is('emails/Draft'))
                                                                    active
                                                                    @endif" href="{{route('emails', 'Draft')}}">
                                                                    <i class="icofont icofont-file-text"></i> Drafts
                                                                    <span
                                                                        class="label label-primary f-right">{{ $draft_count }}</span>
                                                                </a>
                                                            </li>
                                                            <li class="nav-item mail-section">
                                                                <a class="nav-link waves-effect d-block @if (request()->is('emails/Sent_email'))
                                                                    active
                                                                    @endif" href="{{route('emails', 'Sent_email')}}">
                                                                    <i class="icofont icofont-paper-plane"></i> Sent
                                                                    Mail
                                                                    <span
                                                                        class="label label-primary f-right">{{ $sentmail_count }}</span>
                                                                </a>
                                                            </li>
                                                            <li class="nav-item mail-section">
                                                                <a class="nav-link waves-effect d-block @if (request()->is('emails/trash'))
                                                                    active
                                                                    @endif" href="{{route('emails', 'trash')}}">
                                                                    <i class="icofont icofont-ui-delete"></i> Trash
                                                                    <span
                                                                        class="label label-info f-right">{{ $trash_count }}</span>
                                                                </a>
                                                            </li>
                                                            <li class="nav-item mail-section">
                                                                <a class="nav-link waves-effect d-block @if (request()->is('settings'))
                                                                    active
                                                                    @endif" href="{{route('settings')}}">
                                                                    <i class="icofont icofont-ui-delete"></i> Settings
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>

                                                @include('layouts.flash')

                                                <input type="hidden" value="{{$typeVal}}" class="typeval">
                                                <div class="col-lg-12 col-xl-9">
                                                    <div class="mail-body">
                                                        <div class="mail-body-content">
                                                            <div class="table-responsive">
                                                                <table class="datatables-lead table '">
                                                                    <thead>
                                                                        <tr class="unread">
                                                                            {{-- <th class=""><input type="checkbox" id="select_all"></th> --}}
                                                                            <th>
                                                                                <div class="check-star">
                                                                                    <div
                                                                                        class="checkbox-fade fade-in-primary checkbox">
                                                                                        <label>
                                                                                            <input type="checkbox"
                                                                                                id="select_all">
                                                                                            <span class="cr"><i
                                                                                                    class="cr-icon icofont icofont-verification-check txt-primary"></i></span>
                                                                                        </label>
                                                                                    </div>
                                                                                </div>
                                                                            </th>
                                                                            <th>From</th>
                                                                            <th>Subject</th>
                                                                            <th>Job Id</th>
                                                                            <th>Time</th>
                                                                        </tr>
                                                                    </thead>

                                                                </table>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                        <!-- Email-card end -->
                                    </div>
                                </div>
                                <!-- Page-body start -->
                            </div>
                        </div>
                        <!-- Main-body end -->

                    </div>
                </div>
            </div>
        </div>
    </div>



    <script type="text/javascript" src="{{asset('')}}js/jquery.min.js"></script>
    <script type="text/javascript" src="{{asset('')}}js/jquery-ui.min.js"></script>
    <script type="text/javascript" src="{{asset('')}}js/popper.min.js"></script>
    <script type="text/javascript" src="{{asset('')}}js/bootstrap.min.js"></script>
    <!-- waves js -->
    <script src="{{asset('')}}js/waves.min.js"></script>
    <!-- jquery slimscroll js -->
    <script type="text/javascript" src="{{asset('')}}js/jquery.slimscroll.js"></script>
    <!-- modernizr js -->
    <script type="text/javascript" src="{{asset('')}}js/modernizr.js"></script>
    <script type="text/javascript" src="{{asset('')}}js/css-scrollbars.js"></script>
    {{-- select2 --}}
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <!-- Custom js -->
    <script src="{{asset('')}}js/pcoded.min.js"></script>
    <script src="{{asset('')}}vertical-layout.min.js"></script>
    <script src="{{asset('')}}js/jquery.mCustomScrollbar.concat.min.js"></script>
    <script type="text/javascript" src="{{asset('')}}js/script.js"></script>

    <!-- summernote css/js -->
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.js"></script>

    {{-- yajra --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>
    <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>

    <script type="text/javascript">
        $('#summernote').summernote({
            height: 200,
            placeholder: 'Write Here...',
        });

        $(document).ready(function () {
            $('.select2').select2();
        });

        // yajra

        $(document).ready(function () {
            var tables
            var typeval = $('.typeval').val();
            // console.log(typeval)
            DataTableFunction("{{ url('show-emails') }}" + "/" + typeval);
            // console.log("{{ url('show-emails') }}" + "/" + typeval);

            function DataTableFunction(url) {
                tables = $('.datatables-lead').DataTable({
                    processing: true,
                    serverSide: true,
                    buttons: [
                        'copyHtml5',
                        'excelHtml5',
                        'csvHtml5',
                        'pdfHtml5',
                        'print'
                    ],
                    ajax: url,
                    columns: [
                        {
                            name: 'checkbox',
                            data: 'checkbox',
                            orderable: false,
                            searchable: false
                        },
                        {
                            data: 'from_email'
                        },
                        {
                            data: 'subject'
                        },
                        {
                            data: 'job_id'
                        },
                        {
                            data: 'time'
                        },
                    ]
                });

            }
        });

        $("#select_all").on('change', function () {
            if ($(this).is(':checked')) {
                $(".agent_checkbox").prop('checked', true);
            } else {
                $(".agent_checkbox").prop('checked', false);
            }
        });

    </script>
</body>

</html>
