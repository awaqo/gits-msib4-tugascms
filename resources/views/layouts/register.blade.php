@extends('templates.auth')

@section('title', 'Register')

@section('content')
    <div class="flex justify-center mt-16">
        <div class="w-full max-w-md shadow-md rounded-md px-6 py-8 border border-gray-200">
            <div class="text-2xl font-semibold mb-5">Register</div>
            <form action="{{ route('do.register') }}" method="POST">
                @csrf
                <div class="relative z-0 w-full mb-6 group">
                    <input type="text" name="name" id="floating_name" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-blue-600 peer @error('name') is-invalid @enderror" placeholder=" " required aria-describedby="nameHelp" />

                    <label for="floating_name" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Name</label>
                    @error('name')
                        <div id="nameHelp" class="text-xs text-red-500">{{ $message }}</div>
                    @enderror
                </div>

                <div class="relative z-0 w-full mb-6 group">
                    <input type="email" name="email" id="floating_email" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-blue-600 peer @error('email') is-invalid @enderror" placeholder=" " required aria-describedby="emailHelp" />

                    <label for="floating_email" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Email address</label>
                    @error('email')
                        <div id="emailHelp" class="text-xs text-red-500">{{ $message }}</div>
                    @enderror
                </div>

                <div class="relative z-0 w-full mb-6 group">
                    <input type="password" name="password" id="floating_password" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-blue-600 peer @error('password') is-invalid @enderror" placeholder=" " required />

                    <label for="floating_password" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Password</label>
                    @error('password')
                        <div id="passwordHelp" class="text-xs text-red-500">{{ $message }}</div>
                    @enderror
                </div>

                <div class="relative z-0 w-full mb-3 group">
                    <input type="password" name="password_confirmation" id="floating_repeat_password" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-blue-600 peer @error('password_confirmation') is-invalid @enderror" placeholder=" " required />

                    <label for="floating_repeat_password" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Confirm password</label>
                    @error('password_confirmation')
                        <div id="passwordConfirmationHelp" class="text-xs text-red-500">{{ $message }}</div>
                    @enderror
                </div>
                <p class="mb-6 text-sm">
                    Sudah punya akun?
                    <a href="{{ route('login') }}" class="text-blue-500 hover:text-blue-600 hover:underline">Login</a>
                </p>
                <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full px-5 py-2.5 text-center">Register</button>
            </form>
        </div>
    </div>
@endsection