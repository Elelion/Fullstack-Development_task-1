// var path = require('path');
// var MinCssExtractPlugin = require('mini-css-extract-plugin');

// module.exports = {
//     entry: './main.js',

//     output: {
//         filename: 'bundle.js',
//         path: path.resolve(__dirname, 'dist')
//     },

//     module: {
//         rules: [
//             {
//                 test: /\.css$/,
//                 use: [
//                     MinCssExtractPlugin.loader,
//                     "css-loader"
//                 ]
//             }

//         ]
//     },

//     plugins: [
//         new MinCssExtractPlugin({
//             filename: "styles.css",
//             chunkFilename: "[id].css"
//         })

//     ]


// };

// ----------------------------------------------------------------------------

// // подключаем базовые переменные
// // модуль для управления путями
// const path = require('path')

// // сам вебпак
// // const webpack = require('webpack')

// module.exports = {
//   // базовый путь к проекту
//   // content: path.resolve(__dirname, 'src'),
  
//   //указываем где будет находиться наш файл  
//   // точка входа JS
//   entry: {
//     // entry: './scripts.js',
//     // основной файл приложение
//     app: [
//       './applications/app.js'   
//     ],
//   },
  
//   mode: "development",
  
// 	//указываем файл, куда будет компилироваться наш проект
// 	output: {
// 		//указываем каталог где будет собираться сборка
// 		path: path.join(__dirname, ''),

// 		//указываем как будет называться наш файл, в котором будет сборка    
//     filename: './scripts.js', //[name] - заменяет имя файла автоматом на имя, что было в основном файле (см.выше)

// 		//Указываем относительный путь, где будет статические другие файлы
//     publicPath: 'build'
// 	},
// }

// ----------------------------------------------------------------------------

// const MinCssExtractPlugin = require('mini-css-extract-plugin');
// var ExtractTextPlugin = require('extract-text-webpack-plugin');

// module.exports = {
//   entry: './main.js',
//   // mode: 'development',
//   output: {
//     filename: 'bundle.js'
//   },

//   // resolve: {
//   //   modulesDirectories: ['node_modules']
//   // },

//   module.exports = {
//     module: {
//           rules: [
//               {
//                   test: /\.css$/,
//                   use: [
//                       MinCssExtractPlugin.loader,
//                       "css-loader"
//                   ]
//               }
//           ]
//     },
    
//     plugins: [
//           new MinCssExtractPlugin({
//               filename: "./styles.css",// ваш путь
//               chunkFilename: "[id].css"
//           })
//       ]
//   };
// };

// ----------------------------------------------------------------------------

// наш плагин для css
// var ExtractTextPlugin = require('extract-text-webpack-plugin');

// module.exports = {
//   entry: './main.js',
//   // mode: 'development',
//   output: {
//     filename: 'bundle.js'
//   },

//   // resolve: {
//   //   modulesDirectories: ['node_modules']
//   // },

//   module: {
//     rules: [{
//       test: /\.js$/,
//       // loader: 'babel',
//       use: 'babel-loader',
//       // exclude: /(node_modules|bower_components)/
//     },
//     {
//       test: /\.css$/,
//       use: ExtractTextPlugin.extract({
//         // fallback: 'style-loader',
//         use: 'css-loader'
//       }),
//       exclude: '/node_modules'
//       // loader: ExtractTextPlugin.extract('style-loader', 'css-loader')
//     }]
//   },
  
//   plugins: [
//     new ExtractTextPlugin('bundle.css')
//   ]
// };

// ----------------------------------------------------------------------------
// var MinCssExtractPlugin = require('mini-css-extract-plugin');
// var ExtractTextPlugin = require('extract-text-webpack-plugin');
const path = require('path')

// сам вебпак
// const webpack = require('webpack')

module.exports = {
  // базовый путь к проекту
  // content: path.resolve(__dirname, 'src'),
  
  //указываем где будет находиться наш файл  
  // точка входа JS
  entry: {
    entry: './main.js',
    // основной файл приложение
    // app: [
    //   './main.js'   
    // ],
  },
  
  mode: "development",
  
	//указываем файл, куда будет компилироваться наш проект
	output: {
		//указываем каталог где будет собираться сборка
		path: path.join(__dirname, ''),

		//указываем как будет называться наш файл, в котором будет сборка    
    filename: './scripts.js', //[name] - заменяет имя файла автоматом на имя, что было в основном файле (см.выше)

		//Указываем относительный путь, где будет статические другие файлы
    publicPath: 'build'
	},
}