FROM node:20 AS build-stage
WORKDIR /app

# 1. These ARGs must match the --build-arg names in your workflow
ARG VITE_API_URL
ARG VITE_API_BASE_URL

# 2. These ENV lines make the ARGs available to the 'npm run build' process
ENV VITE_API_URL=$VITE_API_URL
ENV VITE_API_BASE_URL=$VITE_API_BASE_URL

COPY package*.json ./
RUN npm install
COPY . .

# 3. NOW when this runs, it will bake the AWS IP into the JavaScript files
RUN npm run build

# Stage 2: Serve with Nginx
FROM nginx:alpine
COPY --from=build-stage /app/dist /app
COPY nginx/nginx.conf /etc/nginx/conf.d/default.conf
EXPOSE 80
CMD ["nginx", "-g", "daemon off;"]