З.ы. Если что-то упустил в инструкции, пишите в телеграм: @columb1anin11

# Установка
1. Через терминал войдите в любую папку на жестком диске, куда хотите клонировать репозиторий.
2. Клонируйте репозиторий. Команда в консоли: git clone https://github.com/andreyshirokoff/testYii2.git
3. Скачайте сборку Yii2, возьмите из архива папку Vendor и поместите ее в корень проекта. Ссылка: https://github.com/yiisoft/yii2/releases/download/2.0.47/yii-basic-app-2.0.47.tgz

# Подготовка
1. Есть несколько способов запуска: 
  - зайти в папку с проектом через консоль и ввести команду: php yii serve
  - открыть проект через OpenServer или другом локальном сервере.
Выбирайте удобный для Вас. Для первого способа у Вас должен быть MySQL на самой ОС или доп плагины. Поэтому рекомендую второй.
2. Создайте базу данных "yii2basic" или если нужно другое название, то поменять его можно в "config\db.php".
3. Там же можно указать данные входа в phpmyadmin.
4. Сделайте миграцию через консоль php yii migration
5. Создайте юзера в таблице user. Укажите пароль через шифрование md5.
6. Скачайте Postman для выполнения запросов. https://www.postman.com/downloads/

# Запросы
1. Через Postman в моем проекте можно проверить GET-запрос. Остальные запросы работать не будут, так как нет настроенного VUE.JS, где можно было пройти авторизацию.
2. Если попытаться сделать POST-запрос, то можно получить страницу авторизации.

# VUE.JS
1. Через консоль переходим в директорию vuejs
2. Вводим команду npm run serve
3. Можно увидеть результат попытки воссоздать фронтэнд для проекта, пропсы стоят в качестве временной заглушки.
4. К сожалению, мне не хватило времени разобраться с работой API во Vue.js. Большая часть времени ушла на изучение фреймворка в целом.
