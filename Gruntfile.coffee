module.exports = (grunt) ->
  # Project configuration.
  grunt.initConfig
    pkg: grunt.file.readJSON('package.json')

    less:
      development:
        options:
          paths: ["bower_components/bootstrap/less", "less"]
        files:
          "css/main.css": "less/main.less"
    watch:
      scripts:
        files: ['less/*.less']
        tasks: ['less']

  grunt.loadNpmTasks 'grunt-contrib-less'
  grunt.loadNpmTasks 'grunt-contrib-watch'
  grunt.registerTask('default', ['less'])
