@extends('admin.dashboard-layout')
@section('title', 'MultiChoice Queue System | Queue System  Solutions')
@section('description', 'MultiChoice Queue System | Queue System  Solutions')
@section('keywords', 'MultiChoice Queue System | Queue System  Solutions')
@section('main')
    <div class="flex flex-row">
        <div class="w-1/3">
            <img src="{{ asset('images/dstv.jpg') }}" alt="login-image" class="w-full h-auto"/>
        </div>
        <div class="w-2/3 overflow-x-auto">
            <div class="min-w-full inline-block align-middle">
                
                <div class="overflow-hidden border rounded-lg border-gray-300">
                    @include('components.alerts')
                    <table class="min-w-full rounded-xl">
                        <thead>
                            <tr class="bg-gray-50">
                                <th scope="col" class="p-5 text-left text-sm leading-6 font-semibold text-gray-900 capitalize">NO</th>
                                <th scope="col" class="p-5 text-left text-sm leading-6 font-semibold text-gray-900 capitalize">Ticket ID</th>
                                <th scope="col" class="p-5 text-left text-sm leading-6 font-semibold text-gray-900 capitalize">Owner</th>
                                <th scope="col" class="p-5 text-left text-sm leading-6 font-semibold text-gray-900 capitalize">Service</th>
                                <th scope="col" class="p-5 text-left text-sm leading-6 font-semibold text-gray-900 capitalize">User</th>
                                <th scope="col" class="p-5 text-left text-sm leading-6 font-semibold text-gray-900 capitalize">Status</th>
                                <th scope="col" class="p-5 text-left text-sm leading-6 font-semibold text-gray-900 capitalize">Action</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-300">
                            @foreach($tokens as $item)
                                <tr>
                                    <td class="p-5 whitespace-nowrap text-sm leading-6 font-medium text-gray-900">{{ $item->id ?? '' }}</td>
                                    <td class="p-5 whitespace-nowrap text-sm leading-6 font-medium text-gray-900">
                                        <button class="text-blue-600 hover:underline" onclick="speakText('{{ $item->token_number ?? '' }}')">
                                            {{ $item->token_number ?? '' }}
                                        </button>
                                        <script>
                                            function speakText(text) {
                                                var speech = new SpeechSynthesisUtterance(text + 'Please Proceed to desk 1 or 2 to be served');
                                                window.speechSynthesis.speak(speech);
                                            }
                                        </script>
                                    </td>
                                    </td>
                                    <td class="p-5 whitespace-nowrap text-sm leading-6 font-medium text-gray-900">{{ $item->telephone ?? '' }}</td>
                                    <td class="p-5 whitespace-nowrap text-sm leading-6 font-medium text-gray-900">{{ $item->service->name ?? '' }}</td>
                                    <td class="p-5 whitespace-nowrap text-sm leading-6 font-medium text-gray-900">{{ $item->user->name ?? '' }}</td>
                                    <td class="p-5 whitespace-nowrap text-sm leading-6 font-medium text-gray-900">{{ $item->status->name ?? '' }}</td>
                                    <td class="p-5 whitespace-nowrap text-sm leading-6 font-medium text-gray-900">
                                        <button id="dropdownHoverButton-{{ $item->id }}" data-dropdown-toggle="dropdownHover-{{ $item->id }}" data-dropdown-trigger="hover" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" type="button">Update <svg class="w-2.5 h-2.5 ms-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
                                            </svg>
                                        </button>
                                        <!-- Dropdown menu -->
                                        <div id="dropdownHover-{{ $item->id }}" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700">
                                            <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownHoverButton">
                                                @foreach($statuses as $status)
                                                    <li>
                                                        <form method="POST" action="{{ url('update-status') }}">
                                                            <input type="hidden" name="status" value="{{ $status->id ?? '' }}">
                                                            <input type="hidden" name="token" value="{{ $item->id ?? '' }}">
                                                            @csrf
                                                            <button type="submit" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">{{ $status->name ?? '' }}</button>
                                                        </form>
                                                    </li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                <div class="mt-5">
                    <h2 class="text-xl font-semibold text-gray-900">Analytics</h2>
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mt-3">
                        <div class="p-4 bg-white rounded-lg shadow">
                            <h3 class="text-lg font-medium text-gray-700">Total Tickets</h3>
                            <p class="mt-2 text-2xl font-semibold text-gray-900">{{ $tokens->count() }}</p>
                        </div>
                        <div class="p-4 bg-white rounded-lg shadow">
                            <h3 class="text-lg font-medium text-gray-700">Pending Tickets</h3>
                            <p class="mt-2 text-2xl font-semibold text-gray-900">{{ $tokens->where('status.name', 'Pending')->count() }}</p>
                        </div>
                        <div class="p-4 bg-white rounded-lg shadow">
                            <h3 class="text-lg font-medium text-gray-700">Pending Tickets</h3>
                            <p class="mt-2 text-2xl font-semibold text-gray-900">{{ $tokens->where('status.name', 'Inactive')->count() }}</p>
                        </div>
                        <div class="p-4 bg-white rounded-lg shadow">
                            <h3 class="text-lg font-medium text-gray-700">Active Tickets</h3>
                            <p class="mt-2 text-2xl font-semibold text-gray-900">{{ $tokens->where('status.name', 'Active')->count() }}</p>
                        </div>
                        <div class="p-4 bg-white rounded-lg shadow">
                            <h3 class="text-lg font-medium text-gray-700">Completed Tickets</h3>
                            <p class="mt-2 text-2xl font-semibold text-gray-900">{{ $tokens->where('status.name', 'Completed')->count() }}</p>
                        </div>
                    </div>
                <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
                <canvas id="analyticsChart" width="400" height="200"></canvas>
                <script>
                    var ctx = document.getElementById('analyticsChart').getContext('2d');
                    var analyticsChart = new Chart(ctx, {
                        type: 'bar',
                        data: {
                            labels: ['Total Tickets', 'Pending Tickets', 'Inactive Tickets', 'Active Tickets', 'Completed Tickets'],
                            datasets: [{
                                label: 'Tickets',
                                data: [
                                    {{ $tokens->count() }},
                                    {{ $tokens->where('status.name', 'Pending')->count() }},
                                    {{ $tokens->where('status.name', 'Inactive')->count() }},
                                    {{ $tokens->where('status.name', 'Active')->count() }},
                                    {{ $tokens->where('status.name', 'Completed')->count() }}
                                ],
                                backgroundColor: [
                                    'rgba(75, 192, 192, 0.2)',
                                    'rgba(255, 206, 86, 0.2)',
                                    'rgba(255, 99, 132, 0.2)',
                                    'rgba(54, 162, 235, 0.2)',
                                    'rgba(153, 102, 255, 0.2)'
                                ],
                                borderColor: [
                                    'rgba(75, 192, 192, 1)',
                                    'rgba(255, 206, 86, 1)',
                                    'rgba(255, 99, 132, 1)',
                                    'rgba(54, 162, 235, 1)',
                                    'rgba(153, 102, 255, 1)'
                                ],
                                borderWidth: 1
                            }]
                        },
                        options: {
                            scales: {
                                y: {
                                    beginAtZero: true
                                }
                            }
                        }
                    });
                </script>
                </div>
                </div>
            </div>
        </div>

        
    </div>
    <footer>
        <p class="text-center bg-blue-900 text-white py-1 rounded-lg">Enjoy super sport 3 at only 90ksh!!!</p>
    </footer>
@endsection
