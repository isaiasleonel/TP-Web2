{include file="header.tpl"}

        <h1>WorldGammer</h1>
        <h2>Nuestros productos</h2>
        <h3>Categoria</h3>
        <!-- ---------- START MAIN APP ---------- -->
        <section class="container">
            <div class="row">
                <!-- ---------- Row 1: START ACCORDION CATEGORY ---------- -->
                <div class="col-12 col-md-4 mb-4">
        {include file="aside-home.tpl"}
                </div>
                <!-- ---------- Row 2: START CARD PRODUCTS ---------- -->
                <div class="col-12 col-md-8 producto-class">
                    {foreach from=$productos item=newBD}
                        <div class="card mb-3">
                            <div class="row g-0">
                                <div class="col-4 col-lg-auto px-2">
                                    <img src="{$newBD->imagen}" class="img-fluid rounded-start" width="160" alt="...">
                                </div>
                                <div class="col-8">
                                    <div class="card-body">
                                        <h5 class="card-title">{$newBD->nombre}</h5>
                                        <p class="card-text">${$newBD->precio}</p>
                                        <button class="btn btn-primary">Sumar al carrito</button>
                                        <a type="" class="btn btn-primary">Editar</a>
                                        <a type="button" class="btn btn-primary">Eliminar</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{/foreach}}
                </div>
                <!-- ---------- END CARD PRODUCTS ---------- -->
            </div>
        </section>
        
        {include file="footer.tpl"}



