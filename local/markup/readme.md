# TL;DR

Поскольку собирать самостоятельно всё это добро слишком долго, в репозиторий включен уже готовый билд верстки - каталог dist

Если же всё-таки есть желание побрать это самому, то для этого нужно следующее: 

- Установить NodeJS не ниже 10 версии. Если у вас Windows, то ставим сразу версию со всеми зависимости. Внимание: инсталлятор перезагрузит ваш комп без предупреждения!!
- Открыть консоль с NodeJS, перейти в корень проекта
- Запускаем "npm i" - и можно на пол часа идти пить чай
- Запускаем "npm -g i yarn" - и снова пьём чай
- Запускаем "yarn". Я понимаю, что чай уже из ушей льётся, но что делать...
- Наконец-то запускаем "npm start". На пару минут можно отойти, избавиться от излишков жидкости в орагнизме

Если всё прошло нормально, то в каталоге dist у вас будет свежая верстка, а в браузере откроется индексная страница со ссылками на все остальные. 

Если вылезла какая-то ошибка, то поздравляю: вы будете страдать. Неопределённый срок, возможно даже вечность. Точный рецепт "от всех болезней" вряд ли получится назвать, ибо неисповедимы пути ноды... 


# ZURB WebApp Template

[![devDependency Status](https://david-dm.org/zurb/foundation-zurb-template/dev-status.svg)](https://david-dm.org/zurb/foundation-zurb-template#info=devDependencies)

**Please open all issues with this template on the main [Foundation for Sites](https://github.com/zurb/foundation-sites/issues) repo.**

This is the official ZURB Template for use with [Foundation for Sites](http://foundation.zurb.com/sites). We use this template at ZURB to deliver static code to our clients. It has a Gulp-powered build system with these features:

- Handlebars HTML templates with Panini
- Sass compilation and prefixing
- JavaScript module bundling with webpack
- Built-in BrowserSync server
- For production builds:
  - CSS compression
  - JavaScript compression
  - Image compression

## Installation

To use this template, your computer needs:

- [NodeJS](https://nodejs.org/en/) (Version 6 only, Tested with 6.11.4)
- [Git](https://git-scm.com/)

### Setup

To set up the template, first download it.

Then open the folder in your command line, and install the needed dependencies:

```bash
cd projectName
yarn
```

Now `cd` to your project name and run `npm start` or `foundation watch` to run Gulp. Your finished site will be created in a folder called `dist`, viewable at this URL:

```
http://localhost:8000
```

To create compressed, production-ready assets, run `npm run build` or `foundation build`.

---

# Panini Helpers

We've added a Panini helpers for per-page or per-layout styles.

[SEE EXAMPLE](http://notebooks.zurb.com/posts/10139362?t=f9b74287fe3ac074)

---

# Mixins

We've added a few handy mixins for maintainable repeated code and faster development:

### Avatar

### Container Border

### Flex Mixins

---

# Additional Project Dependencies

The following dependencies are at your disposal:

### SVG Injector

Inject an SVG by using an `img` tag with the `.inject-me` class like so:

`<img src="{{root}}assets/img/think.svg" class="inject-me" alt="think icon">`

### Slick Carousel

### AOS (Animate on Scroll)

### Tablesaw
