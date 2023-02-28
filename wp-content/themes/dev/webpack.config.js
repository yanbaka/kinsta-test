const path = require('path');
const BrowserSyncPlugin = require("browser-sync-webpack-plugin");
const MiniCssExtractPlugin = require('mini-css-extract-plugin');
const FixStyleOnlyEntriesPlugin = require('webpack-fix-style-only-entries');

const webpack = require('webpack');

const CopyPlugin = require('copy-webpack-plugin');
const ImageminPlugin = require('imagemin-webpack-plugin').default;
const ImageminMozjpeg = require('imagemin-mozjpeg');

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
    // entry名はcssとjsで同名はNG
    'script': [ path.resolve(__dirname, 'src/js/index.js') ],
    'style': [ path.resolve(__dirname, 'src/css/index.scss') ],
  },
  output: {
    filename: '[name].js',
    path: path.resolve(__dirname, `../${themes}/js`),
    publicPath: '/',
    clean: true,
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
    new webpack.ProvidePlugin({
      $: 'jquery',
      jQuery: "jquery"
    }),
    new CopyPlugin({
      patterns: [
        {
          from: `${path.resolve(__dirname, 'src')}/images`,
          to: `${path.resolve(__dirname, `../${themes}`)}/images/[name][ext]`
        }
      ]
    }),
    new ImageminPlugin({
      test: /\.(jpe?g|png|gif|svg)$/i,
      plugins: [
        ImageminMozjpeg({
          quality: 85,
          progressive: true,
        }),
      ],
      pngquant: {
        quality: '70-85',
      },
      gifsicle: {
        interlaced: false,
        optimizationLevel: 10,
        colors: 256,
      },
      svgo: {}
    })
  ],
};