@extends('app-layout')
@section('title', 'MultiChoice Queue System | Queue System  Solutions')
@section('description', 'MultiChoice Queue System | Queue System  Solutions')
@section('keywords', 'MultiChoice Queue System | Queue System  Solutions')
@section('main')
    <div class="font-[sans-serif]">
        <div class="min-h-screen flex flex-col items-center  h-full">
            <div
                class="grid md:grid-cols-2 items-center gap-4 max-md:gap-8 max-w-6xl max-md:max-w-lg w-full p-4 m-4 shadow-[0_2px_10px_-3px_rgba(6,81,237,0.3)] rounded-md">
                
                <div class="md:h-auto rounded-xl lg:p-12 p-8">
                    <h2 class="text-2xl font-bold mb-4">Contact Our Support Team</h2>
                    <p>If you have any questions or need assistance, please reach out to our support team.</p>
                    <p>Email: support@example.com</p>
                    <p>Phone: +123 456 7890</p>
                </div>
                     
            

                <div class="md:h-auto  rounded-xl lg:p-12 p-8">
                    <img src="{{ asset('images/dstv.jpg') }}"
                         alt="login-image"/>
                </div>
            </div>
        </div>
    </div>
@endsection
