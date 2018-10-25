import React, { Component } from 'react';
import {
    Button, Form, FormGroup, Input, InputGroup, InputGroupAddon, InputGroupText, Label,
    Modal, ModalHeader, ModalBody, ModalFooter
} from 'reactstrap';
import { FormErrors } from '../Common/FormErrors';

export class TimezoneModal extends Component {

    shouldComponentUpdate() {
        return this.props.modal;
    }

    render() {

        var apiErrorMessage = this.props.apiError.error ?
            <p className="error-message">{this.props.apiError.message}</p> : null;


        return (
            <Modal isOpen={this.props.modal} toggle={this.props.toggle} className={this.props.className}>
                <ModalHeader toggle={this.props.toggle}>{this.props.title}</ModalHeader>
                <ModalBody>
                    <div className="panel panel-default">
                        <FormErrors formErrors={this.props.formErrors} />
                    </div>
                    <Form action="" method="post">
                        <FormGroup >
                            {apiErrorMessage}
                            <Label for="name">Name</Label>
                            <InputGroup>
                                <Input type="text"
                                    id="name"
                                    name="name"
                                    placeholder="Name"
                                    autoComplete="name"
                                    data-testid='name'
                                    value={this.props.timezone.name}
                                    onChange={this.props.handleChange}
                                />
                                <InputGroupAddon addonType="append">
                                    <InputGroupText><i className="fa fa-user"></i></InputGroupText>
                                </InputGroupAddon>
                            </InputGroup>
                        </FormGroup>
                        <FormGroup>
                            <Label for="name">City</Label>
                            <InputGroup>
                                <Input
                                    type="text"
                                    id="city"
                                    name="city"
                                    placeholder="City"
                                    autoComplete="name"
                                    value={this.props.timezone.city}
                                    onChange={this.props.handleChange}
                                />
                                <InputGroupAddon addonType="append">
                                    <InputGroupText><i className="fa fa-user"></i></InputGroupText>
                                </InputGroupAddon>
                            </InputGroup>
                        </FormGroup>
                        <FormGroup>
                            <Label for="name">GMT Difference</Label>
                            <InputGroup>
                                <Input type="text"
                                    id="differenceGMT"
                                    name="differenceGMT"
                                    placeholder="GMT Difference"
                                    autoComplete="differenceGMT"
                                    value={this.props.timezone.differenceGMT}
                                    onChange={this.props.handleChange}
                                />
                                <InputGroupAddon addonType="append">
                                    <InputGroupText><i className="fa fa-asterisk"></i></InputGroupText>
                                </InputGroupAddon>
                            </InputGroup>
                        </FormGroup>
                    </Form>
                </ModalBody>
                <ModalFooter>
                    <Button color="secondary" onClick={this.props.handleSubmit} data-testid="add">Add</Button>
                    <Button color="secondary" onClick={this.props.toggle}>Cancel</Button>
                </ModalFooter>
            </Modal>
        );
    }
}