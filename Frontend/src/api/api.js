import axios from 'axios';

const api = axios.create({
    // This will use the IP from .env, or fallback to the IP directly
    baseURL: import.meta.env.VITE_API_URL || 'http://13.239.31.154/api/v1',
    timeout: 10000,
});

export default api;