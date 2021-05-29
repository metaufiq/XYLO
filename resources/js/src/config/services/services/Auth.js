import axios from 'axios';
import env from '../env';

const Auth = axios.create({
    baseURL: `${env.BASE_URL}/auth/`,
});

export default Auth;
