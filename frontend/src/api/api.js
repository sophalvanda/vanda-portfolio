import axios from 'axios';

// Add 'export' here
export const api = axios.create({
    baseURL: import.meta.env.VITE_API_BASE_URL
});