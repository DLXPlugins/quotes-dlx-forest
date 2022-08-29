module.exports = function (grunt) {
	grunt.initConfig({
		compress: {
			main: {
			  options: {
				archive: 'quotes-dlx-forest-theme.zip'
			  },
			  files: [
				{src: ['quotes-dlx-forest-theme.php'], dest: '/', filter: 'isFile'}, // includes files in path
				{src: ['dist/**'], dest: '/'}, // includes files in path and its subdirs
				{src: ['ForestTheme/**'], dest: '/'},
				{src: ['images/**'], dest: '/'}, // includes files in path and its subdirs
				{src: ['lib/**'], dest: '/'}, // includes files in path and its subdirs
			  ]
			}
		  }
	  });
	  grunt.registerTask('default', ["compress"]);

 
 
	grunt.loadNpmTasks( 'grunt-contrib-compress' );
   
 };
