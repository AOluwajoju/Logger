@extends ('layouts.app')

@section('content')
    <div style="display:flex; justify-content: center">
        <div style=" background:white; padding:30px; border-radius: 25px; width: 30%; font-family:arial; ">
            Log In
            <hr/>
            <div style="margin:4px; content:center; align-content: center; margin:auto; padding:20px">

                @if (session('status'))
                    <div style="color:red; margin:5px; font-size:15px">
                        {{ session('status') }}
                    </div>
                @endif
                <form action="{{route('login')}}" method="post">
                    @csrf
                    <div style="margin:4px">
                        <label for="email" style="font-family:arial">Email<br></label>
                        <input type="email" name="email" id="email" value= "{{ old('email')}}" placeholder="Your Email" style="background:white; padding:20px; width: 100%; margin:auto; border-radius: 15px; @error('email') border-color:red; @enderror"/>  

                                @error('email')
                                    <div style="color:red; margin:5px; font-size:15px">
                                        {{ $message}}
                                    </div>
                                @enderror 
                    </div>

                    <div style="margin:4px">
                        <label for="password" style="font-family:arial">Password<br></label>
                        <input type="password" name="password" id="name" placeholder="Password" style="background:white; padding:20px; width: 100%; margin:auto; border-radius: 15px; @error('password') border-color:red; @enderror"/>  

                            @error('password')
                                <div style="color:red; margin:5px; font-size:15px">
                                    {{ $message}}
                                </div>
                            @enderror  
                    </div>

                    <div style="margin:4px">
                        <div style="display:flex">
                            <input type="checkbox" name="remember" id="remember"/>   
                            <label for="checkbox" style="font-family:arial">Remember Me<br></label>         
                        </div>
                    </div>

                    <div style="margin:4px">
                        <br>
                        <button type="submit" style="background:green; padding:20px; width: 100%; margin:auto; border-radius: 15px; color:white;">Login</button>  
                    </div>
                </form> 
            </div>
        </div>
    </div>
@endsection