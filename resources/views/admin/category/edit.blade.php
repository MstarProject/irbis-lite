@extends('layouts.app')

@section('content')
    <form method="POST" action="{{route('admin.categories.update', $aCategory->id)}}">
        @method("PATCH")
        @csrf
        <div class="container">
            @if($errors->hasBag())
            <div class="row justify-content-center">
                <div class="col-md-8">
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
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-body">
                            <div class="tab-pane active" id="maindata" role="tabpanel">
                                <div class="form-group">
                                    <label for="title">Название</label>
                                    <input type="text" value="{{ old('title', $aCategory->title) }}"
                                           name="title"
                                           id="title"
                                           class="form-control"
                                           minlength="3"
                                           required>
                                </div>
                                <div class="form-group">
                                    <label for="slug">Код</label>
                                    <input type="text" value="{{ old('slug', $aCategory->slug) }}"
                                           name="slug"
                                           id="slug"
                                           class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="id_parent">Родитель</label>
                                    <select name="id_parent"
                                            id="id_parent"
                                            placeholder="Выберите категорию"
                                            class="form-control">
                                        @foreach($aCategories as $aItem)
                                            <option value="{{ $aItem->id }}"
                                                    @if($aItem->id == $aCategory->id_parent) selected @endif>
                                                {{ $aItem->id_title }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="description">Описание</label>
                                    <textarea name="description"
                                              id="description"
                                              class="form-control"
                                              rows="3">
                                        {{ old('description', $aCategory->description) }}
                                    </textarea>
                                </div>
                                <div class="form-check">
                                    <input name="is_visible" type="hidden" value="0">

                                    <input name="is_visible"
                                           type="checkbox"
                                           class="form-check-input"
                                           value="1"
                                           @if ($aCategory->is_visible) checked @endif
                                    >

                                    <label class="form-check-label" for="is_visible">Видимый</label>
                                </div>
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="date">Дата создания</label>

                                        <input type="text" value="{{ $aCategory->created_at }}"
                                               class="form-control"
                                               id="date"
                                               name="date"
                                               disabled
                                        >
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <button type="submit" class="btn btn-primary">Сохранить</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
@endsection
