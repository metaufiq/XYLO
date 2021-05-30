import service from "../config/services";


const list = async (params) => {
    const res = await service.Customer.get('list', { params });
    return { ...res.data };
};


const listStatus = async (params) => {
    const res = await service.Customer.get('status/list', { params });
    return { ...res.data };
};

const add = async (params) => {
    const res = await service.Customer.post('add', params);
    return { ...res.data };
};

const edit = async (params) => {
    const res = await service.Customer.post('edit', params);
    return { ...res.data };
};

const remove = async (customerId) => {
    const params = {
        id: customerId,
    }
    const res = await service.Customer.post('delete', params);
    return { ...res.data };
};
const customerService = {
    list,
    listStatus,
    add,
    edit,
    remove
};

export default customerService;