import axios from 'axios';
import env from '../env';

const Agent = axios.create({
  baseURL: `${env.BASE_URL}/agent/`,
});

export default Agent;
