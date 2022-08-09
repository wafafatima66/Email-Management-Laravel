<!DOCTYPE html>
<html lang="en">

<head>
<title>New Email</title>

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
<style type="text/css">
    .header_title{
        color: white;
        font-weight: bold;
        font-size: 20px;
    }
    .select2-container--default .select2-selection--single .select2-selection__rendered {
    background-color: #fff;
    color: #000;
    padding: 8px 30px 8px 20px;
}
/* attachments */
.img-thumb {
  max-height: 100px;
  border: 2px solid none;
  border-radius:3px;
  padding: 1px;
  cursor: pointer;
}
.img-thumb-wrapper {
  display: inline-block;
  margin: 10px 10px 0 0;
}
.remove {
  display: block;
  /* background: #444; */
  border: 1px solid none;
  color: #ff5252;
  text-align: center;
  cursor: pointer;
  padding:12px;
  font-size: 30px;
}
.remove:hover {
  background: white;
  color: red;
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
                                        <div class="user-head row header_title">Compose a New Email</div>
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
                                       
<div class="col-lg-12 col-xl-9">
    <div class="tab-content" id="pills-tabContent">
        <div class="tab-pane fade show active" id="e-inbox" role="tabpanel">
            <form action="{{ route('sendMail') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="mail-body">
                    <div class="mail-body">
                        <div class="mail-body-content">
                            {{-- <form class="form-material"> --}}
                                <div class="form-group form-primary">
                                    <label class="float-label">Send To</label>
                                    <input type="email" name="send_to"
                                        class="form-control @if ($errors->has('send_to'))is-danger @endif">
                                    <span class="form-bar"></span>
                                    @if ($errors->has('send_to'))
                                    <p class="text-danger">{{ $errors->first('send_to') }}
                                    </p>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group form-primary">
                                                <label class="float-label">From</label>
                                                <select
                                                    class="form-control select2 @if ($errors->has('send_from'))is-danger @endif"
                                                    name="send_from">
                                                    <option class="float-label" value="">Select From</option>
                                                    <option class="float-label" value="wafa@gmail.com">wafa@gmail.com
                                                    </option>
                                                    <option class="float-label" value="wafafatima66@gmail.com">
                                                        wafafatima66@gmail.com</option>
                                                </select>
                                                @if ($errors->has('send_from'))
                                                <p class="text-danger">{{ $errors->first('send_from') }}
                                                </p>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group form-primary">
                                                <label class="float-label">Lead</label>
                                                <select
                                                    class="select2 form-control @if ($errors->has('lead'))is-danger @endif "
                                                    name="lead">
                                                    <option class="float-label" value="">Select Lead</option>
                                                    @foreach ($leads as $lead)
                                                    <option value="{{ $lead->job_number }}">{{ $lead->job_number }}
                                                    </option>
                                                    @endforeach
                                                </select>
                                                @if ($errors->has('lead'))
                                                <p class="text-danger">{{ $errors->first('lead') }}
                                                </p>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group form-primary">
                                    <label class="float-label">Subject</label>
                                    <input type="text" name="subject"
                                        class="form-control @if ($errors->has('subject'))is-danger @endif">
                                    <span class="form-bar"></span>
                                    @if ($errors->has('subject'))
                                    <p class="text-danger">{{ $errors->first('subject') }}
                                    </p>
                                    @endif
                                </div>

                                <div
                                    class="form-group form-primary summernote-text @if ($errors->has('message'))is-danger @endif">
                                    <label class="float-label">Message</label>
                                    <textarea name="message" id="summernote"></textarea>
                                    @if ($errors->has('message'))
                                    <p class="text-danger">{{ $errors->first('message') }}
                                    </p>
                                    @endif
                                </div>

                                <div class="form-group form-primary">
                                    <label class="float-label">Attachments</label>
                                    <input type="file" name="attachments[]" class="form-control" multiple id="files">
                                    {{-- <input type="file" id="files" name="files[]" multiple class="form-control"/> --}}
                                </div>
                               
                                <input type="hidden" name="image-source" 
                                value="https://img.favpng.com/4/12/12/paper-document-computer-icons-clip-art-png-favpng-X3wrvsPk6a0ti40WvLv79NUuj.jpg" 
                                id="image-source" />

                        </div>
                    </div>
                    <button type="submit" class="btn btn-success">Sent Email</button>
                </div>
            </form>
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

<script type="text/javascript">
$('#summernote').summernote({
    height: 200,
    placeholder: 'Write Here...',
});

$(document).ready(function () {
    $('.select2').select2();
});

// attachments



$(document).ready(function() {
  
  if (window.File && window.FileList && window.FileReader) {
    var source = $("#image-source").val();
    var newFileList = [];
    var fileTypes = ['jpg', 'jpeg', 'png','webp'];
    $("#files").on("change", function(e) {
        // var newFileList = Array.from(e.target.files);
      var files = e.target.files,
        filesLength = files.length;
      for (var i = 0; i < filesLength; i++) {
        newFileList.push(this.files[i])
        var f = files[i]
        var extension = f.name.split('.').pop().toLowerCase(),  //file extension from input file
            isSuccess = fileTypes.indexOf(extension) > -1;
            if (isSuccess) {
                var fileReader = new FileReader();
        fileReader.onload = (function(e) {
          var file = e.target;
          $("<div class=\"img-thumb-wrapper card shadow\">" +
            "<img class=\"img-thumb\" src=\"" + e.target.result + "\" title=\"" + file.name + "\" /> " +
            // "<br/><span class=\"remove\"><i class='fa fa-window-close' aria-hidden='true'></i></span>" +
            "<br/>" +
            "</div>").insertAfter("#files");
        //   $(".remove").click(function(){
        //     $(this).parent(".img-thumb-wrapper").remove();
        //     newFileList.splice(f,1);
        //   });
        });
        fileReader.readAsDataURL(f);
      }else {
        var fileReader = new FileReader();
        fileReader.onload = (function(e) {
          var file = e.target;
          $("<div class=\"img-thumb-wrapper card shadow\">" +
            "<img class=\"img-thumb\" src=\""+source+"\" title=\"" + file.name + "\" /> " +
            // "<br/><span class=\"remove\"><i class='fa fa-window-close' aria-hidden='true'></i></span>" +
            "<br/>" +
            "</div>").insertAfter("#files");
        //   $(".remove").click(function(){
        //     $(this).parent(".img-thumb-wrapper").remove();
        //     console.log(f)
        //     newFileList.splice(f,1);
        //   });
        });
        fileReader.readAsDataURL(f);
      }
     
    }
    
    });
  } else {
    alert("Your browser doesn't support to File API")
  }

  $(".remove").click(function(){
            $(this).parent(".img-thumb-wrapper").remove();
            newFileList.splice(f,1);
          });
});
</script>
</body>

</html>

