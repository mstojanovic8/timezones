import React from 'react';

export const FormErrors = ({ formErrors }) =>

    <div className='formErrors'>

        {
            formErrors.fieldErrors.map((fieldError, i) => {
                return <p className="error-message" key={i}>{fieldError.message}</p>
            })
        }
    </div>