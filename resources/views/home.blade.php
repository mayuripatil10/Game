@extends('layouts.app')
<script>

        $(document).ready(function() {
        $("#show").click(function () {
            hello;
            // $( ".row container" ).show()
        });
    });



</script>
@section('content')
    <div class="col-md-8">
        <div class="card">
            <div class="card-body">
            <div class="card-header">Dashboard</div>

            <div class="container">
    <div class="row justify-content-center">
        {{--<div class="panel-body">--}}
            {{--{{ Auth::user()->email }}--}}
        {{--</div>--}}
        @foreach($users as $user)
       @if(Auth::user()->email==$user->email)

                @if (($user->optradio=='teacher')||($user->optradio=='parent'))
            {{--welcome--}}
                <div class="item ">
                    <input type=button onClick="location.href='page.html'" value='click here'>
                    <p id="userid"></p>
                </div>
                @endif
            @endif
        @endforeach
    </div>

            </div>
        </div>
        </div>
        {{--<div class="col-md-8">--}}
            {{--<div class="card">--}}
                {{--<div class="card-header">Dashboard</div>--}}

                {{--<div class="card-body">--}}
                    {{--@if (session('status'))--}}
                        {{--<div class="alert alert-success" role="alert">--}}
                        {{--</div>--}}
                        {{--</div>--}}
                    {{--@endif--}}
                {{--<div class="row container">--}}
                    {{--@foreach($users as $user)--}}

                        {{--@if($user->optradio =='Teacher')--}}
                            {{--{{ $user->email }}--}}

                            {{--<button id="hide">Hide</button>--}}

                            {{--<p>This is a paragraph with little content.</p>--}}


                        {{--@endif--}}
                    {{--@endforeach--}}
                    {{--You are logged in!--}}



@endsection
