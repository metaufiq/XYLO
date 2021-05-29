import service from "../config/services";


const login = async (params) => {
    const res = await service.Auth.post('login', params);
    return { ...res.data };
};

const authService = {
    login
};

export default authService;