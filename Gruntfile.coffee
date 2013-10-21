module.exports = (grunt) ->
  # Project configuration.
  grunt.initConfig
    pkg: grunt.file.readJSON('package.json')
    compass:
      dist:
        options:
          config: 'config.rb'
          sassDir: 'sass'
          cssDir: 'stylesheets',
          outputStyle: 'expanded',
          environment: 'production'
      dev:
        options:
          config: 'config.rb'
          sassDir: 'sass',
          outputStyle: 'expanded',
          cssDir: 'stylesheets'
    sass:
      dist:
        options:
          style: 'expanded'
        files:
          "stylesheets/main.css": "sass/main.scss"
    watch:
      scripts:
        files: [
          'sass/*.scss'
          ]
        tasks: ['compass']

  grunt.loadNpmTasks 'grunt-contrib-sass'
  grunt.loadNpmTasks 'grunt-contrib-watch'
  grunt.loadNpmTasks('grunt-contrib-compass');