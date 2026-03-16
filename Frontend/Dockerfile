FROM node:20 AS build-stage
WORKDIR /app

# --- YOU MUST ADD THESE TWO LINES HERE ---
ARG VITE_API_URL
ENV VITE_API_URL=$VITE_API_URL

COPY package*.json ./
RUN npm install
COPY . .

# Now the build will see the AWS IP
RUN npm run build

FROM nginx:alpine
# Match the path Nginx expects
COPY --from=build-stage /app/dist /usr/share/nginx/html
EXPOSE 80
CMD ["nginx", "-g", "daemon off;"]