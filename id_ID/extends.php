<?php

return array(

        'extend' => 'Extend',

        'fields' => 'Custom Fields',
        'fields_desc' => 'Create additional fields',

        'variables' => 'Site Variables',
        'variables_desc' => 'Create additional metadata',

        'create_field' => 'Create a new field',
        'editing_custom_field' => 'Editing field &ldquo;%s&rdquo;',
        'nofields_desc' => 'No fields yet',

        'create_variable' => 'Tambah variabel baru',
        'editing_variable' => 'Editing variable &ldquo;%s&rdquo;',
        'novars_desc' => 'Tidak ada variabel',

        // form fields
        'type' => 'Tipe',
        'type_explain' => 'The type of content your want to add this field to.',

        'field' => 'Field',
        'field_explain' => 'Html input type',

        'key' => 'Unique Key',
        'key_explain' => 'The unique key for your field',
        'key_missing' => 'Please enter a unique key',
        'key_exists' => 'Key is already in use',

        'label' => 'Label',
        'label_explain' => 'Human readable name for your field',
        'label_missing' => 'Silahkan tulis label',

        'attribute_type' => 'Tipe berkas',
        'attribute_type_explain' => 'Comma separated list of accepted file types, empty to accept all.',

        // images
        'attributes_size_width' => 'Lebar maks. gambar',
        'attributes_size_width_explain' => 'Gambar akan menyesuaikan jika melebihi dari ukuran yang ditentukan',

        'attributes_size_height' => 'Tinggi maks. gambar',
        'attributes_size_height_explain' => 'Gambar akan menyesuaikan jika melebihi dari ukuran yang ditentukan',

        // custom vars
        'name' => 'Nama',
        'name_explain' => 'Nama unik',
        'name_missing' => 'Silahkan ketik nama unik',
        'name_exists' => 'Nama sudah digunakan',

        'value' => 'Value',
        'value_explain' => 'The data you want to store (up to 64kb)',
        'value_code_snipet' => 'Snippet to insert into your template:<br>
                <code>' . e('<?php echo site_meta(\'%s\'); ?>') . '</code>',

        // messages
        'variable_created' => 'Variabel anda telah ditambahkan',
        'variable_updated' => 'Variabel anda telah diperbaharui',
        'variable_deleted' => 'Variabel anda telah dihapus',

        'field_created' => 'Kolom anda telah dibuat',
        'field_updated' => 'Kolom anda telah diperbaharui',
        'field_deleted' => 'Kolom anda telah terhapus'

);
