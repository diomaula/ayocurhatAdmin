<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>register</title>
    <link rel="stylesheet" href="css/style_register.css" />
    {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script> --}}
  </head>
    <body>
      <div class="container">   
        <div class="card-container">
          <div class="left">
            <div class="left-container">
              <div class="logo-container">
                <img src="images/Logo_putih.png" width="50%" />
                <p>Kami Siap Mendukungmu Dalam Curhatmu, Ayo Hadapi Bersama</p>       
              </div>
            </div>
          </div> 

          <div class="right">
            <div class="right-container">
              <form action="{{ route('register') }}" method="post">
                @csrf
                <h4> Register</h4>
                <div class="input-box">
                  <label for="uname">Nama</label>
                  <input type="text" placeholder="Masukkan nama" name="nama" id="nama" class="form-control @error('uname')
                  is-valid @enderror" id="uname" required/>     
                </div>
                <div class="input-box">
                  <label for="email">Email</label>
                  <input type="email" placeholder="Masukkan email" name="email" class="form-control @error('email')
                  is-valid @enderror" id="email" required />
                </div>
                <div class="input-box">
                  <label for="password">Password</label>
                  <input type="password" placeholder="Masukkan password" name="password" class="form-control @error('password')
                  is-valid @enderror" id="password" required />    
                <div class="note">
                  <p>apakah anda sudah punya akun? <a href="login">log in</a></p>
                </div>
                <div class="button-container">
                  <button >Konfirmasi</button>
                </div> 
              </form>
            </div>
          </div>
        </div>
      </div>
    </body>
</html>
