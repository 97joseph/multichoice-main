import React from "react";
import { Doughnut, Line } from "react-chartjs-2";
import 'chart.js/auto';

const TrendAnalysisComponent = () => {
    const currentDateTime = new Date().toLocaleString('en-GB', {
        day: '2-digit',
        month: '2-digit',
        year: 'numeric',
        hour: '2-digit',
        minute: '2-digit',
        second: '2-digit',
        hour12: true
    });

    const doughnutData = {
        labels: ['Served', 'Waiting'],
        datasets: [
            {
                data: [300, 50],
                backgroundColor: ['#36A2EB', '#FF6384'],
                hoverBackgroundColor: ['#36A2EB', '#FF6384']
            }
        ]
    };

    const lineData = {
        labels: ['10:00', '11:00', '12:00', '13:00', '14:00', '15:00'],
        datasets: [
            {
                label: 'Visitors Served',
                data: [65, 59, 80, 81, 56, 55],
                fill: false,
                borderColor: '#36A2EB'
            },
            {
                label: 'Time Taken (mins)',
                data: [28, 48, 40, 19, 86, 27],
                fill: false,
                borderColor: '#FF6384'
            }
        ]
    };

    return (
        <div style={{ display: 'flex', flexDirection: 'column', alignItems: 'center', justifyContent: 'center', height: '100vh' }}>
            <h2>Queue System Analysis</h2>
            <div style={{ display: 'flex', justifyContent: 'space-around', width: '100%', marginBottom: '20px' }}>
                 <div style={{ width: '60%' }}>
                    <Line data={lineData} />
                </div>
                <div style={{ width: '15%' }}>
                    <Doughnut data={doughnutData} />
                </div>
               
            </div>
            <p>Total Visitors: 350</p>
            <p>{currentDateTime}</p>
        </div>
    );
};

export default TrendAnalysisComponent;