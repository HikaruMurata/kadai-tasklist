@if (count($errors) > 0)
    <ul>
        @foreach ($errors->all() as $error)
         <div class="alert alert-warning">{{ $error }}</div>
            <li>{{ $error }}</li>
        @endforeach
    </ul>
@endif