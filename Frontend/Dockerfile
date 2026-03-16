FROM node:20 AS build-stage
WORKDIR /app

# --- MUST BE HERE ---
# These catch the 'args' from your docker-compose
ARG VITE_API_URL
ENV VITE_API_URL=$VITE_API_URL
# --------------------

COPY package*.json ./
RUN npm install
COPY . .

# Now Vite bakes the AWS IP into the JavaScript files
RUN npm run build

FROM nginx:alpine AS production-stage
WORKDIR /app 
# Copy the build output to a location the 'command' in compose can see
COPY --from=build-stage /app/dist /app/dist
EXPOSE 80
CMD ["nginx", "-g", "daemon off;"]