#!/usr/bin/zsh

source ~/.zshrc
PATH="/home/montchr/.rvm/gems/ruby-2.1.1@ttncutnado/bin/:$PATH"
bundle install
npm install
bower install
grunt
