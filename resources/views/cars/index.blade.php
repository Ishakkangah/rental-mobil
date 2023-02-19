@extends('layouts.main')

@section('content')
    <h1 class="mt-4">Dashboard</h1>
    <ol class="mb-4 breadcrumb">
        <li class="breadcrumb-item active">Dashboard</li>
    </ol>
    <div class="d-flex mb-2">
        <a href="{{ route('car.create') }}" class="btn btn-sm shadow btn-primary align-middle">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus"
                viewBox="0 0 16 16">
                <path
                    d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z" />
            </svg>Tambah Mobil</a>
    </div>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Nama</th>
                <th scope="col">Image</th>
                <th scope="col">Plat</th>
                <th scope="col">Status</th>
                <th scope="col">Harga</th>
                <th scope="col">AKSI</th>
            </tr>
        </thead>
        <tbody>
            @forelse($cars as $car)
                <tr>
                    <th scope="row" class="align-middle">{{ $loop->iteration }}</th>
                    <td class="align-middle">{{ $car->name }}</td>
                    <td class="align-middle"><img src="{{ asset('storage/' . $car->image) }}" alt="image" width="65px"
                            class="rounded">
                    </td>
                    <td class="align-middle">{{ $car->plat }}</td>
                    <td class="align-middle">
                        {{ $car->status }}
                    </td>
                    <td class="align-middle">{{ $car->price }}</td>
                    <td class="align-middle">
                        <div class="btn-group">
                            <button class="btn btn-sm btn-info rounded shadow-sm  mx-1">
                                <a href="{{ route('car.show', $car->id) }}" class="text-white text-decoration-none">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                        fill="currentColor" class="bi bi-eye-fill" viewBox="0 0 16 16">
                                        <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z" />
                                        <path
                                            d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z" />
                                    </svg></a></button>
                            <button class="btn btn-sm btn-primary  rounded shadow-sm mx-1">
                                <a href="{{ route('car.edit', $car->id) }}" class="text-white text-decoration-none">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                        fill="currentColor" class="bi bi-pen-fill" viewBox="0 0 16 16">
                                        <path
                                            d="m13.498.795.149-.149a1.207 1.207 0 1 1 1.707 1.708l-.149.148a1.5 1.5 0 0 1-.059 2.059L4.854 14.854a.5.5 0 0 1-.233.131l-4 1a.5.5 0 0 1-.606-.606l1-4a.5.5 0 0 1 .131-.232l9.642-9.642a.5.5 0 0 0-.642.056L6.854 4.854a.5.5 0 1 1-.708-.708L9.44.854A1.5 1.5 0 0 1 11.5.796a1.5 1.5 0 0 1 1.998-.001z" />
                                    </svg>
                                </a>
                            </button>
                            <form action="{{ route('car.destroy', $car->id) }}" method="post" class="d-inline"
                                onclick="return confirm('yakin anda ingin hapus?')">
                                @csrf
                                @method('DELETE')
                                <button type="sumbit" class="btn btn-sm btn-danger text-white rounded shadow-sm mx-1">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                        fill="currentColor" class="bi bi-trash-fill" viewBox="0 0 16 16">
                                        <path
                                            d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z" />
                                    </svg>
                                </button>
                            </form>
                        </div>
                    </td>
                </tr>

            @empty
                <tr>
                    <td colspan="6" class="text-center">
                        Belum ada data
                    </td>
                </tr>
            @endforelse
        </tbody>
    </table>
    <div>{{ $cars->links() }}</div>
@endsection
