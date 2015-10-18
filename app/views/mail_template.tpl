<div>
    Dear {$email_rows['first_name']} {$email_rows['last_name']},<br/>
    you've submitted form with next data:<br/>
    <ul>
        {if ($email_rows['first_name'] != '')}
            <li>First Name - {$email_rows['first_name']}</li>
        {/if}
        {if ($email_rows['last_name'] != '')}
            <li>Last Name - {$email_rows['last_name']}</li>
        {/if}
        {if ($email_rows['email'] != '')}
            <li>Email - {$email_rows['email']}</li>
        {/if}
        {if ($email_rows['city'] != '')}
            <li>City - {$email_rows['city']}</li>
        {/if}
        {if ($email_rows['state'] != '')}
            <li>State - {$email_rows['state']}</li>
        {/if}
        {if ($email_rows['zip_postal'] != '')}
            <li>Zip/Postal - {$email_rows['zip_postal']}</li>
        {/if}
        {if ($email_rows['phone'] != '')}
            <li>Phone - {$email_rows['phone']}</li>
        {/if}
        {if ($email_rows['fax'] != '')}
            <li>Fax - {$email_rows['fax']}</li>
        {/if}
        {if ($email_rows['best_time_to_contact'] != '')}
            {assign var='bttc' value=','|explode:'Morning,Afternoon,Evening'}
            <li>Best time to contact - {$bttc[$email_rows['best_time_to_contact']]}</li>
        {/if}
    </ul>
</div>