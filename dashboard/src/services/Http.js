import axios from 'axios';
import AuthService  from './AuthService';

const Auth = new AuthService()

const Http = axios.create({
    baseURL: 'http://timezone.test/',
    timeout: 1000,
    headers: { 'Content-Type': 'application/json' },
});

Http.interceptors.request.use(
    function (config) {
        const token = Auth.getToken();
        if (token) config.headers.Authorization = `${token}`;
        return config;
    },
    function (error) {
        return Promise.reject(error);
    }
);

export default Http;