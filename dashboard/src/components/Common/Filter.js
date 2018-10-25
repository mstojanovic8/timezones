import React, { Component } from 'react';
import { Input } from 'reactstrap';

class Filter extends Component {

    render() {
        return (

            <Input name="filter" placeholder={this.props.placeholder}
                onChange={this.props.onFilterChangeEvent} />
        );
    }
}
export default Filter