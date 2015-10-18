<label for="{$row['field_name']}">
    {$row['field_label']}{if $row['required'] == 1}<span> *</span>{/if}
    {html_options name=$row['field_name'] options=explode(',',$row['default_value'])}
</label>