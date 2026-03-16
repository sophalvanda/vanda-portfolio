FROM node:20 AS build-stage
WORKDIR /app

# Catch the IP from docker-compose
ARG VITE_API_URL
ENV VITE_API_URL=$VITE_API_URL

COPY package*.json ./
RUN npm install
COPY . .

# Vite bakes the ENV into /app/dist during this step
RUN npm run build

FROM nginx:alpine
# Copy to the path nginx_server is actually looking at
COPY --from=build-stage /app/dist /usr/share/nginx/html
EXPOSE 80
CMD ["nginx", "-g", "daemon off;"]