FROM node:20 AS build-stage
WORKDIR /app

# --- THESE MUST BE BEFORE 'npm run build' ---
ARG VITE_API_URL
ENV VITE_API_URL=$VITE_API_URL

COPY package*.json ./
RUN npm install
COPY . .
RUN npm run build

# Stage 2: Serve with Nginx (This is cleaner for production)
FROM nginx:alpine
COPY --from=build-stage /app/dist /usr/share/nginx/html
EXPOSE 80
CMD ["nginx", "-g", "daemon off;"]