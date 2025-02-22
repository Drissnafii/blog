<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login & Register</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
        }
        .form-container {
            max-width: 400px;
            margin: 50px auto;
            padding: 20px;
            background: white;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .form-toggle {
            cursor: pointer;
            color: #007bff;
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="form-container">
        <h3 class="text-center" id="formTitle" >Connexion</h3>
        <form method="post"  id="authForm">
        <div id="extraFields" class="d-none">
                <div class="mb-3">
                    <label for="username" class="form-label">Nom d'utilisateur</label>
                    <input name="name" type="text" class="form-control" id="username">
                </div>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input  name="email" type="email" class="form-control" id="email" required>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Mot de passe</label>
                <input  name="password" type="password" class="form-control" id="password" required>
            </div>
         
            <button  name="submit" type="submit" class="btn btn-primary w-100">Se connecter</button>
        </form>
        <p class="text-center mt-3">
            <span id="toggleText">Pas encore de compte ?</span> 
            <span class="form-toggle" onclick="toggleForm()">S'inscrire</span>
        </p>
    </div>

    <script>
        function toggleForm() {
            const formTitle = document.getElementById('formTitle');
            const extraFields = document.getElementById('extraFields');
            const authForm = document.getElementById('authForm');
            const submitButton = authForm.querySelector('button');
            const toggleText = document.getElementById('toggleText');
            const toggleLink = document.querySelector('.form-toggle');

            if (formTitle.textContent === 'Connexion') {
                formTitle.textContent = 'Inscription';
                extraFields.classList.remove('d-none');
                submitButton.textContent = "S'inscrire";
                toggleText.textContent = "Déjà un compte ?";
                toggleLink.textContent = "Se connecter";
                authForm.setAttribute("action","/addUsers")

            } else {
                formTitle.textContent = 'Connexion';
                extraFields.classList.add('d-none');
                submitButton.textContent = "Se connecter";
                toggleText.textContent = "Pas encore de compte ?";
                toggleLink.textContent = "S'inscrire";
                authForm.setAttribute("action","/")

            }
        }
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
