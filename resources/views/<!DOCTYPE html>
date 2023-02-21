<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    {!! Form::open() !!}
        <div>
            <div>todo</div>
            {!! Form::text('content',null,[$errors->first('content','is_invalid')]) !!}
            {!! $errors->first('content','<small >:message</small>') !!}
            <button type="submit">追加</button>
        </div>
    {!! Form::close() !!}

    @foreach ($todos as $todo)
    {{-- <div>{!! $todo->content!!}</div> --}}
    

    {!! Form::open() !!}
    {!! Form::hidden('id',$todo->id)!!}
    <p>{{$todo->updated_at}}</p>
    {!! Form::text('content',$todo->content,[$errors->first('content','is_invalid')]) !!}

    <button type="submit">更新</button>

    {!! Form::close() !!}

    <a onclick="return confirm('本当に削除しますか');" href="{{route('delete',$todo)}}">削除</a>
    @endforeach
</body>
</html>