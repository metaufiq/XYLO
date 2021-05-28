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

const customerService = {
    list,
    add
};

export default customerService;