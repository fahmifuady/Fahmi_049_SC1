<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
    <title>Data Mahasiswa</title>
</head>

<body>
    <div class="container mt-3">
        <div class="row">
            <div class="col-12">
                <div class="py-4 d-flex justify-content-between align-items-center">
                    <h2 class="mr-auto">Tabel Mahasiswa</h2>
                    <a href="{{ route('student.create') }}" class="btn btn-primary">
                        Tambah Mahasiswa
                    </a>
                </div>
                @if(session()->has('pesan'))
                <div class="alert alert-success">
                    {{ session()->get('pesan') }}
                </div>
                @endif
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Foto</th>
                            <th>Nim</th>
                            <th>Nama</th>
                            <th>Jenis Kelamin</th>
                            <th>Jurusan</th>
                            <th>Alamat</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($students as $mahasiswa)
                        <tr>
                            <th>{{$loop->iteration}}</th>
                            <td>
                                <img src="{{ url('') }}/{{ $mahasiswa->image}}" alt="" class="rounded" style="max-height: 30px; max-width: 30px; object-fit: contain">
                            </td>
                            <td><a href=" {{ route('student.show',['student' => $mahasiswa->id]) }}">{{$mahasiswa->nim}}</a></td>
                            <td>{{$mahasiswa->name}}</td>
                            <td>
                                {{$mahasiswa->gender ==
                                    'P'?'Perempuan':'Laki-laki'}}
                            </td>
                            <td>{{$mahasiswa->departement}}</td>
                            <td>
                                {{$mahasiswa->address == '' ? 'N/A' :
                                    $mahasiswa->address}}
                            </td>
                        </tr>
                        @empty
                        <td colspan="6" class="text-center">
                            Tidak ada data...
                        </td>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>

</html>