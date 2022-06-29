<section>
    <a href="indexProdutos.php">
        <button class="btn btn-success"> Voltar </button>
    </a>

    <h2 class="mt-3"><?php echo TITLE;?> </h2>

    <form method="POST" class="form-send">
        <div class="form-group">
            <label> Nome </label>
            <input type="text" required class="form-control" name="nome" value="<?php echo isset($obNoticia->nome) ? $obNoticia->nome : ''; ?>">
        </div>

        <div class="form-group">
            <label> Descrição </label>
            <textarea class="form-control" required name="descricao" rows="5"><?php echo isset($obNoticia->descricao) ? $obNoticia->descricao : ''; ?> </textarea>
        </div>

        <div class="form-group">
            <label> Data Compra </label>
            <input type="date" required class="form-control" name="data_compra" value="<?php echo isset($obNoticia->data_compra) ? date('Y-m-d', strtotime($obNoticia->data_compra)) : ''; ?>">        
        </div>

        <div class="form-group">
            <label> Nota Fiscal </label>
            <input type="number"  id="estiloInput" required class="form-control" name="nota_fiscal" value="<?php echo isset($obNoticia->nota_fiscal) ? $obNoticia->nota_fiscal : ''; ?>">
        </div>

        <div class="form-group">
            <label> Preço </label>
            <input type="number"  id="estiloInput" required class="form-control" name="preco" value="<?php echo isset($obNoticia->preco) ? $obNoticia->preco : ''; ?>">
        </div>

        <div class="form-group">
            <label> Quantidade </label>
            <input type="number"  id="estiloInput" required class="form-control" name="quantidade" value="<?php echo isset($obNoticia->quantidade) ? $obNoticia->quantidade : ''; ?>">
        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-success"> Enviar </button>
        </div>

    </form>
</section>