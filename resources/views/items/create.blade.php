@extends('layouts.app')

@section('contents')
    <div class="search">
        <div class="row">
            <div class="text-center">
                {!! Form::open(['route' => 'item.create', 'method' => 'get', 'class' => 'form-inline']) !!}
                    <div class="form-group">
                        {!! Form::text('keyword', $keyword, ['class' => 'form-control input-lg', 'placeholder' => 'キーワードを入力', 'size' => '40']) !!}
                    </div>
                    {Form::submit('商品を検索', ['class' => 'btn btn-success btn-lg']) !!}
                {!! Form::close() !!}
            </div>
        </div>
    </div>
    
    @include('items.items', ['items' => $items])
@endsection