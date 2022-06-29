@extends('layouts.app')

@section('content')
<div class="container">
    <form action="{{ route('store-l') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="floatingInput">Nama Paket</label>
            <input type="text" class="form-control @error('field_name') is-invalid @enderror" id="floatingInput"
                placeholder="" name="field_name">
                @error('field_name')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
        <div class="form-group">
            <label for="floatingInput">Harga</label>
            <input type="text" class="form-control @error('price') is-invalid @enderror" id="floatingInput"
                placeholder="" name="price">
                @error('price')
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
