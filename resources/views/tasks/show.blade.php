@extends('layouts.app')

@section('content')

<!-- ここにページ毎のコンテンツを書く -->
<h1>id = {{ $tasks->id }} のタスク詳細ページ</h1>
    
    <p>ステータス: {{ $tasks->status }}</p>
    <p>メッセージ: {{ $tasks->content }}</p>
    
     {!! link_to_route('tasks.edit', 'このメッセージ編集', ['id' => $tasks->id]) !!}
     
      {!! Form::model($tasks, ['route' => ['tasks.destroy', $tasks->id], 'method' => 'delete']) !!}
        {!! Form::submit('削除') !!}
    {!! Form::close() !!}

@endsection
