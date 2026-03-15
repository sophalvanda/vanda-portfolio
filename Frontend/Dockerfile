# FROM node:20

# WORKDIR /app

# COPY . .

# RUN npm install
# RUN NODE_OPTIONS="--max-old-space-size=512" npm run build

# CMD ["npm","run","preview"]
# Stage 1: Build frontend
FROM node:20 AS build-stage

WORKDIR /app

# 1. Define the Build Argument
ARG VITE_API_BASE_URL

# 2. Set it as an Environment Variable for the build process
# Vite requires the VITE_ prefix to include variables in the client-side bundle.
ENV VITE_API_BASE_URL=$VITE_API_BASE_URL

# Copy package files first (caching)
COPY package*.json ./

# Install npm dependencies
RUN npm install

# Copy the rest of the source
COPY . .

# Build the frontend (Vite will now see the VITE_API_BASE_URL)
RUN npm run build

# Stage 2: Production image
FROM nginx:alpine AS production-stage

# Standard Nginx port is 80; keeping it consistent with your CI/CD script
EXPOSE 80

# Create app directory
RUN mkdir -p /app

# Copy custom nginx configuration
COPY nginx/nginx.conf /etc/nginx/conf.d/default.conf

# Copy built frontend from build-stage
COPY --from=build-stage /app/dist /app
