import React, { useState, useEffect } from 'react';

const DriverForm = ({ driver, onSubmit }) => {
    const [name, setName] = useState('');
    const [licenseNumber, setLicenseNumber] = useState('');

    useEffect(() => {
        if (driver) {
            setName(driver.name);
            setLicenseNumber(driver.licenseNumber);
        }
    }, [driver]);

    const handleSubmit = (e) => {
        e.preventDefault();
        onSubmit({ name, licenseNumber });
        setName('');
        setLicenseNumber('');
    };

    return (
        <form onSubmit={handleSubmit}>
            <div>
                <label>Name:</label>
                <input
                    type="text"
                    value={name}
                    onChange={(e) => setName(e.target.value)}
                    required
                />
            </div>
            <div>
                <label>License Number:</label>
                <input
                    type="text"
                    value={licenseNumber}
                    onChange={(e) => setLicenseNumber(e.target.value)}
                    required
                />
            </div>
            <button type="submit">{driver ? 'Update Driver' : 'Add Driver'}</button>
        </form>
    );
};

export default DriverForm;