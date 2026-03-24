import axios from 'axios';

const api = axios.create({
    // This line dynamically picks the URL based on which .env is active
    baseURL: import.meta.env.VITE_API_BASE_URL
});

export default api;