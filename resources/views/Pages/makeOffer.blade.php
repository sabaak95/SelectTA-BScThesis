@extends('layouts.app')
@push('head')
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />
@endpush


@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8" style="direction: rtl">
                <div class="card">
                    <div class="card-header" >{{ __('اطلاعات پیشنهاد') }}</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('sendOffer') }}">
                            @csrf
                            <div class="form-group row">
                                <label for="pre" class="col-md-4 col-form-label text-md-right">{{ __('نام درس') }}</label>

                                <div class="col-md-6">
                                    {{$req['course']['name']}}
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('نمره دریافتی در درس') }}</label>

                                <div class="col-md-6">
                                    <input id="grade" type="text" class="form-control{{ $errors->has('grade') ? ' is-invalid' : '' }}" name="grade" value="{{ old('grade') }}" required autofocus>

                                    @if ($errors->has('grade'))
                                        <span class="invalid-feedback">
                                        <strong>{{ $errors->first('grade') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>


                            <div class="form-group row">
                                <label for="pre" class="col-md-4 col-form-label text-md-right">{{ __('دروس پیشنیاز') }}</label>

                                <div class="col-md-6">
                                    <select class="js-example-basic-multiple" name="states[]" multiple="multiple">
                                        <option value="AL">Alabama</option>
                                        <option value="WY">Wyoming</option>
                                    </select>
                                </div>
                            </div>



                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('ثبت') }}
                                    </button>
                                </div>
                            </div>
                        </form>
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
        $(document).ready(function() {
            $('.js-example-basic-single').select2();
        });
    </script>
@endpush
