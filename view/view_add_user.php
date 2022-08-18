<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./asset/style/style.css">
    <link href='http://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
    <title>Ajouter un utilisateur</title>
</head>
<body>
    <h3>Ajouter un utilisateur:</h3>
    <form action="" method="post">
        <p>Saisir un nom :</p>
        <p><input type="text" name="name_util"></p>
        <p>Saisir un prénom :</p>
        <p><input type="text" name="first_name_util"></p>
        <p>Saisir un mail :</p>
        <p><input type="email" name="mail_util"pattern="[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{1,63}$" 
        name="email" required></p>
        <p>Saisir un password :</p>
        <p><input type="password" name="pwd_util" required></p>
        <p>Admin (cocher):</p>
        <input type="checkbox" name="id_role">
        <p><input type="submit" value="Ajouter" name="addUser"></p>
    </form>
</body>
</html>