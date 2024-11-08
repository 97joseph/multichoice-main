import React from "react";

const ServiceComponent = () => {
    const navigateToTokenService = () => {
        window.location.href = "tokenservice";
    };

    return (
        <div style={{ display: 'flex', justifyContent: 'center', alignItems: 'center', height: '50vh' }}>
            <div>
                <h2>Please select the service that you require</h2>
                <div className="button-container" style={{ display: 'flex', flexDirection: 'column', alignItems: 'center', gap: '10px', marginBottom: '10px' }}>
                    <div style={{ display: 'flex', gap: '10px' }}>
                        <button className="rounded-left" style={{ backgroundColor: '#010069', color: 'white' }}>Decoder Renewal</button>
                        <button className="rounded-right" style={{ backgroundColor: '#010069', color: 'white' }}>General Enquiries</button>
                    </div>
                    <button className="generate-token" style={{ backgroundColor: '#010069', color: 'white', marginTop: '10px' }} onClick={navigateToTokenService}>Generate Token</button>
                </div>
            </div>
        </div>
    );
};

export default ServiceComponent;
