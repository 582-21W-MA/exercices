# Note sur l'organisation du dépôt

C'est une bonne pratique de séparer le code source du code généré
par le moteur de gabarit. Ici, le code source se trouve dans le
répertoire `src` tandis que le code généré est dans `site`. Le site
Web est servi à partir du répertoire `site` (c'est sa racine), mais
nous ne modifions jamais *directement* le code qu'il contient, car
celui-ci est écrasé à chaque fois que le code source est mis à jour.

Les répertoires `_data` et `_partials` sont préfixés d'un tiret bas
pour indiquer qu'ils contiennent des fichiers nécessaires pour
générer le site Web, mais qui ne se retrouveront pas dans le
répertoire `site`.

Le répertoire `assets` contient les ressources de notre site Web :
les feuilles de style, les fontes, les images, etc. Techniquement,
Mustache ne touche pas à ces fichiers, mais afin de faciliter
l'écriture des chemins d'accès, le répertoire`assets` est placé
dans `src` et copié dans `site` lorsque le site Web est généré. De
cette façon, le chemin vers `style.css` à partir de `index.mustache`
est le même que à partir de `index.html`.

La commande utilisée pour générer le site à partir de la racine du
répertoire `solution` est la suivante :

```sh
mustache "src/_data/data.json" "src/index.mustache" > "site/index.html" &&
cp -r "src/assets" "site/assets"
```