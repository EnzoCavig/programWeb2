<?php
require 'vendor/autoload.php';

// Cria uma instância do Faker
$faker = Faker\Factory::create('pt_BR');
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dados Falsos com Faker</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <div class="container">
        <h1>Dados Falsos Gerados com Faker</h1>
        <table>
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>E-mail</th>
                    <th>Endereço</th>
                    <th>Telefone</th>
                    <th>CPF</th>
                </tr>
            </thead>
            <tbody>
                <?php for ($i = 0; $i < 10; $i++): ?>
                    <tr>
                        <td><?= $faker->name ?></td>
                        <td><?= $faker->email ?></td>
                        <td><?= $faker->address ?></td>
                        <td><?= $faker->phoneNumber ?></td>
                        <td><?= $faker->cpf ?></td>
                    </tr>
                <?php endfor; ?>
            </tbody>
        </table>
    </div>
</body>
</html>