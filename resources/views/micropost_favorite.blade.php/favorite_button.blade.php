@if(Auth::user()->is_favorite($micropost->id))
    {{-- お気に入りを外すボタンのフォーム--}}
        {!! Form::open(['route' => ['favorites.unfavorite', $micropost->id], 'method' => 'delete']) !!}
            {!! Form::submit('Unfavorite', ['class' => 'btn btn-danger btn-sm']) !!}
        {!! Form::close() !!}   
@else
{{-- お気に入りボタンのフォーム--}}
    {!! Form::open(['route' => ['favorites.favorite', $micropost->id], 'method' => 'store']) !!}
        {!! Form::submit('favorite', ['class' => 'btn btn-primary btn-sm']) !!}
    {!! Form::close() !!}
@endif