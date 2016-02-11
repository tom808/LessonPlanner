module.exports = function(grunt) {

    grunt.initConfig({
        pkg: grunt.file.readJSON('package.json'),
        bowercopy: {
            options: {
                srcPrefix: 'bower_components'
            },
            scripts: {
                options: {
                    destPrefix: 'public/lib'
                },
                files: {
                    'jquery/jquery.js': 'jquery/dist/jquery.js',
                    'fullcalendar/fullcalendar.js': 'fullcalendar/dist/fullcalendar.js',
                    'fullcalendar/fullcalendar.css': 'fullcalendar/dist/fullcalendar.css',
                    'moment/moment.js': 'moment/src/moment.js'
                }
            },
            folders: {
                files: {
                    'public/lib/moment': 'bower_components/moment'
                }
            }
        }
    });

    grunt.loadNpmTasks('grunt-bowercopy');

    grunt.registerTask('default', ['bowercopy']);



};