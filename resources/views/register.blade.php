<!DOCTYPE html>
<html lang="en">
<head>
    @include('layout.head')
   
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register</title>
</head>
<body>
    
    <div class="user">
        <header class="user__header">
            <h1 class="user__title">register</h1>
        </header>
        
        <form class="form" action="{{route('registerpost')}}" method="POST">
            @csrf
            @method('POST')
            <div class="form__group">
                <input type="text" placeholder="Ad" name="name" class="form__input" />
            </div>

            <div class="form__group">
                <input type="text" placeholder="SoyAd" name="lastname" class="form__input" />
            </div>
            
            <div class="form__group">
                <input type="email" placeholder="Email" name="email" class="form__input" />
            </div>
            
            <div class="form__group">
                <input type="password" placeholder="Password" name="password" class="form__input" />
            </div>
            
            <button class="btn" type="submit">Register</button>
        </form>
    </div>

    <!--start message-->

    <link rel="stylesheet" href="storage/asset/css/toastr.min.css" /> 
    <script src="storage/asset/js/toastr.min.js"></script> 

@if (session('message'))
@if(session('type') == 'info')
<script>
   toastr.info('{{ session("message") }} ');
</script>
@endif
@if(session('type') == 'success')
<script>

   toastr.success('{{ session("message") }} ');
</script>
@endif
@if(session('type') == 'warning')
<script>
   toastr.warning('{{ session("message") }} ');
</script>
@endif
@if(session('type') == 'error')
<script>
   toastr.error('{{ session("message") }} ');
</script>
@endif
@endif

</body>
</html>