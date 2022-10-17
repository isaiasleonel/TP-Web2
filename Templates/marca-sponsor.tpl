{include 'header.tpl'}
<!-- Example Code -->

<div class="row row-cols-1 row-cols-md-4 g-3">
    {foreach  from= $marcas item=marca}
        <div class="col">
            <div class="card h-100">
                <img src="{$marca->img}" class="card-img-top" width="100" height="140" alt="...">

                <div class="card-body">
                    <h5 class="card-title">{$marca->marca_fk}</h5>
                </div>
            </div>
        </div>
    {/foreach}

</div>

{include file='footer.tpl'}