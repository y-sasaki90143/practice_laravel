# practice_laravel

■git cloneした後にやること

・compose.lockがある場合  
$ composer install  
・ない場合  
$ composer update

・.envファイルの設定  
.env.exampleをリネームして上書き

・keyの作成  
$ php artisan key:generate

・マイグレーションファイルの実行  
$ php artisan migrate

■設定編  
・/.vimrcの作成  
set hlsearch  
set cursorline  
とりあえずこれだけの記述をしておくと便利  
・/.bashrの設定

    function parse_git_branch {
        git branch --no-color 2> /dev/null | sed -e '/^[^*]/d' -e 's/* \(.*\)/ [\1]/'
    }
    function promps {
        local  BLUE="\[\e[1;34m\]"
        local  RED="\[\e[1;31m\]"
        local  GREEN="\[\e[1;32m\]"
        local  WHITE="\[\e[00m\]"
        local  GRAY="\[\e[1;37m\]"
    
        case $TERM in
            xterm*) TITLEBAR='\[\e]0;\W\007\]';;
            *)      TITLEBAR="";;
        esac
        local BASE="\u@\h"
        PS1="${TITLEBAR}${GREEN}${BASE}${WHITE}:${BLUE}\W${GREEN}\$(parse_git_branch)${BLUE}\$${WHITE} "
    }
    promps
  
一番下にこれ記述しておくとgitが捗る
