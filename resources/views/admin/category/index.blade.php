@extends('layouts.app')

@section('content')
    <div class="container">
        @if(session('success'))
            <div class="row justify-content-center">
                <div class="col-md-11">
                    <div class="alert alert-success" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">x</span>
                        </button>
                        {{ session()->get('success') }}
                    </div>
                </div>
            </div>
        @endif
        @if($errors->hasBag())
            <div class="row justify-content-center">
                <div class="col-md-11">
                    <div class="alert alert-danger" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">x</span>
                        </button>
                        {{ $errors->first() }}
                    </div>
                </div>
            </div>
        @endif
        <div class="row justify-content-center">
            <div class="col-md-11">
                <nav class="navbar navbar-toggleable-md navbar-light bg-faded">
                    <a class="btn btn-primary" href="{{route('admin.categories.create')}}">Создать</a>
                </nav>
                <div class="card">
                    <div class="card-body">
                        <table class="table table-hover">
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>Категория</th>
                                <th>Родитель</th>
                                <th></th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($aPaginator as $aItem)
                                <tr>
                                    <td>{{$aItem->id}}</td>
                                    <td>{{$aItem->title}}</td>
                                    <td>{{$aItem->id_parent}}</td>
                                    <td>
                                        <a href="{{route('admin.categories.edit', $aItem->id)}}">
                                            Редактировать
                                        </a><br>
                                        <form action="{{ route('admin.categories.destroy', $aItem->id) }}" method="POST">
                                            @method("DELETE")
                                            @csrf
                                            <button type="submit" class="btn btn-href">Удалить</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        @if ($aPaginator->total() > $aPaginator->count())
        <br>
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        {{$paginator->links()}}
                    </div>
                </div>
            </div>
        </div>
        @endif
    </div>
@endsection
