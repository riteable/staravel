const path = require('path')
const { WebpackManifestPlugin } = require('webpack-manifest-plugin')
const { CleanWebpackPlugin } = require('clean-webpack-plugin')
const MiniCssExtractPlugin = require('mini-css-extract-plugin')
const WebpackPwaManifest = require('webpack-pwa-manifest')
const RemoveEmptyScriptsPlugin = require('webpack-remove-empty-scripts')
const CopyPlugin = require('copy-webpack-plugin')
const projectMeta = require('@riteable/project-meta')

const meta = projectMeta({ sass: './resources/css/themes/_dark.scss' })

module.exports = {
  entry: {
    app: './resources/js/app.js',
    'theme-light': './resources/css/theme-light.scss',
    'theme-dark': './resources/css/theme-dark.scss'
  },
  output: {
    path: path.resolve(__dirname, 'public'),
    publicPath: '/'
  },
  module: {
    rules: [
      {
        test: /\.m?js$/,
        exclude: /node_modules/,
        use: {
          loader: 'babel-loader',
          options: {
            presets: [
              ['@babel/preset-env', { targets: 'defaults' }]
            ]
          }
        }
      },
      {
        test: /\.scss$/,
        use: [
          { loader: MiniCssExtractPlugin.loader },
          { loader: 'css-loader' },
          {
            loader: 'clean-css-loader',
            options: { level: 2 }
          },
          { loader: 'sass-loader' }
        ]
      }
    ]
  },
  plugins: [
    new CleanWebpackPlugin({
      cleanOnceBeforeBuildPatterns: ['js/*', 'css/*']
    }),
    new RemoveEmptyScriptsPlugin(),
    new WebpackManifestPlugin({
      fileName: 'assets-manifest.json'
    }),
    new WebpackPwaManifest({
      filename: 'web-manifest.json',
      name: meta.env.appName,
      short_name: meta.env.appName,
      description: meta.package.description,
      theme_color: meta.sass.primary.hex,
      background_color: meta.sass.schemeMain.hex,
      icons: [
        {
          src: path.resolve('resources/img/icon.png'),
          sizes: [16, 24, 32, 64, 96, 128, 192, 256, 384, 512],
          destination: path.join('img', 'icons')
        }
      ]
    }),
    new CopyPlugin({
      patterns: [
        {
          from: './resources/img/',
          to: 'img/'
        }
      ]
    })
  ]
}
