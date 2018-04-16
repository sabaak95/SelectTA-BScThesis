@extends('layouts.app')
@push('head')
<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />
@endpush


@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header" >{{ __('اطلاعات درسهای نیازمند تدریسیار ') }}</div>
                <div class="card-body" style="direction:rtl">
                    <table  border="1">
                        <tr>
                            <th>شناسه درخواست</th>
                            <th>نام درس</th>
                            <th>حداقل نمره مورد نیاز</th>
                            <th>لیست مهارتهای مورد نظر</th>
                            <th>لیست دروس پیش نیاز</th>
                        </tr>
                        @foreach($reqs as $req)
                            <tr>
                                <td>
                                    {{$req['id']}}
                                </td>
                                <td>
                                    {{$req['course']['name']}}
                                </td>
                                <td>
                                    {{$req['min_grade']}}
                                </td>
                                <td>
                                    {{join(", ",$req['pre_skills'])}}
                                </td>
                                <td>
                                    @foreach($req['pre'] as $re)
                                    {{$re['name']}}
                                    @endforeach
                                </td>

                            </tr>
                        @endforeach
                    </table>
                    <a href="/makeOffer"> ایجاد پیشنهاد </a>
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
