import React from 'react';
import Authorization from './Authorization';

const Welcome = () => {
    return (
        <div>
            <h5>Welcome to Timezones FishingBooker interview project</h5>
        </div>
    );
}

export default Authorization(Welcome,['admin','regularUser','userManager']);