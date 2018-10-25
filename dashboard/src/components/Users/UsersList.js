import React, { Component } from 'react';
import { Col, Badge, Button, Table } from 'reactstrap';
import AuthSrv from '../../services/AuthService'
import UsernameFilter from '../Common/Filter';

const AuthService = new AuthSrv()

class UsersList extends Component {


    render() {
        var userId = AuthService.getLoggedInUser().userId;
        return (
            <div>
                <Col lg="3" xs="3" className="filter">
                    <UsernameFilter
                        onFilterChangeEvent={this.props.handleFilterChange}
                        placeholder="Username Filter"
                    />
                </Col>
                <Table responsive striped>
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Username</th>
                            <th>Name</th>
                            <th>Role</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>
                    </thead>
                    <tbody className="users-list">
                        {this.props.users.map((user, index) => {
                            var disabled = userId === user.uuid;
                            return (

                                <tr key={index}>
                                    <td>{user.uuid}</td>
                                    <td>{user.username}</td>
                                    <td>{user.name}</td>
                                    <td>
                                        <Badge color="success">{user.role}</Badge>
                                    </td>
                                    <td><Button size="sm" onClick={() => this.props.toggleEditModal(user, index)}>Edit</Button></td>
                                    <td><Button size="sm" onClick={() => this.props.toggleDeleteModal(user, index)} disabled={disabled} >Delete</Button></td>
                                </tr>
                            )
                        })}
                    </tbody>
                </Table>
            </div>
        );
    }
}

export default UsersList