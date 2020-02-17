import { NAME_TOKEN } from './config/configs'; // CONFIGS

try {

    require('bootstrap');

} catch (e) {}

window.axios = require('axios');

window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';

let token = document.head.querySelector('meta[name="csrf-token"]');

if (token) {
    window.axios.defaults.headers.common['X-CSRF-TOKEN'] = token.content;
} else {
    console.error('CSRF token not found: https://laravel.com/docs/csrf#csrf-x-csrf-token');
}

const tokenAccess = localStorage.getItem(NAME_TOKEN)

if ( tokenAccess )
    window.axios.defaults.headers.common['Authorization'] = `Bearer ${ tokenAccess }`;
