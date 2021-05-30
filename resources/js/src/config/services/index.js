import requestConfig from './api/request';
import responseConfig from './api/response';
import Customer from './services/Customer';
import Auth from './services/Auth';
import Agent from './services/Agent';
import History from './services/History';

const service = {
  Customer,
  Auth,
  Agent,
  History
};


const serviceTemp = service;

for (let key in serviceTemp) {
  let serv = serviceTemp[key];
  requestConfig.setInterceptor(serv);
  responseConfig.setInterceptor(serv);
  // Do something with value
}
export default service;
