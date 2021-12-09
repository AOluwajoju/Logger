@extends ('layouts.app')

@section('content')
    <div style="display:flex; justify-content: center">
        <div class="p-6" style="font-family:arial; width:65%;">
            <div class="pb-6 text-white-200 text-2xl font-large mb-3" style="width:65%; font-family:arial;">
                <h1>{{$user->name}}</h1>
                <h3>{{$logs->count()}} {{Str::plural('Log', $logs->count())}}; {{ $user->receivedLikes->count()}} likes </h3>
                <hr>
            </div>
            <div style="background:white; padding:30px; border-radius: 25px; width:65%; font-family:arial;">
                @if ($logs->count())
                    @foreach ($logs as $log)
                        <x-log :log="$log"/>
                    @endforeach

                    {{$logs->links()}}
                @else
                    <p>{{$user->name}} does not have any posts</p>
                @endif
                </div>
                </div>
            </div>
        </div>
    </div>
@endsection