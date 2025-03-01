<?php

// Carrega o autoload do Composer
require 'vendor/autoload.php';

// Cria uma instância do Faker
$faker = Faker\Factory::create('pt_BR'); // Usando localização em português do Brasil

// Gera dados falsos
echo "Nome: " . $faker->name . "\n";
echo "E-mail: " . $faker->email . "\n";
echo "Endereço: " . $faker->address . "\n";
echo "Texto: " . $faker->text . "\n";
echo "Data: " . $faker->date('d/m/Y') . "\n";
echo "CPF: " . $faker->cpf . "\n";