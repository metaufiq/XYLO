import service from "../config/services";


const list = async (params) => {
    const res = await service.Customer.get('list', { params });
    return { ...res.data };
};

const add = async (customerName, customerPhoneNumber, customerStatus) => {
    const params = {
        name: customerName,
        phone_number: customerPhoneNumber,
        status: customerStatus
    }
    const res = await service.Customer.post('add', params);
    return { ...res.data };
};

const edit = async (customerId, customerName, customerPhoneNumber, customerStatus) => {
    const params = {
        id: customerId,
        name: customerName,
        phone_number: customerPhoneNumber,
        status: customerStatus,
    }
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
    add,
    edit,
    remove
};

export default customerService;