@extends('layout')

    @section('content')

    <h1>Edit student</h1>
    <hr/>

    <label>Name</label>
    <br/>
    <input type="text" class="form-control">
    <br/>
    <label>Mobile Number</label>
    <br/>
    <input type="text" class="form-control">
    <br/>
    <br/>
    <input type="submit" class="btn btn-success float-right" value="Submit edition">
    <br/>

    @endsection('content')
