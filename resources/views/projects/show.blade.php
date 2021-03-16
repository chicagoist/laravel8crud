@extends('layouts.app')

@section('title')
 Просмотр
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
                <h2>  {{ $project->name }}</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('projects.index') }}" title="Назад"> <i class="fas fa-backward "></i> </a>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Имя:</strong>
                {{ $project->first_name }}
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Фамилия:</strong>
                {{ $project->last_name }}
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Заметки:</strong>
                {{ $project->introduction }}
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Возраст:</strong>
                {{ $project->age }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Дата Создания:</strong>
                {{ date_format($project->created_at, 'd m Y') }}
            </div>
        </div>
    </div>
@endsection
