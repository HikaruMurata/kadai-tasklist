

        @extends('layouts.app')

@section('content')
    @if (Auth::check())
        <?php $user = Auth::user(); ?>
        <div class="row">
            
            <div class="col-xs-8">
                 
                @if (count($tasks) > 0)
                    
                    @include('tasks.index', ['tasks' => $tasks])
                    @include('tasks.tasks', ['tasks' => $tasks])
                @else
                    {!! link_to_route('tasks.create', '新規メッセージの投稿', null, ['class' => 'btn btn-primary']) !!}
                @endif
            </div>
        </div>
    @else
        <div class="center jumbotron">
            <div class="text-center">
                <h1>Welcome to the tasks</h1>
                {!! link_to_route('signup.get', 'Sign up now!', null, ['class' => 'btn btn-lg btn-primary']) !!}
            </div>
        </div>
    @endif
@endsection

    
