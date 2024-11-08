import React from "react";
import { Doughnut, Line } from "react-chartjs-2";
import 'chart.js/auto';

const ServiceReportComponent = () => {
    const currentDateTime = new Date().toLocaleString('en-GB', {
        day: '2-digit',
        month: '2-digit',
        year: 'numeric',
        hour: '2-digit',
        minute: '2-digit',
        second: '2-digit',
        hour12: true
    });

    const metrics = {
        queueLength: {
            average: 10,
            maximum: 20,
            current: 5
        },
        waitTime: {
            average: '5 mins',
            maximum: '15 mins',
            current: '3 mins'
        },
        serviceTime: {
            average: '7 mins',
            maximum: '12 mins'
        },
        throughput: {
            itemsProcessedPerUnitTime: 50
        },
        utilization: {
            serverUtilization: '75%'
        },
        responseTime: {
            average: '6 mins'
        }
    };

    return (
        <div style={{ display: 'flex', flexDirection: 'column', alignItems: 'center', justifyContent: 'center', height: '100vh' }}>
            <h2>Queue System Analysis</h2>
            <table style={{ width: '40%', borderCollapse: 'collapse', marginBottom: '20px' }}>
                <thead>
                    <tr>
                        <th style={{ border: '1px solid black', padding: '8px' }}>Metric</th>
                        <th style={{ border: '1px solid black', padding: '8px' }}>Value</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td style={{ border: '1px solid black', padding: '8px' }}>Average Queue Length</td>
                        <td style={{ border: '1px solid black', padding: '8px' }}>{metrics.queueLength.average}</td>
                    </tr>
                    <tr>
                        <td style={{ border: '1px solid black', padding: '8px' }}>Maximum Queue Length</td>
                        <td style={{ border: '1px solid black', padding: '8px' }}>{metrics.queueLength.maximum}</td>
                    </tr>
                    <tr>
                        <td style={{ border: '1px solid black', padding: '8px' }}>Current Queue Length</td>
                        <td style={{ border: '1px solid black', padding: '8px' }}>{metrics.queueLength.current}</td>
                    </tr>
                    <tr>
                        <td style={{ border: '1px solid black', padding: '8px' }}>Average Wait Time</td>
                        <td style={{ border: '1px solid black', padding: '8px' }}>{metrics.waitTime.average}</td>
                    </tr>
                    <tr>
                        <td style={{ border: '1px solid black', padding: '8px' }}>Maximum Wait Time</td>
                        <td style={{ border: '1px solid black', padding: '8px' }}>{metrics.waitTime.maximum}</td>
                    </tr>
                    <tr>
                        <td style={{ border: '1px solid black', padding: '8px' }}>Current Wait Time</td>
                        <td style={{ border: '1px solid black', padding: '8px' }}>{metrics.waitTime.current}</td>
                    </tr>
                    <tr>
                        <td style={{ border: '1px solid black', padding: '8px' }}>Average Service Time</td>
                        <td style={{ border: '1px solid black', padding: '8px' }}>{metrics.serviceTime.average}</td>
                    </tr>
                    <tr>
                        <td style={{ border: '1px solid black', padding: '8px' }}>Maximum Service Time</td>
                        <td style={{ border: '1px solid black', padding: '8px' }}>{metrics.serviceTime.maximum}</td>
                    </tr>
                    <tr>
                        <td style={{ border: '1px solid black', padding: '8px' }}>Items Processed per Unit Time</td>
                        <td style={{ border: '1px solid black', padding: '8px' }}>{metrics.throughput.itemsProcessedPerUnitTime}</td>
                    </tr>
                    <tr>
                        <td style={{ border: '1px solid black', padding: '8px' }}>Server Utilization</td>
                        <td style={{ border: '1px solid black', padding: '8px' }}>{metrics.utilization.serverUtilization}</td>
                    </tr>
                    <tr>
                        <td style={{ border: '1px solid black', padding: '8px' }}>Average Response Time</td>
                        <td style={{ border: '1px solid black', padding: '8px' }}>{metrics.responseTime.average}</td>
                    </tr>
                </tbody>
            </table>
            <p>{currentDateTime}</p>
        </div>
    );
};

export default ServiceReportComponent;