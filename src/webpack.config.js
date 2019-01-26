// NOTE: модуль для управления путями
const path = require('path');

/**
 * NOTE: 
 * add the "Extract Text Plugin" . It is 
 * responsible for moving CSS to a separate file.
 */
// const ExtractTextPlugin = require('extract-text-webpack-plugin');

// ---

// NOTE: out config for webpack
module.exports = {

  // NOTE: our inbound rules for building a package
  entry: './main.js',

  // NOTE: our ready to assembly
  output: {
    path: path.resolve(__dirname, 'dist'),
    filename: 'bundle.js'
  },

  module: {
    rules: [
      {
        test: /\.css$/,
        use: [
            'style-loader',
            'css-loader',
            'sass-loader'
          ]
      },
      {
        test: /\.(ttf|otf)$/,
        use: [
          'file-loader'
        ]
      }
    ]
  },

  // NOTE: for disable - WARNING in configuration
  // mode: "development"

  /**
   * NOTE: 
   * make a link to the"Extract Text Plugin "it will let Webpack 
   * know that all CSS-files must be combined into a separate 
   * file and call it" styles.css".
   */
  // plugins: [
  //   new ExtractTextPlugin('./styles.css')
  //  ]
};