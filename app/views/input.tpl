<label for="{$row['field_name']}">
    {$row['field_label']}{if $row['required'] == 1}<span> *</span>{/if}
    <input type="text" name="{$row['field_name']}" placeholder="{$row['default_value']}"
           width="{$row['field_size']}" {($row['required'] == 1) ? 'required' : ''}
            {if isset($validation[$row['field_name']])}style="color: red;"{/if}
           value="{$validation_return[$row['field_name']]}"/>
</label>
