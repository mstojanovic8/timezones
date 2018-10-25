import React, { Component } from 'react';
import { UserModal as RegisterModal } from '../Users/UserModal'
import { Button, Card, CardBody, CardGroup, Col, Container, Row } from 'reactstrap';
import LoginForm from './LoginForm'
import FormValidator from '../Common/FormValidator'
import AuthSrv from '../../services/AuthService'

const AuthService = new AuthSrv();
const Validator = new FormValidator();

class Login extends Component {
    constructor(props) {
        super(props);

        this.state = {
            modal: false,
            loginApiError: {
                error: false,
                message: ""
            },
            user: {
                name: '',
                username: '',
                password: '',
                roleId: -1
            },
            modalTitle: 'Register',
            registerApiError: {
                error: false,
                message: ""
            },
            formValid: {
                formValid: true,
                fieldErrors: []
            },

            nameValid: false,
            usernameValid: false,
            passwordValid: false,
            roles: []

        };


    }

    componentDidMount() {
        if (AuthService.loggedIn())
            this.props.history.replace('/');
        AuthService.getRoles()
            .then(response => {
                this.setState({
                    roles: response.data
                });
            });

    }

    toggle = () => {
        if (this.state.modal) {
            this.setState({
                user: {
                    name: '',
                    username: '',
                    password: '',
                    roleId: -1
                },
            });
        }

        this.setState((state) => ({
            modal: !state.modal
        }));
    }

    handleLoginSubmit = (e) => {
        e.preventDefault();

        AuthService.login(this.state.user)
            .then(data => {
                this.props.history.replace('/');
            })
            .catch(error => {
                this.setState({
                    loginApiError: {
                        error: true,
                        message: error.response.data.message
                    }
                })
            });
    }

    handleRegisterSubmit = () => {
        const formValid = Validator.userValidation(this.state.user);
        if (formValid.formValid) {
            AuthService.register(this.state.user)
                .then(data => {
                    this.props.history.replace('/');
                })
                .catch(error => {
                    this.setState({
                        registerApiError: {
                            error: true,
                            message: error.response.data.message
                        }
                    })
                })
        } else {
            this.setState({
                formValid: formValid
            });
        }
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

        ));

    }

    render() {
        return (
            <div className="app flex-row align-items-center">
                <Container className="auth-form">
                    <Row className="justify-content-center">
                        <Col md="8">
                            <CardGroup>
                                <LoginForm
                                    user={this.state.user}
                                    handleChange={this.handleChange}
                                    handleLoginSubmit={this.handleLoginSubmit}
                                    loginApiError={this.state.loginApiError}
                                />
                                <Card className="text-white bg-primary py-5 d-md-down-none" style={{ width: 44 + '%' }}>
                                    <CardBody className="text-center">
                                        <div>
                                            <h2>Create account</h2>
                                            <p>Click on button below to create account.</p>

                                            <Button color="primary" onClick={this.toggle} active data-testid='register'>Create account!</Button>
                                        </div>
                                    </CardBody>
                                </Card>
                            </CardGroup>
                        </Col>
                    </Row>
                </Container>

                <RegisterModal
                    user={this.state.user}
                    title={this.state.modalTitle}
                    modal={this.state.modal}
                    toggle={this.toggle}
                    formErrors={this.state.formErrors}
                    handleChange={this.handleChange}
                    invalidAttribute={this.invalidAttribute}
                    handleSubmit={this.handleRegisterSubmit}
                    roles={this.state.roles}
                    formValid={this.state.formValid}
                    apiError={this.state.registerApiError}
                    className={'register-modal'}
                />
            </div>
        );
    }
}

export default Login;