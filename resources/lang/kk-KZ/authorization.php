<?php

// Copyright (c) ppy Pty Ltd <contact@ppy.sh>. Licensed under the GNU Affero General Public License v3.0.
// See the LICENCE file in the repository root for full licence text.

return [
    'play_more' => 'Оданша osu! ойнап көрсеңіз қалай?',
    'require_login' => 'Жалғастыру үшін аккаунтыңызға кіріңіз.',
    'require_verification' => 'Жалғастыру үшін аккаунтыңызды растаңыз.',
    'restricted' => "Құқыңыз шектеулі кезде бұны істей алмайсыз.",
    'silenced' => "Бітеулі кезде бұны істей алмайсыз.",
    'unauthorized' => 'Рұқсат жоқ.',

    'beatmap_discussion' => [
        'destroy' => [
            'is_hype' => 'Хайпты болдырмау қолжетімді емес.',
            'has_reply' => 'Жауаптары бар талқылауды өшіре алмайсыз',
        ],
        'nominate' => [
            'exhausted' => 'Сіз өз номинация шегіне жеттіңіз, ертең қайта қайталап көріңіз.',
            'incorrect_state' => 'Әрекетті орындауда қателік орын алды, бетті жаңартып көріңіз.',
            'owner' => "Өз картаңызды номинаттай алмайсыз.",
            'set_metadata' => 'Номинаттау алдында жанры мен тілін көрсету керексіз.',
        ],
        'resolve' => [
            'not_owner' => 'Талқылауды тек оны бастаушы мен карта иесі шеше алады.',
        ],

        'store' => [
            'mapper_note_wrong_user' => 'Тек карта иесі немесе номинаторы/NAT мүшесі маппер ескертулерін қалдыра алады.',
        ],

        'vote' => [
            'bot' => "Ботпен жасалған талқылауға дауыс бере алмайсыз",
            'limit_exceeded' => 'Көбірек дауыстар беру алдында кішкене күте тұрыңыз',
            'owner' => "Өз талқылауыңызда дауыс бере алмайсыз.",
            'wrong_beatmapset_state' => 'Тек қарастырылып жатқан карталардың талқылауларында ғана дауыс берсе болады.',
        ],
    ],

    'beatmap_discussion_post' => [
        'destroy' => [
            'not_owner' => 'Тек өз хабарламаларыңызды жоя аласыз.',
            'resolved' => 'Шешілген талқылаудағы постты жоя алмайсыз.',
            'system_generated' => 'Автоматты түрде жасалған постты жоюға болмайды.',
        ],

        'edit' => [
            'not_owner' => 'Тек пост авторы ғана постты өзгерте алады.',
            'resolved' => 'Шешілген талқылаудағы постты өзгерте алмайсыз.',
            'system_generated' => 'Автоматты түрде жасалған постты өзгертуге болмайды.',
        ],
    ],

    'beatmapset' => [
        'discussion_locked' => 'Бұл картаның талқылауы жабық.',

        'metadata' => [
            'nominated' => 'Сіз номинацияланған картаның метадеректерін өзгерте алмайсыз. Егер де ол қате орнатылған деп санасаңыз BN немесе NAT мүшесімен байланысқаныңыз жөн.',
        ],
    ],

    'chat' => [
        'blocked' => 'Сізді бұғаттаған немесе сіз бұғаттаған қолданушыға жаза алмайсыз.',
        'friends_only' => 'Қолданушы достары емес адамдардан келетін хабарламаларды бұғаттауда.',
        'moderated' => 'Бұл арна дәл қазір модерациядан өтуде.',
        'no_access' => 'Сізде бұл арнаға кіруге рұқсат жоқ.',
        'no_announce' => '',
        'receive_friends_only' => 'Қолданушы жауап бере алмауы мүмкін себебі сіз тек достарыңыздан ғана хабарламалар қабылдайсыз.',
        'restricted' => 'Сіз бітелген, шектелген немесе бұғатталған кезде хабарламалар жібере алмайсыз.',
        'silenced' => 'Сіз бітелген, шектелген немесе бұғатталған кезде хабарламалар жібере алмайсыз.',
    ],

    'comment' => [
        'store' => [
            'disabled' => 'Пікірлер өшірулі',
        ],
        'update' => [
            'deleted' => "Жойылған постты өзгертуге болмайды.",
        ],
    ],

    'contest' => [
        'judging_not_active' => '',
        'voting_over' => 'Дауыс беру мерзімі біткен соң берілген дауысыңызды өзгерте алмайсыз.',

        'entry' => [
            'limit_reached' => 'Сіз осы сайыстың өтінім саны шегіне жеттіңіз ',
            'over' => 'Өтінімдеріңіз үшін рақмет! Осы сайыс үшін өтінім қабылдау аяқталды және дауыс беру жақын арада ашылады.',
        ],
    ],

    'forum' => [
        'moderate' => [
            'no_permission' => 'Бұл форумды модерациялауға құқыңыз жоқ.',
        ],

        'post' => [
            'delete' => [
                'only_last_post' => 'Тек соңғы пост жойыла алады.',
                'locked' => 'Жабық тақырыптағы постты жою мүмкін емес.',
                'no_forum_access' => 'Сұралған форумға рұқсат қажет.',
                'not_owner' => 'Тек пост авторы постты жоя алады.',
            ],

            'edit' => [
                'deleted' => 'Жойылған постты өзгертуге болмайды.',
                'locked' => 'Пост өзгертуден құлыпталған.',
                'no_forum_access' => 'Сұралған форумға рұқсат қажет.',
                'not_owner' => 'Тек пост авторы ғана постты өзгерте алады.',
                'topic_locked' => 'Жабық тақырыптағы постты өзгерту мүмкін емес.',
            ],

            'store' => [
                'play_more' => 'Форумға жазбастан бұрын ойынды ойнап көріңізші, өтініш! Егер ойынмен мәселелер болатын болса  ол туралы "Көмек және Қолдау" форумына жазып көріңіз.  ',
                'too_many_help_posts' => "Сізге қосымша посттар жасамастан бұрын ойынды ойнау керек. Егер де cізде әлі де ойын ойнаумен мәселелер бар болса, support@ppy.sh поштасына жазыңыз", // FIXME: unhardcode email address.
            ],
        ],

        'topic' => [
            'reply' => [
                'double_post' => 'Өтініш, қайта пост жасағанның орнына соңғы постыңызды өзгертіңіз.',
                'locked' => 'Жабық тақырыпқа жауап беру мүмкін емес.',
                'no_forum_access' => 'Сұралған форумға рұқсат қажет.',
                'no_permission' => 'Жауап беруге құқыңыз жоқ.',

                'user' => [
                    'require_login' => 'Жауап беру үшін аккаунтыңызға кіріңіз.',
                    'restricted' => "Құқыңыз шектеулі кезде жауап бере алмайсыз.",
                    'silenced' => "Бітеулі кезде жауап бере алмайсыз.",
                ],
            ],

            'store' => [
                'no_forum_access' => 'Сұралған форумға рұқсат қажет.',
                'no_permission' => 'Жаңа тақырып құруға құқыңыз жоқ.',
                'forum_closed' => 'Форум жабық және пост қабылдамайды.',
            ],

            'vote' => [
                'no_forum_access' => 'Сұралған форумға рұқсат қажет.',
                'over' => 'Сауалнама аяқталды және онда енді дауыс беруге болмайды.',
                'play_more' => 'Форумда дауыс бермес бұрын көбірек ойнауыңыз керек.',
                'voted' => 'Берілген дауысты өзгертуге тиым салынады.',

                'user' => [
                    'require_login' => 'Дауыс беру үшін аккаунтыңызға кіріңіз.',
                    'restricted' => "Құқыңыз шектеулі кезде дауыс бере алмайсыз.",
                    'silenced' => "Бітеулі кезде дауыс бере алмайсыз.",
                ],
            ],

            'watch' => [
                'no_forum_access' => 'Сұралған форумға рұқсат қажет.',
            ],
        ],

        'topic_cover' => [
            'edit' => [
                'uneditable' => 'Қате мұқаба көрсетілген.',
                'not_owner' => 'Тек автор мұқабаны өзгерте алады.',
            ],
            'store' => [
                'forum_not_allowed' => 'Бұл форум тақырып мұқаба суреттерді қабылдамайды.',
            ],
        ],

        'view' => [
            'admin_only' => 'Бұл форумды тек әкімші көре алады.',
        ],
    ],

    'score' => [
        'pin' => [
            'disabled_type' => "Бұндай рекордты бекітуге болмайды",
            'failed' => "",
            'not_owner' => 'Нәтиже иесі ғана ұпайды бекіте алады.',
            'too_many' => 'Тым көп нәтиже бекітілді.',
        ],
    ],

    'user' => [
        'page' => [
            'edit' => [
                'locked' => 'Пайдаланушы беті жабылған.',
                'not_owner' => 'Тек жеке пайдаланушы бетін өзгертей алады.',
                'require_supporter_tag' => 'osu!қолдаушысы тегі қажет.',
            ],
        ],
        'update_email' => [
            'locked' => '',
        ],
    ],
];
