@extends('templates.app')

@section('title', 'Profile')

@section('content')
    <div class="px-16 py-12">
        {{-- alert --}}
        @if ($message = Session::get('success'))
            <div class="mt-8">
                <div id="alert-success" class="flex p-4 mb-4 mx-3 bg-green-100 border border-green-400 rounded-lg" role="alert">
                    <svg aria-hidden="true" class="flex-shrink-0 w-5 h-5 text-green-700" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"></path></svg>
                    <span class="sr-only">Info</span>
                    <div class="ml-3 text-base text-green-700">
                        {{ $message }}
                    </div>
                    <button type="button" class="ml-auto -mx-1.5 -my-1.5 bg-green-100 text-green-500 rounded-lg focus:ring-2 focus:ring-green-400 p-1.5 hover:bg-green-200 inline-flex h-8 w-8" data-dismiss-target="#alert-success" aria-label="Close">
                    <span class="sr-only">Close</span>
                    <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                    </button>
                </div>
            </div>
        @endif

        <div class="max-w-4xl mt-6">
            <form action="{{ url('profile/' . $user->id) }}" method="POST" enctype="multipart/form-data">
                @method('PUT')
                @csrf
                <div class="grid gap-6 mb-6 md:grid-cols-2">
                    <div class="space-y-4">
                        <div>
                            <label for="profile_name" class="block mb-1 text-sm font-medium text-gray-900">Nama</label>
                            <input type="text" value="{{ $user->name }}" name="profile_name" id="profile_name" 
                                class="bg-gray-50 border border-gray-400 text-gray-900 text-sm rounded-md block w-full p-2.5" 
                                required>
                            @if ($errors->has('profile_name'))
                                <span class="text-xs text-red-500">{{ $errors->first('profile_name') }}</span>
                            @endif
                        </div>
                        <div>
                            <label for="profile_email" class="block mb-1 text-sm font-medium text-gray-900">Email</label>
                            <input type="email" value="{{ $user->email }}" name="email" id="profile_email" 
                                class="bg-gray-50 border border-gray-400 text-gray-900 text-sm rounded-md block w-full p-2.5" 
                                disabled>
                            @if ($errors->has('profile_email'))
                                <span class="text-xs text-red-500">{{ $errors->first('profile_email') }}</span>
                            @endif
                        </div>
                    </div>
                    <div class="max-w-xs space-y-4">
                        <div class="overflow-hidden rounded-lg">
                            <label class="block text-sm mb-2 font-medium text-gray-900" for="profile_avatar">Avatar</label>
                            @if ($user->avatar == NULL)
                                <img src="{{ asset('img/default.png') }}" alt="Gambar {{ $user->name }}">
                            @else
                                <img class="w-40 h-40" src="{{ asset('storage/images/profile/' . $user->avatar) }}" alt="Gambar {{ $user->name }}">
                            @endif
                        </div>
                        <div>                    
                            <label class="block text-sm mb-2 font-medium text-gray-900" for="profile_avatar">Upload Avatar Baru <span class="text-sm text-red-500">*Jika perlu</span></label>
                            <input type="file" name="profile_avatar" id="profile_avatar" class="block w-full text-sm text-gray-900 border border-gray-400 rounded-lg cursor-pointer bg-gray-50 focus:outline-none" aria-describedby="profile_avatar_help">
                            <p class="mt-1 text-sm text-gray-500" id="profile_avatar_help">PNG, JPG, JPEG</p>
                            @if ($errors->has('profile_avatar'))
                                <span class="text-xs text-red-500">{{ $errors->first('profile_avatar') }}</span>
                            @endif
                        </div>
                    </div>
                </div>
                
                <button type="submit" class="w-full text-white font-medium rounded-lg text-sm px-5 py-3 text-center bg-blue-500 hover:opacity-80">
                    Edit Profile
                </button>
            </form>
        </div>
    </div>
@endsection