
const handleError = (error) => {
  if (error.message) {
    if (error.response) {
      // Request made and server responded
      throw new Error(error.response.data);
    } else if (error.request) {
      // The request was made but no response was received
      throw new Error(error.request);
    } else {
      throw new Error(error.message);
    }
  }
};

const setInterceptor = (serv) => {
  serv.interceptors.response.use(
    function (_response) {
      // Do something with response data
      return _response;
    },
    error =>
      // Do something with response error
      handleError(error),
  );
};

const responseConfig = {
  setInterceptor,
};
export default responseConfig;
