@extends('layouts.master')

@section('content')

<div class="main">
    <div class="main-content">
        <div class="container">
            @if(session('sukses'))
             <div class="alert alert-succsess">{{session('sukses')}}</div>
            @endif
            <div class="row">
                <div class="col-md-12">
                    <div class="panel">
                        <div class="panel-heading">
                            <div class="right">
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                    Tambah Template
                                  </button>
                            </div>
                            <h3 class="panel-title">Template</h3>
                        </div>


                            <div class="panel-body">
                                <table id="intro_table"class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th  scope="col">Categories id</th>
                                            <th  scope="col">Nama</th>
                                            <th  scope="col">Deskripsi</th>
                                            <th  scope="col">Harga</th>
                                            <th  scope="col">Path File</th>
                                            <th  scope="col">Image</th>

                                            <th>AKSI</th>
                                            {{-- <th  scope="col"> Aksi <th> --}}
                                        </tr>
                                    </thead>
                                    <tbody>
                                @foreach($template as $template)

                                        <tr>
                                            <td> {{$template->categories_id}}</td>
                                            <td> {{$template->nama}}</td>
                                            <td> {{$template->deskripsi}}</td>
                                            <td> {{$template->harga}}</td>
                                            <td> {{'storage/' . $template->file}}</td>
                                            <td> <img class="rounded img-thumbnail" src="{{'storage/' . $template->image}}" alt=""></td>

                                            <td>
                                                <a href="/template/{{$template->id}}/edit" class = "btn btn-warning btn-sm">Edit</a>
                                                <a href="/template/{{$template->id}}/delete" class= "btn btn-danger btn-sm" onclick="return confirm('konfirm untuk hapus data')">Hapus</a>
                                            </td>
                                        </tr>

                                @endforeach
                            </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        {{-- </div>--}}
    </div>

    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">


                <form action="/template/create" method="POST" enctype="multipart/form-data">
                    {{csrf_field()}}
                    <div class="form-group">
                        <label for="categories_id">categories_id</label>
                        <input name="categories_id" type="text" class="form-control" id="categories_id" aria-describedby="emailHelp">
                    </div>
                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input name="nama" type="text" class="form-control" id="nama">
                    </div>
                    <div class="form-group">
                        <label for="deskripsi">Deskripsi</label>
                        <input name="deskripsi" type="text" class="form-control" id="deskripsi" aria-describedby="emailHelp">
                    </div>
                    <div class="form-group">
                        <label for="harga">Harga</label>
                        <input name="harga" type="text" class="form-control" id="harga" aria-describedby="emailHelp">
                    </div>
                    <div class="form-group">
                      <label for="image">Image</label>
                      <input name="image" type="file" class="form-control" id="image" aria-describedby="emailHelp">
                    </div>
                    <div class="form-group">
                        <label for="file">file</label>
                        <input name="file" type="file" class="form-control" id="file" aria-describedby="emailHelp">
                      </div>


                    <button type="submit" class="btn btn-primary">Kirim data</button>
                    </form>


            </div>

          </div>
        </div>
      </div>


</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

@endsection

