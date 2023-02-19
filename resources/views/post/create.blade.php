@extends('layouts.main')

@section('content')
    <h1 class="mt-4">Mobil</h1>
    <ol class="mb-4 breadcrumb">
        <li class="breadcrumb-item active">Tambah Mobil</li>
    </ol>
    <form action="{{ route('car.store') }}" method="post" enctype="multipart/form-data">
        @csrf
        @method('post')
        <div class="mb-3">
            <label for="name" class="form-label">Nama</label>
            <input type="text" class="form-control @error('name')
                is-invalid @enderror" name="name"
                id="name" value="{{ old('name') }}">
            @error('name')
                <span class="invalid-feedback">
                    {{ $message }}
                </span>
            @enderror
        </div>
        <div class="mb-3">
            <label for="plat" class="form-label">Plat</label>
            <input type="text" class="form-control @error('plat')
                is-invalid @enderror" name="plat"
                id="plat" value="{{ old('plat') }}">
            @error('plat')
                <span class="invalid-feedback">
                    {{ $message }}
                </span>
            @enderror
        </div>
        <div class="mb-3">
            <label for="description"> Deskripsi</label>
            <textarea type="text" class="form-control @error('description')
                is-invalid @enderror"
                name="description" id="description" value="{{ old('description') }}">{{ old('description') }}
            </textarea>
            @error('description')
                <span class="invalid-feedback">
                    {{ $message }}
                </span>
            @enderror
        </div>
        <div class="mb-3">
            <label for="price" class="form-label">Harga</label>
            <input type="text" class="form-control @error('price')
                is-invalid @enderror" name="price"
                id="price" value="{{ old('price') }}">
            @error('price')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="image" class="form-label">Gambar Post</label>
            <img src="" class="mb-3 img-preview img-fluid col-sm-5" alt="">
            <input class="form-control @error('image') is-invalid @enderror" type="file" id="image" name="image"
                onchange="previewImage()">
            @error('image')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="status" class="form-label">Status</label>
            <select name="status" id="status" class="form-select">
                <option value="1">Available</option>
                <option value="0">Not Available</option>
            </select>
        </div>
        <div class="d-flex justify-content-end">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>

    {{-- SCRIPT --}}
    <script>
        function previewImage() {
            const image = document.querySelector('#image');
            const imgPreview = document.querySelector('.img-preview');
            imgPreview.style.display = 'block';
            const oFReader = new FileReader();
            oFReader.readAsDataURL(image.files[0]);
            oFReader.onload = function(oFREvent) {
                imgPreview.src = oFREvent.target.result;
            }
        }
    </script>
@endsection
