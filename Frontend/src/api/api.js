// Example in your API configuration file
import axios from 'axios';

const apiClient = axios.create({
  // This will look for the IP during the CI/CD build process
  baseURL: import.meta.env.VITE_API_URL || 'http://13.239.31.154/api/v1',
  headers: {
    'Content-Type': 'application/json',
    'Accept': 'application/json'
  }
});