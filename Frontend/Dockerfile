FROM node:20 AS build-stage
WORKDIR /app

# --- THESE MUST BE HERE ---
ARG VITE_API_URL
ENV VITE_API_URL=$VITE_API_URL
# --------------------------

COPY package*.json ./
RUN npm install
COPY . .

# Now when this runs, it sees the IP address
RUN npm run build

FROM nginx:alpine AS production-stage
# Match your Nginx config root
WORKDIR /app 
COPY --from=build-stage /app/dist /app
COPY nginx/nginx.conf /etc/nginx/conf.d/default.conf
EXPOSE 80
CMD ["nginx", "-g", "daemon off;"]