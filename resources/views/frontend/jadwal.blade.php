@extends('frontend.layout.app')

@section('content')
<div class="container">
    <table class="table mt-3">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Paket Lapangan</th>
            <th scope="col">Harga</th>
            <th scope="col">Pemesanan</th>
          </tr>
        </thead>
        <tbody>
         @foreach ( $contacts as $key=>$item )
         <tr>
            <th scope="row">{{ $key+1 }}</th>
            <td>{{ $item->field_name }}</td>
            <td>{{ $item->price }}</td>
            <td>
                <a href="{{ route('booking') }}" class="btn btn-primary">Booking</a>
            </td>
          </tr>
         @endforeach
        </tbody>
      </table>
  </div>
@endsection
