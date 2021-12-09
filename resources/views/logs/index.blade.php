@extends ('layouts.app')

@section('content')
    <div style="display:flex; justify-content: center">
        <div style=" background:white; padding:30px; border-radius: 25px; width:65%; font-family:arial;">
            Logs
            <hr>
            <div style="margin:4px; content:center; align-content: center; margin:auto; padding:20px">
                <form action="{{route('logs')}}" method="post">
                    @csrf
                    <div style="margin:4px">
                        <label for="body" style="font-family:arial">Logs<br></label>
                        <textarea class="border-red-100" name="body" id="body" cols="40" placeholder="Place Your Log!" style=" padding:20px; width: 100%; margin:auto; border-radius: 15px; @error('body') border-color:red; @enderror"></textarea>  

                        @error('body')
                            <div style="color:red; margin:5px; font-size:15px">
                                {{ $message}}
                            </div>
                        @enderror
                    </div>
                    <div>
                        <button type="submit" style="background:green; padding:20px; width: 100%; margin:auto; border-radius: 15px; color:white;">Post</button>  
                    </div>
                </form> 

                @if ($logs->count())
                    @foreach ($logs as $log)
                        <x-log :log="$log"/>
                    @endforeach

                    {{$logs->links()}}
                @else
                    <p>There are no logs</p>
                @endif
            </div>
        </div>
    </div>
@endsection