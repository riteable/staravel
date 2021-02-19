const path = require('path')
const { WebpackManifestPlugin } = require('webpack-manifest-plugin')
const { CleanWebpackPlugin } = require('clean-webpack-plugin')
const MiniCssExtractPlugin = require('mini-css-extract-plugin')
const WebpackPwaManifest = require('webpack-pwa-manifest')

module.exports = {
  entry: {
    app: ['./resources/js/app.js', './resources/css/app.scss']
  },
  output: {
    path: path.resolve(__dirname, 'public'),
    publicPath: '/'
  },
  module: {
    rules: [
      {
        test: /\.scss$/,
        use: [
          MiniCssExtractPlugin.loader,
          'css-loader',
          'sass-loader'
        ]
      }
    ]
  },
  plugins: [
    new CleanWebpackPlugin({
      cleanOnceBeforeBuildPatterns: ['js/*', 'css/*']
    }),
    new WebpackManifestPlugin({
      fileName: 'assets-manifest.json'
    }),
    new WebpackPwaManifest({
      filename: 'web-manifest.json',
      name: 'Larawire',
      short_name: 'Larawire',
      description: 'A basic Laravel + Livewire project template.',
      background_color: '#ffffff',
      icons: [
        {
          src: path.resolve('resources/img/icon.png'),
          sizes: [16, 24, 32, 64, 96, 128, 192, 256, 384, 512],
          destination: path.join('img', 'icons')
        }
      ]
    })
  ]
}
