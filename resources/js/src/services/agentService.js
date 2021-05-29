import service from "../config/services";


const list = async (params) => {
    const res = await service.Agent.get('list', { params });
    return { ...res.data };
};
const agentService = {
    list,
};

export default agentService;