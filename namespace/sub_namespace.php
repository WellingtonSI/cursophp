<?php namespace App; ?>

<div class="titulo">Sub-Namespaces</div>

<?php
echo __NAMESPACE__.'<br>';
const constante = 125;

namespace App\Principal;
echo __NAMESPACE__.'<br>';
const constante = 200;

namespace App\Principal\Especifico;
echo __NAMESPACE__.'<br>';
const constante = 666;

echo constante . '<br>';
echo constant('\\'.__NAMESPACE__.'\constante'). '<br>';
echo \App\constante . '<br>';
echo \App\Principal\constante . '<br>';
echo \App\Principal\Especifico\constante . '<br>';