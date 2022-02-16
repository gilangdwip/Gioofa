@extends('layouts.master')

@section("content")

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
                            <form action="/order/{{$order->id}}/update" method="POST">
                                {{csrf_field()}}
                                <div class="form-group">
                                    <label for="template_id">ID Template</label>
                                    <input name="template_id" type="text" class="form-control" id="template_id" aria-describedby="template_id" value="{{$order->template_id}}">
                                </div>
                                <div class="form-group">
                                    <label for="user_id">ID User</label>
                                    <input name="user_id" type="text" class="form-control" id="user_id" aria-describedby="user_id" value="{{$order->template_id}}">
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
