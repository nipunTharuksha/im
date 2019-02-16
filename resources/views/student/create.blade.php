@extends('layout')

    @section('content')

    <h1>Add student</h1>

    <hr/>
<form action="store" method="POST">

    {!! csrf_field() !!}
    <label>Name</label>
    <br/>
    <input type="text"  name="name" class="form-control">
    <br/>
    <label>email</label>
    <input type="email" name="email" class="form-control">
    <label>Mobile Number</label>
    <br/>
    <input type="number" name="phone" class="form-control">
    <br/>

    <br/>
    <label>password</label>
    <input type="password" name="password" class="form-control">
    <br/>
    <input type="submit" class="btn btn-success float-right" value="Submit">
    <br/>
</form>
    @endsection('content')
