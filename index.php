<?php
$firma = 'Szprycha';
$rok = date('Y');
$cennik = [
    ['usluga' => 'Przegląd miejski', 'cena' => '120 zł'],
    ['usluga' => 'Regulacja przerzutek', 'cena' => '80 zł'],
    ['usluga' => 'Serwis hamulców', 'cena' => '70 zł'],
    ['usluga' => 'Centrowanie koła', 'cena' => 'od 60 zł'],
    ['usluga' => 'Wymiana dętki', 'cena' => '35 zł'],
];
?>
<!doctype html>
<html lang="pl">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Szprycha — mała pracownia rowerowa w Bydgoszczy. Serwis, regulacje i uczciwy cennik.">
    <title>Szprycha — pracownia rowerowa w Bydgoszczy</title>
    <link rel="stylesheet" href="style.css">
    <script src="app.js" defer></script>
  </head>
  <body>
    <a class="skip-link" href="#poczatek">Przejdź do treści</a>
    <header class="site-header">
      <a class="brand" href="#poczatek" aria-label="Szprycha — strona główna">
        <svg class="brand__mark" viewBox="0 0 48 32" aria-hidden="true" focusable="false">
          <title>Rower Szprychy</title>
          <circle cx="9" cy="23" r="7" fill="none" stroke="currentColor" stroke-width="2"></circle>
          <circle cx="39" cy="23" r="7" fill="none" stroke="currentColor" stroke-width="2"></circle>
          <polyline points="9,23 18,8 24,23 9,23 20,10 32,10 24,23 39,23 32,10 35,6" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></polyline>
        </svg>
        <span class="brand__name">Szprycha<span class="brand__slash"> / </span><span class="brand__descriptor">pracownia rowerowa</span></span>
      </a>
      <button class="menu-toggle" type="button" aria-controls="site-navigation" aria-expanded="false" aria-label="Otwórz menu nawigacji">
        <span aria-hidden="true">Menu</span>
        <svg viewBox="0 0 24 24" width="20" height="20" aria-hidden="true" focusable="false">
          <path d="M4 7h16M4 12h16M4 17h16" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"></path>
        </svg>
      </button>
      <nav class="menu" id="site-navigation" aria-label="Nawigacja główna">
        <a href="#uslugi">Usługi</a>
        <a href="#cennik">Cennik</a>
        <a href="#kontakt">Kontakt</a>
      </nav>
    </header>

    <main id="poczatek">
      <section class="services" id="uslugi" aria-labelledby="services-title">
        <header class="hero">
          <div class="hero__copy">
            <p class="eyebrow">Bydgoszcz · serwis bez zadęcia</p>
            <h1 id="services-title">Rower ma jechać.<br><span>Resztą zajmiemy się my.</span></h1>
            <p class="intro-copy">Mała pracownia, dobre narzędzia i rozmowa o tym, czego naprawdę potrzebuje Twój rower.</p>
            <a class="text-link" href="#cennik">Zobacz cennik <span aria-hidden="true">↓</span></a>
          </div>
          <figure class="hero-art">
            <img src="assets/szprycha-bike.svg" width="720" height="540" alt="Ręcznie rysowany zielony rower szosowy z pomarańczowymi detalami">
            <figcaption><span>Rys. 01</span> Gotowy na dalszą drogę</figcaption>
          </figure>
        </header>

        <header class="services__heading">
          <p class="eyebrow">01 / Prace w pracowni</p>
          <h2 id="service-list-title">Od regulacji po pełny przegląd.</h2>
          <p>Najpierw sprawdzamy, potem ustalamy zakres. Bez wymieniania sprawnych części „na wszelki wypadek”.</p>
        </header>

        <ul class="cards" aria-labelledby="service-list-title">
          <li>
            <article class="card card--highlight">
              <p class="card__eyebrow">Pakiet warsztatowy</p>
              <span class="card__tag">Najczęściej wybierane</span>
              <h3>Przegląd miejski</h3>
              <p>Kontrola hamulców, kół i napędu. Regulujemy to, co wymaga uwagi, i oddajemy rower gotowy do codziennych tras.</p>
              <p class="card__price">od <strong>120 zł</strong></p>
            </article>
          </li>

          <li>
            <article class="card">
              <p class="card__eyebrow">Napęd</p>
              <h3>Regulacja przerzutek</h3>
              <p>Biegi mają wchodzić lekko i bez terkotania. Ustawiamy indeksację, sprawdzamy linki i stan zużycia.</p>
              <p class="card__price">od <strong>80 zł</strong></p>
            </article>
          </li>

          <li>
            <article class="card">
              <p class="card__eyebrow">Koła</p>
              <h3>Centrowanie koła</h3>
              <p>Usuwamy bicie, wyrównujemy naciąg szprych i sprawdzamy, czy obręcz znów biegnie prosto.</p>
              <p class="card__price">od <strong>60 zł</strong></p>
            </article>
          </li>
        </ul>
      </section>

      <section class="pricing" id="cennik" aria-labelledby="pricing-title">
        <header class="pricing__intro">
          <p class="eyebrow">02 / Bez niespodzianek</p>
          <h2 id="pricing-title">Cennik</h2>
          <p>Sprawdź zakres prac przed wizytą. Jeśli rower skrywa coś więcej, najpierw zadzwonimy i ustalimy szczegóły.</p>
          <p class="pricing__note">Ceny obejmują robociznę. Części dobieramy i wyceniamy przed montażem.</p>
        </header>

        <div class="price-sheet">
          <table class="price-table" aria-describedby="pricing-footnote">
            <caption>Cennik orientacyjny · robocizna</caption>
            <thead>
              <tr>
                <th scope="col">Usługa</th>
                <th class="num" scope="col">Cena</th>
              </tr>
            </thead>
            <tbody>
              <?php foreach ($cennik as $pozycja): ?>
                <tr>
                  <th scope="row"><?= htmlspecialchars($pozycja['usluga'], ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8') ?></th>
                  <td class="num"><?= htmlspecialchars($pozycja['cena'], ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8') ?></td>
                </tr>
              <?php endforeach; ?>
            </tbody>
          </table>
          <p class="price-sheet__footnote" id="pricing-footnote">Cena obejmuje montaż; koszt dętki ustalamy przed pracą.</p>
        </div>
      </section>
    </main>

    <footer class="site-footer" id="kontakt" aria-labelledby="contact-title">
      <header class="footer-heading">
        <p class="eyebrow">03 / Wpadnij do pracowni</p>
        <h2 id="contact-title">Do zobaczenia<br><span>na trasie.</span></h2>
        <p>Przed przyjazdem daj znać — znajdziemy dobry termin na serwis.</p>
      </header>
      <ul class="contact-grid" aria-label="Dane kontaktowe">
        <li class="contact-item">
          <h3 class="contact-item__label">Gdzie</h3>
          <address>Bydgoszcz<br>Pracownia po wcześniejszym umówieniu</address>
        </li>
        <li class="contact-item">
          <h3 class="contact-item__label">Zadzwoń</h3>
          <a href="tel:+48500100200">500 100 200</a>
        </li>
        <li class="contact-item">
          <h3 class="contact-item__label">Napisz</h3>
          <a href="mailto:pracownia@szprycha.example">pracownia@szprycha.example</a>
        </li>
      </ul>
      <div class="footer-bottom">
        <p class="footer-brand"><?= htmlspecialchars($firma, ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8') ?> <span>·</span> Bydgoszcz</p>
        <p>© <time datetime="<?= htmlspecialchars($rok, ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8') ?>"><?= htmlspecialchars($rok, ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8') ?></time> <?= htmlspecialchars($firma, ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8') ?>. Mały serwis. Dużo dobrych kilometrów.</p>
      </div>
    </footer>
  </body>
</html>
