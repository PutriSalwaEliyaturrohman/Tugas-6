@extends('layouts.app')

@section('title', 'Cobaaaaaa')

@section('content')
    <div class="card">
        <div class="card-body">
        <h3>Nama Group : {{ $groups['name'] }}</h3>
        <h3>Description : {{ $groups['description'] }}</h3>
        <h3>Jumlah anggota : 3</h3>
        <h3>Jumlah anggota yang pernah masuk : 3</h3>
        <h3>Jumlah anggota yang keluar: </h3>
        </div>
    </div>
@endsection
