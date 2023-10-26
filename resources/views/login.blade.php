<!--extending layouts.main here-->
@extends('layouts.main')

<!--pushing title here-->
    @push('title')
        Login
    @endpush
<!--pushing title ends here-->  

<!--login-section starts here-->
@section('login')
    <!--main-content starts here-->
    <div class="main-content">

        <!--login-here starts here-->
        <div class="login-here">
            <!--login starts here-->
            <div class="login">
                <p>Login Here</p>
                <!--user-info starts here-->
                <div  class="user-info">
                    <!--form starts here-->
                    <form method="post" action="{{route('login.form')}}">
                        @csrf
                        <!--home-section starts here-->
                        <table class="login-1">
                            <tr class="inpt">
                                <td ><span>Username</span></td>
                                <td><input type="text" name="fullname"></td>
                                    @error('fullname')
                                    {{$message}}
                                    @enderror
                            </tr><br>
                            <tr class="inpt">
                                <td ><span>Password</span></td>
                                <td><input type="password" name="password"></td>
                                    @error('password')
                                    {{$message}}
                                    @enderror
                            </tr>
                            <tr class="logn-btn" >
                                <td></td>
                                <td><input class="log" type="submit" name="save" value="Login">
                                </td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>or</td>
                            </tr>
                            
                            <tr class="google-login-btn">
                                <td></td>
                                <td><a href="{{Route('google.login')}}" >Login With Google</a></td>
                            </tr>
                        </table>
                        <!--login-1 ends here-->
                    </form>
                    <!--form ends here-->
                </div>
                <!--user-info ends here-->
            </div>
            <!--login ends here-->
        </div>
        <!--login-here ends here-->
    </div>
    <!--main-content ends here-->

    <!--sign-up starts here-->
    <div class="sign-up">
        <!--sign starts here-->
        <div class="sign">
            <p>New to Enest? <a href=""> Sign up</a></p>
            <!--user-info starts here-->
            <div  class="user-info">
                <!--form starts here-->
                <form method="post" action="{{route('signup')}}">
                    @csrf
                    <!--login-1 starts here-->
                    <table class="login-1">
                        <tr class="inpt-1">
                            <td ><span>Full Name</span></td>
                            <td><input type="text" name="fname"></td>
                        </tr><br>
                        <tr class="inpt-1">
                            <td ><span>Email</span></td>
                            <td><input type="text" name="email"></td>
                        </tr>
                        <tr class="inpt-1">
                            <td ><span>Password</span></td>
                            <td><input type="password" name="password"></td>
                        </tr>
                        <tr class="logn-btn" >
                            <td></td>
                            <td><input class="log" type="submit" name="save" value="Sign up">
                            </td>
                        </tr>
                    </table>
                    <!--login-1 ends here-->
                </form>
                <!--form ends here-->
            </div>
            <!--user-info ends here-->
        </div>
        <!--sign ends here-->
    </div>
    <!--sign-up ends here-->
@endsection
<!--login-section ends here-->