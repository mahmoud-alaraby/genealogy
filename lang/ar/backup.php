<?php

declare(strict_types=1);

return [
    // Labels
    'backup'  => 'نسخة احتياطية',
    'backups' => 'نسخ احتياطية',
    'no_data' => 'لا توجد نسخ احتياطية متاحة.',

    // Actions
    'create'        => 'نسخة احتياطية جديدة',
    'download'      => 'تحميل',
    'delete'        => 'حذف',
    'delete_backup' => 'هذه النسخة الاحتياطية',

    // Attributes
    'id'      => '#',
    'file'    => 'الملف',
    'size'    => 'الحجم',
    'date'    => 'التاريخ',
    'age'     => 'العمر',
    'actions' => 'الإجراءات',

    // Comments
    'backup_daily'  => 'يتم إنشاء النسخ الاحتياطية تلقائياً يومياً (في الساعة ' . config('app.backup.daily_run') . ').',
    'backup_email'  => 'سيتم إرسال بريد إلكتروني إلى عنوان بريد التطبيق بعد كل نسخة احتياطية.',
    'backup_cron_1' => 'يمكن أتمتة النسخ الاحتياطية (تشغيل يومي) من خلال إصدار مهمة cron التالية على خادم الإنتاج:',
    'backup_cron_2' => '* * * * * cd /path_to_your_application && php artisan schedule:run >> /dev/null 2>&1',

    // Messages
    'created'     => 'تم حفظ النسخة الاحتياطية الجديدة.',
    'deleted'     => 'تم الحذف.',
    'downloading' => 'تم بدء التحميل.',
    'failed'      => 'فشلت النسخة الاحتياطية.',
    'not_found'   => 'لم يتم العثور على النسخة الاحتياطية.',
];
