import React, { Component } from 'react';
import { Button, Modal, ModalHeader, ModalBody, ModalFooter } from 'reactstrap';

export class DeleteModal extends Component {

    // shouldComponentUpdate() {
    //     return this.props.modal;
    // }

    render() {  
        var apiErrorMessage = this.props.apiError.error ?
            <p className="error-message">{this.props.apiError.message}</p> : null;
        return (
            <Modal isOpen={this.props.modal} toggle={this.props.toggle} className={this.props.className}>
                <ModalHeader toggle={this.props.toggle}>{this.props.title}</ModalHeader>
                <ModalBody>

                    <div className="panel panel-default">
                        {apiErrorMessage}
                        {this.props.description}
                    </div>

                </ModalBody>
                <ModalFooter>
                    <Button color="secondary" onClick={this.props.handleSubmit} >Confirm</Button>
                    <Button color="secondary" onClick={this.props.toggle}>Cancel</Button>
                </ModalFooter>
            </Modal>
        );
    }
}