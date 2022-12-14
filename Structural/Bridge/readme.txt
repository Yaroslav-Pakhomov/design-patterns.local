Мост
Bridge

Мост - структурный шаблон проектирования, позволяющий отделить абстракцию от реализации. Звучит слишком академично и в голове рисуется просто выделение абстрактного класса с абстрактными методами для потомков. Но в данном шаблоне подразумевается кое-что другое: идея его применения - разделить управляемый клиентом код от кода "под капотом", которым непосредственно клиент управлять не будет, с помощью разделения первого и второго на иерархии. Применение шаблона необходимо для того, чтобы избежать нагромождения однотипных классов (впрочем, как и многие другие шаблоны). Чаще всего, для демонстрации шаблона, ставят в пример иерархию страниц веб-сайта, с агрегацией в каждый из них цветовой схемы, которую можно выбрать на клиентской стороне. Мы же пойдем по своему пути...

Пример будет на машинах. Построим свою собственную иерархию классов.

1. Начнем с "абстракций" и абстрактного класса AbstractVehicle (Транспортное средство).
Конструктор и метод смены водителя реализуем сразу же в абстрактном классе, а метод drive() оставим для потомков, которые будут каждый реализовывать его по-своему.

2. Реализуем классы потомков: Мотоцикл, Автомобиль.
В методе drive(), с небольшими, но все-таки отличиями, мы будем обращаться к "водителю" и вызывать его методы.

3. Перейдем к реализациям, в нашем случае к интерфейсу и классам водителей. Некий абстрактный водитель интерфейс IDriver, класс Джон (John), класс Майк (Mike).
Теперь, в зависимости от того, какого из водителей мы посадим в автомобиль или на мотоцикл, поведение наших "абстракций" будет привязано к агрегированной в них "реализации".

4. Отработаем получившийся пример.
Инициализируем наших водителей, затем создадим мотоцикл с машиной, посадив в них Джона и Майка.



----------------------------


Ещё пример (папка "Appearance"):

Есть сайт с разными страницами, и пользователь должен иметь возможность изменять тему. Что делать? Можно создать копии страниц для каждой из тем или же просто загрузить темы отдельно. Структурный паттерн Bridge позволят реализовать второй вариант.

Шаблон отвечает за разделение одного или нескольких классов на 2 иерархии, которые включают в себя абстракцию и реализацию. Это позволяет работать с иерархиями независимо друг от друга.

1. Представим иерархию страниц сайта: интерфейс IWebPage, классы About и Careers.

2. Реализуем отдельную иерархию тем: интерфейс ITheme, классы DarkTheme, LightTheme и AquaTheme.

3. Реализуем их.
