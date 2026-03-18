FROM node:20

WORKDIR /app

COPY . .

RUN npm install
RUN npm run build

CMD ["npm", "run", "preview"]
8. Configure Nginx

Create

nginx/default.conf
server {
    listen 80;

    location / {
        root /var/www/frontend/dist;
        index index.html;
        try_files $uri $uri/ /index.html;
    }

    location /api {
        proxy_pass http://backend:9000;
    }
}