@extends('layouts.app')

@section('title')
 Создание
@endsection

@section('hheader')
    <div class="row">
        <div class="col-lg-12 margin-tb text-center">

                <a href="{{ route('projects.index') }}" title="Главная">
                    <h2>Laravel 8 CRUD</h2>
                </a>

        </div>
    </div>
@endsection

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Добавить Новый Пункт</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('projects.index') }}" title="Назад"> <i class="fas fa-backward "></i> </a>
            </div>
        </div>
    </div>

    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Ой!</strong> Есть проблемка с вашими данными.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="{{ route('projects.store') }}" method="POST" >
        @csrf

        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Имя:</strong>
                    <input type="text" name="first_name" class="form-control" placeholder="Имя">
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Фамилия:</strong>
                    <input type="text" name="last_name" class="form-control" placeholder="Фамилия">
                </div>
            </div>


            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Заметки:</strong>
                    <textarea class="form-control" style="height:50px" name="introduction"
                        placeholder="Заметки"></textarea>
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Возраст:</strong>
                    <input type="number" name="age" class="form-control" placeholder="Возраст">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>

    </form>
@endsection

