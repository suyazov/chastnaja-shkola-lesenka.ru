-- Set an SEO-friendly title for the homepage instead of "Главная".
UPDATE wp_posts
SET post_title = 'Частная школа Лесенка в Ставрополе'
WHERE ID = 13 AND post_type = 'page';

DELETE FROM wp_postmeta
WHERE post_id = 13
  AND meta_key IN (
    'aftercare_notice', '_aftercare_notice',
    'aftercare_title', '_aftercare_title',
    'aftercare_subtitle', '_aftercare_subtitle',
    'aftercare_points', '_aftercare_points',
    'aftercare_food', '_aftercare_food',
    'aftercare_price', '_aftercare_price',
    '_yoast_wpseo_title'
  );

INSERT INTO wp_postmeta (post_id, meta_key, meta_value) VALUES
  (13, 'aftercare_notice', 'Открыт набор в группу продленного дня на 2025-2026 учебный год'),
  (13, '_aftercare_notice', 'field_les_aftercare_notice'),
  (13, 'aftercare_title', 'Продленка в частной школе Лесенка'),
  (13, '_aftercare_title', 'field_les_aftercare_title'),
  (13, 'aftercare_subtitle', 'Для учащихся 1-4 классов с сопровождением, уроками и занятостью на весь день.'),
  (13, '_aftercare_subtitle', 'field_les_aftercare_subtitle'),
  (13, 'aftercare_points', 'Трансфер детей 1 смены из школы\nТрансфер детей 2 смены в школу\nАктуально для МБОУ N50, 22, 21\nКачественное выполнение домашних заданий под контролем опытных педагогов\nКорректировка знаний школьной программы по запросу родителей\nИндивидуальный подход к каждому ребенку\nПрогулки на свежем воздухе\nИгровая деятельность в свободное время\nМастер-классы\nКонсультации для родителей по интересующим вопросам\nУдобный график работы с 8:00 до 18:00\nВ группе до 10 человек'),
  (13, '_aftercare_points', 'field_les_aftercare_points'),
  (13, 'aftercare_food', 'Питание оплачивается отдельно: 400 рублей в день. Вы можете организовать и свое питание для ребенка. В столовой есть холодильник и микроволновка.'),
  (13, '_aftercare_food', 'field_les_aftercare_food'),
  (13, 'aftercare_price', 'Стоимость абонемента: 11 500 руб./мес.'),
  (13, '_aftercare_price', 'field_les_aftercare_price'),
  (13, '_yoast_wpseo_title', 'Продленка и частная школа Лесенка в Ставрополе');