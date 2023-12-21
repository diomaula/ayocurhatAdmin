@extends('layouts.layout')
 
@section('content')
    
   
    <div class="card card-primary mt-4">
        <div class="card-header" style="background-color: #3BAEDA; display: flex; justify-content: space-between; align-items: center;">
            <h3 class="card-title" style="color: white; font-family: 'Roboto', sans-serif; font-size: 20px; margin: 0;">
                Daftar Pengaduan
            </h3>
            <a class="btn btn-success" href="{{ route('damins.create') }}" style="background-color: transparent; border: 1px solid white; color: white; padding: 6px 12px;">
                Tambah Admin 
                <i class="fas fa-plus" style="margin-left: 5px;"></i> <!-- Font Awesome plus icon -->
            </a>
        </div>
        
       
       
        @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
        @endif
        <div class="card-body">
          
        </div>
    <table class="table">
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Email</th>
            <th width="280px">Aksi</th>
        </tr>
        @foreach ($damins as $damins)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $damins->nama }}</td>
            <td>{{ $damins->email }}</td>
            <td>
                <form action="{{ route('damins.destroy',$damins->nama) }}" method="POST">
   
                    {{-- <a class="btn btn-info" href="{{ route('damins.show',$damins->nama) }}">Lihat</a> --}}
    
                    <a class="btn btn-primary" href="{{ route('dafpeds.edit',$damins->nama) }}">Lihat</a>
   
                    @csrf
                    @method('DELETE')
      
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
  
      
@endsection

{{-- @extends('layouts.layout')
 
@section('content')
      <div class="container-table">
        <div class="row">
          <div class="col-md-9">
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Daftar Pengaduan</h3>              
              </div>
              <div class="card-body">
                
              </div>
            </div>
          </div>
        </div>
      </div>
      
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  {{-- </body>
  </html> 

  @endsection --}}