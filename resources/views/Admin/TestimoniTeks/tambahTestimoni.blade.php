@extends('template.base')

@section('title', 'Form Testimoni')

@section('content')
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Form Testimoni Teks</h1>
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('index.testimoni.teks') }}">Tabel Testimoni Teks</a></li>
    </ol>
  </div>

    <div class="container">
        <div class="row">
            <div class="col-12 pb-4">
                <div class="card" style="padding: 1rem; margin-top:1rem;">



                    <form action="{{ route('tambah.testimoni.teks') }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="mb-3">
                            <label for="nama" class="form-label">Nama Agent</label>
                            <input type="text" class="form-control border" id="nama" name="nama"
                                aria-describedby="emailHelp">

                        </div>

                        <div class="mb-3">
                            <label for="pekerja" class="form-label">Pekerja Agent</label>
                            <input type="text" class="form-control border" id="pekerja" name="pekerja"
                                aria-describedby="emailHelp">

                        </div>

                        

                        <div class="mb-3">
                            <label for="desc" class="form-label">Deskripsi</label>
                            <textarea class="form-control" id="desc" name="desc" rows="3" placeholder="Masukkan Testimoni"></textarea>
                        </div>



                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>

                </div>
            </div>
        </div>
    </div>




@endsection

@section('ckEditor')

    <script>
        ClassicEditor
            .create(document.querySelector('#desc'))
            .catch(error => {
                console.error(error);
            });
    </script>

@endsection
