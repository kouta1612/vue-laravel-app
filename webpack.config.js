let path = require('path');

var config = {
    entry: './resources/assets/js/app.js',

    output: {
        path: path.resolve(__dirname, 'public/js'),
        filename: 'app.js',
        publicPath: './public'
    },

    resolve: {
        alias: {
            'vue$': 'vue/dist/vue.esm.js' // 'vue/dist/vue.common.js' webpack 1 用
        }
    },

    module: {
        rules: [
            {
                test: /\.js$/,
                exclude: /node_modules/,
                loader: 'babel-loader'
            }
        ]
    },
};

module.exports = (env, argv) => {

    if (argv.mode === 'development') {
    }

    if (argv.mode === 'production') {
        // config.devtool = 'source-map';
    }

    return config;
};
