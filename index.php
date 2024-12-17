<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Jost:ital,wght@0,100..900;1,100..900&display=swap"
      rel="stylesheet"
    />
    <link
      href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
      rel="stylesheet"
    />

    <link rel="stylesheet" href="css/normalize.css" />
    <link rel="stylesheet" href="css/style.css" />
    <title>Document</title>
  </head>
  <body>
    <nav class="header-nav">
      <div class="container">
        <div class="header-nav-top">
          <ul class="header-nav-top-list">
            <li class="header-nav-top-list-item">
              <a href="#" class="header-nav-top-link">Сервис</a>
            </li>
            <li class="header-nav-top-list-item">
              <a href="#" class="header-nav-top-link">Сотрудничество</a>
            </li>
            <li class="header-nav-top-list-item">
              <a href="#" class="header-nav-top-link">Заказать звонок</a>
            </li>
          </ul>
          <!-- /.header-nav-top-list -->
          <ul class="online-chats-list header-onlien-chats-list">
            <li class="online-chats-list-item">
              <a href="#" class="online-chats-link">
                <svg class="icon online-chat-icon" width="11px" height="12px">
                  <use href="./img/sprites.svg#viber"></use>
                </svg>
              </a>
            </li>
            <li class="online-chats-list-item">
              <a href="#" class="online-chats-link">
                <svg class="icon online-chat-icon" width="11px" height="12px">
                  <use href="./img/sprites.svg#whatsup"></use>
                </svg>
              </a>
            </li>
            <li class="online-chats-list-item">
              <a href="#" class="online-chats-link">
                <svg class="icon online-chat-icon" width="11px" height="12px">
                  <use href="./img/sprites.svg#telegram"></use>
                </svg>
              </a>
            </li>
          </ul>
          <!-- /.header-nav-top-social-list -->
          <a href="tel:+78005055461" class="header-nav-top-phone">+7 (800) 505-54-61</a>
        </div>
        <!-- /.header-nav-top -->
        <div class="header-nav-bottom">
          <a href="/" class="logo-link"><div class="logo header-nav-logo">Kugoo</div></a>
          <button class="button-purple header-nav-catalog-button">
            <div class="catalog-button-lines">
              <span class="catalog-button-line"></span>
              <span class="catalog-button-line"></span>
              <span class="catalog-button-line"></span>
            </div>
            Каталог
          </button>
          <div class="header-search-form">
            <input name="search" type="text" class="header-search-input" placeholder="Искать самокат KUGO" />
            <button class="button-purple header-search-button">
              <svg class="icon online-chat-icon" width="16px" height="16px">
                <use href="./img/sprites.svg#magnifier"></use>
              </svg>
            </button>
          </div>
          <ul class="header-nav-bottom-shopping-tools">
            <li class="header-nav-bottom-shopping-tools-item">
              <a href="#" class="header-nav-phopping-tools-link">
                <svg class="icon online-chat-icon" width="20px" height="12px">
                  <use href="./img/sprites.svg#balance"></use>
                </svg>
              </a>
            </li>
            <li class="header-nav-bottom-shopping-tools-item">
              <a href="#" class="header-nav-phopping-tools-link">
                <svg class="icon online-chat-icon" width="18px" height="16px" fill="#282739">
                  <use href="./img/sprites.svg#favorites"></use>
                </svg>
              </a>
            </li>
            <li class="header-nav-bottom-shopping-tools-item basket">
              <a href="#" class="header-nav-phopping-tools-link basket">
                <svg class="icon online-chat-icon" width="20px" height="18px">
                  <use href="./img/sprites.svg#basket"></use>
                </svg>
                Корзина
              </a>
            </li>
          </ul>
        </div>
        <!-- /.header-nav-bottom -->
      </div>
    </nav>
    <header class="header header-bg">
      <div class="container">
        <div class="header-content">
          <div class="header-cintact-info">
            <svg class="icon online-chat-icon" width="13px" height="15px">
              <use href="./img/sprites.svg#marker"></use>
            </svg>
            <address class="header-address">Восточно-Кругликовская улица, 86</address>
            <span class="working-hours">Вт - Сб 10:00 - 20:00</span>
          </div>
          <!-- /.contact-info -->
          <h1 class="header-title">Запишитесь на бесплатный тест-драйв электросамокатов</h1>
          <p class="header-text">в Москве без ограничения по времени</p>
          <ul class="visit-benefits-list">
            <li class="visit-benefits-list-item">
              <div class="visit-icon-wrapper">
                <svg class="icon" width="16px" height="16px">
                  <use href="./img/sprites.svg#scooter"></use>
                </svg>
              </div>
              <p class="vitis-benefits-text">Поймете, какая модель вам подходит</p>
            </li>
            <li class="visit-benefits-list-item">
              <div class="visit-icon-wrapper">
                <svg class="icon" width="10px" height="16px">
                  <use href="./img/sprites.svg#energy"></use>
                </svg>
              </div>
              <p class="vitis-benefits-text">Проверите лучшие самокаты в деле</p>
            </li>
          </ul>
          <button class="button-white header-button">Записаться</button>
        </div>
        <!-- /.header-content -->
      </div>
      <!-- /.container -->
    </header>

    <main class="main">
      <section class="section experience">
        <div class="container">
          <div class="experience-content-wrapper">
            <div class="experience-content">
              <h2 class="section-title experience-title">
                Определите максимально подходящую вам модель не теоретически, а на практике
              </h2>
              <p class="section-text experience-text">Тест-драйв поможет:</p>
              <ul class="experience-content-list">
                <li class="experience-content-list-item">
                  <div class="experience-list-icon-wrapper">
                    <svg class="icon experience-list-icon" width="10px" height="8px">
                      <use href="./img/sprites.svg#check"></use>
                    </svg>
                  </div>
                  <p class="experience-list-item-text">
                    <span class="bold">Понять</span>
                    подходит ли вам конкретная модель;
                  </p>
                </li>
                <li class="experience-content-list-item">
                  <div class="experience-list-icon-wrapper">
                    <svg class="icon experience-list-icon" width="10px" height="8px">
                      <use href="./img/sprites.svg#check"></use>
                    </svg>
                  </div>
                  <p class="experience-list-item-text">
                    <span class="bold">Испытать</span>
                    самокат в «реальной жизни»;
                  </p>
                </li>
                <li class="experience-content-list-item">
                  <div class="experience-list-icon-wrapper">
                    <svg class="icon experience-list-icon" width="10px" height="8px">
                      <use href="./img/sprites.svg#check"></use>
                    </svg>
                  </div>
                  <p class="experience-list-item-text">
                    <span class="bold">Оценить</span>
                    удобство хранения и эксплуатации;
                  </p>
                </li>
                <li class="experience-content-list-item">
                  <div class="experience-list-icon-wrapper">
                    <svg class="icon experience-list-icon" width="10px" height="8px">
                      <use href="./img/sprites.svg#check"></use>
                    </svg>
                  </div>
                  <p class="experience-list-item-text">
                    <span class="bold">Узнать</span>
                    реальные характеристики и возможности модели.
                  </p>
                </li>
              </ul>
            </div>
          </div>
          <!-- /.experience-content-wrapper -->
        </div>
        <!-- /.container -->
        <picture>
          <source type="image/webp" srcset="./img/experience-img.webp" />
          <source type="image/jpeg" srcset="./img/experience-img.jpg" />
          <img
            src="./img/experience-img.jpg"
            class="experience-img"
            alt="experience-img"
            width="515"
            height="422"
          />
        </picture>
      </section>
      <!-- /.experience -->
      <section class="section education">
        <div class="container">
          <div class="education-content-wrapper">
            <div class="education-content">
              <h2 class="section-title education-title">
                Научим правильной и безопасной езде в городе вас или вашего ребенка
              </h2>
              <p class="section-text education-text">На обучении специалист расскажет:</p>
              <ul class="education-content-list">
                <li class="education-content-list-item">
                  <div class="education-list-icon-wrapper">
                    <svg class="icon education-list-icon" width="10px" height="8px">
                      <use href="./img/sprites.svg#check"></use>
                    </svg>
                  </div>
                  <p class="education-list-item-text">Как подготовить самокат к поездке;</p>
                </li>
                <li class="education-content-list-item">
                  <div class="education-list-icon-wrapper">
                    <svg class="icon education-list-icon" width="10px" height="8px">
                      <use href="./img/sprites.svg#check"></use>
                    </svg>
                  </div>
                  <p class="education-list-item-text">Как «завести» самокат;</p>
                </li>
                <li class="education-content-list-item">
                  <div class="education-list-icon-wrapper">
                    <svg class="icon education-list-icon" width="10px" height="8px">
                      <use href="./img/sprites.svg#check"></use>
                    </svg>
                  </div>
                  <p class="education-list-item-text">
                    Как вести себя во время поездки и обезопасить себя и окружающих;
                  </p>
                </li>
                <li class="education-content-list-item">
                  <div class="education-list-icon-wrapper">
                    <svg class="icon education-list-icon" width="10px" height="8px">
                      <use href="./img/sprites.svg#check"></use>
                    </svg>
                  </div>
                  <p class="education-list-item-text">Как складывать и раскладывать электросамокат;</p>
                </li>
                <li class="education-content-list-item">
                  <div class="education-list-icon-wrapper">
                    <svg class="icon education-list-icon" width="10px" height="8px">
                      <use href="./img/sprites.svg#check"></use>
                    </svg>
                  </div>
                  <p class="education-list-item-text">Как ухаживать за своим девайсом.</p>
                </li>
              </ul>
            </div>
            <!-- /.education-content -->
          </div>
          <!-- /.education-content-wrapper -->
        </div>
        <!-- /.container -->
        <picture>
          <source type="image/webp" srcset="./img/education-img.webp" />
          <source type="image/jpeg" srcset="./img/education-img.jpg" />
          <img
            src="./img/education-img.jpg"
            class="education-img"
            alt="experience-img"
            width="515"
            height="463"
          />
        </picture>
      </section>
      <!-- /.education -->
      <section class="section test-drive">
        <div class="container">
          <h2 class="section-title test-drive-title">
            Сейчас для тест-драйва и обучения доступны следующие модели
          </h2>
          <div class="swiper test-derive-slider">
            <!-- Additional required wrapper -->
            <div class="swiper-wrapper test-drive-cards">
              <!-- Slides -->
              <div class="swiper-slide test-drive-card">
                <div class="test-drive-card-tools">
                  <div class="badge-hit">Хит</div>
                  <a href="" class="test-drive-card-comparison">
                    <svg class="icon test-drive-card-tools-icon" width="20px" height="12px">
                      <use href="./img/sprites.svg#balance"></use>
                    </svg>
                  </a>
                </div>
                <picture>
                  <source type="image/webp" srcset="./img/scooter.webp" />
                  <source type="image/jpeg" srcset="./img/scooter.jpg" />
                  <img
                    src="./img/scooter.jpg"
                    class="scooter-img"
                    alt="scooter-img"
                    width="242"
                    height="182"
                  />
                </picture>
                <div class="test-drive-card-content-wrapper">
                  <h3 class="test-drive-card-title">Kugoo Kirin M4</h3>
                  <ul class="test-drive-features-list">
                    <li class="test-drive-features-item">
                      <svg class="icon test-drive-features-icon" width="18" height="14">
                        <use href="./img/sprites.svg#batary"></use>
                      </svg>
                      2000 mAh
                    </li>
                    <li class="test-drive-features-item">
                      <svg class="icon test-drive-features-icon" width="18" height="18">
                        <use href="./img/sprites.svg#speed"></use>
                      </svg>
                      60 км/ч
                    </li>
                    <li class="test-drive-features-item">
                      <svg class="icon test-drive-features-icon" width="12" height="18">
                        <use href="./img/sprites.svg#feature-energy"></use>
                      </svg>
                      1,2 л.с.
                    </li>
                    <li class="test-drive-features-item">
                      <svg class="icon test-drive-features-icon" width="16" height="18">
                        <use href="./img/sprites.svg#timer"></use>
                      </svg>
                      5 часов
                    </li>
                  </ul>
                  <div class="price-and-tools">
                    <div class="price-wrapper">
                      <div class="last-price">39 990 ₽</div>
                      <div class="price">29 900 ₽</div>
                    </div>
                    <div class="tools-wrapper">
                      <a href="#" class="header-nav-phopping-tools-link">
                        <svg class="icon online-chat-icon" width="18px" height="16px" fill="#6F73EE">
                          <use href="./img/sprites.svg#favorites"></use>
                        </svg>
                      </a>
                      <a href="#" class="header-nav-phopping-tools-link basket">
                        <svg class="icon online-chat-icon" width="20" height="18">
                          <use href="./img/sprites.svg#basket-transparent"></use>
                        </svg>
                      </a>
                    </div>
                  </div>
                </div>
                <!-- /.price-and-tools -->
                <button class="button-purple test-drive-card-button">Записаться на тест-драйв</button>
              </div>
              <div class="swiper-slide test-drive-card">
                <div class="test-drive-card-tools">
                  <div class="badge-new">Новинка</div>
                  <a href="" class="test-drive-card-comparison">
                    <svg class="icon test-drive-card-tools-icon" width="20px" height="12px">
                      <use href="./img/sprites.svg#balance"></use>
                    </svg>
                  </a>
                </div>
                <picture>
                  <source type="image/webp" srcset="./img/scooter.webp" />
                  <source type="image/jpeg" srcset="./img/scooter.jpg" />
                  <img
                    src="./img/scooter.jpg"
                    class="scooter-img"
                    alt="scooter-img"
                    width="242"
                    height="182"
                  />
                </picture>
                <div class="test-drive-card-content-wrapper">
                  <h3 class="test-drive-card-title">Kugoo Kirin M4</h3>
                  <ul class="test-drive-features-list">
                    <li class="test-drive-features-item">
                      <svg class="icon test-drive-features-icon" width="18" height="14">
                        <use href="./img/sprites.svg#batary"></use>
                      </svg>
                      2000 mAh
                    </li>
                    <li class="test-drive-features-item">
                      <svg class="icon test-drive-features-icon" width="18" height="18">
                        <use href="./img/sprites.svg#speed"></use>
                      </svg>
                      60 км/ч
                    </li>
                    <li class="test-drive-features-item">
                      <svg class="icon test-drive-features-icon" width="12" height="18">
                        <use href="./img/sprites.svg#feature-energy"></use>
                      </svg>
                      1,2 л.с.
                    </li>
                    <li class="test-drive-features-item">
                      <svg class="icon test-drive-features-icon" width="16" height="18">
                        <use href="./img/sprites.svg#timer"></use>
                      </svg>
                      5 часов
                    </li>
                  </ul>
                  <div class="price-and-tools">
                    <div class="price-wrapper">
                      <div class="last-price">39 990 ₽</div>
                      <div class="price">29 900 ₽</div>
                    </div>
                    <div class="tools-wrapper">
                      <a href="#" class="header-nav-phopping-tools-link">
                        <svg class="icon online-chat-icon" width="18px" height="16px" fill="#6F73EE">
                          <use href="./img/sprites.svg#favorites"></use>
                        </svg>
                      </a>
                      <a href="#" class="header-nav-phopping-tools-link basket">
                        <svg class="icon online-chat-icon" width="20" height="18">
                          <use href="./img/sprites.svg#basket-transparent"></use>
                        </svg>
                      </a>
                    </div>
                  </div>
                  <!-- /.price-and-tools -->
                </div>
                <!-- /.test-drive-card-content-wrapper -->
                <button class="button-purple test-drive-card-button">Записаться на тест-драйв</button>
              </div>
              <div class="swiper-slide test-drive-card">
                <div class="test-drive-card-tools">
                  <div class="badge-hit">Хит</div>
                  <a href="" class="test-drive-card-comparison">
                    <svg class="icon test-drive-card-tools-icon" width="20px" height="12px">
                      <use href="./img/sprites.svg#balance"></use>
                    </svg>
                  </a>
                </div>
                <picture>
                  <source type="image/webp" srcset="./img/scooter.webp" />
                  <source type="image/jpeg" srcset="./img/scooter.jpg" />
                  <img
                    src="./img/scooter.jpg"
                    class="scooter-img"
                    alt="scooter-img"
                    width="242"
                    height="182"
                  />
                </picture>
                <div class="test-drive-card-content-wrapper">
                  <h3 class="test-drive-card-title">Kugoo Kirin M4</h3>
                  <ul class="test-drive-features-list">
                    <li class="test-drive-features-item">
                      <svg class="icon test-drive-features-icon" width="18" height="14">
                        <use href="./img/sprites.svg#batary"></use>
                      </svg>
                      2000 mAh
                    </li>
                    <li class="test-drive-features-item">
                      <svg class="icon test-drive-features-icon" width="18" height="18">
                        <use href="./img/sprites.svg#speed"></use>
                      </svg>
                      60 км/ч
                    </li>
                    <li class="test-drive-features-item">
                      <svg class="icon test-drive-features-icon" width="12" height="18">
                        <use href="./img/sprites.svg#feature-energy"></use>
                      </svg>
                      1,2 л.с.
                    </li>
                    <li class="test-drive-features-item">
                      <svg class="icon test-drive-features-icon" width="16" height="18">
                        <use href="./img/sprites.svg#timer"></use>
                      </svg>
                      5 часов
                    </li>
                  </ul>
                  <div class="price-and-tools">
                    <div class="price-wrapper">
                      <div class="last-price">39 990 ₽</div>
                      <div class="price">29 900 ₽</div>
                    </div>
                    <div class="tools-wrapper">
                      <a href="#" class="header-nav-phopping-tools-link">
                        <svg class="icon online-chat-icon" width="18px" height="16px" fill="#6F73EE">
                          <use href="./img/sprites.svg#favorites"></use>
                        </svg>
                      </a>
                      <a href="#" class="header-nav-phopping-tools-link basket">
                        <svg class="icon online-chat-icon" width="20" height="18">
                          <use href="./img/sprites.svg#basket-transparent"></use>
                        </svg>
                      </a>
                    </div>
                  </div>
                  <!-- /.price-and-tools -->
                </div>
                <button class="button-purple test-drive-card-button">Записаться на тест-драйв</button>
              </div>
              <div class="swiper-slide test-drive-card">
                <div class="test-drive-card-tools">
                  <div class="badge-new">Новинка</div>
                  <a href="" class="test-drive-card-comparison">
                    <svg class="icon test-drive-card-tools-icon" width="20px" height="12px">
                      <use href="./img/sprites.svg#balance"></use>
                    </svg>
                  </a>
                </div>
                <picture>
                  <source type="image/webp" srcset="./img/scooter.webp" />
                  <source type="image/jpeg" srcset="./img/scooter.jpg" />
                  <img
                    src="./img/scooter.jpg"
                    class="scooter-img"
                    alt="scooter-img"
                    width="242"
                    height="182"
                  />
                </picture>
                <div class="test-drive-card-content-wrapper">
                  <h3 class="test-drive-card-title">Kugoo Kirin M4</h3>
                  <ul class="test-drive-features-list">
                    <li class="test-drive-features-item">
                      <svg class="icon test-drive-features-icon" width="18" height="14">
                        <use href="./img/sprites.svg#batary"></use>
                      </svg>
                      2000 mAh
                    </li>
                    <li class="test-drive-features-item">
                      <svg class="icon test-drive-features-icon" width="18" height="18">
                        <use href="./img/sprites.svg#speed"></use>
                      </svg>
                      60 км/ч
                    </li>
                    <li class="test-drive-features-item">
                      <svg class="icon test-drive-features-icon" width="12" height="18">
                        <use href="./img/sprites.svg#feature-energy"></use>
                      </svg>
                      1,2 л.с.
                    </li>
                    <li class="test-drive-features-item">
                      <svg class="icon test-drive-features-icon" width="16" height="18">
                        <use href="./img/sprites.svg#timer"></use>
                      </svg>
                      5 часов
                    </li>
                  </ul>
                  <div class="price-and-tools">
                    <div class="price-wrapper">
                      <div class="last-price">39 990 ₽</div>
                      <div class="price">29 900 ₽</div>
                    </div>
                    <div class="tools-wrapper">
                      <a href="#" class="header-nav-phopping-tools-link">
                        <svg class="icon online-chat-icon" width="18px" height="16px" fill="#6F73EE">
                          <use href="./img/sprites.svg#favorites"></use>
                        </svg>
                      </a>
                      <a href="#" class="header-nav-phopping-tools-link basket">
                        <svg class="icon online-chat-icon" width="20" height="18">
                          <use href="./img/sprites.svg#basket-transparent"></use>
                        </svg>
                      </a>
                    </div>
                  </div>
                  <!-- /.price-and-tools -->
                </div>
                <!-- /.test-drive-card-content-wrapper -->
                <button class="button-purple test-drive-card-button">Записаться на тест-драйв</button>
              </div>
              <!-- /.test-drive-card -->
            </div>
            <!-- /.test-drive-cards -->

            <div class="slider-buttons-wrapper">
              <div class="button-purple slider-button-prev">
                <svg class="icon online-chat-icon" width="24" height="24">
                  <use href="./img/sprites.svg#arrow-left"></use>
                </svg>
              </div>
              <div class="button-purple slider-button-next">
                <svg class="icon online-chat-icon" width="24" height="24">
                  <use href="./img/sprites.svg#arrow-right"></use>
                </svg>
              </div>
            </div>
          </div>
          <!-- /.swiper -->
        </div>
        <!-- /.container -->
      </section>
      <section class="section cta">
        <div class="container">
          <div class="cta-content-wrapper">
            <div class="cta-content">
              <h2 class="section-title cta-title">Нет нужной модели, которую хотите протестировать?</h2>
              <p class="cta-text">Оставьте заявку, и менеджер подберет нужный самокат</p>
              <form action="./handler.php" method="post" class="cta-form">
                <input
                  name="userphone"
                  class="input input-cta phone-mask"
                  type="tel"
                  placeholder="+7 (___) __ - __ - __"
                />
                <button type="submit" class="button-purple cta-form-button">
                  Оставить заявку на тест-драйв
                </button>
              </form>
              <div class="cta-agreement">
                <svg class="icon cta-icon" width="16" height="16">
                  <use href="./img/sprites.svg#check"></use>
                </svg>
                <p class="cta-agreement-text">
                  Нажимая на кнопку, вы соглашаетесь на обработку персональных данных и
                  <a href="#" class="pilicy-link">политикой конфиденциальности</a>
                </p>
              </div>
            </div>
            <picture>
              <source type="image/webp" srcset="./img/cta-img.webp" />
              <source type="image/jpeg" srcset="./img/cta-img.jpg" />
              <img src="./img/cta-img.jpg" class="cta-img" alt="cta-img" width="410" height="494" />
            </picture>
          </div>
        </div>
        <!-- /.container -->
      </section>
      <!-- /.section cta -->
    </main>

    <div class="modal-success">
      <p class="modal-success-text">Заявка успешно отправлена!</p>
    </div>
    <footer class="footer">
      <div class="footer-header">
        <div class="container">
          <div class="footer-header-content">
            <h2 class="footer-header-title">
              Оставьте свою почту и станьте первым, кто получит скидку на новые самокаты
            </h2>
            <form action="#" class="foote-header-form">
              <input type="email" class="input footer-input" placeholder="Введите Ваш email" />
              <button class="button-white footer-form-button">Подписаться</button>
            </form>
          </div>
        </div>
      </div>
      <div class="footer-main">
        <div class="container">
          <div class="footer-main-content-wrapper">
            <div class="product-catalog">
              <h4 class="product-catalog-title footer-list-title">Каталог товаров</h4>
              <ul class="product-catalog-list">
                <li class="product-catalog-list-item">
                  <a href="#" class="product-catalog-link">Электросамокаты</a>
                </li>
                <li class="product-catalog-list-item">
                  <a href="#" class="product-catalog-link">Электроскутеры</a>
                </li>
                <li class="product-catalog-list-item">
                  <a href="#" class="product-catalog-link">Электровелосипеды</a>
                </li>
                <li class="product-catalog-list-item">
                  <a href="#" class="product-catalog-link">Электровелосипеды</a>
                </li>
              </ul>
            </div>
            <!-- /.product-catalog -->
            <div class="for-buyers">
              <h4 class="for-buyers-title footer-list-title">Покупателям</h4>
              <ul class="for-buyers-list">
                <li class="for-buyers-list-item">
                  <a href="#" class="for-buyer-link">Сервисный центр</a>
                </li>
                <li class="for-buyers-list-item">
                  <a href="#" class="for-buyer-link">Доставка и оплата</a>
                </li>
                <li class="for-buyers-list-item">
                  <a href="#" class="for-buyer-link">Рассрочка</a>
                </li>
                <li class="for-buyers-list-item">
                  <a href="#" class="for-buyer-link">Тест-драйв</a>
                </li>
                <li class="for-buyers-list-item">
                  <a href="#" class="for-buyer-link">Блог</a>
                </li>
                <li class="for-buyers-list-item">
                  <a href="#" class="for-buyer-link">Сотрудничество</a>
                </li>
                <li class="for-buyers-list-item">
                  <a href="#" class="for-buyer-link">Контакты</a>
                </li>
                <li class="for-buyers-list-item">
                  <a href="#" class="for-buyer-link">Акции</a>
                </li>
              </ul>
            </div>
            <!-- /.for-buyers -->
            <div class="contacts-wrapper">
              <h4 class="contacts-title footer-list-title">Контакты</h4>
              <ul class="contacts-list">
                <li class="contacts-list-item">
                  <p class="contacts-call-center-text">Call-центр</p>
                  <a href="tel:+78005055461" class="contacts-call-center-phone">+7 (800) 505-54-61</a>
                  <div class="contacts-call-center-timemode">Пн-Вс 10:00 - 20:00</div>
                </li>
                <li class="contacts-list-item">
                  <p class="contacts-service-center-text">Сервисный центр</p>
                  <a href="tel:+74993507692" class="contacts-service-center-phone">+7 (499) 350-76-92</a>
                  <div class="contacts-service-center-timemode">Пн-Вс 10:00 - 20:00</div>
                </li>
              </ul>
            </div>
            <div class="callback-link-wrapper">
              <a href="#" class="callback-link">Заказать звонок</a>
            </div>
          </div>
          <!-- /.footer-main-content-wrapper -->
        </div>
        <!-- /.container -->
      </div>
      <!-- /.footer-main -->
      <hr class="footer-separator" />
      <div class="footer-basement">
        <div class="container">
          <div class="footer-basement-top">
            <a href="/" class="logo-link"><div class="logo footer-logo">Kugoo</div></a>
            <div class="market-bages">
              <a href="#" class="get-on-google-play badge-link">
                <?php require_once('./img/google-play-badge.svg') ?>
                <!-- Элемент некорректро отображается через svg use раскомментировать когда найдется решение -->
                <!-- <svg class="icon google-play-icon" width="152" height="45">
                  <use href="./img/sprites.svg#google-play-badge"></use>
                </svg> -->
              </a>
              <a href="#" class="get-on-appstore badge-link">
                <svg class="icon attstore-icon" width="134" height="45">
                  <use href="./img/sprites.svg#appstore-badge"></use>
                </svg>
              </a>
            </div>
            <ul class="footer-social-list">
              <li class="footer-social-list-item">
                <a href="#" class="footer-social-link">
                  <svg class="icon attstore-icon" width="19" height="11">
                    <use href="./img/sprites.svg#vk-icon"></use>
                  </svg>
                  <div class="footer-social-list-item-content">
                    <h5 class="footer-social-title">Вконтакте</h5>
                    <p class="footer-social-people-count">3 300</p>
                  </div>
                </a>
              </li>
              <li class="footer-social-list-item">
                <a href="#" class="footer-social-link">
                  <svg class="icon attstore-icon" width="20" height="14">
                    <use href="./img/sprites.svg#youtube"></use>
                  </svg>
                  <div class="footer-social-list-item-content">
                    <h5 class="footer-social-title">YouTube</h5>
                    <p class="footer-social-people-count">3 603</p>
                  </div>
                </a>
              </li>
              <li class="footer-social-list-item">
                <a href="#" class="footer-social-link">
                  <svg class="icon attstore-icon" width="19" height="16">
                    <use href="./img/sprites.svg#telegram-footer"></use>
                  </svg>
                  <div class="footer-social-list-item-content">
                    <h5 class="footer-social-title">Telegram</h5>
                    <p class="footer-social-people-count">432</p>
                  </div>
                </a>
              </li>
            </ul>
          </div>
          <!-- /.footer-basement-top -->
          <hr class="footer-separator" />
          <div class="footer-basement-bottom">
            <a href="#" class="footer-payment-details">Реквизиты</a>
            <a href="#" class="footer-policy">Политика конфиденциальности</a>
            <ul class="footer-payment-system-list">
              <li class="footer-payment-system-list-item">
                <svg class="icon attstore-icon" width="26" height="11">
                  <use href="./img/sprites.svg#google-pay"></use>
                </svg>
              </li>
              <li class="footer-payment-system-list-item">
                <svg class="icon attstore-icon" width="26" height="11">
                  <use href="./img/sprites.svg#apple-pay"></use>
                </svg>
              </li>
              <li class="footer-payment-system-list-item">
                <svg class="icon attstore-icon" width="25" height="9">
                  <use href="./img/sprites.svg#visa"></use>
                </svg>
              </li>
              <li class="footer-payment-system-list-item">
                <svg class="icon attstore-icon" width="23" height="14">
                  <use href="./img/sprites.svg#mastercard"></use>
                </svg>
              </li>
              <li class="footer-payment-system-list-item">
                <svg class="icon attstore-icon" width="22" height="14">
                  <use href="./img/sprites.svg#maestro"></use>
                </svg>
              </li>
              <li class="footer-payment-system-list-item">
                <svg class="icon attstore-icon" width="24" height="16">
                  <use href="./img/sprites.svg#webmoney"></use>
                </svg>
              </li>
              <li class="footer-payment-system-list-item">
                <svg class="icon attstore-icon" width="16" height="17">
                  <use href="./img/sprites.svg#qiwi"></use>
                </svg>
              </li>
            </ul>
            <p class="online-chat">Online чат:</p>
            <ul class="online-chats-list footer-online-chats-list">
              <li class="online-chats-list-item">
                <a href="#" class="online-chats-link">
                  <svg class="icon online-chat-icon" width="11px" height="12px">
                    <use href="./img/sprites.svg#viber"></use>
                  </svg>
                </a>
              </li>
              <li class="online-chats-list-item">
                <a href="#" class="online-chats-link">
                  <svg class="icon online-chat-icon" width="11px" height="12px">
                    <use href="./img/sprites.svg#whatsup"></use>
                  </svg>
                </a>
              </li>
              <li class="online-chats-list-item">
                <a href="#" class="online-chats-link">
                  <svg class="icon online-chat-icon" width="11px" height="12px">
                    <use href="./img/sprites.svg#telegram"></use>
                  </svg>
                </a>
              </li>
            </ul>
            <!-- /.header-nav-top-social-list -->
          </div>
        </div>
      </div>
    </footer>
    <script src="js/swiper-bundle.min.js"></script>
    <script src="js/just-validate.production.min.js"></script>
    <script src="js/main.js"></script>
  </body>
</html>
