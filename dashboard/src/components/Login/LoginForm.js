import React, { Component } from 'react';
import { Card, CardBody, Col, Button, Form, Input, InputGroup, InputGroupAddon, InputGroupText, Row } from 'reactstrap';

class LoginForm extends Component {

    render() {
        var loginApiError = this.props.loginApiError.error ?
            <p className="error-message">{this.props.loginApiError.message}</p> : null;

        return (
            <Card className="p-4">
                <CardBody>
                    <Form onSubmit={this.props.handleLoginSubmit}>
                        <h1>Login</h1>
                        <p className="text-muted">Sign In to your account</p>
                        {loginApiError}
                        <InputGroup className="mb-3">
                            <InputGroupAddon addonType="prepend">
                                <InputGroupText>
                                    <i className="icon-user"></i>
                                </InputGroupText>
                            </InputGroupAddon>
                            <Input
                                data-testid='username'
                                type="text"
                                placeholder="Username"
                                name="username"
                                value={this.props.user.usernmae}
                                onChange={this.props.handleChange} />
                        </InputGroup>
                        <InputGroup className="mb-4">
                            <InputGroupAddon addonType="prepend">
                                <InputGroupText>
                                    <i className="icon-lock"></i>
                                </InputGroupText>
                            </InputGroupAddon>
                            <Input
                                data-testid='password'
                                type="password"
                                placeholder="Password"
                                name="password"
                                value={this.props.user.password}
                                onChange={this.props.handleChange} />
                        </InputGroup>
                        <Row>
                            <Col xs="6">
                                <Button type="submit" color="primary" className="px-4" data-testid='login'>Login</Button>
                            </Col>

                        </Row>
                    </Form>
                </CardBody>
            </Card>
        );
    }
}

export default LoginForm