@extends ('layouts.app')

@section ('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="card">
                    <div class="card-header">Редактирование задачи</div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('tasks.update',$task->id) }}" role="form">
                            {{csrf_field()}}
                            <div class="form-group row">
                                <label for="title">Заголовок</label>
                                <input type="text"
                                       class="form-control{{ $errors->has('caption') ? ' is-invalid' : '' }}"
                                       id="caption" name="caption" value="{{ $task->caption}}">

                                @if ($errors->has('caption'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('caption') }}</strong>
                                    </span>
                                @endif
                            </div>

                            <div class="form-group row">
                                <label for="description">Описание задачи</label>
                                <textarea class="form-control{{ $errors->has('description') ? ' is-invalid' : '' }}"
                                          id="description" name="description">{{$task->caption}}</textarea>

                                @if ($errors->has('description'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('description') }}</strong>
                                    </span>
                                @endif
                            </div>

                            <div class="form-group">
                                <button type="submit" class="btn btn-primary">Редактировать</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection