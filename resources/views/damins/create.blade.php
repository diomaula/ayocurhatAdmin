<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
    <title>Tambah Admin</title>
    <link rel="stylesheet" href="{{ asset('css/style_addAdmin.css') }}"/>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    
    <form action="{{ route('damins.store') }}" method="POST">
        @csrf
     <div class="container d-flex align-items-center justify-content-center">
         <div class="card">
             <div class="card-header">
                Add New User
                </div>
             <div class="card-body d-flex align-items-center justify-content-center">
                 <div class="input-form">

                    <label for="Nama Lengkap" class="form-label">Nama Lengkap</label>
                    <input type="text" name="nama" class="form-control" id="kotak2" placeholder="">

                    <label for="Email" class="form-label">Email</label>
                    <input type="text" name="email" class="form-control" id="kotak2" placeholder="">

                    <label for="Password" class="form-label">Password</label>
                    <input type="password" name="password" class="form-control" id="kotak2" placeholder="">

                    </div>
                </div>
             <div class="button-save text-end">
                <button type="submit" style="color: #fff" class="btn btn-info">Simpan</button>
                </div>
            </div>
        </div>
    </form>

</body>

</html>