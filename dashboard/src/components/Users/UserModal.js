import React, { Component } from 'react';
import { Button, Form, FormGroup, Input, InputGroup, InputGroupAddon, InputGroupText, Label, Modal, ModalHeader, ModalBody, ModalFooter } from 'reactstrap';
import { FormErrors } from '../Common/FormErrors';

export class UserModal extends Component {


    render() {
        var apiErrorMessage = this.props.apiError.error ?
            <p className="error-message">{this.props.apiError.message}</p> : null;

        return (
            <Modal isOpen={this.props.modal} toggle={this.props.toggle} className={this.props.className}>
                <ModalHeader toggle={this.props.toggle}>{this.props.title}</ModalHeader>
                <ModalBody>
                    <div className="panel panel-default">
                        <FormErrors formErrors={this.props.formValid} />
                    </div>
                    <Form >
                        <FormGroup >
                            {apiErrorMessage}
                            <Label for="name">Name</Label>
                            <InputGroup>


                                <Input type="text" id="name" name="name" placeholder="Name" autoComplete="name"
                                    data-testid='new-user-name'
                                    value={this.props.user.name}
                                    onChange={this.props.handleChange}
                                />
                                <InputGroupAddon addonType="append">
                                    <InputGroupText><i className="fa fa-user"></i></InputGroupText>
                                </InputGroupAddon>
                            </InputGroup>
                        </FormGroup>
                        <FormGroup>
                            <Label for="name">Username</Label>
                            <InputGroup>
                                <Input type="text" id="username" name="username" placeholder="Username" autoComplete="name"
                                    data-testid='new-user-username'
                                    value={this.props.user.username}
                                    onChange={this.props.handleChange}
                                />
                                <InputGroupAddon addonType="append">
                                    <InputGroupText><i className="fa fa-user"></i></InputGroupText>
                                </InputGroupAddon>
                            </InputGroup>
                        </FormGroup>
                        <FormGroup>
                        <Label for="name">Password</Label>
                            <InputGroup>
                                <Input type="password" id="password" name="password" placeholder="Password" autoComplete="current-password"
                                    data-testid='new-user-password'
                                    value={this.props.user.password}
                                    onChange={this.props.handleChange}
                                />
                                <InputGroupAddon addonType="append">
                                    <InputGroupText><i className="fa fa-asterisk"></i></InputGroupText>
                                </InputGroupAddon>
                            </InputGroup>
                        </FormGroup>
                        <FormGroup>
                        <Label for="name">Role</Label>
                            <Input type="select" name="roleId" data-testid='new-user-role'
                                onChange={this.props.handleChange}
                                value={this.props.user.roleId}

                            >
                                <option value="-1">Choose Role</option>
                                {this.props.roles.map((c) => <option key={c.id} value={c.id}>{c.name}</option>)}
                            </Input>
                        </FormGroup>
                    </Form>
                </ModalBody>
                <ModalFooter>
                    <Button color="secondary" onClick={this.props.handleSubmit} data-testid="add-user">Add</Button>
                    <Button color="secondary" onClick={this.props.toggle}>Cancel</Button>
                </ModalFooter>
            </Modal>
        );
    }
}