@extends('layouts.app')
@push('head')
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />
@endpush


@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8" style="direction: rtl">
                <div class="card">
                    <div class="card-header" >{{ __('اطلاعات درخواست') }}</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('sendRequest') }}">
                            @csrf
                            <div class="form-group row">
                                <label for="course_name" class="col-md-4 col-form-label text-md-right">{{ __('نام درس') }}</label>

                                <div class="col-md-6">
                                    <select class="js-example-basic-single form-control" name="course_name">
                                        @foreach($courses as $course)
                                            <option value="{{$course['id']}}">{{$course['name']}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="min_grade" class="col-md-4 col-form-label text-md-right">{{ __('حداقل نمره درخواستی') }}</label>

                                <div class="col-md-6">
                                    <input id="min_grade" type="text" class="form-control{{ $errors->has('min_grade') ? ' is-invalid' : '' }}" name="min_grade" value="{{ old('min_grade') }}" required autofocus>

                                    @if ($errors->has('name'))
                                        <span class="invalid-feedback">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row  skill-row">
                                <label for="pre_skill" class="col-md-4 col-form-label text-md-right">{{ __('مهارت') }}</label>

                                <div class="col-md-6">
                                    <input id="pre_skill" class="form-control" name="skill[]" required autofocus>

                                </div>
                                <div class="col-md-2">
                                    <button id="addSkill" class="btn btn-primary add-skill" type="button">افزودن مهارت</button>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="p_courses" class="col-md-4 col-form-label text-md-right">{{ __('دروس پیشنیاز') }}</label>

                                <div class="col-md-6">
                                    <select class="js-example-basic-multiple form-control" name="p_courses[]" multiple="multiple">
                                        @foreach($courses as $course)
                                            <option value="{{$course['id']}}">{{$course['name']}}</option>
                                        @endforeach
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

        var input = '<div class="form-group row skill-row">\
            <label for="skill2" class="col-md-4 col-form-label text-md-right">مهارت</label>\
                 <div class="col-md-6">\
                     <input id="skill2" class="form-control" name="skill[]" required autofocus>\
                 </div>\
             </div>';
     $('.add-skill').click(function(){
         index = $('.skill-row').length
         $($('.skill-row')[index-1]).after($(input));
     })

    </script>
@endpush
