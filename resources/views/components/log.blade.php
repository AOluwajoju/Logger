@props(['log' => $log])
<div>
    <div style="margin:6px; ">
        <a href="{{route('users.logs', $log->user)}}" style="font-weight:bold; text-decoration:none">
            {{$log->user->name}}
        </a>
         <span style="color:grey"> {{$log->created_at->diffForHumans()}}</span>
        <p>{{$log->body}}</p> 
                            

        <div class="flex items-center">
             @auth
                @if (!$log->likedBy(auth()->user()))
                    <form action="{{ route('logs.likes', $log->id) }}" method="post" class="mr-1">
                        @csrf
                        <button type="submit" class="text-blue-200">Like</button>
                    </form>
                @else
                    <form action="{{ route('logs.likes', $log->id) }}" method="post" class="mr-1">
                         @csrf
                        @method('DELETE')
                        <button type="submit" class="text-blue-200">Unlike</button>
                    </form>
                @endif

                @can('delete', $log)
                    <form action="{{ route('logs.destroy', $log) }}" method="post">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="text-blue-200">&emsp; Delete</button>
                    </form>
                @endcan 

            @endauth
            <span class="mr-1"> {{$log->likes->count()}} {{Str::plural('like', $log->likes->count())}}</span>
        </div>
    </div>
</div>