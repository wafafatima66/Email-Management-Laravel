@extends('layouts.app')
@section('content')
<div class="col-lg-12 col-xl-9">

    <div class="mail-body">
        <div class="mail-body-header">
            <button type="button" class="btn btn-primary btn-xs waves-effect waves-light">
                <i class="icofont icofont-exclamation-circle"></i>
            </button>
            <button type="button" class="btn btn-success btn-xs waves-effect waves-light">
                <i class="icofont icofont-inbox"></i>
            </button>
            <button type="button" class="btn btn-danger btn-xs waves-effect waves-light">
                <i class="icofont icofont-ui-delete"></i>
            </button>
        </div>
        <div class="mail-body-content">
            <div class="table-responsive">
                <table class="table">
                    @if (count($trashs) < 1) <p>No data available</p>

                        @else
                        @foreach ($trashs as $trash)
                        <tr class="unread">
                            <td>
                                <div class="check-star">
                                    <div class="checkbox-fade fade-in-primary checkbox">
                                        <label>
                                            <input type="checkbox" value="">
                                            <span class="cr"><i
                                                    class="cr-icon icofont icofont-verification-check txt-primary"></i></span>
                                        </label>
                                    </div>
                                    <i class="icofont icofont-star text-warning"></i>
                                </div>
                            </td>
                            <td><a href="email-read.html"
                                    class="email-name waves-effect">{{ $trash->email_subject }}</a>
                            </td>
                            <td><a href="email-read.html"
                                    class="email-name waves-effect">{{ substr($trash->email_note,0,10) }}</a>
                            </td>
                            <td>Lead - {{ $trash->job_number }}</td>
                            <td class="email-attch"><a href="#"><i class="icofont icofont-clip"></i></a></td>
                            <td class="email-time">{{ $trash->created_at }}</td>
                        </tr>
                        @endforeach
                        @endif
                </table>
            </div>
        </div>
    </div>

</div>
@endsection
