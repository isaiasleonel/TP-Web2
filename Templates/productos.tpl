{include file="header.tpl"}

{foreach from=$catalogos item=value}
    <div class="col-12 col-md-8 producto-class">
        <div class="card mb-3">
            <div class="row g-0">
                <div class="col-4 col-lg-auto px-2">
                    <img src="{$value->imagen}" class="img-fluid rounded-start" width="160" alt="...">
                </div>
                <div class="col-8">
                    <div class="card-body">
                        <h5 class="card-title">{$value->nombre}</h5>
                        <p class="card-text">${$value->precio}</p>
                        <button class="btn btn-primary">Sumar al carrito</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{/foreach}}

{include file="footer.tpl"}
