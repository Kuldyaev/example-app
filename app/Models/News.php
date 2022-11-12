<?php

namespace App\Models;

class News
{
    private array $news = [
        1 => [
            'id' => 1,
            'category_id' => 1,
            'title' => 'Что происходит с рынком недвижимости в России',
            'shortDescription' => 'В России выросла стоимость аренды жилья',
            'textInfo' => 'Наибольшее снижение стоимости «квадрата» с апреля по октябрь зафиксировано в Краснодарском крае (-16%), Севастополе (-8%), Крыму (-4%). В Курской области снижение на 4%, в Белгородской — на 2%. По словам Лапшиной, на этом сказалось и закрытие авиасообщения. Кроме того, сильнее всего падает цена на вторичное жилье премиального сегмента, расположенного в наиболее дорогих локациях.
            Ведущий аналитик агентства недвижимости «Этажи» Александр Иванов отметил еще одну тенденцию на вторичном рынке – за последние полгода в крупных городах, в том числе и в приграничных регионах, существенно увеличилось количество предложений по продажам квартир.
            «Начиная с апреля количество продаваемых квартир увеличилось почти на треть. По большей части это произошло из-за выхода на рынок объектов, которые последние два-три года приобретались в инвестиционных целях», — объяснил аналитик.'
        ],
        2 => [
            'id' => 2,
            'category_id' => 1,
            'title' => 'В Сбербанке не увидели причин для ограничения выплат дивидендов в 2023 году',
            'shortDescription' => 'Можно говорить о восстановлении прибыльности, причин для ограничений выплат дивидендов в ближайшие годы не предвидится, приводит слова главы Сбера Германа Грефа ТАСС.',
            'textInfo' => 'Чистая выручка Сбербанка по итогам десяти месяцев текущего года превысила 50 млрд рублей, а за октябрь кредитная организация заработала 122,8 млрд рублей. Следует говорить о восстановлении прибыльности, причин для ограничений выплат дивидендов в ближайшие годы не предвидится, приводит слова главы Сбера Германа Грефа ТАСС.
            «Мы в достаточно хорошей форме пережили все проблемы, накопленные за кризисный период. (Все трудности — «Газета.Ru») мы оставим в этом году. В следующий год мы войдем в нормализованном состоянии, это касается в том числе и дивидендов», — заявил Греф в кулуарах форума Finopolis.
            10 ноября глава Сбербанка Герман Греф заявил о выходе объемов выдач кредитов финансовой организацией на докризисный уровень второго полугодия 2021 года. При этом по итогам десяти месяцев 2022-го розничный портфель Сбербанка вырос на 9%, а корпоративный — на 11,9%.'
        ],
        3 => [
            'id' => 3,
            'category_id' => 1,
            'title' => 'МВФ улучшил прогноз по российской экономике. Ей помог крепкий рубль',
            'shortDescription' => 'МВФ: экономика РФ во втором квартале 2022 года стабилизировалась после санкций',
            'textInfo' => 'Российская экономика после удара санкций стабилизировалась во втором квартале 2022 года, говорится в региональном докладе Международного валютного фонда, посвященном экономической ситуации в Европе.
            «Это позволило центральному банку вернуть ключевую ставку к довоенным уровням», – отмечается в документе.
            Подчеркивается, что кратковременное действие экономических ограничений было «очень мощным», но «снижение активности будет не таким сильным, как изначально ожидалось».'
        ],
        4 =>[
            'id' => 4,
            'category_id' => 2,
            'title' => 'Российские туристы летели в Мадрид и попали в Мардин. ',
            'shortDescription' => 'В российской туротрасли назвали фейком публикации о Мардине, Мадриде и русских туристах',
            'textInfo' => 'В среду, 9 ноября, СМИ Турции сообщили, что нескольких российских туристов отправили вместо испанского Мадрида в турецкий Мардин. Якобы туроператор перепутал названия и взял по ошибке для россиян неправильные авиабилеты. Как утверждают турецкие телеканалы, туристам так понравился Мардин, что они даже не хотели лететь в испанскую столицу. Однако в российском альянсе туристических агентств эту историю опровергли и назвали фейком.
            Российские туристы вместо Испании попали в Турцию. И при этом остались очень довольны, заявив, что вернутся снова. Во всяком случае, именно об этом 9 ноября сообщили сразу несколько турецких СМИ.         '
        ],
        5 => [
            'id' => 5,
            'category_id' => 2,
            'title' => 'ФСБ назвала организатора взрыва на Крымском мосту.',
            'shortDescription' => 'ФСБ назвала главу военной разведки Украины Буданова организатором подрыва Крымского моста',
            'textInfo' => 'ФСБ назвала предполагаемого организатора взрыва на Крымском мосту. По версии спецслужбы, им является глава военной разведки Украины Кирилл Буданов. Теракт готовили 12 человек, восемь из них задержаны. Кроме того, ФСБ задержала в Подмосковье агента СБУ, который готовил теракты с применением ПЗРК «Игла». Летом Буданов говорил в интервью, что на территории России будут происходить теракты и диверсии'
        ],
        6 => [
            'id' => 6,
            'category_id' => 1,
            'title' => 'Крах банков усугубляет кризисы.',
            'shortDescription' => 'Лауреатами Нобелевской премии по экономике — 2022 стали ученые Бернанке, Даймонд и Дибвиг',
            'textInfo' => 'Российская экономика после удара санкций стабилизировалась во втором квартале 2022 года, говорится в региональном докладе Международного валютного фонда, посвященном экономической ситуации в Европе.
            «Это позволило центральному банку вернуть ключевую ставку к довоенным уровням», – отмечается в документе.
            Подчеркивается, что кратковременное действие экономических ограничений было «очень мощным», но «снижение активности будет не таким сильным, как изначально ожидалось».'
        ],
        7 => [
            'id' => 7,
            'category_id' => 2,
            'title' => 'Требует флаг России, $2 млн и вертолет. Что известно о захвате заложников в Кутаиси',
            'shortDescription' => 'По данным грузинских СМИ, у захватчика «Банка Грузии» крупные долги из-за проигрыша в казино',
            'textInfo' => 'Около полудня вооруженный мужчина ворвался в филиал Банка Грузии на проспекте Шота Руставели в Кутаиси. Как сообщила телекомпания «Мтавари архи» со ссылкой на очевидцев, злоумышленник захватил нескольких людей в заложники.
            Очевидцы описали нападавшего как мужчину в маске и униформе военного образца. Некоторые рассказали, что у входа в здание злоумышленник сделал предупредительный выстрел. На сайте МВД Грузии сообщили, что спецподразделения ведомства были отправлены к зданию банка.
            «По предварительной информации, в отделение «Банка Грузии» ворвался вооруженный человек. Получив сообщение о нападении, сотрудники полиции в режиме немедленного реагирования оцепили территорию вокруг места происшествия. В настоящее время мобилизованные на место сотрудники правоохранительных органов проводят все необходимые и неотложные процедуры, а также следственные и оперативные мероприятия», — говорилось в сообщении.'
        ],
        8 => [
            'id' => 8,
            'category_id' => 2,
            'title' => 'Эльман Пашаев лишился статуса адвоката спустя пять дней после его восстановления',
            'shortDescription' => 'ФПА России удалила публикацию об аннулировании статуса адвоката Эльмана Пашаева',
            'textInfo' => 'Эльман Пашаев узнал о том, что его снова лишили статуса адвоката, от журналистов. Юрист не поверил, что Федеральная палата адвокатов РФ аннулировала его адвокатский статус, возвращенный всего пять дней назад. При этом решено лишить статуса адвоката и главу квалификационной комиссии, принявшего Пашаева в палату адвокатов Северной Осетии. Пашаев терял адвокатский статус трижды до 2020 года, но тогда это были приостановки.
            Федеральная палата адвокатов (ФПА) России аннулировала статус «VIP-адвоката» Эльмана Пашаева. Об этом говорится в сообщении пресс-службы палаты.
            Прекращен также статус адвоката председателя квалификационной комиссии, принявшей Пашаева в адвокатскую палату Северной Осетии – Алании. По факту ситуации будет проведено расследование на предмет нарушения законодательства.
            Решение об отзыве у Пашаева адвокатского статуса приняли на заседании совета ФПА в Махачкале.
            Сам Эльман Пашаев заявил «Газете.Ru», что ничего не знает о лишении его статуса адвоката.'
        ],
        9 => [
            'id' => 9,
            'category_id' => 3,
            'title' => 'Овечкин рассвирепел и впечатал в борт двух соперников, Капризов стал причиной массовой драки',
            'shortDescription' => 'Капризов стал лучшим российским снайпером НХЛ',
            'textInfo' => 'Александр Овечкин не помог «Вашингтону» победить «Питтсбург» и уступил Сидни Кросби в гонке лучших бомбардиров в истории НХЛ, но зато отличился мощными силовыми приемами, размазав двоих соперников по борту. В этот же день Кирилл Капризов стал главным героем матча «Миннесоты» против «Анахайма»: забросил издевательскую шайбу, невольно стал причиной массовой потасовки и принес своей команде важную победу.'
        ],
        10 => [
            'id' => 10,
            'category_id' => 3,
            'title' => '«Никакого прогресса». WADA обратилось в CAS по делу Валиевой',
            'shortDescription' => 'Юрист считает, что обращение WADA в CAS ускорит рассмотрение дела Валиевой',
            'textInfo' => 'Всемирное антидопиговое агентство (WADA) обратилось в Спортивный арбитражный суд в Лозанне (CAS), чтобы тот вынес вердикт по допинговому делу российской фигуристки Камилы Валиевой. В WADA считают, что Российское антидопинговое агентство неоправданно долго ведет дело.'
        ],
        11 => [
            'id' => 11,
            'category_id' => 3,
            'title' => 'Возвращение сборной России: разгромили Таджикистан в Душанбе',
            'shortDescription' => 'Россия со счетом 6:2 обыграла Таджикистан в товарищеском матче',
            'textInfo' => 'Мини-футбольная сборной России в Душанбе провела контрольный спарринг против национальной команды Таджикистана и добыла победу с крупным счетом — 6:2.'
        ],
        12 => [
            'id' => 12,
            'category_id' => 3,
            'title' => 'Капитан Роналду не спас: «Манчестер Юнайтед» без шансов уступил «Астон Вилле»',
            'shortDescription' => '«Астон Вилла» со счетом 3:1 обыграла «Манчестер Юнайтед» в 15-м туре чемпионата Англии',
            'textInfo' => '«Манчестер Юнайтед» на выезде сразился с «Астон Виллой» в матче 15-го тура Английской премьер-лиги (АПЛ). На поле с капитанской повязкой сыграл португальский нападающий гостей Криштиану Роналду, однако это не помогло «Красным дьяволам» избежать поражения со счетом 1:3.'
        ],
        13 => [
            'id' => 13,
            'category_id' => 4,
            'title' => '«Шутку нельзя путать с хамством»: интервью с Михаилом Галустяном',
            'shortDescription' => 'Михаил Галустян рассказал о своей роли в сериале «Отпуск»',
            'textInfo' => 'На ТНТ стартовал второй сезон комедийного сериала «Отпуск», к которому присоединился Михаил Галустян. В интервью «Газете.Ru» актер рассказал о своей роли в проекте, изменениях в российском юморе, а также феномене скетч-шоу «Наша Russia».'
        ],
        14 => [
            'id' => 14,
            'category_id' => 4,
            'title' => 'Сериал «Конец света»: дьявол-Колокольников подбивает сына-антихриста на апокалипсис',
            'shortDescription' => 'Рецензия на сериал Александра Незлобина «Конец света» с Юрием Колокольниковым',
            'textInfo' => 'На Кинопоиске начался «Конец света» — черно-комедийный сериал о Сатане, который появляется в Москве, чтобы уговорить своего сына-антихриста — простого кассира из Чертанова — начать апокалипсис. Главные роли в шоу исполнили Юрий Колокольников и Семен Трескунов, а одним из его авторов выступил комик Александр Незлобин. Кинокритик «Газеты.Ru» Павел Воронков посмотрел первые два эпизода «Конца света» — и рассказывает, как в декорациях современной столицы уживаются наследие Булгакова и заимствования из Нила Геймана.'
        ],
        15 => [
            'id' => 15,
            'category_id' => 4,
            'title' => 'На вестеросском фронте без перемен: каким получился первый сезон «Дома дракона»',
            'shortDescription' => 'Завершился первый сезон сериала «Дом дракона»',
            'textInfo' => 'На HBO и в «Амедиатеке» завершился первый сезон «Дома дракона» — спин-оффа фэнтезийного сериала «Игра престолов» по книгам Джорджа Р. Р. Мартина. Кинокритик «Газеты.Ru» Павел Воронков посмотрел все десять эпизодов и (без спойлеров!) подводит итоги «Битвы приквелов»: кто победил — HBO или Amazon со своим «Властелином колец»?'
        ],
        16 => [
            'id' => 16,
            'category_id' => 4,
            'title' => '«Впусти меня»: неудачная экранизация вампирского романа Юна Линдквиста',
            'shortDescription' => 'Рецензия на сериал «Впусти меня», основанного на одноименном романе Юна Линдквиста',
            'textInfo' => '7 октября на Showtime стартовал сериал «Впусти меня» — очередная попытка Голливуда насытиться кровожадным и блистательным одноименным романом шведского писателя Юна Линдквиста. Самой книге скоро исполнится 20 лет, но кажется, что за это время она не просто не утратила своей актуальности, но и обрела новое звучание. Кинокритик «Газеты.Ru» Елена Зархина рассказывает, почему эту историю получилось удачно экранизировать только единожды — в родной для автора Швеции.'
        ],
        17 => [
            'id' => 17,
            'category_id' => 5,
            'title' => 'Банк сывороток и анализ на защитные антитела. Что спасет нас от будущих пандемий',
            'shortDescription' => 'Академик РАН Гинцбург рассказал о комплексе мер для защиты от старых и новых инфекций',
            'textInfo' => 'Почему России необходим Национальный банк сывороток, для чего стоит делать анализ именно на вирус-нейтрализующие антитела, действительно ли мРНК-технологии так перспективны, как об этом говорят, и какое будущее ждет вакцину «Спутник V», в интервью «Газете.Ru» рассказал глава Института им. Н.Ф.Гамалеи, академик РАН Александр Гинцбург.'
        ],
        18 => [
            'id' => 18,
            'category_id' => 5,
            'title' => 'Из шимпанзе в человека и обратно: поможет ли слияние хромосом скрестить нас с обезьянами',
            'shortDescription' => 'Биологи впервые получили жизнеспособных мышей с объединенными хромосомами',
            'textInfo' => 'Ученым из Института Зоологии Академии наук Китая (Куньмин) впервые удалось получить живых и даже способных размножаться мышей, у которых были объединены две хромосомы. «Газета.Ru» узнала у экспертов, почему столь небольшое на первый взгляд достижение — настоящая революция в биологии и как слияние хромосом стало частью истории возникновения человека.
            Главная молекула жизни (ДНК) состоит из всего из четырех типов мономеров, которые обозначают буквами А, Т, Г и Ц. Точечные мутации возникают, когда одна или несколько букв меняются на другие, выпадают или удваиваются. Но иногда в природе происходят более масштабные перестройки: хромосома может исчезнуть, удвоиться, обменяться участком с другой хромосомой. При этом речь идет о перемещении десятков и сотен миллионов «букв» ДНК.'
        ],
        19 => [
            'id' => 19,
            'category_id' => 5,
            'title' => 'Распутать квантовую запутанность: за что дали «Нобеля» по физике',
            'shortDescription' => 'Эксперты по квантовым технологиям объяснили, за что присуждена Нобелевская премия по физике',
            'textInfo' => 'Нобелевскую премию по физике в 2022 году получили исследователи Ален Аспе, Джон Клаузер и Антон Цайлингер за исследования в области квантовой механики, открывшие путь для новых технологий. Какие именно эксперименты проводили нобелевские лауреаты, в чем их роль для современной науки и для чего их идеи активно развиваются в России.
             Нобелевскую премию по физике 2022 года получили физики Ален Аспе из Университета Париж-Сакле, Джон Клаузер из исследовательской компании J. F. Clauser & Associates и Антон Цайлингер из Венского университета за эксперименты в области квантовой запутанности, изучение нарушений неравенств Белла и «новаторство в квантовой информатике». Об этом сообщили представители Нобелевского комитета на церемонии в Стокгольме.'
        ],
        20 => [
            'id' => 20,
            'category_id' => 5,
            'title' => 'Астероид 2022 SE37 сближается с Землей. Ученые говорят, что «нужно жить дальше»',
            'shortDescription' => 'Российские обсерватории обнаружили новый астероид, сближающийся с Землей',
            'textInfo' => 'В ночь на 1 октября две обсерватории на юге России обнаружили новый астероид 2022 SE37, сближающийся с Землей. Его диаметр составляет полкилометра, однако «в обозримом будущем» опасности для Земли он не представляет, отметили специалисты. По словам научного журналиста Михаила Котова, астрономы уже вычислили орбиты большинства астероидов, которые могут быть хоть как-то опасны для человечества.'
        ]
    ];

    public function getAllNews():array
    {
        return $this->news;
    }

    public function getNewsById($id): ?array
    {
        if (array_key_exists($id, $this->getAllNews())){
            return $this->getAllNews()[$id];
        } 
        return null;
    }

    public function getNewsByCategory($category_id): ?array
    {
        $newsByCatecory = [];
        foreach ($this->news as $news){
            if ($news['category_id'] == $category_id){
                array_push($newsByCatecory, $news);
            }
        }
        if (count($newsByCatecory) > 0){
            return $newsByCatecory;
        }   
        return null;
    }
}
