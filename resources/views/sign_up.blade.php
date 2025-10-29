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
    @if (isset($exeSignUp))
        @if ($exeSignUp == 1)
            <script>
                Swal.fire({
                    title:'Account Registered',
                    text:'Your account has been registered successfully',
                    icon:'success',
                    timer:1500,
                    showConfirmButton:false,
                    willClose: () => {
                        window.location.href='/';
                    }
                })
            </script>
        @else
            <script>
                Swal.fire({
                    title:'Error Signing Up',
                    text:'There has been error in signing up',
                    icon:'error',
                    timer:1500,
                    showConfirmButton:false,
                    willClose: () => {
                        window.location.href='/';
                    }
                })
            </script>
        @endif
    @endif
    {{-- Main Content --}}
    <br>

    <div style="display: flex; justify-content: center;">
        <div class="div">
            <h1 style="text-align: center; font-size: 20px; font-weight: bold;">Sign Up</h1>
            <br>

            <form action="/sign_up_action" method="POST">
                @csrf 
                <div class="mb-3">
                    <label class="form-label">Name</label>
                    <input type="text" placeholder="Enter a name" name="name" class="form-control">
                </div>

                <div class="mb-3">
                    <label class="form-label">Email address</label>
                    <input type="email" placeholder="Enter a email" name="email" class="form-control">
                </div>

                <div class="mb-3">
                    <label class="form-label">Password</label>
                    <input type="password" placeholder="Enter a password" name="pass" class="form-control">
                </div>

                <div class="mb-3">
                    <label class="form-label">User Type</label>
                    <select class="form-control" name="type">
                        <option value="" selected disabled>Select User Type</option>
                        <option value="admin">Admin</option>
                        <option value="user">User</option>
                    </select>
                </div>
                <br>

                <button type="submit" class="btn btn-primary w-100">Sign Up</button>
            </form>
            <br>

            <a href="/"><button class="btn btn-light w-100">Login</button></a>
        </div>
    </div>
</body>
</html>