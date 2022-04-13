@extends('adminlte::page')

    @section('content')
        <h1>Atores</h1>
        <table class='table table-stripe table-bordered table-hover'>
            <thead>
                <th>Nome</th>
                <th>Data de Nascimento</th>
            </thead>
            <tbody>
                @foreach($atores as $ator)
                    @php($ator->dt_nascimento = date('d-m-Y', strtotime($ator->dt_nascimento)))
                    <tr>
                        <td>{{ $ator->nome }}</td>
                        <td>{{ $ator->dt_nascimento }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @stop