import React, { useState } from 'react';

const DriverForm = () => {
    const [name, setName] = useState('');
    const [licenseNumber, setLicenseNumber] = useState('');

    const handleSubmit = async (e) => {
        e.preventDefault();
        const driverData = { name, licenseNumber };

        try {
            const response = await fetch('http://localhost/tricycle-registration-system/backend/src/routes/api.php/drivers', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                },
                body: JSON.stringify(driverData),
            });

            if (response.ok) {
                const result = await response.json();
                console.log('Driver registered:', result);
                // Reset form fields
                setName('');
                setLicenseNumber('');
            } else {
                console.error('Error registering driver:', response.statusText);
            }
        } catch (error) {
            console.error('Error:', error);
        }
    };

    return (
        <form onSubmit={handleSubmit}>
            <div>
                <label htmlFor="name">Name:</label>
                <input
                    type="text"
                    id="name"
                    value={name}
                    onChange={(e) => setName(e.target.value)}
                    required
                />
            </div>
            <div>
                <label htmlFor="licenseNumber">License Number:</label>
                <input
                    type="text"
                    id="licenseNumber"
                    value={licenseNumber}
                    onChange={(e) => setLicenseNumber(e.target.value)}
                    required
                />
            </div>
            <button type="submit">Register Driver</button>
        </form>
    );
};

export default DriverForm;