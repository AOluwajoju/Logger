@extends ('layouts.app')
@section('content')
    <div style="display:flex; justify-content: center">
        <div style=" background:white; padding:30px; border-radius: 25px; width: 30%; font-family:arial; ">
            Register
            <hr/>
            <div style="margin:4px; content:center; align-content: center; margin:auto; padding:20px">
                <form action="{{route('register')}}" method="post">
                    @csrf
                    <div style="margin:4px">
                        <label for="name" style="font-family:arial">Name<br></label>
                        <input type="text" name="name" id="name" value= "{{ old('name')}}" placeholder="Your name" style="background:white; padding:20px; width: 100%; margin:auto; border-radius: 15px; @error('name') border-color:red; @enderror"/>  

                        @error('name')
                            <div style="color:red; margin:5px; font-size:15px">
                                {{ $message}}
                            </div>
                        @enderror
                    </div>


                    <div style="margin:4px">
                        <label for="username" style="font-family:arial">Username<br></label>
                        <input type="text" name="username" id="username" value= "{{ old('username')}}" placeholder="Choose a Username" style="background:white; padding:20px; width: 100%; margin:auto; border-radius: 15px; @error('username') border-color:red; @enderror"/>  

                            @error('username')
                                <div style="color:red; margin:5px; font-size:15px">
                                    {{ $message}}
                                </div>
                            @enderror
                    </div>
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
                        <input type="password" name="password" id="name" placeholder="Set Password" style="background:white; padding:20px; width: 100%; margin:auto; border-radius: 15px; @error('password') border-color:red; @enderror"/>  

                            @error('password')
                                <div style="color:red; margin:5px; font-size:15px">
                                    {{ $message}}
                                </div>
                            @enderror  
                    </div>
                    <div style="margin:4px">
                        <input type="password" name="password_confirmation" id="password_confirmation" placeholder="Confirm Password" style="background:white; padding:20px; width: 100%; margin:auto; border-radius: 15px"/>  
                    </div>
                    <div style="margin:4px">
                        <br>
                        <button type="submit" style="background:green; padding:20px; width: 100%; margin:auto; border-radius: 15px; color:white;">Submit</button>  
                    </div>
                </form> 
            </div>
        </div>
    </div>
@endsection