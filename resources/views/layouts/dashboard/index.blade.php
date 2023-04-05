@extends('templates.app')

@section('title', 'Dashboard')

@section('content')
    <div class="pl-8 py-8">
        <div class="flex flex-wrap gap-5">
            <div class="min-w-[20rem] p-6 flex flex-col items-center gap-3 bg-emerald-100 border border-gray-200 rounded-lg shadow-emerald-300 shadow-md">
                <svg aria-hidden="true" class="flex-shrink-0 w-12 h-12 text-emerald-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M5 3a2 2 0 00-2 2v2a2 2 0 002 2h2a2 2 0 002-2V5a2 2 0 00-2-2H5zM5 11a2 2 0 00-2 2v2a2 2 0 002 2h2a2 2 0 002-2v-2a2 2 0 00-2-2H5zM11 5a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V5zM11 13a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z"></path></svg>
                <div>
                    <h5 class="mb-2 text-2xl font-semibold tracking-tight text-emerald-800">Total Kategori</h5>
                    <p class="mb-3 text-center font-bold text-4xl text-emerald-600 opacity-60">{{ $category }}</p>
                </div>
            </div>
        
            <div class="min-w-[20rem] p-6 flex flex-col items-center gap-3 bg-blue-100 border border-gray-200 rounded-lg shadow-blue-300 shadow-md">
                <svg aria-hidden="true" class="flex-shrink-0 w-12 h-12 text-blue-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 2a4 4 0 00-4 4v1H5a1 1 0 00-.994.89l-1 9A1 1 0 004 18h12a1 1 0 00.994-1.11l-1-9A1 1 0 0015 7h-1V6a4 4 0 00-4-4zm2 5V6a2 2 0 10-4 0v1h4zm-6 3a1 1 0 112 0 1 1 0 01-2 0zm7-1a1 1 0 100 2 1 1 0 000-2z" clip-rule="evenodd"></path></svg>
                <div>
                    <h5 class="mb-2 text-2xl font-semibold tracking-tight text-blue-800">Total Produk</h5>
                    <p class="mb-3 text-center font-bold text-4xl text-blue-600 opacity-60">{{ $product }}</p>
                </div>
            </div>
        </div>
    </div>
@endsection