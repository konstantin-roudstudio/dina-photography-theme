const util = require('gulp-util');

module.exports = function(errorObject, callback) {
  util.log(errorObject.toString().split(': ').join(':\n'));
  // Keep gulp from hanging on this task
  if (typeof this.emit === 'function') this.emit('end')
};
