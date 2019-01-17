<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

{{--<link rel="stylesheet" href="draw.css">--}}

<!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
          integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->

    <style>


        .masterCard {

            height: 80%;
            overflow-y: scroll;
            position: absolute;
            top:10%;
            right: 10%;
            left: 10%;
            bottom: 10%;
        }

        .cardBody{

            position: relative;


        }
        .ahem{
            height: 1000px;
        }
    </style>

    <title>Dreams log</title>

</head>
<body class="body">

<div class="container ">

    @include('flash-message')

            <div class="card masterCard ">

               <div class=" cardBody">
                   <div class="row nav">

                       <div class="col">
                           <ul class="nav justify-content-center">
                               <li class="nav-item">
                                   <a class="nav-link active" href="#">Active</a>
                               </li>
                               <li class="nav-item">
                                   <a class="nav-link" href="#">Link</a>
                               </li>
                               <li class="nav-item">
                                   <a class="nav-link" href="#">Link</a>
                               </li>
                               <li class="nav-item">
                                   <a class="nav-link disabled" href="#">Disabled</a>
                               </li>
                           </ul>
                       </div>
                   </div>

                   @yield('content')

               </div>

            </div>

        </div>



{{--<div class="row align-items-center justify-content-center">--}}

{{--<div class="col-md-6">--}}
{{--@if ($message = Session::get('success'))--}}
{{--<div id="alert4" class="alert alert-success" role="alert">--}}
{{--<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span--}}
{{--aria-hidden="true">&times;</span></button>--}}
{{--<strong>{{ $message }}</strong>--}}
{{--</div>--}}

{{--@endif--}}


{{--</div>--}}

{{--</div>--}}

{{--Load everything before trying to load the content--}}


<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
        integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
        integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
        crossorigin="anonymous"></script>
<script>
    // window.setTimeout(function () {
    //         $("#alert4").alert('close')
    //         ;
    //     }
    //     , 3000);


    // function close() {
    //     $("#alert4").alert('close')
    // }

    // (){$("#alert4").alert('close')},3000);
</script>


</body>
</html>