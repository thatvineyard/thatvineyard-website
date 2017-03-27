# thatvineyard-website

## Compiling website

### Requirements

-sassc
-Other sass-compiler

### Quick guide

`make css`

Make sure to look through the top section of the Makefile that all variables are in agreement with your current system setup. 

### Sass

The CSS for this website is written in [Sass](http://www.sass-lang.com) and compiled using [sassc](https://github.com/sass/sassc). The source files all reside in `src/sass` and are all compiled into one output file names `style.css`.

When compiling the Makefile saves a copy of the current `style.css` which is uses to recover in case the compilation failed.

