import React from "react";

const Home = () => {
    const handleSubmit = (event) => {
        event.preventDefault();
        window.location.href = "service";
    };

    return (
        <div style={{ display: 'flex', justifyContent: 'center', alignItems: 'center', height: '50vh' }}>
            <div>
                <h2>Please enter mobile number to get a token</h2>
                <form onSubmit={handleSubmit}>
                    <div>
                        <select id="countryCode" name="countryCode">
                            <option value="+1">+1245</option>
                            <option value="+44">+44</option>
                            <option value="+91">+91 </option>
                            {/* Add more country codes as needed */}
                        </select>
                        <input type="tel" id="phoneNumber" name="phoneNumber" required style={{ borderRadius: '50px' }} />
                    </div>
                    <div style={{ display: 'flex', justifyContent: 'center', marginTop: '10px' }}>
                        <button type="submit" style={{ backgroundColor: '#010069', color: 'white', width: '50%', borderRadius: '50px' }}>Proceed</button>
                    </div>
                </form>
            </div>
        </div>
    );
};

export default Home;
