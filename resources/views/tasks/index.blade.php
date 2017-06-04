@extends('layouts.app')

@section('content')

<!-- ここにページ毎のコンテンツを書く -->
<h1>タスク一覧</h1>


    @if (count($tasks) > 0)
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>id</th>
                    <th>タイトル</th>
                    <th>メッセージ</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($tasks as $task)
                    <tr>
                        <td>{!! link_to_route('tasks.show', $tasks->id, ['id' => $tasks->id]) !!}</td>
                        <td>{{ $tasks->status }}</td>
                        <td>{{ $tasks->content }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif
     {!! link_to_route('tasks.create', '新規メッセージの投稿', null, ['class' => 'btn btn-primary']) !!}
    
@endsection
