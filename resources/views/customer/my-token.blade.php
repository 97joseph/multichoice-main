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
        <div class="mt-4 flex justify-left">
        <button id="download-pdf" class="px-4 py-2 bg-blue-900 text-white rounded">Download as PDF</button>
        <button id="download-excel" class="ml-4 px-4 py-2 bg-blue-900 text-white rounded">Download as Excel</button>
    </div>
    </div>
    
@endsection

@section('js-scripts')
    <script type="module">
        $(document).ready(function() {
            $('#download-pdf').click(function() {
                const element = document.querySelector('.container');
                html2pdf(element, {
                    margin: 1,
                    filename: 'my-token.pdf',
                    image: { type: 'jpeg', quality: 0.98 },
                    html2canvas: { scale: 2 },
                    jsPDF: { unit: 'in', format: 'letter', orientation: 'portrait' }
                });
            });

            $('#download-excel').click(function() {
                const table = document.createElement('table');
                const row = table.insertRow();
                const cell1 = row.insertCell(0);
                const cell2 = row.insertCell(1);
                const cell3 = row.insertCell(2);

                cell1.innerHTML = 'Owner';
                cell2.innerHTML = 'Ticket No';
                cell3.innerHTML = 'Description';

                const dataRow = table.insertRow();
                dataRow.insertCell(0).innerHTML = '{{ $token['telephone'] ?? '' }}';
                dataRow.insertCell(1).innerHTML = '{{ $token['token_number'] ?? '' }}';
                dataRow.insertCell(2).innerHTML = 'Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse chronological order.';

                const wb = XLSX.utils.table_to_book(table);
                XLSX.writeFile(wb, 'my-token.xlsx');
            });
        });
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.9.2/html2pdf.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/xlsx/0.16.9/xlsx.full.min.js"></script>
@endsection

@section('js-scripts')
    <script type="module">
        $(document).ready(function() {

        });


    </script>
@endsection
