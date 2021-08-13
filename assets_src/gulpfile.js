const fs = require('fs');
const { series, dest, src, watch } = require('gulp');
const rollup = require('rollup');
const browserSync = require('browser-sync');
const postcss = require('gulp-postcss');
const sourcemaps = require('gulp-sourcemaps');
const rename = require('gulp-rename');
const touch = require('gulp-touch-fd');
const commonjs = require('@rollup/plugin-commonjs');
const resolve = require('@rollup/plugin-node-resolve');
const babelRollup = require('rollup-plugin-babel');
const svg = require('rollup-plugin-svg-import');
const { terser } = require('rollup-plugin-terser');

const defaultConfig = {
	browserSync: {
		proxy: 'localhost:80',
		host: '127.0.0.1',
		port: '3010',
		open: 'external',
	}
};

const config = fs.existsSync('./local-config.js') ? require('./local-config') : defaultConfig;
const postcssOptions = require('./postcss.config');

/* -------------------------------------------------------------------------------------------------
Development Tasks
-------------------------------------------------------------------------------------------------- */
function devServer() {
	browserSync(config.browserSync);

	watch('./css/**/*.pcss', stylesDev);
	watch('./js/**', series(scripts, Reload));
	// watch('./**', Reload);
}

function Reload(done) {
	browserSync.reload();
	done();
}

function stylesDev() {
	return src('./css/*.pcss')
		.pipe(sourcemaps.init())
		.pipe(postcss(postcssOptions))
		.pipe(rename((path) => { path.extname = ".css" }))
		.pipe(sourcemaps.write('.'))
		.pipe(dest('../'))
		.pipe(touch())
		.pipe(browserSync.stream({ match: '**/*.css' }));
}

function stylesBuild() {
	return src('./css/*.pcss')
		.pipe(sourcemaps.init())
		.pipe(postcss(postcssOptions))
		.pipe(rename((path) => { path.extname = ".css" }))
		.pipe(sourcemaps.write('.'))
		.pipe(dest('../'))
		.pipe(touch());
}

async function scripts() {
	const bundle = await rollup.rollup({
		input: './js/main.js',
		external: ['jquery'],
		plugins: [
			resolve(),
			svg({
				stringify: true
			}),
			commonjs(),
			babelRollup({
				exclude: 'node_modules/**' // only transpile our source code
			})
		]
	});

	await bundle.write({
		file: '../js/main.js',
		format: 'iife',
		plugins: process.env.NODE_ENV === 'production' ? [terser()] : [],
		globals: {
			jquery: 'jQuery'
		},
		sourcemap: true
	});
}

exports.dev = series(
	stylesDev,
	scripts,
	devServer,
);

exports.build = series(
	stylesBuild,
	scripts,
);

/* -------------------------------------------------------------------------------------------------
End of all Tasks
-------------------------------------------------------------------------------------------------- */
