@section('css')

@stop

@section('js')

@stop

@extends('layouts.horizontal')

@section('content')
<div class="page-title-box">
    <div class="row align-items-center">
        <div class="col-sm-6">
            <h4 class="page-title">Tabel Dinamis - Kelola Master Tabel</h4>
        </div>
    </div>
    <!-- end row -->
</div>

<div class="row">
    <div class="col-12">
        <div class="card m-b-30">
            <div class="card-body">

                <h4 class="mt-0 header-title">Edit Master Subjek</h4><br/>

                <form action="{{route('tabeldinamis.editSubjek')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="msubjek_id"></label>
                        <input type="text" class="form-control" id="msubjek_id" name="msubjek_id" value="{{$subjek->id}}" readOnly/>
                    </div>

                    <div class="form-group">
                        <label for="msubjek_nama_subjek"></label>
                        <input type="text" class="form-control" id="msubjek_nama_subjek" name="msubjek_nama_subjek" value="{{$subjek->nama_subjek}}" />
                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>

            </div>
        </div>
    </div> <!-- end col -->
</div> <!-- end row -->
@endsection
