import React, { Component } from 'react';
import Authorization from '../Common/Authorization';
import AuthSrv from '../../services/AuthService'
import { Button, Card, CardBody, CardHeader, Col, Row } from 'reactstrap';
import UsersList from './UsersList';
import { UserModal } from './UserModal';
import update from 'immutability-helper';
import { DeleteModal } from '../Common/DeleteModal';
import FormValidator from '../Common/FormValidator';
import UserService from '../../services/UsersService'

const Validator = new FormValidator();
const AuthService = new AuthSrv();


class Users extends Component {

    constructor(props) {
        super(props);

        this.state = {
            users: [],
            allUsers: [],
            userIndex: -1,
            user: {
                name: '',
                username: '',
                password: '',
                roleId: '-1',
            },
            addNewModal: false,
            deleteModal: false,
            editModal: false,
            modalTitle: '',
            formValid: {
                formValid: true,
                fieldErrors: []
            },
            apiError: {
                error: false,
                message: ''
            },
            roles: []
        };

    }

    componentDidMount() {
        UserService.getAll()
            .then(response => {
                const users = response.data;
                this.setState({
                    users: users,
                    allUsers: users
                })
            });
        AuthService.getRoles()
            .then(response => {
                this.setState({
                    roles: response.data
                });
            });
    }

    toggleAddNewModal = () => {
        if (this.state.addNewModal) {
            this.setState({
                user: {
                    name: '',
                    username: '',
                    password: '',
                    roleId: '-1',
                },
                formValid: {
                    formValid: true,
                    fieldErrors: []
                },
            })
        }
        this.setState((state) => ({
            addNewModal: !state.addNewModal,
            modalTitle: 'Add new user'
        }));
    }

    toggleEditModal = (selectedUser, index) => {

        if (!this.state.editModal) {
            let usr = JSON.parse(JSON.stringify(selectedUser));
            usr.password = '';
            this.setState({
                user: usr,
                userIndex: index
            });
        } else {
            this.setState({
                user: {
                    name: '',
                    username: '',
                    password: '',
                    roleId: '-1',
                },
                formValid: {
                    formValid: true,
                    fieldErrors: []
                }
            })
        }
        this.setState((state) => ({
            editModal: !state.editModal,
            modalTitle: 'Edit user',
        }));
    }

    toggleDeleteModal = (selectedUser, userIndex) => {
        if (!this.state.deleteModal) {
            let usr = JSON.parse(JSON.stringify(selectedUser));
            this.user = usr;
            this.userIndex = userIndex;
            this.setState({
                userIndex: userIndex,
                user: usr,
                modalTitle: 'Delete user',
                modalDescription: `Are you sure you want to delete user ${usr.username}`
            });
        } else {
            this.setState({
                user: {
                    name: '',
                    username: '',
                    password: '',
                    roleId: '-1',
                }
            })
        }

        this.setState((state) => ({
            deleteModal: !state.deleteModal
        }))
    }

    handleChange = (e) => {

        const name = e.target.name;
        const value = e.target.value;


        this.setState((state) => (
            {
                user: {
                    ...state.user,
                    [name]: value
                }
            }
        ))
    }

    handleFilterChange = (e) => {
        const value = e.target.value;
        if (value) {

            this.setState((state) => ({
                users: state.allUsers.filter(user =>
                    user.username.toLocaleLowerCase().indexOf(value.toLocaleLowerCase()) !== -1)
            }));
        }
        else {
            this.setState((state) => ({
                users: state.allUsers
            }))
        }
    }

    handleAddUser = (e) => {

        e.preventDefault();
        const formValid = Validator.userValidation(this.state.user, 'add');

        if (formValid.formValid) {
            UserService.add(this.state.user)
                .then(response => {
                    this.toggleAddNewModal();
                    const user = response.data;
                    this.setState((state) =>
                        update(state, { users: { $push: [user] } })
                    );
                    this.setState((state) =>
                        update(state, { allUsers: { $push: [user] } })
                    );
                    
                })
                .catch(error => {
                    this.setState({
                        apiError: {
                            error: true,
                            message: error.response.data.message
                        }
                    })
                });
        } else {
            this.setState({
                formValid: formValid
            })
        }
    }

    handleEdit = () => {
        const formValid = Validator.userValidation(this.state.user, 'edit');

        const allUsersIndex = this.getAllUsersIndex(this.state.allUsers, this.state.user);
        if (formValid.formValid) {
            UserService.update(this.state.user)
                .then(response => {
                    this.toggleEditModal();
                    const user = response.data;

                    this.setState((state) =>
                        update(state, { users: { $splice: [[state.userIndex, 1, user]] } })
                    );
                    this.setState((state) =>
                        update(state, { allUsers: { $splice: [[allUsersIndex, 1, user]] } })
                    );
                })
                .catch(error => {
                    this.setState({
                        apiError: {
                            error: true,
                            message: error.response.data.message
                        }
                    });
                })
        } else {
            this.setState({
                formValid: formValid
            })
        }
    }

    handleDelete = () => {

        const allUsersIndex = this.getAllUsersIndex(this.state.allUsers, this.state.user);

        UserService.delete(this.state.user.uuid)
            .then(response => {
                this.toggleDeleteModal();

                this.setState((state) =>
                    update(state, { users: { $splice: [[state.userIndex, 1]] } })
                );
                this.setState((state) =>
                    update(state, { allUsers: { $splice: [[allUsersIndex, 1]] } })
                );

            })
            .catch(error => {
                console.log('test');
                this.setState({
                    apiError: {
                        error: true,
                        message: error.response.data.message
                    }
                })
            })
    }

    getAllUsersIndex = (allUsers, user) => {
        return allUsers.map(e => e.uuid).indexOf(user.uuid);
    }

    render() {

        return (
            <div className="animated fadeIn">
                <Row>
                    <Col xs="12" lg="12">
                        <Card>
                            <CardHeader>
                                <i className="fa fa-user"></i> Users
                                <Button size="sm" 
                                color="primary" 
                                className="add-new" 
                                onClick={this.toggleAddNewModal}>Add New</Button>
                            </CardHeader>
                            <CardBody>
                                <UsersList
                                    users={this.state.users}
                                    toggleEditModal={this.toggleEditModal}
                                    toggleDeleteModal={this.toggleDeleteModal}
                                    handleFilterChange={this.handleFilterChange}
                                />
                            </CardBody>
                        </Card>
                    </Col>
                </Row>
                <UserModal
                    user={this.state.user}
                    title={this.state.modalTitle}
                    modal={this.state.addNewModal}
                    toggle={this.toggleAddNewModal}
                    handleChange={this.handleChange}
                    handleSubmit={this.handleAddUser}
                    roles={this.state.roles}
                    apiError={this.state.apiError}
                    formValid={this.state.formValid}
                />

                <UserModal
                    user={this.state.user}
                    title={this.state.modalTitle}
                    modal={this.state.editModal}
                    toggle={this.toggleEditModal}
                    handleChange={this.handleChange}
                    handleSubmit={this.handleEdit}
                    roles={this.state.roles}
                    apiError={this.state.apiError}
                    formValid={this.state.formValid}
                />

                <DeleteModal
                    title={this.state.modalTitle}
                    description={this.state.modalDescription}
                    modal={this.state.deleteModal}
                    toggle={this.toggleDeleteModal}
                    handleSubmit={this.handleDelete}
                    apiError={this.state.apiError}

                />
            </div>
        )
    }
}

export default Authorization(Users, ['admin', 'userManager'])