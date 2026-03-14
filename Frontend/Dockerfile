FROM node:20

WORKDIR /app

COPY . .

RUN npm install
RUN NODE_OPTIONS="--max-old-space-size=512" npm run build

CMD ["npm","run","preview"]