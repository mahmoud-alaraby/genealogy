<?php

declare(strict_types=1);

return [

    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines contain the default error messages used by
    | the validator class. Some of these rules have multiple versions such
    | as the size rules. Feel free to tweak each of these messages here.
    |
    */

    'accepted'        => 'يجب قبول حقل :attribute.',
    'accepted_if'     => 'يجب قبول حقل :attribute عندما يكون :other هو :value.',
    'active_url'      => 'يجب أن يكون حقل :attribute عنوان URL صالح.',
    'after'           => 'يجب أن يكون حقل :attribute تاريخاً بعد :date.',
    'after_or_equal'  => 'يجب أن يكون حقل :attribute تاريخاً بعد أو يساوي :date.',
    'alpha'           => 'يجب أن يحتوي حقل :attribute على أحرف فقط.',
    'alpha_dash'      => 'يجب أن يحتوي حقل :attribute على أحرف وأرقام وشرطات وشرطات سفلية فقط.',
    'alpha_num'       => 'يجب أن يحتوي حقل :attribute على أحرف وأرقام فقط.',
    'array'           => 'يجب أن يكون حقل :attribute مصفوفة.',
    'ascii'           => 'يجب أن يحتوي حقل :attribute على أحرف أبجدية رقمية ورمزية أحادية البايت فقط.',
    'before'          => 'يجب أن يكون حقل :attribute تاريخاً قبل :date.',
    'before_or_equal' => 'يجب أن يكون حقل :attribute تاريخاً قبل أو يساوي :date.',
    'between'         => [
        'array'   => 'يجب أن يحتوي حقل :attribute على :min إلى :max عنصر.',
        'file'    => 'يجب أن يكون حقل :attribute بين :min و :max كيلوبايت.',
        'numeric' => 'يجب أن يكون حقل :attribute بين :min و :max.',
        'string'  => 'يجب أن يكون حقل :attribute بين :min و :max حرف.',
    ],
    'boolean'           => 'يجب أن يكون حقل :attribute صحيح أو خطأ.',
    'can'               => 'يحتوي حقل :attribute على قيمة غير مصرح بها.',
    'confirmed'         => 'تأكيد حقل :attribute غير متطابق.',
    'current_password'  => 'كلمة المرور غير صحيحة.',
    'date'              => 'يجب أن يكون حقل :attribute تاريخاً صالحاً.',
    'date_equals'       => 'يجب أن يكون حقل :attribute تاريخاً يساوي :date.',
    'date_format'       => 'يجب أن يطابق حقل :attribute التنسيق :format.',
    'decimal'           => 'يجب أن يحتوي حقل :attribute على :decimal منازل عشرية.',
    'declined'          => 'يجب رفض حقل :attribute.',
    'declined_if'       => 'يجب رفض حقل :attribute عندما يكون :other هو :value.',
    'different'         => 'يجب أن يكون حقل :attribute و :other مختلفين.',
    'digits'            => 'يجب أن يحتوي حقل :attribute على :digits رقم.',
    'digits_between'    => 'يجب أن يحتوي حقل :attribute على :min إلى :max رقم.',
    'dimensions'        => 'حقل :attribute له أبعاد صورة غير صالحة.',
    'distinct'          => 'حقل :attribute له قيمة مكررة.',
    'doesnt_end_with'   => 'يجب ألا ينتهي حقل :attribute بأي من التالي: :values.',
    'doesnt_start_with' => 'يجب ألا يبدأ حقل :attribute بأي من التالي: :values.',
    'email'             => 'يجب أن يكون حقل :attribute عنوان بريد إلكتروني صالح.',
    'ends_with'         => 'يجب أن ينتهي حقل :attribute بأي من التالي: :values.',
    'enum'              => 'الـ :attribute المحدد غير صالح.',
    'exists'            => 'الـ :attribute المحدد غير صالح.',
    'file'              => 'يجب أن يكون حقل :attribute ملفاً.',
    'filled'            => 'يجب أن يحتوي حقل :attribute على قيمة.',
    'gt'                => [
        'array'   => 'يجب أن يحتوي حقل :attribute على أكثر من :value عنصر.',
        'file'    => 'يجب أن يكون حقل :attribute أكبر من :value كيلوبايت.',
        'numeric' => 'يجب أن يكون حقل :attribute أكبر من :value.',
        'string'  => 'يجب أن يكون حقل :attribute أكبر من :value حرف.',
    ],
    'gte' => [
        'array'   => 'يجب أن يحتوي حقل :attribute على :value عنصر أو أكثر.',
        'file'    => 'يجب أن يكون حقل :attribute أكبر من أو يساوي :value كيلوبايت.',
        'numeric' => 'يجب أن يكون حقل :attribute أكبر من أو يساوي :value.',
        'string'  => 'يجب أن يكون حقل :attribute أكبر من أو يساوي :value حرف.',
    ],
    'image'     => 'يجب أن يكون حقل :attribute صورة.',
    'in'        => 'الـ :attribute المحدد غير صالح.',
    'in_array'  => 'يجب أن يوجد حقل :attribute في :other.',
    'integer'   => 'يجب أن يكون حقل :attribute رقماً صحيحاً.',
    'ip'        => 'يجب أن يكون حقل :attribute عنوان IP صالح.',
    'ipv4'      => 'يجب أن يكون حقل :attribute عنوان IPv4 صالح.',
    'ipv6'      => 'يجب أن يكون حقل :attribute عنوان IPv6 صالح.',
    'json'      => 'يجب أن يكون حقل :attribute سلسلة JSON صالحة.',
    'lowercase' => 'يجب أن يكون حقل :attribute بأحرف صغيرة.',
    'lt'        => [
        'array'   => 'يجب أن يحتوي حقل :attribute على أقل من :value عنصر.',
        'file'    => 'يجب أن يكون حقل :attribute أقل من :value كيلوبايت.',
        'numeric' => 'يجب أن يكون حقل :attribute أقل من :value.',
        'string'  => 'يجب أن يكون حقل :attribute أقل من :value حرف.',
    ],
    'lte' => [
        'array'   => 'يجب ألا يحتوي حقل :attribute على أكثر من :value عنصر.',
        'file'    => 'يجب أن يكون حقل :attribute أقل من أو يساوي :value كيلوبايت.',
        'numeric' => 'يجب أن يكون حقل :attribute أقل من أو يساوي :value.',
        'string'  => 'يجب أن يكون حقل :attribute أقل من أو يساوي :value حرف.',
    ],
    'mac_address' => 'يجب أن يكون حقل :attribute عنوان MAC صالح.',
    'max'         => [
        'array'   => 'يجب ألا يحتوي حقل :attribute على أكثر من :max عنصر.',
        'file'    => 'يجب ألا يكون حقل :attribute أكبر من :max كيلوبايت.',
        'numeric' => 'يجب ألا يكون حقل :attribute أكبر من :max.',
        'string'  => 'يجب ألا يكون حقل :attribute أكبر من :max حرف.',
    ],
    'max_digits' => 'يجب ألا يحتوي حقل :attribute على أكثر من :max رقم.',
    'mimes'      => 'يجب أن يكون حقل :attribute ملفاً من النوع: :values.',
    'mimetypes'  => 'يجب أن يكون حقل :attribute ملفاً من النوع: :values.',
    'min'        => [
        'array'   => 'يجب أن يحتوي حقل :attribute على :min عنصر على الأقل.',
        'file'    => 'يجب أن يكون حقل :attribute :min كيلوبايت على الأقل.',
        'numeric' => 'يجب أن يكون حقل :attribute :min على الأقل.',
        'string'  => 'يجب أن يكون حقل :attribute :min حرف على الأقل.',
    ],
    'min_digits'       => 'يجب أن يحتوي حقل :attribute على :min رقم على الأقل.',
    'missing'          => 'يجب أن يكون حقل :attribute مفقوداً.',
    'missing_if'       => 'يجب أن يكون حقل :attribute مفقوداً عندما يكون :other هو :value.',
    'missing_unless'   => 'يجب أن يكون حقل :attribute مفقوداً ما لم يكن :other هو :value.',
    'missing_with'     => 'يجب أن يكون حقل :attribute مفقوداً عندما يكون :values موجوداً.',
    'missing_with_all' => 'يجب أن يكون حقل :attribute مفقوداً عندما تكون :values موجودة.',
    'multiple_of'      => 'يجب أن يكون حقل :attribute مضاعفاً لـ :value.',
    'not_in'           => 'الـ :attribute المحدد غير صالح.',
    'not_regex'        => 'تنسيق حقل :attribute غير صالح.',
    'numeric'          => 'يجب أن يكون حقل :attribute رقماً.',
    'password'         => [
        'letters'       => 'يجب أن يحتوي حقل :attribute على حرف واحد على الأقل.',
        'mixed'         => 'يجب أن يحتوي حقل :attribute على حرف كبير وحرف صغير على الأقل.',
        'numbers'       => 'يجب أن يحتوي حقل :attribute على رقم واحد على الأقل.',
        'symbols'       => 'يجب أن يحتوي حقل :attribute على رمز واحد على الأقل.',
        'uncompromised' => 'الـ :attribute المعطى ظهر في خرق بيانات. يرجى اختيار :attribute مختلف.',
    ],
    'present'              => 'يجب أن يكون حقل :attribute موجوداً.',
    'prohibited'           => 'حقل :attribute محظور.',
    'prohibited_if'        => 'حقل :attribute محظور عندما يكون :other هو :value.',
    'prohibited_unless'    => 'حقل :attribute محظور ما لم يكن :other في :values.',
    'prohibits'            => 'حقل :attribute يمنع وجود :other.',
    'regex'                => 'تنسيق حقل :attribute غير صالح.',
    'required'             => 'حقل :attribute مطلوب.',
    'required_array_keys'  => 'يجب أن يحتوي حقل :attribute على إدخالات لـ: :values.',
    'required_if'          => 'حقل :attribute مطلوب عندما يكون :other هو :value.',
    'required_if_accepted' => 'حقل :attribute مطلوب عندما يتم قبول :other.',
    'required_unless'      => 'حقل :attribute مطلوب ما لم يكن :other في :values.',
    'required_with'        => 'حقل :attribute مطلوب عندما يكون :values موجوداً.',
    'required_with_all'    => 'حقل :attribute مطلوب عندما تكون :values موجودة.',
    'required_without'     => 'حقل :attribute مطلوب عندما لا يكون :values موجوداً.',
    'required_without_all' => 'حقل :attribute مطلوب عندما لا تكون أي من :values موجودة.',
    'same'                 => 'يجب أن يطابق حقل :attribute :other.',
    'size'                 => [
        'array'   => 'يجب أن يحتوي حقل :attribute على :size عنصر.',
        'file'    => 'يجب أن يكون حقل :attribute :size كيلوبايت.',
        'numeric' => 'يجب أن يكون حقل :attribute :size.',
        'string'  => 'يجب أن يكون حقل :attribute :size حرف.',
    ],
    'starts_with' => 'يجب أن يبدأ حقل :attribute بأي من التالي: :values.',
    'string'      => 'يجب أن يكون حقل :attribute سلسلة نصية.',
    'timezone'    => 'يجب أن يكون حقل :attribute منطقة زمنية صالحة.',
    'unique'      => 'تم أخذ :attribute بالفعل.',
    'uploaded'    => 'فشل رفع :attribute.',
    'uppercase'   => 'يجب أن يكون حقل :attribute بأحرف كبيرة.',
    'url'         => 'يجب أن يكون حقل :attribute عنوان URL صالح.',
    'ulid'        => 'يجب أن يكون حقل :attribute ULID صالح.',
    'uuid'        => 'يجب أن يكون حقل :attribute UUID صالح.',

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | Here you may specify custom validation messages for attributes using the
    | convention "attribute.rule" to name the lines. This makes it quick to
    | specify a specific custom language line for a given attribute rule.
    |
    */

    'surname.required_without'   => 'عند إضافة شخص جديد، الاسم الأخير مطلوب.',
    'sex.required_without'       => 'عند إضافة شخص جديد، يجب تحديد الجنس.',
    'person_id.required_without' => 'عند إضافة شخص موجود، يجب اختيار شخص.',

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | The following language lines are used to swap attribute place-holders
    | with something more reader friendly such as E-Mail Address instead
    | of "email". This simply helps us make messages a little cleaner.
    |
    */

    'attributes' => [],
];
