import React, { Component } from 'react';
import { Route, Switch, BrowserRouter } from 'react-router-dom';
import './App.scss';
import Home from './components/Home'
import Login from './components/Login/Login'

class App extends Component {
  render() {
    return (
      <BrowserRouter>
        <Switch>
          <Route exact path="/login" name="Login" component={Login} />
          <Route path="/" name="Home" component={Home} />
        </Switch>
      </BrowserRouter>

    );
  }
}

export default App;
