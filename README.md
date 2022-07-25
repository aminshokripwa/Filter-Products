# Filter Products With Laravel

Filter products imported from Excel to Laravel

## How to use

- Clone the repository with __git clone__
- Copy __.env.example__ file to __.env__ and edit database credentials there
- Run __composer install__
- Run __php artisan key:generate__
- Run __php artisan migrate --seed__
- Run __npm install__
- Run __npm run dev__
- Run __php artisan serve__
- That's it, load your main URL
- login as admin and upload servers_filters_assignment.xlsx

## Short stats of the dataset

| Name | Type | Values |
|  --- | --- | --- |
| Storage | Range slider | 0, 250GB, 500GB, 1TB, 2TB, 3TB, 4TB, 8TB, 12TB, 24TB, 48TB, 72TB |
| Ram | Checkboxes | 2GB, 4GB, 8GB, 12GB, 16GB, 24GB, 32GB, 48GB, 64GB, 96GB |
| Harddisk type | Dropdown | SAS, SATA, SSD |
| Location | Dropdown |	Refer to Location list |

## Admin

- Username : admin@admin.com
- Password : password
