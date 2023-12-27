<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
    <title>Update Admin</title>
    <link rel="stylesheet" href="{{ asset('css/style_isiProfile.css') }}" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

</head>

<body>
    <!-- Button -->
    <div class="py-3">
        <div class="admin-button text-end">
            <!-- <button type="button" class="btn btn-outline-light rounded-pill">Tambah Admin +</button> -->
            {{-- <a href="{{ route('damins.create') }}" class="btn btn-outline-light rounded-pill">Tambah Admin +</a> --}}
        </div>
    </div>

    <!-- Card -->
    <div class="container">

        <form action="{{ route('damins.update',$damins->nama) }}" method="POST">
            @csrf
            @method('PUT')
         <!-- 2 columns card -->
         <div class="card">
            <div class="card-header">
                <h3>Account Settings</h3>
            </div>
            <div class="card-block">
                <div class="row align-items-center">
                    <div class="col-lg-6 tags p-b-2" style="padding-left: 40px">
                        <div class="foto-admin">
                            <div class="foto-admin">
                                <img src="{{ ('/images/Admin.png') }}" alt="">
                            </div>
                            <div class="judul">
                                <h6>Admin Satgas PPKS</h6>
                            </div>
                        </div>
                        <div class="mb-3" style="margin-top: 67px;">
                            <label for="Nama Lengkap" class="form-label">Nama Lengkap</label>
                            <input type="text" name="nama" class="form-control form-control-sm" style="background-color: #F4FBFF"
                                id="kotak" placeholder="" value="{{ $damins->nama }}">

                            <label for="Nomor HP" class="form-label">Nomor HP</label>
                            <input type="text" name="nomorhp" class="form-control form-control-sm" style="background-color: #F4FBFF"
                                id="kotak" placeholder="" value="{{ $damins->nomorhp }}">
                        </div>
                    </div>

                    <div class="col-lg-4 offset-lg-1 d-flex flex-column align-items-center"
                        style="padding-right: 30px;">
                        <div class="row m-x-auto m-b-2">
                            <div class="col-md-7">
                                <label for="Email" class="form-label">Email</label>
                                <input type="email" name="email" class="form-control form-control-sm"
                                    style="background-color: #F4FBFF" id="kotak" placeholder="" value="{{ $damins->email }}" readonly>
                            </div>
                        </div>
                        <div class="row m-x-auto m-b-2">
                            <div class="col-md-7">
                                <label for="Alamat" class="form-label">Alamat</label>
                                <input type="text" name="alamat" class="form-control form-control-sm"
                                    style="background-color: #F4FBFF" id="kotak" placeholder="" value="{{ $damins->alamat }}">
                            </div>
                        </div>
                        <div class="row m-x-auto m-b-2">
                            <div class="col-md-7">
                                <label for="Jenis Kelamin" class="form-label">Jenis Kelamin</label>
                                <select name="jenis_kelamin" class="form-select" style="background-color: #F4FBFF" id="dropdown">
                                    <option value="" selected hidden>Pilih Jenis Kelamin</option>
                                    <option value="Laki-Laki" style="background-color: #A8A9AA">Laki-Laki</option>
                                    <option value="Wanita" style="background-color: #A8A9AA">Perempuan</option>
                                </select>
                                
                                
                            </div>
                        </div>
                    </div>
                    <!--/card-block-->
                    <div class="button-simpan">
                        <button type="submit" class="btn btn-info" style="color: #fff">Simpan</button>
                    </div>
                </div>
                <!-- /2 columns card -->
            </div>
         </div>
       </form>
</body>

</html>