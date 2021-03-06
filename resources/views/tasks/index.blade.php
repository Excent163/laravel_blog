@extends('layout.master')

@section('content')

    <div class="col-md-8 blog-main">
        <h3 class="pb-4 mb-4 font-italic border-bottom">
            Список задач
        </h3>

        <a class="btn btn-primary" href="{{ route('tasks.create', [], false) }}" role="button">Новая задача</a>
        <br><br>
        <hr>

        @if($tasks->isNotEmpty())
            @foreach($tasks as $task)
                @include('tasks.item')
            @endforeach
        @else
            <h3>Задача ещё не создана</h3>
        @endif

        {{ $tasks->links() }}
    </div>

@endsection
