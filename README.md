# Laravel + Livewire + Tailwind: Example AdminPanel

This is a demo-project, fully generated by [QuickAdminPanel.com](https://quickadminpanel.com) without writing a single line of code.

In addition to roles/permissions manager, there are a few example CRUDs (Contact Management and Transactions)

For the design, we're using [Notus JS theme](https://www.creative-tim.com/product/notus-js) from Creative Tim.

- - - - -


## How to use

- Clone the repository with __git clone__
- Copy __.env.example__ file to __.env__ and edit database credentials there
- Run __composer install__
- Run __php artisan key:generate__
- Run __php artisan migrate --seed__ (it has some seeded data for your testing)
- That's it: launch the main URL. 
- You can login to adminpanel by going go `/login` URL and login with credentials __admin@admin.com__ - __password__
- run ___php artisan storage__
- Configure locale on __/admin_blog/setup__
- Click on ___SETUP PACKAGE__
