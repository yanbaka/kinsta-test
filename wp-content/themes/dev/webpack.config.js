const path = require('path');
const BrowserSyncPlugin = require("browser-sync-webpack-plugin");
const MiniCssExtractPlugin = require('mini-css-extract-plugin');
const FixStyleOnlyEntriesPlugin = require('webpack-fix-style-only-entries');

const themes = 'fl';

module.exports = {
  mode: "development",
  module: {
    rules: [
        {
            test: /\.(css|sass|scss)/,
            use: [
                {
                    loader: MiniCssExtractPlugin.loader
                },
                {
                    loader: 'css-loader'
                },
                {
                    loader: 'sass-loader'
                }
            ]
        }
    ]
  },
  entry: {
    'index': [ path.resolve(__dirname, 'src/js/index.js') ],
    'index': [ path.resolve(__dirname, 'src/css/index.scss') ],
  },
  output: {
    filename: '[name].js',
    path: path.resolve(__dirname, `../${themes}/js`),
    publicPath: '/',
  },
  plugins: [
    new BrowserSyncPlugin({
      host: "localhost",
      files: [`../${themes}/**/*.php`],
      port: 3000,
      // dockerとホストをつないでいるポートをproxyで指定
      proxy: {
        target: "https://kinstatest.local/",
      },
    }),
    new MiniCssExtractPlugin({
      // 出力先はjsからの相対パスを指定。[name]にはentryのkeyが入る　
      filename: `../css/[name].css`,
    }),
    // cssをentryしたときに生成される不要なjsを削除
    new FixStyleOnlyEntriesPlugin(),
  ],
};