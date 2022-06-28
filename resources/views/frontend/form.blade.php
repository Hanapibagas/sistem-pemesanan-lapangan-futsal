@extends('frontend.layout.app')

@section('content')
<div class="container">
    <a href="{{ route('show') }}" class="btn btn-danger">Kembali</a>
</div><br>
<div class="container">
    <form action="{{ route('store-j') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="floatingInput">Nama Pemesan</label>
            <input type="text" class="form-control @error('costumer_name') is-invalid @enderror" id="floatingInput"
                placeholder="" name="costumer_name">
                @error('costumer_name')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
        <div class="form-group">
            <label for="floatingInput">Tanggal main</label>
            <input type="date" class="form-control @error('play_date') is-invalid @enderror" id="floatingInput"
                placeholder="" name="play_date">
                @error('play_date')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
        <div class="form-group">
            <label for="floatingInput">Paket Langan</label>
            <input type="text" class="form-control @error('field_name') is-invalid @enderror" id="floatingInput"
                placeholder="" name="field_name">
                @error('field_name')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
        <div class="form-group">
            <label for="floatingInput">Panjar</label>
            <input type="text" class="form-control @error('price') is-invalid @enderror" id="floatingInput"
                placeholder="" name="price">
                @error('price')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
        <div class="form-group">
            <label for="floatingInput">Status</label>
            <input type="text" class="form-control @error('status') is-invalid @enderror" id="floatingInput"
                placeholder="" name="status">
                @error('status')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div><br>
        <button type="submit" class="btn btn-primary">
            Kirim
        </button>
    </form>
</div>

@endsection
