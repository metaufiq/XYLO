import service from "../config/services";


const login = async (params) => {
    const res = await service.Auth.post('login', params);
    return { ...res.data };
};

const register = async (params) => {
    const res = await service.Auth.post('register', params);
    return { ...res.data };
};

const authService = {
    login,
    register
};

export default authService;