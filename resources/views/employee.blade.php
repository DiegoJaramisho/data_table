@extends('home')
@section('content')
<body>
    <div class="card">
        <div class="container">
            <table class="table table-striped" id="employee">
                <thead>
                    <tr>
                        <th>name</th>
                        <th>email</th>
                        <th>phone</th>
                        <th>salary</th>
                        <th>departament</th>
                    </tr>
                </thead>
                <tbody id="body">
                    @foreach ($employees as $key => $employe )
                        <tr id="fila_{{$employe->id}}" onclick="selectFila({{$employe}})" style="cursor: pointer;">
                            <td>{{$employe->name}}</td>
                            <td>{{$employe->email}}</td>
                            <td>{{$employe->phone}}</td>
                            <td>{{$employe->salary}}</td>
                            <td>{{$employe->departament}}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</body>
@endsection
