<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/style_signup.css" />
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <title>Login</title>
  </head>
  <body>
    <div class="container">
      <div class="logo-container">
        <img src="images/Logo_biru.png" width="20%" />
        <p>Kami Siap Mendukungmu Dalam Curhatmu, Ayo Bersama Menghadapi</p> 
        </div>

        <form action="{{ route('login') }}" method="post">
          @csrf
        <div class="content-login">
          <div class="input-box-login">
            <label for="email">Email</label>
            <input type="text" placeholder="Masukkan email" name="email" id="email"/> 
          </div>

          <div class="input-box-login">
            <label for="password">Password</label>
            <input type="password" placeholder="Masukkan password" name="password" id="password"/>
          </div>
        </div>
        <div class="note">
          <p>apakah anda belum punya akun? <a href="register">Sign Up</a></p>
        </div>
        <div class="button-container">
          <button><a href="penyintas_dashboard/index.blade.php"></a>Selanjutnya</button>
        </div>
        </form>
    </div>

    @if($message = Session::get('failed'))
    <script>
      Swal.fire('{{ $message }}');
    </script>
    @endif
  </body>
</html>
