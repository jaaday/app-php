<main>

    <h2>Envio de Currículo</h2>

    <form action="post">
        <div class="form-group">
            <label for="nome-completo">Nome Completo</label>
            <input type="text" class="form-control" name="nome-completo">
        </div>

        <div class="form-group">
            <label for="e-mail">E-mail</label>
            <input type="text" class="form-control" name="e-mail">
        </div>

        <div class="form-group">
            <label for="observacao">Observação</label>
            <textarea class="form-control" name="observacao" rows="5"></textarea>
        </div>

        <div class="form-group">
            <label for="escolaridade">Nível Escolar:</label><br>
            <select name="escolaridade" id="escolaridade" class="form-select" >
                <option value="Ensino Fundamental">Ensino Fundamental</option>
                <option value="Ensino Médio">Ensino Médio</option>
                <option value="Nível Técnico">Nível Técnico</option>
                <option value="Nível Superior">Nível Superior</option>
            </select>
        </div>

    </form>

    <hr>

    <section>
        <a href="cadastrar.php">
            <button class="btn btn-success">Enviar Currículo</button>
        </a>
    </section>

</main>