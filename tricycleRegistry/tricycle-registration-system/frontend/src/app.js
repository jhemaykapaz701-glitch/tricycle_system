import React from 'react';
import ReactDOM from 'react-dom';
import DriverForm from './components/DriverForm';

const App = () => {
    return (
        <div>
            <h1>Tricycle Driver Registration System</h1>
            <DriverForm />
        </div>
    );
};

ReactDOM.render(<App />, document.getElementById('root'));