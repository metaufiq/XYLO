import service from "../config/services";


const list = async (params) => {
    console.log("masuk sini");
    const res = await service.History.get('list', { params });
    return { ...res.data };
};
const historyService = {
    list
};

export default historyService;