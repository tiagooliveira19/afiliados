<div id="form-content">

    <div class="col-md-12 mt-3 w-90 cabecalho display-flex">
        <div class="col-md-6">
            <label class="cabecalho-label">Transações</label>
        </div>

        <div class="col-md-4"></div>

        <div class="col-md-2">
            <button class="btn btn-primary" type="button" id="sign-out">Sair</button>
        </div>
    </div>

    <div class="col-md-12 ml-45 mt-5 display-flex" id="div-upload">
        <div class="col-md-3">
            <input class="form-control" type="file" id="upload-file" placeholder="Selecione o arquivo">
        </div>

        <div class="col-md-3 ml-10">
            <button class="btn btn-primary" type="button" id="load-file">Carregar arquivo</button>
        </div>

        <div class="col-md-6"></div>
    </div>

    <div class="col-md-12 mt-4 div-info">
        <p><span id="total-itens">0</span> registro(s) disponíveis em nossa base de dados:</p>

        <div class="col-md-11 margin-auto mt-5">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Tipo</th>
                        <th>Data</th>
                        <th>Produto</th>
                        <th>Valor</th>
                        <th>Vendedor</th>
                    </tr>
                </thead>
                <tbody id="table-body">
                    <tr class="txt-center">
                        <td colspan="7">Nenhum registro encontrado!</td>
                    </tr>
                </tbody>
            </table>
        </div>

        <input type="hidden" id="current-page" value="">

        <div class="col-md-10 mt-4 mb-4 display-flex hidden" id="div-pagination">
            <div class="col-md-3"></div>
            <div class="col-md-4 txt-center margin-auto">
                <span class="arrow-pagination" id="previous" title="Anterior">
                    <i class="fa-solid fa-chevron-left"></i>
                </span>
                <span id="page-number">1</span>
                <span class="arrow-pagination" id="next" title="Próxima">
                    <i class="fa-solid fa-chevron-right"></i>
                </span>
            </div>
            <div class="col-md-3 txt-end">
                <b>Valor Total:</b> <span id="total-value"></span>
            </div>
        </div>
    </div>
</div>
