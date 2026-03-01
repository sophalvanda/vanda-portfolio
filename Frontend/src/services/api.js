import axios from 'axios';

const api = axios.create({
    baseURL: 'http://127.0.0.1:8000/api', // Laravel default port
});

export default {
    getPortfolioData() {
        return api.get('/portfolio-data');
    }
};