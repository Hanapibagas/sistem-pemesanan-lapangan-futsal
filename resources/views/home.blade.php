@extends('layouts.app')

@section('content')
<div class="container">
    <table class="table mt-3">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Nama Pemesan</th>
            <th scope="col">Tanggal Main</th>
            <th scope="col">Paket Lapangan</th>
            <th scope="col">Harga</th>
            <th scope="col">Status</th>
          </tr>
        </thead>
        <tbody>
          @foreach ( $jadwals as $key=>$item )
          <tr>
            <th scope="row">{{ $key+1 }}</th>
            <td>{{ $item->costumer_name }}</td>
            <td>{{ $item->play_date }}</td>
            <td>{{ $item->field_name }}</td>
            <td>{{ $item->price }}</td>
            <td>{{ $item->status }}</td>
            <td>
                <a href="" class="btn btn-primary">Booking</a>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
  </div>
@endsection
