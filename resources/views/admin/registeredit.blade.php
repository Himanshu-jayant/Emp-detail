@extends('layouts.master')

@section('title')
Edit register

@endsection


@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="cardheader">
                    <h1> EDIT</h1>
                </div>

                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">

                            <form action="/user_update{{ $users->id }}" method="POST">
                                {{ csrf_field() }}
                                {{ method_field('PUT') }}
                                <div class="form-group">

                                    <label>NAME</label>
                                    <input type="text" name="username" value="{{ $users->name }}" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Give Role</label>
                                    <select name="usertype" class="form-group">
                                        <option value="admin">Admin</option>
                                        <option value="">None</option>
                                    </select>
                                </div>

                                <button type="submit" class="btn btn-success">Update</button>
                                <a href="/user-registered" class="btn btn-danger">Cancel</a>
                            </form>

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@section('scripts')

@endsection