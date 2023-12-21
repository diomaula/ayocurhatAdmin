@extends('layouts.layout')
 
@section('content')
    
   
    <div class="card card-primary mt-4">
        <div class="card-header" style="background-color: #3BAEDA; display: flex; justify-content: space-between; align-items: center;">
            <h3 class="card-title" style="color: white; font-family: 'Roboto', sans-serif; font-size: 20px; margin: 0;">
                Daftar Admin
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
    
                    <a class="btn btn-primary" href="{{ route('damins.edit',$damins->nama) }}">Edit</a>
   
                    @csrf
                    @method('DELETE')
      
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
  
      
@endsection