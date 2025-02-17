<?php

// Copyright (c) ppy Pty Ltd <contact@ppy.sh>. Licensed under the GNU Affero General Public License v3.0.
// See the LICENCE file in the repository root for full licence text.

return [
    'cart' => [
        'checkout' => 'Оплатити',
        'empty_cart' => 'Видалити всі товари з кошику',
        'info' => ':count_delimited товар в кошику ($:subtotal)|:count_delimited товари в кошику ($:subtotal)|:count_delimited товарів в кошику ($:subtotal)',
        'more_goodies' => 'Я хочу подивитися на інші товари перед завершенням замовлення',
        'shipping_fees' => 'вартість доставки',
        'title' => 'Кошик',
        'total' => 'всього',

        'errors_no_checkout' => [
            'line_1' => 'Ой йой, у вас проблеми з кошиком!',
            'line_2' => 'Видаліть або оновіть товари нижче для продовження.',
        ],

        'empty' => [
            'text' => 'Ваш кошик порожній.',
            'return_link' => [
                '_' => 'Поверніться в :link щоб знайти інші товари!',
                'link_text' => 'магазин',
            ],
        ],
    ],

    'checkout' => [
        'cart_problems' => 'Ой-йой, у нас проблеми з вашою карткою!',
        'cart_problems_edit' => 'Натисніть тут, щоб змінити.',
        'declined' => 'Ваш платіж було скасовано.',
        'delayed_shipping' => 'Зараз у нас багато замовлень. Ми все ще їх приймаємо, але будьте уважні, обробка замовлення може зайняти додаткові 1-2 тижні.',
        'hide_from_activity' => 'Приховати всі теги osu!supporter в цьому замовленні з моєї активності',
        'old_cart' => 'Здається ваш кошик застарів, тому був перезавантажений, будь ласка спробуйте ще раз.',
        'pay' => 'Оплатити за допомогою PayPal',
        'title_compact' => 'оплата',

        'has_pending' => [
            '_' => 'У вас є незавершені транзакції, натисніть :link щоб завершити їх.',
            'link_text' => 'сюди',
        ],

        'pending_checkout' => [
            'line_1' => 'Ваш попередній платіж було розпочато, але не було завершено.',
            'line_2' => 'Виберіть спосіб оплати щоб оформити замовлення.',
        ],
    ],

    'discount' => 'ви заощадите :percent%',
    'free' => 'безкоштовно!',

    'invoice' => [
        'contact' => 'Контактна особа:',
        'date' => 'Дата:',
        'echeck_delay' => 'Оскільки оплата була через eCheck, очікування підтвердження оплати через Paypal може зайнятий до 10 днів!',
        'echeck_denied' => '',
        'hide_from_activity' => 'теги osu!supporter в цьому замовленні не показуються в недавній активності.',
        'sent_via' => 'Надіслати через:',
        'shipping_to' => 'Доставити за адресою:',
        'title' => 'До сплати',
        'title_compact' => 'рахунок',

        'status' => [
            'cancelled' => [
                'title' => 'Ваше замовлення було скасовано',
                'line_1' => [
                    '_' => "Якщо ви не робили запит на скасовування замовлення, будь ласка, зв'яжіться з :link вказуючи номер замовлення (#:order_number).",
                    'link_text' => 'службою підтримки osu!store',
                ],
            ],
            'delivered' => [
                'title' => 'Ваше замовлення було доставлено! Сподіваємось, що вам сподобається!',
                'line_1' => [
                    '_' => 'Якщо у вас виникли проблеми при покупці, зв\'яжіться з :link.',
                    'link_text' => 'службою підтримки osu!store',
                ],
            ],
            'prepared' => [
                'title' => 'Ваше замовлення готується!',
                'line_1' => 'Відправлення товару може зайняти трішки довше. Інформація про відстеження замовлення з\'явиться тут, як тільки воно буде оброблено й надіслано. Цей процес може зайняти до 5 днів (але зазвичай менше!) в залежності від того, наскільки ми зайняті.',
                'line_2' => 'Ми надсилаємо всі замовлення з Японії, використовуючи різні транспортні служби доставлення в залежності від ваги та вартості. Ця область оновиться зі специфікацією як тільки ми відправили замовлення.',
            ],
            'processing' => [
                'title' => 'Ваш платіж ще не підтверджений!',
                'line_1' => 'Якщо ви вже заплатили, ми все ще можемо очікувати підтвердження платежу. Будь ласка, оновіть цю сторінку через хвилину або дві!',
                'line_2' => [
                    '_' => 'Якщо під час оплати виникла проблема, :link',
                    'link_text' => 'натисніть тут, щоб продовжити оплату',
                ],
            ],
            'shipped' => [
                'title' => 'Ваше замовлення вже доставлено!',
                'tracking_details' => 'Деталі відстежування:',
                'no_tracking_details' => [
                    '_' => "У нас немає даних для відстеження посилки відправляючи її авіапоштою, але ви можете очікувати отримання протягом 1-3 тижнів. У Європі іноді митниці можуть затримувати замовлення без нашого відома. Якщо ви маєте будь-які занепокоєння, надішліть відповідь на електронний лист з підтвердженням замовлення, який ви отримали (або :link).",
                    'link_text' => 'надішліть нам email',
                ],
            ],
        ],
    ],

    'order' => [
        'cancel' => 'Скасувати замовлення',
        'cancel_confirm' => 'Це замовлення буде скасовано й оплата за цей товар не буде прийнята. Платіжний провайдер може утримати гроші на певний час. Ви впевнені?',
        'cancel_not_allowed' => 'Це замовлення не може бути скасоване зараз.',
        'invoice' => 'Переглянути рахунок',
        'no_orders' => 'Ви нічого не замовляли.',
        'paid_on' => 'Замовлення розміщено :date',
        'resume' => 'Продовжити покупку',
        'shipping_and_handling' => 'Доставка та оброблення',
        'shopify_expired' => 'Термін дії посилання для оформлення замовлення закінчився.',
        'subtotal' => 'Проміжна сума',
        'total' => 'Всього',

        'details' => [
            'order_number' => 'Замовлення #',
            'payment_terms' => 'Умови оплати',
            'salesperson' => 'Продавець',
            'shipping_method' => 'Спосіб доставки',
            'shipping_terms' => 'Умови доставки',
            'title' => 'Деталі замовлення',
        ],

        'item' => [
            'quantity' => 'Кількість',

            'display_name' => [
                'supporter_tag' => ':name для :username (:duration)',
            ],

            'subtext' => [
                'supporter_tag' => 'Повідомлення: :message',
            ],
        ],

        'not_modifiable_exception' => [
            'cancelled' => 'Ви не можете змінити своє замовлення тому, що його було скасовано.',
            'checkout' => 'Ви не можете змінити своє замовлення, поки воно обробляється.', // checkout and processing should have the same message.
            'default' => 'Замовлення неможливо змінити',
            'delivered' => 'Ви не можете змінити своє замовлення тому, що воно вже доставлене.',
            'paid' => 'Ви не можете змінити своє замовлення тому, що його було оплачено.',
            'processing' => 'Ви не можете змінити своє замовлення, поки воно обробляється.',
            'shipped' => 'Ви не можете змінити своє замовлення тому, що його вже відправлено.',
        ],

        'status' => [
            'cancelled' => 'Скасовано',
            'checkout' => 'Підготування',
            'delivered' => 'Доставлено',
            'paid' => 'Оплачено',
            'processing' => 'Очікування підтвердження',
            'shipped' => 'В дорозі',
            'title' => 'Статус замовлення',
        ],

        'thanks' => [
            'title' => 'Дякуємо за замовлення!',
            'line_1' => [
                '_' => 'Ви отримаєте підтвердження електронною поштою вже найближчим часом. Якщо у вас є будь-які запитання, будь ласка, :link!',
                'link_text' => 'зв\'яжіться з нами',
            ],
        ],
    ],

    'product' => [
        'name' => 'Назва',

        'stock' => [
            'out' => 'Наразі товару немає в наявності. Зазирни сюди пізніше!',
            'out_with_alternative' => 'На жаль цей товар відсутній на складі :(. Перевір інші товари, або зазирни сюди пізніше.',
        ],

        'add_to_cart' => 'До кошика',
        'notify' => 'Повідомити мене, коли буде в наявності!',

        'notification_success' => 'ви будете сповіщені коли товар буде в наявності. натисніть :link для скасування',
        'notification_remove_text' => 'сюди',

        'notification_in_stock' => 'Цей продукт вже є в наявності!',
    ],

    'supporter_tag' => [
        'gift' => 'подарунок для гравця',
        'gift_message' => 'додайте повідомлення до вашого подарунка! (до :length символів)',

        'require_login' => [
            '_' => 'Ви маєте :link для покупки тегу osu!supporter!',
            'link_text' => 'увійти',
        ],
    ],

    'username_change' => [
        'check' => 'Введіть ім\'я, щоб перевірити його доступність!',
        'checking' => 'Перевіряємо доступність імені :username...',
        'placeholder' => 'Запитане ім\'я користувача',
        'label' => 'Нове ім\'я користувача',
        'current' => 'Ваше поточне ім\'я користувача - ":username".',

        'require_login' => [
            '_' => 'Ви повинні :link для зміни ніку!',
            'link_text' => 'увійти',
        ],
    ],

    'xsolla' => [
        'distributor' => '',
    ],
];
