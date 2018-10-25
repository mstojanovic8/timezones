import React, { Component } from 'react';
import {
    Navbar,
    NavbarBrand,
    Nav,
    NavItem,
    NavLink,
} from 'reactstrap';
import { Link, withRouter } from "react-router-dom";


class Navigation extends Component {

    render() {

        return (
            <div>
                <Navbar color="light" light expand="md">
                    <NavbarBrand tag={Link} to='/welcome'>Timezones Fishing Booker Test Project</NavbarBrand>

                    <Nav navbar>
                        <NavItem>
                            <NavLink tag={Link} to='/users' data-testid='users-link'>Users</NavLink>
                        </NavItem>
                        <NavItem>
                            <NavLink tag={Link} to='/timezones' data-testid="timezones-link">Timezones</NavLink>
                        </NavItem>
                        {/* {userLink}
                        {timezoneLink} */}
                        <NavItem>
                            <NavLink href="" onClick={this.props.handleLogout.bind(this)}>Logout</NavLink>
                        </NavItem>
                    </Nav>


                </Navbar>
            </div>
        );
    }
}

export default withRouter(Navigation);
