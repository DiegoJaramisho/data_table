@extends('home')
@section('content')
<div class="card">
    <div class="container">
        <table class="table table-striped" id="employee">
            <thead>
                <tr>
                    <th>userId</th>
                    <th>id</th>
                    <th>title</th>
                    <th>body</th>
                </tr>
            </thead>
            <tbody id="body">
                @foreach ($datosArray as $dato)
                    <tr id="fila_{{$dato['id']}}" onclick="selectFila({{json_encode($dato)}})" style="cursor: pointer;">
                        <td>{{$dato['userId']}}</td>
                        <td>{{$dato['id']}}</td>
                        <td>{{$dato['title']}}</td>
                        <td>{{$dato['body']}}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
