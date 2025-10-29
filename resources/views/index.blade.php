<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body>
    @auth
        @if (Auth::user()->user_type === "admin")
            <script>window.location.href='/admin';</script>
        @elseif(Auth::user()->user_type === "user")
            <script>window.location.href='/user';</script>
        @endif
    @else
        @if (isset($exeEmail))
            @if ($exeEmail == 1)
                <script>
                    Swal.fire({
                        title:'Email Not Register',
                        text:'Your email is not register please try again',
                        icon:'error',
                        timer:1500,
                        showConfirmButton:false,
                        willClose: () => {
                            window.location.href='/';
                        }
                    });
                </script>    
            @endif
        @endif

        @if (isset($exePass))
            @if ($exePass == 1)
                <script>
                    Swal.fire({
                        title:'Incorrect Password',
                        text:'Your password is incorrect please try again',
                        icon:'error',
                        timer:1500,
                        showConfirmButton:false,
                        willClose: () => {
                            window.location.href='/';
                        }
                    });
                </script>    
            @endif
        @endif
    @endauth
    {{-- Main Content --}}
    <br>

    <div style="display: flex; justify-content: center;">
        <div class="div">
            <h1 style="text-align: center; font-size: 20px; font-weight: bold;">Login</h1>
            <br>

            <form action="/login_action" method="POST">
                @csrf 
                <div class="mb-3">
                    <label class="form-label">Email address</label>
                    <input type="email" placeholder="Enter a email" name="email" class="form-control">
                </div>

                <div class="mb-3">
                    <label class="form-label">Password</label>
                    <input type="password" placeholder="Enter a password" name="pass" class="form-control">
                </div>
                <br>

                <button type="submit" class="btn btn-primary w-100">Login</button>
            </form>
            <br>

            <a href="/sign_up"><button class="btn btn-light w-100">Sign Up</button></a>
        </div>
    </div>
</body>
</html>