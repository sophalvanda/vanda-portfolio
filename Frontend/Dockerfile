FROM node:20 AS build-stage
WORKDIR /app

# Receive the argument from GitHub Actions
ARG VITE_API_BASE_URL
# Set it as an environment variable so 'npm run build' can see it
ENV VITE_API_BASE_URL=$VITE_API_BASE_URL

COPY package*.json ./
RUN npm install
COPY . .
RUN npm run build
...