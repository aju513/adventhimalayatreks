import { defineConfig } from 'vite';

export default defineConfig({
  plugins: [],
  server: {
    watch: {
      usePolling: true, // Ensures auto-reload for PHP, CSS, and JS files
    },
    host: 'localhost',
    port: 5176,
  },
  build: {
    outDir: 'dist',
    rollupOptions: {
      input: {
        app: './js/custom.js',
        styles: './css/main.css',
      },
    },
  },
});
