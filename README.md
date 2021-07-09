# text-palindrom

Регистронезависмый поиск слов-палиндромов в тексте.

1) поднял свой фреймворк, написанный ранее для подобный заданий, немного усовершенствовал роутинг;
(ранее использовал его например здесь: https://github.com/gleb-sh/php-todo
Некоторые особенности:
* убрана работа БД (в рамках данного задания - не нужна);
* контроллеры используют трейты для нужного типа ответа (json либо html);  
* роутер принимает только один строковый параметр после слеша, остальные игнорируются;
* можно расширять и добавлять любой функционал;
2) эндпоинт принимает данные и отвечает в заданном  мной формате;
3)  js распаковывает их рендерит;
4) логика работы над строкой вынесена из контроллера в сервис.
Алгоритм следующий:
* разбиваем строки на слова (только слова: буквы, цифры и прочие знаки игнорируются, так не палиндром - это слово, а не набор символов);
* обрабатываем массив слов, проводя мультибайтовое и регистронезависимое сравнение;
* возвращаемый массив содержит коллекцию действительных слов-палиндромов в исходном их виде.
