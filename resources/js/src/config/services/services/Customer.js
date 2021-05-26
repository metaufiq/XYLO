import axios from 'axios';
import env from '../env';

const Customer = axios.create({
  baseURL: `${env.BASE_URL}/customer/`,
});

export default Customer;
