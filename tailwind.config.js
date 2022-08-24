const defaultTheme = require('tailwindcss/defaultTheme');

function withOpacityValue(variable) {
    return ({ opacityValue }) => {
        if (opacityValue === undefined) {
            return `rgb(var(${variable}))`
        }
        return `rgb(var(${variable}) / ${opacityValue})`
    }
}

/** @type {import('tailwindcss').Config} */
module.exports = {
    darkMode: 'class',

    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',

        // './app/view/Components/**/*.php' /*    <-- retirar comentário se utilizar components blade */
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Nunito', ...defaultTheme.fontFamily.sans],
            },

            colors: {
                'primary':   withOpacityValue('--color-primary'),
                'secondary': withOpacityValue('--color-secondary'),
                'success':   withOpacityValue('--color-success'),
                'danger':    withOpacityValue('--color-danger'),
                'warning':   withOpacityValue('--color-warning'),
                'info':      withOpacityValue('--color-info'),

                'primary-active':   withOpacityValue('--color-primary-active'),
                'secondary-active': withOpacityValue('--color-secondary-active'),
                'success-active':   withOpacityValue('--color-success-active'),
                'danger-active':    withOpacityValue('--color-danger-active'),
                'warning-active':   withOpacityValue('--color-warning-active'),
                'info-active':      withOpacityValue('--color-info-active'),

                'theme':  withOpacityValue('--bg-theme'),
                'header': withOpacityValue('--bg-header'),
                'body':   withOpacityValue('--bg-body'),
                'aside':  withOpacityValue('--bg-aside'),
            }
        },
    },

    plugins: [require('@tailwindcss/forms')],
};
