@extends('template.main')
@section('content')
<h1 class="text-center mb-3">Pilih Kelas</h1>
    <div class="row container">
        @foreach ($kelas as $item)
        <div class="col-4">
            <a href="/absen/{{ $item->kelas }}" class="btn btn-outline-dark mt-3 rounded" style="width: 250px; height: 250px;"><h1 class="">{{ $item->kelas }}</h1></a>
        </div>  
        @endforeach
    </div>
@endsection