<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Warehouse</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  </head>
  <body>
    <div class="container-fluid">
        <h1 class="mb-2">Warehouse</h1>
        <a href="{{ route('warehouse.create') }}" class="btn btn-primary mb-5"> Tambah Baru </a>

        @if(session('message'))
            <div class="alert alert-success" role="alert">
                {{ session('message') }}
            </div>
        @endif

        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Alamat</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($warehouses as $warehouse)
                <tr>
                  <th scope="row">{{ $warehouse->id }}</th>
              <td>{{ $warehouse->nama }}</td>
              <td>{{ $warehouse->alamat }}</td>
              <td>
                <button class="btn btn-info" href="{{ route('warehouse.edit', $warehouse->id) }}">Edit</button>
                <form action="{{ route('warehouse.destroy', $warehouse->id) }}" method="post">
                    @csrf
                    @method("DELETE")
                    <button class="btn btn-danger" type="submit">Delete</button>
              </td>
             </tr>
             @endforeach
           </tbody>
        </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  </body>
</html>