# Dictionnaire de données

## Tâches (`Tasks`)

|Champ|Type|Spécificités|Description|
|-|-|-|-|
|id|INT|PRIMARY KEY, NOT NULL, AUTO_INCREMENT, UNSIGNED|L'identifiant de notre tâche|
|title|VARCHAR(64)|NOT NULL|Le titre de la tâche|
|status|tinyint(1)|NOT NULL DEFAULT 0|status de la tâche (0 = en cours, 1 = terminer)|
|created_at|TIMESTAMP|NOT NULL DEFAULT CURRENT_TIMESTAMP|date de création de la tâche|
|updated_at|TIMESTAMP|NULL|La date de la dernière mise à jour de la tâche|
|category_id|entity|NOT NULL|La catégorie (autre entité) de la tâche|


## Catégories (`categories`)

|Champ|Type|Spécificités|Description|
|-|-|-|-|
|id|INT|PRIMARY KEY, NOT NULL, UNSIGNED, AUTO_INCREMENT|L'identifiant de la catégorie|
|name|VARCHAR(64)|NOT NULL|Le nom de la catégorie|
|created_at|TIMESTAMP|DEFAULT CURRENT_TIMESTAMP|La date de création de la catégorie|
|updated_at|TIMESTAMP|NULL|La date de la dernière mise à jour de la catégorie|
