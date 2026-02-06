@extends('layouts.desktop')

@section('SEO')
    <title>3D печать, моделирование и сканирование в Белгороде</title>
    <meta name="description" content='Услуги промышленной 3Д печати в Белгороде, моделирование под заказ и услуги 3Д сканера с выездом до клиента'>
@endsection

@section('content')

    <div class="container banner_wrap">
        <div class="banner row">
            <div class="banner_left">
                <h1>Промышленная 3D печать <br>и 3D сканирование под ваши задачи</h1>
                <p class="h1_desc">Производим прототипы, детали и изделия любой сложности.<br>
                    Работаем с десятками видов пластика, включая гибкие материалы.<br>
                    Берёмся за срочные и крупносерийные проекты.</p>
                <a href="#form" class="btn">Рассчитать стоимость печати</a>

                <div class="footnote">Промышленные мощности • Любые материалы • Сроки от 1 дня</div>
            </div>
            <img src="{{asset('images/home.png')}}" alt="" class="banner_img">
        </div>
    </div>

    <div id="services" class="container mb-80">
        <h2>Услуги IC-Lab</h2>

        <div class="services_list row">
            <div class="services_item services_item-1 row">
                <div class="services_item__info">
                    <h3>3D печать под заказ</h3>
                    <p class="services_item__desc mb-0">Создаём функциональные детали, корпуса, макеты, инженерные элементы и готовые изделия. Печатаем единичные экземпляры и крупные партии.</p>
                </div>
                <img src="{{asset('images/services/1.png')}}" alt="" class="services_item__img">
            </div>
            <div class="services_item services_item-2 row">
                <div class="services_item__info">
                    <h3>3D сканирование</h3>
                    <p class="services_item__desc mb-0">Точно оцифровываем объекты любой формы и размера. Готовим точные 3D-модели для последующего производства, контроля геометрии и модернизации.</p>
                </div>
                <img src="{{asset('images/services/2.png')}}" alt="" class="services_item__img">
            </div>
            <div class="services_item services_item-3 row">
                <div class="services_item__info">
                    <h3>Промышленная серийная печать</h3>
                    <p class="services_item__desc mb-0">Берём на себя массовое производство изделий. Поддерживаем стабильное качество, повторяемость
                        и точные размеры в каждой партии.</p>
                </div>
                <img src="{{asset('images/services/3.png')}}" alt="" class="services_item__img">
            </div>
            <div class="services_item services_item-4 row">
                <div class="services_item__info">
                    <h3>Прототипирование и моделирование</h3>
                    <p class="services_item__desc mb-0">Помогаем разработать модель с нуля. Оптимизируем конструкцию, подбираем материал, создаём прочные и функциональные прототипы.</p>
                </div>
                <img src="{{asset('images/services/4.png')}}" alt="" class="services_item__img">
            </div>
        </div>
    </div>

    <div id="plastic" class="container mb-80">
        <h2>Материалы и технологии</h2>
        <p class="h2_desc">Мы работаем со всеми основными типами пластика для FDM и FFF печати:</p>

        <div class="plastic__list row">
            <div class="plastic_item row">
                <h3>PLA</h3>
                <div class="plastic_item__body row">
                    <p class="plastic_item__desc">для макетов, элементов дизайна и быстрых прототипов</p>
                    <div class="plastic_item__info row">
                        <div class="grid_item row">
                            <span class="grid_item__title">Цена, г:</span>
                            <span class="grid_item__desc">от X ₽</span>
                        </div>
                        <div class="grid_item row">
                            <span class="grid_item__title">Срок:</span>
                            <span class="grid_item__desc">от X дня</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="plastic_item row">
                <h3>ABS</h3>
                <div class="plastic_item__body row">
                    <p class="plastic_item__desc">прочные технические изделия</p>
                    <div class="plastic_item__info row">
                        <div class="grid_item row">
                            <span class="grid_item__title">Цена, г:</span>
                            <span class="grid_item__desc">от X ₽</span>
                        </div>
                        <div class="grid_item row">
                            <span class="grid_item__title">Срок:</span>
                            <span class="grid_item__desc">от X дня</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="plastic_item row">
                <h3>PETG</h3>
                <div class="plastic_item__body row">
                    <p class="plastic_item__desc">универсальный материал повышенной ударопрочности</p>
                    <div class="plastic_item__info row">
                        <div class="grid_item row">
                            <span class="grid_item__title">Цена, г:</span>
                            <span class="grid_item__desc">от X ₽</span>
                        </div>
                        <div class="grid_item row">
                            <span class="grid_item__title">Срок:</span>
                            <span class="grid_item__desc">от X дня</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="plastic_item row">
                <h3>Nylon</h3>
                <div class="plastic_item__body row">
                    <p class="plastic_item__desc">детали, выдерживающие нагрузки и трение</p>
                    <div class="plastic_item__info row">
                        <div class="grid_item row">
                            <span class="grid_item__title">Цена, г:</span>
                            <span class="grid_item__desc">от X ₽</span>
                        </div>
                        <div class="grid_item row">
                            <span class="grid_item__title">Срок:</span>
                            <span class="grid_item__desc">от X дня</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="plastic_item row">
                <h3>TPU/Flex</h3>
                <div class="plastic_item__body row">
                    <p class="plastic_item__desc">гибкая и резиновая печать</p>
                    <div class="plastic_item__info row">
                        <div class="grid_item row">
                            <span class="grid_item__title">Цена, г:</span>
                            <span class="grid_item__desc">от X ₽</span>
                        </div>
                        <div class="grid_item row">
                            <span class="grid_item__title">Срок:</span>
                            <span class="grid_item__desc">от X дня</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="plastic_item row">
                <h3>Композитные материалы</h3>
                <div class="plastic_item__body row">
                    <p class="plastic_item__desc">угленаполненные и армированные составы</p>
                    <div class="plastic_item__info row">
                        <div class="grid_item row">
                            <span class="grid_item__title">Цена, г:</span>
                            <span class="grid_item__desc">от X ₽</span>
                        </div>
                        <div class="grid_item row">
                            <span class="grid_item__title">Срок:</span>
                            <span class="grid_item__desc">от X дня</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <p class="h2_desc mb-0">Помогаем подобрать подходящий материал под конкретные требования вашего проекта — прочность, гибкость, термостойкость или износостойкость.</p>
    </div>

    <div class="container mb-80">
        <h2>Почему выбирают IC-Lab</h2>

        <div class="text_img row mb-0">
            <div class="text_img__text">
                <ul class="mb-0">
                    <li>Промышленные мощности — выполняем большие объёмы в краткие сроки</li>
                    <li>Печать изделий любой сложности, от небольших деталей до массивных объектов</li>
                    <li>Высокая точность, повторяемость и контроль качества</li>
                    <li>Работа по чертежам, эскизам, 3D-моделям или готовым образцам</li>
                    <li>Оперативные расчёты стоимости и прозрачные сроки</li>
                    <li>Опыт работы с бизнесом, инженерами, стартапами и производственными компаниями</li>
                </ul>
            </div>
            <img src="{{asset('images/img-1.jpg')}}" alt="" class="text_img__img">
        </div>
    </div>

    <div id="portfolio" class="container mb-80">
        <h2>Примеры работ</h2>

        <div class="portfolio_list row">
            <div class="portfolio_item">
                <img src="{{asset('images/portfolio/1.jpg')}}" alt="" class="portfolio_img">
                <div class="portfolio_info row">
                    <p class="portfolio_item__title">Корпус для оборудования</p>
                    <div class="grid_item row">
                        <span class="grid_item__title">Материал:</span>
                        <span class="grid_item__desc">ABS</span>
                    </div>
                    <div class="grid_item row">
                        <span class="grid_item__title">Срок:</span>
                        <span class="grid_item__desc">2 дня</span>
                    </div>
                    <p class="portfolio_item__desc mb-0">Результат: изготовлен корпус с точной посадкой под электронику, выполнена небольшая серийная партия.</p>
                </div>
            </div>
            <div class="portfolio_item">
                <img src="{{asset('images/portfolio/2.jpg')}}" alt="" class="portfolio_img">
                <div class="portfolio_info row">
                    <p class="portfolio_item__title">Гибкий компонент для прототипа</p>
                    <div class="grid_item row">
                        <span class="grid_item__title">Материал:</span>
                        <span class="grid_item__desc">TPU</span>
                    </div>
                    <div class="grid_item row">
                        <span class="grid_item__title">Срок:</span>
                        <span class="grid_item__desc">1 день</span>
                    </div>
                    <p class="portfolio_item__desc mb-0">Результат: создано изделие с резиновой гибкостью для тестирования механизма.</p>
                </div>
            </div>
            <div class="portfolio_item">
                <img src="{{asset('images/portfolio/3.jpg')}}" alt="" class="portfolio_img">
                <div class="portfolio_info row">
                    <p class="portfolio_item__title">Промышленная партия деталей</p>
                    <div class="grid_item row">
                        <span class="grid_item__title">Материал:</span>
                        <span class="grid_item__desc">PETG</span>
                    </div>
                    <div class="grid_item row">
                        <span class="grid_item__title">Объём:</span>
                        <span class="grid_item__desc">250 шт</span>
                    </div>
                    <p class="portfolio_item__desc mb-0">Результат: стабильные размеры и идеальная повторяемость благодаря промышленным принтерам.</p>
                </div>
            </div>
        </div>
    </div>

    <div class="container mb-80">
        <h2>Как мы работаем</h2>

        <img src="{{asset('images/work.svg')}}" alt="" class="work_img">

        <div class="work_list row">
            <div class="work_item work_item-1 row">
                <div class="work_item__num">1.</div>
                <div class="work_item__text">Вы оставляете заявку и прикрепляете файлы</div>
            </div>
            <div class="work_item work_item-2 row">
                <div class="work_item__num">2.</div>
                <div class="work_item__text">Мы оцениваем проект и подбираем оптимальный материал</div>
            </div>
            <div class="work_item work_item-3 row">
                <div class="work_item__num">3.</div>
                <div class="work_item__text">Согласовываем стоимость и сроки</div>
            </div>
            <div class="work_item work_item-4 row">
                <div class="work_item__num">4.</div>
                <div class="work_item__text">Производим изделие или партию</div>
            </div>
            <div class="work_item work_item-5 row">
                <div class="work_item__num">5.</div>
                <div class="work_item__text">Проверяем качество и точность геометрии</div>
            </div>
            <div class="work_item work_item-6 row">
                <div class="work_item__num">6.</div>
                <div class="work_item__text">Отгружаем заказ. Доставка по всей России</div>
            </div>
        </div>
    </div>

    <div id="equipment" class="container mb-80">
        <h2>Оборудование</h2>
        <p class="h2_desc">Мы используем профессиональные и промышленные 3D-принтеры, обеспечивающие:</p>

        <div class="equipment_list row">
            <div class="equipment_item">
                <img src="{{asset('images/equipment/1.jpg')}}" alt="" class="equipment_img">
                <div class="equipment_item__title">Крупный объём печати</div>
            </div>
            <div class="equipment_item">
                <img src="{{asset('images/equipment/2.jpg')}}" alt="" class="equipment_img">
                <div class="equipment_item__title">Высокую точность слоёв</div>
            </div>
            <div class="equipment_item">
                <img src="{{asset('images/equipment/3.jpg')}}" alt="" class="equipment_img">
                <div class="equipment_item__title">Стабильную работу при серийном производстве</div>
            </div>
            <div class="equipment_item">
                <img src="{{asset('images/equipment/4.jpg')}}" alt="" class="equipment_img">
                <div class="equipment_item__title">Расширенный температурный режим <br>для инженерных пластиков</div>
            </div>
        </div>
    </div>

    <div class="container mb-80">
        <h2>Кому подходит IC-Lab</h2>

        <div class="text_img row">
            <div class="text_img__text">
                <ul class="mb-0">
                    <li>Инженерам и проектировщикам</li>
                    <li>Производственным и сервисным компаниям</li>
                    <li>Стартапам и разработчикам</li>
                    <li>Медицинским и образовательным учреждениям</li>
                    <li>Частным заказчикам, которым нужна печать или оцифровка деталей</li>
                </ul>
            </div>
            <img src="{{asset('images/img-2.jpg')}}" alt="" class="text_img__img">
        </div>

        <p class="h2_desc mb-0">Мы всегда предлагаем оптимальное решение под задачу клиента — от макета до готовой партии изделий.</p>
    </div>

    <div class="container mb-80">
        <h2>FAQ</h2>

        <div class="accordion_wrap">
            <div class="accordion_item">
                <span class="accordion_title">Как быстро вы печатаете?</span>
                <div class="panel">
                    <p>Обычно 1–3 дня, в зависимости от размеров и объёма заказа.</p>
                </div>
            </div>
            <div class="accordion_item">
                <span class="accordion_title">Какой минимальный заказ?</span>
                <div class="panel">
                    <p>Мы работаем как с единичными деталями, так и с крупносерийными партиями.</p>
                </div>
            </div>
            <div class="accordion_item">
                <span class="accordion_title">Вы работаете по NDA?</span>
                <div class="panel">
                    <p>Да, можем подписать соглашение о конфиденциальности.</p>
                </div>
            </div>
            <div class="accordion_item">
                <span class="accordion_title">У меня нет 3D-модели, можно ли просто прислать фото или образец?</span>
                <div class="panel">
                    <p>Да. Мы можем отсканировать изделие или создать модель по вашему описанию.</p>
                </div>
            </div>
            <div class="accordion_item">
                <span class="accordion_title">Какие материалы выбрать для прочных деталей?</span>
                <div class="panel">
                    <p>Обычно Nylon, PETG или композитные пластики. Мы бесплатно подскажем лучший вариант.</p>
                </div>
            </div>
        </div>
    </div>

    <div id="form" class="container">
        <h2>Рассчитаем стоимость вашего проекта за 15 минут</h2>
        <p class="h2_desc">Прикрепите файл или опишите задачу — наши инженеры предложат оптимальный материал и срок изготовления.</p>

        <div class="form_wrap">
            <div class="form_group__list form_group__list-50 row">
                <div class="form_group">
                    <input type="text" class="form_control _request_name" placeholder="Имя*">
                </div>
                <div class="form_group">
                    <input type="number" class="form_control _request_phone" placeholder="Телефон*" inputmode="numeric">
                </div>
            </div>
            <div class="form_group">
                <textarea class="form_control _request_message" placeholder="Комментарий"></textarea>
            </div>

            <div class="form_bottom row">

                <label class="checkbox_data mb-0">
                    <input type="checkbox" value="" class="checkbox _checkbox">
                    <span class="check_checkbox"></span>
                    <span class="checkbox_info mb-0 p_relative agreement">
                        Согласен(a) на обработку
                        <a href="" class="agreement_link" target="_blank">персональных данных</a>
                    </span>
                </label>

                <span class="btn _request_btn" onclick="support.sendRequestMessage()">Отправить на расчёт</span>
            </div>
        </div>
    </div>

@endsection

@push('scripts')

@endpush
