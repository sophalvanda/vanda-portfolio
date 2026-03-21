import axios from 'axios';

// Named export: This allows 'import { api }'
export const api = axios.create({
  baseURL: import.meta.env.VITE_API_URL || 'http://localhost/api/v1',
});

// Default export: This allows 'import api'
export default api;