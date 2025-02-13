@extends('layouts.admin');

@section('content')
    <div class="card mt-4 mb-4 border-light shadow">
        <div class="card-header hstack gap-2">
            <span>Listar usuários</span>
            <span class="ms-auto">
                <a href="#" class="btn btn-success btn-sm">Cadastrar</a>
            </span>
        </div>
        <div class="card-body">
                <table class="table">
                    <thead>
                        <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Nome</th>
                        <th scope="col">E-mail</th>
                        <th scope="col">Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th>1</th>
                            <td>flavio</td>
                            <td>flavio@gmail.com</td>
                            <td>
                                <a href="#" class="btn btn-primary btn-sm">Visualizar</a>
                                <a href="#" class="btn btn-warning btn-sm">Editar</a>
                                <a href="#" class="btn btn-danger btn-sm">Apagar</a>
                            </td>
                        </tr>
                        <tr>
                            <th>2</th>
                            <td>Kelly</td>
                            <td>Kelly@gmail.com</td>
                            <td>
                                <a href="#" class="btn btn-primary btn-sm">Visualizar</a>
                                <a href="#" class="btn btn-warning btn-sm">Editar</a>
                                <a href="#" class="btn btn-danger btn-sm">Apagar</a>
                            </td>
                        </tr>
                        <tr>
                            <th>3</th>
                            <td>Jéssica</td>
                            <td>jéssica@gmail.com</td>
                            <td>
                                <a href="#" class="btn btn-primary btn-sm">Visualizar</a>
                                <a href="#" class="btn btn-warning btn-sm">Editar</a>
                                <a href="#" class="btn btn-danger btn-sm">Apagar</a>
                            </td>
                        </tr>
                        <tr>
                            <th>4</th>
                            <td>Gabrielly</td>
                            <td>gabrielly@gmail.com</td>
                            <td>
                                <a href="#" class="btn btn-primary btn-sm">Visualizar</a>
                                <a href="#" class="btn btn-warning btn-sm">Editar</a>
                                <a href="#" class="btn btn-danger btn-sm">Apagar</a>
                            </td>
                        </tr>
                    </tbody>
            </table>
        </div>
    </div>

@endsection

