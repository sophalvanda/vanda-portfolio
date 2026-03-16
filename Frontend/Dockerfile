FROM node:20 AS build-stage
WORKDIR /app

# --- THIS IS THE MISSING PIECE ---
# This catches the VITE_API_URL from your docker-compose.yml
ARG VITE_API_URL
# This makes it available to the 'npm run build' process
ENV VITE_API_URL=$VITE_API_URL
# ---------------------------------

COPY package*.json ./
RUN npm install
COPY . .

# Vite will now see the AWS IP and replace it in the JS files
RUN npm run build

FROM nginx:alpine
COPY --from=build-stage /app/dist /usr/share/nginx/html
EXPOSE 80
CMD ["nginx", "-g", "daemon off;"]