<!DOCTYPE html>
<html lang="en">
<?php include 'head.php';?>
  <main>
    <div class="heading-default heading-default heading-default_context_default">
      <div class="container">
        <div class="heading-default__title">Новости о компании</div>
        <ul class="heading-default__breadcrumbs">
          <li class="heading-default__breadcrumb-item">
            <a class="heading-default__breadcrumb-link" href="/">Главная</a>
          </li>
          <li class="heading-default__breadcrumb-item">Новости</li>
        </ul>
      </div>
    </div>
    <div class="masonry articles-list-wrapper">
      <div class="container">
        <!-- <div class="articles-list-wrapper__head">
          <div class="articles-list-wrapper__filter">
            <button class="masonry__secondary-filter-button masonry__secondary-filter-button_active" data-filter="*" type="button">All</button>
            <button class="masonry__secondary-filter-button" data-filter="News" type="button">News</button>
            <button class="masonry__secondary-filter-button" data-filter="Event" type="button">Event</button>
            <button class="masonry__secondary-filter-button" data-filter="Inspiration" type="button">Inspiration</button>
            <button class="masonry__secondary-filter-button" data-filter="Discover" type="button">Discover</button>
          </div>
        </div> -->
        <div class="articles-grid masonry__grid">
          <div class="articles-grid__item masonry__item">
            <div class="article-item" data-filters="Inspiration">
              <a class="article-item__image-wrapper" href="#">
                <img alt="" src="assets/img/001.jpg"/>
              </a>
              <a class="article-item__item-title" href="#">Пример новости</a>
              <div class="article-item__item-footer">
                <a class="article-item__category" href="#">Категория</a>
                <div class="article-item__date">1 янв 2020</div>
              </div>
            </div>
          </div>
          
          <div class="articles-grid__item masonry__item">
            <div class="article-item" data-filters="Inspiration">
              <a class="article-item__image-wrapper" href="#">
                <img alt="" src="assets/img/001.jpg"/>
              </a>
              <a class="article-item__item-title" href="#">Пример новости</a>
              <div class="article-item__item-footer">
                <a class="article-item__category" href="#">Категория</a>
                <div class="article-item__date">1 янв 2020</div>
              </div>
            </div>
          </div>
        </div>
        <!-- <div class="articles-list-wrapper__loader">..loading...</div> -->
      </div>
    </div>
  </main>
  <?php include 'foot.php';?>
</body>

</html>
