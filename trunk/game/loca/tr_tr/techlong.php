<?php

// Расширенное описание объектов.

{

    if ( $lang === "de" ) {
    }

    else if ( $lang === "en" ) {
    }

    else if ( $lang === "ru" ) {
        $LOCA["ru"]["LONG_1"] = "Основной поставщик сырья для строительства несущих структур построек и кораблей. Металл - самое дешёвое сырьё,  но зато его требуется больше, чем всего остального. Для производства металла требуется меньше всего энергии. Чем рудники больше, тем они глубже. На большинстве планет металл находится на больших глубинах, в этих более глубоких рудниках можно добывать больше металлов, производство растёт. В то же время более крупные рудники требуют больше энергии.";
        $LOCA["ru"]["LONG_2"] = "Основной поставщик сырья для электронных строительных элементов и сплавов. Для добычи кристалла требуется примерно вдвое больше энергии, чем для добычи металла, поэтому он, соответственно, ценится больше. Кристалл требуется для всех кораблей и зданий. К сожалению, большинство необходимых для строительства кораблей кристаллов очень редки и, как и большинство металлов,  залегают на больших глубинах. Поэтому при усовершенствовании рудника также повышается производство, так как осваиваются более крупные и \"чистые\" залежи кристаллов.";
        $LOCA["ru"]["LONG_3"] = "Дейтерий - это тяжёлый водород. Из-за этого, как и на рудниках, более крупные запасы находятся на дне моря. Усовершенствование синтезатора также способствует освоению этих глубинных залежей дейтерия. Дейтерий необходим в качестве топлива для кораблей, почти для всех исследований, просмотра галактик, а также для использования сенсорной фаланги.";
        $LOCA["ru"]["LONG_4"] = "Для обеспечения энергией рудников и синтезаторов необходимы огромные солнечные электростанции. Чем больше построено станций, тем больше поверхности покрыто солнечными батареями, которые перерабатывают световую энергию в электричество. Солнечные электростанции представляют собой основу энергообеспечения планеты.";
        $LOCA["ru"]["LONG_12"] = "На термоядерных электростанциях при помощи термоядерного синтеза под огромным давлением и при высокой температуре 2 атома тяжёлого водорода объединяются в один атом гелия. При этом, при образовании ядра гелия, вырабатывается энергия в 41,32*10^-13 Дж в виде излучения (т.о. при сгорании 1 г водорода вырабатывается 172 МВт*ч энергии). Чем больше термоядерный реактор, тем сложнее процессы синтезирования, реактор производит больше энергии.<br/>Формула добычи:<br/>30 * [уровень ТЭ] * (1,05 + [уровень энергетической технологии] * 0,01) ^ [уровень ТЭ]<br/>Добыча энергии также может быть повышена за счёт развития энергетической технологии.";
        $LOCA["ru"]["LONG_14"] = "Предоставляет простую рабочую силу, которую можно применять при строительстве планетарной инфраструктуры. Каждый уровень развития фабрики повышает скорость строительства зданий.";
        $LOCA["ru"]["LONG_15"] = "Фабрика нанитов представляет собой венец робототехники. Наниты - это роботы размером в нанометр, которые путём объединения в сеть в состоянии выполнять экстраординарные задания. Сразу же после исследования они увеличивают производительность почти во всех областях. С каждым уровнем фабрика нанитов сокращает время строительства зданий, кораблей и оборонительных сооружений вдвое.";
        $LOCA["ru"]["LONG_21"] = "В строительной верфи производятся все виды кораблей и оборонительных сооружений. Чем она больше, тем быстрее можно строить более сложные и более крупные корабли и оборонительные сооружения. Посредством строительства фабрики нанитов производятся миниатюрные роботы, которые помогают работникам работать быстрее.";
        $LOCA["ru"]["LONG_22"] = "Огромное хранилище для добытых руд. Чем оно больше, тем больше металла можно в нём хранить. Если оно заполнено, то добыча металла прекращается.";
        $LOCA["ru"]["LONG_23"] = "В этом огромном хранилище складируется ещё не обработанный кристалл. Чем хранилище  больше, тем больше кристалла там можно хранить. Если оно заполнено, то добыча сего ресурса прекращается.";
        $LOCA["ru"]["LONG_24"] = "Огромные ёмкости для хранения добытого дейтерия. Они обычно находятся вблизи космических портов. Чем они больше, тем больше дейтерия в них может сберегаться. Если они заполнены, то добыча дейтерия прекращается.";
        $LOCA["ru"]["LONG_31"] = "Для исследования новых технологий необходима работа исследовательской станции. Уровень развития исследовательской станции является решающим фактором того, как быстро могут быть освоены новые технологии. Чем выше уровень развития исследовательской лаборатории, тем больше может быть исследовано новых технологий. Для того, чтобы как можно быстрее завершить исследовательские работы на одной планете, на неё посылаются все имеющиеся в наличии учёные и, таким образом, покидают свои планеты. Как только технология исследована, учёные возвращаются на свои родные планеты и переносят с собой знания о ней. Так новые технологии можно применять и на других планетах.";
        $LOCA["ru"]["LONG_33"] = "По мере застройки планет всё более важным становился вопрос об ограниченности пригодных для использования площадей. Такие традиционные методы, как строительство ввысь и вглубь, оказались недостаточными. Маленькая группа физиков и нанотехников нашла решение - терраформер.<br/>Затрачивая огромное количество энергии терраформер может преобразовывать огромные территории и даже целые континенты, делая их пригодными для застройки.<br/>В этом строении беспрерывно производятся специальные наниты, отвечающие за постоянное качество почвы.";
        $LOCA["ru"]["LONG_34"] = "Склад альянса предоставляет возможность обеспечения топливом дружественных флотов, которые помогают при обороне и находятся на орбите. Чем выше уровень развития, тем больше дейтерия можно отправлять флотам на орбиту.";
        $LOCA["ru"]["LONG_41"] = "Луна не располагает атмосферой, поэтому перед заселением требуется соорудить лунную базу. Она обеспечивает необходимые воздух, гравитацию и тепло. Чем выше уровень развития лунной базы, тем больше обеспеченная биосферой площадь. Каждый уровень лунной базы может застроить 3 поля, максимум до площади всей луны. Она составляет 2 (диаметр луны/1000)^2, причём каждый уровень лунной базы сам занимает одно поле.";
        $LOCA["ru"]["LONG_42"] = "Высокочастотные сенсоры полностью просматривают спектр частот всех попадающих на фалангу излучений. Мощные компьютеры комбинируют мельчайшие колебания энергии и таким образом получают информацию о передвижениях кораблей на отдалённых планетах. Для просмотра на луне должна быть предоставлена энергия в форме дейтерия (5 000 за просмотр). Просмотр осуществляется переходом с луны в меню \"Галактика\" и на название вражеской планеты, находящейся в радиусе действия сенсоров (формула: (уровень фаланги)^2-1 систем).";
        $LOCA["ru"]["LONG_43"] = "Ворота - это огромные телепортеры, которые могут пересылать между собой флоты любых размеров без временных затрат. Эти телепортеры не требуют дейтерия, однако между двумя прыжками должен пройти один час, иначе ворота перегреются. Невозможна также пересылка ресурсов. Весь процесс требует крайне высоко развитой технологии.";
        $LOCA["ru"]["LONG_44"] = "Ракетные шахты служат для хранения ракет. С каждым уровнем можно хранить на пять межпланетных или десять ракет-перехватчиков больше. Одна межпланетная ракета требует места в два раза больше, чем ракета-перехватчик. Возможно любое комбинирование различных типов ракет.";

        $LOCA["ru"]["LONG_106"] = "Шпионаж предназначен для исследования новых и более эффективных сенсоров. Чем выше развита эта технология, тем больше информации имеет игрок о событиях в своём окружении. Разница в уровнях шпионажа с противником играет решающую роль - чем больше исследована собственная шпионская технология, тем больше информации содержится в разведданных и тем меньше шанс быть обнаруженным. Чем больше послано зондов, тем больше собирается подробностей о противнике, но при этом растёт опасность быть обнаруженным. Также шпионаж совершенствует определение местонахождения чужих флотов. При этом также важен уровень развития собственного шпионажа. Начиная со второго уровня его развития при атаке на Вас кроме сообщения о нападении показывается также и общая численность нападающих кораблей. С четвёртого уровня распознаётся вид нападающих кораблей, равно как и их общая численность, а с восьмого - точная численность каждого типа кораблей. Для налётчиков эта технология очень важна, так как она предоставляет информацию о том, выставила ли жертва флот и/или защиту или нет, поэтому следует исследовать её как можно раньше. Лучше всего - сразу же после исследования малых транспортов.";
        $LOCA["ru"]["LONG_108"] = "Компьютерная технология предназначена для расширения имеющихся в наличии компьютерных мощностей. В результате на планете развиваются более продуктивные и эффективные  компьютерные системы, возрастает вычислительная мощность и скорость протекания вычислительных процессов. С повышением мощности компьютеров можно одновременно командовать всё бóльшим количеством флотов. Каждый уровень развития компьютерной технологии даёт возможность командовать +1 флотом. Чем больше рассылается флотов, тем больше можно совершать налётов и тем самым захватывать больше сырья. Естественно, что эта технология полезна и торговцам, так как она позволяет им одновременно рассылать больше торговых флотов. По этой причине следует постоянно развивать компьютерную технологию на протяжении всей игры.";
        $LOCA["ru"]["LONG_109"] = "Оружейная технология занимается прежде всего дальнейшим развитием имеющихся в наличии систем вооружения. При этом особое значение придаётся тому, чтобы снабжать имеющиеся в наличии системы большей энергией и более точно эту энергию направлять. Благодаря этому системы вооружения становятся эффективней, а оружие вызывает больше разрушений. Каждый уровень оружейной технологии увеличивает мощность вооружения войсковых частей на 10%. Оружейная технология важна для конкурентоспособного содержания частей. Поэтому следовало бы её постоянно развивать в течение всей игры.";
        $LOCA["ru"]["LONG_110"] = "Развитие этой технологии позволяет увеличивать снабжение энергией щитов и защитных экранов, что в свою очередь повышает их устойчивость и способность поглощать или отражать энергию атак противника. Благодаря этому с каждым изученным уровнем эффективность корабельных щитов и стационарных генераторов энергополей повышается на 10% от номинальной мощности.";
        $LOCA["ru"]["LONG_111"] = "Специальные сплавы улучшают броню космических кораблей. Как только найден очень стойкий сплав, специальные лучи изменяют молекулярную структуру космического корабля, и доводит её до состояния изученного сплава. Так, устойчивость брони может увеличиваться с каждым уровнем на 10%.";
        $LOCA["ru"]["LONG_113"] = "Энергетическая технология занимается дальнейшим развитием систем передачи и хранения энергии, которые необходимы для многих новых технологий.";
        $LOCA["ru"]["LONG_114"] = "Путём сплетения 4-го и 5-го измерения стало возможным исследовать новый более экономный и эффективный двигатель.";
        $LOCA["ru"]["LONG_115"] = "Реактивный двигатель основывается на принципе отдачи. Материя, разогретая до высоких температур, выбрасывается в направлении, противоположном движению и даёт ускорение кораблю. Эффективность этих двигателей достаточно мала, но они достаточно надёжны, дёшевы в производстве и обслуживании. Кроме того они занимают гораздо меньше места на корабле по сравнению с остальными двигателями, поэтому их всё ещё достаточно часто можно встретить на маленьких кораблях. Так как реактивные двигатели являются основой любого полёта в космос, следует исследовать их как можно раньше. Дальнейшее развитие этих двигателей делает следующие корабли с каждым уровнем на 10% быстрее: малые транспорты (до тех пор пока не будет исследован импульсный двигатель 5-го уровня) , большие транспорты, лёгкие истребители и шпионские зонды.";
        $LOCA["ru"]["LONG_117"] = "Импульсный двигатель основывается на принципе отдачи, причём разогрев материи осуществляется в ходе ядерной реакции. Также можно впрыснуть дополнительную массу. Дальнейшее развитие этих двигателей делает следующие корабли с каждым уровнем на 20% быстрее: бомбардировщики, крейсеры, тяжёлые истребители и колонизаторы. Каждый уровень развития увеличивает радиус действия межпланетных ракет.";
        $LOCA["ru"]["LONG_118"] = "Благодаря пространственно-временному изгибу в непосредственном окружении корабля пространство сжимается, чем быстрее преодолеваются далёкие расстояния. Чем выше развит гиперпространственный привод, тем выше сжатие пространства, благодаря чему с каждым уровнем скорость кораблей повышается на 30%.";
        $LOCA["ru"]["LONG_120"] = "Лазеры (усиление света при помощи индуцированного выброса излучения) производят насыщенный энергетический луч когерентного света. Эти приборы находят применение во всевозможных областях, от оптических компьютеров до тяжёлых лазеров, которые свободно режут броню космических кораблей. Лазерная технология является важным элементом для исследования дальнейших оружейных технологий.";
        $LOCA["ru"]["LONG_121"] = "Поистине смертоносный наводимый луч из ускоренных ионов. При попадании на какой-либо объект они наносят огромный ущерб.";
        $LOCA["ru"]["LONG_122"] = "Дальнейшее развитие ионной технологии, которая ускоряет не ионы, а высокоэнергетическую плазму. Она оказывает опустошительное действие при попадании на какой-либо объект.";
        $LOCA["ru"]["LONG_123"] = "Эта сеть делает возможным общение учёных, работающих в исследовательских лабораториях разных планет. Каждый новый уровень позволяет присоединить к сети дополнительную лабораторию (в первую очередь присоединяются лаборатории старших уровней). Из всех объединённых в сеть лабораторий, в каждом исследовании принимают участие только те, которые имеют достаточный для проведения данного исследования уровень. Скорость исследования соответствует сумме уровней участвующих в нём лабораторий.";
        $LOCA["ru"]["LONG_124"] = "Экспедиционная технология охватывает различные технологии сканирования и даёт возможность оснащать корабли различных классов исследовательским модулем. Он содержит базу данных, маленькую передвижную лабораторию, а также различные биоклетки и сосуды для проб.  Для  безопасности корабля при исследовании опасных объектов исследовательский модуль оснащён автономным энергообеспечением и генератором энергетического поля, который в экстремальных ситуациях может окружать исследовательский модуль мощным энергетическим полем.";
        $LOCA["ru"]["LONG_199"] = "Гравитон - это частица, которая не обладает ни массой ни зарядом и определяет силу притяжения. Путём запуска концентрированного заряда гравитонов можно создавать искусственное гравитационное поле, которое, подобно чёрной дыре, втягивает в себя массу, благодаря чему можно уничтожать корабли или даже луны. Чтобы произвести достаточное количество гравитонов, требуются огромные количества энергии.";

        $LOCA["ru"]["LONG_202"] = "Транспорты имеют примерно такой же размер, что и истребители, но они не обладают мощными двигателями и бортовым вооружением ради экономии места. Малый транспорт вмещает 5000 единиц сырья. По причине малой огневой мощи малые транспорты часто сопровождаются другими кораблями.<br/><br/>Когда импульсный двигатель исследован до 5-й ступени, у малого транспорта повышается базовая скорость и он оснащается этим типом двигателя.<br/>";
        $LOCA["ru"]["LONG_203"] = "На борту этого корабля есть лишь слабое вооружение и нет серьёзных технологий... По этой причине их никогда не следует запускать без сопровождения. Благодаря своему высокоразвитому реактивному двигателю большой транспорт служит в качестве быстрого межпланетного доставщика ресурсов, также он сопровождает флоты при нападениях на вражеские планеты, чтобы захватить как можно больше ресурсов.";
        $LOCA["ru"]["LONG_204"] = "Лёгкий истребитель - это манёвренный корабль, который можно найти почти на каждой планете. Затраты на него не особо велики, однако щитовая мощность и вместимость очень малы.";
        $LOCA["ru"]["LONG_205"] = "При дальнейшем развитии лёгкого истребителя учёные дошли до момента, когда стало ясно, что обыкновенный двигатель не обладает необходимой мощью. Для того, чтобы оптимально передвигать корабль, был впервые использован импульсный двигатель. Хоть он и повысил стоимость, однако он также открыл новые возможности. Благодаря применению этого двигателя осталось больше энергии для вооружения и щитов, кроме того, для этого вида истребителей также использовались ценные материалы. Это привело к улучшенной структурной целостности и более сильной огневой мощи, благодаря чему в бою он представляет бóльшую угрозу, чем его предшественник. После этих изменений тяжёлый истребитель представляет собой новую эру технологии кораблестроения, основу технологии крейсеростроения.";
        $LOCA["ru"]["LONG_206"] = "С развитием тяжёлых лазеров и ионных пушек тяжёлые истребители всё больше вытеснялись. Несмотря на многочисленные усовершенствования огневая мощь и бронирование не могли быть настолько изменены, чтобы действенно противостоять этим оборонительным орудиям. Поэтому было решено построить новый класс кораблей, который объединял бы в себе больше бронирования и огневой мощи. Так появился крейсер. Крейсеры почти втрое сильней защищены, чем тяжёлые истребители и обладают более чем удвоенной огневой мощью. К тому же они очень быстры. Нет лучшего оружия против средней защиты. Почти столетие крейсеры неограниченно господствовали во вселенной. С появлением орудий Гаусса и плазменных орудий их господство закончилось. Однако и сегодня их охотно применяют против групп истребителей.";
        $LOCA["ru"]["LONG_207"] = "Линкоры как правило составляют основу флота. Их тяжёлые орудия, высокая скорость и большой грузовой тоннаж делают их серьёзными противниками.";
        $LOCA["ru"]["LONG_208"] = "Этот хорошо защищённый корабль служит покорению новых планет, что необходимо развивающейся империи. Он используется в новой колонии в качестве поставщика сырья - его разбирают и используют весь полезный материал для освоения нового света. Каждая империя, включая главную планету, может колонизировать максимум 9 планет.";
        $LOCA["ru"]["LONG_209"] = "Космические бои принимали всё бóльшие масштабы. Уничтожались тысячи кораблей и возникавшие при этом обломки казались навсегда потерянными. Нормальные транспорты не могли близко к ним приблизиться, не будучи сильно повреждёнными маленькими обломками. С новым открытием в области щитовой технологии стало возможно эффективно устранять эту проблему, возник новый класс корабля, подобный большому транспорту - переработчик. С его помощью можно было заново использовать казавшиеся потерянными ресурсы. Из-за новых щитов маленькие обломки больше не представляли собой опасности. К сожалению, эти устройства требуют пространства, поэтому его грузовой тоннаж ограничен до 20 000.";
        $LOCA["ru"]["LONG_210"] = "Шпионские зонды - это маленькие манёвренные корабли, которые доставляют с больших расстояний данные о флотах и планетах. Их высокомощный двигатель позволяет им преодолевать большие расстояния за несколько секунд. Однажды попав на орбиту какой-нибудь планеты, они пребывают там некоторое время для сборки данных. В это время враг может их относительно легко обнаружить и атаковать. Для экономии места не было установлено ни брони, ни щитов, ни орудий, что делает зонды в случае обнаружения лёгкими целями.";
        $LOCA["ru"]["LONG_211"] = "Бомбардировщик был разработан специально для того, чтобы уничтожать планетарную защиту. С помощью лазерного прицела он точно сбрасывает плазменные бомбы на поверхность планеты и таким образом наносит огромные повреждения оборонительным сооружениям.<br/><br/>Когда гиперпространственный двигатель исследован до 8-й ступени, у бомбардировщика повышается базовая скорость и он оснащается этим типом двигателя.<br/>";
        $LOCA["ru"]["LONG_212"] = "Солнечные спутники запускаются на орбиту планеты. Они собирают солнечную энергию и передают её на наземную станцию. Эффективность солнечных спутников зависит от мощи солнечного излучения. В принципе, добыча энергии на орбитах, более приближённых к солнцу, выше, чем на планетах, удалённых от солнца. Из-за своего соотношения цены и качества солнечные спутники решают энергетические проблемы многих миров. Но внимание: солнечные спутники могут быть уничтожены в бою.";
        $LOCA["ru"]["LONG_213"] = "Уничтожитель - король среди военных кораблей. Его мультифланговые ионные, плазменные и гауссовые орудийные башни могут благодаря своим усовершенствованным пеленгационным сенсорам поражать с точностью до 99% даже скоростные манёвренные истребители. Так как уничтожители очень велики, их манёвренность очень ограничена, и в бою они подобны скорее боевой станции, чем боевому кораблю. Потребление дейтерия у них так же высоко, как и их боевая мощь.";
        $LOCA["ru"]["LONG_214"] = "Звезда смерти оснащена гравитонной пушкой, которая может уничтожать все типы кораблей и даже луны. Для производства достаточного количества энергии, звезда смерти практически полностью состоит из генераторов. Только огромные звёздные империи имеют достаточно ресурсов и работников для строительства этого огромного корабля.";
        $LOCA["ru"]["LONG_215"] = "Этот высокотехнологичный корабль несёт смерть атакующим флотам. Его усовершенствованные лазерные орудия удерживают тяжёлые корабли противника на расстоянии и могут уничтожать несколько единиц одним залпом. За счёт его малых размеров и невероятно мощного вооружения, грузоподъёмность линейного крейсера очень мала, но за счёт гиперпространственного двигателя также мало потребление топлива.";

        $LOCA["ru"]["LONG_401"] = "Ракетная установка - простое и дешёвое средство обороны. Так как это развитие обычных баллистических орудий, то ему не требуется дальнейшей модернизации. Малые затраты на его производство оправдывают его применение против более маленьких флотов, но со временем он теряет значение. Позднее его используют лишь для отвода вражеских выстрелов. Оборонительные сооружения деактивируются сами по себе, как только они сильно повреждаются. Возможность восстановления оборонительных сооружений после боя составляет до $drepair%.";
        $LOCA["ru"]["LONG_402"] = "Для компенсации чрезмерных успехов в области технологии космических кораблей, учёные должны были создать оборонительное сооружение, справляющееся с более крупными и лучше вооружёнными флотами. Это привело к появлению лёгкого лазера. При помощи концентрированного обстрела цели фотонами можно достичь значительно больших разрушений, чем при применении обычного баллистического вооружения. Для противостояния более сильной огневой мощи новых типов кораблей он также оснащён усовершенствованными щитами. Однако, чтобы стоимость производства оставалась низкой, структура дальше не усиливалась. Лёгкий лазер обладает наилучшим соотношением цены и качества, поэтому он также интересен и для более развитых цивилизаций. Оборонительные сооружения деактивируются сами по себе, как только они сильно повреждаются. Возможность восстановления оборонительных сооружений после боя составляет до $drepair%.";
        $LOCA["ru"]["LONG_403"] = "Тяжёлый лазер представляет собой дальнейшее развитие лёгкого лазера. Структура была усилена и усовершенствована новыми материалами. Оболочку смогли сделать значительно более стойкой. Одновременно была улучшена и энергетическая система и целевой компьютер, так что тяжёлый лазер может концентрировать значительно больше энергии на цели. Оборонительные сооружения деактивируются сами по себе, как только они сильно повреждаются. Возможность восстановления оборонительных сооружений после боя составляет до $drepair%.";
        $LOCA["ru"]["LONG_404"] = "Долгое время артиллерийские орудия считались устаревшими на фоне развития современной лазерной и ионной техники и постоянно улучшающейся защиты, пока новые исследования в области энергетической технологии не позволили поднять артиллерию на качественно новый уровень. Вообще-то принципы электромагнитных ускорителей масс были известны на Земле уже с 20-го столетия. Один из них - пушка Гаусса. С решением технических трудностей использование ее в качестве оружия стало реальностью. Многотонные снаряды ускоряются магнитным полем при огромных затратах энергии и имеют такую выходную скорость, что частички пыли в воздухе вокруг снаряда сгорают, а звуковая волна сотрясает землю. Даже современная броня и щиты с трудом могут противостоять пробивной силе пушки Гаусса, и нередко случается так, что цель просто простреливается насквозь. Оборонительные сооружения деактивируются сами по себе, как только они сильно повреждаются. Возможность восстановления оборонительных сооружений после боя составляет до $drepair%.";
        $LOCA["ru"]["LONG_405"] = "В 21-м столетии на Земле уже существовало то, что общеизвестно как ЭМИ. ЭМИ означает электромагнитный импульс, который обладает способностью индуцировать дополнительные напряжения в схемы и тем самым причинять массовые помехи, которые могут уничтожить все чувствительные приборы. Тогда ЭМИ-орудия были в основном на базе ракет и бомб, также в комбинации с ядерными орудиями. Между тем ЭМИ-орудия постоянно развивались, так как в них видели большой потенциал не уничтожать цели, а делать их неспособными к бою и манёвренности и, тем самым, упрощать их захват. Пока что наивысшая форма ЭМИ-орудий представлена ионным орудием. Оно направляет на цель волну ионов (электрически заряженных частиц), которая дестабилизирует щиты и повреждает электронику, только если она не очень хорошо защищена, что иногда подобно полному уничтожению. Кинетической пробивной силой можно пренебречь. Ионная техника используется только на крейсерах, так как потребление энергии ионными орудиями огромно, и в бою часто приходится уничтожать, а не парализовать цель. Оборонительные сооружения деактивируются сами по себе, как только они сильно повреждаются. Возможность восстановления оборонительных сооружений после боя составляет до $drepair%.";
        $LOCA["ru"]["LONG_406"] = "Лазерная технология была доведена до совершенства, ионная техника достигла конечной стадии и считалось, что практически невозможно, даже с качественной точки зрения орудийной системы, достичь ещё большей эффективности. Но всё должно было измениться, когда появилась идея объединить обе системы. Используя технологии термоядерного синтеза, лазерами нагревают вещество (обычно дейтерий) до сверхвысоких температур, достигающих миллионов градусов. Ионная техника обеспечивает обогащение плазмы электрическим зарядом, её стабилизацию и ускорение. Как только заряд достаточно нагрет, ионизирован и находится под давлением, то его выпускают при помощи ускорителей в направлении цели. Светящийся голубоватым цветом плазменный шар выглядит внушительно, только спрашивается, долго ли им будет наслаждаться команда корабля-цели, если через несколько секунд броня разорвётся на куски, а электроника сгорит... Плазменное орудие считается вообще самым страшным оружием, и у этой техники есть своя цена. Оборонительные сооружения деактивируются сами по себе, как только они сильно повреждаются. Возможность восстановления оборонительных сооружений после боя составляет до $drepair%.";
        $LOCA["ru"]["LONG_407"] = "Задолго до того, как щитовые генераторы стали достаточно малы для того, чтобы найти применение на кораблях, уже существовали огромные генераторы на поверхности планет. Они обволакивали целую планету силовым полем, которое могло поглощать удары атаки. Малые атакующие флоты постоянно разбиваются об эти щитовые купола. Благодаря растущему технологическому развитию эти щиты можно ещё усилить. Позже можно строить более сильный большой щитовой купол. На каждой планете можно построить только один малый щитовой купол.";
        $LOCA["ru"]["LONG_408"] = "Дальнейшее развитие малого щитового купола. Он может сдерживать ещё более сильные атаки на планету, поглощая значительно большее количество энергии.";
        $LOCA["ru"]["LONG_502"] = "Ракеты-перехватчики уничтожают атакующие межпланетные ракеты. Одна ракета-перехватчик уничтожает одну межпланетную ракету.";
        $LOCA["ru"]["LONG_503"] = "Межпланетные ракеты уничтожают защиту противника. Уничтоженные межпланетными ракетами оборонительные сооружения больше не восстанавливаются.";
    }

}

?>