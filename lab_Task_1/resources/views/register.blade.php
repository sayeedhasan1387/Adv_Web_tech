@extends('layout.app')

@section('title')
Registration
@endsection

@section('content')




<form action="/register" method="post" enctype="multipart/form-data">
    {{csrf_field()}}
    <fieldset>
        @isset($output)

        @if($output === true)

        <div class="alert alert-dismissible alert-success">
            <strong>Well done!</strong> You are successfully registered</a>.
            <button type="button" class="btn btn-close" data-bs-dismiss="alert"></button>
        </div>
        @endif
        @endisset
        <legend>Registration form</legend>
        <div class="form-group">
            <label class="form-label mt-4" for="dob">Date of birth : </label>
            <input type="text" class="form-control" id="dob" name="dob" value="{{old('dob')}}">
            @if($errors->has('dob'))
            <span class="text-danger">{{$errors->first('dob')}}</span>
            @endif
        </div>

        <div class="form-group">
            <label class="form-label mt-4" for="zip">Zip code :</label>
            <input type="text" class="form-control" id="zip" name="zip" value="{{old('zip')}}">
            @if($errors->has('zip'))
            <span class="text-danger">{{$errors->first('zip')}}</span>
            @endif
        </div>

        <div class="form-group">
            <label for="uid" class="form-label mt-4">User ID: </label>
            <input type="text" class="form-control" id="uid" name="uid" value="{{old('uid')}}">
            @if($errors->has('uid'))
            <span class="text-danger">{{$errors->first('uid')}}</span>
            @endif
        </div>
        <div class="form-group">
            <label for="img" class="form-label mt-4">Profile Picture :</label>
            <input class="form-control" type="file" id="img" name="img" accept="image/jpeg" value="{{old('img')}}">
            @if($errors->has('img'))
            <span class="text-danger">{{$errors->first('img')}}</span>
            @endif
        </div>
        <div class="form-group">
            <label for="ssn" class="form-label mt-4">Social Security Number: </label>
            <input type="text" class="form-control" id="ssn" name="ssn" value="{{old('ssn')}}">
            @if($errors->has('ssn'))
            <span class="text-danger">{{$errors->first('ssn')}}</span>
            @endif
        </div>

    </fieldset>
    <button type="submit" class="btn btn-primary">Register</button>
</form>
@endsection