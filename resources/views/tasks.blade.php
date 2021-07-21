@extends('layouts.master')

@section('title')
    Task | App
@endsection

@section('content')
<!-- Empieza contenido de la página task-->

    <!--Navegación del sitio-->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a href="#" class="navbar-brand ml-2">Task App</a>
                <form class="d-flex">
                    <div class="input-group">
                        <input type="search" id="search" class="form-control" placeholder="Search your task">
                        <div class="input-group-append">
                            <span class="input-group-text" id="basic-addon1">
                                <i class="bi bi-search"></i>
                            </span>
                        </div>
                    </div>
{{--                     <button class="btn btn-success m-2 my-sm-0" type="submit">
                        Search
                    </button> --}}
                </form>
        </div>
    </nav>

    <div class="container p-4">
        <div class="row">
            <div class="col-md-5 mb-4">
                <div class="card">
                    <div class="card-body">
                        <form id="task-form">
                            <div class="mb-3">
                                <input type="text" id="name" placeholder="Task Name" class="form-control">
                            </div>
                            <div class="mb-3">
                                <textarea id="description" cols="30" rows="10" class="form-control" placeholder="Task Description"></textarea>
                            </div>
                            <div class="d-grid">
                                <button type="submit" class="btn btn-primary text-center">Save Task</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-7">
                <div class="card mb-4" id="task-result">
                    <div class="card-body">
                        <ul id="container">

                        </ul>
                    </div>
                </div>
                <table class="table table-bordered table-sm">
                    <thead>
                       <tr>
                           <td>Id</td>
                           <td>Name</td>
                           <td>Description</td>
                       </tr> 
                    </thead>
                    <tbody id="tasks">

                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
<script src="{{asset('js/task.js')}}"></script>
@endsection