import React, { Component } from 'react';
import AuthSrv from '../../services/AuthService';
import Page401 from './Page401'

const AuthService = new AuthSrv();

const Authorization = (WrappedComponent, allowedRoles) => {
    
    return class WithAuthorization extends Component {
        constructor(props) {
            super(props)
            this.state = {
                user: null
            }
        }

        componentWillMount() {
            if (!AuthService.loggedIn()) {
                this.props.history.replace('/login');
            }
            else {
                try {
                    const loggedInUser = AuthService.getLoggedInUser()
                    this.setState({
                        user: loggedInUser
                    })
                }
                catch (err) {
                    AuthService.logout()
                    this.props.history.replace('/login')
                }
            }
        }

        render() {
            if (this.state.user) {

                const { role } = this.state.user
                if (allowedRoles.includes(role)) {
                    return <WrappedComponent {...this.props} />
                }
            }
            return <Page401 />
        }
    }
}
export default Authorization