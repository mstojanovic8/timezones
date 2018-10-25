import decode from 'jwt-decode';
import axios from 'axios';


const authUrl = 'http://timezone.test/auth';

class AuthService {

    getRoles = () => {
        return axios.get(`${authUrl}/roles`);
    }

    login = (user) => {
        return axios.post(`${authUrl}/login`, user)
            .then(response => {
                this.setToken(response.data.token);
                return response.data
            });

    }

    register = (user) => {
        return axios.post(`${authUrl}/register`, user)
            .then(response => {
                console.log(response.data.token);
                this.setToken(response.data.token);
                return response.data
            })
            .catch(error => {
                throw error
            })
    }

    loggedIn = () => {
        // Checks if there is a saved token and it's still valid
        const token = this.getToken()
        return !!token && !this.isTokenExpired(token) // handwaiving here
    }

    isTokenExpired = (token) => {

        try {
            const decoded = decode(token);
            if (decoded.exp < Date.now() / 1000) {
                return true;
            }
            else
                return false;
        }
        catch (err) {
            return false;
        }
    }

    setToken = (idToken) => {
        localStorage.setItem('id_token', idToken)
    }

    getToken = () => {
        return localStorage.getItem('id_token')
    }

    logout = () => {
        localStorage.removeItem('id_token');
    }

    getLoggedInUser = () => {
        if (this.loggedIn())
            return decode(this.getToken());
    }


}

export default AuthService;