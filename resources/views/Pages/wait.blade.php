@extends('layouts.app')
@push('head')
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />
@endpush


@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8" style="direction: rtl">
                <div class="card">
                    <div class="card-header" >{{ __('پیام سیستم') }}</div>

                    <div class="card-body">


                            <div class="form-group row">


                                <div class="col-md-8" style="direction:rtl">
                                  اطلاعات ثبت نام شما با موفقیت انجام شد. لطفا منتظر پیام تایید از طرف ادمین سیستم باشید
                                </div>
                            </div>



                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


