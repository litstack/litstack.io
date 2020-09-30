module.exports = {
    purge: [],
    theme: {
        borderRadius: {
            none: '0',
            sm: '0.125rem',
            default: '0.25rem',
            md: '0.5rem',
            lg: '0.875rem',
            full: '9999px',
        },
        extend: {
            colors: {
                blue: {
                    '100': '#F5F8FB',
                    '200': '#E2E4FB',
                    '300': '#ACB0FF',
                    '400': '#7F87FA',
                    '500': '#4852F2',
                    '600': '#2831C5',
                    '700': '#252B88',
                    '800': '#1D2378',
                    '900': '#070A1F',
                },
                yellow: {
                    '500': '#FFD05A',
                },
            },
            fontSize: {
                sm: ['11px', '18px'],
                base: ['14px', '26px'],
                lg: ['16px', '29px'],
                xl: ['20px', '40px'],
                '2xl': ['35px', '41px'],
            },
        },
    },
    variants: {},
    plugins: [],
};
