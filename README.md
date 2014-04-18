"Cutnado"
=======

This is where it all begins.

Stay tuned.

## Getting Started

Before you start, please fork both of our repos and use your personal repo URLs
to clone from. This guide will walk you through the process of installing the
site and [adding the original repos as upstream remotes][].

### Requirements

- Composer
- Ruby 2.1.1
- Bundler
- RVM

#### Ruby 2.1.1

If you're using RVM, setting up Ruby 2.1.1 should be easy, but time consuming.
Currently, there's a bug that requires that it be compiled from source. So do
this:

```sh
# A Ruby 2.1.1 bug requires that it be compiled from source
$ rvm install ruby-2.1.1 --disable-binary
# Make sure you have these important gems installed globally
# We'll be using bundler in a minute
$ rvm @global do gem install bundler rake
```

### Install

1. Go to the `ttn-cutnado` directory in your VVV environment.

    For example:

    ```sh
    $ cd /Users/montchr/dev/vvv/vvv-nginx/www/ttn-cutnado
    ```

2. Clone the [`cutnado-env` repo][] to a new `htdocs` directory.

    ```sh
    $ git clone https://github.com/[you]/cutnado-env.git htdocs
    ```

3. Go to the `htdocs` directory and run [Composer][] to set up WordPress and
   its dependencies.

    ```sh
    $ cd htdocs
    $ composer install
    ```

4. Copy `.env.example` to `.env` and update environment variables:

    - `DB_NAME` - Database name - `ttn_cutnado`
    - `DB_USER` - Database user - `root`
    - `DB_PASSWORD` - Database password - `root`
    - `DB_HOST` - Database host - `localhost`
    - `WP_ENV` - Set to environment - `development`
    - `WP_HOME` - Full URL to WordPress home - `http://ttn-cutnado.dev`
    - `WP_SITEURL` - Full URL to WordPress including subdirectory -
    `http://ttn-cutnado.dev/wp`

      Or just copy and paste this snippet into the `.env` file:

      ```
      DB_NAME=ttn_cutnado
      DB_USER=root
      DB_PASSWORD=root
      DB_HOST=localhost

      WP_ENV=development
      WP_HOME=http://ttn-cutnado.dev
      WP_SITEURL=http://ttn-cutnado.dev/wp
      ```

5. Now let's add the original repo as upstream and have it track the `develop`
   branch.

    First, make sure you're on the `develop` branch (you should be by default).
    In most cases, you should never be working off of the `master` branch. For
    this repo in particular, the `master` branch likely won't be created at
    all.

    ```sh
    $ git checkout develop
    $ git branch -u upstream/develop
    ```

6. Clone your fork of the [main theme repo][] into `web/app/themes/cutnado` and
   switch to that directory.

   N.B. We're using two separate Git repos (and not Git submodules) because
   deployment to the main application will be easier in the end. Remember,
   `cutnado-env`, the single WordPress site, is just a holdover until we get
   close to official release.

    ```sh
    $ git clone https://github.com/[you]/cutnado web/app/themes/cutnado
    $ cd web/app/themes/cutnado
    ```

7. Now we install our project dependencies.

    ```sh
    # Ruby gems (e.g. SASS, Compass, Susy)
    $ bundle install
    # Node packages (e.g. Grunt, Grunt plugins)
    $ npm install
    # Bower components (e.g. Normalize.scss, SCUT)
    $ bower install
    ```

8. Create the `master` branch, but don't tell it to track a remote branch.

    Make sure you're on the `develop` branch first.

    ```sh
    $ git branch master
    ```

    When you're working, try to stay off of `master`. Just focus on the
    `develop` branch and its tributaries.

8. Enable [Git Flow][] in this repo.

   You need to have [Git Flow installed][] first. Also, using something like
   [my dotfiles] or [oh-my-zsh] with the `git-flow` plugin enabled will make
   this experience absolutely awesome.

   When prompted, select all the default options (just keep hitting return).

   ```sh
   $ git flow init
   ```

    Most likely, the only two branches you'll have to worry about
    right now are `develop` and any `feature/` branch you may create.

    Read up about Git Flow (see above link) and you'll see why this simplifies
    things a lot.

9. Run `vagrant up`. Enter your password when prompted.

10. Go to `http://ttn-cutnado.dev` in your browser.

11. Profit!

### Sublime Text

#### Required

You need [Package Control][], first of all. ;)

- DocBlockr
- EditorConfig
- GitGutter
- Idiomatic-CSS-Comments-Snippets
- MarkdownEditing
- PlainTasks
- SASS Snippets
- SCSS
- SideBarEnhancements
- Susy Snippets
- Tag
- Trailing Spaces
- Wordpress

#### Recommended

- Alignment
- AutoWrap
- Better CoffeeScript
- BracketHighlighter
- DocBlockr
- Emmet
- HTML5
- SASS Snippets
- Solarized Color Scheme
- SublimeLinter (and its linters)
- Wrap Plus

## Database Syncing

I don't know of a really great way to keep our databases synced, but for now
the best option seems to be using VVV's built in capabilites for just that.

__N.B.__ Make sure you run `composer update` before loading a new database! If
the database references updated plugins but the files aren't there, there will
be errors.

[ @TODO more info on db syncing ]


## Components

Because the number of variations in type, location, and size, at the very
least, we'll need a grid system that can help manage this level of complexity.
That's what Susy is here for.

[ @TODO insert sup grid diagram image here ]

Aesop Story Engine requires that items in `.entry-content` are able to span
100% of the browser viewport. That means that there can't be any parent
container with a fixed width.

### Overview

- While sizes share names no matter where they're positioned, the actual sizes
  differ depending on their position.

### Usage

When ASE gives you the option, always set `width` to `100%` and `align` to
`center`. If you don't have those options available, don't worry – Cutnado will
compensate for that. And if it doesn't, file an issue on GitHub.

Make sure your shortcodes are always wrapped with `.cutnado-component` and the
appropriate classes for the layout you're looking for. Also make sure that
directly within `.cutnado-component` you use an `.inner` `<div>`. Like so:

```html
<div class="cutnado-component cutnado-component--[position] cutnado-component--[size]">
  <div class="inner">

    [shortcode]

  </div>
</div>
```

#### Positions

`.cutnado-component--[position]`

left
: `l`

right
: `r`

center
: `c`

#### Sizes

`.cutnado-component--[size]`

small
: `sm`

medium
: `md`

large
: `lg`

x-large
: `xl`


### Image

positions
: `l|r|c`

widths
: `sm|md|lg|xl`

layouts
: `2up`


### Character

positions
: `l|r`

widths
: `md`

layouts
: __`null`__


### Potential Bugs

- Small left or right aligned components may not line up correctly with large
  centered components.
- Currently, only 2up layouts are supported. Additional layouts will be built
  as needed.

[`cutnado-env` repo]: https://github.com/TheTempleNews/cutnado-env
[Composer]: https://getcomposer.org/doc/00-intro.md#globally
[adding the original repos as upstream remotes]: https://help.github.com/articles/syncing-a-fork
[Git Flow]: http://jeffkreeftmeijer.com/2010/why-arent-you-using-git-flow/
[Git Flow installed]: https://github.com/nvie/gitflow/wiki/Mac-OS-X
[my dotfiles]: https://github.com/montchr/dotfiles/
[oh-my-zsh]: https://github.com/robbyrussell/oh-my-zsh
[main theme repo]: https://github.com/TheTempleNews/cutnado
[Package Control]: https://sublime.wbond.net/
