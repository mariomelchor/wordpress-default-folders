module.exports = function(grunt) {

  // Project configuration.
  grunt.initConfig({
    imagemin: {
      dist: {
        options: {
          optimizationLevel: 5
        },
        files: [{
          expand: true,
          cwd: 'assets/products/',
          src: ['**/*.{png,jpg,gif}'],
          dest: 'dist/'
        }]
      },
      jpg: {
        options: {
          optimizationLevel: 5,
          progressive: true
        },
        files: [{
          expand: true,
          cwd: 'assets/products/productSlides/',
          src: ['**/*.jpg'],
          dest: 'dist/',
        }]
      }
    },
    sass: {
      dist: {
        options: {
          style: 'expanded',
        },
        files: {
          'src/css/styles.css': 'sass/styles.scss'
        }
      }
    },
    cssmin: {
      options: {
        sourceMap: true
      },
      target: {
        files: {
          'css/styles.min.css': [
            'src/css/bootstrap/bootstrap.css',
            'src/css/styles.css'
          ]
        }
      }
    },
    watch: {
      sass: {
        files: ['sass/*.scss'],
        tasks: ['sass', 'cssmin'],
      }
    },
    browserSync: {
      dev: {
        bsFiles: {
          src : [
          'css/styles.min.css',
          '*.php',
          '**/*.php'
          ]
        },
        options: {
          watchTask: true,
          proxy: 'localhost:8080/domainname.com/'
        }
     }
    },
  });

  // grunt.loadNpmTasks('grunt-contrib-imagemin');
  // grunt.registerTask('imagejpg', ['imagemin:jpg']); // only .jpg files
  grunt.loadNpmTasks('grunt-contrib-watch');
  grunt.loadNpmTasks('grunt-contrib-cssmin');
  grunt.loadNpmTasks('grunt-contrib-sass');
  grunt.loadNpmTasks('grunt-browser-sync');
  grunt.registerTask('default', [ 'browserSync', 'watch' ] );

};