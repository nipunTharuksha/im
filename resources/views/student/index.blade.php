    @extends('layout')

    @section('content')
    <h2>Student List</h2>
    <hr/>
    <table>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Phone number</th>
            <th>Other option</th>
        </tr>
    </table>
    @foreach ($students as  $student)
    <tr>

        <td>{{ $student->id }}</td>
        <td>{{ $student->name }}</td>
        <td>{{ $student->phone }}</td>

        <td><a href=""  class="btn btn-info" >Show</a>
            <a href=""  class="btn btn-warning" >Edit</a>
            <a href=""  class="btn btn-danger" >Delte</a>
        </td>

    </tr>
    @endforeach
    @endsection('content')
