@extends('template.main')
@section('content')
    <div class="container mt-3 pt-3 pb-3">
        <div class="row">
            @foreach ($siswa as $item)
            <div class="col-4">
                <div class="card" style="width: 18rem;">
                    @if ($item->id_gender == 1)
                    <img src="https://avatarfiles.alphacoders.com/298/thumb-1920-298106.png" class="card-img-top" alt="...">
                    @else
                    <img src="https://avatarfiles.alphacoders.com/105/105236.png" class="card-img-top" alt="...">
                    @endif
                    <div class="card-body">
                      <h1 class="text-center">{{ $item->nama }}</h1>
                      <h5>Nis: {{ $item->nis }}</h5>
                      <p class="card-text">{{ $item->kelas->kelas }}</p>
                      <form action="/absen" method="post">
                        @csrf
                        <button class="btn btn-primary" name="parameter" value="{{ $item->id }}">Hadir</button>
                      </form>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
@endsection