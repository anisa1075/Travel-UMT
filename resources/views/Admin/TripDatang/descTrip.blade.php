<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
@extends('template.base')

@section('title', 'Deskripsi Detail Itinerary')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="card" style="padding: 1rem; margin-top:1rem;">


                    <div class="mb-3">
                        <label for="deskripsi" class="form-label">Deskripsi Detail Itinerary</label>

                        <div class="card p-3" style="padding-left: 10px">
                            <p>{!! $tripDatang->itinerary !!}</p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>


    <!-- End Main Content -->

@endsection
