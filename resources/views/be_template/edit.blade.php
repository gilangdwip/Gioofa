<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>


<body>
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
                                    <label for="categories_id">Category ID</label>
                                    <input name="categories_id" type="text" class="form-control" id="categories_id" aria-describedby="categories_id" value="{{$template->category_id}}">

                                </div>
                                <div class="form-group">
                                    <label for="nama">Nama</label>
                                    <input name="nama" type="text" class="form-control" id="nama" aria-descibedby="nama" value="{{$template->nama}}">
                                </div>
                                <div class="form-group">
                                    <label for="deskripsi">Deskripsi</label>
                                    <input name="deskripsi" type="text" class="form-control" id="deskripsi" aria-describedby="deskripsi" value="{{$template->deskripsi}}">
                                </div>
                                <div class="form-group">
                                    <label for="harga">Harga</label>
                                    <input name="harga" type="text" class="form-control" id="harga" aria-describedby="harga" value="{{$template->harga}}">
                                </div>
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
</body>
