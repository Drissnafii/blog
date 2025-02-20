<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajouter un article</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">
    <div class="card shadow-lg p-4">
        <h2 class="text-center mb-4">Ajouter un Article</h2>
        
        <form action="/articles/store" method="POST">
            <!-- Token CSRF (sécurité Laravel) -->
            <input type="hidden" name="_token" value="{{ csrf_token() }}">

            <!-- Titre de l'article -->
            <div class="mb-3">
                <label for="title" class="form-label">Titre de l'article</label>
                <input type="text" class="form-control" id="title" name="title" placeholder="Entrez le titre" required>
            </div>

            <!-- Contenu de l'article -->
            <div class="mb-3">
                <label for="content" class="form-label">Contenu</label>
                <textarea class="form-control" id="content" name="content" rows="5" placeholder="Rédigez votre article..." required></textarea>
            </div>

            <!-- Sélection de la catégorie -->
            <div class="mb-3">
                <label for="category" class="form-label">Catégorie</label>
                <select class="form-select" id="category" name="category_id" required>
                    <option value="" selected disabled>Choisir une catégorie</option>
                    <!-- Boucle Laravel pour afficher les catégories -->
                    @foreach($categorys as $category)
                        <option value="<?php $category['id']  ?>"><?php $category['name']  ?></option>
                    @endforeach
                </select>
            </div>

            <!-- Bouton de soumission -->
            <button type="submit" class="btn btn-primary w-100">Ajouter l'article</button>
        </form>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
