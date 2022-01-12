@extends('template.main')
@section('content')

@if ($kelas == null)
<h1>Belum Ada Murid</h1>
@else
<form action="/recaptBulan/{{ $kelas->kelas->kelas }}" method="post">

    @csrf
@for ($i = $no; $i <= 12; $i++)
    <button name="parameter" value="{{ $i }}">
        @switch($i)
            @case(1)
                {{ "Januari" }}
                @break
            @case(2)
                {{ "Febuari" }}
                @break
            @case(3)
                {{ "Maret" }}
                @break
            @case(4)
                {{ "April" }}
                @break
            @case(5)
                {{ "Mei" }}
                @break
            @case(6)
                {{ "Juni" }}
                @break
            @case(7)
                {{ "Juli" }}
                @break
            @case(8)
                {{ "Agustus" }}
                @break
            @case(9)
                {{ "September" }}
                @break
            @case(10)
                {{ "Oktober" }}
                @break
            @case(11)
                {{ "November" }}
                @break
            @case(12)
                {{ "Desember" }}
                @break
            @default
                {{ "Kontol" }}
        @endswitch
    </button>
@endfor
@endif
@endsection