<?php
$mensagem = '';
if (isset($_GET['status'])) {
    switch ($_GET['status']) {
        case 'success':
            $mensagem = '<div class="alert alert-success">Ação executada com sucesso!</div>';
            break;
        case 'error':
            $mensagem = '<div class="alert alert-danger">Ação não executada!</div>';
            break;
        default:
            # code...
            break;
    }
}
?>

<?php if ($mensagem != '') { ?>
    <section>
        <?php echo $mensagem; ?>
    </section>
<?php } ?>

<section>
    <a href="cadastrar">
        <button class="btn btn-success"> Cadastrar </button>
    </a>

    <?php if (count($Noticia) == 0) { ?>
        <div class="alert alert-secondary mt-3"> Nenhuma Vaga Encontrada </div>

    <?php } else { ?>

        <form method="get">

            <div class="row my-4">


                <div class="col">

                    <input type="text" placeholder="Buscar por nome!" name="busca" class="form-control" value="<?= $busca ?>">

                </div>

                <div class="col d-flex align-itens-end">

                    <button type="submit" class="btn btn-primary"> Filtrar </button>

                </div>

            </div>

        </form>


        <div class='card-deck row' style="margin-top: 5%">
            <?php foreach ($Noticia as $key => $value) { ?>
                <div class="col-12 col-xl-3 item item-selecionado-<?php echo $value->id; ?>">
                    <div class='card mb-4 botoes'>
                        <img src='assets/image/naruto.jpg' class="card-img-top">
                        <div class='card-body'>
                            <h5 class='card-title'><?php echo $value->titulo; ?></h5>
                            <p class='card-text'><?php echo $value->id; ?></p>
                            <p class='card-text'><?php echo $value->descricao; ?></p>
                            <p class='card-text'><?php echo $value->autor; ?></p>
                            <p class='card-text'><?php echo ($value->status == 's' ? 'Ativo' : 'Inativo'); ?></p>
                            <?php echo $value->data ?></td>
                            <div class="row mt-3">
                                <div class="col-4">
                                    <a href="editar.php?id=<?php echo $value->id; ?>">
                                        <button type='button' class='btn btn-success botoes'>Editar</button>
                                    </a>
                                </div>

                                <div class="col-4">

                                    <a href="excluir.php?id=<?php echo $value->id; ?>">
                                        <button type='button' class='btn btn-danger botoes'>Excluir</button>
                                    </a>
                                </div>
                                
                                <div class="col-4">

                                    <a href="">
                                        <button type='button' class='btn btn-success botoes'>Comprar</button>
                                    </a>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>

    <?php } ?>

</section>