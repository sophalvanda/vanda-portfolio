FROM node:20 AS build-stage
WORKDIR /app

# The workflow passes it here
ARG VITE_API_BASE_URL 
# This makes it available to the 'npm run build' process
ENV VITE_API_BASE_URL=$VITE_API_BASE_URL 

COPY package*.json ./
RUN npm install
COPY . .
RUN npm run build
...