'use strict'
module.exports = (grunt) ->

  grunt.initConfig
    jshint:
      options:
        jshintrc: '.jshintrc'
      all: [
        'Gruntfile.js'
        'assets/js/*.js'
        '!assets/js/scripts.min.js'
      ]
    coffeelint:
      options:
        configFile: '.coffeelintrc'
      all: [
        'Gruntfile.coffee'
        'assets/coffee/*.coffee'
      ]
    coffee:
      dist:
        options:
          sourceMap: true
        expand: true
        flatten: true
        cwd: 'assets/coffee'
        src: ['*.coffee']
        dest: 'assets/js'
        ext: '.js'
    sass:
      dist:
        options:
          style: 'compressed'
          compass: true
          # Source maps are available but require Sass 3.3.0 to be installed
          # https://github.com/gruntjs/grunt-contrib-sass#sourcemap
          sourcemap: true
        files:
          'assets/css/main.min.css': [
            'assets/sass/main.scss'
          ]
      dev:
        options:
          style: 'expanded'
          compass: true
          # Source maps are available, but require Sass 3.3.0 to be installed
          # https://github.com/gruntjs/grunt-contrib-sass#sourcemap
          sourcemap: true
        files:
          'assets/css/main.min.css': [
            'assets/sass/main.scss'
          ]
    uglify:
      dist:
        files:
          'assets/js/scripts.min.js': [
            'assets/js/plugins/*.js'
            'assets/js/_*.js'
          ]
        options:
          # JS source map: to enable, uncomment the lines below and update sourceMappingURL based on your install
          sourceMap: 'assets/js/scripts.min.js.map',
          sourceMappingURL: '/app/themes/roots/assets/js/scripts.min.js.map'
    version:
      options:
        file: 'lib/scripts.php'
        css: 'assets/css/main.min.css'
        cssHandle: 'roots_main'
        js: 'assets/js/scripts.min.js'
        jsHandle: 'roots_scripts'
    watch:
      sass:
        files: ['assets/sass/**/*.scss']
        tasks: ['sass:dev', 'version']
      coffee:
        files: ['<%= coffeelint.all %>']
        tasks: ['coffeelint', 'coffee']
      js:
        files: ['<%= jshint.all %>']
        tasks: ['jshint', 'uglify', 'version']
      livereload:
        # Browser live reloading
        # https://github.com/gruntjs/grunt-contrib-watch#live-reloading
        options:
          livereload: true
        files: [
          'assets/css/main.min.css'
          'assets/js/scripts.min.js'
          'templates/*.php'
          '*.php'
        ]
    clean:
      dist: [
        'assets/css/main.min.css'
        'assets/js/scripts.min.js'
      ]

  # Load tasks
  grunt.loadNpmTasks 'grunt-contrib-clean'
  grunt.loadNpmTasks 'grunt-contrib-jshint'
  grunt.loadNpmTasks 'grunt-contrib-uglify'
  grunt.loadNpmTasks 'grunt-contrib-watch'
  grunt.loadNpmTasks 'grunt-contrib-coffee'
  grunt.loadNpmTasks 'grunt-coffeelint'
  grunt.loadNpmTasks 'grunt-contrib-sass'
  grunt.loadNpmTasks 'grunt-wp-version'

  # Register tasks
  grunt.registerTask "default", [
    'clean'
    'coffee'
    'sass:dist'
    'uglify'
    'version'
  ]
  grunt.registerTask "dev", [
    'watch'
  ]
