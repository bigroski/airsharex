import { defineConfig } from "vite";
import laravel from "laravel-vite-plugin";
import path from "path";




export default defineConfig({
    plugins: [
        laravel({
            input: [
                "themes\airsharex\sass/app.scss",
                "themes\airsharex\js/app.js"
            ],
            buildDirectory: "airsharex",
        }),
        
        
        {
            name: "blade",
            handleHotUpdate({ file, server }) {
                if (file.endsWith(".blade.php")) {
                    server.ws.send({
                        type: "full-reload",
                        path: "*",
                    });
                }
            },
        },
    ],
    resolve: {
        alias: {
            '@': '/themes\airsharex\js',
            '~bootstrap': path.resolve('node_modules/bootstrap'),
        }
    },
    
});
