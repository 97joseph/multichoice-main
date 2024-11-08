import React from "react";

const TokenServiceComponent = () => {
    const currentDateTime = new Date().toLocaleString('en-GB', {
        day: '2-digit',
        month: '2-digit',
        year: 'numeric',
        hour: '2-digit',
        minute: '2-digit',
        second: '2-digit',
        hour12: true
    });

    return (
        <div style={{ display: 'flex', flexDirection: 'column', alignItems: 'center', justifyContent: 'center', height: '70vh' }}>
            <a href="/">
                <img src={window.logoUrl} alt="logo" className="w-36" />
            </a>
            <p>Multichoice</p>
            <p>General Enquiries</p>
            <p>A001</p>
            <p>{currentDateTime}</p>
        </div>
    );
};

export default TokenServiceComponent;
