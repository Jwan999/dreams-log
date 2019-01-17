@extends('master')

@section('content')


    <div class="card-body masterCardBody ">

        <div class="row">

            <div class="col-2">

                <button type="button" class="btn btn-primary fixed" data-toggle="modal"
                        data-target="#exampleModalCenter">
                    +
                </button>

            </div>

            <div class="col cardsRow">
                <div class="row">
{{--                    @include('flash-message')--}}

                    @foreach($dreams as $card)
                        <div class="card dreamCard m-2 col-5" style="width: 20rem ; height: 400px">

                            <div class="card-body m-2">
                                <h5 class="card-title">{{$card['dream_title']}}</h5>
                                <p class="card-text">{{$card['a_dream']}}</p>
                            </div>

                        </div>

                    @endforeach

                </div>


            </div>

            <div class="col-`1">

            </div>

        </div>


    </div>




    <!-- Modal -->
    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog"
         aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalCenterTitle">Modal title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <div style="margin-top: 1%" class="row align-items-center justify-content-center">
                        <form class="col-md-6" method="post" action="{{url('dreams')}}">

                            <label for="exampleInputEmail1">The title of your dream?</label>
                            <input name="dream_title" class="form-control" id="exampleInputEmail1"
                                   aria-describedby="emailHelp"
                                   placeholder="Za title dear">
                            <br>
                            <label for="exampleInputPassword1">Your dream goes here</label>
                            <input name="a_dream" class="form-control" id="exampleInputPassword1"
                                   placeholder="Za dream dear">
                            <br>
                            <button id="hit" style=" background-color: #817c8b" class="btn btn-info">Give me
                                power
                            </button>

                            {{csrf_field()}}

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>






@endsection




