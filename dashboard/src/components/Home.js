import React, { Component } from 'react';
import AuthSrv from '../services/AuthService';
import { Container } from 'reactstrap';
import { Route, Redirect, Switch } from "react-router-dom";
import Navigation from './Common/Navigation';
import Users from './Users/Users'
import Timezones from './Timezones/Timezones'
import Welcome from './Common/Welcome'


const AuthService = new AuthSrv();

const routes = [
    {
        path: "/welcome",
        main: Welcome

    },
    {
        path: "/users",
        main: Users

    },
    {
        path: "/timezones",
        main: Timezones
    }
];

class Home extends Component {

    handleLogout(e) {
        e.preventDefault();
        AuthService.logout()
        this.props.history.push('/login');
    }

    render() {
        return (
            <Container fluid data-testid="homepage">
                <div className="row">
                    <div className="col-md-12 navigation">
                        <Navigation handleLogout={this.handleLogout} />
                    </div>

                    <div className="col-md-12">
                        <Switch>
                            {routes.map((route, index) => (
                                <Route
                                    key={index}
                                    path={route.path}
                                    exact={route.exact}
                                    component={route.main}
                                />
                            ))}

                            <Redirect from="/" to="/welcome" />
                        </Switch>
                    </div>
                </div>
            </Container>

        )
    }
}

export default Home