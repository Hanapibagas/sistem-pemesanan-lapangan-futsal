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
          <tr>
            {{-- forech --}}
            <th scope="row">1</th>
            <td>Mark</td>
            <td>Otto</td>
            <td>
                <a href="{{ route('booking') }}" class="btn btn-primary">Booking</a>
            </td>
          </tr>
        </tbody>
      </table>
  </div>
@endsection
