var gulp = require('gulp');
var sass = require('gulp-sass');
var autoprefixer = require('gulp-autoprefixer');


gulp.task('sass', function(){
  return gulp.src('src/scss/**/*.scss')
    .pipe(sass()) // Converts Sass to CSS with gulp-sass
    .pipe(gulp.dest('css'))
});

gulp.task('watch', function(){
  gulp.watch('scss/**/*.scss', ['sass']); 
  
});

gulp.task('autoprefix', function(){
    gulp.src('css/main.css')
        .pipe(autoprefixer({
            browsers: ['last 2 versions'],
            cascade: false
        }))
        .pipe(gulp.dest('css'))
});


    

