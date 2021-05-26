import service from "../config/services";


const list = async (params) => {
    const res = await service.Customer.get('list', { params });
    return { ...res.data };
};

const customerService = {
    list
};

export default customerService;