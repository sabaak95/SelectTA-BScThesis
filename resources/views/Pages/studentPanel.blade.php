@extends('layouts.app')
@push('head')
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />
@endpush


@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header" >{{ __('اطلاعات کاربر') }}</div>

                    <div class="card-body" style="direction:rtl">
                        نام:{{Auth::User()->name}}
                        <br>
                        ایمیل:{{Auth::User() ->email}}
                        <br>
                        <a href="/requestsReceived"> مشاهده درخواست های موجود</a>
                        <br>
                        <a href="/offersSent">مشاهده پیشنهادات ارسال شده</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


@push('script')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>
    <script>
        $(document).ready(function() {
            $('.js-example-basic-multiple').select2();
        });
    </script>
@endpush
