const autoprefixer = require('autoprefixer'),
    postcssSass = require('./lib/postcssSass'),
    postcssEasyImport = require('postcss-easy-import'),
    customProperties = require('postcss-custom-properties'),
    customSelectors = require('postcss-custom-selectors'),
    customMedia = require('postcss-custom-media'),
    cssnano = require('cssnano');

const parser = require('postcss-comment');

module.exports = {
  parser: parser,
  plugins: [
    postcssSass(),
    autoprefixer({
      "flexbox": 'no-2009',
      "grid": true
    }),
    postcssEasyImport,
    customProperties,
    customSelectors,
    customMedia,
    process.env.NODE_ENV === 'production' ? cssnano : null
  ]
};
