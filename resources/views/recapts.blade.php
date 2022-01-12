@extends('template.main')
@section('content')
   @foreach ($kelas as $item)
        <a href="/recapt/{{ $item->kelas }}">{{ $item->kelas }}</a>
   @endforeach
@endsection