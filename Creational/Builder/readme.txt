Строитель
Builder

Строитель - порождающий шаблон проектирования, позволяющий создавать один и тот же объект с разным состоянием, в зависимости от необходимости, не усложняя при этом код самого объекта способами "сборки" различных вариаций.

Реализацию "Строителя" рассмотрим на примере сборки персонального компьютера.

1. Создадим класс DesktopComputer сам компьютер, который может иметь разные конфигурации.

2. Создадим интерфейс для "Строителей" IDesktopBuilder сборщика компьютера.

3. И реализуем этот интерфейс в двух классах "Строителей". Для простого компьютера SimpleDesktopBuilder.

4. И для мощного ПК PowerfulDesktopBuilder.

5. И последнее, что нам понадобится - так называемый "Директор", в нашем примере это будет DesktopAssembler с двумя статическими методами: для сборки мощного и простого ПК. Обратите внимание, что методов по сборке может быть сколько угодно, а созданная структура уже подразумевает то, что можно, допустим, упустить добавление большого SSD в мощный компьютер, или аргументом метода задать необходимую для него память.

6. Теперь проверим как это будет работать в файле clientCode.php.
