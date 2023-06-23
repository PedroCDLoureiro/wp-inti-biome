// Gravamos as dependencias do gulp em variaveis
const gulp      = require('gulp');             // Pacote do gulp
var sass = require('gulp-sass')(require('sass'));       // Pacote do compilador do sass para o Gulp
const minifyCSS = require('gulp-csso');        // Pacote do minificador de css para o Gulp
const concat    = require('gulp-concat');      // Pacote para concatenar arquivos com o Gulp
const uglify    = require('gulp-uglify');      // Pacote para "enfeiar" o código e deixar ilegivel
const babel     = require('gulp-babel');       // Pacote para utilizar ES6 sem problema de compatibilidade

// Criamos um objeto com os caminhos dos arquivos que o gulp irá procurar
// Tendo o caminho dos arquivos scss na propriedade style e os arquivos js na
// propriedade scripts, desde o nosso scrip até outras bibliotecas
const paths = {
    styles: [
        'scss/*.scss'
    ],
    scripts: [
        'scripts/*.js'
    ]
};

// Criamos uma task que será a tarefa que o gulp irá realizar
// Nomeamos ela de 'scss'
gulp.task('scss', () => {
    return gulp.src('scss/style.scss')   // Arquivo(s) que o gulp irá procurar na tarefa
        .pipe(sass()) // Gulp irá rodar o sass incluindo os caminhos da pasta /scss como import
        .pipe(concat('style.css'))  // Irá concatenar os arquivos e gerar um arquivo style.css
        .pipe(minifyCSS())          // Irá minificar o css assim que compilado
        .pipe(gulp.dest('./'))        // Irá salvar na raiz do tema
});

// Criamos uma task que será a tarefa que o gulp irá realizar
// Nomeamos ela de 'script'
gulp.task('script', () => {
    return gulp.src(paths.scripts) // Arquivo(s) que o gulp irá procurar na tarefa
        .pipe(babel({
            presets: ['env']
        }))
        .pipe(concat('script.min.js'))// Irá concatenar os arquivos e gerar um arquivo script.min.js
        .pipe(uglify())               // Gulp irá deixar o código ilegivel dificultando cópias
        .pipe(gulp.dest('./'));         // Irá salvar na raiz do tema
});

// Define as tasks padrões quando executado o comando "gulp"
gulp.task('default', gulp.series('scss', 'script'));

// Define uma tarefa para assistir, para assitir as outras tarefas
// Caso haja mudança ele atualizar o arquivo
gulp.task('watch', () => {
    gulp.watch(paths.styles, gulp.series('scss'));
    gulp.watch(paths.scripts, gulp.series('script'));
});