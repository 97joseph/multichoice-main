@extends('admin.dashboard-layout')
@section('title', 'MultiChoice Queue System | Queue System  Solutions')
@section('description', 'MultiChoice Queue System | Queue System  Solutions')
@section('keywords', 'MultiChoice Queue System | Queue System  Solutions')
@section('main')
    <div class="flex flex-col">
        <div class=" overflow-x-auto">
            <div class="min-w-full inline-block align-middle">
                <div class="overflow-hidden border rounded-lg border-gray-300">
                    @include('components.alerts')
                    
                </div>
            <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

            <div class="p-6">
                <h2 class="text-xl font-bold mb-4">Queue System Statistics</h2>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div>
                        <canvas id="donutChart"></canvas>
                    </div>
                    <div>
                        <canvas id="barChart"></canvas>
                    </div>
                </div>
            </div>

            
            

            <script>
                document.getElementById('speakButton').addEventListener('click', function () {
                    var text = document.getElementById('textInput').value;
                    var speech = new SpeechSynthesisUtterance(text);
                    window.speechSynthesis.speak(speech);
                });
            </script>

            <script>
                document.addEventListener('DOMContentLoaded', function () {
                    // Donut Chart
                    var ctxDonut = document.getElementById('donutChart').getContext('2d');
                    var donutChart = new Chart(ctxDonut, {
                        type: 'doughnut',
                        data: {
                            labels: ['Decoder Renewal', 'Services Enquiries'],
                            datasets: [{
                                label: 'Queue Distribution',
                                data: [10, 20, 30, 40],
                                backgroundColor: ['#FF6384', '#36A2EB'],
                            }]
                        },
                        options: {
                            responsive: true,
                            plugins: {
                                legend: {
                                    position: 'top',
                                },
                            }
                        }
                    });

                    // Bar Chart
                    var ctxBar = document.getElementById('barChart').getContext('2d');
                    var barChart = new Chart(ctxBar, {
                        type: 'bar',
                        data: {
                            labels: ['Decoder Renewal', 'Services Enquiries' ],
                            datasets: [{
                                label: 'Number of People',
                                data: [10, 20, 30, 40],
                                backgroundColor: ['#FF6384', '#36A2EB'],
                            }]
                        },
                        options: {
                            responsive: true,
                            plugins: {
                                legend: {
                                    position: 'top',
                                },
                            },
                            scales: {
                                y: {
                                    beginAtZero: true
                                }
                            }
                        }
                    });
                });
            </script>
            </div>
        </div>
        
    </div>
@endsection
