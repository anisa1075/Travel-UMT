@extends('template.base')

@section('title', 'Form Trip Akan Datang')

@section('content')
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Form Edit Trip Akan Datang</h1>
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="./">Tabel Edit Trip Akan Datang</a></li>
    </ol>
  </div>

    <div class="container">
        <div class="row">
            <div class="col-12 pb-4">
                <div class="card" style="padding: 1rem; margin-top:1rem;">



                    <form action="{{ route('update.trip.akan.datang', $tripDatang->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <div class="form-group">
                            <label for="img">Image Trip Akan Datang</label>
                            <div class="input-group">
                                <div class="custom-file">
                                    <input type="file" name="img" class="custom-file-input" id="img">
                                    <label class="custom-file-label" for="img">Choose file</label>
                                </div>
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="negara" class="form-label">Negara</label>
                            <input type="text" class="form-control border" id="negara" name="negara"
                                aria-describedby="emailHelp" value="{{ $tripDatang->negara }}">

                        </div>

                        

                        <div class="mb-3">
                            <label for="itinerary" class="form-label">Deskripsi Itinerary</label>
                            <textarea class="form-control" id="editor" name="itinerary" rows="3" placeholder="Enter ..." value={{ $tripDatang->itinerary }}>{{ $tripDatang->itinerary }}</textarea>
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
        .create( document.querySelector( '#editor' ),
        {
            ckfinder:{

                uploadUrl:"{{ route('ckeditor.upload', ['_token'=>csrf_token()]) }}",

            }
        } )
        .catch( error => {
            console.error( error );
        } );
</script>

@endsection
