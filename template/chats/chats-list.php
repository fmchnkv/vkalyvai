<?
$cardsData = isset($_GET['client'])
    ? [
        [
            'title' => 'Иванов Иван Иванович',
            'card_states' => 'active no-viewed user-online approved new-messages',
            'subtitle' => 'Название вакансии',
            'state_text' => 'Отклик на вакансию',
            'messages_count' => 2,
            'attributes' => 'data-sorted="approve" data-viewed="no-viewed"'
        ],
        [
            'title' => 'Иванов Иван Иванович',
            'card_states' => 'viewed reject new-messages user-online',
            'subtitle' => 'Название вакансии',
            'state_text' => 'Отказ',
            'messages_count' => 1,
            'attributes' => 'data-sorted="reject" data-viewed="viewed"'
        ],
        [
            'title' => 'Иванов Иван Иванович',
            'card_states' => 'viewed user-online approved',
            'subtitle' => 'Название вакансии',
            'state_text' => 'Отклик на вакансию',
            'messages_count' => 0,
            'attributes' => 'data-sorted="approve" data-viewed="viewed"'
        ],
        [
            'title' => 'Иванов Иван Иванович',
            'card_states' => 'viewed reject',
            'subtitle' => 'Название вакансии',
            'state_text' => 'Отказ',
            'messages_count' => 0,
            'attributes' => 'data-sorted="reject" data-viewed="viewed"'
        ],
        [
            'title' => 'Иванов Иван Иванович',
            'card_states' => 'no-viewed user-online approved user-online',
            'subtitle' => 'Название вакансии',
            'state_text' => 'Отклик на вакансию',
            'messages_count' => 0,
            'attributes' => 'data-sorted="approve" data-viewed="no-viewed"'
        ],
    ]
    : (isset($_GET['moderator'])
        ? [
            [
                'title' => 'Имя пользователя',
                'card_states' => 'active no-viewed user-online new-messages',
                'subtitle' => 'Статус(соискатель/компания)',
                'state_text' => 'Тема обращения',
                'messages_count' => 1,
                'attributes' => 'data-viewed="no-viewed"'
            ],
            [
                'title' => 'Имя пользователя',
                'card_states' => 'viewed new-messages user-online',
                'subtitle' => 'Статус(соискатель/компания)',
                'state_text' => 'Тема обращения',
                'messages_count' => 1,
                'attributes' => 'data-viewed="viewed"'
            ],
            [
                'title' => 'Имя пользователя',
                'card_states' => 'viewed user-online',
                'subtitle' => 'Статус(соискатель/компания)',
                'state_text' => 'Тема обращения',
                'messages_count' => 0,
                'attributes' => 'data-viewed="viewed"'
            ],
            [
                'title' => 'Имя пользователя',
                'card_states' => 'no-viewed',
                'subtitle' => 'Статус(соискатель/компания)',
                'state_text' => 'Тема обращения',
                'messages_count' => 0,
                'attributes' => 'data-viewed="no-viewed"'
            ],
            [
                'title' => 'Имя пользователя',
                'card_states' => 'no-viewed',
                'subtitle' => 'Статус(соискатель/компания)',
                'state_text' => 'Тема обращения',
                'messages_count' => 0,
                'attributes' => 'data-viewed="no-viewed"'
            ],
        ]
        : [
            [
                'title' => 'Название вакансии',
                'card_states' => 'active no-viewed user-online approved new-messages',
                'subtitle' => 'Название компании',
                'state_text' => 'Приглашение',
                'messages_count' => 1,
                'attributes' => 'data-sorted="approve" data-viewed="no-viewed"'
            ],
            [
                'title' => 'Название вакансии',
                'card_states' => 'viewed new-messages reject user-online',
                'subtitle' => 'Название компании',
                'state_text' => 'Отказ',
                'messages_count' => 1,
                'attributes' => 'data-sorted="reject" data-viewed="viewed"'
            ],
            [
                'title' => 'Название вакансии',
                'card_states' => 'viewed user-online approved',
                'subtitle' => 'Название компании',
                'state_text' => 'Приглашение',
                'messages_count' => 0,
                'attributes' => 'data-sorted="approve" data-viewed="viewed"'
            ],
            [
                'title' => 'Название вакансии',
                'card_states' => 'no-viewed approved',
                'subtitle' => 'Название компании',
                'state_text' => 'Приглашение',
                'messages_count' => 0,
                'attributes' => 'data-sorted="approve" data-viewed="no-viewed"'
            ],
            [
                'title' => 'Название вакансии',
                'card_states' => 'no-viewed reject',
                'subtitle' => 'Название компании',
                'state_text' => 'Отказ',
                'messages_count' => 0,
                'attributes' => 'data-sorted="reject" data-viewed="no-viewed"'
            ],
            [
                'title' => 'Название вакансии',
                'card_states' => 'no-viewed reject',
                'subtitle' => 'Название компании',
                'state_text' => 'Отказ',
                'messages_count' => 0,
                'attributes' => 'data-sorted="reject" data-viewed="no-viewed"'
            ],
            [
                'title' => 'Название вакансии',
                'card_states' => 'no-viewed reject',
                'subtitle' => 'Название компании',
                'state_text' => 'Отказ',
                'messages_count' => 0,
                'attributes' => 'data-sorted="reject" data-viewed="no-viewed"'
            ],
            [
                'title' => 'Название вакансии',
                'card_states' => 'no-viewed reject',
                'subtitle' => 'Название компании',
                'state_text' => 'Отказ',
                'messages_count' => 0,
                'attributes' => 'data-sorted="reject" data-viewed="no-viewed"'
            ],
            [
                'title' => 'Название вакансии',
                'card_states' => 'no-viewed reject',
                'subtitle' => 'Название компании',
                'state_text' => 'Отказ',
                'messages_count' => 0,
                'attributes' => 'data-sorted="reject" data-viewed="no-viewed"'
            ],
            [
                'title' => 'Название вакансии',
                'card_states' => 'no-viewed reject',
                'subtitle' => 'Название компании',
                'state_text' => 'Отказ',
                'messages_count' => 0,
                'attributes' => 'data-sorted="reject" data-viewed="no-viewed"'
            ],
            [
                'title' => 'Название вакансии',
                'card_states' => 'no-viewed reject',
                'subtitle' => 'Название компании',
                'state_text' => 'Отказ',
                'messages_count' => 0,
                'attributes' => 'data-sorted="reject" data-viewed="no-viewed"'
            ],
        ]);
?>
<div class="chats-list">
    <? foreach($cardsData as $card): ?>
    <div class="chats-card <?= $card['card_states']; ?>" <?= $card['attributes']; ?>>
        <div class="chats-card__wrapper grid">
            <div class="chats-card__img avatar">
                <img src="/images/avatar_rezume.png" alt="">
            </div>
            <div class="chats-card__body">
                <span class="h4"><?= $card['title'] ?></span>
                <p><?= $card['subtitle'] ?></p>
                <span><?= $card['state_text'] ?></span>
            </div>
            <div class="chats-card__props">
                <div class="chats-card__props-header">
                    <span class="time">17:01</span>
                    <div class="message-state">
                        <? if(str_contains($card['card_states'], 'viewed')):
                                echo `<svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M2.31836 5.83691L4.5459 8.06543L3.91016 8.70117L1.04688 5.83691L1.68262 5.20117L2.31836 5.83691ZM10.8994 4.25488L6.45312 8.70117L3.58887 5.83691L4.22559 5.20117L5.18164 6.15723L5.81738 6.79199L6.45312 7.42871L10.2627 3.61816L10.8994 4.25488ZM8.68164 3.92578L6.45312 6.1543L5.81836 5.52051L8.04688 3.29102L8.68164 3.92578Z" fill="#FC7827"/></svg>`;
                            else :
                                echo `<svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg"><g><path d="M9.00957 3.52532C9.20478 3.33006 9.52131 3.33015 9.7166 3.52532C9.91152 3.72059 9.91172 4.03719 9.7166 4.23235L5.47441 8.47551C5.38075 8.56897 5.25322 8.62193 5.1209 8.622C4.9886 8.62189 4.86102 8.56896 4.76738 8.47551L2.64629 6.35344C2.45127 6.15821 2.45121 5.84162 2.64629 5.64641C2.8415 5.45142 3.15811 5.45142 3.35332 5.64641L5.1209 7.41399L9.00957 3.52532Z" fill="#FC7827"/></g></svg>`;
                            endif;
                        ?>
                    </div>
                </div>
                <? if($card['messages_count'] > 0): ?>
                    <div class="message-count"><?= $card['messages_count']; ?></div>
                <? endif; ?>
            </div>
        </div>
    </div>
    <? endforeach; ?>
</div>