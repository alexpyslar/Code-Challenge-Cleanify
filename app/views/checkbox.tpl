<label for="{$row['field_name']}">
    {$row['field_label']}{if $row['required'] == 1}<span> *</span>{/if}
    <input type="checkbox" name="{$row['field_name']}" {($row['required'] == 1) ? 'required' : ''}
            checked="{$validation_return[$row['field_name']]}" />
</label>