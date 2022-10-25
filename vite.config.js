import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import { viteStaticCopy } from 'vite-plugin-static-copy'

export default defineConfig({
    plugins: [
        laravel({
            input: [
                // Resources paths
                'resources/sass/app.scss',
                'resources/css/app.css',
                'resources/js/app.js',
                
                // Resources assets js file paths
                'resources/assets/js/advanced-form-elements',
                'resources/assets/js/apexcharts',
                'resources/assets/js/blog-post',
                'resources/assets/js/calendar',
                'resources/assets/js/carousel',
                'resources/assets/js/chart-circle',
                'resources/assets/js/chart.chartjs',
                'resources/assets/js/chart.echarts',
                'resources/assets/js/chart.flot',
                'resources/assets/js/chart.morris.js',
                'resources/assets/js/chart.peity',
                'resources/assets/js/chart.sparkline',
                'resources/assets/js/chat',
                'resources/assets/js/check-all-mail',
                'resources/assets/js/checkout-jquery-steps',
                'resources/assets/js/contacts',
                'resources/assets/js/crypto-buysell',
                'resources/assets/js/crypto-dashboard',
                'resources/assets/js/crypto-exchange',
                'resources/assets/js/crypto-market',
                'resources/assets/js/crypto-transaction',
                'resources/assets/js/ecommerce-dashboard',
                'resources/assets/js/file-detail',
                'resources/assets/js/form-editor',
                'resources/assets/js/form-elements',
                'resources/assets/js/form-validation',
                'resources/assets/js/form-vallidations',
                'resources/assets/js/gallery',
                'resources/assets/js/generate-otp',
                'resources/assets/js/handleCounter',
                'resources/assets/js/index',
                'resources/assets/js/mapelmaps',
                'resources/assets/js/modal',
                'resources/assets/js/picker',
                'resources/assets/js/popover',
                'resources/assets/js/select2',
                'resources/assets/js/summernote',
                'resources/assets/js/sweet-alert',
                'resources/assets/js/table-data',
                'resources/assets/js/tabs',
                'resources/assets/js/timline',
                'resources/assets/js/tooltip',
                'resources/assets/js/vector-map',
                'resources/assets/js/widgets',
                'resources/assets/switcher/js/switcher' 
            ],
            refresh: true,
        }),
        viteStaticCopy({
            targets: [
              {
                src: (['resources/assets/img/', 'resources/assets/plugins/','resources/assets/js/form-wizard.js', 'resources/assets/js/sticky.js', 'resources/assets/web-fonts/']),
                dest: 'assets/'
              }
            ]
          }),
        {
            name: 'blade',
            handleHotUpdate({ file, server }) {
                if (file.endsWith('.blade.php')) {
                    server.ws.send({
                        type: 'full-reload',
                        path: '*',
                    });
                }
            },
        }
    ],
});
