<form action="/" method="post">
    {foreach from=$form_rows item=row}
        {if file_exists("app/views/{$row['field_type']}.tpl")}
            <div class="{($row['field_type'] != 'submit') ? 'form-row-input' : ''}">
                {include file="{$row['field_type']}.tpl"}
            </div>
        {/if}
    {/foreach}
</form>