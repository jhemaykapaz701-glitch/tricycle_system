import React, { useEffect, useState } from 'react';
import DriverTable from '../components/DriverTable';
import StatsCard from '../components/StatsCard';

const Dashboard = () => {
    const [drivers, setDrivers] = useState([]);
    const [loading, setLoading] = useState(true);

    useEffect(() => {
        const fetchDrivers = async () => {
            try {
                const response = await fetch('/api/drivers');
                const data = await response.json();
                setDrivers(data);
            } catch (error) {
                console.error('Error fetching drivers:', error);
            } finally {
                setLoading(false);
            }
        };

        fetchDrivers();
    }, []);

    if (loading) {
        return <div>Loading...</div>;
    }

    return (
        <div className="dashboard">
            <h1>Tricycle Registration Dashboard</h1>
            <StatsCard driversCount={drivers.length} />
            <DriverTable drivers={drivers} />
        </div>
    );
};

export default Dashboard;