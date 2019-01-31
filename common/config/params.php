<?php
return [
    'story' => [
        '文学' => [
            'jpm' => '金学',
        ],
        '历史' => [
            'china_history' => '中国历史',
            'world_history' => '世界历史',
            'hougong' => '后宫',
        ],
        '爱情' => [
            'city' => '都市生活',
            'classic' => '经典爱情',
            'chulian' => '初恋',
            'love_school' => '校园爱情',
            'wangluoaiqing' => '网络爱情',
            'qingsongzhai' => '菜根文学',
        ],
        '哲理' => [
            'chanli' => '禅理',
            'yuyan' => '寓言',
            'zhihui' => '智慧',
        ],
        '民间' => [
            'china_folk' => '中国民间',
            'foreign_folk' => '国外民间',
        ],

        '名人' => [
            'china_famous' => '中国名人',
            'foreign_famous' => '国外名人',
        ],
        '创业' => [
            'famous_chuangye' => '名人创业',
            'folk_chuangye' => '乡村创业',
            'daxueshengchuangye' => '大学生创业',
            'nvxing_chuangye' => '女性创业',
        ],

        '职场' => ['renwu' => '人物',],
    ],
    'story_categories' => [
        ['label' => '菜根文学', 'url' => ['small-story/index', 'category' => 'qingsongzhai']],
        ['label' => '金学', 'url' => ['small-story/index', 'category' => 'jpm']],
//        ['label' => '看电影', 'url' => 'https://www.52film.top', 'linkOptions'=>['target' => '_blank']],
        ['label' => '历史', 'url' => ['small-story/index', 'category' => 'china_history,world_history,hougong']],
        ['label' => '爱情', 'url' => ['small-story/index', 'category' => 'city,classic,chulian,love_school,wangluoaiqing']],
        ['label' => '哲理', 'url' => ['small-story/index', 'category' => 'chanli,yuyan,zhihui']],
        ['label' => '民间', 'url' => ['small-story/index', 'category' => 'china_folk,foreign_folk']],
        ['label' => '名人', 'url' => ['small-story/index', 'category' => 'china_famous,foreign_famous']],
        ['label' => '创业', 'url' => ['small-story/index', 'category' => 'famous_chuangye,folk_chuangye,daxueshengchuangye,nvxing_chuangye']],
        ['label' => '职场', 'url' => ['small-story/index', 'category' => 'renwu']],
    ],
    'user.passwordResetTokenExpire' => 3600,
];
