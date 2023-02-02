<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  </head>
  <body>
    <div class="container mt-5">
        <h1>Data Pengadilan</h1>
        <a class="btn btn-warning" href="/admin2-tambahpengadilan">Tambah Data Pengadilan</a>
        <table class="table">
            <thead>
              <tr>
                <th scope="col">ID</th>
                <th scope="col">Nama Pengadilan</th>
                <th scope="col">Gambar Pengadilan</th>
                <th scope="col">No telp</th>
                <th scope="col">Alamat</th>
                <th scope="col">Rating</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
              @php
                  $no = 1;
              @endphp
                @foreach ($pengadilan as $item)
                <tr>
                    <td>{{ $no++ }}</td>
                    <td>{{ $item->nama_pengadilan }}</td>
                    <td>  <img src="{{ asset('gambarpengadilan/'.$item->gambar ) }}" height="100" width="100" class="rounded-circle d-block mx-auto" alt="..."></td>
                    <td>{{ $item->phone }}</td>
                    <td>{{ $item->alamat }}</td>
                    <td>{{ $item->rating }}</td>
                    <td>
                      <a class="btn btn-warning" href="/admin2-pengadilanedit/{{ $item->id }}">Edit</a>
                      <a class="btn btn-danger" href="/admin2-pengadilandelete/{{ $item->id }}">Delete</a>
                    </td>
                  </tr>
                @endforeach
            </tbody>
          </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
  </body>
</html>