<?php

// Copyright (c) ppy Pty Ltd <contact@ppy.sh>. Licensed under the GNU Affero General Public License v3.0.
// See the LICENCE file in the repository root for full licence text.

return [
    'invalid_ruleset' => 'Le mode de jeu spécifié est invalide.',

    'change_owner' => [
        'too_many' => 'Vous avez ajouté trop de participants à cette beatmap.',
    ],

    'discussion-votes' => [
        'update' => [
            'error' => 'Impossible de modifier le vote',
        ],
    ],

    'discussions' => [
        'allow_kudosu' => 'accorder le kudosu',
        'beatmap_information' => 'Page de la beatmap',
        'delete' => 'supprimer',
        'deleted' => 'Supprimé par :editor :delete_time.',
        'deny_kudosu' => 'refuser le kudosu',
        'edit' => 'éditer',
        'edited' => 'Dernière modification par :editor :update_time',
        'guest' => 'Guest difficulty par :user',
        'kudosu_denied' => 'Le kudosu a été refusé pour ce post.',
        'message_placeholder_deleted_beatmap' => 'Cette difficulté a été supprimée, il n\'est plus possible d\'en discuter.',
        'message_placeholder_locked' => 'La discussion pour cette beatmap a été désactivée.',
        'message_placeholder_silenced' => "Impossible de publier en étant réduit au silence.",
        'message_type_select' => 'Sélectionnez un type de commentaire',
        'reply_notice' => 'Appuyez sur Entrée pour répondre.',
        'reply_resolve_notice' => 'Appuyez sur Entrée pour répondre. Appuyez sur Ctrl+Entrée pour répondre et résoudre.',
        'reply_placeholder' => 'Écrivez votre réponse ici',
        'require-login' => 'Veuillez vous connecter pour poster ou répondre',
        'resolved' => 'Résolu',
        'restore' => 'restaurer',
        'show_deleted' => 'Afficher le contenu supprimé',
        'title' => 'Discussions',
        'unresolved_count' => ':count_delimited problème non résolu|:count_delimited problèmes non résolus',

        'collapse' => [
            'all-collapse' => 'Tout réduire',
            'all-expand' => 'Tout développer ',
        ],

        'empty' => [
            'empty' => 'Aucune discussion pour le moment !',
            'hidden' => 'Aucune discussion ne correspond à vos critères.',
        ],

        'lock' => [
            'button' => [
                'lock' => 'Verrouiller la discussion',
                'unlock' => 'Déverrouiller la discussion',
            ],

            'prompt' => [
                'lock' => 'Raison du verrouillage',
                'unlock' => 'Êtes-vous sûr de vouloir déverrouiller cette discussion ?',
            ],
        ],

        'message_hint' => [
            'in_general' => 'Ce post sera déplacé vers la discussion générale de la beatmap. Pour modder cette beatmap, veuillez indiquer un horodatage (par exemple 00:12:345).',
            'in_timeline' => 'Pour modder plusieurs sections de cette beatmap, faites plusieurs posts (un post pour chaque section).',
        ],

        'message_placeholder' => [
            'general' => 'Écrivez ici pour poster dans Général (:version)',
            'generalAll' => 'Écrivez ici pour poster dans Général (Toutes les difficultés)',
            'review' => 'Écrivez ici pour poster un avis',
            'timeline' => 'Écrivez ici pour poster dans Timeline (:version)',
        ],

        'message_type' => [
            'disqualify' => 'Disqualifier',
            'hype' => 'Hype!',
            'mapper_note' => 'Note',
            'nomination_reset' => 'Réinitialiser la nomination',
            'praise' => 'Compliments',
            'problem' => 'Problème',
            'problem_warning' => 'Signaler un problème',
            'review' => 'Avis',
            'suggestion' => 'Suggestion',
        ],

        'message_type_title' => [
            'disqualify' => 'Poster une disqualification',
            'hype' => 'Poster un hype',
            'mapper_note' => 'Poster une note',
            'nomination_reset' => 'Supprimer toutes les nominations',
            'praise' => 'Poster des compliments',
            'problem' => 'Poster un problème',
            'problem_warning' => 'Poster un problème',
            'review' => 'Poster un avis',
            'suggestion' => 'Poster une suggestion',
        ],

        'mode' => [
            'events' => 'Historique',
            'general' => 'Général :scope',
            'reviews' => 'Avis',
            'timeline' => 'Timeline',
            'scopes' => [
                'general' => 'Cette difficulté',
                'generalAll' => 'Toutes les difficultés',
            ],
        ],

        'new' => [
            'pin' => 'Épingler',
            'timestamp' => 'Horodatage',
            'timestamp_missing' => 'Utilisez la combinaison de touches Ctrl + C en mode édition et collez dans votre message pour ajouter un horodatage !',
            'title' => 'Nouvelle Discussion',
            'unpin' => 'Désépingler',
        ],

        'review' => [
            'new' => 'Nouvel avis',
            'embed' => [
                'delete' => 'Supprimer',
                'missing' => '[DISCUSSION SUPPRIMÉE]',
                'unlink' => 'Dissocier',
                'unsaved' => 'Non sauvegardé',
                'timestamp' => [
                    'all-diff' => 'Les posts sur "Toutes les difficultés" ne peuvent pas être horodatés.',
                    'diff' => 'Si :type commence par un horodatage, il sera affiché sous la timeline.',
                ],
            ],
            'insert-block' => [
                'paragraph' => 'insérer un paragraphe',
                'praise' => 'insérer un compliment',
                'problem' => 'insérer un problème',
                'suggestion' => 'insérer une suggestion',
            ],
        ],

        'show' => [
            'title' => ':title mappée par :mapper',
        ],

        'sort' => [
            'created_at' => 'Date de création',
            'timeline' => 'Timeline',
            'updated_at' => 'Dernière mise à jour',
        ],

        'stats' => [
            'deleted' => 'Supprimé',
            'mapper_notes' => 'Notes',
            'mine' => 'Moi',
            'pending' => 'En attente',
            'praises' => 'Compliments',
            'resolved' => 'Résolu',
            'total' => 'Tout',
        ],

        'status-messages' => [
            'approved' => 'Cette beatmap a été approuvée le :date !',
            'graveyard' => "Cette beatmap n'a pas été modifiée depuis le :date et a donc été placée au cimetière...",
            'loved' => 'Cette beatmap a été ajoutée à la catégorie Loved le :date !',
            'ranked' => 'Cette beatmap a été classée le :date !',
            'wip' => 'Remarque : Cette beatmap a été marquée comme étant en work-in-progress par son créateur.',
        ],

        'votes' => [
            'none' => [
                'down' => 'Pas encore de votes négatifs',
                'up' => 'Pas encore de votes positifs',
            ],
            'latest' => [
                'down' => 'Derniers votes négatifs',
                'up' => 'Derniers votes positifs',
            ],
        ],
    ],

    'hype' => [
        'button' => 'Hyper la beatmap !',
        'button_done' => 'Déjà hypée !',
        'confirm' => "Êtes-vous sûr ? Ceci va utiliser un de vos :n hypes restants et l'action ne peut être annulée.",
        'explanation' => 'Hyper cette beatmap permet de la rendre plus visible pour sa nomination et son classement !',
        'explanation_guest' => 'Connectez-vous et hypez cette beatmap afin de la rendre plus visible pour sa nomination et son classement !',
        'new_time' => "Vous obtiendrez un hype supplémentaire dans :new_time.",
        'remaining' => 'Il vous reste :remaining hypes.',
        'required_text' => 'Hype : :current/:required',
        'section_title' => 'Train de la hype',
        'title' => 'Hype',
    ],

    'feedback' => [
        'button' => 'Laisser un commentaire',
    ],

    'nominations' => [
        'already_nominated' => 'Vous avez déjà nominé cette beatmap.',
        'cannot_nominate' => 'Vous ne pouvez pas nominer les beatmaps de ce mode de jeu.',
        'delete' => 'Supprimer',
        'delete_own_confirm' => 'Êtes-vous sûr ? La beatmap sera supprimée et vous serez redirigé vers votre profil.',
        'delete_other_confirm' => 'Êtes-vous sûr ? La beatmap sera supprimée et vous serez redirigé vers le profil de l\'utilisateur.',
        'disqualification_prompt' => 'Raison de la disqualification ?',
        'disqualified_at' => 'Disqualifiée :time_ago (:reason).',
        'disqualified_no_reason' => 'aucune raison spécifiée',
        'disqualify' => 'Disqualifier',
        'incorrect_state' => 'Une erreur s\'est produite, essayez de rafraîchir la page.',
        'love' => 'Ajouter aux loved',
        'love_choose' => 'Choisissez la difficulté que vous souhaitez ajouter aux loved',
        'love_confirm' => 'Voulez-vous promouvoir cette beatmap à la catégorie Loved ?',
        'nominate' => 'Nominer',
        'nominate_confirm' => 'Nominer cette beatmap ?',
        'nominated_by' => 'nominée par :users',
        'not_enough_hype' => "Il n'y a pas assez de hype.",
        'remove_from_loved' => 'Retirer de la catégorie Loved',
        'remove_from_loved_prompt' => 'Raison pour laquelle cette beatmap a été retirée de la catégorie Loved :',
        'required_text' => 'Nominations : :current/:required',
        'reset_message_deleted' => 'supprimée',
        'title' => 'État de la nomination',
        'unresolved_issues' => 'Il y a encore des problèmes non résolus qui doivent être traités en priorité.',

        'rank_estimate' => [
            '_' => 'Cette beatmap devrait être classée le :date si aucun problème n\'est trouvé. Elle est #:position dans la :queue.',
            'unresolved_problems' => 'Cette beatmap ne peut actuellement pas être classée car :problems ne sont pas résolus.',
            'problems' => 'ces problèmes',
            'on' => 'le :date',
            'queue' => 'file d\'attente de classement',
            'soon' => 'bientôt',
        ],

        'reset_at' => [
            'nomination_reset' => 'Le processus de nomination a été réinitialisé :time_ago par :user avec le nouveau problème :discussion (:message).',
            'disqualify' => 'Disqualifiée :time_ago par :user avec le nouveau problème :discussion (:message).',
        ],

        'reset_confirm' => [
            'disqualify' => 'Êtes-vous sûr ? Cela va disqualifier la beatmap et réinitialiser le processus de nomination.',
            'nomination_reset' => 'Êtes-vous sûr ? Poster un nouveau problème va réinitialiser le processus de nomination.',
            'problem_warning' => 'Êtes-vous sûr de vouloir signaler un problème sur cette beatmap ? Ceci alertera les Beatmap Nominators.',
        ],
    ],

    'listing' => [
        'search' => [
            'prompt' => 'tapez des mots-clés...',
            'login_required' => 'Connectez-vous pour rechercher.',
            'options' => 'Plus de critères de recherche',
            'supporter_filter' => 'Le filtrage par :filters requiert un tag osu!supporter actif',
            'not-found' => 'aucun résultat',
            'not-found-quote' => '... non, rien trouvé.',
            'filters' => [
                'extra' => 'Supplément',
                'general' => 'Général',
                'genre' => 'Genre',
                'language' => 'Langue',
                'mode' => 'Mode',
                'nsfw' => 'Contenu explicite',
                'played' => 'Jouée',
                'rank' => 'Rang Obtenu',
                'status' => 'Catégories',
            ],
            'sorting' => [
                'title' => 'Titre',
                'artist' => 'Artiste',
                'difficulty' => 'Difficulté',
                'favourites' => 'Favoris',
                'updated' => 'Mise à jour',
                'ranked' => 'Classée',
                'rating' => 'Évaluation',
                'plays' => 'Parties',
                'relevance' => 'Pertinence',
                'nominations' => 'Nominations',
            ],
            'supporter_filter_quote' => [
                '_' => 'Le filtrage par :filters requiert un :link actif',
                'link_text' => 'tag osu!supporter',
            ],
        ],
    ],
    'general' => [
        'converts' => 'Inclure les beatmaps converties',
        'featured_artists' => 'Featured Artists',
        'follows' => 'Mappeurs suivis',
        'recommended' => 'Difficulté recommandée',
        'spotlights' => 'Beatmaps spotlights',
    ],
    'mode' => [
        'all' => 'Tous',
        'any' => 'Tous',
        'osu' => '',
        'taiko' => '',
        'fruits' => '',
        'mania' => '',
        'undefined' => 'non défini',
    ],
    'status' => [
        'any' => 'Toutes',
        'approved' => 'Approuvée',
        'favourites' => 'Favoris',
        'graveyard' => 'Cimetière',
        'leaderboard' => 'Avec un classement',
        'loved' => 'Loved',
        'mine' => 'Mes maps',
        'pending' => 'En attente',
        'wip' => 'WIP',
        'qualified' => 'Qualifiée',
        'ranked' => 'Classée',
    ],
    'genre' => [
        'any' => 'Tous',
        'unspecified' => 'Non spécifié',
        'video-game' => 'Jeu vidéo',
        'anime' => 'Anime',
        'rock' => 'Rock',
        'pop' => 'Pop',
        'other' => 'Autre',
        'novelty' => 'Novelty',
        'hip-hop' => 'Hip Hop',
        'electronic' => 'Électronique',
        'metal' => 'Métal',
        'classical' => 'Classique',
        'folk' => 'Folk',
        'jazz' => 'Jazz',
    ],
    'language' => [
        'any' => 'Toutes',
        'english' => 'Anglais',
        'chinese' => 'Chinois',
        'french' => 'Français',
        'german' => 'Allemand',
        'italian' => 'Italien',
        'japanese' => 'Japonais',
        'korean' => 'Coréen',
        'spanish' => 'Espagnol',
        'swedish' => 'Suédois',
        'russian' => 'Russe',
        'polish' => 'Polonais',
        'instrumental' => 'Instrumentale',
        'other' => 'Autre',
        'unspecified' => 'Non spécifiée',
    ],

    'nsfw' => [
        'exclude' => 'Masquer',
        'include' => 'Afficher',
    ],

    'played' => [
        'any' => 'Toutes',
        'played' => 'Jouée',
        'unplayed' => 'Non jouée',
    ],
    'extra' => [
        'video' => 'Avec vidéo',
        'storyboard' => 'Avec storyboard',
    ],
    'rank' => [
        'any' => 'Tous',
        'XH' => 'SS d\'argent',
        'X' => '',
        'SH' => 'S d\'argent',
        'S' => '',
        'A' => '',
        'B' => '',
        'C' => '',
        'D' => '',
    ],
    'panel' => [
        'playcount' => 'Nombre de parties : :count',
        'favourites' => 'Favorites : :count',
    ],
    'variant' => [
        'mania' => [
            '4k' => '4K',
            '7k' => '7K',
            'all' => 'Tous',
        ],
    ],
];
