<section class="orcamento">
<div class="container">
    <h2 class="subtitulo">Budget</h2>
    <form action="<?php  echo get_template_directory_uri();?>/enviar.php" method="post" name="form" class="formphp form grid-8">
        <label for="nome">Name:</label>
        <input id="nome" name="nome" type="text">
        <label for="email">E-mail</label>
        <input id="email" name="email" type="text">
        <label for="telefone">Phone</label>
        <input id="telefone" name="telefone" type="text">

        <label class="nao-aparece">Se você não é um robô, deixe em branco.</label>
        <input type="text" class="nao-aparece" name="leaveblank">
        <label class="nao-aparece">Se você não é um robô, não mude este campo.</label>
        <input type="text" class="nao-aparece" name="dontchange" value="http://">

        <label for="mensagem">Specifications</label>
        <textarea name="mensagem" id="mensagem"></textarea>

        <button id="enviar" name="enviar" type="submit" class="btn">Send</button>
    </form>
    <?php 
    $contact = get_page_by_title('contact');
    $products = get_page_by_title('products');
    ?>
    <div class="orcamento_dados grid-8">
        <h3>Info</h3>
        <span><?php the_field('phone_number', $contact); ?></span>
        <span><?php the_field('email', $contact); ?></span>
        <h3>Build your Bikcraft</h3>
        <p>Customize your bike</p>
        <?php the_field('items_budget', $products); ?>
    </div>
</div>
</section>