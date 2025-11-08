import React, { useEffect, useState } from 'react';

const DriverTable = () => {
    const [drivers, setDrivers] = useState([]);

    useEffect(() => {
        fetchDrivers();
    }, []);

    const fetchDrivers = async () => {
        try {
            const response = await fetch('/api/drivers');
            const data = await response.json();
            setDrivers(data);
        } catch (error) {
            console.error('Error fetching drivers:', error);
        }
    };

    return (
        <div>
            <h2>Registered Drivers</h2>
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>License Number</th>
                    </tr>
                </thead>
                <tbody>
                    {drivers.map(driver => (
                        <tr key={driver.id}>
                            <td>{driver.id}</td>
                            <td>{driver.name}</td>
                            <td>{driver.licenseNumber}</td>
                        </tr>
                    ))}
                </tbody>
            </table>
        </div>
    );
};

export default DriverTable;