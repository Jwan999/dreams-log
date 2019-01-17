<!-- Button trigger modal -->
{{--<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">--}}
    {{--ahem--}}
{{--</button>--}}

<!-- Modal -->
@if ($message = Session::get('success'))

    <div class="alert" id="alert4" tabindex="-1" role="alert" aria-labelledby="exampleModalLabel"
         aria-hidden="true">
        <div class="modal-dialog">
            <div class="alert alert-success">
                <button type="button" class="close mt-0" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>

                {{--<div class="row ">--}}
                    {{--<div class="col">--}}
                        {{--<p>smth</p>--}}
                        <strong class="message ">{{ $message }}</strong>
                    {{--</div>--}}
                {{--</div>--}}

            </div>
        </div>
    </div>
@endif


{{--<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span--}}
{{--aria-hidden="true">&times;</span></button>--}}


{{--@if ($message = Session::get('success'))--}}
{{--<div class="alert alert-success alert-block">--}}
{{--<button type="button" class="close" data-dismiss="alert">×</button>--}}
{{--<strong>{{ $message }}</strong>--}}
{{--</div>--}}
{{--@endif--}}


{{--@if ($message = Session::get('error'))--}}
{{--<div class="alert alert-danger alert-block">--}}
{{--<button type="button" class="close" data-dismiss="alert">×</button>--}}
{{--<strong>{{ $message }}</strong>--}}
{{--</div>--}}
{{--@endif--}}


{{--@if ($message = Session::get('warning'))--}}
{{--<div class="alert alert-warning alert-block">--}}
{{--<button type="button" class="close" data-dismiss="alert">×</button>--}}
{{--<strong>{{ $message }}</strong>--}}
{{--</div>--}}
{{--@endif--}}


{{--@if ($message = Session::get('info'))--}}
{{--<div class="alert alert-info alert-block">--}}
{{--<button type="button" class="close" data-dismiss="alert">×</button>--}}
{{--<strong>{{ $message }}</strong>--}}
{{--</div>--}}
{{--@endif--}}


{{--@if ($errors->any())--}}
{{--<div class="alert alert-danger">--}}
{{--<button type="button" class="close" data-dismiss="alert">×</button>--}}
{{--Please check the form below for errors--}}
{{--</div>--}}
{{--@endif--}}