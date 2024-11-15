FROM node:20.18-alpine3.20
RUN addgroup app && adduser -S -G app app
USER app
WORKDIR /app
COPY --chown=app:app package*.json ./
RUN npm install
COPY --chown=app . .
CMD ["npm", "run", "dev"]