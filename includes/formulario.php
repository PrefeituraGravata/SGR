<h2 class="sgr">SGR</h2>

    <form method="post">
        <div class="box">
            <h2>Editar</h2><br>
            <span>Ramal:</span>
            <input id="ramal" type="text" required placeholder="Digite o Número do Ramal..." name="num_ramal" value="<?=$obRamal->num_ramal?>"><br>
            <span>Localização:</span>
            <input id="local" type="text" required placeholder="Digite a Localização do Equipamento..." name="loc_ramal" value="<?=$obRamal->loc_ramal?>"><br>
            <input id="botao" type="submit" value="Editar">
        </div>
    </form><br>

