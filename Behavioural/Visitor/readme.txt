Посетитель
Visitor

Посетитель - поведенческий шаблон проектирования, который позволяет добавить новое поведение объектам, не внося серьезных изменений в классы этих объектов.

Давайте погрузимся во вселенную Doom 2016! Мы путешествуем по Марсу и пока что нам встретились только 2 типа демонов - Какодемон и Имп. Каждый из них умеет эпично сдыхать, все по-разному (если играли - видели). И вот на горизонте появился Палач Рока, который этих демонов и будет эпично убивать! И вот перед нами, как перед программистами, встала задача - как сделать так, чтобы демонов убивал именно Палач Рока? Демоны старые, меняться не хотят... Можно унаследовать от каждого из демонов по потомку, в которых появится возможность быть убитыми Палачом Рока! Вроде решение ничего себе... Но если вдруг демоны начнут убивать друг друга? Что тогда? Это же сколько нам потребуется потомков и потомков каждого демона... Но есть способ решить вопрос! Правда для этого, все-таки, придется попросить демонов немного подвинуться и немножко поменяться.

1. Вернее даже так: возьмем главного потомка всех демонов Демона AbstractDemon.

2. Мы заставим его принимать "посетителя" в виде "Эпичного Убийца", которому известно каким именно образом (методом) эпично умирает каждый демон IGloryKiller.


-----------------------
Главный Демон позаботится о том, чтобы каждый из демонов осознал что рано или поздно к ним наведается посетитель - "Эпичный Убийца", который знает как их эпично убить! :)
-----------------------


3. Посмотрим на наших двоих: Имп - класс Imp и Какодемон - класс Cacodemon.

4. Теперь они все так же могут жить спокойно и ни кем не тронутые, до тех пор, пока к ним не наведается Палач Рока DoomSlayer.

5. Посмотрим как это работает! Напишем функцию killEmAll(), принимающую любого "Эпичного Убийцу" и любого Демона.