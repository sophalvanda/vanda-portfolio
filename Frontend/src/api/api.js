const api = axios.create({
  // Update this to your NEW AWS IP
  baseURL: import.meta.env.VITE_APP_API_BASE_URL || 'http://13.239.31.154:9000/api', 
  headers: {
    'Access-Control-Allow-Origin': '*',
    'Content-type': 'application/json'
  }
})