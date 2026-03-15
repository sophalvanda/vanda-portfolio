import axios from 'axios';

const api = axios.create({
    // It will use the variable from .env, or default to localhost if not found
    baseURL: import.meta.env.VITE_API_URL || 'http://127.0.0.1:8000/api/v1', 
    timeout: 10000,
    headers: {
        'Content-Type': 'application/json',
        'Accept': 'application/json'
    }
});

export default api;