import axios from 'axios';

const api = axios.create({
    // VITE_ prefix is mandatory for Vue/Vite to pick it up
    baseURL: import.meta.env.VITE_API_BASE_URL || 'http://13.239.31.154/api/v1',
});

export default api;