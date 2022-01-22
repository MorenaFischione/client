@extends('layouts.app')

@section('content')
<div class="container">
    <h1>I nostri clienti</h1>
        <table class="post-table table">
            <thead>
                <th>Nome</th>
                <th>Email</th>
            </thead>
            <tbody>
                @foreach ($clients as $client)
                    @if ($client->image)
                        <tr>
                            <td>{{ $client->name }}</td>
                            <td>{{ $client->email}}</td>
                        </tr>
                    @endif
                @endforeach 
            </tbody>
        </table>
</div>
@endsection
