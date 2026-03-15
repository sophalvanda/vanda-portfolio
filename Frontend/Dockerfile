# Stage 1: Build
FROM node:20 AS build-stage
WORKDIR /app
ARG VITE_API_URL
ENV VITE_API_URL=$VITE_API_URL
COPY package*.json ./
RUN npm install
COPY . .
RUN npm run build

# Stage 2: Production (This is where the fix is!)
FROM nginx:alpine AS production-stage
# Copy the built files from Stage 1 to Nginx's default public folder
COPY --from=build-stage /app/dist /usr/share/nginx/html
# Copy your custom nginx config
COPY nginx/nginx.conf /etc/nginx/conf.d/default.conf

EXPOSE 80
CMD ["nginx", "-g", "daemon off;"]