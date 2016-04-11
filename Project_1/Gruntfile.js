module.exports = function (grunt) {

  grunt.initConfig({
    watch: {
      project: {
        files: ['*.html', '*.php'],
        options: {
          livereload: true
        }
      }
    }
  });
  grunt.loadNpmTasks('grunt-contrib-watch');
  grunt.registerTask('default', ['watch']);

};
