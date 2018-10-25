import React, { Component } from 'react';
import { Badge, Button, Col, Table } from 'reactstrap';
import Filter from '../Common/Filter';

class TimezonesList extends Component {

    render() {
        let timezoneList = this.props.timezones.length > 0 ?
            

                <Table responsive striped>
                    <thead>
                        <tr>
                            {/* <th>Id</th> */}
                            <th>Name</th>
                            <th>City</th>
                            <th>GMT Difference</th>
                            <th>Current Time</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>
                    </thead>
                    <tbody className="timezones-list">
                        {this.props.timezones.map((timezone, index) => (
                            <tr key={index}>
                                {/* <td>{timezone.uuid}</td> */}
                                <td>{timezone.name}</td>
                                <td>{timezone.city}</td>
                                <td>
                                    <Badge color="success">{timezone.differenceGMT}</Badge>
                                </td>
                                <td>{timezone.currentTime}</td>
                                <td><Button size="sm" onClick={() => this.props.toggleEditModal(timezone, index)}>Edit</Button></td>
                                <td><Button size="sm" onClick={() => this.props.toggleDeleteModal(timezone, index)}>Delete</Button></td>
                            </tr>
                        ))}
                    </tbody>
                </Table>
            
            : <p className="text-center">No Timezones available yet!</p>
        return (
            <div>
                <Col lg="3" xs="3" className="filter">
                    <Filter 
                    onFilterChangeEvent={this.props.handleFilterChange} 
                    placeholder="Name Filter"
                    />
                </Col>
                {timezoneList}
            </div>
        );
    }
}

export default TimezonesList