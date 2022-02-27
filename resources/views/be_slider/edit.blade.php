@extends('layouts.master')

@section('content')
    <div class="main">
    <div class="main-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="panel">
                        <div class="panel-heading">
                            <h3 class="panel-title">Inputs</h3>
                        </div>
                        <div class="panel-body">
                            <form action="/template/{{$template->id}}/update" method="POST" enctype="multipart/form-data">
                                {{csrf_field()}}

                                <div class="form-group">
                                <img src="{{'http://127.0.0.1:8000/storage/' . $template->image}}" alt="" style="width: 300px">
                                <br>
                                <label for="image">Image</label>
                                <input name="image" type="file" class="form-control" id="image" aria-describedby="image" >
                                </div>


                                <button type="submit" class="btn btn-warning">Update</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
