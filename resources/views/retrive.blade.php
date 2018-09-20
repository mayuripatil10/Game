<html>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<head>
    <script>
        $(document).ready(function() {
       $('#submit').click(function(event){
     var email=$('#email').val()
           // alert(email)
          document.getElementById (email)
       });
        });
    </script>
</head>
<input type="text" name="email" value="" id="email">
<input type="submit" name="submit" id="submit">
</html>

{



<div class="contaniner">

            <div class="row justify-content-center">
      @foreach($users as $user)
                @if('a@gmail.com'== $user->email)
                    {{$user->optradio}}
                @endif
    @endforeach
        </div>
    </div>
<p id="demo"></p>
<label for="email" class="col-sm-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                                <div class="col-md-6">
                                    <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" >



                                </div>
<button onclick="myfunction()">submit</button>