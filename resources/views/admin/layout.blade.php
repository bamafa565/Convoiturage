
@extends('layouts.app')
@section('content')

<div class="container">
<table class='table table-hover'>
    @include('menu.admin')
<center>
<h1>LISTE DES RESERVATION</h1>
</center>
<div style="float:right">
 <a class="btn btn-success right" href="{{ Route('admin.index') }}">ITINERAIRE</a> <a class="btn btn-warning right" href="{{ Route('chauffeur') }}">Convoyeur</a>
</div>
        <thead>
       <th>MATRICULE</th>
        <th>PRENOM</th>
        <th>NOM</th>
        <th>DATE NAISSANCE</th>
        <th>VILLE DEPART</th>
        <th>VILLE D'ARRIVER</th>
        <th>DATE DEPART</th>
        <th>DATE RETOU</th>
        <th>ACTION</th>


        </thead>
        <tbody>
        @foreach($reservation as $res)
        <tr>
            <td> {{$res->id}}</td>
        <td> {{$res->prenom}}</td>
        <td> {{$res->nom}}</td>
        <td> {{$res->datenais}}</td>
        <td> {{$res->villedepart}} </td>
        <td> {{$res->villearriver}}</td>
        <td> {{$res->datedepart}} </td>
        <td> {{$res->datearriver}} </td>
       
      </tr>

        @endforeach


        </tbody>
    </table>
    </div>

 



@endsection