@extends('layouts.app')

@section('title')
    Главная
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
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('projects.create') }}" title="Создать запись"> <i
                    class="fas fa-plus-circle"></i>
                </a>
            </div>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table class="table table-bordered table-responsive-lg">
        <tr>
            <th>№ п.п.</th>
            <th>Имя</th>
            <th>Фамилия</th>
            <th>Заметки</th>
            <th>Возраст</th>
            <th>Дата Создания</th>
            <th width="280px">Применить</th>
        </tr>
        @foreach ($projects as $project)
            <tr>
                <td>{{ ++$i }}</td>
                <td>{{ $project->first_name }}</td>
                <td>{{ $project->last_name }}</td>
                <td>{{ $project->introduction }}</td>
                <td>{{ $project->age }}</td>
                <td>{{ date_format($project->created_at, 'd m Y') }}</td>
                <td>
                    <form action="{{ route('projects.destroy', $project->id) }}" method="POST">

                        <a href="{{ route('projects.show', $project->id) }}" title="просмотр">
                            <i class="fas fa-eye text-success  fa-lg"></i>
                        </a>

                        <a href="{{ route('projects.edit', $project->id) }}" title="редактирование">
                            <i class="fas fa-edit  fa-lg"></i>

                        </a>

                        @csrf
                        @method('DELETE')

                        <button type="submit" title="удаление" style="border: none; background-color:transparent;">
                            <i class="fas fa-trash fa-lg text-danger"></i>

                        </button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>


@endsection
