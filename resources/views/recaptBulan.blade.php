@extends('template.main')
@section('content')
{{-- header --}}
<div class="container-fluid">
  <!-- Breadcrumb-->
 <div class="row pt-2 pb-2">
    <div class="col-sm-9">
    <h4 class="page-title">Data Tables</h4>
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="javaScript:void();">Rocker</a></li>
        <li class="breadcrumb-item"><a href="javaScript:void();">Tables</a></li>
        <li class="breadcrumb-item active" aria-current="page">Data Tables</li>
     </ol>
 </div>
 <div class="col-sm-3">
   <div class="btn-group float-sm-right">
    <button type="button" class="btn btn-outline-primary waves-effect waves-light"><i class="fa fa-cog mr-1"></i> Tanggal</button>
    <button type="button" class="btn btn-outline-primary dropdown-toggle dropdown-toggle-split waves-effect waves-light" data-toggle="dropdown">
    <span class="caret"></span>
    </button>
    <div class="dropdown-menu">
      @foreach ($parameter as $item)
        <a href="/absen/{{ $item->date }}/{{ $kelas }}" class="dropdown-item">{{ $item->date }}</a>
      @endforeach
    </div>
  </div>
 </div>
</div>
@foreach ($parameter as $a)
  <div class="row">
    <div class="col-lg-12">
      <div class="card">
        <div class="card-header"><i class="fa fa-table"></i> Data tanggal {{ $a->date }}</div>
        <div class="card-body">
          <div class="table-responsive">
          <table id="example" class="table table-bordered">
            <thead>
                <tr>
                    <th>Nama</th>
                    <th>Tanggal(Tahun-Bulan-Hari)</th>
                    <th>Keterangan</th>
                </tr>
            </thead>
            <tbody>
              @foreach ($recapt as $siswa)
                @if ($siswa->date !== $a->date)
                    @continue
                @endif
                <tr>
                  <td>{{ $siswa->nama }}</td>
                  <td>{{ $siswa->date }}</td>
                  <td>Hadir</td>
                </tr>
              @endforeach
            </tbody>
        </table>
        </div>
        </div>
      </div>
    </div>
  </div>
@endforeach
  
@endsection