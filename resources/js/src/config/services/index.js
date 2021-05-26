import requestConfig from './api/request';
import responseConfig from './api/response';
import Customer from './services/Customer';

const service = {
  Customer
};


const serviceTemp = service;

for (let key in serviceTemp) {
  let serv = serviceTemp[key];
  requestConfig.setInterceptor(serv);
  responseConfig.setInterceptor(serv);
  // Do something with value
}
export default service;