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
        <form method="post" action="/admin-pengadilanupdate/{{ $data->id }}" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
              <label for="nama_pengadilan" class="form-label">Nama Pengadilan</label>
              <input type="text" class="form-control" id="nama_pengadilan" value="{{ $data->nama_pengadilan }}" name="nama_pengadilan">              
            </div>
            <div class="mb-3">
                <label for="phone" class="form-label">No Telepon</label>
                <input type="number" class="form-control" id="phone" value="{{ $data->phone }}" name="phone">
              </div>
              <div class="mb-3">
                <label for="alamat" class="form-label">Alamat</label>
                <input type="text" class="form-control" id="alamat" value="{{ $data->alamat }}" name="alamat">              
              </div>
              <div class="mb-3">
                <label for="rating" class="form-label">Rating</label>
                <input type="number" class="form-control" id="rating" value="{{ $data->rating }}" name="rating">               
              </div>
              <img src="{{ asset('gambarpengadilan/'.$data->gambar ) }}" height="100" width="100" class="rounded-circle d-block mx-auto" alt="...">
              <label for="gambar" class="form-label">Upload Foto Pengadilan</label>
              <div class="input-group mb-3">
                  <input type="file" name="gambar" class="form-control" id="gambar">
                  <label class="input-group-text" for="gambar">Upload</label>
              </div> 
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
  </body>
</html>