import axios from 'axios';

// This is a NAMED EXPORT
export const api = axios.create({
    // Make sure this variable name matches what you use in GitHub Actions
    baseURL: import.meta.env.VITE_API_BASE_URL || import.meta.env.VITE_API_URL || '/api/v1'
});