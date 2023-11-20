<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/style_signup.css" />
    <title>Login</title>
  </head>
  <body>
    <div class="container">
      <div class="logo-container">
        <img src="images/Logo_biru.png" width="20%" />
        <p>Kami Siap Mendukungmu Dalam Curhatmu, Ayo Bersama Menghadapi</p>
        
      </div>
      <form action="/login" method="post">
        @csrf
        <div class="content-login">
          <div class="input-box-login">
            <label for="email">Email</label>
            <input type="email" placeholder="Masukkan email" name="email" class="form-control @error('email')
            is-valid @enderror" id="email" required />
          </div>
          <div class="input-box-login">
            <label for="password">Password</label>
            <input type="password" placeholder="Masukkan password" name="password" class="form-control @error('password')
            is-valid @enderror" id="password" required />
          </div>
        </div>
        <div class="note">
          <p>apakah anda belum punya akun? <a href="register">Sign Up</a></p>
        </div>
        <div class="button-container">
          <button><a href="tampilanAwal.html"></a>Selanjutnya</button>
        </div>
      </form>
    </div>
  </body>
</html>
