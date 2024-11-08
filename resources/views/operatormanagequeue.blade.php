@extends('app-layout')
@section('title', 'MultiChoice Queue System | Queue System  Solutions')
@section('description', 'MultiChoice Queue System | Queue System  Solutions')
@section('keywords', 'MultiChoice Queue System | Queue System  Solutions')
@section('main')
    <div id="operatormanagequeue"></div>
@endsection
@section('js-scripts')
    <script>
        // Passing image URL to React
        window.heroImage = @json(asset('images/AdobeStock_540220337.jpeg'));
        window.heroDescriptionImage = @json(asset('images/AdobeStock_673947991.jpeg'));
        window.onlineVisibility = @json(asset('images/AdobeStock_642431179.jpeg'));
        window.onlineVisibility1 = @json(asset('images/dstv.jpg'));
    </script>
@endsection