<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Edit Pembalap Motor</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  </head>
  <body>
    <h2 class="text-center mt-2">Edit Pembalap Motor</h2>
    <div class="container mt-3">
    <form action="{{ '/edit/'.$PembalapMotor->id }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="nama_pembalap" class="form-label">Nama Pembalap</label>
                <input type="text" class="form-control @error('nama_pembalap') is-invalid @enderror" id="nama_pembalap" name="nama_pembalap" value="{{ $PembalapMotor->nama_pembalap }}">
                @error('nama_pembalap')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="asal_negara" class="form-label">Asal Negara</label>
                <input type="text" class="form-control @error('asal_negara') is-invalid @enderror" id="asal_negara" name="asal_negara" value="{{ $PembalapMotor->asal_negara }}">
                @error('asal_negara')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <a href="/" class="btn btn-danger">Kembali</a>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>
