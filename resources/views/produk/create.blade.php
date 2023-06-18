@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <div class="float-start">
                        {{ __('Tambah Produk') }}
                    </div>
                    <div class="float-end">
                        <a href="{{ route('produk.index') }}" class="btn btn-sm btn-primary">Kembali</a>
                    </div>
                </div>

                <div class="card-body">
                    <form action="{{ route('produk.store') }}" method="POST" enctype="multipart/form-data"> @csrf <div class="mb-3">
                        <label class="form-label">Nama</label>
                        <input type="text" class="form-control @error('nama') is-invalid @enderror" name="nama" value="{{ old('nama') }}" placeholder="Nama" required> @error('nama') <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span> @enderror
                        </div>
                        
                        <div class="mb-3">
                        <label class="form-label">Harga</label>
                        <input type="number" class="form-control @error('harga') is-invalid @enderror" name="harga" value="{{ old('harga') }}" placeholder="Harga" required> @error('harga') <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span> @enderror
                        </div>
                        <div class="mb-3">
                        <label class="form-label">Deskripsi</label>
                        <textarea class="form-control" class="form-control @error('deskirpsi') is-invalid @enderror" name="deskripsi" value="{{ old('deskirpsi') }}" rows="3" placeholder="Deskirpsi" required></textarea> @error('deskirpsi') <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span> @enderror
                        </div>
                        <button type="submit" class="btn btn-sm btn-success">Simpan</button>
                        <button type="reset" class="btn btn-sm btn-info">Reset</button>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection