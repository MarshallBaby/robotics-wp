# robotics-wp
WP Rework Of robotics.bstu.by

## Движок
Wordpress 5.6.2+
.sql файл БД в комплекте
Для переноса на хостинг достаточно вытянуть папку wp-content

#### Осталось доделать:
* ~~Кнопки титульной карточки(+)~~
* ~~Ссылки соц-сетей(+)~~
* ~~Белый фон лого при наведении карточки партнера(+)~~
* Отдельные страницы под экскурсии
* ~~Как стать партнером(+)~~
* ~~Страница со списком разраб.(+)~~
* ~~Экран загрузки(+)~~
* ~~Отображение лого во вкладке(+)~~

#### При заливе на хостинг менять URL
* Кастомайзер -> Футер -> URL
* Кастомайзер -> Титульная карточка -> История URL
* Кастомайзер -> Титульная карточка -> Кнопка URL
* Кастомайзер -> Партнеры -> URL
* Хедер меню -> Экскурсии
* Хедер меню -> WiKi

# Управление контентом
## Хедер
#### Логотип
Меняется через кастомайзер -> логотип

#### Список ссылок
Админ.панель -> Appearence -> Menus -> Header.
Через css реализовано так, что последний элемент в ПК версии отступает вправо(для ссылки Wiki)

## Титульная карточка
#### Заголовок и подзаголовок
Изменяются в админ-панели -> Settings -> General
Поздаголовок желательно делать как можно меньше, так как он влияет на размер карточки

#### Фоновое изображение
Изменяется в Customize -> Титульная карточка -> Фоновое изображение

#### Адресс ссылок
Изменяется в Customize -> Титульная карточка -> URL
(!)Отображаются только иконки со значением URL, отличным от пустого

## Новости

* Сортируются по дате
* На титульнике выводятся 3 последних поста(4 в планшетной версии)
* Посты создаются в Posts -> Add new. Обязательно(!) отметить категорию "Новости".
* Для отображения всех новостей в админке выставить фильтр по категории "Новости".

## Проекты

* Подзаголовок изм. в кастомайзере.
* Фон "Все проекты" в кастомайзере.
* Проекты создаются в Posts -> Add new. Обязательно(!) отметить категорию "Проекты".
* В титульник выводятся посты с категорией "Проекты (титульник)". 3 последних поста(4 в планшетной версии)
* Фоновое изображение устанавливается в редакторе поста -> Featured Image

## Партнеры

* Принцип отображение см. в Проекты
* Лого устанавливается в редакторе поста -> Featured Image
* Название партнера в заголовке поста
* Ссылка на сайт партнера устанавливается в редакторе поста -> Excerpt

## Экскурсии

Сделаем)

## Полезные ссылки

* Админ.панель -> Appearence -> Menus -> Ссылки.

## О нас

* Редакция фоновых изображений через Posts -> кат. "О нас" -> Нужный пост -> Featured Image

### О нас -> Сотрудники

* Управление списком сотрудников Posts -> категория "Сотрудники"
* ФИО = Заголовок
* Подзаголовок = Excerpt
* Текст = Текст
* Список студентов: Posts -> кат. "О нас" -> Сотрудники -> Текст -> Список

### О нас -> История

Обычный пост

### О нас -> Лаборатория работотехники

Обычный пост




 








