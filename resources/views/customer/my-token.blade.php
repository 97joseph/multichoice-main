@extends('app-layout')
@section('title', 'MultiChoice Queue System | Queue System  Solutions')
@section('description', 'MultiChoice Queue System | Queue System  Solutions')
@section('keywords', 'MultiChoice Queue System | Queue System  Solutions')
@section('main')
    <div class="container mx-auto max-w-3xl">
        <a href="#" class="flex flex-col items-center bg-white border border-gray-200 rounded-lg shadow md:flex-row md:max-w-xl hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">
            <img class="object-cover w-full rounded-t-lg h-40 md:h-auto md:w-48 md:rounded-none md:rounded-s-lg" src="{{ asset('images/dstv.jpg') }}" alt="">
            <div class="flex flex-col justify-between p-4 leading-normal">
                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Owner: {{ $token['telephone'] ?? '' }}</h5>
                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Ticket No: {{ $token['token_number'] ?? '' }}</h5>
                <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse chronological order.</p>
            </div>
        </a>
    </div>

@endsection
@section('js-scripts')
    <script type="module">
        $(document).ready(function() {

        });


    </script>
@endsection
