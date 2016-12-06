var log, terminal;

terminal = require('color-terminal');

log = function(error, stdout, stderr, cb) {
  if (error) {
    terminal.color('red').write(stdout);
  } else {
    terminal.color('green').write(stdout);
  }
  return cb();
};

module.exports = function(grunt) {
  grunt.registerTask('default', ["watch"]);
  grunt.loadNpmTasks('grunt-contrib-watch');
  grunt.loadNpmTasks('grunt-shell');
  grunt.initConfig({
    testFilepath: null,
    watch: {
      php: {
        options: {
          event: 'changed',
          spawn: false
        },
        files: ['src/**/*.php', 'src/**/*Test.php'],
        tasks: 'shell:phpunit'
      }
    },
    shell: {
      phpunit: {
        options: {
          callback: log
        },
        command: 'echo <%= testFilepath %> && phpunit <%= testFilepath %>'
      }
    }
  });
  return grunt.event.on('watch', function(action, filepath, ext) {
    var regex, testFilepath;
    regex = new RegExp("src/([a-z0-9]+)/([a-z0-9/]+)", "i");
    if (filepath.match(regex)) {
      if (filepath.indexOf('Test') === -1) {
        testFilepath = filepath.replace(regex, "src/$1/tests/$2Test");
      } else {
        testFilepath = filepath;
      }
      return grunt.config('testFilepath', testFilepath);
    }
  });
};
