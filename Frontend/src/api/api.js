import axios from 'axios';

const api = axios.create({
    // It will use the variable from .env, or default to localhost if not found
    baseURL: 'http://13.239.31.154/api/v1', 
    timeout: 10000,
    headers: {
        'Content-Type': 'application/json',
        'Accept': 'application/json'
    }
});

export default api;