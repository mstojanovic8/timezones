import React, { Component } from 'react';
import Authorization from '../Common/Authorization';
import TimezonesService from '../../services/TimezonesService'
import AuthSrv from '../../services/AuthService'
import TimezonesList from './TimezonesList'
import { Button, Card, CardBody, CardHeader, Col, Row } from 'reactstrap';
import { TimezoneModal } from './TimezoneModal'
import update from 'immutability-helper';
import { DeleteModal } from '../Common/DeleteModal';
import FormValidator from '../Common/FormValidator';


const Validator = new FormValidator();
const AuthService = new AuthSrv();

class Timezones extends Component {

    constructor(props) {
        super(props);
        this.intervalArray = [];
        this.offset = new Date().getTimezoneOffset() / 60;
        this.state = {
            timezones: [],
            timezone: {
                name: '',
                city: '',
                differenceGMT: ''
            },
            addNewModal: false,
            deleteModal: false,
            editModal: false,
            modalTitle: '',
            modalDescritpion: '',
            apiError: {
                error: false,
                message: ''
            },
            formValid: {
                formValid: true,
                fieldErrors: []
            },
        };
    }

    componentDidMount() {
        let id = null;
        const user = AuthService.getLoggedInUser();
        if (user.role === 'regularUser') {
            id = user.userId;
        }
        TimezonesService.getAll(id)
            .then(response => {
                let timezones = response.data;
                const data = timezones.map((timezone, index) => {

                    return {
                        ...timezone,
                        currentTime: this.getTimezoneTime(timezone)
                    }
                });;
                this.setState({
                    timezones: data,
                    allTimezones: data
                })
            });


        this.tickAllTimezones();
    }

    componentWillUnmount() {
        this.clearIntervals();
    }


    clearIntervals() {
        this.intervalArray.map((interval, index) => {
            return clearInterval(interval);
        })
    }

    tickAllTimezones() {
        this.intervalArray.push(setInterval(
            () => this.setState((state) => ({

                timezones: state.timezones.map((timezone, index) => {
                    return {
                        ...timezone,
                        currentTime: this.getTimezoneTime(timezone)
                    }
                })
            })),
            1000
        ));
    }

    toggleAddNewModal = () => {

        if (this.state.addNewModal) {
            this.setState({
                timezone: {
                    name: '',
                    city: '',
                    differenceGMT: ''

                },
                apiError: {
                    error: false,
                    message: ''
                }
            })
        }

        this.setState((state) => ({
            addNewModal: !state.addNewModal,
            modalTitle: 'Add new timezone'
        }))
    }

    toggleEditModal = (timezone, index) => {
        if (!this.state.editModal) {
            let tzone = JSON.parse(JSON.stringify(timezone));
            this.setState({
                timezone: tzone,
                timezoneIndex: index
            });
        } else {
            this.setState({
                timezone: {
                    name: '',
                    city: '',
                    differenceGMT: '',
                    userId: '',
                },
                apiError: {
                    error: false,
                    message: ''
                }
            })
        }
        this.setState((state) => ({
            editModal: !state.editModal,
            modalTitle: 'Edit timezone',
        }));
    }

    toggleDeleteModal = (timezone, index) => {
        if (!this.state.deleteModal) {
            let tzone = JSON.parse(JSON.stringify(timezone));

            this.setState({
                timezoneIndex: index,
                timezone: tzone,
                modalDescritpion: `Are you sure you want to delete ${timezone.name} timezone`,
                modalTitle: 'Delete user'
            });
        } else {
            this.setState({
                timezone: {
                    name: '',
                    city: '',
                    differenceGMT: '',
                    userId: '',
                },
                apiError: {
                    error: false,
                    message: ''
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
                timezone: {
                    ...state.timezone,
                    [name]: value
                }
            }
        ));

    }


    handleFilterChange = (e) => {
        const value = e.target.value;
        if (value) {
            this.setState((state) => ({
                timezones: state.allTimezones.filter(timezone =>
                    timezone.name.toLocaleLowerCase().indexOf(value.toLocaleLowerCase()) !== -1)
            }));
        }
        else {
            this.setState((state) => ({
                timezones: state.allTimezones
            }))
        }
    }

    handleAdd = () => {
        const formValid = Validator.timezoneValidation(this.state.timezone);

        if (formValid.formValid) {
            TimezonesService.add(this.state.timezone)
                .then(response => {
                    this.toggleAddNewModal();

                    let timezone = response.data;

                    timezone.currentTime = this.getTimezoneTime(timezone);
                    this.setState((state) =>
                        update(state, { timezones: { $push: [timezone] } }));
                    this.setState((state) =>
                        update(state, { allTimezones: { $push: [timezone] } }));
                    this.clearIntervals();
                    this.tickAllTimezones();
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

        const formValid = Validator.timezoneValidation(this.state.timezone);
        const allIndex = this.getAllTimezonesIndex(this.state.allTimezones, this.state.timezone);
        if (formValid.formValid) {
            TimezonesService.update(this.state.timezone)
                .then(response => {
                    this.toggleEditModal();
                    let timezone = response.data;
                    timezone.currentTime = this.getTimezoneTime(timezone);
                    this.setState((state) =>
                        update(state, { timezones: { $splice: [[state.timezoneIndex, 1, timezone]] } })
                    );
                    this.setState((state) =>
                        update(state, { allTimezones: { $splice: [[allIndex, 1, timezone]] } })
                    );
                })
                .catch(error => {
                    this.setState({
                        apiError: {
                            error: true,
                            message: error.response.data.message
                        }
                    })
                })
        } else {
            this.setState({
                formValid: formValid
            })
        }
    }

    handleDelete = () => {

        const allIndex = this.getAllTimezonesIndex(this.state.allTimezones, this.state.timezone);

        TimezonesService.delete(this.state.timezone.uuid)
            .then(response => {
                this.toggleDeleteModal();
                this.setState((state) =>
                    update(state, { timezones: { $splice: [[state.timezoneIndex, 1]] } })
                );
                this.setState((state) =>
                    update(state, { allTimezones: { $splice: [[allIndex, 1]] } })
                );
            }).catch(error => {
                this.setState({
                    apiError: {
                        error: true,
                        message: error.response.data.message
                    }
                })
            });
    }

    getTimezoneTime(timezone) {
        let date = new Date();
        const hoursDiff = date.getHours() + parseInt(this.offset) + parseInt(timezone.differenceGMT);

        date.setHours(hoursDiff);
        return date.toLocaleTimeString();
    }

    getAllTimezonesIndex = (allTimezones, timezone) => {
        return allTimezones.map(e => e.uuid).indexOf(timezone.uuid);
    }

    render() {
        return (
            <div className="animated fadeIn">
                <Row>
                    <Col xs="12" lg="12">
                        <Card>
                            <CardHeader>
                                <i className="fa fa-globe"></i> Timezones
                                <Button size="sm" color="primary" className="add-new" onClick={this.toggleAddNewModal}>Add New</Button>
                            </CardHeader>
                            <CardBody>
                                <TimezonesList
                                    timezones={this.state.timezones}
                                    toggleEditModal={this.toggleEditModal}
                                    toggleDeleteModal={this.toggleDeleteModal}
                                    handleFilterChange={this.handleFilterChange}
                                />
                            </CardBody>
                        </Card>
                    </Col>
                </Row>
                <TimezoneModal
                    timezone={this.state.timezone}
                    title={this.state.modalTitle}
                    modal={this.state.addNewModal}
                    toggle={this.toggleAddNewModal}
                    handleChange={this.handleChange}
                    handleSubmit={this.handleAdd}
                    apiError={this.state.apiError}
                    formErrors={this.state.formValid}
                />

                <TimezoneModal
                    timezone={this.state.timezone}
                    title={this.state.modalTitle}
                    modal={this.state.editModal}
                    toggle={this.toggleEditModal}
                    handleChange={this.handleChange}
                    handleSubmit={this.handleEdit}
                    apiError={this.state.apiError}
                    formErrors={this.state.formValid}
                />

                <DeleteModal
                    description={this.state.modalDescritpion}
                    title={this.state.modalTitle}
                    modal={this.state.deleteModal}
                    toggle={this.toggleDeleteModal}
                    handleSubmit={this.handleDelete}
                    apiError={this.state.apiError}
                />
            </div>
        )
    }
}

export default Authorization(Timezones, ['regularUser', 'admin']);