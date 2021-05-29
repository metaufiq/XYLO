const setToken = async (config) => {

  switch (config.method) {
    case 'get':
      // config.params.request_key = userData.request_key;
      break;

    default:
      // config.data.request_key = userData.request_key;
      break;
  }
  return config;
};

const setInterceptor = (serv) => {
  serv.interceptors.request.use(function (config) {
    return new Promise(async (resolve) => {
      config = await setToken(config);
      resolve(config);
    });
  });
};

const requestConfig = {
  setInterceptor,
};
export default requestConfig;
