@extends('templates.app')

@section('title', 'Tambah Kategory')

@section('content')
    <div class="p-12">
        <div class="flex items-center gap-3">
            <a href="{{ route('view.category') }}" class="text-white font-medium bg-yellow-500 py-2 px-4 rounded-md hover:opacity-80 duration-300"><i class="fa-solid fa-chevron-left"></i> Back</a>
            <div class="text-2xl">Tambah Kategori</div>
        </div>

        <div class="max-w-xl">
            <form class="space-y-6" action="{{ route('add.category') }}" method="POST">
                @csrf
                <div>
                    <label for="category_name" class="block mb-3 text-sm font-medium text-gray-900">Nama Kategori</label>
                    <input type="text" name="category_name" id="category_name" 
                        class="bg-gray-50 border border-gray-400 text-gray-900 text-sm rounded-md block w-full p-2.5" 
                        required>
                    @if ($errors->has('name'))
                        <span class="text-xs text-red-500">{{ $errors->first('name') }}</span>
                    @endif
                </div>
                
                <button type="submit" class="w-full text-white font-medium rounded-lg text-sm px-5 py-3 text-center bg-blue-500 hover:opacity-80">
                    Tambah Kategori
                </button>
            </form>
        </div>
    </div>    
@endsection