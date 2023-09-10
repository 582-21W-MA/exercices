# TP3 : Intégration Web

Énoncé : cours 16 \
Remise : cours 23 \
Pondération : 20%

Pour le troisième travail pratique, vous devez adapter la maquette graphique réalisée pour le TP2 en utilisant une approche modulaire. Vous pouvez utiliser soit PHP, soit le générateur de sites statiques de votre choix ([Eleventy](https://www.11ty.dev), [Hugo](https://gohugo.io), etc.). Une attention particulière sera portée à la qualité et l’organisation de votre code.

## Consignes

- Le site Web doit inclure les 2 pages sur lesquelles vous avez travaillées pour le TP2. Il est probable que des liens mènent nul part, mais il doit être possible de naviguer entre ces 2 pages.
- L’interface doit être séparée en composants définis dans des fichiers distincts (`header.php`, `footer.njk`, `card.html`, etc.).
- Les feuilles de styles doivent être organisées selon la page ou le composant auquel elles appartiennent.
- Vous devez faire l’utilisation des propriétés personnalisés CSS `var()` et de la règle `@font-face`.
- Le site Web doit être conçu de façon à pouvoir s’adapter à différentes tailles.
- Si absolument nécessaire, vous pouvez utiliser Javascript. Dans ce cas, votre site Web doit intégrer l’amélioration progressive et la dégradation élégante.

## Remise

La remise se fera à travers GitHub Classroom. Voici les instructions :

1. Acceptez l’évaluation à l’adresse suivante : https://classroom.github.com/a/gOM0wYmw
2. Un dépôt sera automatiquement créé pour vous. Clonez celui-ci sur votre ordinateur.
3. Une fois terminé, soumettez votre travail en poussant vos *commits* sur le dépôt distant « *origin* ».

## Code fourni

Si vous choisissez d’utiliser Eleventy, celui-ci est pré-configuré de sorte à traiter seulement les *templates* qui se trouvent dans le dossier « src ». Les dossiers « _includes » et « _data » doivent également être placés sous « src ». Tous les fichiers qui se trouvent dans le dossier « assets » seront copiés tel quel.

Comme le répertoire est déjà initialisé avec NPM, il suffit d’exécuter la commande `npm install` pour installer Eleventy.

## Rubrique d’évaluation

### Respect des consignes `5`

- [ ] Les consignes sont respectées.

### Organisation du projet `5`

- [ ] Les fichiers sont séparés et organisés selon leur type (feuille de style, fonte, image, composant, etc.).
- [ ] Les fichiers sont clairement nommés.
- [ ] Chaque ensemble de modifications logiquement distinct est enregistré avec Git, de sorte à créer un historique clair du travail accompli.
- [ ] Les messages de validation Git sont descriptifs et suivent la formule recommandée.

### Qualité du code `10`

- [ ] Le programme ne contient pas de code mort.
- [ ] Le nom des variables est descriptif.
- [ ] L’utilisation des espaces et des indentations est ordonnée et cohérente[^1].
- [ ] Le code est bien organisé ; l’espace blanc est utilisé pour regrouper visuellement la logique, et les lignes denses ou complexes sont brièvement expliquées
- [ ] Le code est *DRY* ; il ne se répète pas inutilement.
- [ ] Le site Web est décomposé en morceaux logiques qui peuvent être facilement composés.
- [ ] Le balisage HTML est sémantique et syntaxiquement correct.
- [ ] Les bons sélecteurs CSS sont utilisés, et les feuilles de styles sont écrites de sorte à faciliter leur maintient[^2].

[^1]: Il est recommandé, quoique facultatif, d’utiliser [Prettier](https://prettier.io) pour formatter votre code.

[^2]: Il est recommandé, quoique facultatif, de suivre la méthodologie [BEM](https://getbem.com) pour bien organiser vos règles CSS.
