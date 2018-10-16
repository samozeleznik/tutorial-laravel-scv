@extends('layouts.app')



@section('content')


<h1>Podatki o uporabnikih</h1>
<br />

<table border="1" >
    <tr>
        <td>Id</td>
        <td>ime</td>
        <td>email</td>
        <td>Aktiven</td>
        <td>Vloga</td>
        <td>ustvarjen</td>
    </tr>
@if($users)

@foreach($users as $user)
    <tr>
        <td>{{$user->id}}</td>
        <td>{{$user->name}}</td>
        <td>{{$user->email}}</td>
        <td>
            @if(!empty($user->is_active))
                @if($user->is_active)
                    Aktiven
                @else
                    Ni aktiven
                @endif
            @else
            Ni podatka
            @endif

        </td>
        <td>{{$user->role->name}}</td>
        <td>{{$user->created_at->diffForHumans()}}</td>
    </tr>
@endforeach

@endif

</table>

@endsection
