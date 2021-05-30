import axios from 'axios';
import env from '../env';

const History = axios.create({
    baseURL: `${env.BASE_URL}/history/`,
});

export default History;
