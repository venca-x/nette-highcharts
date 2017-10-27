module.exports = function (grunt) {

    require('load-grunt-tasks')(grunt, {scope: 'devDependencies'});
    grunt.loadNpmTasks('grunt-shell');

    grunt.initConfig({
        shell: {
            test: {
                command: 'vendor\\bin\\tester tests -s -p php'
            },
            installCodeSoft: {
                command: 'composer create-project nette/coding-standard nette-coding-standard',
                command: 'composer create-project nette/code-checker nette-code-checker'
            },
            netteCodeChecker: {
                command: 'php nette-code-checker\\src\\code-checker.php -d src -d tests --short-arrays --strict-types'
            },
            netteCodeCheckerFIX: {
                command: 'php nette-code-checker\\src\\code-checker.php -d src -d tests --short-arrays --strict-types --fix'
            },
            netteCodingStandard: {
                command: 'php nette-coding-standard\\ecs check src tests --config nette-coding-standard\\coding-standard-php71.neon'
            },
            netteCodingStandardFIX: {
                command: 'php nette-coding-standard\\ecs check src tests --config nette-coding-standard\\coding-standard-php71.neon --fix'
            }
        }
    });

    grunt.registerTask('test', ['shell:test']);
    grunt.registerTask('netteCodeChecker', ['shell:netteCodeChecker']);
    grunt.registerTask('netteCodeCheckerFIX', ['shell:netteCodeCheckerFIX']);
    grunt.registerTask('netteCodingStandard', ['shell:netteCodingStandard']);
    grunt.registerTask('netteCodingStandardFIX', ['shell:netteCodingStandardFIX']);

};
